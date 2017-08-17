<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
	crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>
	<nav class="navbar navbar-fixed-top navbar-default">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- <div class="navbar-header">
						<a class="navbar-brand" href="#">Brand</a>
					</div>		 -->
					<ul class="nav navbar-nav" style="float:left;">
						<li><a id="status" href=""><img id="logo" src="http://ngalam.co/wp-content/uploads/2017/05/aplikasi-singo.png" alt=""> Landungsari</a></li>
					</ul>
				</div>
				<div class="col-xs-6">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<ul class="nav navbar-nav" style="float:right;">
						<li><a id="status" href="<?php echo base_url();?>Login">Cek Status</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding-top: 45px;">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img id="bg" src="http://www.shoma.net/images/slider/background-maps-2.jpg" alt="Chania">
				<div class="carousel-caption">
					<div id="tittle">Sistem Pelayanan Publik</div>
					<div id="tittle2">Kelurahan Landungsari</div>
				</div>
			</div>
		</div>
		
	</div>

	<div class="container">
		<div class="row">

			<div class="col-xs-12">
			<div class="panel-group">
			
				<div class="panel panel-primary">
					<div class="panel-heading">Jenis Layanan</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="">Pelayanan</label>
							<select class="form-control" id="jenis_pelayanan" required>
								<option value="0" selected>Pilih Pelayanan</option>
								<option value="1">HO Recom</option>
								<option value="2">IMB</option>
								<option value="3">Kartu Keluarga</option>
								<option value="4">Kartu Tanda Penduduk</option>
							</select>
						</div>	
						
					</div>
				</div>
				
				<br>

				<div id="ho_recom">
					<div class="panel panel-primary">
						<div class="panel-heading">HO Recom</div>
						<div class="panel-body">
							<form action="<?php echo base_url();?>Ho_recom/insert" method="POST">
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
								</div>
								<div class="form-group">
									<label for="">Tempat Lahir</label>
									<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" required>
								</div>
								<div class="form-group">
									<label for="">Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="">Agama</label>
									<select class="form-control" name="agama" required>
										<option value="" selected>Pilih Agama</option>
										<?php foreach($agama as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->agama; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Rumah</label>
									<textarea rows="2" name="alamat_rumah" class="form-control" placeholder="Masukkan Alamat Rumah" required></textarea>
								</div>
								<div class="form-group">
									<label for="">Telefon/Fax</label>
									<input type="number" name="telefon_atau_fax" class="form-control" placeholder="Masukkan Telefon/Fax" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin" required>
										<option value="" selected>Pilih Jenis Kelamin</option>
										<?php foreach($jenis_kelamin as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->jenis_kelamin; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Status Kawin</label>
									<select class="form-control" name="status_kawin" required>
										<option value="" selected>Pilih Status Kawin</option>
										<?php foreach($status_kawin as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->status_kawin; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nama Perusahaan</label>
									<input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Perusahaan</label>
									<textarea name="alamat_perusahaan" rows="2" class="form-control" placeholder="Masukkan Alamat Perusahaan" required></textarea>
								</div>
								<div class="form-group">
									<label for="">Telefon Perusahaan</label>
									<input type="number" name="noTelp_perusahaan" class="form-control" placeholder="Masukkan Telefon Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Permohonan</label>
									<select class="form-control" name="jenis_permohonan" required>
										<option value="" selected>Pilih Jenis Permohonan</option>
										<?php foreach($jenis_permohonan_ho as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->jenis_permohonan; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Jenis Usaha</label>
									<input type="text" name="jenis_usaha" class="form-control" placeholder="Masukkan Lokasi Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Lokasi Usaha</label>
									<input type="text" name="lokasi_usaha" class="form-control" placeholder="Masukkan Lokasi Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Luas Tanah (m<sup>2</sup>)</label>
									<input type="number" name="luas_tanah" class="form-control" placeholder="Masukkan Luas Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Luas Usaha (m<sup>2</sup>)</label>
									<input type="number" name="luas_usaha" class="form-control" placeholder="Masukkan Luas Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Status Tanah</label>
									<input type="text" name="status_tanah" class="form-control" placeholder="Masukkan Status Tanah" required>
								</div>
								<!-- recaptcha -->
								<div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div>
								<!-- end -->
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- imb start -->
				<div id="imb">
					<div class="panel panel-primary">
						<div class="panel-heading">IMB</div>
						<div class="panel-body">
							<form action="<?php echo base_url();?>Imb/insert" method="POST">
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
								</div>
								<div class="form-group">
									<label for="">Tempat Lahir</label>
									<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" required>
								</div>
								<div class="form-group">
									<label for="">Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="">Agama</label>
									<select class="form-control" name="agama" required>
										<option value="" selected>Pilih Agama</option>
										<?php foreach($agama as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->agama; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Rumah</label>
									<textarea name="alamat_rumah" rows="2" class="form-control" placeholder="Masukkan Alamat Rumah" required></textarea>
								</div>
								<div class="form-group">
									<label for="">Telefon/Fax</label>
									<input type="number" name="telefon_atau_fax" class="form-control" placeholder="Masukkan Telefon/Fax" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin" required>
										<option value="" selected>Pilih Jenis Kelamin</option>
										<?php foreach($jenis_kelamin as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->jenis_kelamin; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Status Kawin</label>
									<select class="form-control" name="status_kawin" required>
										<option value="" selected>Pilih Status Kawin</option>
										<?php foreach($status_kawin as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->status_kawin; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nama Perusahaan</label>
									<input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Perusahaan</label>
									<textarea rows="2" name="alamat_perusahaan" class="form-control" placeholder="Masukkan Alamat Perusahaan" required></textarea>
								</div>
								<div class="form-group">
									<label for="">Jenis Permohonan</label>
									<select class="form-control" name="jenis_permohonan" required>
										<option value="" selected>Pilih Jenis Permohonan</option>
										<?php foreach($jenis_permohonan_imb as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->jenis_permohonan; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Lokasi Bangunan</label>
									<input type="text" name="lokasi_bangunan" class="form-control" placeholder="Masukkan Lokasi Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Luas Bangunan (m<sup>2</sup>)</label>
									<input type="number" name="luas_bangunan" class="form-control" placeholder="Masukkan Luas Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Fungsi Bangunan</label>
									<input type="text" name="fungsi_bangunan" class="form-control" placeholder="Masukkan Fungsi Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Status Tanah</label>
									<input type="text" name="status_tanah" class="form-control" placeholder="Masukkan Status Tanah" required>
								</div>
								<div class="form-group">
									<label for="">Batas Utara</label>
									<input type="text" name="batas_utara" class="form-control" placeholder="Masukkan Batas Utara" required>
								</div>
								<div class="form-group">
									<label for="">Batas Timur</label>
									<input type="text" name="batas_timur" class="form-control" placeholder="Masukkan Batas Timur" required>
								</div>
								<div class="form-group">
									<label for="">Batas Selatan</label>
									<input type="text" name="batas_selatan" class="form-control" placeholder="Masukkan Batas Selatan" required>
								</div>
								<div class="form-group">
									<label for="">Batas Barat</label>
									<input type="text" name="batas_barat" class="form-control" placeholder="Masukkan Batas Barat" required>
								</div>
								<!-- recaptcha -->
								<div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div>
								<!-- end -->
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>	
						</div>
					</div>
				</div>

				<!-- start kk -->
				<div id="kk">
					<div class="panel panel-primary">
					
						<div class="panel-heading">Kartu Keluarga</div>
						
						<div class="panel-body">
							<form action="<?php echo base_url();?>Kk/insert" method="POST">
								<div class="panel panel-default">
									<div class="panel-heading">Header Kartu Keluarga</div>
									<div class="panel-body">
											<div class="form-group">
												<label for="">Jenis Permohonan</label>
												<select class="form-control" name="jenis_permohonan" required>
													<option value="" selected>Pilih Jenis Permohonan</option>
													<?php foreach($jenis_permohonan_kk as $row){ ?>
													<option value="<?php echo $row->id; ?>"><?php echo $row->jenis_permohonan; ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group">
												<label for="">Nama Lengkap</label>
												<input type="text" name="nama_lengkap_header" class="form-control" placeholder="Masukkan Nama Lengkap" required>
											</div>
											<div class="form-group">
												<label for="">Alamat</label>
												<textarea rows="2" name="alamat" class="form-control" placeholder="Masukkan Alamat" required></textarea>
											</div>
											<div class="row">
												<div class="col-xs-6">
													<div class="form-group">
														<label for="">Kode Pos</label>
														<input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" required>
													</div>
												</div>
												<div class="col-xs-3">
													<div class="form-group">
														<label for="">RT</label>
														<input type="text" name="rt" class="form-control" placeholder="Masukkan RT" required>
													</div>
												</div>
												<div class="col-xs-3">
													<div class="form-group">
														<label for="">RW</label>
														<input type="text" name="rw" class="form-control" placeholder="Masukkan RW" required>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="">Jumlah Anggota Keluarga</label>
												<input type="number" min="0" id="jumlah_keluarga" name="jumlah_anggota_keluarga" class="form-control" placeholder="Masukkan Jumlah Anggota Keluarga" required>
											</div>
									</div>
								</div>
								
								<br>
											
								<div id="biodata">
								
								</div>

								<br>
								<!-- recaptcha -->
								<div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div>
								<!-- end -->
								<div class="text-right" id="submit">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
					
					</div>
				</div>

				<!-- start ktp -->
				<div id="ktp">
					<h1>KTP</h1>
					<div class="panel panel-primary">
						<div class="panel-heading">Kartu Tanda Penduduk</div>
						<div class="panel-body">
							<form action="<?php echo base_url();?>Ktp/insert" method="POST">
								<div class="form-group">
									<label for="">NIK</label>
									<input type="text" pattern="[0-9]" name="nik" class="form-control" placeholder="Masukkan NIK" required>
								</div>
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin" required>
										<option value="0" selected>Pilih Jenis Kelamin</option>
										<?php foreach($jenis_kelamin as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->jenis_kelamin ?></option>
										<?php }?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tempat Lahir</label>
									<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" required>
								</div>
								<div class="form-group">
									<label for="">Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="">Status Kawin</label>
									<select class="form-control" name="status_kawin" required>
										<option value="0" selected>Pilih Status Kawin</option>
										<?php foreach($status_kawin as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->status_kawin ?></option>
										<?php }?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Agama</label>
									<select class="form-control" name="agama" required>
										<option value="0" selected>Pilih Agama</option>
										<?php foreach($agama as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->agama ?></option>
										<?php }?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Golongan Darah</label>
									<select class="form-control" name="golongan_darah" required>
										<option value="0" selected>Pilih Golongan Darah</option>
										<?php foreach($golongan_darah as $row){ ?>
										<option value="<?php echo $row->id; ?>"><?php echo $row->golongan_darah ?></option>
										<?php }?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat</label>
									<textarea rows="2" name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah" required></textarea>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="">RT</label>
											<input type="number" name="rt" class="form-control" placeholder="Masukkan RT" required>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="">RW</label>
											<input type="number" name="rw" class="form-control" placeholder="Masukkan RW" required>
										</div>
									</div>
								</div>
								<!-- recaptcha -->
								<div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div>
								<!-- end -->
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>

							</form>	
						</div>
					</div>
				</div>


			</div>
			</div>


		</div>
		<!-- end row -->
	</div>
	<!-- end container -->


	<nav class="navbar navbar-fixed-bottom navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav" style="float:left;">
				<li><a id="status" href="">Pemdes Landungsari</a></li>
			</ul>
		</div>
	</nav>
</body>


</html>
<script>
	var id_pelayanan;
	$("#ho_recom").hide();
	$("#imb").hide();
	$("#kk").hide();
	$("#ktp").hide();
	$("#submit").hide();			
	

	$("#jenis_pelayanan").on('change', function () {
		id_pelayanan = $(this).val();
		if (id_pelayanan == 1) {
			$("#ho_recom").show();
			$("#imb").hide();
			$("#kk").hide();
			$("#ktp").hide();
		} else if (id_pelayanan == 2) {
			$("#ho_recom").hide();
			$("#imb").show();
			$("#kk").hide();
			$("#ktp").hide();
		} else if (id_pelayanan == 3) {
			$("#ho_recom").hide();
			$("#imb").hide();
			$("#kk").show();
			$("#ktp").hide();
		} else if (id_pelayanan == 4) {
			$("#ho_recom").hide();
			$("#imb").hide();
			$("#kk").hide();
			$("#ktp").show();
		} else {
			$("#ho_recom").hide();
			$("#imb").hide();
			$("#kk").hide();
			$("#ktp").hide();
		}
	});

	

	var jumlah_keluarga;
	$("#jumlah_keluarga").on('change', function () {
		jumlah_keluarga = $(this).val();
		console.log(jumlah_keluarga);
		if(jumlah_keluarga==0 || jumlah_keluarga==null){
			$("#submit").hide();			
		}else{
			$("#submit").show();			
			
		$.ajax({
			url : "<?php echo base_url()?>Index/kk",
			type : 'POST',
			data :  {'jumlah_keluarga' : jumlah_keluarga},
			dataType: 'json',
			success : function(data){
				$('#biodata').html(data);
			},
			error: function(){
				alert('terjadi error');
			}
		});
		}

	});

	// var jenis_pelayanan;
	// var nomor_reg;
	// var result='';
	// $('#submit').click(function (){
	// 	jenis_pelayanan = $('#jenis_layanan option:selected').val();
	// 	nomor_reg = $('#nomor_registrasi').val();
	// 	console.log(nomor_reg);
		
	// 	console.log(jenis_pelayanan);
	// 	// alert('sdadsad');
	// 	// $('#no_reg').html(nomor_reg);
	// 	$.ajax({
	// 		url : "<?php echo base_url();?>Status_regis/search",
	// 		type : 'POST',
	// 		data :  {'jenis_pelayanan' : jenis_pelayanan, 'nomor_registrasi': nomor_registrasi},
	// 		dataType: 'json',
	// 		success : function(data){
	// 			// $('#no_reg').html(nomer_reg);
	// 			// result = data;
	// 			// if(result != null){
	// 			// 	$('#result').html(result);				
	// 			// }else{
	// 			// 	$('#result').html('Nomor Registrasi Tidak Ditemukan');									
	// 			// }
	// 			alert('dasdadas');
	// 		},
	// 		error: function(){
	// 			alert('terjadi error');
	// 		}
	// 	});

	// });

</script>
