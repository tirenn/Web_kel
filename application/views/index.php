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
				<div class="col-xs-8">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- <div class="navbar-header">
						<a class="navbar-brand" href="#">Landungsari</a>
                    </div> -->
                    <ul class="nav navbar-nav" style="float:left;">
						<li><a id="status" href=""><img id="logo" src="http://ngalam.co/wp-content/uploads/2017/05/aplikasi-singo.png" alt=""> Landungsari</a></li>
					</ul>
				</div>
				<div class="col-xs-4">
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
						<div class="panel-heading">Cek Status Registrasi</div>
						<div class="panel-body">
						<!-- start status -->
							<div id="status">
								  <form action="<?php echo base_url();?>/Status_regis/search" method="POST">
									<div class="form-group">
										<label for="" id="label">Jenis Pelayanan</label>
										<select class="form-control" id="jenis_layanan" name="jenis_layanan" required>
											<option value="" selected>Pilih Jenis Pelayanan</option>
											<option value="1">Pengajuan KTP</option>
											<option value="2">Pengajuan KK</option>
											<option value="3">Pengajuan IMB</option>
											<option value="4">Pengajuan Izin (HO)</option>
										</select>
									</div>
									<div class="form-group">
										<label for="" id="label">Nomor Registrasi</label>
										<input type="text" id="nomor_registrasi" name="nomor_registrasi" class="form-control" placeholder="Masukkan Nomor Registrasi" required>
									</div>

									<!-- recaptcha -->
									<!-- <div class="g-recaptcha" data-sitekey="6Lc9FC0UAAAAAPuoZ3GdQhUtBM4xBNCJ3txJuROu"></div> -->
									<!-- end -->
									
									<div class="text-right">
										  <!-- <button id="submit" class="btn btn-primary">Submit</button>   -->
										   <input type="submit" class="btn btn-primary" value="Submit">   
									</div>
								  </form>  
							</div>
							<!-- end status		 -->
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
            
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
			url: "<?php echo base_url()?>Index/kk",
			type: 'POST',
			data: {
				'jumlah_keluarga': jumlah_keluarga
			},
			dataType: 'json',
			success: function (data) {
				$('#biodata').html(data);
			},
			error: function () {
				alert('terjadi error');
			}
		});

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
