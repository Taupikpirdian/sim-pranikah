@extends('layouts.admin')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Create Kelender
        </h6>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                {{ Form::open(array('url' => '/kalender/create', 'files' => true, 'method' => 'post')) }}
                 
                    <div class="form-group clearfix{{ $errors->has('judul') ? ' has-error' : '' }}">
                        {{ Form::label("title", "Judul *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="title" value="{{ old('title') }}" class="form-control" required="required", placeholder= "Masukan Judul">
                          </div>
                          @if ($errors->has('judul'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('judul') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('desc') ? ' has-error' : '' }}">
                        {{ Form::label("desc", "Deskripsi *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <textarea type="text" name="desc" value="{{ old('desc') }}" class="form-control" required="required", placeholder= "Masukan Deskripsi"></textarea>
                          </div>
                          @if ($errors->has('desc'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('desc') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('start') ? ' has-error' : '' }}">
                        {{ Form::label("start", "Tanggal Awal *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="start" value="{{ old('start') }}" class="form-control" id="datepicker" required="required", placeholder= "Masukan Deskripsi">
                          </div>
                          @if ($errors->has('start'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('start') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class="form-group clearfix{{ $errors->has('end') ? ' has-error' : '' }}">
                        {{ Form::label("end", "Tanggal Selesai *", ['class' => 'col-md-4 control-label']) }}
                          <div class='col-md-12'>
                          <input type="text" name="end" value="{{ old('end') }}" class="form-control" id="datepicker2" required="required", placeholder= "Masukan Deskripsi">
                          </div>
                          @if ($errors->has('end'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('end') }}</strong>
                              </span>
                          @endif
                    </div>

                    <div class='form-group'>
                    <div class='col-md-4 col-md-offset-4'>
                      <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                    </div>
                  </div>
                  {!! Form::close() !!}
                </div>
              </div>
            </section>
        </div>
      </div>
    </div>
  </div>

<!-- CKEditor init -->
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
