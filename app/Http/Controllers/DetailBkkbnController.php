<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bkkbn;

class DetailBkkbnController extends Controller
{
    public function index($id)
    {
        $bkkbn = Bkkbn::where('id', $id)->firstOrFail();   
        return view('bkkbn-detail', compact('bkkbn'));
    }
}
