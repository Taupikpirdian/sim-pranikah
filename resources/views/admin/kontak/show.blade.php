@extends('layouts.admin')
@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Kontak
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            Show Kontak
          </h5>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped table-hover">
              <tr>
                  <td width="200px">Nama</td>
                  <td>
                    {{{$kontak->name}}}
                  </td>
              </tr>
              <tr>
                  <td width="200px">Email</td>
                  <td>
                    {{{$kontak->email}}}
                  </td>
              </tr>
              <tr>
                  <td width="200px">Subject</td>
                  <td>
                    {{{$kontak->subject}}}
                  </td>
              </tr>
              <tr>
                  <td width="200px">Phone</td>
                  <td>
                    {{{$kontak->phone}}}
                  </td>
              </tr>
              <tr>
                  <td width="200px">Message</td>
                  <td>
                    {{{$kontak->message}}}
                  </td>
              </tr>
            </table>
            <p align="center">
              <a href="{{URL::to('contact/index')}}" class="btn btn-primary" role="button">kembali</a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection