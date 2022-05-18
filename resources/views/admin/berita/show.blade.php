@extends('layouts.admin')
@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Berita
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            Show Berita
          </h5>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped table-hover">
              <tr>
                  <td width="200px">Judul</td>
                  <td>
                    {{{$news->title}}}
                  </td>
              </tr>
              <tr>
                  <td width="200px">Penulis</td>
                  <td>
                    {{{$news->name}}}
                  </td>
              </tr>
              <tr>
                  <td width="200px">Deskripsi</td>
                  <td>
                    {{{$news->desc}}}
                  </td>
              </tr>
              <tr>
                  <td width="200px">Gambar</td>
                      <td>
                  <a class="img-responsive" target="_blank" href="#"> <img src="{{ asset('/images/news/'.$news->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"></a>
                  </td>
              </tr>
            </table>
            <p align="center">
              <a href="{{URL::to('news/index')}}" class="btn btn-primary" role="button">kembali</a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection