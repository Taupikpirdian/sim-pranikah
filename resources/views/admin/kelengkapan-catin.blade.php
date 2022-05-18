@extends('layouts.admin')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<div class="content-i">
  <div class="content-box">
    <div class="element-wrapper">
      <h6 class="element-header">
       	Formulir Kelengkapan Pernikahan
      </h6>
      @if($errors->any())
        <div class="alert alert-success alert-block">
          <button type="button" style="color:#fff;" class="close" data-dismiss="alert">x</button>
          <strong style="font-family: Palatino; font-size: 14px">{{$errors->first()}}</strong>
        </div>
      @endif
      <div class="element-wrapper">
      <!-- Start Form Edit        -->
      <div class="col-md-12 text-center" style="margin: 15px;">
        <h2>Data Calon Pengantin Pria</h2>
      </div>
      {!! Form::model($biodatas,['method'=>'put', 'files'=> 'true', 'action'=>['admin\BiodataController@update',$biodatas->id]]) !!}
        <div class="element-box col-md-12">
            <section class="content">
              <div class="col-md-12">
                <div class="row">
                    <!-- form buka -->
                    <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                        {{ Form::label("id", "Id Biodata CPP", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="id_cpp" value="{{ $biodatas->biodataCpp->id }}" class="form-control" required="required", placeholder= "">
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
                        {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nama_lengkap_cpp" value="{{ $biodatas->biodataCpp->nama_lengkap }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('nama_lengkap'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nama_lengkap') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('jk') ? ' has-error' : '' }}">
                        {{ Form::label("jk", "Jenis Kelamin *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          {{ Form::select('jk_cpp', $jk, $biodatas->biodataCpp->jk,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Masukan Status']) }}
                          </div>
                          @if ($errors->has('jk'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('jk') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                      {{ Form::label("tempat_lahir", "Tempat Lahir *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="tempat_lahir_cpp" value="{{ $biodatas->biodataCpp->tempat_lahir }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                      {{ Form::label("tanggal_lahir", "Tanggal Lahir *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="tanggal_lahir_cpp" value="{{ $biodatas->biodataCpp->tanggal_lahir }}" class="form-control" id="datepicker" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('warga_negara') ? ' has-error' : '' }}">
                      {{ Form::label("warga_negara", "Warga Negara *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="warga_negara_cpp" value="{{ $biodatas->biodataCpp->warga_negara }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('warga_negara'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warga_negara') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('agama') ? ' has-error' : '' }}">
                      {{ Form::label("agama", "Agama *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="agama_cpp" value="{{ $biodatas->biodataCpp->agama }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                      {{ Form::label("pekerjaan", "Pekerjaan *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="pekerjaan_cpp" value="{{ $biodatas->biodataCpp->pekerjaan }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('pekerjaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pekerjaan') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('alamat') ? ' has-error' : '' }}">
                      {{ Form::label("tempat_tinggal", "Tempat Tinggal *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="tempat_tinggal_cpp" value="{{ $biodatas->biodataCpp->tempat_tinggal }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('tempat_tinggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_tinggal') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <!-- form tutup -->
                </div>
              </div>
            </section>
        </div>

        <div class="col-md-12 text-center" style="margin: 15px;">
          <h2>Data Calon Pengantin Wanita</h2>
        </div>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="col-md-12">
                <div class="row">
                  <!-- form buka -->
                  <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                        {{ Form::label("id", "Id Biodata CPW", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="id_cpw" value="{{ $biodatas->biodataCpw->id }}" class="form-control" required="required", placeholder= "">
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
                        {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nama_lengkap_cpw" value="{{ $biodatas->biodataCpw->nama_lengkap }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('nama_lengkap'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nama_lengkap') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('jk') ? ' has-error' : '' }}">
                        {{ Form::label("jk", "Jenis Kelamin *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          {{ Form::select('jk_cpw', $jk, $biodatas->biodataCpw->jk,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Masukan Status']) }}
                          </div>
                          @if ($errors->has('jk'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('jk') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                      {{ Form::label("tempat_lahir", "Tempat Lahir *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="tempat_lahir_cpw" value="{{ $biodatas->biodataCpw->tempat_lahir }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                      {{ Form::label("tanggal_lahir", "Tanggal Lahir *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="tanggal_lahir_cpw" value="{{ $biodatas->biodataCpw->tanggal_lahir }}" class="form-control" id="datepicker2" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('warga_negara') ? ' has-error' : '' }}">
                      {{ Form::label("warga_negara", "Warga Negara *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="warga_negara_cpw" value="{{ $biodatas->biodataCpw->warga_negara }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('warga_negara'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warga_negara') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('agama') ? ' has-error' : '' }}">
                      {{ Form::label("agama", "Agama *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="agama_cpw" value="{{ $biodatas->biodataCpw->agama }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                      {{ Form::label("pekerjaan", "Pekerjaan *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="pekerjaan_cpw" value="{{ $biodatas->biodataCpw->pekerjaan }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('pekerjaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pekerjaan') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('alamat') ? ' has-error' : '' }}">
                      {{ Form::label("tempat_tinggal", "Tempat Tinggal *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                        <input type="text" name="tempat_tinggal_cpw" value="{{ $biodatas->biodataCpw->tempat_tinggal }}" class="form-control" required="required", placeholder= "">
                        </div>
                        @if ($errors->has('tempat_tinggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_tinggal') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                <!-- form tutup -->
                </div>
              </div>
            </section>
        </div>

        <div class="col-md-12 text-center" style="margin: 15px;">
          <h2>Data Orang Tua Pria</h2>
        </div>
        <div class="element-box col-md-12">
          <section class="content">
            <div class="col-md-12">
              <div class="row">
                <!-- form buka -->
                <div class="col-md-6" style="display: none;">
                  <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    {{ Form::label("id", "Id Biodata Bapak CPP", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="id_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->id }}" class="form-control" required="required", placeholder= "">
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
                    {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias Ayah *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="nama_lengkap_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->nama_lengkap }}" class="form-control" required="required", placeholder= "">
                      </div>
                      @if ($errors->has('nama_lengkap'))
                          <span class="help-block">
                              <strong>{{ $errors->first('nama_lengkap') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6" style="display: none;">
                  <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    {{ Form::label("id", "Id Biodata Ibu CPP", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="id_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->id }}" class="form-control" required="required", placeholder= "">
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
                    {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias Ibu *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="nama_lengkap_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->nama_lengkap }}" class="form-control" required="required", placeholder= "">
                      </div>
                      @if ($errors->has('nama_lengkap'))
                          <span class="help-block">
                              <strong>{{ $errors->first('nama_lengkap') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('jk') ? ' has-error' : '' }}">
                    {{ Form::label("jk", "Jenis Kelamin *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      {{ Form::select('jk_bapak_cpp', $jk, $biodatas->biodataBapakCpp->jk,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Masukan Status']) }}
                      </div>
                      @if ($errors->has('jk'))
                          <span class="help-block">
                              <strong>{{ $errors->first('jk') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('jk') ? ' has-error' : '' }}">
                    {{ Form::label("jk", "Jenis Kelamin *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      {{ Form::select('jk_ibu_cpp', $jk, $biodatas->biodataIbuCpp->jk,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Masukan Status']) }}
                      </div>
                      @if ($errors->has('jk'))
                          <span class="help-block">
                              <strong>{{ $errors->first('jk') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_lahir", "Tempat Lahir Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_lahir_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->tempat_lahir }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_lahir", "Tempat Lahir Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_lahir_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->tempat_lahir }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tanggal_lahir", "Tanggal Lahir Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tanggal_lahir_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->tanggal_lahir }}" class="form-control" id="datepicker3" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tanggal_lahir", "Tanggal Lahir Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tanggal_lahir_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->tanggal_lahir }}" class="form-control" id="datepicker4" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('warga_negara') ? ' has-error' : '' }}">
                  {{ Form::label("warga_negara", "Warga Negara Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="warga_negara_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->warga_negara }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('warga_negara'))
                        <span class="help-block">
                            <strong>{{ $errors->first('warga_negara') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('warga_negara') ? ' has-error' : '' }}">
                  {{ Form::label("warga_negara", "Warga Negara Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="warga_negara_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->warga_negara }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('warga_negara'))
                        <span class="help-block">
                            <strong>{{ $errors->first('warga_negara') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('agama') ? ' has-error' : '' }}">
                  {{ Form::label("agama", "Agama Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="agama_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->agama }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('agama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('agama') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('agama') ? ' has-error' : '' }}">
                  {{ Form::label("agama", "Agama Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="agama_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->agama }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('agama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('agama') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                  {{ Form::label("pekerjaan", "Pekerjaan Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="pekerjaan_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->pekerjaan }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('pekerjaan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pekerjaan') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                  {{ Form::label("pekerjaan", "Pekerjaan Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="pekerjaan_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->pekerjaan }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('pekerjaan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pekerjaan') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_tinggal') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_tinggal", "Tempat Tinggal Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_tinggal_bapak_cpp" value="{{ $biodatas->biodataBapakCpp->tempat_tinggal }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_tinggal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_tinggal') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_tinggal') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_tinggal", "Tempat Tinggal Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_tinggal_ibu_cpp" value="{{ $biodatas->biodataIbuCpp->tempat_tinggal }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_tinggal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_tinggal') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <!-- form tutup -->
              </div>
            </div>
          </section>
        </div>

        <div class="col-md-12 text-center" style="margin: 15px;">
          <h2>Data Orang Tua Wanita</h2>
        </div>
        <div class="element-box col-md-12">
          <section class="content">
            <div class="col-md-12">
              <div class="row">
                <!-- form buka -->
                <div class="col-md-6" style="display: none;">
                  <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    {{ Form::label("id", "Id Biodata Bapak CPW", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="id_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->id }}" class="form-control" required="required", placeholder= "">
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
                    {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias Ayah *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="nama_lengkap_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->nama_lengkap }}" class="form-control" required="required", placeholder= "">
                      </div>
                      @if ($errors->has('nama_lengkap'))
                          <span class="help-block">
                              <strong>{{ $errors->first('nama_lengkap') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6" style="display: none;">
                  <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    {{ Form::label("id", "Id Biodata Ibu CPW", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="id_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->id }}" class="form-control" required="required", placeholder= "">
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
                    {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias Ibu *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="nama_lengkap_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->nama_lengkap }}" class="form-control" required="required", placeholder= "">
                      </div>
                      @if ($errors->has('nama_lengkap'))
                          <span class="help-block">
                              <strong>{{ $errors->first('nama_lengkap') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('jk') ? ' has-error' : '' }}">
                    {{ Form::label("jk", "Jenis Kelamin *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      {{ Form::select('jk_bapak_cpw', $jk, $biodatas->biodataBapakCpw->jk,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Masukan Status']) }}
                      </div>
                      @if ($errors->has('jk'))
                          <span class="help-block">
                              <strong>{{ $errors->first('jk') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('jk') ? ' has-error' : '' }}">
                    {{ Form::label("jk", "Jenis Kelamin *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      {{ Form::select('jk_ibu_cpw', $jk, $biodatas->biodataIbuCpw->jk,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Masukan Status']) }}
                      </div>
                      @if ($errors->has('jk'))
                          <span class="help-block">
                              <strong>{{ $errors->first('jk') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_lahir", "Tempat Lahir Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_lahir_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->tempat_lahir }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_lahir", "Tempat Lahir Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_lahir_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->tempat_lahir }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tanggal_lahir", "Tanggal Lahir Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tanggal_lahir_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->tanggal_lahir }}" class="form-control" id="datepicker5" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                  {{ Form::label("tanggal_lahir", "Tanggal Lahir Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tanggal_lahir_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->tanggal_lahir }}" class="form-control" id="datepicker6" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('warga_negara') ? ' has-error' : '' }}">
                  {{ Form::label("warga_negara", "Warga Negara Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="warga_negara_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->warga_negara }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('warga_negara'))
                        <span class="help-block">
                            <strong>{{ $errors->first('warga_negara') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('warga_negara') ? ' has-error' : '' }}">
                  {{ Form::label("warga_negara", "Warga Negara Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="warga_negara_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->warga_negara }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('warga_negara'))
                        <span class="help-block">
                            <strong>{{ $errors->first('warga_negara') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('agama') ? ' has-error' : '' }}">
                  {{ Form::label("agama", "Agama Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="agama_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->agama }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('agama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('agama') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('agama') ? ' has-error' : '' }}">
                  {{ Form::label("agama", "Agama Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="agama_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->agama }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('agama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('agama') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                  {{ Form::label("pekerjaan", "Pekerjaan Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="pekerjaan_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->pekerjaan }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('pekerjaan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pekerjaan') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                  {{ Form::label("pekerjaan", "Pekerjaan Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="pekerjaan_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->pekerjaan }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('pekerjaan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pekerjaan') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_tinggal') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_tinggal", "Tempat Tinggal Ayah *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_tinggal_bapak_cpw" value="{{ $biodatas->biodataBapakCpw->tempat_tinggal }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_tinggal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_tinggal') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('tempat_tinggal') ? ' has-error' : '' }}">
                  {{ Form::label("tempat_tinggal", "Tempat Tinggal Ibu *", ['class' => 'col-md-12 control-label']) }}
                    <div class='col-md-12'>
                    <input type="text" name="tempat_tinggal_ibu_cpw" value="{{ $biodatas->biodataIbuCpw->tempat_tinggal }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_tinggal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_tinggal') }}</strong>
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
            <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Edit Data Master</button>
          </div>
        </div>
      {!! Form::close() !!}
      </div>
      <!-- End Form Edit   -->
      @if (Auth::user()->hasAnyRole('Kua') || Auth::user()->hasAnyRole('Admin') )
        <div class="tablos">
          <div class="row mb-xl-2 mb-xxl-3">

            <div class="col-sm-6">
              @if($is_cpp_submitted)
                <a class="frmlr-form element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N1FormulirController@create",array($biodatas->id))}}'>
                <div class="value color-w">
                  Formulir N1 CPP
                </div>
              @else
                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N1FormulirController@create",array($biodatas->id))}}'>
                <div class="value">
                  Formulir N1 CPP
                </div>
              @endif
              </a>
            </div>
            
            <div class="col-sm-6">
              @if($is_cpw_submitted)
                <a class="frmlr-form element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N1FormulirController@createCpw",array($biodatas->id))}}'>
                <div class="value color-w">
                  Formulir N1 CPW
                </div>
              @else
                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N1FormulirController@createCpw",array($biodatas->id))}}'>
                <div class="value">
                  Formulir N1 CPW
                </div>
              @endif
              </a>
            </div>

            <div class="col-sm-6">
              @if($is_cpp_n4_submitted)
                <a class="frmlr-form element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N4FormulirController@create",array($biodatas->id))}}'>
                <div class="value color-w">
                  Formulir N4 CPP
                </div>
              @else
                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N4FormulirController@create",array($biodatas->id))}}'>
                <div class="value">
                  Formulir N4 CPP
                </div>
              @endif
              </a>
            </div>
            <div class="col-sm-6">
              @if($is_cpw_n4_submitted)
                <a class="frmlr-form element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N4FormulirController@createCpw",array($biodatas->id))}}'>
                <div class="value color-w">
                  Formulir N4 CPW
                </div>
              @else
                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N4FormulirController@createCpw",array($biodatas->id))}}'>
                <div class="value">
                  Formulir N4 CPW
                </div>
              @endif
              </a>
            </div>

            <div class="col-sm-6">
              @if($is_n7_submitted)
                <a class="frmlr-form element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N7FormulirController@create",array($biodatas->id))}}'>
                <div class="value color-w">
                  Formulir N7
                </div>
              @else
                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\N7FormulirController@create",array($biodatas->id))}}'>
                <div class="value">
                  Formulir N7
                </div>
              @endif
              </a>
            </div>

          </div>
        </div>
      @endif
    </div>
  </div>
</div>

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

<script type="text/javascript">
    $('#datepicker3').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>

<script type="text/javascript">
    $('#datepicker4').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>

<script type="text/javascript">
    $('#datepicker5').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>

<script type="text/javascript">
    $('#datepicker6').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>

@endsection
