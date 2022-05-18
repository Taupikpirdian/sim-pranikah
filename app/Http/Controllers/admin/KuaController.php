<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\Kua;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class KuaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kua = Kua::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.kua.list',array('kua'=>$kua, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.kua.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $kua = new Kua;
        $kua->title     = Input::get('title');
        // add icon
        $icon            = $request->file('icon');
        $imageName = time().'.'.$icon->getClientOriginalExtension();
        //thumbs
        $destinationPath = public_path('images/icon/kuas/thumbs');
        if(!File::exists($destinationPath)){
            if(File::makeDirectory($destinationPath,0777,true)){
                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
            }
        }
        $icon = Image::make($icon->getRealPath());
        $icon->save($destinationPath.'/'.$imageName);
        //original
        $destinationPath = public_path('images/icon/kuas');
        $icon = Image::make($icon)->encode('jpg', 50);
        $icon->save($destinationPath.'/'.$imageName);
        //save data image to db
        $kua->icon = $imageName;

        $kua->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/kuas/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/kuas');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $kua->img = $imageName;
        }

        $kua->save();
        // redirect
        return Redirect::action('admin\KuaController@index')->with('flash-success','The user has been added.');
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
        $kua = Kua::where('id', $id)->firstOrFail();   
        return view('admin.kua.show', compact('kua'),array('user' => $user));
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
        $kua = Kua::where('id', $id)->firstOrFail();   
        return view('admin.kua.edit', compact('kua'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $kua = Kua::findOrFail($id);
    		$kua->title     = Input::get('title');
        // add icon
        $icon            = $request->file('icon');
        if($icon){
          $imageName = time().'.'.$icon->getClientOriginalExtension();
          //thumbs
          $destinationPath = public_path('images/icon/kuas/thumbs');
          if(!File::exists($destinationPath)){
              if(File::makeDirectory($destinationPath,0777,true)){
                  throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
              }
          }
          $icon = Image::make($icon->getRealPath());
          $icon->save($destinationPath.'/'.$imageName);
          //original
          $destinationPath = public_path('images/icon/kuas');
          $icon = Image::make($icon)->encode('jpg', 50);
          $icon->save($destinationPath.'/'.$imageName);
          //save data image to db
          $kua->icon = $imageName;
        }

        $kua->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/kuas/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/kuas');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $kua->img = $imageName;
        }
        
        $kua->save();
        return Redirect::action('admin\KuaController@index', compact('kua'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $kua = Kua::where('id', $id)->firstOrFail();
        $kua->delete();
        return Redirect::action('admin\KuaController@index');
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
        $kua = Kua::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.kua.list', compact('kua'),array('user' => $user));
    }
}
