<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Status Registrasi</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('');?>assets/css/style.css">
</head>
<body>

<div class="container">  
  <form id="contact" action="" method="post">
    <span>Form Cek Status Registrasi</span>
    <h4>Kelurahan Landungsari</h4>
    <p><label class="custom-select">
    <select>
        <option value="" selected>Jenis Pelayanan</option>
        <option value="1">Pengajuan KTP</option>
        <option value="2">Pengajuan KK</option>
        <option value="3">Pengajuan IMB</option>
        <option value="3">Pengajuan Izin (HO)</option>
    </select>
    </label></p>
    <fieldset>
      <input placeholder="Nomor registrasi" type="text" tabindex="2" required>
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