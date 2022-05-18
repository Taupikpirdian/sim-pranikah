<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
	public function n1Formulir()
	{
		return $this->belongsTo('App\N1Formulir', 'id', 'biodata_id');
	}

	public function n4Formulir()
	{
		return $this->belongsTo('App\N4Formulir', 'id', 'biodata_id');
	}

	public function n7Formulir()
	{
		return $this->belongsTo('App\N7Formulir', 'id', 'biodata_cpp_id');
	}

	public function cekKesehatanTT1()
	{
		return $this->belongsTo('App\KartuKemenkesRi', 'id', 'biodata_id')->where('kartu_kemenkes_ris.tipe_data_id', "TT1");
	}

	public function cekKesehatanTT2()
	{
		return $this->belongsTo('App\KartuKemenkesRi', 'id', 'biodata_id')->where('kartu_kemenkes_ris.tipe_data_id', "TT2");
	}

	public function cekKesehatanTT3()
	{
		return $this->belongsTo('App\KartuKemenkesRi', 'id', 'biodata_id')->where('kartu_kemenkes_ris.tipe_data_id', "TT3");
	}

	public function cekKesehatanTT4()
	{
		return $this->belongsTo('App\KartuKemenkesRi', 'id', 'biodata_id')->where('kartu_kemenkes_ris.tipe_data_id', "TT4");
	}

	public function cekKesehatanTT5()
	{
		return $this->belongsTo('App\KartuKemenkesRi', 'id', 'biodata_id')->where('kartu_kemenkes_ris.tipe_data_id', "TT5");
	}

	public function sertifikatCPP()
	{
		return $this->belongsTo('App\SertifikatBkkbn', 'id', 'biodata_id')->where('sertifikat_bkkbns.status', "CPP Sertifikat");
	}

	public function sertifikatCPW()
	{
		return $this->belongsTo('App\SertifikatBkkbn', 'id', 'biodata_id')->where('sertifikat_bkkbns.status', "CPW Sertifikat");
	}

	public function cekLabCPP()
	{
		return $this->belongsTo('App\CekLab', 'id', 'biodata_id');
	}

	public function cekLabCPW()
	{
		return $this->belongsTo('App\CekLab', 'id', 'biodata_id');
	}

}
