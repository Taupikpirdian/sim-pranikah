<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kua;

class DetailKuaController extends Controller
{
    public function index($id)
    {
        $kua = Kua::where('id', $id)->firstOrFail();   
        return view('kua-detail', compact('kua'));
    }
}
