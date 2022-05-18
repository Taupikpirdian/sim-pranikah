@extends('layouts.admin')
@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
         	Kalender
        </h6>
        <div class="element-box">
          <h5 class="form-header">
			Kalender
          </h5>
          <div class="form-desc">
            <div class="element-content">
		      	<div class="row">
			        <div class="col-md-12 text-right">
			        	<div class='pull-right'>
							<a href="{{URL::to('/kalender/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> create</a>
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
				       	<th><b>Title</b></th>
				       	<th><b>Descriptiom</b></th>
				       	<th><b>Start</b></th>
				       	<th><b>End</b></th>
				       	<th class='text-center' style='width:70px'>Actions</th>
					</tr>
                </thead>

                <tbody>
			   		@foreach($kalenders as $i=>$kalender)
			     		<tr>
			     	 		<td>{{ $i+1 }}</td>
								<td> {{ $kalender->title }} </td>	     
								<td> {{ str_limit($kalender->desc, 160) }} </td>
								<td> {{Carbon\Carbon::parse($kalender->start)->formatLocalized('%d %B %Y')}}</td>
								<td> {{Carbon\Carbon::parse($kalender->end)->formatLocalized('%d %B %Y')}}</td>	     
			         		<td> 
			         			<a href='{{URL::action("admin\KalenderController@edit",array($kalender->id))}}' class="btn btn-primary btn-crud" style="width: 200px">Edit</a>
								<a href='{{URL::action("admin\KalenderController@show",array($kalender->id))}}' class="btn btn-info btn-crud" style="width: 200px">Show</a>
								<form id="delete_kalender{{$kalender->id}}" action='{{URL::action("admin\KalenderController@destroy",array($kalender->id))}}' method="POST">
								    <input type="hidden" name="_method" value="delete">
								    <input type="hidden" name="_token" value="{{ csrf_token() }}">
								    <a href="#" onclick="document.getElementById('delete_kalender{{$kalender->id}}').submit();" class="btn btn-danger btn-crud" style="width: 200px">Delete</a>
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
