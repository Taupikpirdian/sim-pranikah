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
</style>
</head>
<body>
	<div style="width: 90%;border: solid 2px black;margin-bottom: 70px">
		<div style="text-align: center; padding: 20px; border-bottom: solid 2px black;">
			<label style="color: black">DINAS KESEHATAN PROVINSI JAWA BARAT<BR>FORMULIR HASIL LABORATORIUM KLINK<BR> BALAI KESEHATAN KERJA MASYARAKAT</label>
		</div>
		<div style="padding: 50px">
			<div style="width: 50%; float: left; margin-bottom: 20px;">
				<P style="color: black">NAMA : {{ $biodata->biodataCpp->nama_lengkap }}</P>
				<P style="color: black">UMUR : {{ $age_cpp }}</P>
			</div>
			<div style="width: 50%; float: left; margin-bottom: 20px;">
				<P style="color: black">ALAMAT : {{ $biodata->biodataCpp->tempat_tinggal }}</P>
				@if($biodata->biodataCpp->cekLabCpp)
				<P style="color: black">DOKTER : {{ $biodata->biodataCpp->cekLabCpp->dokter }}</P>
				@else
				<P style="color: black">DOKTER : </P>
				@endif
			</div>

			<table style="width: 100%; float: left; margin-bottom: 20px">
				<tr>
					<th>HEMATOLOGI</th>
					<th>HASIL</th>
					<th>NILAI NORMAL</th>
				</tr>
				<tr>
					<td>HGB / HB </td>
					<td></td>
					@if($biodata->biodataCpp->cekLabCpp)
					<td>{{ $biodata->biodataCpp->cekLabCpp->hgb_hb }} g/dL</td>
					@else
					<td> g/dL</td>
					@endif
				</tr>
				<tr>
					<td>GOL DAR</td>
					<td></td>
					@if($biodata->biodataCpp->cekLabCpp)
					<td>{{ $biodata->biodataCpp->cekLabCpp->goldar }}</td>
					@else
					<td></td>
					@endif
				</tr>
				<tr>
					<th>URIN RUTIN</th>
					<th>HASIL</th>
					<th>NILAI NORMAL</th>
				</tr>
				<tr>
					<td>GLUKOSA</td>
					<td></td>
					@if($biodata->biodataCpp->cekLabCpp)
					<td>{{ $biodata->biodataCpp->cekLabCpp->glukosa }}</td>
					@else
					<td></td>
					@endif
				</tr>

				<tr>
					<th>FAAL HATI</th>
					<th>HASIL</th>
					<th>NILAI NORMAL</th>
				</tr>
				<tr>
					<td>HBsAG</td>
					<td></td>
					@if($biodata->biodataCpp->cekLabCpp)
					<td>{{ $biodata->biodataCpp->cekLabCpp->hbsag }}</td>
					@else
					<td></td>
					@endif
				</tr>
				<tr>
					<td>SYPHILIS</td>
					<td></td>
					@if($biodata->biodataCpp->cekLabCpp)
					<td>{{ $biodata->biodataCpp->cekLabCpp->syphilis }}</td>
					@else
					<td></td>
					@endif
				</tr>
				<tr>
					<td>HIV / AIDS</td>
					<td></td>
					@if($biodata->biodataCpp->cekLabCpp)
					<td>{{ $biodata->biodataCpp->cekLabCpp->hiv_aids }}</td>
					@else
					<td></td>
					@endif
				</tr>
			</table>

			<div style="width: 100%; text-align: right;">
				<p style="">BANDUNG, {{ Carbon\Carbon::parse(Carbon::now())->formatLocalized('%d %B %Y')}}</p>
				<p style="">PEMERIKSA</p>
				@if($biodata->biodataCpp->cekLabCpp)
				<p style="margin-top: 100px">({{ $biodata->biodataCpp->cekLabCpp->dokter }})</p>
				@else
				<p style="margin-top: 100px"></p>
				@endif
			</div>
			</div>
		</div>
	</div>
	<div style="width: 90%;border: solid 2px black;margin-bottom: 70px; page-break-before: always">
		<div style="text-align: center; padding: 20px; border-bottom: solid 2px black;">
			<label style="color: black">DINAS KESEHATAN PROVINSI JAWA BARAT<BR>FORMULIR HASIL LABORATORIUM KLINK<BR> BALAI KESEHATAN KERJA MASYARAKAT</label>
		</div>
		<div style="padding: 50px">
			<div style="width: 50%; float: left; margin-bottom: 20px;">
				<P style="color: black">NAMA : {{ $biodata->biodataCpw->nama_lengkap }}</P>
				<P style="color: black">UMUR : {{ $age_cpw }}</P>
			</div>
			<div style="width: 50%; float: left; margin-bottom: 20px;">
				<P style="color: black">ALAMAT : {{ $biodata->biodataCpw->tempat_tinggal }}</P>
				@if($biodata->biodataCpw->cekLabCpw)
				<P style="color: black">DOKTER : {{ $biodata->biodataCpw->cekLabCpw->dokter }}</P>
				@else
				<P style="color: black">DOKTER : </P>
				@endif
			</div>

			<table style="width: 100%; float: left; margin-bottom: 20px">
				<tr>
					<th>HEMATOLOGI</th>
					<th>HASIL</th>
					<th>NILAI NORMAL</th>
				</tr>
				<tr>
					<td>HGB / HB </td>
					<td></td>
					@if($biodata->biodataCpw->cekLabCpw)
					<td>{{ $biodata->biodataCpw->cekLabCpw->hgb_hb }} g/dL</td>
					@else
					<td> g/dL</td>
					@endif
				</tr>
				<tr>
					<td>GOL DAR</td>
					<td></td>
					@if($biodata->biodataCpw->cekLabCpw)
					<td>{{ $biodata->biodataCpw->cekLabCpw->goldar }}</td>
					@else
					<td></td>
					@endif
				</tr>
				<tr>
					<th>URIN RUTIN</th>
					<th>HASIL</th>
					<th>NILAI NORMAL</th>
				</tr>
				<tr>
					<td>GLUKOSA</td>
					<td></td>
					@if($biodata->biodataCpw->cekLabCpw)
					<td>{{ $biodata->biodataCpw->cekLabCpw->glukosa }}</td>
					@else
					<td></td>
					@endif
				</tr>

				<tr>
					<th>FAAL HATI</th>
					<th>HASIL</th>
					<th>NILAI NORMAL</th>
				</tr>
				<tr>
					<td>HBsAG</td>
					<td></td>
					@if($biodata->biodataCpw->cekLabCpw)
					<td>{{ $biodata->biodataCpw->cekLabCpw->hbsag }}</td>
					@else
					<td></td>
					@endif
				</tr>
				<tr>
					<td>SYPHILIS</td>
					<td></td>
					@if($biodata->biodataCpw->cekLabCpw)
					<td>{{ $biodata->biodataCpw->cekLabCpw->syphilis }}</td>
					@else
					<td></td>
					@endif
				</tr>
				<tr>
					<td>HIV / AIDS</td>
					<td></td>
					@if($biodata->biodataCpw->cekLabCpw)
					<td>{{ $biodata->biodataCpw->cekLabCpw->hiv_aids }}</td>
					@else
					<td></td>
					@endif
				</tr>
			</table>

			<div style="width: 100%; text-align: right;">
				<p style="">BANDUNG, {{ Carbon\Carbon::parse(Carbon::now())->formatLocalized('%d %B %Y')}}</p>
				<p style="">PEMERIKSA</p>
				@if($biodata->biodataCpw->cekLabCpw)
				<p style="margin-top: 100px">({{ $biodata->biodataCpw->cekLabCpw->dokter }})</p>
				@else
				<p style="margin-top: 100px"></p>
				@endif
			</div>
			</div>
		</div>
	</div>
</body>
</html>

<script>
    window.print()
</script>