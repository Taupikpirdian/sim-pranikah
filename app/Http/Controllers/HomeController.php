<?php

namespace App\Http\Controllers;

use Auth;
use App\Slider;
use App\TentangKami;
use App\Berita;
use App\User;
use App\Galeri;
use App\Kua;
use App\Puskesmas;
use App\Bkkbn;
use App\Sambutan;
use App\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $slider = Slider::orderBy('created_at', 'desc')->limit(3)->get();
        $about = TentangKami::orderBy('created_at', 'desc')->limit(1)->get();
        $news = Berita::leftjoin('users', 'users.id', '=', 'beritas.user_id')
        ->orderBy('beritas.created_at', 'desc')
        ->select(
                'users.name',
                'beritas.*'
                )
        ->limit(3)
        ->get();
        $galery = Galeri::orderBy('created_at', 'desc')->limit(12)->get();
        $kua = Kua::orderBy('created_at', 'desc')->limit(1)->get();
        $puskesmas = Puskesmas::orderBy('created_at', 'desc')->limit(1)->get();
        $bkkbn = Bkkbn::orderBy('created_at', 'desc')->limit(1)->get();
        $sambutan = Sambutan::orderBy('created_at', 'desc')->limit(1)->get();
        $testimony = Testimoni::orderBy('created_at', 'desc')->limit(6)->get();
        return view('home',compact('slider', 'about', 'news', 'galery', 'kua', 'puskesmas', 'bkkbn', 'sambutan', 'testimony'), array('user' => $user));
    }

    public function detailSlider($id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();   
        return view('detail-slider', compact('slider'));
    }
}
