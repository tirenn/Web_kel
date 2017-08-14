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

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

</head>

<body>
	<nav class="navbar navbar-fixed-top navbar-default">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Brand</a>
					</div>		
				</div>
				<div class="col-xs-6">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<ul class="nav navbar-nav" style="float:right;">
						<li><a href="<?php echo base_url();?>Login">Login</a></li>
					</ul>		
				</div>
			</div>
			
		</div>
		<!-- /.container-fluid -->
	</nav>
<br>
<br>
<br>
<br>
<br>

	<div class="container">
		<div class="row">

			<div class="col-sm-8 col-xs-12">
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
							<form>
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
										<option value="0" selected>Pilih Agama</option>
										<option value="1">Islam</option>
										<option value="2">Kristen</option>
										<option value="3">Katholik</option>
										<option value="4">Hindu</option>
										<option value="5">Budha</option>
										<option value="6">Konghucu</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Rumah</label>
									<input type="text" name="alamat_rumah" class="form-control" placeholder="Masukkan Alamat Rumah" required>
								</div>
								<div class="form-group">
									<label for="">Telefon/Fax</label>
									<input type="text" name="telefon_atau_fax" class="form-control" placeholder="Masukkan Telefon/Fax" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin" required>
										<option value="0" selected>Pilih Jenis Kelamin</option>
										<option value="1">Laki-Laki</option>
										<option value="2">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Status Kawin</label>
									<select class="form-control" name="status_kawin" required>
										<option value="0" selected>Pilih Status Kawin</option>
										<option value="1">Belum Kawin</option>
										<option value="2">Kawin</option>
										<option value="3">Cerai Hidup</option>
										<option value="4">Cerai Mati</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nama Perusahaan</label>
									<input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Perusahaan</label>
									<input type="text" name="alamat_perusahaan" class="form-control" placeholder="Masukkan Alamat Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Telefon Perusahaan</label>
									<input type="number" name="noTelp_perusahaan" class="form-control" placeholder="Masukkan Telefon Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Perusahaan</label>
									<select class="form-control" name="jenis_permohonan">
										<option value="0" selected>Pilih Jenis Permohonan</option>
										<option value="1">Baru</option>
										<option value="2">Perpanjangan</option>
										<option value="3">Perluasan</option>
										<option value="4">Pindah Alamat</option>
										<option value="5">Balik Nama Pemohon</option>
										<option value="6">Ganti Nama Usaha</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Lokasi Bangunan</label>
									<input type="text" name="lokasi_bangunan" class="form-control" placeholder="Masukkan Lokasi Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Luas Bangunan</label>
									<input type="text" name="luas_bangunan" class="form-control" placeholder="Masukkan Luas Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Fungsi Bangunan</label>
									<input type="text" name="fungsi_bangunan" class="form-control" placeholder="Masukkan Fungsi Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Status Tanah</label>
									<input type="text" name="status_tanah" class="form-control" placeholder="Masukkan Status Tanah" required>
								</div>
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- imb start -->
				<div id="imb">
					<h1>IMB</h1>
					<div class="panel panel-primary">
						<div class="panel-heading">IMB</div>
						<div class="panel-body">
							<form>
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
										<option value="0" selected>Pilih Agama</option>
										<option value="1">Islam</option>
										<option value="2">Kristen</option>
										<option value="3">Katholik</option>
										<option value="4">Hindu</option>
										<option value="5">Budha</option>
										<option value="6">Konghucu</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Rumah</label>
									<input type="text" name="alamat_rumah" class="form-control" placeholder="Masukkan Alamat Rumah" required>
								</div>
								<div class="form-group">
									<label for="">Telefon/Fax</label>
									<input type="text" name="telefon_atau_fax" class="form-control" placeholder="Masukkan Telefon/Fax" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin" required>
										<option value="0" selected>Pilih Jenis Kelamin</option>
										<option value="1">Laki-Laki</option>
										<option value="2">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Status Kawin</label>
									<select class="form-control" name="status_kawin" required>
										<option value="0" selected>Pilih Status Kawin</option>
										<option value="1">Belum Kawin</option>
										<option value="2">Kawin</option>
										<option value="3">Cerai Hidup</option>
										<option value="4">Cerai Mati</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nama Perusahaan</label>
									<input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat Perusahaan</label>
									<input type="text" name="alamat_perusahaan" class="form-control" placeholder="Masukkan Alamat Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Telefon Perusahaan</label>
									<input type="number" name="noTelp_perusahaan" class="form-control" placeholder="Masukkan Telefon Perusahaan" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Perusahaan</label>
									<select class="form-control" name="jenis_permohonan">
										<option value="0" selected>Pilih Jenis Permohonan</option>
										<option value="1">Baru</option>
										<option value="2">Perpanjangan</option>
										<option value="3">Perluasan</option>
										<option value="4">Pindah Alamat</option>
										<option value="5">Balik Nama Pemohon</option>
										<option value="6">Ganti Nama Usaha</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Lokasi Bangunan</label>
									<input type="text" name="lokasi_bangunan" class="form-control" placeholder="Masukkan Lokasi Bangunan" required>
								</div>
								<div class="form-group">
									<label for="">Luas Bangunan</label>
									<input type="text" name="luas_bangunan" class="form-control" placeholder="Masukkan Luas Bangunan" required>
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
					
					<div class="panel panel-default">
						<div class="panel-heading">Header Kartu Keluarga</div>
						<div class="panel-body">
							<form>
								<div class="form-group">
									<label for="">Jenis Permohonan</label>
									<select class="form-control" name="jenis permohonan">
										<option value="" selected>Pilih Jenis Permohonan</option>
										<option value="1">Baru</option>
										<option value="2">Perubahan</option>
										<option value="3">Pisah KK</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
								</div>
								<div class="form-group">
									<label for="">Alamat</label>
									<input type="textarea" name="Alamat" class="form-control" placeholder="Masukkan Alamat" required>
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
									<input type="number" id="jumlah_keluarga" name="jumlah_anggota_keluarga" class="form-control" placeholder="Masukkan Jumlah Anggota Keluarga" required>
								</div>
							</form>
						</div>
					</div>
					
					<br>
					<!-- <h3>Lengkapi Biodata Anda</h3> -->
					<form>
						
								
					<div id="biodata">
					
						<!-- <div class="panel panel-default">
							<div class="panel-heading">Detail Kartu Keluarga</div>
							<div class="panel-body">
							<form>
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin" required>
										<option value="0" selected>Pilih Jenis Kelamin</option>
										<option value="1">Laki-Laki</option>
										<option value="2">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Hubungan Keluarga</label>
									<select class="form-control" name="hubungan_keluarga">
										<option value="" selected>Pilih Hubungan Keluarga</option>
										<option value="1">Kepala Keluarga</option>
										<option value="2">Suami</option>
										<option value="3">Istri</option>
										<option value="4">Anak</option>
										<option value="5">Menantu</option>
										<option value="6">Cucu</option>
										<option value="7">Orang Tua</option>
										<option value="8">Mertua</option>
										<option value="9">Famili Lain</option>
										<option value="10">Pembantu</option>
										<option value="11">Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Anak ke-</label>
									<input type="number" name="anak_ke" class="form-control" placeholder="Masukkan Anak ke-" required>
								</div>
								<div class="form-group">
									<label for="">Nomor Akta Pengangkatan Anak</label>
									<input type="number" name="nomor_akta" class="form-control" placeholder="Masukkan Nomor Akta Pengangkatan Anak" required>
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
									<label for="">NIK</label>
									<input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" required>
								</div>
								<div class="form-group">
									<label for="">Nomor/Akta Tanggal Kelahiran</label>
									<input type="text" name="nomor_kelahiran" class="form-control" placeholder="Masukkan Nomor/Akta Tanggal Kelahiran" required>
								</div>
								<div class="form-group">
									<label for="">Status Kawin</label>
									<select class="form-control" name="status_kawin" required>
										<option value="0" selected>Pilih Status Kawin</option>
										<option value="1">Belum Kawin</option>
										<option value="2">Kawin</option>
										<option value="3">Cerai Hidup</option>
										<option value="4">Cerai Mati</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nomor/Akta Tanggal Kawin/Cerai</label>
									<input type="text" name="nomor_kelahiran" class="form-control" placeholder="Masukkan Nomor/Akta Tanggal Kelahiran" required>
								</div>
								<div class="form-group">
									<label for="">Agama</label>
									<select class="form-control" name="agama" required>
										<option value="0" selected>Pilih Agama</option>
										<option value="1">Islam</option>
										<option value="2">Kristen</option>
										<option value="3">Katholik</option>
										<option value="4">Hindu</option>
										<option value="5">Budha</option>
										<option value="6">Konghucu</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pilih Golongan Darah</label>
									<select class="form-control" name="golongan_darah">
										<option value="" selected>Golongan Darah</option>
										<option value="1">A</option>
										<option value="2">AB</option>
										<option value="3">B</option>
										<option value="4">O</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pendidikan Terakhir</label>
									<select class="form-control" name="pendidikan_terakhir">
										<option value="" selected>Pilih Pendidikan Terakhir</option>
										<option value="1">Tidak/Belum Sekolah</option>
										<option value="2">Tidak Tamat SD</option>
										<option value="3">SD/Sederajat</option>
										<option value="4">SLTP/Sederajat</option>
										<option value="5">SLTA/Sederajat</option>
										<option value="6">Diploma I/II</option>
										<option value="7">Akademi/Dipl. III/S. Muda</option>
										<option value="8">Dipl. IV/Strata I</option>
										<option value="9">Strata II</option>
										<option value="10">Strata III</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Status Pendidikan</label>
									<select class="form-control" name="status_pendidikan">
										<option value="" selected>Pilih Status Pendidikan</option>
										<option value="1">Tidak Tamat</option>
										<option value="2">Tamat</option>
										<option value="3">Belum Tamat</option>
										<option value="4">Tidak Sekolah</option>
										<option value="5">Belum Sekolah</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Kelompok Pekerjaan</label>
									<select class="form-control" name="kelompok_pekerjaan">
										<option value="" selected>Pilih Kelompok Pekerjaan</option>
										<option value="1">Swasta</option>
										<option value="2">Wiraswasta</option>
										<option value="3">Pegawa Negeri Sipil</option>
										<option value="4">Pedagang</option>
										<option value="5">Petani</option>
										<option value="6">Nelayan</option>
										<option value="7">Atlet</option>
										<option value="8">Lain-Lain</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tempat Tinggal Terakhir</label>
									<input type="text" name="tempat_tinggal_terakhir" class="form-control" placeholder="Masukkan Tempat Tinggal Terakhir" required>
								</div>
								<div class="form-group">
									<label for="">Nomor dan Tanggal Surat Pindah</label>
									<input type="text" name="nomor_tgl_pindah" class="form-control" placeholder="Masukkan Nomor dan Tanggal Surat Pindah" required>
								</div>
								<div class="form-group">
									<label for="">Kelainan Khusus</label>
									<select class="form-control" name="kelainan_khusus">
										<option value="" selected>Pilih Kelainan Khusus</option>
										<option value="1">Tidak Ada</option>
										<option value="2">Tunawicara</option>
										<option value="3">Tunarungu</option>
										<option value="1">Tunanetra</option>
										<option value="4">Tunarungu/Tunanetra</option>
										<option value="4">Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Akseptor KB</label>
									<select class="form-control" name="akseptor_kb">
										<option value="" selected>Pilih Akseptor KB</option>
										<option value="1">Tidak Ada</option>
										<option value="2">IUD</option>
										<option value="3">Kondom</option>
										<option value="4">PIL</option>
										<option value="1">Suntik</option>
										<option value="2">Susuk</option>
										<option value="3">Vasektomi</option>
										<option value="4">Tubektomi</option>
										<option value="3">Tissu</option>
										<option value="4">Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nama Ibu</label>
									<input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" required>
								</div>
								<div class="form-group">
									<label for="">NIK Ibu</label>
									<input type="text" name="nik_ibu" class="form-control" placeholder="Masukkan NIK Ibu" required>
								</div>
								<div class="form-group">
									<label for="">Nama Ayah</label>
									<input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah" required>
								</div>
								<div class="form-group">
									<label for="">NIK Ayah</label>
									<input type="text" name="nik_ayah" class="form-control" placeholder="Masukkan NIK Ayah" required>
								</div>
								<div class="form-group">
									<label for="">Tempat Tinggal Terakhir</label>
									<input type="text" name="tmp_tgl_terakhir" class="form-control" placeholder="Masukkan Tempat Tinggal Terakhir" required>
								</div>
								<div class="form-group">
									<label for="">Keterangan (Catatan Lain)</label>
									<input type="text" name="note" class="form-control" placeholder="Masukkan Keterangan (Catatan Lain)" required>
								</div>
							</form>
							</div>
						</div> -->
					</div>
					</form>

					<br>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>

					</div>
				</div>

				</div>

				<!-- start ktp -->
				<div id="ktp">
					<h1>KTP</h1>
					<div class="panel panel-primary">
						<div class="panel-heading">Kartu Tanda Penduduk</div>
						<div class="panel-body">
							<form>
								<div class="form-group">
									<label for="">NIK</label>
									<input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" required>
								</div>
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" required>
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select class="form-control" name="jenis_kelamin" required>
										<option value="0" selected>Pilih Jenis Kelamin</option>
										<option value="1">Laki-Laki</option>
										<option value="2">Perempuan</option>
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
										<option value="1">Belum Kawin</option>
										<option value="2">Kawin</option>
										<option value="3">Cerai Hidup</option>
										<option value="4">Cerai Mati</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Agama</label>
									<select class="form-control" name="agama" required>
										<option value="0" selected>Pilih Agama</option>
										<option value="1">Islam</option>
										<option value="2">Kristen</option>
										<option value="3">Katholik</option>
										<option value="4">Hindu</option>
										<option value="5">Budha</option>
										<option value="6">Konghucu</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
								</div>
								<div class="form-group">
									<label for="">Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah" required>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group">
											<label for="">RT</label>
											<input type="text" name="rt" class="form-control" placeholder="Masukkan RT" required>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label for="">RW</label>
											<input type="text" name="rw" class="form-control" placeholder="Masukkan RW" required>
										</div>
									</div>
								</div>
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>

							</form>	
						</div>
					</div>
				</div>


			</div>
			</div>

			<!-- status regis -->
			<div class="col-sm-4 col-xs-12">
				<!-- start status regis -->
				<div class="panel-group">
					<div class="panel panel-primary">
						<div class="panel-heading">Cek Status Registrasi</div>
						<div class="panel-body">
						<!-- start status -->
							<div id="status">
								<form>
									<div class="form-group">
										<label for="">Jenis Pelayanan</label>
										<select class="form-control" name="jenis_pelayanan">
											<option value="0" selected>Pilih Jenis Pelayanan</option>
											<option value="1">Pengajuan KTP</option>
											<option value="2">Pengajuan KK</option>
											<option value="3">Pengajuan IMB</option>
											<option value="3">Pengajuan Izin (HO)</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Nomor Registrasi</label>
										<input type="text" name="nomor_registrasi" class="form-control" placeholder="Masukkan Nomor Registrasi" required>
									</div>
									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
							<!-- end status		 -->
						</div>
					</div>
				</div>
				

			</div>

		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</body>

</html>
<script>
	var id_pelayanan;
	$("#ho_recom").hide();
	$("#imb").hide();
	$("#kk").hide();
	$("#ktp").hide();

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
		$.ajax({
			url : "<?php echo base_url()?>Index/kk",
			type : 'GET',
			data :  {'jumlah_keluarga' : jumlah_keluarga},
			dataType: 'json',
			success : function(data){
				$('#biodata').html(data);
			},
			error: function(){
				alert('terjadi error');
			}
		});

	});

</script>
