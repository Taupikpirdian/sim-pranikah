@extends('layouts.admin')
@section('content')
<section class="content-header">
    <h1>
      Kalender
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{URL::to('/kalender/index')}}">Daftar Jadwal</a></li>
      </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-hover">
          <tr>
              <td width="200px">Judul</td>
              <td>
                {{{$kalender->title}}}
              </td>
          </tr>
          <tr>
              <td width="200px">Deskripsi</td>
              <td>
                {{{$kalender->desc}}}
              </td>
          </tr>
          <tr>
              <td width="200px">Tanggal Mulai</td>
              <td>
                {{{$kalender->start}}}
              </td>
          </tr>
          <tr>
              <td width="200px">Tanggal Selesai</td>
              <td>
                {{{$kalender->end}}}
              </td>
          </tr>
        </table>
        <p align="center">
          <a href="{{URL::to('kalender/index')}}" class="btn btn-primary" role="button">kembali</a>
          </p>
      </div>
    </div>
  </section>
@endsection