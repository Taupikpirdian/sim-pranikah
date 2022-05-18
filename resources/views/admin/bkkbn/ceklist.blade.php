@extends('layouts.admin')
@section('content')

  <div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
           SEMINAR DP3AKB
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            SEMINAR DP3AKB
          </h5>
            
          <section class="content">
            <div class="row">
              <div class="col-md-12">
              {{ Form::open(array('url' => '/ceklist-bkkbn/create', 'files' => true, 'method' => 'post')) }}
                <table class="table table-striped table-hover">
                  <tr>
                      <div class="col-md-8 input-group mb-1" style="display:none;">
                      <div class="button button-primary" style="width:30%">Id CPP</div>
                          {{ Form::text('biodata_cpp_id', $biodata->biodataCpp->id,['class' => 'form-control', 'required', 'value'=>'']) }}
                      </div>
                  </tr>
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
                </table>
                <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                    <thead>
                        <tr>
                            <th>Nama Pengantin</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th><b>Deskripsi</b></th>
                            <th><b>Tanggal</b></th>
                            <th><b>Paraf</b></th>
                        </tr>
                    </thead>
                    <tr>
                        <td>{{ $biodata->biodataCpp->nama_lengkap }}</td>
                        <td>{{ $biodata->biodataBapakCpp->nama_lengkap }}</td>
                        <td>{{ $biodata->biodataIbuCpp->nama_lengkap }}</td>
                        <td>Sudah mengikuti seminar BKKBN</td>
                        @if($status_cpp)
                        <td>{{ Carbon\Carbon::parse($biodata->biodataCpp->sertifikatCPP->created_at)->formatLocalized('%B %d, %Y')}}</td>
                        <td>
                          <span title="TTD" class="btn btn-success btn-sm">Checked</span>
                        </td>
                        @else
                        <td></td>
                        <td><input type="checkbox" name="status_cpp" value="CPP Sertifikat"></td>
                        @endif
                    </tr>
                    <tr>
                        <td>{{ $biodata->biodataCpw->nama_lengkap }}</td>
                        <td>{{ $biodata->biodataBapakCpw->nama_lengkap }}</td>
                        <td>{{ $biodata->biodataIbuCpw->nama_lengkap }}</td>
                        <td>Sudah mengikuti seminar BKKBN</td>
                        @if($status_cpw)
                        <td>{{ Carbon\Carbon::parse($biodata->biodataCpw->sertifikatCPW->created_at)->formatLocalized('%B %d, %Y')}}</td>
                        <td>
                          <span title="TTD" class="btn btn-success btn-sm">Checked</span>
                        </td>
                        @else
                        <td></td>
                        <td><input type="checkbox" name="status_cpw" value="CPW Sertifikat"></td>
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