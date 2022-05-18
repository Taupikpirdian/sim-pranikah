<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sambutan;

class KonselingPranikahController extends Controller
{
    public function index($id)
    {
        $sambutan = Sambutan::where('id', $id)->firstOrFail();   
        return view('konselingpranikah', compact('sambutan'));
    }

    public function detail()
    {
        $sambutan = Sambutan::firstOrFail();   
        return view('konselingpranikah', compact('sambutan'));
    }
}
