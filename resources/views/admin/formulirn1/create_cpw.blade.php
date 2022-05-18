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
          DATA KELENGKAPAN PRANIKAH FORMULIR N1
        </h6>
       
        <div class="col-md-12 text-center" style="margin: 15px;">
          <strong>Data Calon Pengantin Wanita</strong>
        </div>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                        {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nama_lengkap_cpw" value="{{ $biodatas->biodataCpw->nama_lengkap }}" class="form-control" required="required", placeholder= "" disabled>
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
                          <input type="text" name="jk_cpw" value="{{ $biodatas->biodataCpw->jk }}" class="form-control" required="required", placeholder= "" disabled>
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
                        <input type="text" name="tempat_lahir_cpw" value="{{ $biodatas->biodataCpw->tempat_lahir }}" class="form-control" required="required", placeholder= "" disabled>
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
                        <input type="date" name="tanggal_lahir_cpw" value="{{ $biodatas->biodataCpw->tanggal_lahir }}" class="form-control" required="required", placeholder= "" disabled>
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
                        <input type="text" name="warga_negara_cpw" value="{{ $biodatas->biodataCpw->warga_negara }}" class="form-control" required="required", placeholder= "" disabled>
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
                        <input type="text" name="agama_cpw" value="{{ $biodatas->biodataCpw->agama }}" class="form-control" required="required", placeholder= "" disabled>
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
                        <input type="text" name="pekerjaan_cpw" value="{{ $biodatas->biodataCpw->pekerjaan }}" class="form-control" required="required", placeholder= "" disabled>
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
                        <input type="text" name="tempat_tinggal_cpw" value="{{ $biodatas->biodataCpw->tempat_tinggal }}" class="form-control" required="required", placeholder= "" disabled>
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
          <strong>Input Data Kebutuhan Formulir N1</strong>
        </div>
        {{ Form::open(array('url' => '/n1-formulir/create', 'files' => true, 'method' => 'post')) }}
        <div class="element-box col-md-12">
            <section class="content">
              <div class="col-md-12">
                <div class="row">
                    <!-- form buka -->
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('bin_binti') ? ' has-error' : '' }}">
                        {{ Form::label("bin_binti", "Bin/Binti", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="bin_binti" value="{{ old('bin_binti') }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('bin_binti'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('bin_binti') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('status_pernikahan') ? ' has-error' : '' }}">
                        {{ Form::label("status_pernikahan", "Status Pernikahan", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="status_pernikahan" value="{{ old('status_pernikahan') }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('status_pernikahan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('status_pernikahan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('status_pernikahan') ? ' has-error' : '' }}">
                        {{ Form::label("tipe_data_id", "Tipe Data", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="tipe_data_id" value="{{ $biodatas->biodataCpw->tipe_data_id }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('status_pernikahan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('status_pernikahan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('nama_mantan_pasangan') ? ' has-error' : '' }}">
                        {{ Form::label("nama_mantan_pasangan", "Nama Mantan Suami", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nama_mantan_pasangan" value="{{ old('nama_mantan_pasangan') }}" class="form-control" placeholder= "">
                          </div>
                          @if ($errors->has('nama_mantan_pasangan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nama_mantan_pasangan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('nomor_surat') ? ' has-error' : '' }}">
                        {{ Form::label("nomor_surat", "Nomor Surat", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nomor_surat" value="{{ old('nomor_surat') }}" class="form-control" placeholder= "">
                          </div>
                          @if ($errors->has('nomor_surat'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nomor_surat') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('desa') ? ' has-error' : '' }}">
                        {{ Form::label("desa", "Desa", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="desa" value="{{ old('desa') }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('desa'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('desa') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
                        {{ Form::label("kecamatan", "Kecamatan", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('kecamatan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('kecamatan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('kabupaten') ? ' has-error' : '' }}">
                        {{ Form::label("kabupaten", "Kabupaten", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="kabupaten" value="{{ old('kabupaten') }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('kabupaten'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('kabupaten') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('id') ? ' has-error' : '' }}">
                        {{ Form::label("id", "Id Biodata", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="id_cpw" value="{{ $biodatas->biodataCpw->id }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('id') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                      <div class="form-group clearfix{{ $errors->has('id') ? ' has-error' : '' }}">
                        {{ Form::label("id", "Id Cating", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="id_catin" value="{{ $biodatas->id }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('id') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('kota_pembuatan') ? ' has-error' : '' }}">
                        {{ Form::label("kota_pembuatan", "Kota", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="kota_pembuatan" value="{{ old('kota_pembuatan') }}" class="form-control" placeholder= "">
                          </div>
                          @if ($errors->has('kota_pembuatan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('kota_pembuatan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('tanggal_pembuatan') ? ' has-error' : '' }}">
                        {{ Form::label("tanggal_pembuatan", "Tanggal Pembuatan Formulir", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="tanggal_pembuatan" value="{{ old('tanggal_pembuatan') }}" class="form-control" id="datepicker" placeholder= "">
                          </div>
                          @if ($errors->has('tanggal_pembuatan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('tanggal_pembuatan') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('nama_lurah') ? ' has-error' : '' }}">
                        {{ Form::label("nama_lurah", "Nama Kepala Desa/Lurah", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nama_lurah" value="{{ old('nama_lurah') }}" class="form-control" placeholder= "">
                          </div>
                          @if ($errors->has('nama_lurah'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nama_lurah') }}</strong>
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
            <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
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
@endsection
