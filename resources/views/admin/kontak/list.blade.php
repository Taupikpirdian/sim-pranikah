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
            Kontak
          </h5>
          <div class="form-desc">
            <div class="element-content">
		      	<div class="row">
			        <div class="col-md-12 text-right">
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
				       	<th><b>Email</b></th>
				       	<th><b>Subject</b></th>
				       	<th><b>Phone</b></th>
				       	<th><b>Message</b></th>
				       	<th class='text-center' style='width:70px'>Actions</th>
					</tr>
                </thead>

                <tbody>
			   		@foreach($kontaks as $i=>$kontak)
			     		<tr>
			     	 		<td>{{ $i+1 }}</td>
					         <td> {{ $kontak->name }} </td>	         
					         <td> {{ $kontak->email }} </td>	         
					         <td> {{ $kontak->subject }} </td>	         
					         <td> {{ $kontak->phone }} </td>	         
					         <td> {{ str_limit($kontak->message, 165) }} </td>
			         		<td> 
								<a href='{{URL::action("admin\KontakController@show",array($kontak->id))}}' class="btn btn-info btn-crud" style="width: 200px">Show</a>
								<form id="delete_kontaks{{$kontak->id}}" action='{{URL::action("admin\KontakController@destroy",array($kontak->id))}}' method="POST">
								    <input type="hidden" name="_method" value="delete">
								    <input type="hidden" name="_token" value="{{ csrf_token() }}">
								    <a href="#" onclick="document.getElementById('delete_kontaks{{$kontak->id}}').submit();" class="btn btn-danger btn-crud" style="width: 200px">Delete</a>
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
