<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kontak;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class KontakController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kontaks = Kontak::orderBy('created_at', 'desc')
        ->paginate(25);
        return view('admin.kontak.list',array('kontaks'=>$kontaks, 'user' => $user));
    }

    public function destroy($id)
    {
        $kontak = Kontak::where('id', $id)->firstOrFail();
        $kontak->delete();
        return Redirect::action('admin\KontakController@index');
    }

    public function show($id)
    {
        $user = Auth::user();
        $kontak = Kontak::where('id', $id)->firstOrFail();
        return view('admin.kontak.show', compact('kontak'),array('user' => $user));
    }
}
