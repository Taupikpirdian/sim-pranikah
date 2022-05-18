<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index');
Route::get('/kontak', 'ContactController@index');
Route::post('/kontak/create', 'ContactController@store');
Route::get('/detail-bkkbn/{id}', 'DetailBkkbnController@index');
Route::get('/detail-kua/{id}', 'DetailKuaController@index');
Route::get('/detail-slider/{id}', 'HomeController@detailSlider');
Route::get('/detail-puskesmas/{id}', 'PuskesmasController@index');
Route::get('/tentang-kami', 'TentangKamiController@index');
Route::get('/konseling-pranikah', 'KonselingPranikahController@detail');
Route::get('/tentang-kami/{id}', 'TentangKamiController@detail');
Route::get('/konseling-pranikah/{id}', 'KonselingPranikahController@index');

Route::get('/@dmin', 'AdminController@index');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Auth::routes();


/*print*/
Route::get('/list-print', 'PrintFormulirController@index');

/*print*/
// Group Authenticated First
Route::group(['middleware' => ['auth']], function() {

	//User
	Route::get('/user/index', ['as' => 'index', 'uses' => 'admin\UserController@index']);
	Route::get('/user/create', ['as' => 'create', 'uses' => 'admin\UserController@create']);
	Route::post('/user/create', ['as' => 'store', 'uses' => 'admin\UserController@store']);
	Route::get('/user/edit/{id}', ['as' => 'edit', 'uses' => 'admin\UserController@edit']);
	Route::put('/user/edit/{id}', ['as' => 'edit', 'uses' => 'admin\UserController@update']);
	Route::get('/user/show/{id}', ['as' => 'show', 'uses' => 'admin\UserController@show']);
	Route::delete('/user/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\UserController@destroy']);
	Route::get('/searchuser', ['as' => 'searchjabatan', 'uses' => 'admin\UserController@search']);

	// Role
	Route::resource('roles', 'admin\RoleController');
	Route::get('search-roles','admin\RoleController@search');
	Route::resource('user-groups', 'admin\UserGroupController');
	Route::get('search-user-groups','admin\UserGroupController@search');
	Route::resource('groups', 'admin\GroupController');
	Route::get('search-groups','admin\GroupController@search');
	Route::resource('group-roles', 'admin\GroupRoleController');
	Route::get('search-group-roles','admin\GroupRoleController@search');

	// Slider
	Route::get('slider/index', ['as' => 'content', 'uses' => 'admin\SliderController@index']);
	Route::get('slider/create', ['as' => 'create', 'uses' => 'admin\SliderController@create']);
	Route::post('slider/create', ['as' => 'store', 'uses' => 'admin\SliderController@store']);
	Route::get('slider/edit/{id}', ['as' => 'edit', 'uses' => 'admin\SliderController@edit']);
	Route::put('slider/edit/{id}', ['as' => 'edit', 'uses' => 'admin\SliderController@update']);
	Route::get('slider/show/{id}', ['as' => 'show', 'uses' => 'admin\SliderController@show']);
	Route::delete('slider/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\SliderController@destroy']);
	Route::get('/searchslider', ['as' => 'searchslider', 'uses' => 'admin\SliderController@search']);

	// Tentang Kami
	Route::get('about/index', ['as' => 'content', 'uses' => 'admin\TentangKamiController@index']);
	Route::get('about/create', ['as' => 'create', 'uses' => 'admin\TentangKamiController@create']);
	Route::post('about/create', ['as' => 'store', 'uses' => 'admin\TentangKamiController@store']);
	Route::get('about/edit/{id}', ['as' => 'edit', 'uses' => 'admin\TentangKamiController@edit']);
	Route::put('about/edit/{id}', ['as' => 'edit', 'uses' => 'admin\TentangKamiController@update']);
	Route::get('about/show/{id}', ['as' => 'show', 'uses' => 'admin\TentangKamiController@show']);
	Route::delete('about/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\TentangKamiController@destroy']);
	Route::get('/searchabout', ['as' => 'searchabout', 'uses' => 'admin\TentangKamiController@search']);

	// Berita
	Route::get('news/index', ['as' => 'content', 'uses' => 'admin\BeritaController@index']);
	Route::get('news/create', ['as' => 'create', 'uses' => 'admin\BeritaController@create']);
	Route::post('news/create', ['as' => 'store', 'uses' => 'admin\BeritaController@store']);
	Route::get('news/edit/{id}', ['as' => 'edit', 'uses' => 'admin\BeritaController@edit']);
	Route::put('news/edit/{id}', ['as' => 'edit', 'uses' => 'admin\BeritaController@update']);
	Route::get('news/show/{id}', ['as' => 'show', 'uses' => 'admin\BeritaController@show']);
	Route::delete('news/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\BeritaController@destroy']);
	Route::get('/searchnews', ['as' => 'searchnews', 'uses' => 'admin\BeritaController@search']);
	Route::get('news/{id}', ['as' => 'show', 'uses' => 'DetailBeritaController@index']);

	// Galeri
	Route::get('galery/index', ['as' => 'content', 'uses' => 'admin\GaleriController@index']);
	Route::get('galery/create', ['as' => 'create', 'uses' => 'admin\GaleriController@create']);
	Route::post('galery/create', ['as' => 'store', 'uses' => 'admin\GaleriController@store']);
	Route::get('galery/edit/{id}', ['as' => 'edit', 'uses' => 'admin\GaleriController@edit']);
	Route::put('galery/edit/{id}', ['as' => 'edit', 'uses' => 'admin\GaleriController@update']);
	Route::get('galery/show/{id}', ['as' => 'show', 'uses' => 'admin\GaleriController@show']);
	Route::delete('galery/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\GaleriController@destroy']);
	Route::get('/searchgalery', ['as' => 'searchgalery', 'uses' => 'admin\GaleriController@search']);

	// Testimoni
	Route::get('testimony/index', ['as' => 'content', 'uses' => 'admin\TestimoniController@index']);
	Route::get('testimony/create', ['as' => 'create', 'uses' => 'admin\TestimoniController@create']);
	Route::post('testimony/create', ['as' => 'store', 'uses' => 'admin\TestimoniController@store']);
	Route::get('testimony/edit/{id}', ['as' => 'edit', 'uses' => 'admin\TestimoniController@edit']);
	Route::put('testimony/edit/{id}', ['as' => 'edit', 'uses' => 'admin\TestimoniController@update']);
	Route::get('testimony/show/{id}', ['as' => 'show', 'uses' => 'admin\TestimoniController@show']);
	Route::delete('testimony/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\TestimoniController@destroy']);
	Route::get('/searchtestimony', ['as' => 'searchtestimony', 'uses' => 'admin\TestimoniController@search']);

	// Kua
	Route::get('kua/index', ['as' => 'content', 'uses' => 'admin\KuaController@index']);
	Route::get('kua/create', ['as' => 'create', 'uses' => 'admin\KuaController@create']);
	Route::post('kua/create', ['as' => 'store', 'uses' => 'admin\KuaController@store']);
	Route::get('kua/edit/{id}', ['as' => 'edit', 'uses' => 'admin\KuaController@edit']);
	Route::put('kua/edit/{id}', ['as' => 'edit', 'uses' => 'admin\KuaController@update']);
	Route::get('kua/show/{id}', ['as' => 'show', 'uses' => 'admin\KuaController@show']);
	Route::delete('kua/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\KuaController@destroy']);
	Route::get('/searchkua', ['as' => 'searchkua', 'uses' => 'admin\KuaController@search']);

	// Bkkbn
	Route::get('bkkbn/index', ['as' => 'content', 'uses' => 'admin\BkkbnController@index']);
	Route::get('bkkbn/create', ['as' => 'create', 'uses' => 'admin\BkkbnController@create']);
	Route::post('bkkbn/create', ['as' => 'store', 'uses' => 'admin\BkkbnController@store']);
	Route::get('bkkbn/edit/{id}', ['as' => 'edit', 'uses' => 'admin\BkkbnController@edit']);
	Route::put('bkkbn/edit/{id}', ['as' => 'edit', 'uses' => 'admin\BkkbnController@update']);
	Route::get('bkkbn/show/{id}', ['as' => 'show', 'uses' => 'admin\BkkbnController@show']);
	Route::delete('bkkbn/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\BkkbnController@destroy']);
	Route::get('/searchbkkbn', ['as' => 'searchbkkbn', 'uses' => 'admin\BkkbnController@search']);

	// Puskesmas
	Route::get('puskesmas/index', ['as' => 'content', 'uses' => 'admin\PuskesmasController@index']);
	Route::get('puskesmas/create', ['as' => 'create', 'uses' => 'admin\PuskesmasController@create']);
	Route::post('puskesmas/create', ['as' => 'store', 'uses' => 'admin\PuskesmasController@store']);
	Route::get('puskesmas/edit/{id}', ['as' => 'edit', 'uses' => 'admin\PuskesmasController@edit']);
	Route::put('puskesmas/edit/{id}', ['as' => 'edit', 'uses' => 'admin\PuskesmasController@update']);
	Route::get('puskesmas/show/{id}', ['as' => 'show', 'uses' => 'admin\PuskesmasController@show']);
	Route::delete('puskesmas/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\PuskesmasController@destroy']);
	Route::get('/searchpuskesmas', ['as' => 'searchpuskesmas', 'uses' => 'admin\PuskesmasController@search']);

	// Sambutan
	Route::get('sambutan/index', ['as' => 'content', 'uses' => 'admin\SambutanController@index']);
	Route::get('sambutan/create', ['as' => 'create', 'uses' => 'admin\SambutanController@create']);
	Route::post('sambutan/create', ['as' => 'store', 'uses' => 'admin\SambutanController@store']);
	Route::get('sambutan/edit/{id}', ['as' => 'edit', 'uses' => 'admin\SambutanController@edit']);
	Route::put('sambutan/edit/{id}', ['as' => 'edit', 'uses' => 'admin\SambutanController@update']);
	Route::get('sambutan/show/{id}', ['as' => 'show', 'uses' => 'admin\SambutanController@show']);
	Route::delete('sambutan/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\SambutanController@destroy']);
	Route::get('/searchsambutan', ['as' => 'searchsambutan', 'uses' => 'admin\SambutanController@search']);


	/*=======DARA MASTER CATIN=========*/
	Route::get('data-master-catin/index', ['as' => 'content', 'uses' => 'admin\BiodataController@index']);
	Route::get('data-master-catin/create', ['as' => 'create', 'uses' => 'admin\BiodataController@create']);
	Route::post('data-master-catin/create', ['as' => 'store', 'uses' => 'admin\BiodataController@store']);
	Route::get('data-master-catin/edit/{id}', ['as' => 'edit', 'uses' => 'admin\BiodataController@edit']);
	Route::put('data-master-catin/edit/{id}', ['as' => 'edit', 'uses' => 'admin\BiodataController@update']);
	Route::get('data-master-catin/show/{id}', ['as' => 'show', 'uses' => 'admin\BiodataController@show']);
	Route::delete('data-master-catin/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\BiodataController@destroy']);
	Route::get('/searchdata-master-catin', ['as' => 'searchdata-master-catin', 'uses' => 'admin\BiodataController@search']);
	/*=======DARA MASTER CATIN=========*/

	// ADMIN KUA
	/*================*/
	Route::get('/input-data-catin/{id}', ['as' => 'content', 'uses' => 'AdminController@kelengkapanCatin']);
	Route::get('/cetak-data-catin/{id}', ['as' => 'content', 'uses' => 'AdminController@cetakDataCatin']);
	/*=======FORMULIR N1 CPP=========*/
	Route::get('n1-formulir/create/{id}', ['as' => 'create', 'uses' => 'admin\N1FormulirController@create']);
	Route::get('n1-formulir/create-cpw/{id}', ['as' => 'create', 'uses' => 'admin\N1FormulirController@createCpw']);
	Route::post('n1-formulir/create', ['as' => 'store', 'uses' => 'admin\N1FormulirController@store']);
	Route::get('n1-formulir/edit/{id}', ['as' => 'edit', 'uses' => 'admin\N1FormulirController@create']);
	Route::put('n1-formulir/edit/{id}', ['as' => 'edit', 'uses' => 'admin\N1FormulirController@update']);
	/*=======FORMULIR N1 CPW=========*/
	Route::get('n1-formulir/edit-cpw/{id}', ['as' => 'edit', 'uses' => 'admin\N1FormulirController@createCpw']);
	Route::put('n1-formulir/edit-cpw/{id}', ['as' => 'edit', 'uses' => 'admin\N1FormulirController@update']);
	Route::get('n1-formulir/show/{id}', ['as' => 'show', 'uses' => 'admin\N1FormulirController@show']);
	Route::delete('n1-formulir/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\N1FormulirController@destroy']);

	/*=======FORMULIR N4 CPP=========*/
	Route::get('n4-formulir/create/{id}', ['as' => 'show', 'uses' => 'admin\N4FormulirController@create']);
	Route::get('n4-formulir/create-cpw/{id}', ['as' => 'create', 'uses' => 'admin\N4FormulirController@createCpw']);
	Route::post('n4-formulir/create', ['as' => 'store', 'uses' => 'admin\N4FormulirController@store']);
	Route::get('n4-formulir/edit/{id}', ['as' => 'edit', 'uses' => 'admin\N4FormulirController@create']);
	Route::put('n4-formulir/edit/{id}', ['as' => 'edit', 'uses' => 'admin\N4FormulirController@update']);
	/*=======FORMULIR N4 CPW=========*/
	Route::get('n4-formulir/edit-cpw/{id}', ['as' => 'create', 'uses' => 'admin\N4FormulirController@createCpw']);
	Route::put('n1-formulir/edit-cpw/{id}', ['as' => 'edit', 'uses' => 'admin\N4FormulirController@update']);
	Route::get('n4-formulir/show/{id}', ['as' => 'show', 'uses' => 'admin\N4FormulirController@show']);
	Route::delete('n4-formulir/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\N4FormulirController@destroy']);

	/*=======FORMULIR N7=========*/
	Route::get('n7-formulir/create/{id}', ['as' => 'create', 'uses' => 'admin\N7FormulirController@create']);
	Route::post('n7-formulir/create', ['as' => 'store', 'uses' => 'admin\N7FormulirController@store']);
	Route::get('n7-formulir/edit/{id}', ['as' => 'edit', 'uses' => 'admin\N7FormulirController@edit']);
	Route::put('n7-formulir/edit/{id}', ['as' => 'edit', 'uses' => 'admin\N7FormulirController@update']);
	Route::get('n7-formulir/show/{id}', ['as' => 'show', 'uses' => 'admin\N7FormulirController@show']);
	Route::delete('n7-formulir/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\N7FormulirController@destroy']);

	/*=======Kontak=========*/
	Route::get('contact/index', ['as' => 'content', 'uses' => 'admin\KontakController@index']);
	Route::get('contact/show/{id}', ['as' => 'show', 'uses' => 'admin\KontakController@show']);
	Route::delete('contact/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\KontakController@destroy']);

	// Kalender
	Route::get('kalender/index', ['as' => 'content', 'uses' => 'admin\KalenderController@index']);
	Route::get('kalender/create', ['as' => 'create', 'uses' => 'admin\KalenderController@create']);
	Route::post('kalender/create', ['as' => 'store', 'uses' => 'admin\KalenderController@store']);
	Route::get('kalender/edit/{id}', ['as' => 'edit', 'uses' => 'admin\KalenderController@edit']);
	Route::put('kalender/edit/{id}', ['as' => 'edit', 'uses' => 'admin\KalenderController@update']);
	Route::get('kalender/show/{id}', ['as' => 'show', 'uses' => 'admin\KalenderController@show']);
	Route::delete('kalender/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\KalenderController@destroy']);
	Route::get('/searchkalender', ['as' => 'searchkalender', 'uses' => 'admin\KalenderController@search']);

	// Print
	Route::get('print-n1/{id}', ['as' => 'content', 'uses' => 'PrintFormulirController@printN1']);
	Route::get('print-n4/{id}', ['as' => 'content', 'uses' => 'PrintFormulirController@printN4']);
	Route::get('print-n7/{id}', ['as' => 'content', 'uses' => 'PrintFormulirController@printN7']);

	// Puskesmas
	Route::get('cek-kesehatan', ['as' => 'content', 'uses' => 'admin\PuskesmasController@cek']);
	Route::get('ceklist-kesehatan/{id}', ['as' => 'content', 'uses' => 'admin\PuskesmasController@ceklistKesehatan']);
	Route::get('print-kesehatan/{id}', ['as' => 'content', 'uses' => 'PrintFormulirController@printKesehatan']);
	Route::get('print-suratsehat/{id}', ['as' => 'content', 'uses' => 'PrintFormulirController@printSuratsehat']);
	Route::post('ceklist/create', ['as' => 'store', 'uses' => 'admin\PuskesmasController@paraf']);
	Route::delete('ceklist/destroy/{id}', ['as' => 'destroy', 'uses' => 'admin\PuskesmasController@destroyTtd']);

	Route::get('list-check-kesehatan', ['as' => 'content', 'uses' => 'admin\KesehatanController@index']);
	Route::get('cek-dokter/{id}', ['as' => 'cek-dokter', 'uses' => 'admin\KesehatanController@newCheck']);
	Route::get('cek-dokter-cpw/{id}', ['as' => 'cek-dokter', 'uses' => 'admin\KesehatanController@newCheckCpw']);
	Route::post('cek-dokter/create/{id}', ['as' => 'store', 'uses' => 'admin\KesehatanController@store']);
	Route::get('print-surat-sehat/{id}', ['as' => 'content', 'uses' => 'admin\KesehatanController@print']);
	Route::post('cek-dokter/update/{id}', ['as' => 'update', 'uses' => 'admin\KesehatanController@update']);

	Route::get('list-laboratorium', ['as' => 'content', 'uses' => 'admin\PuskesmasController@listLaboratorium']);
	Route::get('pilih-catin-laboratorium/{id}', ['as' => 'content', 'uses' => 'admin\PuskesmasController@pilihPengantinlaboratorium']);
	Route::get('cek-laboratorium/{id}', ['as' => 'content', 'uses' => 'admin\PuskesmasController@cekLaboratorium']);
	Route::get('print-hasil-laboratorium/{id}', ['as' => 'content', 'uses' => 'PrintFormulirController@printLaboratorium']);
	// Create and Update Cpp
	Route::post('cek-laboratorium/create', ['as' => 'store', 'uses' => 'admin\PuskesmasController@storeLab']);
	Route::get('cek-laboratorium/edit/{id}', ['as' => 'edit', 'uses' => 'admin\PuskesmasController@editCekLab']);
	Route::put('cek-laboratorium/edit/{id}', ['as' => 'edit', 'uses' => 'admin\PuskesmasController@updateLab']);
	// Create and Update Cpw
	Route::get('cek-laboratorium-cpw/{id}', ['as' => 'content', 'uses' => 'admin\PuskesmasController@cekLaboratoriumCpw']);
	Route::get('cek-laboratorium-cpw/edit/{id}', ['as' => 'edit', 'uses' => 'admin\PuskesmasController@editCekLabCpw']);
	Route::put('cek-laboratorium-cpw/edit/{id}', ['as' => 'edit', 'uses' => 'admin\PuskesmasController@updateLab']);

	// Bkkbn
	Route::get('cek-kie', ['as' => 'content', 'uses' => 'admin\BkkbnController@cek']);
	Route::get('ceklist-kie/{id}', ['as' => 'content', 'uses' => 'admin\BkkbnController@cekList']);
	Route::post('ceklist-bkkbn/create', ['as' => 'store', 'uses' => 'admin\BkkbnController@paraf']);
	Route::get('sertifikat-bkkbn-cpp', ['as' => 'content', 'uses' => 'admin\BkkbnController@sertifikatCpp']);
	Route::get('sertifikat-bkkbn-cpw/{id}', ['as' => 'content', 'uses' => 'admin\BkkbnController@sertifikatCpw']);
});