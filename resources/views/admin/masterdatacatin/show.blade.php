@extends('layouts.admin')
@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Formulir Kelengkapan Pernikahan
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            Show Data Formulir N1
          </h5>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-hover">
                <tr>
                    <td width="200px">Nama Lengkap</td>
                    <td>
                      {{{$n1forms->nama_lengkap}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Jenis Kelamin</td>
                    <td>
                      {{{$n1forms->jenis_kelamin}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Tempat Lahir</td>
                    <td>
                      {{{$n1forms->tempat_lahir}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Tanggal Lahir</td>
                    <td>
                      {{ Carbon\Carbon::parse($n1forms->tanggal_lahir)->formatLocalized('%B %d, %Y')}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Warga Negara</td>
                    <td>
                      {{{$n1forms->warga_negara}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Agama</td>
                    <td>
                      {{{$n1forms->agama}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Pekerjaan</td>
                    <td>
                      {{{$n1forms->pekerjaan}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Alamat</td>
                    <td>
                      {{{$n1forms->alamat}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Bin/Binti</td>
                    <td>
                      {{{$n1forms->bin_or_binti}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Status Perkawinan</td>
                    <td>
                      {{{$n1forms->status_perkawinan}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Nama Suami/Istri Terdahulu</td>
                    <td>
                      {{{$n1forms->nama_mantan_pasangan}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Nama Kepala Desa/Lurah</td>
                    <td>
                      {{{$n1forms->nama_kepdes}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Tempat Pembuatan Formulir</td>
                    <td>
                      {{{$n1forms->tempat_pembuatan_form}}}
                    </td>
                </tr>
                <tr>
                    <td width="200px">Tanggal Pembuatan Formulir</td>
                    <td>
                      {{ Carbon\Carbon::parse($n1forms->tanggal_pembuatan_form)->formatLocalized('%B %d, %Y')}}
                    </td>
                </tr>

              </table>
              <p align="center">
                <a href="{{URL::to('formulirn1/index')}}" class="btn btn-primary" role="button">kembali</a>
                </p>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection