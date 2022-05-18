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
		<div style="text-align: center; padding: 20px; border-bottom: solid 2px black;">
			<label style="color: black">SURAT KESEHATAN MASYARAKAT<BR>KECAMATAN / KELURAHAN <BR>  WILAYAH KOTA BANDUNG TIMUR</label>
		</div>
		<div style="text-align: center; padding: 20px;">
			<label style="color: black">SURAT KESEHATAN DOKTER</label>
		</div>
		<div style="width: 100%;text-align: center;">
			<P>Yang bertanda tangan dibawah ini dokter Puskesmas Kec/Kel................................... menerangkan :</P>
			<div style=" padding: 20px">
				<p>Nama : {{ $biodata->biodataCpp->nama_lengkap }}</p>
				<p>Umur : {{ $age_cpp }} tahun</p>
			</div>
		</div>
		<div style="width: 100%; padding: 30px 20px;">
			<div style="width: 100%">
				<p>Telah diperiksa dengan teliti dengan hasil baik kesehatan badannya untuk :</p>
				<p>...............................................................................................................</p>
				<p>...............................................................................................................</p>
				<p>Kami harap yang berkepentingan maklum adanya.</p>
			</div>
			<div style="width: 50%; float: left; margin-top: 50px">
				<p>Tidak memakai narkoba</p>
				<p>Tidak cacat badan</p>
				<p>Tidak buta warna</p>
				<p>- TD    mm/hg</p>
				<p>- TB    Cm</p>
				<p>- BB    Kg</p>
				<p>- Golongan Darah    </p>
				<span>Surat ini hanya berlaku selama 3 Bulan</span>
			</div>
			<div style="width: 50%; float: left; margin-top: 50px">
				<label>Bandung, {{ Carbon\Carbon::parse(Carbon::now())->formatLocalized('%d %B %Y')}}</label>
				<p>Doker Puskesmas Kec/kel.............................</p>
				<p style="margin-top: 90px">(....................................................)</p>
			</div>
			<div style="width: 100%; margin-top: 200px;	">
				<LABEL style="display: none;">surat sehat</LABEL>
			</div>
		</div>
	</div>
	<!-- CPW -->
	<div style="width: 80%; margin-left: 10%;border: solid 2px black;margin-bottom: 70px; page-break-before: always"">
		<div style="text-align: center; padding: 20px; border-bottom: solid 2px black;">
			<label style="color: black">SURAT KESEHATAN MASYARAKAT<BR>KECAMATAN / KELURAHAN <BR>  WILAYAH KOTA BANDUNG TIMUR</label>
		</div>
		<div style="text-align: center; padding: 20px;">
			<label style="color: black">SURAT KESEHATAN DOKTER</label>
		</div>
		<div style="width: 100%;text-align: center;">
			<P>Yang bertanda tangan dibawah ini dokter Puskesmas Kec/Kel................................... menerangkan :</P>
			<div style=" padding: 20px">
				<p>Nama : {{ $biodata->biodataCpw->nama_lengkap }}</p>
				<p>Umur : {{ $age_cpw }} tahun</p>
			</div>
		</div>
		<div style="width: 100%; padding: 30px 20px;">
			<div style="width: 100%">
				<p>Telah diperiksa dengan teliti dengan hasil baik kesehatan badannya untuk :</p>
				<p>...............................................................................................................</p>
				<p>...............................................................................................................</p>
				<p>Kami harap yang berkepentingan maklum adanya.</p>
			</div>
			<div style="width: 50%; float: left; margin-top: 50px">
				<p>Tidak memakai narkoba</p>
				<p>Tidak cacat badan</p>
				<p>Tidak buta warna</p>
				<p>- TD    mm/hg</p>
				<p>- TB    Cm</p>
				<p>- BB    Kg</p>
				<p>- Golongan Darah    </p>
				<span>Surat ini hanya berlaku selama 3 Bulan</span>
			</div>
			<div style="width: 50%; float: left; margin-top: 50px">
				<label>Bandung, {{ Carbon\Carbon::parse(Carbon::now())->formatLocalized('%d %B %Y')}}</label>
				<p>Doker Puskesmas Kec/kel.............................</p>
				<p style="margin-top: 90px">(....................................................)</p>
			</div>
			<div style="width: 100%; margin-top: 200px;	">
				<LABEL style="display: none;">surat sehat</LABEL>
			</div>
		</div>
	</div>
	<!-- END -->
</body>
</html>

<script>
    window.print()
</script>