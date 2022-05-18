<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Slider;
use File;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Image;


class SliderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $slider = Slider::orderBy('created_at', 'desc')->get();
        return view('admin.slider.list',array('slider'=>$slider, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.slider.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $slider = new Slider;
        $slider->title     = Input::get('title');
        $slider->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        $imageName = time().'.'.$img->getClientOriginalExtension();
        //thumbs
        $destinationPath = public_path('images/sliders/thumbs');
        if(!File::exists($destinationPath)){
            if(File::makeDirectory($destinationPath,0777,true)){
                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
            }
        }
        $img = Image::make($img->getRealPath());
        $img->save($destinationPath.'/'.$imageName);
        //original
        $destinationPath = public_path('images/sliders');
        $img = Image::make($img)->encode('jpg', 50);
        $img->save($destinationPath.'/'.$imageName);
        //save data image to db
        $slider->img = $imageName;

        $slider->save();
        // redirect
        return Redirect::action('admin\SliderController@index')->with('flash-success','The user has been added.');
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
        $slider = Slider::where('id', $id)->firstOrFail();   
        return view('admin.slider.show', compact('slider'),array('user' => $user));
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
        $slider = Slider::where('id', $id)->firstOrFail();   
        return view('admin.slider.edit', compact('slider'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->title     = Input::get('title');
        $slider->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/sliders/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/sliders');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $slider->img = $imageName;
        }
        
        $slider->save();
        return Redirect::action('admin\SliderController@index', compact('slider'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();
        $slider->delete();
        return Redirect::action('admin\SliderController@index');
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
        $slider = Slider::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.slider.list', compact('slider'),array('user' => $user));
    }
}