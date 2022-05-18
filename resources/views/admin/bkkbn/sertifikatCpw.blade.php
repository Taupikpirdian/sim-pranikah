<center>
	<style>
		.signature, .title { 
			float:left;
			border-top: 1px solid #000;
			width: 200px; 
			text-align: center;
		}
	</style>
	<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
		<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
			<span style="font-size:50px; font-weight:bold">Sertifikat Seminar BKKBN</span>
			<br><br>
			<span style="font-size:25px"><i>Diberikan kepada:</i></span>
			<br><br>
			<span style="font-size:30px"><b>{{ $biodata->biodataCpw->nama_lengkap }}</b></span><br/><br/>
			<span style="font-size:25px"><i>Telah Mengikuti</i></span> <br/><br/>
			<span style="font-size:30px">"SEMINAR BKKBN"</span> <br/><br/>
			<span style="font-size:25px"><i>Mengikuti pada:</i></span><br>
			<span style="font-size:25px"><i>{{ Carbon\Carbon::parse($biodata->biodataCpw->sertifikatCPW->created_at)->formatLocalized('%B %d, %Y')}}</i></span><br>
			<table style="margin-top:40px;float:left">
				<tr>
					<td><span><b></b></td>
					</tr>
					<tr>
						<td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
					</tr>
					<tr>
						<td style="text-align:center"><span><b>Signature</b></td>
						</tr>
					</table>
					<table style="margin-top:40px;float:right">
						<tr>
							<td><span><b></b></td>
							</tr>
							<tr>
								<td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
							</tr>
							<tr>
								<td style="text-align:center"><span><b>Signature</b></td>
								</tr>
							</table>
						</div>
					</div>
				</center>

				<script>
					window.print()
				</script>