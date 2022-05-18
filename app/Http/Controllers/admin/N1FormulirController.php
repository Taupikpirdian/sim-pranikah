<?php

namespace App\Http\Controllers\admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\N1Formulir;
use App\Catin;
use PDF;

class N1FormulirController extends Controller
{
    public function create($id)
    { 
    $user = Auth::user();
    $biodatas = Catin::where('id', $id)->firstOrFail();
    
      // echo "<pre>";
      // print_r($biodatas->biodataCpp);
      // echo "</pre>";
      // exit();
      
      if(!$biodatas->biodataCpp->n1Formulir){
        return view('admin.formulirn1.create', compact('biodatas'));
      }else{
        return view('admin.formulirn1.edit', compact('biodatas'));
      }
    }

    public function createCpw($id)
    { 
        $user = Auth::user();
        $biodatas = Catin::where('id', $id)->firstOrFail();
        
        if(!$biodatas->biodataCpw->n1Formulir){
          return view('admin.formulirn1.create_cpw', compact('biodatas'));
        }else{
          return view('admin.formulirn1.edit_cpw', compact('biodatas'));
        }
    }

    public function store(Request $request)
	{
	    $n1_formulir = new N1Formulir;
	    if(Input::get('id_cpp')){
		    $n1_formulir->biodata_id      		= Input::get('id_cpp');
	    }elseif(Input::get('id_cpw')){
		    $n1_formulir->biodata_id      		= Input::get('id_cpw');
      }
      
	    $n1_formulir->tipe_data_id    		  = Input::get('tipe_data_id');
	    $n1_formulir->bin_binti       		  = Input::get('bin_binti');
	    $n1_formulir->desa       	  		    = Input::get('desa');
	    $n1_formulir->kecamatan       	  	= Input::get('kecamatan');
	    $n1_formulir->kabupaten       	  	= Input::get('kabupaten');
	    $n1_formulir->nomor_surat       	  = Input::get('nomor_surat');
	    $n1_formulir->status_pernikahan     = Input::get('status_pernikahan');
	    $n1_formulir->nama_mantan_pasangan  = Input::get('nama_mantan_pasangan');
	    $n1_formulir->kota_pembuatan       	= Input::get('kota_pembuatan');
	    $n1_formulir->tanggal_pembuatan     = Input::get('tanggal_pembuatan');
	    $n1_formulir->nama_lurah       	  	= Input::get('nama_lurah');
	    $n1_formulir->save();

      $catin_id      						          = Input::get('id_catin');
	    return Redirect::action('AdminController@kelengkapanCatin', ['id' => $catin_id])->with('flash-store','Data berhasil ditambahkan.');
	  }
	  
	  public function update(Request $request, $id)
	  {
		  $user = Auth::user();
		  $n1_formulir = N1Formulir::findOrFail($id);
      
      if(Input::get('id_cpp')){
		    $n1_formulir->biodata_id      		= Input::get('id_cpp');
			}elseif(Input::get('id_cpw')){
				$n1_formulir->biodata_id      		= Input::get('id_cpw');
      }
      
			$n1_formulir->tipe_data_id    		  = Input::get('tipe_data_id');
			$n1_formulir->bin_binti       		  = Input::get('bin_binti');
			$n1_formulir->desa       	  	  	  = Input::get('desa');
			$n1_formulir->kecamatan       	 	  = Input::get('kecamatan');
			$n1_formulir->kabupaten       	  	= Input::get('kabupaten');
			$n1_formulir->nomor_surat         	= Input::get('nomor_surat');
			$n1_formulir->status_pernikahan     = Input::get('status_pernikahan');
			$n1_formulir->nama_mantan_pasangan  = Input::get('nama_mantan_pasangan');
			$n1_formulir->kota_pembuatan       	= Input::get('kota_pembuatan');
			$n1_formulir->tanggal_pembuatan     = Input::get('tanggal_pembuatan');
			$n1_formulir->nama_lurah       	  	= Input::get('nama_lurah');
			$n1_formulir->save();

			$catin_id      						          = Input::get('catin_id');
			return Redirect::action('AdminController@kelengkapanCatin', ['id' => $catin_id])->with('flash-store','Data berhasil diubah.');
	  }
}
