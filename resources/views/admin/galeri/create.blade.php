@extends('layouts.admin')

@section('content')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Create Galeri
        </h6>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                {{ Form::open(array('url' => '/galery/create', 'files' => true, 'method' => 'post')) }}
                 
                    <div class='form-group clearfix'>
                      {{ Form::label("img", "Images", ['class' => 'col-md-4 control-label']) }}
                        <div class='col-md-12'>
                          <input type="file" id="img" name="img" class="validate" value="{{ old('img') }}"  required="required" >
                            <span class="error"></span>
                        </div>
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

@endsection
