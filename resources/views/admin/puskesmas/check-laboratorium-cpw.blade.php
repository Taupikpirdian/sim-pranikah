@extends('layouts.admin')

@section('content')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Check Laboratorium
        </h6>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                {{ Form::open(array('url' => '/cek-laboratorium/create', 'files' => true, 'method' => 'post')) }}
                <div class="row">
                  <div class="col-md-12">
                    <label>Data Pasien</label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group clearfix{{ $errors->has('id_catin') ? ' has-error' : '' }}" style="display: none;">
                        {{ Form::label("id_catin", "Id Catin *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="id_catin" value="{{ $catin->id }}" class="form-control" required="required", placeholder= "-">
                          </div>
                          @if ($errors->has('id_catin'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('id_catin') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('biodata_id') ? ' has-error' : '' }}" style="display: none;">
                        {{ Form::label("biodata_id", "Nama *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="biodata_id" value="{{ $catin->biodataCpw->id }}" class="form-control" required="required", placeholder= "-">
                          </div>
                          @if ($errors->has('biodata_id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('biodata_id') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('judul') ? ' has-error' : '' }}">
                        {{ Form::label("title", "Nama *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" value="{{ $catin->biodataCpw->nama_lengkap }}" class="form-control" required="required", placeholder= "-" disabled>
                          </div>
                          @if ($errors->has('judul'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('judul') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('judul') ? ' has-error' : '' }}">
                        {{ Form::label("title", "Umur *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" value="{{ $age_cpw }}" class="form-control" required="required", placeholder= "-" disabled>
                          </div>
                          @if ($errors->has('judul'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('judul') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('pemeriksa') ? ' has-error' : '' }}">
                        {{ Form::label("pemeriksa", "Pemeriksa *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="pemeriksa" value="{{ old('pemeriksa') }}" class="form-control" required="required", placeholder= "-">
                          </div>
                          @if ($errors->has('pemeriksa'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('pemeriksa') }}</strong>
                              </span>
                          @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group clearfix{{ $errors->has('judul') ? ' has-error' : '' }}">
                        {{ Form::label("title", "Alamat *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" value="{{ $catin->biodataCpw->tempat_tinggal }}" class="form-control" required="required", placeholder= "-" disabled>
                          </div>
                          @if ($errors->has('judul'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('judul') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('dokter') ? ' has-error' : '' }}">
                        {{ Form::label("dokter", "Dokter *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="dokter" value="{{ old('dokter') }}" class="form-control" required="required", placeholder= "-">
                          </div>
                          @if ($errors->has('dokter'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('dokter') }}</strong>
                              </span>
                          @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <div class="col-md-12" style="margin-top: 40PX">
                   <label>Check Laboratorium</label>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group clearfix{{ $errors->has('hgb_hb') ? ' has-error' : '' }}">
                        {{ Form::label("hgb_hb", "HGB / HB *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="hgb_hb" value="{{ old('hgb_hb') }}" class="form-control" required="required", placeholder= "-">
                          </div>
                          @if ($errors->has('hgb_hb'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('hgb_hb') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('goldar') ? ' has-error' : '' }}">
                        {{ Form::label("goldar", "GOL DAR *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="goldar" value="{{ old('goldar') }}" class="form-control" required="required", placeholder= "-">
                          </div>
                          @if ($errors->has('goldar'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('goldar') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('syphilis') ? ' has-error' : '' }}">
                        {{ Form::label("syphilis", "SYPHILIS *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <select name="syphilis" class="form-control">
                            <option value="Negatif">Negatif</option>
                            <option value="Positif">Positif</option>
                          </select>
                          </div>
                          @if ($errors->has('syphilis'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('syphilis') }}</strong>
                              </span>
                          @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group clearfix{{ $errors->has('glukosa') ? ' has-error' : '' }}">
                        {{ Form::label("glukosa", "GLUKOSA *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                         <select name="glukosa" class="form-control">
                            <option value="Negatif">Negatif</option>
                            <option value="Positif">Positif</option>
                          </select>
                          @if ($errors->has('glukosa'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('glukosa') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('hbsag') ? ' has-error' : '' }}">
                        {{ Form::label("hbsag", "HBsAG *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                         <select name="hbsag" class="form-control">
                            <option value="Negatif">Negatif</option>
                            <option value="Positif">Positif</option>
                          </select>
                          </div>
                          @if ($errors->has('hbsag'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('hbsag') }}</strong>
                              </span>
                          @endif
                    </div>
                    <div class="form-group clearfix{{ $errors->has('hiv_aids') ? ' has-error' : '' }}">
                        {{ Form::label("hiv_aids", "HIV / AIDS *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <select name="hiv_aids" class="form-control">
                            <option value="Negatif">Negatif</option>
                            <option value="Positif">Positif</option>
                          </select>
                          </div>
                          @if ($errors->has('hiv_aids'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('hiv_aids') }}</strong>
                              </span>
                          @endif
                    </div>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='col-md-4 col-md-offset-4'>
                    <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                  </div>
                </div>
                {!! Form::close() !!}
                </div>
              </div>
            </section>
        </div>
      </div>
    </div>
  </div>

  <!-- CKEditor init -->

@endsection
