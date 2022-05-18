@extends('layouts.admin')
@section('content')
<section class="content-header">
    <h1>
      Puskesmas
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{URL::to('/puskesmas/index')}}">Daftar nama</a></li>
      </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-hover">
          <tr>
              <td width="200px">Judul</td>
              <td>
                {{{$puskesmas->title}}}
              </td>
          </tr>
          <tr>
              <td width="200px">Icon</td>
                  <td>
              <a class="img-responsive" target="_blank" href="#"> <img src="{{ asset('/images/icon/puskesmass/'.$puskesmas->icon)}}" style="max-height:100px;max-width:100px;margin-top:10px;"></a>
              </td>
          </tr>
          <tr>
              <td width="200px">Deskripsi</td>
              <td>
                {{{$puskesmas->desc}}}
              </td>
          </tr>
          <tr>
              <td width="200px">Gambar</td>
                  <td>
              <a class="img-responsive" target="_blank" href="#"> <img src="{{ asset('/images/puskesmass/'.$puskesmas->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"></a>
              </td>
          </tr>
        </table>
        <p align="center">
          <a href="{{URL::to('puskesmas/index')}}" class="btn btn-primary" role="button">kembali</a>
          </p>
      </div>
    </div>
  </section>
@endsection