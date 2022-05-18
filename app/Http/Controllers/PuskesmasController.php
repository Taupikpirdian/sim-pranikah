<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puskesmas;

class PuskesmasController extends Controller
{
    public function index($id)
    {
        $puskesmas = Puskesmas::where('id', $id)->firstOrFail();   
        return view('puskesmas-detail', compact('puskesmas'));
    }
}
