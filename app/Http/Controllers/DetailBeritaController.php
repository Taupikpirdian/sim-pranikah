<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class DetailBeritaController extends Controller
{
    public function index($id)
    {
        $berita = Berita::where('id', $id)->firstOrFail();   
        return view('berita-detail', compact('berita'));
    }
}
