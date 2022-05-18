@extends('layouts.admin')
@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Edit Puskesmas
        </h6>
        <div class="element-box col-md-12">
            <section class="content">
              <div class="row">
                <div class="col-md-12">
                <section class="content">
                  <div class="row">
                    <div class="col-md-12">
                    	{!! Form::model($puskesmas,['method'=>'put', 'files'=> 'true', 'action'=>['admin\PuskesmasController@update',$puskesmas->id]]) !!}
                        {{ csrf_field() }}
                        <div class='form-group clearfix'>
                          {{ Form::label("title", "Judul", ['class' => 'col-md-4 control-label']) }}
                            <div class='col-md-12'>
                              {{ Form::text("title", null,['class' => 'form-control required']) }}
                              <span class="error">{{$errors->first('title')}}</span>
                            </div>
                        </div>

                        <div class='form-group clearfix'>
                          {{ Form::label("icon", "Icon", ['class' => 'col-md-12 control-label']) }}
                            <div class='col-md-12'>
                              <input type="file" id="icon" name="icon" class="validate" value="{{ old('img') }}">
                                <span class="error"></span>
                            <img src="{{ asset('/images/puskesmass/'.$puskesmas->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                            </div>
                        </div>

                        <div class='form-group clearfix'>
                          {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-12 control-label']) }}
                            <div class='col-md-12'>
                              <textarea type="text" id="ckeditor" name="desc" value="" class="form-control article-ckeditor" required="required", placeholder= "Masukan Deskripsi" rows="4">{{{$puskesmas->desc}}}</textarea>
                            </div>
                        </div>

                       <div class='form-group clearfix'>
                          {{ Form::label("img", "Images", ['class' => 'col-md-12 control-label']) }}
                            <div class='col-md-12'>
                              <input type="file" id="img" name="img" class="validate" value="{{ old('img') }}">
                                <span class="error"></span>
                            <img src="{{ asset('/images/puskesmass/'.$puskesmas->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
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

@endsection