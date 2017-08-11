<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form KTP</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('');?>assets/css/style.css">
</head>
<body>

<div class="container">  
  <form id="contact" action="" method="post">
    <span>Form Kartu Tanda Penduduk</span>
    <h4>Kelurahan Landungsari</h4>
    <fieldset>
      <input placeholder="NIK" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Nama Lengkap" type="text" tabindex="2" required>
    </fieldset>
    <p><label class="custom-select">
    <select>
        <option value="" selected>Jenis Kelamin</option>
        <option value="1">Pria</option>
        <option value="2">Wanita</option>
    </select>
    </label></p>
    <fieldset>
      <input placeholder="Tanggal Lahir (dd-mm-yy)" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Tempat Lahir" type="text" tabindex="5" required>
    </fieldset>
    <p><label class="custom-select">
    <select>
        <option value="" selected>Status Kawin</option>
        <option value="1">Kawin</option>
        <option value="2">Belum Kawin</option>
        <option value="3">Cerai Hidup</option>
        <option value="4">Cerai Mati</option>
    </select>
    </label></p>
    <p><label class="custom-select">
    <select>
        <option value="" selected>Agama</option>
        <option value="1">Islam</option>
        <option value="2">Kristen</option>
        <option value="3">Katholik</option>
        <option value="4">Hindu</option>
        <option value="5">Budha</option>
    </select>
    </label></p>
    <fieldset>
      <input placeholder="Pekerjaan" type="text" tabindex="8" required>
    </fieldset>
    <fieldset>
      <input placeholder="Alamat" type="text" tabindex="9" required>
    </fieldset>
    <fieldset>
      <input placeholder="Rukun Tetangga (RT)" type="text" tabindex="10" required>
    </fieldset>
    <fieldset>
      <input placeholder="Rukun Warga (RW)" type="text" tabindex="11" required>
    </fieldset>
    <!-- <fieldset>
    <div class="g-recaptcha" data-sitekey="6LcTWiwUAAAAAAtpoHlBtGeFzUO-uURAdjBKxyIh"></div>
    </fieldset> -->
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Simpan</button>
    </fieldset>
    <p class="copyright">Powered by <b>Tim PKL MadaniTech Nusantara</b></p>
  </form>
</div>

</body>
<script src='https://www.google.com/recaptcha/api.js'></script>
</html>