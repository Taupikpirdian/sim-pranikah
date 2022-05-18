<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\Sambutan;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SambutanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sambutan = Sambutan::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.sambutan.list',array('sambutan'=>$sambutan, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.sambutan.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $sambutan = new Sambutan;
        $sambutan->title     = Input::get('title');
        $sambutan->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
	        $imageName = time().'.'.$img->getClientOriginalExtension();
	        //thumbs
	        $destinationPath = public_path('images/sambutans/thumbs');
	        if(!File::exists($destinationPath)){
	            if(File::makeDirectory($destinationPath,0777,true)){
	                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
	            }
	        }
	        $img = Image::make($img->getRealPath());
	        $img->save($destinationPath.'/'.$imageName);
	        //original
	        $destinationPath = public_path('images/sambutans');
	        $img = Image::make($img)->encode('jpg', 50);
	        $img->save($destinationPath.'/'.$imageName);
	        //save data image to db
	        $sambutan->img = $imageName;
    	}

        $sambutan->save();
        // redirect
        return Redirect::action('admin\SambutanController@index')->with('flash-success','The user has been added.');
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
        $sambutan = Sambutan::where('id', $id)->firstOrFail();   
        return view('admin.sambutan.show', compact('sambutan'),array('user' => $user));
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
        $sambutan = Sambutan::where('id', $id)->firstOrFail();   
        return view('admin.sambutan.edit', compact('sambutan'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $sambutan = Sambutan::findOrFail($id);
        $sambutan->title     = Input::get('title');
        $sambutan->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/sambutans/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/sambutans');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $sambutan->img = $imageName;
        }
        
        $sambutan->save();
        return Redirect::action('admin\SambutanController@index', compact('sambutan'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $sambutan = Sambutan::where('id', $id)->firstOrFail();
        $sambutan->delete();
        return Redirect::action('admin\SambutanController@index');
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
        $sambutan = Sambutan::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.sambutan.list', compact('sambutan'),array('user' => $user));
    }
}
