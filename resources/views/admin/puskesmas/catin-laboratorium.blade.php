@extends('layouts.admin')
@section('content')
@if ($message = Session::get('flash-store'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
  </div>
@endif

@if ($message = Session::get('flash-update'))
  <div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
  </div>
@endif

<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
         Pilih Catin Untuk di Check Laboratorium
        </h6>
        <div class="element-box">
          <h5 class="form-header">
             Check Laboratorium
          </h5>
          <div class="tablos">
          <div class="row mb-xl-2 mb-xxl-3">

            <div class="col-sm-6">
              @if($is_cekLabCpp_submitted)
                <a class="frmlr-form element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\PuskesmasController@editCekLab",array($catin->id))}}'>
                <div class="value color-w">
                  Check Laboratorium CPP
                </div>
              @else
                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\PuskesmasController@cekLaboratorium",array($catin->id))}}'>
                <div class="value">
                  Check Laboratorium CPP
                </div>
              @endif
              </a>
            </div>
            
            <div class="col-sm-6">
              @if($is_cekLabCpw_submitted)
                <a class="frmlr-form element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\PuskesmasController@editCekLabCpw",array($catin->id))}}'>
                <div class="value color-w">
                  Check Laboratorium CPW
                </div>
              @else
                <a class="element-box el-tablo centered trend-in-corner padded bold-label" href='{{URL::action("admin\PuskesmasController@cekLaboratoriumCpw",array($catin->id))}}'>
                <div class="value">
                  Check Laboratorium CPW
                </div>
              @endif
              </a>
            </div>


          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection
