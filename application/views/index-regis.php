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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/lightbox.min.css">
    <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    	<script src="https://www.google.com/recaptcha/api.js"></script>


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
                        <a href="#tittlepage" class="btn btn-danger btn-custom btnlink">Cek Status Registrasi</a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--end slider-->

    <section class="text-center" id="tittlepage">
        <h3 class="edit-h3">Cek Status Registrasi</h3>
        <hr>
    </section>

	<!--start groom & bride-->
	<section>
		<div class="container" style="margin-top:3%;" id="main">
			<div class="row">
				<div class="col-sm-8 col-xs-12">
                    
                    <div id="status">
                        <div class="panel panel-primary">				
                            <div class="panel-heading">Cek Status Registrasi</div>
                            <form action="<?php echo base_url();?>Status_regis/search" method="POST">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Jenis Pelayanan</label>
                                    <select class="form-control" name="jenis_layanan" required>
                                        <option value="" selected>Pilih Pelayanan</option>
                                        <option value="1">HO Recom</option>
                                        <option value="2">IMB</option>
                                        <option value="3">Kartu Keluarga</option>
                                        <option value="4">Kartu Tanda Penduduk</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Registrasi</label>
                                    <input type="text" name="noreg" class="form-control" placeholder="Masukkan Nomor Registrasi" required>
                                </div>

                                <div class="g-recaptcha" data-sitekey="6LdIai0UAAAAAAkj6iFRWIMPjMxLk7CyGjXIHd2U" style="transform: scale(0.77); transform-origin: 0 0;"></div>
                                <!-- recaptcha -->
								<!-- <div><?php
                                    // require_once('recaptchalib.php');
                                    // echo recaptcha_get_html('6LeZbC0UAAAAAIUIaYPYkBhBkxrkl4nd9bUvP5Zo');
                                ?></div> -->
								<!-- end -->
								<div class="text-right" id="submit">
									<button type="submit" class="btn btn-prim">Submit</button>
								</div>
                            </div>
                            </form>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

    </script>

</body>

</html>