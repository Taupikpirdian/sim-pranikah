@extends('layouts.admin')

@section('content')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Cek Kesehatan
        </h6>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                    <h6 class="element-header">
                    Calon Pengantin Wanita
                    </h6>
                    @if($biodata->kesehatanCpw)
                    {!! Form::model($catin,['files'=>true,'method'=>'post','action'=>['admin\KesehatanController@update',$catin->kesehatanCpw->id]]) !!}
                    <div class="form-group clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{ Form::label("name", "Nama Pengantin", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" value="{{ $catin->biodataCpw->nama_lengkap }}" class="form-control" disabled>
                          <input style="display:none" name="biodata_id_cpw" type="text" value="{{ $catin->biodataCpw->id }}" class="form-control">
                          </div>
                    </div>

                    <div class="form-group clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{ Form::label("name", "Nama Dokter *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="name" value="{{ $catin->kesehatanCpw->name }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
                        {{ Form::label("kecamatan", "Kecamatan Dokter *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="kecamatan" value="{{ $catin->kesehatanCpw->kecamatan }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('kecamatan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('kecamatan') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('kelurahan') ? ' has-error' : '' }}">
                        {{ Form::label("kelurahan", "Kelurahan Dokter *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="kelurahan" value="{{ $catin->kesehatanCpw->kelurahan }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('kelurahan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('kelurahan') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('cek_narkoba') ? ' has-error' : '' }}">
                      {{ Form::label("cek_narkoba", "Cek Narkoba *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                          {{ Form::select('cek_narkoba', $type, $catin->kesehatanCpw->cek_narkoba,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Menggunakan Narkoba?']) }}
                        </div>
                        @if ($errors->has('cek_narkoba'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cek_narkoba') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('cek_cacat_badan') ? ' has-error' : '' }}">
                      {{ Form::label("cek_cacat_badan", "Cek Cacat Badan *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                            {{ Form::select('cek_cacat_badan', $type, $catin->kesehatanCpw->cek_cacat_badan,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Menggunakan Narkoba?']) }}
                        </div>
                        @if ($errors->has('cek_cacat_badan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cek_cacat_badan') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('cek_buta_warna') ? ' has-error' : '' }}">
                      {{ Form::label("cek_buta_warna", "Cek Buta Warna *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                            {{ Form::select('cek_buta_warna', $type, $catin->kesehatanCpw->cek_buta_warna,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Menggunakan Narkoba?']) }}
                        </div>
                        @if ($errors->has('cek_buta_warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cek_buta_warna') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('td') ? ' has-error' : '' }}">
                        {{ Form::label("td", "Nilai TD *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="td" value="{{$catin->kesehatanCpw->td}}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('td'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('td') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('tb') ? ' has-error' : '' }}">
                        {{ Form::label("tb", "Nilai TB *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="tb" value="{{ $catin->kesehatanCpw->tb }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('tb'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('tb') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('bb') ? ' has-error' : '' }}">
                        {{ Form::label("bb", "Berat Badan *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="bb" value="{{ $catin->kesehatanCpw->bb }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('bb'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('bb') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('goldar') ? ' has-error' : '' }}">
                      {{ Form::label("goldar", "Golongan Darah *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                            {{ Form::select('goldar', $goldar, $catin->kesehatanCpw->goldar,['class' => 'form-control' , 'required','value'=>null ,'placeholder' => 'Menggunakan Narkoba?']) }}
                        </div>
                        @if ($errors->has('goldar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('goldar') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('ket') ? ' has-error' : '' }}">
                        {{ Form::label("ket", "Deskripsi *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <textarea type="text" id="ckeditor" name="ket" value="{{ $catin->kesehatanCpw->ket }}" class="form-control article-ckeditor" required="required", placeholder= "Masukan Deskripsi" rows="4">{{ $catin->kesehatanCpw->ket }}</textarea>
                          </div>
                          @if ($errors->has('ket'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('ket') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class='form-group'>
                    <div class='col-md-4 col-md-offset-4'>
                      <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                    </div>
                  </div>
                  {!! Form::close() !!}

                  @else
                  {!! Form::model($catin,['files'=>true,'method'=>'post','action'=>['admin\KesehatanController@store',$catin->id]]) !!}

                    <div class="form-group clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{ Form::label("name", "Nama Pengantin", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" value="{{ $catin->biodataCpw->nama_lengkap }}" class="form-control" disabled>
                          <input style="display:none" name="biodata_id_cpw" type="text" value="{{ $catin->biodataCpw->id }}" class="form-control">
                          </div>
                    </div>

                    <div class="form-group clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
                        {{ Form::label("name", "Nama Dokter *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="name" value="{{ old('name') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
                        {{ Form::label("kecamatan", "Kecamatan Dokter *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="kecamatan" value="{{ old('kecamatan') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('kecamatan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('kecamatan') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('kelurahan') ? ' has-error' : '' }}">
                        {{ Form::label("kelurahan", "Kelurahan Dokter *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="kelurahan" value="{{ old('kelurahan') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('kelurahan'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('kelurahan') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('cek_narkoba') ? ' has-error' : '' }}">
                      {{ Form::label("cek_narkoba", "Cek Narkoba *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                          <select type="text" name="cek_narkoba" value="{{ old('cek_narkoba') }}" class="form-control" required="required">
                            <option>Menggunakan Narkoba?</option>
                            <option value="1">IYA</option>
                            <option value="0">TIDAK</option>
                          </select>
                        </div>
                        @if ($errors->has('cek_narkoba'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cek_narkoba') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('cek_cacat_badan') ? ' has-error' : '' }}">
                      {{ Form::label("cek_cacat_badan", "Cek Cacat Badan *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                          <select type="text" name="cek_cacat_badan" value="{{ old('cek_cacat_badan') }}" class="form-control" required="required">
                            <option>Ada Kecacatan Badan?</option>
                            <option value="1">IYA</option>
                            <option value="0">TIDAK</option>
                          </select>
                        </div>
                        @if ($errors->has('cek_cacat_badan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cek_cacat_badan') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('cek_buta_warna') ? ' has-error' : '' }}">
                      {{ Form::label("cek_buta_warna", "Cek Buta Warna *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                          <select type="text" name="cek_buta_warna" value="{{ old('cek_buta_warna') }}" class="form-control" required="required">
                            <option>Apakah Buta Warna?</option>
                            <option value="1">IYA</option>
                            <option value="0">TIDAK</option>
                          </select>
                        </div>
                        @if ($errors->has('cek_buta_warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cek_buta_warna') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('td') ? ' has-error' : '' }}">
                        {{ Form::label("td", "Nilai TD *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="td" value="{{ old('td') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('td'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('td') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('tb') ? ' has-error' : '' }}">
                        {{ Form::label("tb", "Nilai TB *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="tb" value="{{ old('tb') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('tb'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('tb') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('bb') ? ' has-error' : '' }}">
                        {{ Form::label("bb", "Berat Badan *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="bb" value="{{ old('bb') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('bb'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('bb') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('goldar') ? ' has-error' : '' }}">
                      {{ Form::label("goldar", "Golongan Darah *", ['class' => 'col-md-12 control-label']) }}
                        <div class='col-md-12'>
                          <select type="text" name="goldar" value="{{ old('goldar') }}" class="form-control" required="required">
                            <option>Pilih Golongan Darah?</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                          </select>
                        </div>
                        @if ($errors->has('goldar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('goldar') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('ket') ? ' has-error' : '' }}">
                        {{ Form::label("ket", "Deskripsi *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <textarea type="text" id="ckeditor" name="ket" value="{{ old('ket') }}" class="form-control article-ckeditor" required="required", placeholder= "Masukan Deskripsi" rows="4"></textarea>
                          </div>
                          @if ($errors->has('ket'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('ket') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class='form-group'>
                    <div class='col-md-4 col-md-offset-4'>
                      <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                    </div>
                  </div>
                  {!! Form::close() !!}

                @endif
                </div>
              </div>
            </section>
        </div>
      </div>
    </div>
  </div>

  <!-- CKEditor init -->

@endsection
