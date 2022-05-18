<?php

namespace App\Http\Controllers\admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\N4Formulir;
use App\Catin;

class N4FormulirController extends Controller
{
    public function create($id)
    { 
        $user = Auth::user();
      $biodatas = Catin::where('id', $id)->firstOrFail();
      
      // echo "<pre>";
      // print_r($biodatas->biodataCpp->n4Formulir);
      // echo "</pre>";
      // exit();

      if(!$biodatas->biodataCpp->n4Formulir){
        return view('admin.formulirn4.create', compact('biodatas'));
      }else{
        return view('admin.formulirn4.edit', compact('biodatas'));
      }
    }

    public function createCpw($id)
    { 
        $user = Auth::user();
        $biodatas = Catin::where('id', $id)->firstOrFail();
      
        if(!$biodatas->biodataCpw->n4Formulir){
          return view('admin.formulirn4.create_cpw', compact('biodatas'));
        }else{
          return view('admin.formulirn4.edit_cpw', compact('biodatas'));
        }
    }

    public function store(Request $request)
	{
	    $n4_formulir = new N4Formulir;
	    if(Input::get('id_cpp')){
		    $n4_formulir->biodata_id      		= Input::get('id_cpp');
	    }elseif(Input::get('id_cpw')){
		    $n4_formulir->biodata_id      		= Input::get('id_cpw');
	    }
	    $n4_formulir->biodata_bapak_id    	= Input::get('biodata_bapak_id');
	    $n4_formulir->biodata_ibu_id    	  = Input::get('biodata_ibu_id');
	    $n4_formulir->data_tipe_id    		  = Input::get('tipe_data_id');
	    $n4_formulir->desa       	  	    	= Input::get('desa');
	    $n4_formulir->kecamatan       	  	= Input::get('kecamatan');
	    $n4_formulir->kabupaten       	  	= Input::get('kabupaten');
	    $n4_formulir->nomor_surat       	  = Input::get('nomor_surat');
	    $n4_formulir->nama_lurah       	  	= Input::get('nama_lurah');
	    $n4_formulir->save();

	    $catin_id      						          = Input::get('id_catin');
	    return Redirect::action('AdminController@kelengkapanCatin', ['id' => $catin_id])->with('flash-store','Data berhasil ditambahkan.');
	  }
	  
	  public function update(Request $request, $id)
	  {
		  $user = Auth::user();
		  $n4_formulir = N4Formulir::findOrFail($id);
      
			if(Input::get('id_cpp')){
		    $n4_formulir->biodata_id      		= Input::get('id_cpp');
	    }elseif(Input::get('id_cpw')){
		    $n4_formulir->biodata_id      		= Input::get('id_cpw');
	    }
	    $n4_formulir->biodata_bapak_id    	= Input::get('biodata_bapak_id');
	    $n4_formulir->biodata_ibu_id    	  = Input::get('biodata_ibu_id');
	    $n4_formulir->data_tipe_id    		  = Input::get('tipe_data_id');
	    $n4_formulir->desa       	  	    	= Input::get('desa');
	    $n4_formulir->kecamatan       	  	= Input::get('kecamatan');
	    $n4_formulir->kabupaten       	  	= Input::get('kabupaten');
	    $n4_formulir->nomor_surat       	  = Input::get('nomor_surat');
	    $n4_formulir->nama_lurah       	  	= Input::get('nama_lurah');
	    $n4_formulir->save();

	    $catin_id      						          = Input::get('id_catin');
	    return Redirect::action('AdminController@kelengkapanCatin', ['id' => $catin_id])->with('flash-store','Data berhasil ditambahkan.');
	  }
}
