<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catin extends Model
{
	public function biodata()
	{
		return $this->hasMany('App\Biodata', 'catin_id', 'id');
	}

	public function biodataCpp()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 1);
	}

	public function biodataCpw()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 2);
	}

	public function biodataIbuCpp()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 3);
	}

	public function biodataIbuCpw()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 4);
	}

	public function biodataBapakCpp()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 5);
	}

	public function biodataBapakCpw()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 6);
	}

	public function biodataWali()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 7);
	}

	public function biodataSaksiCpp()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 8);
	}

	public function biodataSaksiCpw()
	{
		return $this->belongsTo('App\Biodata', 'id', 'catin_id')->where('biodatas.tipe_data_id', 9);
	}

	public function kesehatanCpp()
	{
		return $this->belongsTo('App\Kesehatan', 'id', 'catin_id')->where('kesehatans.tipe_data_id', 1);
	}

	public function kesehatanCpw()
	{
		return $this->belongsTo('App\Kesehatan', 'id', 'catin_id')->where('kesehatans.tipe_data_id', 2);
	}
}
