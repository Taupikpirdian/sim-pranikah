@extends('layouts.admin')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>

<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">

        <h6 class="element-header">
          DATA KELENGKAPAN PRANIKAH FORMULIR N7
        </h6>
       
        <div class="col-md-12 text-center" style="margin: 15px;">
          <strong>Input Data Kebutuhan Formulir N7</strong>
        </div>
        {!! Form::model($biodatas,['method'=>'put', 'files'=> 'true', 'action'=>['admin\N7FormulirController@update',$biodatas->biodataCpp->n7Formulir->id]]) !!}
        <div class="element-box col-md-12">
            <section class="content">
              <div class="col-md-12">
                <div class="row">
                    <!-- form buka -->
                    <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('id') ? ' has-error' : '' }}">
                        {{ Form::label("id", "Biodata Cpp Id", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="catin_id" value="{{ $biodatas->id }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('id') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('biodata_cpp_id') ? ' has-error' : '' }}">
                        {{ Form::label("biodata_cpp_id", "Biodata Cpp Id", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="biodata_cpp_id" value="{{ $biodatas->biodataCpp->id }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('biodata_cpp_id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('biodata_cpp_id') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('biodata_cpw_id') ? ' has-error' : '' }}">
                        {{ Form::label("biodata_cpw_id", "Biodata Cpw Id", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="biodata_cpw_id" value="{{ $biodatas->biodataCpw->id }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('biodata_cpw_id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('biodata_cpw_id') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                        {{ Form::label("nama_lengkap", "Nama Calon Pengantin Pria", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" value="{{ $biodatas->biodataCpp->nama_lengkap }}" class="form-control" required="required", placeholder= "" disabled>
                          </div>
                          @if ($errors->has('nama_lengkap'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nama_lengkap') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                        {{ Form::label("nama_lengkap", "Nama Calon Pengantin Wanita", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" value="{{ $biodatas->biodataCpw->nama_lengkap }}" class="form-control" required="required", placeholder= "" disabled>
                          </div>
                          @if ($errors->has('nama_lengkap'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nama_lengkap') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('lampiran') ? ' has-error' : '' }}">
                        {{ Form::label("lampiran", "Lampiran", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="lampiran" value="{{ $biodatas->biodataCpp->n7Formulir->lampiran }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('lampiran'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('lampiran') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('lembar') ? ' has-error' : '' }}">
                        {{ Form::label("lembar", "Lembar", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="lembar" value="{{ $biodatas->biodataCpp->n7Formulir->lembar }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('lembar'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('lembar') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('lokasi_pengiriman') ? ' has-error' : '' }}">
                        {{ Form::label("lokasi_pengiriman", "Lokasi Pengiriman", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="lokasi_pengiriman" value="{{ $biodatas->biodataCpp->n7Formulir->lokasi_pengiriman }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('lokasi_pengiriman'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('lokasi_pengiriman') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tanggal_pernikahan') ? ' has-error' : '' }}">
                        {{ Form::label("tanggal_pernikahan", "Tanggal Pernikahan", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="tanggal_pernikahan" value="{{ $biodatas->biodataCpp->n7Formulir->tanggal_pernikahan }}" class="form-control" id="datepicker" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('tanggal_pernikahan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('tanggal_pernikahan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('jam_pernikahan') ? ' has-error' : '' }}">
                        {{ Form::label("jam_pernikahan", "Jam Pernikahan", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="jam_pernikahan" value="{{ $biodatas->biodataCpp->n7Formulir->jam_pernikahan }}" class="form-control" placeholder= "">
                          </div>
                          @if ($errors->has('jam_pernikahan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('jam_pernikahan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('mas_kawin') ? ' has-error' : '' }}">
                        {{ Form::label("mas_kawin", "Mas Kawin", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="mas_kawin" value="{{ $biodatas->biodataCpp->n7Formulir->mas_kawin }}" class="form-control" placeholder= "">
                          </div>
                          @if ($errors->has('mas_kawin'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('mas_kawin') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tempat_pernikahan') ? ' has-error' : '' }}">
                        {{ Form::label("tempat_pernikahan", "Tempat Pernikahan", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="tempat_pernikahan" value="{{ $biodatas->biodataCpp->n7Formulir->tempat_pernikahan }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('tempat_pernikahan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('tempat_pernikahan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tanggal_terima') ? ' has-error' : '' }}">
                        {{ Form::label("tanggal_terima", "Tanggal Terima", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="tanggal_terima" value="{{ $biodatas->biodataCpp->n7Formulir->tanggal_terima }}" class="form-control" id="datepicker2" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('tanggal_terima'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('tanggal_terima') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('penerima') ? ' has-error' : '' }}">
                        {{ Form::label("penerima", "Nama Penerima", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="penerima" value="{{ $biodatas->biodataCpp->n7Formulir->penerima }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('penerima'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('penerima') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('pemberitahu') ? ' has-error' : '' }}">
                        {{ Form::label("pemberitahu", "Nama Pemberitahu", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="pemberitahu" value="{{ $biodatas->biodataCpp->n7Formulir->pemberitahu }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('pemberitahu'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('pemberitahu') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <!-- form tutup -->
                </div>
              </div>
            </section>
        </div>
        <div class='col-md-12 text-center'>
          <div class='form-group'>
            <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Edit</button>
          </div>
        </div>
      {!! Form::close() !!}
      </div>
    </div>
  </div>

  <!-- CKEditor init -->
<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>

<script type="text/javascript">
    $('#datepicker2').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>
@endsection
