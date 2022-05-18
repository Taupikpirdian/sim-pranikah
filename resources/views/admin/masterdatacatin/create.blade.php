@extends('layouts.admin')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

@if($errors->any())
<div class="alert alert-danger alert-block">
  <button type="button" style="color:#fff;" class="close" data-dismiss="alert">x</button>
  <strong style="font-family: Palatino; font-size: 14px">{{$errors->first()}}</strong>
</div>
@endif

<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          DATA MASTER CALON PENGANTIN PRIA & WANITA BESERTA KEDUA KELUARGA MEMPELAI
        </h6>
       
        <div class="col-md-12 text-center" style="margin: 15px;">
          <strong>Input Data Calon Pengantin Pria</strong>
        </div>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                    {{ Form::open(array('url' => '/data-master-catin/create', 'files' => true, 'method' => 'post')) }}
                      <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                        {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nama_lengkap_cpp" id="nama_lengkap_cpp" value="{{ old('nama_lengkap_cpp') }}" class="form-control" required="required", placeholder= "">
                          </div>
                          @if ($errors->has('nama_lengkap_cpp'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('nama_lengkap_cpp') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group clearfix{{ $errors->has('jk') ? ' has-error' : '' }}">
                        {{ Form::label("jk", "Jenis Kelamin *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <select type="text" name="jk_cpp" value="{{ old('jk_cpp') }}" class="form-control" required="required">
                              <option>Pilih Jenis Kelamin</option>
                              <option value="L">Laki-Laki</option>
                              <option value="P">Perempuan</option>
                          </select>
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
                        <input type="text" name="tempat_lahir_cpp" value="{{ old('tempat_lahir_cpp') }}" class="form-control" required="required", placeholder= "">
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
                        <input type="text" name="tanggal_lahir_cpp" value="{{ old('tanggal_lahir_cpp') }}" class="form-control" id="datepicker" required="required", placeholder= "">
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
                          <select type="text" name="warga_negara_cpp" value="{{ old('warga_negara_cpp') }}" class="form-control" required="required">
                            <option>Pilih Warga Negara</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                          </select>
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
                        <input type="text" name="agama_cpp" value="{{ old('agama_cpp') }}" class="form-control" required="required", placeholder= "">
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
                        <input type="text" name="pekerjaan_cpp" value="{{ old('pekerjaan_cpp') }}" class="form-control" required="required", placeholder= "">
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
                        <input type="text" name="tempat_tinggal_cpp" value="{{ old('tempat_tinggal_cpp') }}" class="form-control" required="required", placeholder= "">
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
          <strong>Input Data Calon Pengantin Wanita</strong>
        </div>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                    <!-- form buka -->
                      <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                        {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias *", ['class' => 'col-md-12 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="nama_lengkap_cpw" value="{{ old('nama_lengkap_cpw') }}" class="form-control" required="required", placeholder= "">
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
                          <select type="text" name="jk_cpw" value="{{ old('jk_cpw') }}" class="form-control" required="required">
                              <option>Pilih Jenis Kelamin</option>
                              <option value="L">Laki-Laki</option>
                              <option value="P">Perempuan</option>
                          </select>
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
                        <input type="text" name="tempat_lahir_cpw" value="{{ old('tempat_lahir_cpw') }}" class="form-control" required="required", placeholder= "">
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
                        <input type="text" name="tanggal_lahir_cpw" value="{{ old('tanggal_lahir_cpw') }}" class=" form-control" id="datepicker2" required="required", placeholder= "">
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
                          <select type="text" name="warga_negara_cpw" value="{{ old('warga_negara_cpw') }}" class="form-control" required="required">
                            <option>Pilih Warga Negara</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                          </select>
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
                        <input type="text" name="agama_cpw" value="{{ old('agama_cpw') }}" class="form-control" required="required", placeholder= "">
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
                        <input type="text" name="pekerjaan_cpw" value="{{ old('pekerjaan_cpw') }}" class="form-control" required="required", placeholder= "">
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
                        <input type="text" name="tempat_tinggal_cpw" value="{{ old('tempat_tinggal_cpw') }}" class="form-control" required="required", placeholder= "">
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
          <strong>Isi Data Orang Tua Pria</strong>
        </div>
        <div class="element-box col-md-12">
          <section class="content">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias Ayah *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="nama_lengkap_bapak_cpp" value="{{ old('nama_lengkap_bapak_cpp') }}" class="form-control" required="required", placeholder= "">
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
                      <input type="text" name="nama_lengkap_ibu_cpp" value="{{ old('nama_lengkap_ibu_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    {{ Form::label("jk", "Jenis Kelamin Ayah *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <select type="text" name="jk_bapak_cpp" value="{{ old('jk_bapak_cpp') }}" class="form-control" required="required">
                        <option>Pilih Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
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
                    {{ Form::label("jk", "Jenis Kelamin Ibu *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <select type="text" name="jk_ibu_cpp" value="{{ old('jk_ibu_cpp') }}" class="form-control" required="required">
                         <option>Pilih Jenis Kelamin</option>
                         <option value="L">Laki-Laki</option>
                         <option value="P">Perempuan</option>
                      </select>
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
                    <input type="text" name="tempat_lahir_bapak_cpp" value="{{ old('tempat_lahir_bapak_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tempat_lahir_ibu_cpp" value="{{ old('tempat_lahir_ibu_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tanggal_lahir_bapak_cpp" value="{{ old('tanggal_lahir_bapak_cpp') }}" class="form-control" id="datepicker3" required="required", placeholder= "">
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
                    <input type="text" name="tanggal_lahir_ibu_cpp" value="{{ old('tanggal_lahir_ibu_cpp') }}" class="form-control" id="datepicker4" required="required", placeholder= "">
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
                      <select type="text" name="warga_negara_bapak_cpp" value="{{ old('warga_negara_bapak_cpp') }}" class="form-control" required="required">
                        <option>Pilih Warga Negara</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
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
                      <select type="text" name="warga_negara_ibu_cpp" value="{{ old('warga_negara_ibu_cpp') }}" class="form-control" required="required">
                        <option>Pilih Warga Negara</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
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
                    <input type="text" name="agama_bapak_cpp" value="{{ old('agama_bapak_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="agama_ibu_cpp" value="{{ old('agama_ibu_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="pekerjaan_bapak_cpp" value="{{ old('pekerjaan_bapak_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="pekerjaan_ibu_cpp" value="{{ old('pekerjaan_ibu_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tempat_tinggal_bapak_cpp" value="{{ old('tempat_tinggal_bapak_cpp') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tempat_tinggal_ibu_cpp" value="{{ old('tempat_tinggal_ibu_cpp') }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_tinggal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_tinggal') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <div class="col-md-12 text-center" style="margin: 15px;">
          <strong>Isi Data Orang Tua Wanita</strong> 
        </div>
        <div class="element-box col-md-12">
          <section class="content">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group clearfix{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    {{ Form::label("nama_lengkap", "Nama Lengkap dan Alias Ayah *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <input type="text" name="nama_lengkap_bapak_cpw" value="{{ old('nama_lengkap_bapak_cpw') }}" class="form-control" required="required", placeholder= "">
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
                      <input type="text" name="nama_lengkap_ibu_cpw" value="{{ old('nama_lengkap_ibu_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    {{ Form::label("jk", "Jenis Kelamin Ayah *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <select type="text" name="jk_bapak_cpw" value="{{ old('jk_bapak_cpw') }}" class="form-control" required="required">
                         <option>Pilih Jenis Kelamin</option>
                         <option value="L">Laki-Laki</option>
                         <option value="P">Perempuan</option>
                      </select>
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
                    {{ Form::label("jk", "Jenis Kelamin Ibu *", ['class' => 'col-md-12 control-label']) }}
                      <div class='col-md-12'>
                      <select type="text" name="jk_ibu_cpw" value="{{ old('jk_ibu_cpw') }}" class="form-control" required="required">
                         <option>Pilih Jenis Kelamin</option>
                         <option value="L">Laki-Laki</option>
                         <option value="P">Perempuan</option>
                      </select>
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
                    <input type="text" name="tempat_lahir_bapak_cpw" value="{{ old('tempat_lahir_bapak_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tempat_lahir_ibu_cpw" value="{{ old('tempat_lahir_ibu_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tanggal_lahir_bapak_cpw" value="{{ old('tanggal_lahir_bapak_cpw') }}" class="form-control" id="datepicker5" required="required", placeholder= "">
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
                    <input type="text" name="tanggal_lahir_ibu_cpw" value="{{ old('tanggal_lahir_ibu_cpw') }}" class="form-control" id="datepicker6" required="required", placeholder= "">
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
                     <select type="text" name="warga_negara_bapak_cpw" value="{{ old('warga_negara_bapak_cpw') }}" class="form-control" required="required">
                        <option>Pilih Warga Negara</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
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
                     <select type="text" name="warga_negara_ibu_cpw" value="{{ old('warga_negara_ibu_cpw') }}" class="form-control" required="required">
                        <option>Pilih Warga Negara</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
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
                    <input type="text" name="agama_bapak_cpw" value="{{ old('agama_bapak_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="agama_ibu_cpw" value="{{ old('agama_ibu_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="pekerjaan_bapak_cpw" value="{{ old('pekerjaan_bapak_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="pekerjaan_ibu_cpw" value="{{ old('pekerjaan_ibu_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tempat_tinggal_bapak_cpw" value="{{ old('tempat_tinggal_bapak_cpw') }}" class="form-control" required="required", placeholder= "">
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
                    <input type="text" name="tempat_tinggal_ibu_cpw" value="{{ old('tempat_tinggal_ibu_cpw') }}" class="form-control" required="required", placeholder= "">
                    </div>
                    @if ($errors->has('tempat_tinggal'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_tinggal') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class='col-md-12 text-center'>
          <div class='form-group'>
            <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save Data Master</button>
          </div>
        </div>
      {!! Form::close() !!}
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
