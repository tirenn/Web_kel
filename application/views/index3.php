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
        <h3>Cek Status Registrasi</h3>
        <hr>
    </section>

	<!--start groom & bride-->
	<section>
		<div class="container" style="margin-top:3%;" id="main">
			<div class="row">
				<div class="col-xs-8">
                    
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
                                <!-- recaptcha -->
								<div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div>
								<!-- end -->
								<div class="text-right" id="submit">
									<button type="submit" class="btn btn-prim">Submit</button>
								</div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-xs-4">
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

	<script>
		window.fbAsyncInit = function () {
			FB.init({
				appId: '2fea6f8b9346c9bb00e28111b3cb99b2',
				autoLogAppEvents: true,
				xfbml: true,
				version: 'v2.9'
			});
			FB.AppEvents.logPageView();
		};

		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

	</script>


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
		$(document).ready(function () {
			// Add smooth scrolling to all links
			$("a").on('click', function (event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 1500, function () {

						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
		});

	</script>



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

</body>

</html>
