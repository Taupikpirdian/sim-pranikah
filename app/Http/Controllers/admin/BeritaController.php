<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\Berita;
use App\User; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class BeritaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $news = Berita::leftjoin('users', 'users.id', '=', 'beritas.user_id')
        ->orderBy('beritas.created_at', 'desc')
        ->select(
                'users.name',
                'beritas.*'
                )
        ->paginate(25);
        return view('admin.berita.list',array('news'=>$news, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.berita.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $user = Auth::user();
        $news = new Berita;
        $news->title     = Input::get('title');
        $news->desc      = Input::get('desc');
        $news->user_id   = $user->id;
        // addfoto
        $img = $request->file('img');
        $imageName = time().'.'.$img->getClientOriginalExtension();
        //thumbs
        $destinationPath = public_path('images/news/thumbs');
        if(!File::exists($destinationPath)){
            if(File::makeDirectory($destinationPath,0777,true)){
                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
            }
        }
        $img = Image::make($img->getRealPath());
        $img->save($destinationPath.'/'.$imageName);
        //original
        $destinationPath = public_path('images/news');
        $img = Image::make($img)->encode('jpg', 50);
        $img->save($destinationPath.'/'.$imageName);
        //save data image to db
        $news->img = $imageName;

        $news->save();
        // redirect
        return Redirect::action('admin\BeritaController@index')->with('flash-success','The user has been added.');
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
        $news = Berita::leftjoin('users', 'users.id', '=', 'beritas.user_id')
        ->orderBy('beritas.created_at', 'desc')
        ->select(
                'users.name',
                'beritas.*'
                )
        ->where('beritas.id', $id)
        ->firstOrFail();
        return view('admin.berita.show', compact('news'),array('user' => $user));
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
        $news = Berita::where('id', $id)->firstOrFail();   
        return view('admin.berita.edit', compact('news'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $news = Berita::findOrFail($id);
        $news->title     = Input::get('title');
        $news->desc      = Input::get('desc');
        $news->user_id   = $user->id;
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/news/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/news');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $news->img = $imageName;
        }
        
        $news->save();
        return Redirect::action('admin\BeritaController@index', compact('news'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $news = Berita::where('id', $id)->firstOrFail();
        $news->delete();
        return Redirect::action('admin\BeritaController@index');
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
        $news = Berita::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.news.list', compact('news'),array('user' => $user));
    }
}
