<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Image;
use File;
use App\Puskesmas;
use App\CekLab;
use App\Catin;
use App\KartuKemenkesRi;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PuskesmasController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $puskesmas = Puskesmas::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.puskesmas.list',array('puskesmas'=>$puskesmas, 'user' => $user));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return View::make('admin.puskesmas.create',array('user' => $user));
    }

    public function store(Request $request)
    {
        // store
        $puskesmas = new Puskesmas;
        $puskesmas->title     = Input::get('title');
        // add icon
        $icon = $request->file('icon');
        $imageName = time().'.'.$icon->getClientOriginalExtension();
        //thumbs
        $destinationPath = public_path('images/icon/puskesmass/thumbs');
        if(!File::exists($destinationPath)){
            if(File::makeDirectory($destinationPath,0777,true)){
                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
            }
        }
        $icon = Image::make($icon->getRealPath());
        $icon->save($destinationPath.'/'.$imageName);
        //original
        $destinationPath = public_path('images/icon/puskesmass');
        $icon = Image::make($icon)->encode('jpg', 50);
        $icon->save($destinationPath.'/'.$imageName);
        //save data image to db
        $puskesmas->icon = $imageName;

        $puskesmas->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
	        $imageName = time().'.'.$img->getClientOriginalExtension();
	        //thumbs
	        $destinationPath = public_path('images/puskesmass/thumbs');
	        if(!File::exists($destinationPath)){
	            if(File::makeDirectory($destinationPath,0777,true)){
	                throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
	            }
	        }
	        $img = Image::make($img->getRealPath());
	        $img->save($destinationPath.'/'.$imageName);
	        //original
	        $destinationPath = public_path('images/puskesmass');
	        $img = Image::make($img)->encode('jpg', 50);
	        $img->save($destinationPath.'/'.$imageName);
	        //save data image to db
	        $puskesmas->img = $imageName;
    	}

        $puskesmas->save();
        // redirect
        return Redirect::action('admin\PuskesmasController@index')->with('flash-success','The user has been added.');
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
        $puskesmas = Puskesmas::where('id', $id)->firstOrFail();   
        return view('admin.puskesmas.show', compact('puskesmas'),array('user' => $user));
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
        $puskesmas = Puskesmas::where('id', $id)->firstOrFail();   
        return view('admin.puskesmas.edit', compact('puskesmas'),array('user' => $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $puskesmas = Puskesmas::findOrFail($id);
        $puskesmas->title     = Input::get('title');
        // add icon
        $icon = $request->file('icon');
        if($icon){
            $imageName = time().'.'.$icon->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/icon/puskesmass/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $icon = Image::make($icon->getRealPath());
            $icon->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/icon/puskesmass');
            $icon = Image::make($icon)->encode('jpg', 50);
            $icon->save($destinationPath.'/'.$imageName);
            //save data image to db
            $puskesmas->icon = $imageName;
        }

        $puskesmas->desc      = Input::get('desc');
        // addfoto
        $img = $request->file('img');
        if($img){
            $imageName = time().'.'.$img->getClientOriginalExtension();
            //thumbs
            $destinationPath = public_path('images/puskesmass/thumbs');
            if(!File::exists($destinationPath)){
                if(File::makeDirectory($destinationPath,0777,true)){
                    throw new \Exception("Unable to upload to invoices directory make sure it is read / writable.");  
                }
            }
            $img = Image::make($img->getRealPath());
            $img->save($destinationPath.'/'.$imageName);
            //original
            $destinationPath = public_path('images/puskesmass');
            $img = Image::make($img)->encode('jpg', 50);
            $img->save($destinationPath.'/'.$imageName);
            //save data image to db
            $puskesmas->img = $imageName;
        }
        
        $puskesmas->save();
        return Redirect::action('admin\PuskesmasController@index', compact('puskesmas'))->with('flash-success','The user has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $puskesmas = Puskesmas::where('id', $id)->firstOrFail();
        $puskesmas->delete();
        return Redirect::action('admin\PuskesmasController@index');
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
        $puskesmas = Puskesmas::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.puskesmas.list', compact('puskesmas'),array('user' => $user));
    }

    public function cek()
    {
        $user = Auth::user();
        $catins = Catin::orderBy('created_at', 'desc')->get();
        return view('admin.puskesmas.cek',array('catins'=>$catins, 'user' => $user));
    }  

    public function listLaboratorium()
    {
        $user = Auth::user();
        $catins = Catin::orderBy('created_at', 'desc')->get();
        return view('admin.puskesmas.list-laboratorium', compact('catins'));
    } 

    public function pilihPengantinlaboratorium($id)
    {
        $user = Auth::user();
        $catin = Catin::where('id', $id)->firstOrFail();   

        if($catin->biodataCpp->cekLabCPP){
          $is_cekLabCpp_submitted = true;
        }else{
          $is_cekLabCpp_submitted = false;
        }
        
        if($catin->biodataCpw->cekLabCPW){
          $is_cekLabCpw_submitted = true;
        }else{
          $is_cekLabCpw_submitted = false;
        }

        return view('admin.puskesmas.catin-laboratorium', compact('catin', 'is_cekLabCpp_submitted', 'is_cekLabCpw_submitted'));
    } 

    public function cekLaboratorium($id)
    {
        $user = Auth::user();
        $catin = Catin::where('id', $id)->firstOrFail();
        $now = \Carbon::now(); // Tanggal sekarang
        $b_day_cpp = \Carbon::parse($catin->biodataCpp->tanggal_lahir); // Tanggal Lahir
        $age_cpp = $b_day_cpp->diffInYears($now);  // Menghitung umur
        return view('admin.puskesmas.check-laboratorium', compact('catin', 'age_cpp'));
    }

    public function cekLaboratoriumCpw($id)
    {
        $user = Auth::user();
        $catin = Catin::where('id', $id)->firstOrFail();
        $now = \Carbon::now(); // Tanggal sekarang
        $b_day_cpw = \Carbon::parse($catin->biodataCpw->tanggal_lahir); // Tanggal Lahir
        $age_cpw = $b_day_cpw->diffInYears($now);  // Menghitung umur   
        return view('admin.puskesmas.check-laboratorium-cpw', compact('catin', 'age_cpw'));
    }

    public function storeLab(Request $request)
    {
        // store
        $cekLab = new CekLab;
        $cekLab->biodata_id     = Input::get('biodata_id');
        $cekLab->dokter         = Input::get('dokter');
        $cekLab->pemeriksa      = Input::get('pemeriksa');
        $cekLab->hgb_hb         = Input::get('hgb_hb');
        $cekLab->glukosa        = Input::get('glukosa');
        $cekLab->goldar         = Input::get('goldar');
        $cekLab->hbsag          = Input::get('hbsag');
        $cekLab->syphilis       = Input::get('syphilis');
        $cekLab->hiv_aids       = Input::get('hiv_aids');
        $cekLab->save();
        // redirect
        $catin_id               = Input::get('id_catin');
        return Redirect::action('admin\PuskesmasController@pilihPengantinlaboratorium', ['id' => $catin_id])->with('flash-store','Data berhasil ditambahkan.');
    }

    public function editCekLab($id)
    {
        $user = Auth::user();
        $catin = Catin::where('id', $id)->firstOrFail();
        $now = \Carbon::now(); // Tanggal sekarang
        $b_day_cpp = \Carbon::parse($catin->biodataCpp->tanggal_lahir); // Tanggal Lahir
        $age_cpp = $b_day_cpp->diffInYears($now);  // Menghitung umur

        $glukosa = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );
        $hbsag = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );
        $syphilis = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );
        $hiv_aids = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );   

        return view('admin.puskesmas.edit_cek_lab', compact('catin', 'age_cpp', 'glukosa', 'hbsag', 'hiv_aids', 'syphilis'));
    }

    public function editCekLabCpw($id)
    {
        $user = Auth::user();
        $catin = Catin::where('id', $id)->firstOrFail();
        $now = \Carbon::now(); // Tanggal sekarang
        $b_day_cpw = \Carbon::parse($catin->biodataCpw->tanggal_lahir); // Tanggal Lahir
        $age_cpw = $b_day_cpw->diffInYears($now);  // Menghitung umur
        $glukosa = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );
        $hbsag = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );
        $syphilis = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );
        $hiv_aids = array(
            'Negatif'     => 'Negatif',
            'Positif'     => 'Positif'
        );   
        return view('admin.puskesmas.edit_cek_lab_cpw', compact('catin', 'age_cpw', 'glukosa', 'hbsag', 'hiv_aids', 'syphilis'));
    }

    public function updateLab(Request $request, $id)
    {
        // store
        $cekLab = CekLab::findOrFail($id);
        $cekLab->biodata_id     = Input::get('biodata_id');
        $cekLab->dokter         = Input::get('dokter');
        $cekLab->pemeriksa      = Input::get('pemeriksa');
        $cekLab->hgb_hb         = Input::get('hgb_hb');
        $cekLab->glukosa        = Input::get('glukosa');
        $cekLab->goldar         = Input::get('goldar');
        $cekLab->hbsag          = Input::get('hbsag');
        $cekLab->syphilis       = Input::get('syphilis');
        $cekLab->hiv_aids       = Input::get('hiv_aids');
        $cekLab->save();
        // redirect
        $catin_id               = Input::get('id_catin');
        return Redirect::action('admin\PuskesmasController@pilihPengantinlaboratorium', ['id' => $catin_id])->with('flash-update','Data berhasil diubah.');
    }  


    public function ceklistKesehatan($id)
    {
        $user = Auth::user();
        $biodata = Catin::where('id', $id)->first();

        $tt1 = KartuKemenkesRi::where('catin_id', $id)
        ->where('tipe_data_id', "TT1")->first();
        
        $tt2 = KartuKemenkesRi::where('catin_id', $id)
        ->where('tipe_data_id', "TT2")->first();
        
        $tt3 = KartuKemenkesRi::where('catin_id', $id)
        ->where('tipe_data_id', "TT3")->first();
        
        $tt4 = KartuKemenkesRi::where('catin_id', $id)
        ->where('tipe_data_id', "TT4")->first();
        
        $tt5 = KartuKemenkesRi::where('catin_id', $id)
        ->where('tipe_data_id', "TT5")->first();
        
        return view('admin.puskesmas.ceklist-kesehatan',compact('biodata', 'tt1', 'tt2', 'tt3', 'tt4', 'tt5'), array('user' => $user));
    }  

    public function paraf(Request $request)
    {
        $user = Auth::user();
        $TT1     = Input::get('TT1');
        $TT2     = Input::get('TT2');
        $TT3     = Input::get('TT3');
        $TT4     = Input::get('TT4');
        $TT5     = Input::get('TT5');
        if($TT1){
            $paraf = new KartuKemenkesRi;
            $paraf->tipe_data_id     = Input::get('TT1');
            $paraf->biodata_id       = Input::get('biodata_cpw_id');
            $paraf->catin_id         = Input::get('catin_id');
            $paraf->no               = Input::get('no');
            $paraf->save();
        }

        if($TT2){
            $paraf = new KartuKemenkesRi;
            $paraf->tipe_data_id     = Input::get('TT2');
            $paraf->biodata_id       = Input::get('biodata_cpw_id');
            $paraf->catin_id         = Input::get('catin_id');
            $paraf->no               = Input::get('no');
            $paraf->save();
        }

        if($TT3){
            $paraf = new KartuKemenkesRi;
            $paraf->tipe_data_id     = Input::get('TT3');
            $paraf->biodata_id       = Input::get('biodata_cpw_id');
            $paraf->catin_id         = Input::get('catin_id');
            $paraf->no               = Input::get('no');
            $paraf->save();
        }

        if($TT4){
            $paraf = new KartuKemenkesRi;
            $paraf->tipe_data_id     = Input::get('TT4');
            $paraf->biodata_id       = Input::get('biodata_cpw_id');
            $paraf->catin_id         = Input::get('catin_id');
            $paraf->no               = Input::get('no');
            $paraf->save();
        }

        if($TT5){
            $paraf = new KartuKemenkesRi;
            $paraf->tipe_data_id     = Input::get('TT5');
            $paraf->biodata_id       = Input::get('biodata_cpw_id');
            $paraf->catin_id         = Input::get('catin_id');
            $paraf->no               = Input::get('no');
            $paraf->save();
        }

        return Redirect::back()->withErrors(['Data berhasil diparaf', 'The Message']);
    } 
    
    public function destroyTtd($id)
    {
        $paraf = KartuKemenkesRi::where('id', $id)->firstOrFail();
        $paraf->delete();
        return Redirect::back()->withErrors(['Data berhasil diparaf', 'The Message']);
    }
}
