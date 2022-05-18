<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<link rel="stylesheet" type="text/css" href="/front/printset/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/front/printset/css/print.css" media="print" />
	<script type="text/javascript" src="/front/printset/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="/front/printset/js/example.js"></script>

<style type="text/css">
	label{
		font-weight: 600;
	}
	p{
		font-weight: 600;
	}
	table td, table th {
	    border: 1px solid black;
	    padding: 25px;
	}
</style>
</head>
<body>
	<div style="width: 80%; margin-left: 10%;border: solid 2px black;margin-bottom: 70px">
		<div style="    background-color: blue;text-align: center;padding: 20px;border-bottom: solid 2px black;">
			<label style="color: black">PROGRAM IMUNISASI TENTANUS - TOKSOID</label>
		</div>
		<div style="width: 100%; background-color: yellow; text-align: center;border-bottom: solid 2px black;">
			<div style=" padding: 20px">
			<img src="/front/printset/images/logopush.png" style="width: 60px;margin-bottom: 10px;"><br>
			<label style="margin-bottom: 40px;">DAPARTEMEN KESEHATAN R.I</label>
			<div style="text-align: right; width: 100%">
			@if($biodata->biodataCpw->cekKesehatanTT1)
				<label>No : {{ $biodata->biodataCpw->cekKesehatanTT1->no }}</label>
			@else
				<label>No : </label>
			@endif
			</div>
			<div style="width: 20%;text-align: left;float: left;">
				<label>Nama</label><br>
				<label>Tanggal Lahir</label><br>
				<label>Alamat</label>
			</div>
			<div style="width: 65%;text-align: left;float: ;">
				<p>: {{ $biodata->biodataCpw->nama_lengkap }}</p>
				<p>: {{ $biodata->biodataCpw->tanggal_lahir }}</p>
				<p>: {{ $biodata->biodataCpw->tempat_tinggal }}</p>
			</div>
			</div>
		</div>
		<div style="; background-color: blue; text-align: center; padding: 20px;border-bottom: solid 2px black;">
			<label style="color: black">BAWALAH KARTU INI KE TEMPAT PELAYANAN IMUNISASI</label>
		</div>
	</div>

	<div style="width: 80%; margin-left: 10%;border: solid 2px black; page-break-before: always">
		<div style="; background-color: blue; text-align: center; padding: 20px;border-bottom: solid 2px black;">
			<label style="color: black">DEMI KESEHATAN DAN PERLINDUNGAN DIRI YANG AMAN, BERUSAHALAH 5 KALI IMUNISASI TT UNTUK KEKEBALAN PENUH</label>
		</div>
		<div style="width: 100%; background-color: yellow; text-align: center;">
			<table style="width: 100%">
				<tr>
					<td>T1</td>
					<td>Langkah awal untuk mengembangkan kekebalan tubuh terhadap infeksi</td>
					@if($tt1)
					<td>{{ Carbon\Carbon::parse($tt1->created_at)->formatLocalized('%B %d, %Y')}} </td>
	                <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
	                @else
	                <td></td>
	                <td></td>
	                @endif
				</tr>
				<tr>
					<td>T2</td>
					<td>4 Minggu setelah TT 1 untuk menyempurnakan kekebalan</td>
					@if($tt2)
					<td>{{ Carbon\Carbon::parse($tt2->created_at)->formatLocalized('%B %d, %Y')}} </td>
	                <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
	                @else
	                <td></td>
	                <td></td>
	                @endif
				</tr>
				<tr>
					<td>T3</td>
					<td>6 Bulan setelah TT 2 untuk menguatkan kekebalan</td>
					@if($tt3)
					<td>{{ Carbon\Carbon::parse($tt3->created_at)->formatLocalized('%B %d, %Y')}} </td>
	                <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
	                @else
	                <td></td>
	                <td></td>
	                @endif
				</tr>
				<tr>
					<td>T4</td>
					<td>Satu tahun atau lebih setelah TT 3 untuk menguatkan kekebalan</td>
					@if($tt4)
					<td>{{ Carbon\Carbon::parse($tt4->created_at)->formatLocalized('%B %d, %Y')}} </td>
	                <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
	                @else
	                <td></td>
	                <td></td>
	                @endif
				</tr>
				<tr>
					<td>T5</td>
					<td>Satu tahun atau lebih setelah TT 4 untuk mendapatkan kekebalan tubuh</td>
					@if($tt5)
					<td>{{ Carbon\Carbon::parse($tt5->created_at)->formatLocalized('%B %d, %Y')}} </td>
	                <td><span title="TTD" class="btn btn-success btn-sm">Checked</span></td>
	                @else
	                <td></td>
	                <td></td>
	                @endif
				</tr>
			</table>
		</div>
		
	</div>
</body>
</html>

<script>
    window.print()
</script>