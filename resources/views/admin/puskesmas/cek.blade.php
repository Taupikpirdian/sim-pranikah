@extends('layouts.admin')
@section('content')

<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
         	Data Pengantin Cek TT
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            Data Calon Pengantin Cek TT
          </h5>
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
                <a href='{{URL::action("admin\PuskesmasController@ceklistKesehatan",array($catin->id))}}' class="btn btn-info btn-crud" style="width: 200px">Cek TT</a>
                <a href='{{URL::action("PrintFormulirController@printKesehatan",array($catin->id))}}' class="btn btn-info btn-crud" style="width: 200px">Print Kartu TT</a>
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
