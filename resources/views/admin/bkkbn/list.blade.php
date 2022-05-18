@extends('layouts.admin')

@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
         	DP3AKB
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            DP3AKB
          </h5>
          <div class="form-desc">
            <div class="element-content">
		      	<div class="row">
			        <div class="col-md-12 text-right">
						@if($bkkbn->isEmpty())
						<div class='pull-right'>
							<a href="{{URL::to('/bkkbn/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> create</a>
						</div
						@else
						@endif
			        </div>
		    	</div>
		    </div>
          </div>
          <div class="table-responsive">
            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                <thead>
                    <tr>
			   		 	<th>No</th>
				       	<th><b>Judul</b></th>
				       	<th><b>Icon</b></th>
				       	<th><b>Deskripsi</b></th>
				       	<th><b>Gambar</b></th>
				       	<th class='text-center' style='width:70px'>Actions</th>
					</tr>
                </thead>

                <tbody>
			   		@foreach($bkkbn as $i=>$bkkbns)
			     		<tr>
			     	 		<td>{{ $i+1 }}</td>
					         <td> {{ $bkkbns->title }} </td>	 
					         <td>
								<a class="img-responsive" target="_blank" href="#"> <img src="{{ asset('/images/icon/bkkbns/'.$bkkbns->icon)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
							</td>        
					         <td> {{ str_limit($bkkbns->desc, 160) }} </td>
					         <td>
								<a class="img-responsive" target="_blank" href="#"> <img src="{{ asset('/images/bkkbns/'.$bkkbns->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
							</td>
			         		<td> 
			         			<a href='{{URL::action("admin\BkkbnController@edit",array($bkkbns->id))}}' class="btn btn-primary btn-crud" style="width: 200px">Edit</a>
								<a href='{{URL::action("admin\BkkbnController@show",array($bkkbns->id))}}' class="btn btn-info btn-crud" style="width: 200px">Show</a>
								<form id="delete_bkkbn{{$bkkbns->id}}" action='{{URL::action("admin\BkkbnController@destroy",array($bkkbns->id))}}' method="POST">
								    <input type="hidden" name="_method" value="delete">
								    <input type="hidden" name="_token" value="{{ csrf_token() }}">
								    <a href="#" onclick="document.getElementById('delete_bkkbn{{$bkkbns->id}}').submit();" class="btn btn-danger btn-crud" style="width: 200px">Delete</a>
								</form>
						  	</td>      
			     		</tr>
				   	@endforeach
            	</tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
