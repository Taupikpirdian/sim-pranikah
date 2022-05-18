@extends('layouts.admin')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>

<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Edit Kalender
        </h6>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                <section class="content">
                  <div class="row">
                    <div class="col-md-12">
                    	{!! Form::model($kalender,['method'=>'put', 'files'=> 'true', 'action'=>['admin\KalenderController@update',$kalender->id]]) !!}
                        {{ csrf_field() }}

                      <div class='form-group clearfix'>
                        {{ Form::label("title", "Judul", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                            {{ Form::text("title", null,['class' => 'form-control required']) }}
                            <span class="error">{{$errors->first('title')}}</span>
                          </div>
                      </div>

                      <div class='form-group clearfix'>
                        {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                            {{ Form::text("desc", null,['class' => 'form-control required']) }}
                            <span class="error">{{$errors->first('desc')}}</span>
                          </div>
                      </div>

                      <div class='form-group clearfix'>
                        {{ Form::label("start", "Tanggal Mulai", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                            {{ Form::text("start", null,['class' => 'form-control required', 'id' => 'datepicker']) }}
                            <span class="error">{{$errors->first('start')}}</span>
                          </div>
                      </div>

                      <div class='form-group clearfix'>
                        {{ Form::label("end", "Tanggal Akhir", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                            {{ Form::text("end", null,['class' => 'form-control required', 'id' => 'datepicker2']) }}
                            <span class="error">{{$errors->first('end')}}</span>
                          </div>
                      </div>

                        <div class='form-group'>
                        	<div class='col-md-12 col-md-offset-12'>
                          	<button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                        	</div>
                      	</div>
                    {!! Form::close() !!}
                  	</div>
                	</div>
              	</section>
                </div>
                </div>
            </section>
          </div>
        </div>
      </div>
      </div>

<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>

<script type="text/javascript">
    $('#datepicker2').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>
@endsection