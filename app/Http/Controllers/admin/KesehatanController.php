<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use View;
use Image;
use File;
use App\Catin;
use App\Kesehatan;

class KesehatanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $catins = Catin::orderBy('created_at', 'desc')->get();
        return view('admin.kesehatan.index',array('catins'=>$catins, 'user' => $user));
    } 

    public function newCheck($id)
    {
        $user = Auth::user();
        $catin = Catin::where('id', $id)->firstOrFail();   
        $biodata = Catin::where('id', $id)->first();
        $type = array(
            '0'     => 'Tidak',
            '1'     => 'Iya',
        );

        $goldar = array(
            'A'     => 'A',
            'B'     => 'B',
            'AB'    => 'AB',
            'O'     => 'O',
        );
        return view('admin.kesehatan.new_check', compact('catin', 'biodata', 'type', 'goldar'),array('user' => $user));
    }

    public function newCheckCpw($id)
    {
        $user = Auth::user();
        $catin = Catin::where('id', $id)->firstOrFail();  
        $biodata = Catin::where('id', $id)->first();
        $type = array(
            '0'     => 'Tidak',
            '1'     => 'Iya',
        );

        $goldar = array(
            'A'     => 'A',
            'B'     => 'B',
            'AB'    => 'AB',
            'O'     => 'O',
        );
        return view('admin.kesehatan.new_check_cpw', compact('catin', 'biodata', 'type', 'goldar'),array('user' => $user));
    }

    public function store(Request $request, $id)
    {
        $kesehatan = new Kesehatan;
        $kesehatan->catin_id        = $id;
        if(Input::get('biodata_id')){
            $kesehatan->biodata_id      = Input::get('biodata_id');
            $kesehatan->tipe_data_id    = 1;
        }elseif(Input::get('biodata_id_cpw')){
            $kesehatan->biodata_id      = Input::get('biodata_id_cpw');
            $kesehatan->tipe_data_id    = 2;
        }
        $kesehatan->name            = Input::get('name');
        $kesehatan->cek_narkoba     = Input::get('cek_narkoba');
        $kesehatan->cek_cacat_badan = Input::get('cek_cacat_badan');
        $kesehatan->cek_buta_warna  = Input::get('cek_buta_warna');
        $kesehatan->td              = Input::get('td');
        $kesehatan->tb              = Input::get('tb');
        $kesehatan->bb              = Input::get('bb');
        $kesehatan->goldar          = Input::get('goldar');
        $kesehatan->kecamatan       = Input::get('kecamatan');
        $kesehatan->kelurahan       = Input::get('kelurahan');
        $kesehatan->ket             = Input::get('ket');
        $kesehatan->save();
        return Redirect::action('admin\KesehatanController@index')->with('flash-update','Data berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        $kesehatan = Kesehatan::where('id', $id)->first();  

        if(Input::get('biodata_id')){
            $kesehatan->biodata_id      = Input::get('biodata_id');
            $kesehatan->tipe_data_id    = 1;
        }elseif(Input::get('biodata_id_cpw')){
            $kesehatan->biodata_id      = Input::get('biodata_id_cpw');
            $kesehatan->tipe_data_id    = 2;
        }

        $kesehatan->name            = Input::get('name');
        $kesehatan->cek_narkoba     = Input::get('cek_narkoba');
        $kesehatan->cek_cacat_badan = Input::get('cek_cacat_badan');
        $kesehatan->cek_buta_warna  = Input::get('cek_buta_warna');
        $kesehatan->td              = Input::get('td');
        $kesehatan->tb              = Input::get('tb');
        $kesehatan->bb              = Input::get('bb');
        $kesehatan->goldar          = Input::get('goldar');
        $kesehatan->kecamatan       = Input::get('kecamatan');
        $kesehatan->kelurahan       = Input::get('kelurahan');
        $kesehatan->ket             = Input::get('ket');
        $kesehatan->save();

        return Redirect::action('admin\KesehatanController@index')->with('flash-update','Data berhasil disimpan.');
    }

    public function print($id)
    { 
      $biodata = Catin::where('id', $id)->first();
      $now = \Carbon::now(); // Tanggal sekarang
      $b_day_cpp = \Carbon::parse($biodata->biodataCpp->tanggal_lahir); // Tanggal Lahir
      $b_day_cpw = \Carbon::parse($biodata->biodataCpw->tanggal_lahir); // Tanggal Lahir
      $age_cpp = $b_day_cpp->diffInYears($now);  // Menghitung umur
      $age_cpw = $b_day_cpw->diffInYears($now);  // Menghitung umur

      $kesehatan = Kesehatan::where('catin_id', $id)->first();
      
    //   echo "<pre>";
    //   print_r($biodata->kesehatanCpp);
    //   echo "</pre>";
    //   exit();
      return view('admin.kesehatan.surat-sehat', compact('biodata', 'age_cpp', 'age_cpw', 'kesehatan'));
    }
}
