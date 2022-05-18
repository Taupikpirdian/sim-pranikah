<!DOCTYPE html>
<html>
<head>
  <title>DATA KELENGKAPAN CALON PENGANTIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- ======FORM CATIN : PRIA====== -->
	<div style="page-break-before: always">
		<div style="text-align: center; margin-top: 50px; ">
			<label style="text-decoration: underline;">DATA KELENGKAPAN CALON PENGANTIN</label><br>
		</div>
		<div>
			Pengantin Pria : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
				</ol>
			</div>
			<div style="width: 50%;float: left;">
				<ol>
					<li>: {{ $biodata->biodataCpp->nama_lengkap }}</li>
					<li>: {{ $biodata->biodataCpp->jk }}</li>
					<li>: {{ $biodata->biodataCpp->tempat_lahir }}, {{ $biodata->biodataCpp->tanggal_lahir }}</li>
					<li>: {{ $biodata->biodataCpp->warga_negara }}</li>
					<li>: {{ $biodata->biodataCpp->agama }}</li>
					<li>: {{ $biodata->biodataCpp->pekerjaan }}</li>
					<li>: {{ $biodata->biodataCpp->tempat_tinggal }}</li>
				</ol>
			</div>
		</div>
		<div style="text-align: left;margin-top: 100px">
		</div>
	</div>

    <!-- ======FORM CATIN : Wanita====== -->
		<div>
			Pengantin Wanita : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
				</ol>
			</div>
			<div style="width: 50%;float: left;">
				<ol>
					<li>: {{ $biodata->biodataCpw->nama_lengkap }}</li>
					<li>: {{ $biodata->biodataCpw->jk }}</li>
					<li>: {{ $biodata->biodataCpw->tempat_lahir }}, {{ $biodata->biodataCpw->tanggal_lahir }}</li>
					<li>: {{ $biodata->biodataCpw->warga_negara }}</li>
					<li>: {{ $biodata->biodataCpw->agama }}</li>
					<li>: {{ $biodata->biodataCpw->pekerjaan }}</li>
					<li>: {{ $biodata->biodataCpw->tempat_tinggal }}</li>
				</ol>
			</div>
		</div>
		<div style="text-align: left;margin-top: 100px">
		</div>

        <!-- ======FORM ORTUCATIN : Prian====== -->
		<div>
			Ayah Pengantin Pria : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
				</ol>
			</div>
			<div style="width: 50%;float: left;">
				<ol>
					<li>: {{ $biodata->biodataBapakCpp->nama_lengkap }}</li>
					<li>: {{ $biodata->biodataBapakCpp->jk }}</li>
					<li>: {{ $biodata->biodataBapakCpp->tempat_lahir }}, {{ $biodata->biodataBapakCpp->tanggal_lahir }}</li>
					<li>: {{ $biodata->biodataBapakCpp->warga_negara }}</li>
					<li>: {{ $biodata->biodataBapakCpp->agama }}</li>
					<li>: {{ $biodata->biodataBapakCpp->pekerjaan }}</li>
					<li>: {{ $biodata->biodataBapakCpp->tempat_tinggal }}</li>
				</ol>
			</div>
		</div>
		<div style="text-align: left;margin-top: 100px">
		</div>

        <!-- ======FORM ORTUCATIN : Prian====== -->
		<div>
			Ibu Pengantin Pria : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
				</ol>
			</div>
			<div style="width: 50%;float: left;">
				<ol>
					<li>: {{ $biodata->biodataIbuCpp->nama_lengkap }}</li>
					<li>: {{ $biodata->biodataIbuCpp->jk }}</li>
					<li>: {{ $biodata->biodataIbuCpp->tempat_lahir }}, {{ $biodata->biodataIbuCpp->tanggal_lahir }}</li>
					<li>: {{ $biodata->biodataIbuCpp->warga_negara }}</li>
					<li>: {{ $biodata->biodataIbuCpp->agama }}</li>
					<li>: {{ $biodata->biodataIbuCpp->pekerjaan }}</li>
					<li>: {{ $biodata->biodataIbuCpp->tempat_tinggal }}</li>
				</ol>
			</div>
		</div>
		<div style="text-align: left;margin-top: 100px">
		</div>

         <!-- ======FORM ORTUCATIN : Prian====== -->
		<div>
			Ayah Pengantin Wanita : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
				</ol>
			</div>
			<div style="width: 50%;float: left;">
				<ol>
					<li>: {{ $biodata->biodataBapakCpw->nama_lengkap }}</li>
					<li>: {{ $biodata->biodataBapakCpw->jk }}</li>
					<li>: {{ $biodata->biodataBapakCpw->tempat_lahir }}, {{ $biodata->biodataBapakCpw->tanggal_lahir }}</li>
					<li>: {{ $biodata->biodataBapakCpw->warga_negara }}</li>
					<li>: {{ $biodata->biodataBapakCpw->agama }}</li>
					<li>: {{ $biodata->biodataBapakCpw->pekerjaan }}</li>
					<li>: {{ $biodata->biodataBapakCpw->tempat_tinggal }}</li>
				</ol>
			</div>
		</div>
		<div style="text-align: left;margin-top: 100px">
		</div>

        <!-- ======FORM ORTUCATIN : Prian====== -->
		<div>
			Ibu Pengantin Wanita : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
				</ol>
			</div>
			<div style="width: 50%;float: left;">
				<ol>
					<li>: {{ $biodata->biodataIbuCpw->nama_lengkap }}</li>
					<li>: {{ $biodata->biodataIbuCpw->jk }}</li>
					<li>: {{ $biodata->biodataIbuCpw->tempat_lahir }}, {{ $biodata->biodataIbuCpw->tanggal_lahir }}</li>
					<li>: {{ $biodata->biodataIbuCpw->warga_negara }}</li>
					<li>: {{ $biodata->biodataIbuCpw->agama }}</li>
					<li>: {{ $biodata->biodataIbuCpw->pekerjaan }}</li>
					<li>: {{ $biodata->biodataIbuCpw->tempat_tinggal }}</li>
				</ol>
			</div>
		</div>
		<div style="text-align: left;margin-top: 100px">
		</div>
	
</body>
</html>

<script>
    window.print()
</script>