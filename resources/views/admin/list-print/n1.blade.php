<!DOCTYPE html>
<html>
<head>
  <title>Form N1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- ======FORM CATIN : PRIA====== -->
	<div style="page-break-before: always">
		<label>KANTOR DESA/KELURAHAN: {{ $biodata->biodataCpp->n1Formulir->desa }}</label><BR>
		<label>KECAMATAN : {{ $biodata->biodataCpp->n1Formulir->kecamatan }}</label><BR>
		<label>KABUPATEN   &nbsp;: {{ $biodata->biodataCpp->n1Formulir->kabupaten }}</label>
		<div style="text-align: center; margin-top: 50px; ">
			<label style="text-decoration: underline;">SURAT KETERANGAN UNTUK MENIKAH</label><br>
			<label>No : {{ $biodata->biodataCpp->n1Formulir->nomor_surat }}</label>
		</div>
		<div>
			Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
					<li>Bin/Binti</li>
					<li>Status Perkawinan</li>
						A. Jika Pria Terangkan Jejaka, Duda atau beristri dan berapa istinya.
						B. Jika Wanita Terangkan Perawan, Janda.
					<li>Nama Istri Atau Suami Terdahulu</li>
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
					<li>: {{ $biodata->biodataCpp->n1Formulir->bin_binti }}</li>
					<li>:</li>
						A. {{ $biodata->biodataCpp->n1Formulir->status_pernikahan }}<br>
						B. ..............................................................
					<li>: {{ $biodata->biodataCpp->n1Formulir->nama_mantan_pasangan }}</li>
				</ol>
			</div>
			Demikian lah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan sepenuhnya. <br>
			{{ $biodata->biodataCpp->n1Formulir->kota_pembuatan }}, {{ Carbon\Carbon::parse($biodata->biodataCpp->n1Formulir->tanggal_pembuatan)->formatLocalized('%d %B %Y')}}
		</div>
		<div style="text-align: right;margin-top: 100px">
			<label>Kepala Desa/Lurah : ............................................................</label>
		</div>
		<div style="text-align: left;margin-top: 100px">
			<label>{{ $biodata->biodataCpp->n1Formulir->nama_lurah }}</label>
		</div>
	</div>
	
	<!-- ======FORM CATIN : WANITA====== -->
	<div style="page-break-before: always">
		<label>KANTOR DESA/KELURAHAN: {{ $biodata->biodataCpw->n1Formulir->desa }}</label><BR>
		<label>KECAMATAN : {{ $biodata->biodataCpw->n1Formulir->kecamatan }}</label><BR>
		<label>KABUPATEN   &nbsp;: {{ $biodata->biodataCpw->n1Formulir->kabupaten }}</label>
		<div style="text-align: center; margin-top: 50px; ">
			<label style="text-decoration: underline;">SURAT KETERANGAN UNTUK MENIKAH</label><br>
			<label>No : {{ $biodata->biodataCpw->n1Formulir->nomor_surat }}</label>
		</div>
		<div>
			Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa : <br>
			<div style="width: 50%;float: left;">
				<ol>
					<li>Nama Lengkap Alias</li>
					<li>Jenis Kelamin</li>
					<li>Tempat dan Tanggal Lahir</li>
					<li>Warga Negara</li>
					<li>Agama</li>
					<li>Pekerjaan</li>
					<li>Tempat Tinggal</li>
					<li>Bin/Binti</li>
					<li>Status Perkawinan</li>
						A. Jika Pria Terangkan Jejaka, Duda atau beristri dan berapa istinya.
						B. Jika Wanita Terangkan Perawan, Janda.
					<li>Nama Istri Atau Suami Terdahulu</li>
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
					<li>: {{ $biodata->biodataCpw->n1Formulir->bin_binti }}</li>
					<li>:</li>
						A. ..............................................................<br>
						B. {{ $biodata->biodataCpw->n1Formulir->status_pernikahan }}
					<li>: {{ $biodata->biodataCpw->n1Formulir->nama_mantan_pasangan }}</li>
				</ol>
			</div>
			Demikian lah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan sepenuhnya. <br>
			{{ $biodata->biodataCpw->n1Formulir->kota_pembuatan }}, {{ Carbon\Carbon::parse($biodata->biodataCpw->n1Formulir->tanggal_pembuatan)->formatLocalized('%d %B %Y')}}
		</div>
		<div style="text-align: right;margin-top: 100px">
			<label>Kepala Desa/Lurah : ............................................................</label>
		</div>
		<div style="text-align: left;margin-top: 100px">
			<label>{{ $biodata->biodataCpw->n1Formulir->nama_lurah }}</label>
		</div>
	</div>
</body>
</html>

<script>
    window.print()
</script>