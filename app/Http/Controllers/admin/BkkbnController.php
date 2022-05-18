<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\Bkkbn;
use App\Catin;
use App\SertifikatBkkbn;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class BkkbnController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bkkbn = Bkkbn::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.bkkbn.list',array('bkkbn'=>$bkkbn, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.bkkbn.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $bkkbn = new Bkkbn;
        $bkkbn->title     = Input::get('title');
        $icon             = $request->file('icon');
        // add icon
        $imageName = time().'.'.$icon->getClientOriginalExtension();
        //thumbs
        $destinationPath = public_path('images/icon/bkkbns/thumbs');
        if(!File::exists($destinationPath)){
            if(File::makeDirectory($destinationPath,0777,true)){
                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
            }
        }
        $icon = Image::make($icon->getRealPath());
        $icon->save($destinationPath.'/'.$imageName);
        //original
        $destinationPath = public_path('images/icon/bkkbns');
        $icon = Image::make($icon)->encode('jpg', 50);
        $icon->save($destinationPath.'/'.$imageName);
        //save data image to db
        $bkkbn->icon = $imageName;

        $bkkbn->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
	        $imageName = time().'.'.$img->getClientOriginalExtension();
	        //thumbs
	        $destinationPath = public_path('images/bkkbns/thumbs');
	        if(!File::exists($destinationPath)){
	            if(File::makeDirectory($destinationPath,0777,true)){
	                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
	            }
	        }
	        $img = Image::make($img->getRealPath());
	        $img->save($destinationPath.'/'.$imageName);
	        //original
	        $destinationPath = public_path('images/bkkbns');
	        $img = Image::make($img)->encode('jpg', 50);
	        $img->save($destinationPath.'/'.$imageName);
	        //save data image to db
	        $bkkbn->img = $imageName;
    	}

        $bkkbn->save();
        // redirect
        return Redirect::action('admin\BkkbnController@index')->with('flash-success','The user has been added.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user = Auth::user();
        $bkkbn = Bkkbn::where('id', $id)->firstOrFail();   
        return view('admin.bkkbn.show', compact('bkkbn'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = Auth::user();
        $bkkbn = Bkkbn::where('id', $id)->firstOrFail();   
        return view('admin.bkkbn.edit', compact('bkkbn'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $bkkbn = Bkkbn::findOrFail($id);
        $bkkbn->title     = Input::get('title');
        $icon             = $request->file('icon');
        // add icon
        if($icon){
            $imageName = time().'.'.$icon->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/icon/bkkbns/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $icon = Image::make($icon->getRealPath());
            $icon->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/icon/bkkbns');
            $icon = Image::make($icon)->encode('jpg', 50);
            $icon->save($destinationPath.'/'.$imageName);
            //save data image to db
            $bkkbn->icon = $imageName;
        }
        
        $bkkbn->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/bkkbns/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/bkkbns');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $bkkbn->img = $imageName;
        }
        
        $bkkbn->save();
        return Redirect::action('admin\BkkbnController@index', compact('bkkbn'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $bkkbn = Bkkbn::where('id', $id)->firstOrFail();
        $bkkbn->delete();
        return Redirect::action('admin\BkkbnController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){
        $user = Auth::user();
        $search = $request->get('search');
        $bkkbn = Bkkbn::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.bkkbn.list', compact('bkkbn'),array('user' => $user));
    }

    public function cek()
    {
        $user = Auth::user();
        $catins = Catin::orderBy('created_at', 'desc')->get();
        return view('admin.bkkbn.cek',array('catins'=>$catins, 'user' => $user));
    } 

    public function cekList($id)
    {
        $user = Auth::user();
        $biodata  = Catin::orderBy('created_at', 'desc')->first();

        $status_cpp = SertifikatBkkbn::where('catin_id', $id)
        ->where('status', "CPP Sertifikat")->first();
        
        $status_cpw = SertifikatBkkbn::where('catin_id', $id)
        ->where('status', "CPW Sertifikat")->first();

        return view('admin.bkkbn.ceklist',compact('biodata', 'status_cpp', 'status_cpw'), array('user' => $user));
    }  

    public function paraf(Request $request)
    {
        $user = Auth::user();
        $status_cpp     = Input::get('status_cpp');
        $status_cpw     = Input::get('status_cpw');

        if($status_cpp){
            $paraf = new SertifikatBkkbn;
            $paraf->catin_id         = Input::get('catin_id');
            $paraf->biodata_id       = Input::get('biodata_cpp_id');
            $paraf->status           = $status_cpp;
            $paraf->save();
        }

        if($status_cpw){
            $paraf = new SertifikatBkkbn;
            $paraf->catin_id         = Input::get('catin_id');
            $paraf->biodata_id       = Input::get('biodata_cpw_id');
            $paraf->status           = $status_cpw;
            $paraf->save();
        }

        return Redirect::back()->withErrors(['Data berhasil diparaf', 'The Message']);
    }

    public function sertifikatCpp()
    {
        $user = Auth::user();
        $biodata = Catin::orderBy('created_at', 'desc')->first();
        return view('admin.bkkbn.sertifikatCpp',array('biodata'=>$biodata, 'user' => $user));
    } 

    public function sertifikatCpw($id)
    {
        $user = Auth::user();
        $biodata = Catin::orderBy('created_at', 'desc')->first();
        return view('admin.bkkbn.sertifikatCpw',array('biodata'=>$biodata, 'user' => $user));
    }  
}
