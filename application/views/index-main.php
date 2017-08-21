<!DOCTYPE html>
<html lang="en">

<head>
	<title>Desa Landungsari</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tugas KKN TTV">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/reset.css">
	<link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/lightbox.min.css">
    
  
    <script src="<?php echo base_url();?>/assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
       <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>   

    	<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

</head>

<body>


	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container" style"padding:0;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
				<a class="navbar-brand no-padding" href="#" id="navbr">
                    <strong>PemdesLandungsari</strong>
                </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#slider-area">Home<span class="sr-only">(current)</span></a></li>
					<li><a href="#slider-area">Profil<span class="sr-only">(current)</span></a></li>
					<li><a href="#slider-area">Pembangunan Desa<span class="sr-only">(current)</span></a></li>
					<li><a href="#slider-area">Pendidikan<span class="sr-only">(current)</span></a></li>
					<li><a href="#slider-area">Kesehatan<span class="sr-only">(current)</span></a></li>
					<li><a href="#slider-area">Fasilitas Umum<span class="sr-only">(current)</span></a></li>
					<li><a href="#slider-area">Produk Hukum<span class="sr-only">(current)</span></a></li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!--<br><br><br>-->
	<!--start slider-->
	<section class="slider-area" id="slider-area">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img id="jumbotron" src="<?php echo base_url();?>assets/images/malang.jpg" alt="...">
					<div class="carousel-caption">
						<h1 class="edit-h1">Desa Landungsari</h1>
                        <a href="#tittlepage" class="btn btn-danger btn-custom btnlink">Pelayanan Online</a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--end slider-->

    <section class="text-center" id="tittlepage">
        <h3 class="edit-h3">Pelayanan Online</h3>
        <hr>
    </section>

	<!--start groom & bride-->
	<section>
		<div class="container" style="margin-top:3%;" id="main">
			<div class="row">
				<div class="col-sm-8 col-xs-12">
                    
                    <div class="form">

                        <div class="panel-group">

                            <div class="panel panel-primary">
                                <div class="panel-heading">Jenis Pelayanan</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="">Pelayanan</label>
                                        <select class="form-control" id="jenis_pelayanan" >
                                            <option value="0" selected>Pilih Pelayanan</option>
                                            <option value="1">HO Recom</option>
                                            <option value="2">IMB</option>
                                            <option value="3">Kartu Keluarga</option>
                                            <option value="4">Kartu Tanda Penduduk</option>
                                        </select>
                                    </div>	
                                    
                                </div>
                            </div>

                            <div id="ho_recom">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">HO Recom</div>
                                    <div class="panel-body">
                                        <form action="<?php echo base_url();?>Ho_recom/insert" method="POST">
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" name="nama_lengkap" data-validation="required" data-validation-error-msg-required="Nama Lengkap Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Nama Lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" data-validation="required" data-validation-error-msg-required="Tempat Lahir Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Tempat Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="text" id="datepickerho" data-validation="birthdate" data-validation-format="mm/dd/yyyy" data-validation-error-msg-required="Tanggal Lahir Tidak Boleh Kosong" data-validation-error-msg="Tanggal Lahir Tidak Boleh Lebih Dari Hari Ini" name="tanggal_lahir" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Agama</label>
                                                <select class="form-control" name="agama" data-validation="required" data-validation-error-msg-required="Agama Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Agama</option>
                                                    <?php foreach($agama as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->agama; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pekerjaan</label>
                                                <input type="text" name="pekerjaan" data-validation="required" data-validation-error-msg-required="Pekerjaan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Pekerjaan">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat Rumah</label>
                                                <textarea rows="2" name="alamat_rumah" data-validation="required" data-validation-error-msg-required="Alamat Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Alamat Rumah"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Telefon/Fax</label>
                                                <input type="text" name="telefon_atau_fax" data-validation="number length" data-validation-length="max15" data-validation-error-msg-required="Telefon/Fax Tidak Boleh Kosong"  data-validation-error-msg="Telefon/Fax Harus Angka Maksimal 15 Digit" class="form-control" placeholder="Masukkan Telefon/Fax">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Kelamin</label>
                                                <select class="form-control" name="jenis_kelamin" data-validation="required" data-validation-error-msg-required="Jenis Kelamin Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Jenis Kelamin</option>
                                                    <?php foreach($jenis_kelamin as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->jenis_kelamin; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status Kawin</label>
                                                <select class="form-control" name="status_kawin" data-validation="required" data-validation-error-msg-required="Status Kawin Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Status Kawin</option>
                                                    <?php foreach($status_kawin as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->status_kawin; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Perusahaan</label>
                                                <input type="text" name="nama_perusahaan" data-validation="required" data-validation-error-msg-required="Nama Perusahaan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Nama Perusahaan" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat Perusahaan</label>
                                                <textarea name="alamat_perusahaan" rows="2" data-validation="required" data-validation-error-msg-required="Alamat Perusahaan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Alamat Perusahaan" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Telefon Perusahaan</label>
                                                <input type="text" name="noTelp_perusahaan" data-validation="number length" data-validation-length="max15" data-validation-error-msg-required="Telefon Perusahaan Tidak Boleh Kosong"  data-validation-error-msg="Telefon Perusahaan Harus Angka Maksimal 15 Digit" class="form-control" placeholder="Masukkan Telefon Perusahaan">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Permohonan</label>
                                                <select class="form-control" name="jenis_permohonan" data-validation="required" data-validation-error-msg-required="Jenis Permohonan Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Jenis Permohonan</option>
                                                    <?php foreach($jenis_permohonan_ho as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->jenis_permohonan; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Usaha</label>
                                                <input type="text" name="jenis_usaha" data-validation="required" data-validation-error-msg-required="Jenis Usaha Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Jenis Usaha">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lokasi Usaha</label>
                                                <input type="text" name="lokasi_usaha" data-validation="required" data-validation-error-msg-required="Lokasi Usaha Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Lokasi Usaha">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Luas Tanah (m<sup>2</sup>)</label>
                                                <input type="text" name="luas_tanah" data-validation="number length" data-validation-length="max6" data-validation-error-msg-required="Luas Tanah Tidak Boleh Kosong"  data-validation-error-msg="Luas Tanah Harus Angka Maksimal 6 Digit" class="form-control" placeholder="Masukkan Luas Tanah">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Luas Usaha (m<sup>2</sup>)</label>
                                                <input type="text" name="luas_usaha" data-validation="number length" data-validation-length="max6" data-validation-error-msg-required="Luas Usaha Tidak Boleh Kosong"  data-validation-error-msg="Luas Usaha Harus Angka Maksimal 6 Digit" class="form-control" placeholder="Masukkan Luas Usaha">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status Tanah</label>
                                                <input type="text" data-validation="required" data-validation-error-msg-required="Status Tanah Tidak Boleh Kosong" name="status_tanah" class="form-control" placeholder="Masukkan Status Tanah">
                                            </div>

                                                <div id="recap1" style="transform: scale(0.77); transform-origin: 0 0;"></div>   
                                                <!-- <div id="cap"></div> -->
                                            
                                            <!-- recaptcha -->
                                            <!-- <div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div> -->
                                            <!-- end -->
                                            <div class="text-right">
                                                <button type="submit" id="submitho" class="btn btn-prim">Submit</button>
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
                                                <input type="text" name="nama_lengkap" data-validation="required" data-validation-error-msg-required="Nama Lengkap Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Nama Lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" data-validation="required" data-validation-error-msg-required="Tempat Lahir Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Tempat Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="text" id="datepickerimb" data-validation="birthdate" data-validation-format="mm/dd/yyyy" data-validation-error-msg-required="Tanggal Lahir Tidak Boleh Kosong" data-validation-error-msg="Tanggal Lahir Tidak Boleh Lebih Dari Hari Ini" name="tanggal_lahir" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Agama</label>
                                                <select class="form-control" name="agama" data-validation="required" data-validation-error-msg-required="Agama Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Agama</option>
                                                    <?php foreach($agama as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->agama; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pekerjaan</label>
                                                <input type="text" name="pekerjaan" data-validation="required" data-validation-error-msg-required="Pekerjaan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Pekerjaan">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat Rumah</label>
                                                <textarea rows="2" name="alamat_rumah" data-validation="required" data-validation-error-msg-required="Alamat Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Alamat Rumah"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Telefon/Fax</label>
                                                <input type="text" name="telefon_atau_fax" data-validation="number length" data-validation-length="max15" data-validation-error-msg-required="Telefon/Fax Tidak Boleh Kosong"  data-validation-error-msg="Telefon/Fax Harus Angka Maksimal 15 Digit" class="form-control" placeholder="Masukkan Telefon/Fax">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Kelamin</label>
                                                <select class="form-control" name="jenis_kelamin" data-validation="required" data-validation-error-msg-required="Jenis Kelamin Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Jenis Kelamin</option>
                                                    <?php foreach($jenis_kelamin as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->jenis_kelamin; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status Kawin</label>
                                                <select class="form-control" name="status_kawin" data-validation="required" data-validation-error-msg-required="Status Kawin Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Status Kawin</option>
                                                    <?php foreach($status_kawin as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->status_kawin; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Perusahaan</label>
                                                <input type="text" name="nama_perusahaan" data-validation="required" data-validation-error-msg-required="Nama Perusahaan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Nama Perusahaan" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat Perusahaan</label>
                                                <textarea name="alamat_perusahaan" rows="2" data-validation="required" data-validation-error-msg-required="Alamat Perusahaan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Alamat Perusahaan" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Telefon Perusahaan</label>
                                                <input type="text" name="noTelp_perusahaan" data-validation="number length" data-validation-length="max15" data-validation-error-msg-required="Telefon Perusahaan Tidak Boleh Kosong"  data-validation-error-msg="Telefon Perusahaan Harus Angka Maksimal 15 Digit" class="form-control" placeholder="Masukkan Telefon Perusahaan">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Permohonan</label>
                                                <select class="form-control" name="jenis_permohonan" data-validation="required" data-validation-error-msg-required="Jenis Permohonan Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Jenis Permohonan</option>
                                                    <?php foreach($jenis_permohonan_ho as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->jenis_permohonan; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lokasi Bangunan</label>
                                                <input type="text" name="lokasi_bangunan" data-validation="required" data-validation-error-msg-required="Lokasi Bangunan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Lokasi Bangunan" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Luas Bangunan (m<sup>2</sup>)</label>
                                                <input type="text" name="luas_bangunan" data-validation="number length" data-validation-length="max6" data-validation-error-msg-required="Luas Bangunan Tidak Boleh Kosong"  data-validation-error-msg="Luas Bangunan Harus Angka Maksimal 6 Digit" class="form-control" placeholder="Masukkan Luas Bangunan" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Fungsi Bangunan</label>
                                                <input type="text" name="fungsi_bangunan" data-validation="required" data-validation-error-msg-required="Fungsi Bangunan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Fungsi Bangunan" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status Tanah</label>
                                                <input type="text" name="status_tanah" data-validation="required" data-validation-error-msg-required="Status Tanah Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Status Tanah" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Batas Utara</label>
                                                <input type="text" name="batas_utara" data-validation="required" data-validation-error-msg-required="Batas Utara Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Batas Utara" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Batas Timur</label>
                                                <input type="text" name="batas_timur" data-validation="required" data-validation-error-msg-required="Batas Timur Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Batas Timur" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Batas Selatan</label>
                                                <input type="text" name="batas_selatan" data-validation="required" data-validation-error-msg-required="Batas Selatan Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Batas Selatan" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Batas Barat</label>
                                                <input type="text" name="batas_barat" data-validation="required" data-validation-error-msg-required="Batas Barat Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Batas Barat" >
                                            </div>

                                                <div id="recap2" style="transform: scale(0.77); transform-origin: 0 0;"></div>   
                                                <!-- <div id="cap"></div> -->
                                            
                                            <!-- recaptcha -->
                                            <!-- <div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div> -->
                                            <!-- end -->
                                            <div class="text-right">
                                                <button type="submit" id="submitho" class="btn btn-prim">Submit</button>
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
                                                            <select class="form-control" name="jenis_permohonan" data-validation="required" data-validation-error-msg-required="Jenis Permohonan Tidak Boleh Kosong" >
                                                                <option value="" selected>Pilih Jenis Permohonan</option>
                                                                <?php foreach($jenis_permohonan_kk as $row){ ?>
                                                                <option value="<?php echo $row->id; ?>"><?php echo $row->jenis_permohonan; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Nama Lengkap</label>
                                                            <input type="text" name="nama_lengkap_header" data-validation="required" data-validation-error-msg-required="Nama Lengkap Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Nama Lengkap" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Alamat</label>
                                                            <textarea rows="2" name="alamat" data-validation="required" data-validation-error-msg-required="Alamat Tidak Boleh Kosong" class="form-control" placeholder="Masukkan Alamat" ></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                    <label for="">Kode Pos</label>
                                                                    <input type="text" name="kode_pos" data-validation="number" data-validation-error-msg-required="Kode Pos Tidak Boleh Kosong"  data-validation-error-msg="Kode Pos Harus Angka" class="form-control" placeholder="Masukkan Kode Pos" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="form-group">
                                                                    <label for="">RT</label>
                                                                    <input type="text" name="rt" data-validation="number" data-validation-error-msg-required="RT Tidak Boleh Kosong"  data-validation-error-msg="RT Harus Angka" class="form-control" placeholder="Masukkan RT" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="form-group">
                                                                    <label for="">RW</label>
                                                                    <input type="text" name="rw" data-validation="number" data-validation-error-msg-required="RW Tidak Boleh Kosong"  data-validation-error-msg="RW Harus Angka" class="form-control" placeholder="Masukkan RW" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Jumlah Anggota Keluarga</label>
                                                            <input type="text" id="jumlah_keluarga" name="jumlah_anggota_keluarga" data-validation="number" data-validation-error-msg-required="Jumlah Keluarga Tidak Boleh Kosong"  data-validation-error-msg="Jumlah Keluarga Harus Angka" class="form-control" placeholder="Masukkan Jumlah Anggota Keluarga" >
                                                        </div>
                                                </div>
                                            </div>
                                            
                                            <br>
                                                        
                                            <div id="biodata">
                                            
                                            </div>

                                            <br>

                                            <div id="recap3" style="transform: scale(0.77); transform-origin: 0 0;"></div>
                                            <!-- recaptcha -->
                                            <!-- <div class="g-recaptcha" data-sitekey="6LdIaC0UAAAAAMCa5Skz5SB-6lEsLTkAbjJH5ZaF"></div> -->
                                            <!-- end -->
                                            <div class="text-right" id="submit">
                                                <button type="submit" id="sub" class="btn btn-prim">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- start ktp -->
                            <div id="ktp">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Kartu Tanda Penduduk</div>
                                    <div class="panel-body">
                                        <form action="<?php echo base_url();?>Ktp/insert" method="POST">
                                            <div class="form-group">
                                                <label for="">NIK</label>
                                                <input type="text" name="nik" data-validation="number" data-validation-error-msg-required="NIK Tidak Boleh Kosong"  data-validation-error-msg="NIK Harus Angka" class="form-control" placeholder="Masukkan NIK">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" data-validation="required" data-validation-error-msg-required="Nama Lengkap Tidak Boleh Kosong" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Kelamin</label>
                                                <select class="form-control" name="jenis_kelamin" data-validation="required" data-validation-error-msg-required="Jenis Kelamin Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Jenis Kelamin</option>
                                                    <?php foreach($jenis_kelamin as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->jenis_kelamin ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tempat Lahir</label>
                                                <input type="text" data-validation="required" data-validation-error-msg-required="Tempat Lahir Tidak Boleh Kosong" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="text" id="datepickerktp" data-validation="birthdate" data-validation-format="mm/dd/yyyy" data-validation-error-msg-required="Tanggal Lahir Tidak Boleh Kosong" data-validation-error-msg="Tanggal Lahir Tidak Boleh Lebih Dari Hari Ini"  name="tanggal_lahir" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status Kawin</label>
                                                <select class="form-control" name="status_kawin" data-validation="required" data-validation-error-msg-required="Status Kawin Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Status Kawin</option>
                                                    <?php foreach($status_kawin as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->status_kawin ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Agama</label>
                                                <select class="form-control" name="agama" data-validation="required" data-validation-error-msg-required="Agama Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Agama</option>
                                                    <?php foreach($agama as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->agama ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Golongan Darah</label>
                                                <select class="form-control" name="golongan_darah" data-validation="required" data-validation-error-msg-required="Golongan Darah Tidak Boleh Kosong">
                                                    <option value="" selected>Pilih Golongan Darah</option>
                                                    <?php foreach($golongan_darah as $row){ ?>
                                                    <option value="<?php echo $row->id; ?>"><?php echo $row->golongan_darah ?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Pekerjaan</label>
                                                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" data-validation="required" data-validation-error-msg-required="Pekerjaan Tidak Boleh Kosong">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat</label>
                                                <textarea rows="2" name="alamat" class="form-control" placeholder="Masukkan Alamat Rumah" data-validation="required" data-validation-error-msg-required="Alamat Tidak Boleh Kosong"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="">RT</label>
                                                        <input type="text" data-validation="number" data-validation-error-msg="RT Harus Angka" data-validation-error-msg-required="RT Tidak Boleh Kosong" name="rt" class="form-control" placeholder="Masukkan RT">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="">RW</label>
                                                        <input type="text" name="rw" data-validation="number" data-validation-error-msg="RW Harus Angka" data-validation-error-msg-required="RW Tidak Boleh Kosong" class="form-control" placeholder="Masukkan RW">
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="recap4" style="transform: scale(0.77); transform-origin: 0 0;"></div>
                                            <!-- recaptcha -->
                                            <!-- <div class="g-recaptcha" data-sitekey="6LdJaC0UAAAAAF9sIayiXSQ_ETKwgMear9yAYNY4"></div> -->
                                            <!-- end -->
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-prim">Submit</button>
                                            </div>

                                        </form>		
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>

                <div class="col-sm-4 col-xs-12">
					<div class="panel-group">
						<div class="panel panel-primary">
							<div class="panel-heading">Navigation</div>
							<div class="panel-body">
                                <ul class="list-menu">
                                    <li><a href="<?php echo base_url();?>">Layanan Online</a></li>
                                    <li><a href="<?php echo base_url();?>Status_regis">Cek Status</a></li>
                                </ul>
							</div>
						</div>
					</div>
				</div>

            </div>
            <!-- end row -->
		</div>
	</section>

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 footer-col">
                    <h6 class="heading7">LANDUNGSARI</h6>
                    <p>Desa Landungsari memiliki makna yaitu Landung sama dengan "Panjang", Sari adalah "Inti atau Madu", dan dapat diartikan "Panjang Penggalihe, Punjung Rejekine".</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-col">
                    <h6 class="heading7">HUBUNGI KAMI</h6>
                    <ul class="footer-ul" style="color:white;">
                        <li><i class="fa fa-map-pin"></i> Pandaan-Pasuruan, 67156</li>
                        <li><i class="fa fa-phone"></i> Phone  : +62 812-9001-6686</li>
                        <li><i class="fa fa-envelope"></i> E-mail : admin@madanitech.com</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-col">
                    <h6 class="heading7">SITE STATISTIK</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-col">
                    <h6 class="heading7">Social Media</h6>
                    <ul class="footer-social">
                        <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                        <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>&copy; Developed by MadaniTech Nusantara</p>
            </div>
            <div class="col-md-6">
            <a href="#" class="btn btn-danger btn-custom backtotop">Back to Top</a>
            </div>
        </div>
    </div>




</body>

</html>


	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<script type='text/javascript'>
            $(window).load(function(){
                $('.carousel-caption').animate({
                    "left":"50%",
                    "opacity":1
                }, 500);
                $(".btnlink").on("click", function(){
                    var href = $(this).attr("href");
                    var postop = $(href).offset().top;
                    var navheight = $(".navbar.navbar-default").height();
                    $("html, body").animate({"scrollTop": (postop-navheight-20)+"px"})
                    return false;
                });
                $(".backtotop").on("click", function(){
                    $("html, body").animate({"scrollTop":"0px"}, 500);
                    return false;
                });
        }) 
		$(document).ready(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#scroll').fadeIn();
				} else {
					$('#scroll').fadeOut();
				}
			});
			$('#scroll').click(function () {
				$("html, body").animate({
					scrollTop: 0
				}, 600);
				return false;
			});
		});

	</script>
	<!--start scroll animation effect-->

	<script>
		$(function () {
			$(document).scroll(function () {
				var $nav = $(".navbar-fixed-top");
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			});
		});

	</script>

	<script>
		lightbox.option({
			'resizeDuration': 200,
			'wrapAround': true
		})

    </script>

    <script>
        var id_pelayanan;
	$("#ho_recom").hide();
	$("#imb").hide();
	$("#kk").hide();
	$("#ktp").hide();
	$("#sub").prop('disabled',true);			
  
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
			$("#sub").prop('disabled',true);			
		}else{
			// $("#submit").show();		
			$("#sub").prop('disabled',false);			
            	
			
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
    </script>

    <!-- <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script> -->
    <script>
      var recap1;
      var recap2;
      var recap3;
      var recap3;
      var myCallBack = function() {
        //Render the recaptcha1 on the element with ID "recaptcha1"
        recap1 = grecaptcha.render('recap1', {
          'sitekey' : '6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu', //Replace this with your Site key
          'theme' : 'light'
        });
        
        //Render the recaptcha2 on the element with ID "recaptcha2"
        recap2 = grecaptcha.render('recap2', {
          'sitekey' : '6LdHMy0UAAAAAK5-C9KK1vUdpSIH5arnnIyvBLdR', //Replace this with your Site key
          'theme' : 'light'
        });
        //Render the recaptcha1 on the element with ID "recaptcha1"
        recap3 = grecaptcha.render('recap3', {
          'sitekey' : '6LdIaC0UAAAAAMCa5Skz5SB-6lEsLTkAbjJH5ZaF', //Replace this with your Site key
          'theme' : 'light'
        });
        
        //Render the recaptcha2 on the element with ID "recaptcha2"
        recap4 = grecaptcha.render('recap4', {
          'sitekey' : '6LdJaC0UAAAAAF9sIayiXSQ_ETKwgMear9yAYNY4', //Replace this with your Site key
          'theme' : 'light'
        });
      };
</script>



 <script>
  $( function() {
    $("#datepickerho").datepicker();
  } );

  $( function() {
    $("#datepickerimb").datepicker();
  } );

  $( function() {
    $("#datepickerktp").datepicker();
  } );
</script>
<script>
$.validate({
  modules : 'date'
});
</script>