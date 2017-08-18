<!DOCTYPE html>
<html lang="en">

<head>
	<title>Wedding Bagus Ayu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tugas KKN TTV">
	<link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/lightbox.min.css">
    <script src="<?php echo base_url();?>/assets/js/lightbox-plus-jquery.min.js"></script>
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    	<script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>


	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
                    <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
				<a class="navbar-brand no-padding" href="#" id="navbr">
                    <strong>Desa Landungsari</strong>
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
					<img id="jumbotron" src="http://www.arenttour.com/wp-content/uploads/2014/09/malang1.jpg" alt="...">
					<div class="carousel-caption">
						<h1>Sistem Pelayanan Publik</h1>
						<h2><span>Pemerintah Desa Landungsari</span></h2>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--end slider-->

    <section class="text-center" id="tittlepage">
        <h3>Pelayanan Online</h3>
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
                                                <input type="number" min="0" name="telefon_atau_fax" class="form-control" placeholder="Masukkan Telefon/Fax" required>
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
                                                <input type="number" min="0" name="noTelp_perusahaan" class="form-control" placeholder="Masukkan Telefon Perusahaan" required>
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
                                                <input type="number" min="0" name="luas_tanah" class="form-control" placeholder="Masukkan Luas Bangunan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Luas Usaha (m<sup>2</sup>)</label>
                                                <input type="number" min="0" name="luas_usaha" class="form-control" placeholder="Masukkan Luas Bangunan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status Tanah</label>
                                                <input type="text" name="status_tanah" class="form-control" placeholder="Masukkan Status Tanah" required>
                                            </div>
                                            <!-- recaptcha -->
                                            <div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div>
                                            <!-- end -->
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-prim">Submit</button>
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
                                                <input type="number" min="0" name="telefon_atau_fax" class="form-control" placeholder="Masukkan Telefon/Fax" required>
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
                                                <input type="number" min="0" name="luas_bangunan" class="form-control" placeholder="Masukkan Luas Bangunan" required>
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
                                                <button type="submit" class="btn btn-prim">Submit</button>
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
                                                <button type="submit" class="btn btn-prim">Submit</button>
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
                                                        <input type="number" min="0" name="rw" class="form-control" placeholder="Masukkan RW" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- recaptcha -->
                                            <div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div>
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
								<!-- start status -->
                                <a href="<?php echo base_url();?>">Layanan Online</a>
                                <br>
								<a href="<?php echo base_url();?>Status_regis">Cek Status</a>
								<!-- end status		 -->
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
					<div class="logofooter">Landungsari</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
						dummy text ever since the 1500s, when an unknown printer took a galley.</p>

				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 footer-col">
					<h6 class="heading7">HUBUNGI KAMI</h6>
					<ul class="footer-ul" style="color:white;">
						<li><i class="fa fa-map-pin"></i> #228, Tiruvannamalai, Tamilnadu, India</li>
						<li><i class="fa fa-phone"></i> Phone (India) : +91 9999 999 999</li>
						<li><i class="fa fa-envelope"></i> E-mail : info@prabuuideveloper.com</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 footer-col">
					<h6 class="heading7">SITE STATISTIK</h6>
					<div class="post">
					</div>
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
	<!--footer start from here-->

	<div class="copyright">
		<div class="container">
			<div class="col-md-6">
				<p>Developed by Madanitech Nusantara | Credit to aThemes.</p>
			</div>
			<div class="col-md-6">
				<!-- <a href="javascript:void(0);" class="go-top show"><i class="fa fa-angle-up"></i></a> -->
			</div>
		</div>
	</div>
	<!-- BackToTop Button -->
	<!-- <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

	<script type='text/javascript'>
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
    </script>

</body>

</html>
