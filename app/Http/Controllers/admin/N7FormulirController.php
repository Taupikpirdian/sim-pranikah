<?php

namespace App\Http\Controllers\admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\N7Formulir;
use App\Catin;

class N7FormulirController extends Controller
{
    public function create($id)
    { 
      $user = Auth::user();
      $biodatas = Catin::where('id', $id)->firstOrFail();
      // percobaan kondisi jika ada data
      // echo "<pre>";
      // print_r($biodatas->biodataCpp->n7Formulir);
      // echo "</pre>";
      // exit();
      
      if(!$biodatas->biodataCpp->n7Formulir){
        return view('admin.formulirn7.create', compact('biodatas'));
      }else{
        return view('admin.formulirn7.edit', compact('biodatas', 'n7formulir'));
      }
    }

    public function store(Request $request)
	{
	    $n7_formulir = new N7Formulir;
	    $n7_formulir->biodata_cpp_id    	= Input::get('biodata_cpp_id');
	    $n7_formulir->biodata_cpw_id    	= Input::get('biodata_cpw_id');
	    $n7_formulir->lampiran    			  = Input::get('lampiran');
	    $n7_formulir->lembar       	  		= Input::get('lembar');
	    $n7_formulir->lokasi_pengiriman   = Input::get('lokasi_pengiriman');
	    $n7_formulir->tanggal_pernikahan  = Input::get('tanggal_pernikahan');
	    $n7_formulir->jam_pernikahan      = Input::get('jam_pernikahan');
	    $n7_formulir->mas_kawin       	  = Input::get('mas_kawin');
	    $n7_formulir->tempat_pernikahan   = Input::get('tempat_pernikahan');
	    $n7_formulir->tanggal_terima      = Input::get('tanggal_terima');
	    $n7_formulir->penerima       	  	= Input::get('penerima');
	    $n7_formulir->pemberitahu       	= Input::get('pemberitahu');
	    $n7_formulir->save();

	    $catin_id      						        = Input::get('catin_id');
	    return Redirect::action('AdminController@kelengkapanCatin', ['id' => $catin_id])->with('flash-store','Data berhasil ditambahkan.');
    }
    
    public function update(Request $request, $id)
	  {
		  $user = Auth::user();
		  $n7_formulir = N7Formulir::findOrFail($id);
      $n7_formulir->biodata_cpp_id    	= Input::get('biodata_cpp_id');
	    $n7_formulir->biodata_cpw_id    	= Input::get('biodata_cpw_id');
	    $n7_formulir->lampiran    			  = Input::get('lampiran');
	    $n7_formulir->lembar       	  		= Input::get('lembar');
	    $n7_formulir->lokasi_pengiriman   = Input::get('lokasi_pengiriman');
	    $n7_formulir->tanggal_pernikahan  = Input::get('tanggal_pernikahan');
	    $n7_formulir->jam_pernikahan      = Input::get('jam_pernikahan');
	    $n7_formulir->mas_kawin       	  = Input::get('mas_kawin');
	    $n7_formulir->tempat_pernikahan   = Input::get('tempat_pernikahan');
	    $n7_formulir->tanggal_terima      = Input::get('tanggal_terima');
	    $n7_formulir->penerima       	  	= Input::get('penerima');
	    $n7_formulir->pemberitahu       	= Input::get('pemberitahu');
	    $n7_formulir->save();

	    $catin_id      						          = Input::get('catin_id');
	    return Redirect::action('AdminController@kelengkapanCatin', ['id' => $catin_id])->with('flash-store','Data berhasil ditambahkan.');
	  }
}
