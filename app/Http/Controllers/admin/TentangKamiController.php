<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\TentangKami;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TentangKamiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $about = TentangKami::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.tentang_kami.list',array('about'=>$about, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.tentang_kami.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $about = new TentangKami;
        $about->title     = Input::get('title');
        $about->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        $imageName = time().'.'.$img->getClientOriginalExtension();
        //thumbs
        $destinationPath = public_path('images/abouts/thumbs');
        if(!File::exists($destinationPath)){
            if(File::makeDirectory($destinationPath,0777,true)){
                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
            }
        }
        $img = Image::make($img->getRealPath());
        $img->save($destinationPath.'/'.$imageName);
        //original
        $destinationPath = public_path('images/abouts');
        $img = Image::make($img)->encode('jpg', 50);
        $img->save($destinationPath.'/'.$imageName);
        //save data image to db
        $about->img = $imageName;

        $about->save();
        // redirect
        return Redirect::action('admin\TentangKamiController@index')->with('flash-success','The user has been added.');
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
        $about = TentangKami::where('id', $id)->firstOrFail();   
        return view('admin.tentang_kami.show', compact('about'),array('user' => $user));
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
        $about = TentangKami::where('id', $id)->firstOrFail();   
        return view('admin.tentang_kami.edit', compact('about'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $about = TentangKami::findOrFail($id);
        $about->title     = Input::get('title');
        $about->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/abouts/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/abouts');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $about->img = $imageName;
        }
        
        $about->save();
        return Redirect::action('admin\TentangKamiController@index', compact('about'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $about = TentangKami::where('id', $id)->firstOrFail();
        $about->delete();
        return Redirect::action('admin\TentangKamiController@index');
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
        $about = TentangKami::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.about.list', compact('about'),array('user' => $user));
    }
}
