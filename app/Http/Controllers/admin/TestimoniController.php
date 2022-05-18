<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\Testimoni;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class TestimoniController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $testimony = Testimoni::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.testimoni.list',array('testimony'=>$testimony, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.testimoni.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $testimony = new Testimoni;
        $testimony->title     = Input::get('title');
        $testimony->desc      = Input::get('desc');
        $testimony->save();
        // redirect
        return Redirect::action('admin\TestimoniController@index')->with('flash-success','The user has been added.');
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
        $testimony = Testimoni::where('id', $id)->firstOrFail();   
        return view('admin.testimoni.show', compact('testimony'),array('user' => $user));
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
        $testimony = Testimoni::where('id', $id)->firstOrFail();   
        return view('admin.testimoni.edit', compact('testimony'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $testimony = Testimoni::findOrFail($id);
        $testimony->title     = Input::get('title');
        $testimony->desc      = Input::get('desc');
        $testimony->save();
        return Redirect::action('admin\TestimoniController@index', compact('testimony'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $testimony = Testimoni::where('id', $id)->firstOrFail();
        $testimony->delete();
        return Redirect::action('admin\TestimoniController@index');
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
        $testimony = Testimoni::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.testimony.list', compact('testimony'),array('user' => $user));
    }
}
