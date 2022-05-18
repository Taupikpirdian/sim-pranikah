<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kalender;
use Auth;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class KalenderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kalenders = Kalender::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.kalender.list',array('kalenders'=>$kalenders, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.kalender.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $kalender = new Kalender;
        $kalender->start     = Input::get('start');
        $kalender->end       = Input::get('end');
        $kalender->title     = Input::get('title');
        $kalender->desc      = Input::get('desc');
        $kalender->save();
        // redirect
        return Redirect::action('admin\KalenderController@index')->with('flash-success','The user has been added.');
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
        $kalender = Kalender::where('id', $id)->firstOrFail();   
        return view('admin.kalender.show', compact('kalender'),array('user' => $user));
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
        $kalender = Kalender::where('id', $id)->firstOrFail();   
        return view('admin.kalender.edit', compact('kalender'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $kalender = Kalender::findOrFail($id);
        $kalender->start     = Input::get('start');
        $kalender->end       = Input::get('end');
        $kalender->title     = Input::get('title');
        $kalender->desc      = Input::get('desc');        
        $kalender->save();
        return Redirect::action('admin\KalenderController@index', compact('kalender'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $kalender = Kalender::where('id', $id)->firstOrFail();
        $kalender->delete();
        return Redirect::action('admin\KalenderController@index');
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
        $kalender = Kalender::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.kalender.list', compact('kalender'),array('user' => $user));
    }
}
