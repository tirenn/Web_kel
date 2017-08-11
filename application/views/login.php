<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>

<body>
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <span>MASUK<br></span>
  <span><a href='#'>Kelurahan Landungsari</a></span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Daftar</div>
  </div>
  <div class="form">
    <h2>Masuk dengan akun anda.</h2>
    <form>
      <input type="text" placeholder="Nama Pengguna"/>
      <input type="password" placeholder="Password"/>
      <button>Masuk</button>
    </form>
  </div>
  <div class="form">
    <h2>Buat akun anda.</h2>
    <form>
      <input type="text" placeholder="Nama Pengguna"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="Alamat Email"/>
      <input type="tel" placeholder="Nomor Telepon"/>
      <button>Daftar</button>
    </form>
  </div>
  <div class="cta"><a href="#">Lupa Password Anda?</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="<?php echo base_url();?>assets/js/index.js"></script>

</body>
</html>
