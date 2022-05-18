@extends('layouts.admin')
@section('content')
<div class="content-i">
  <div class="content-box">
    <div class="element-wrapper">
      <h6 class="element-header">
          PROGRAM IMUNISASI TETANUS - TOKSOID
      </h6>
      <div class="element-box">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
            {{ Form::open(array('url' => '/ceklist/create', 'files' => true, 'method' => 'post')) }}
              <table class="table table-striped table-hover">
                <tr>
                    <div class="col-md-8 input-group mb-1" style="display:none;">
                    <div class="button button-primary" style="width:30%">Id CPW</div>
                        {{ Form::text('biodata_cpw_id', $biodata->biodataCpw->id,['class' => 'form-control', 'required', 'value'=>'']) }}
                    </div>
                </tr>
                <tr>
                    <div class="col-md-8 input-group mb-1" style="display:none;">
                    <div class="button button-primary" style="width:30%">Id Catin</div>
                        {{ Form::text('catin_id', $biodata->id,['class' => 'form-control', 'required', 'value'=>'']) }}
                    </div>
                </tr>
                <tr>
                    <div class="col-md-8 input-group mb-1">
                    <div class="button button-primary" style="width:30%">No</div>
                        {{ Form::text('no', '',['class' => 'form-control', 'value'=>'']) }}
                    </div>
                </tr>
                <tr>
                    <td width="200px">Nama</td>
                    <td>
                      {{{$biodata->biodataCpw->nama_lengkap}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Tanggal Lahir</td>
                    <td>
                      {{ Carbon\Carbon::parse($biodata->biodataCpw->tanggal_lahir)->formatLocalized('%B %d, %Y')}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Alamat</td>
                    <td>
                      {{{$biodata->biodataCpw->tempat_tinggal}}}
                    </td>
                </tr>
              </table>
              <table width="100%" class="table table-striped table-lightfont">
                  <thead>
                      <tr>
                          <th>Jenis</th>
                          <th><b>Deskripsi</b></th>
                          <th><b>Tanggal</b></th>
                          <th><b>Paraf</b></th>
                      </tr>
                  </thead>
                  <tr>
                      <td>TT1</td>
                      <td>Langkah awal untuk mengembangkan kekebalan tubuh terhadap infeksi</td>
                      @if($tt1)
                      <td>{{ Carbon\Carbon::parse($biodata->biodataCpw->cekKesehatanTT1->created_at)->formatLocalized('%B %d, %Y')}}</td>
                      <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
                      @else
                      <td></td>
                      <td><input type="checkbox" name="TT1" value="TT1"></td>
                      @endif
                  </tr>
                  <tr>
                      <td>TT2</td>
                      <td>4 minggu setelah TT 1 untuk menyempurnakan kekebalan</td>
                      @if($tt2)
                      <td>{{ Carbon\Carbon::parse($biodata->biodataCpw->cekKesehatanTT2->created_at)->formatLocalized('%B %d, %Y')}}</td>
                      <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
                      @else
                      <td></td>
                      <td><input type="checkbox" name="TT2" value="TT2"></td>
                      @endif
                  </tr>
                  <tr>
                      <td>TT3</td>
                      <td>6 bulan setelah TT 2 untuk menguatkan kekebalan</td>
                      @if($tt3)
                      <td>{{ Carbon\Carbon::parse($tt1->created_at)->formatLocalized('%B %d, %Y')}}</td>
                      <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
                      @else
                      <td></td>
                      <td><input type="checkbox" name="TT3" value="TT3"></td>
                      @endif
                  </tr>
                  <tr>
                      <td>TT4</td>
                      <td>1 tahun atau lebih setelah TT 3 untuk menguatkan kekebalan</td>
                      @if($tt4)
                      <td>{{ Carbon\Carbon::parse($tt1->created_at)->formatLocalized('%B %d, %Y')}}</td>
                      <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
                      @else
                      <td></td>
                      <td><input type="checkbox" name="TT4" value="TT4"></td>
                      @endif
                  </tr>
                  <tr>
                      <td>TT5</td>
                      <td>1 tahun atau lebih setelah TT 4 untuk mendapatkan kekebalan tubuh</td>
                      @if($tt5)
                      <td>{{ Carbon\Carbon::parse($tt1->created_at)->formatLocalized('%B %d, %Y')}}</td>
                      <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
                      @else
                      <td></td>
                      <td><input type="checkbox" name="TT5" value="TT5"></td>
                      @endif
                  </tr>
                  <tbody>
                  </tbody>
              </table>
              <p align="center">
                <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                <a href="{{URL::to('cek-kesehatan')}}" class="btn btn-primary" role="button">kembali</a>
              </p>
              {!! Form::close() !!}
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
@endsection