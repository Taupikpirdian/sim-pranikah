<!DOCTYPE html>
<html>
<head>
  <title>Form N7</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-md-3">
		<label>Lamapiran</label>
		<label>Perihal</label>
	</div>
	<div class="col-md-6">
		<label>: {{ $biodata->biodataCpp->n7Formulir->lampiran }}</label>
		<label>: {{ $biodata->biodataCpp->n7Formulir->lembar }}</label>
	</div>
	<label>Kehendak Menikah</label>
	<div style="text-align: right;">
		<label>Kepada Yth</label><br>
		<label>Pegawai Pencatat Nikah Pada</label><br>
		<label>KUA Kecamatan/Pembantu/PPN</label><br>
		<label style="margin-top: 10px;">di {{ $biodata->biodataCpp->n7Formulir->lokasi_pengiriman }}</label>
	</div>
	<div>
		<label>Assalamualaikum</label>
		<p>Dengan ini kami memberitahukan bahwa kami bermaksud akan melangsungkan pernikahan antara {{ $biodata->biodataCpp->nama_lengkap }} dengan {{ $biodata->biodataCpw->nama_lengkap }} pada hari {{ Carbon\Carbon::parse($biodata->biodataCpp->n7Formulir->tanggal_pernikahan)->formatLocalized('%d')}} tanggal {{ Carbon\Carbon::parse($biodata->biodataCpp->n7Formulir->tanggal_pernikahan)->formatLocalized('%d %B %Y')}} jam {{ $biodata->biodataCpp->n7Formulir->jam_pernikahan }} dengan maskawin {{ $biodata->biodataCpp->n7Formulir->mas_kawin }} dibayar tunai/hutang *) bertempat di {{ $biodata->biodataCpp->n7Formulir->tempat_pernikahan }}<label>Bersama ini kami lampirkan surat surat yang diperlukan untuk diperiksa sebagai berikut :</label>
	</div>
	<div class="col-md-12">
		<div style="width: 50%;float: left;">
			<ol>
				<li>Surat Keterangan Untuk Menikah</li>
				<li>Surat Keterangan Asal Usul</li>
				<li>Surat Keterangan Mempelai</li>
				<li>Surat Keterangan Orang Tua</li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ol>
		</div>
		<div style="width: 50%;float: left;">
			<ul>
				<li>Model N1</li>
				<li>Model N2</li>
				<li>Model N3</li>
				<li>Model N4</li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>

		<label>Kiranya dapat dihadiri dan dicatat pelaksanaanya sesuai dengan peraturan perundang undangannya yang berlaku.</label><br>
		<p>Wasalamualaikum wr.wb</p>
		<div style="width: 100%">
			<label>Diterima tanggal : {{ $biodata->biodataCpp->n7Formulir->tanggal_terima }}</label>
		</div>
		<div style="width: 50%;float: left; text-align: center;">
			<label>Yang Menerima</label><br>
			<label style="margin-bottom: 100px">PPN/Pembantu PPN</label>
			<br>
			<br>
			<br>
			<p>{{ $biodata->biodataCpp->n7Formulir->penerima }} *)</p>
		</div>
		<div style="width: 50%;float: left; text-align: center;">
			<label>Yang Memberitahukan</label><br>
			<label style="margin-bottom: 100px">Calon mempelai Wali/Wakil Wali</label>
			<br>
			<br>
			<br>
			<p>{{ $biodata->biodataCpp->n7Formulir->pemberitahu }} *)</p>
		</div>
	</div>
</body>
</html>

<script>
    window.print()
</script>