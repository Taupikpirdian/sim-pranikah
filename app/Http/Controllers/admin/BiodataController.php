<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Biodata;
use App\Catin;
use File;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class BiodataController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (Auth::user()->hasAnyRole('Kua') || Auth::user()->hasAnyRole('Admin') ){
            $catins = Catin::orderBy('created_at', 'desc')->get();
        }else{
            $catins = Catin::orderBy('created_at', 'desc')->where('user_id', '=', Auth::user()->id)->get();
        }
        // foreach ($catins as $key => $catin) {
        //     echo "<pre>";
        //     // print_r($catin->biodata()->where('tipe_data_id', 1)->first());
        //     // print_r($catin->biodataCpp);
        //     print_r($catin->biodataCpw);
        //     echo "</pre>";
        //     exit();
        //     # code...
        // }
        return view('admin.masterdatacatin.list',array('catins'=>$catins, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.masterdatacatin.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // print_r($request->tanggal_lahir_cpp);
        // exit();
        // validasi format date
        if(!preg_match("/^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\/(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\/29))$/",$request->tanggal_lahir_cpp)) {
          return Redirect::back()->withErrors(['Format tanggal belum benar, harap memasukan format yang benar, YYYY-MM-DD.', 'The Message']);
        }

        if(!preg_match("/^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\/(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\/29))$/",$request->tanggal_lahir_cpw)) {
          return Redirect::back()->withErrors(['Format tanggal belum benar, harap memasukan format yang benar, YYYY-MM-DD.', 'The Message']);
        } 

        if(!preg_match("/^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\/(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\/29))$/",$request->tanggal_lahir_ibu_cpp)) {
          return Redirect::back()->withErrors(['Format tanggal belum benar, harap memasukan format yang benar, YYYY-MM-DD.', 'The Message']);
        }
        
        if(!preg_match("/^((((19|[2-9]\d)\d{2})\-(0[13578]|1[02])\-(0[1-9]|[12]\d|3[01]))|(((19|[2-9]\d)\d{2})\-(0[13456789]|1[012])\-(0[1-9]|[12]\d|30))|(((19|[2-9]\d)\d{2})\-02\/(0[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))\-02\/29))$/",$request->tanggal_lahir_bapak_cpp)) {
          return Redirect::back()->withErrors(['Format tanggal belum benar, harap memasukan format yang benar, YYYY-MM-DD.', 'The Message']);
        }
        
        // store
        // get data tanggal bulan dan tahun
        $kode = date('dmy');
        $catin = Catin::all();
        // get data id terakhir
        $catin_id = Catin::pluck('id')->last();
        $new_id = $catin_id + 1;
        // tambah catin
        $catin = new Catin;
        if(empty($catin)){
            $catin->id     = $new_id;
        }
        $catin->kode_catin     = $kode.''.$new_id;
        $catin->user_id        = Auth::user()->id;
        $catin->save();

        $biodata_catin_id = Catin::pluck('id')->last();

        $biodata_cpp = new Biodata;
        $biodata_cpp->catin_id          = $biodata_catin_id;
        $biodata_cpp->tipe_data_id      = 1;
        $biodata_cpp->nama_lengkap      = Input::get('nama_lengkap_cpp');
        $biodata_cpp->jk                = Input::get('jk_cpp');
        $biodata_cpp->tempat_lahir      = Input::get('tempat_lahir_cpp');
        $biodata_cpp->tanggal_lahir     = Input::get('tanggal_lahir_cpp');
        $biodata_cpp->warga_negara      = Input::get('warga_negara_cpp');
        $biodata_cpp->agama             = Input::get('agama_cpp');
        $biodata_cpp->pekerjaan         = Input::get('pekerjaan_cpp');
        $biodata_cpp->tempat_tinggal    = Input::get('tempat_tinggal_cpp');

        $biodata_cpw = new Biodata;
        $biodata_cpw->catin_id          = $biodata_catin_id;
        $biodata_cpw->tipe_data_id      = 2;
        $biodata_cpw->nama_lengkap      = Input::get('nama_lengkap_cpw');
        $biodata_cpw->jk                = Input::get('jk_cpw');
        $biodata_cpw->tempat_lahir      = Input::get('tempat_lahir_cpw');
        $biodata_cpw->tanggal_lahir     = Input::get('tanggal_lahir_cpw');
        $biodata_cpw->warga_negara      = Input::get('warga_negara_cpw');
        $biodata_cpw->agama             = Input::get('agama_cpw');
        $biodata_cpw->pekerjaan         = Input::get('pekerjaan_cpw');
        $biodata_cpw->tempat_tinggal    = Input::get('tempat_tinggal_cpw');

        $biodata_ibu_cpp = new Biodata;
        $biodata_ibu_cpp->catin_id          = $biodata_catin_id;
        $biodata_ibu_cpp->tipe_data_id      = 3;
        $biodata_ibu_cpp->nama_lengkap      = Input::get('nama_lengkap_ibu_cpp');
        $biodata_ibu_cpp->jk                = Input::get('jk_ibu_cpp');
        $biodata_ibu_cpp->tempat_lahir      = Input::get('tempat_lahir_ibu_cpp');
        $biodata_ibu_cpp->tanggal_lahir     = Input::get('tanggal_lahir_ibu_cpp');
        $biodata_ibu_cpp->warga_negara      = Input::get('warga_negara_ibu_cpp');
        $biodata_ibu_cpp->agama             = Input::get('agama_ibu_cpp');
        $biodata_ibu_cpp->pekerjaan         = Input::get('pekerjaan_ibu_cpp');
        $biodata_ibu_cpp->tempat_tinggal    = Input::get('tempat_tinggal_ibu_cpp');

        $biodata_ibu_cpw = new Biodata;
        $biodata_ibu_cpw->catin_id          = $biodata_catin_id;
        $biodata_ibu_cpw->tipe_data_id      = 4;
        $biodata_ibu_cpw->nama_lengkap      = Input::get('nama_lengkap_ibu_cpw');
        $biodata_ibu_cpw->jk                = Input::get('jk_ibu_cpw');
        $biodata_ibu_cpw->tempat_lahir      = Input::get('tempat_lahir_ibu_cpw');
        $biodata_ibu_cpw->tanggal_lahir     = Input::get('tanggal_lahir_ibu_cpw');
        $biodata_ibu_cpw->warga_negara      = Input::get('warga_negara_ibu_cpw');
        $biodata_ibu_cpw->agama             = Input::get('agama_ibu_cpw');
        $biodata_ibu_cpw->pekerjaan         = Input::get('pekerjaan_ibu_cpw');
        $biodata_ibu_cpw->tempat_tinggal    = Input::get('tempat_tinggal_ibu_cpw');

        $biodata_bapak_cpp = new Biodata;
        $biodata_bapak_cpp->catin_id          = $biodata_catin_id;
        $biodata_bapak_cpp->tipe_data_id      = 5;
        $biodata_bapak_cpp->nama_lengkap      = Input::get('nama_lengkap_bapak_cpp');
        $biodata_bapak_cpp->jk                = Input::get('jk_bapak_cpp');
        $biodata_bapak_cpp->tempat_lahir      = Input::get('tempat_lahir_bapak_cpp');
        $biodata_bapak_cpp->tanggal_lahir     = Input::get('tanggal_lahir_bapak_cpp');
        $biodata_bapak_cpp->warga_negara      = Input::get('warga_negara_bapak_cpp');
        $biodata_bapak_cpp->agama             = Input::get('agama_bapak_cpp');
        $biodata_bapak_cpp->pekerjaan         = Input::get('pekerjaan_bapak_cpp');
        $biodata_bapak_cpp->tempat_tinggal    = Input::get('tempat_tinggal_bapak_cpp');

        $biodata_bapak_cpw = new Biodata;
        $biodata_bapak_cpw->catin_id          = $biodata_catin_id;
        $biodata_bapak_cpw->tipe_data_id      = 6;
        $biodata_bapak_cpw->nama_lengkap      = Input::get('nama_lengkap_bapak_cpw');
        $biodata_bapak_cpw->jk                = Input::get('jk_bapak_cpw');
        $biodata_bapak_cpw->tempat_lahir      = Input::get('tempat_lahir_bapak_cpw');
        $biodata_bapak_cpw->tanggal_lahir     = Input::get('tanggal_lahir_bapak_cpw');
        $biodata_bapak_cpw->warga_negara      = Input::get('warga_negara_bapak_cpw');
        $biodata_bapak_cpw->agama             = Input::get('agama_bapak_cpw');
        $biodata_bapak_cpw->pekerjaan         = Input::get('pekerjaan_bapak_cpw');
        $biodata_bapak_cpw->tempat_tinggal    = Input::get('tempat_tinggal_bapak_cpw');

        $biodata_cpp->save();
        $biodata_cpw->save();
        $biodata_ibu_cpp->save();
        $biodata_ibu_cpw->save();
        $biodata_bapak_cpp->save();
        $biodata_bapak_cpw->save();
        // redirect
        return Redirect::action('admin\BiodataController@index')->with('flash-success','The user has been added.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user = Auth::user();
        $Biodata = Biodata::where('id', $id)->firstOrFail();   
        return view('admin.masterdatacatin.show', compact('Biodata'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = Auth::user();
        $Biodata = Biodata::where('id', $id)->firstOrFail();   
        return view('admin.masterdatacatin.edit', compact('Biodata'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $id_cpp      = Input::get('id_cpp');
        $biodata_cpp = Biodata::where('id', $id_cpp)->firstOrFail();
        $biodata_cpp->nama_lengkap      = Input::get('nama_lengkap_cpp');
        $biodata_cpp->jk                = Input::get('jk_cpp');
        $biodata_cpp->tempat_lahir      = Input::get('tempat_lahir_cpp');
        $biodata_cpp->tanggal_lahir     = Input::get('tanggal_lahir_cpp');
        $biodata_cpp->warga_negara      = Input::get('warga_negara_cpp');
        $biodata_cpp->agama             = Input::get('agama_cpp');
        $biodata_cpp->pekerjaan         = Input::get('pekerjaan_cpp');
        $biodata_cpp->tempat_tinggal    = Input::get('tempat_tinggal_cpp');

        $id_cpw      = Input::get('id_cpw');
        $biodata_cpw = Biodata::where('id', $id_cpw)->firstOrFail();
        $biodata_cpw->nama_lengkap      = Input::get('nama_lengkap_cpw');
        $biodata_cpw->jk                = Input::get('jk_cpw');
        $biodata_cpw->tempat_lahir      = Input::get('tempat_lahir_cpw');
        $biodata_cpw->tanggal_lahir     = Input::get('tanggal_lahir_cpw');
        $biodata_cpw->warga_negara      = Input::get('warga_negara_cpw');
        $biodata_cpw->agama             = Input::get('agama_cpw');
        $biodata_cpw->pekerjaan         = Input::get('pekerjaan_cpw');
        $biodata_cpw->tempat_tinggal    = Input::get('tempat_tinggal_cpw');

        $id_ibu_cpp      = Input::get('id_ibu_cpp');
        $biodata_ibu_cpp = Biodata::where('id', $id_ibu_cpp)->firstOrFail();
        $biodata_ibu_cpp->nama_lengkap      = Input::get('nama_lengkap_ibu_cpp');
        $biodata_ibu_cpp->jk                = Input::get('jk_ibu_cpp');
        $biodata_ibu_cpp->tempat_lahir      = Input::get('tempat_lahir_ibu_cpp');
        $biodata_ibu_cpp->tanggal_lahir     = Input::get('tanggal_lahir_ibu_cpp');
        $biodata_ibu_cpp->warga_negara      = Input::get('warga_negara_ibu_cpp');
        $biodata_ibu_cpp->agama             = Input::get('agama_ibu_cpp');
        $biodata_ibu_cpp->pekerjaan         = Input::get('pekerjaan_ibu_cpp');
        $biodata_ibu_cpp->tempat_tinggal    = Input::get('tempat_tinggal_ibu_cpp');

        $id_ibu_cpw      = Input::get('id_ibu_cpw');
        $biodata_ibu_cpw = Biodata::where('id', $id_ibu_cpw)->firstOrFail();
        $biodata_ibu_cpw->nama_lengkap      = Input::get('nama_lengkap_ibu_cpw');
        $biodata_ibu_cpw->jk                = Input::get('jk_ibu_cpw');
        $biodata_ibu_cpw->tempat_lahir      = Input::get('tempat_lahir_ibu_cpw');
        $biodata_ibu_cpw->tanggal_lahir     = Input::get('tanggal_lahir_ibu_cpw');
        $biodata_ibu_cpw->warga_negara      = Input::get('warga_negara_ibu_cpw');
        $biodata_ibu_cpw->agama             = Input::get('agama_ibu_cpw');
        $biodata_ibu_cpw->pekerjaan         = Input::get('pekerjaan_ibu_cpw');
        $biodata_ibu_cpw->tempat_tinggal    = Input::get('tempat_tinggal_ibu_cpw');

        $id_bapak_cpp      = Input::get('id_bapak_cpp');
        $biodata_bapak_cpp = Biodata::where('id', $id_bapak_cpp)->firstOrFail();
        $biodata_bapak_cpp->nama_lengkap      = Input::get('nama_lengkap_bapak_cpp');
        $biodata_bapak_cpp->jk                = Input::get('jk_bapak_cpp');
        $biodata_bapak_cpp->tempat_lahir      = Input::get('tempat_lahir_bapak_cpp');
        $biodata_bapak_cpp->tanggal_lahir     = Input::get('tanggal_lahir_bapak_cpp');
        $biodata_bapak_cpp->warga_negara      = Input::get('warga_negara_bapak_cpp');
        $biodata_bapak_cpp->agama             = Input::get('agama_bapak_cpp');
        $biodata_bapak_cpp->pekerjaan         = Input::get('pekerjaan_bapak_cpp');
        $biodata_bapak_cpp->tempat_tinggal    = Input::get('tempat_tinggal_bapak_cpp');

        $id_bapak_cpw      = Input::get('id_bapak_cpw');
        $biodata_bapak_cpw = Biodata::where('id', $id_bapak_cpw)->firstOrFail();
        $biodata_bapak_cpw->nama_lengkap      = Input::get('nama_lengkap_bapak_cpw');
        $biodata_bapak_cpw->jk                = Input::get('jk_bapak_cpw');
        $biodata_bapak_cpw->tempat_lahir      = Input::get('tempat_lahir_bapak_cpw');
        $biodata_bapak_cpw->tanggal_lahir     = Input::get('tanggal_lahir_bapak_cpw');
        $biodata_bapak_cpw->warga_negara      = Input::get('warga_negara_bapak_cpw');
        $biodata_bapak_cpw->agama             = Input::get('agama_bapak_cpw');
        $biodata_bapak_cpw->pekerjaan         = Input::get('pekerjaan_bapak_cpw');
        $biodata_bapak_cpw->tempat_tinggal    = Input::get('tempat_tinggal_bapak_cpw');

        $biodata_cpp->save();
        $biodata_cpw->save();
        $biodata_ibu_cpp->save();
        $biodata_ibu_cpw->save();
        $biodata_bapak_cpp->save();
        $biodata_bapak_cpw->save();
        return Redirect::back()->withErrors(['Data berhasil diubah', 'The Message']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $biodatas = Biodata::where('catin_id', $id)->delete();
        $catin = Catin::whereId($id)->delete();
        
        return Redirect::action('admin\BiodataController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){
        $user = Auth::user();
        $search = $request->get('search');
        $Biodata = Biodata::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.masterdatacatin.list', compact('Biodata'),array('user' => $user));
    }
}