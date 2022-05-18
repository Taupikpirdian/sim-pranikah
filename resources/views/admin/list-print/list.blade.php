@extends('layouts.admin')

@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
         	Data Pengantin
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            List Data Calon Pengantin
          </h5>
          <div class="form-desc">
            <div class="element-content">
		      	<div class="row">
			        <div class="col-md-12 text-right">
			        	<div class='pull-right'>
							<a href="{{URL::to('/data-master-catin/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> create</a>
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
				       	<th><b>Nama Pengantin Pria</b></th>
				       	<th><b>Nama Pengantin Wanita</b></th>
				       	<th><b>Alamat Wanita</b></th>
				       	<th class='text-center' style='width:70px'>Actions</th>
					</tr>
                </thead>

                <tbody>
			   		@foreach($catins as $i=>$catin)
			     		<tr>
			     	 		<td>{{ $i+1 }}</td>
			     	 		<td>{{ $catin->biodataCpp->nama_lengkap }}</td>
			     	 		<td>{{ $catin->biodataCpw->nama_lengkap }}</td>
			     	 		<td>{{ $catin->biodata()->where('tipe_data_id', 2)->first()->tempat_tinggal }}</td>
			         		<td> 
			         			<!-- <a href='{{URL::action("admin\BiodataController@edit",array($catin->id))}}' class="btn btn-primary btn-crud" style="width: 200px">Edit</a> -->
								<a href='{{URL::action("PrintFormulirController@printN1",array($catin->id))}}' class="btn btn-info btn-crud" style="width: 200px">Print N1</a>
								<a href='{{URL::action("PrintFormulirController@printN4",array($catin->id))}}' class="btn btn-info btn-crud" style="width: 200px">Print N4</a>
								<a href='{{URL::action("PrintFormulirController@printN7",array($catin->id))}}' class="btn btn-info btn-crud" style="width: 200px">Print N7</a>
								<form id="delete_biodata{{$catin->id}}" action='{{URL::action("admin\BiodataController@destroy",array($catin->id))}}' method="POST">
								    <input type="hidden" name="_method" value="delete">
								    <input type="hidden" name="_token" value="{{ csrf_token() }}">
								    <a href="#" onclick="document.getElementById('delete_biodata{{$catin->id}}').submit();" class="btn btn-danger btn-crud" style="width: 200px">Delete</a>
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
