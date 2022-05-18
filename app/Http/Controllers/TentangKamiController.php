<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TentangKami;

class TentangKamiController extends Controller
{
    public function index()
    {
        $about = TentangKami::firstOrFail();   
        return view('tentang-kami', compact('about'));
    }

    public function detail($id)
    {
        $about = TentangKami::where('id', $id)->firstOrFail();   
        return view('tentang-kami', compact('about'));
    }
}
