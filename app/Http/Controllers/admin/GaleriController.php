<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\Galeri;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class GaleriController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $galery = Galeri::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.galeri.list',array('galery'=>$galery, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.galeri.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $galery = new Galeri;
        // addfoto
        $img = $request->file('img');
        $imageName = time().'.'.$img->getClientOriginalExtension();
        //thumbs
        $destinationPath = public_path('images/galeries/thumbs');
        if(!File::exists($destinationPath)){
            if(File::makeDirectory($destinationPath,0777,true)){
                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
            }
        }
        $img = Image::make($img->getRealPath());
        $img->save($destinationPath.'/'.$imageName);
        //original
        $destinationPath = public_path('images/galeries');
        $img = Image::make($img)->encode('jpg', 50);
        $img->save($destinationPath.'/'.$imageName);
        //save data image to db
        $galery->img = $imageName;

        $galery->save();
        // redirect
        return Redirect::action('admin\GaleriController@index')->with('flash-success','The user has been added.');
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
        $galery = Galeri::where('id', $id)->firstOrFail();   
        return view('admin.galeri.show', compact('galery'),array('user' => $user));
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
        $galery = Galeri::where('id', $id)->firstOrFail();   
        return view('admin.galeri.edit', compact('galery'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $galery = Galeri::findOrFail($id);
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/galeries/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/galeries');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $galery->img = $imageName;
        }
        
        $galery->save();
        return Redirect::action('admin\GaleriController@index', compact('galery'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $galery = Galeri::where('id', $id)->firstOrFail();
        $galery->delete();
        return Redirect::action('admin\GaleriController@index');
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
        $galery = Galeri::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.galery.list', compact('galery'),array('user' => $user));
    }
}
