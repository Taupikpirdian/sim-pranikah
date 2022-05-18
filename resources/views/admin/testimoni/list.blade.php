@extends('layouts.admin')

@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
         	Testimoni
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            Testimoni
          </h5>
          <div class="form-desc">
            <div class="element-content">
		      	<div class="row">
			        <div class="col-md-12 text-right">
			        	<div class='pull-right'>
							<a href="{{URL::to('/testimony/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> create</a>
						</div>
			        </div>
		    	</div>
		    </div>
          </div>
          <div class="table-responsive">
            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                <thead>
                    <tr>
			   		 	<th>No</th>
				       	<th><b>Nama</b></th>
				       	<th><b>Deskripsi</b></th>
				       	<th class='text-center' style='width:70px'>Actions</th>
					</tr>
                </thead>

                <tbody>
			   		@foreach($testimony as $i=>$testimonys)
			     		<tr>
			     	 		<td>{{ $i+1 }}</td>
					         <td> {{ $testimonys->title }} </td>	         
	 				         <td> {{ str_limit($testimonys->desc, 190) }} </td>
			         		<td> 
			         			<a href='{{URL::action("admin\TestimoniController@edit",array($testimonys->id))}}' class="btn btn-primary btn-crud" style="width: 200px">Edit</a>
								<a href='{{URL::action("admin\TestimoniController@show",array($testimonys->id))}}' class="btn btn-info btn-crud" style="width: 200px">Show</a>
								<form id="delete_testimony{{$testimonys->id}}" action='{{URL::action("admin\TestimoniController@destroy",array($testimonys->id))}}' method="POST">
								    <input type="hidden" name="_method" value="delete">
								    <input type="hidden" name="_token" value="{{ csrf_token() }}">
								    <a href="#" onclick="document.getElementById('delete_testimony{{$testimonys->id}}').submit();" class="btn btn-danger btn-crud" style="width: 200px">Delete</a>
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
