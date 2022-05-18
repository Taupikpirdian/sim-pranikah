<?php

namespace App\Http\Controllers;

use Auth;
use App\Catin;
use App\Biodata;
use App\N1Formulir;
use App\N7Formulir;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      $user = Auth::user();
      if (Auth::check()) {
        $jumlah_data_catin_master = Catin::count();
        return view('admin.admin', compact('jumlah_data_catin_master'), array('user' => $user));
      }
        return view('auth.login');
    }

    public function cetakDataCatin($id)
    {
      $user = Auth::user();
      $biodata = Catin::where('id', $id)->firstOrFail();
      return view('admin.masterdatacatin.cetak', compact('biodata'));
    }

    public function kelengkapanCatin($id)
    {
        $biodatas = Catin::where('id', $id)->firstOrFail();
        $jk = array(
            'L'     => 'Laki-Laki',
            'P'     => 'Perempuan'
        );
        // percobaan kondisi jika ada data
        // $n1formulirs = Biodata::orderBy('created_at', 'desc')->get();
        // foreach ($biodatas as $key => $biodata) {
        //     echo "<pre>";
        //     print_r($biodatas->biodataCpp->n7Formulir);
        //     echo "</pre>";
        //     exit();
        //     # code...
        // }

        if($biodatas->biodataCpp->n1Formulir){
          $is_cpp_submitted = true;
        }else{
          $is_cpp_submitted = false;
        }
        
        if($biodatas->biodataCpw->n1Formulir){
          $is_cpw_submitted = true;
        }else{
          $is_cpw_submitted = false;
        }

        if($biodatas->biodataCpp->n4Formulir){
          $is_cpp_n4_submitted = true;
        }else{
          $is_cpp_n4_submitted = false;
        }

        if($biodatas->biodataCpw->n4Formulir){
          $is_cpw_n4_submitted = true;
        }else{
          $is_cpw_n4_submitted = false;
        }

        if($biodatas->biodataCpp->n7Formulir){
          $is_n7_submitted = true;
        }else{
          $is_n7_submitted = false;
        }

        return view('admin.kelengkapan-catin', compact('jk', 'biodatas', 'is_cpp_submitted', 'is_cpw_submitted', 'is_cpp_n4_submitted', 'is_cpw_n4_submitted', 'is_n7_submitted'));
    }
}
