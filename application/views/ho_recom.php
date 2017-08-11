<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form HO Recom</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('');?>assets/css/style.css">
</head>
<body>

<div class="container">  
  <form id="contact" action="" method="post">
    <span>Form HO Recom</span>
    <h4>Kelurahan Landungsari</h4>
    <fieldset>
      <input placeholder="Nama Lengkap" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Tempat Lahir" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Tanggal Lahir (dd-mm-yy)" type="text" tabindex="3" required>
    </fieldset>
    <p><label class="custom-select">
      <select>
        <option value="" selected>Agama</option>
        <option value="1">Islam</option>
        <option value="2">Kristen</option>
        <option value="3">Katholik</option>
        <option value="4">Hindu</option>
        <option value="5">Budha</option>
        <option value="6">Konghucu</option>
      </select>
    </label></p>
    <fieldset>
      <input placeholder="Pekerjaan" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Alamat Rumah" type="text" tabindex="6" required>
    </fieldset>
    <fieldset>
      <input placeholder="Telepon/Fax" type="text" tabindex="7" required>
    </fieldset>
    <p><label class="custom-select">
    <select>
        <option value="" selected>Jenis Kelamin</option>
        <option value="1">Laki-Laki</option>
        <option value="2">Perempuan</option>
    </select>
    </label></p>
    <p><label class="custom-select">
      <select>
        <option value="" selected>Status Kawin</option>
        <option value="1">Belum Kawin</option>
        <option value="2">Kawin</option>
        <option value="3">Cerai Hidup</option>
        <option value="4">Cerai Mati</option>
      </select>
    </label></p>
     <fieldset>
      <input placeholder="Nama Perusahaan" type="text" tabindex="10" required>
    </fieldset>
    <fieldset>
      <input placeholder="Alamat Perusahaan" type="text" tabindex="11" required>
    </fieldset>
    <p><label class="custom-select">
    <select>
        <option value="" selected>Jenis Permohonan</option>
        <option value="1">Baru</option>
        <option value="2">Perpanjangan</option>
        <option value="3">Perluasan</option>
        <option value="4">Pindah Alamat</option>
        <option value="5">Balik Nama Pemohon</option>
        <option value="6">Ganti Nama Usaha</option>
    </select>
    </label></p>
    <fieldset>
      <input placeholder="Lokasi Bangunan" type="text" tabindex="13" required>
    </fieldset>
    <fieldset>
      <input placeholder="Luas Bangunan" type="text" tabindex="14" required>
    </fieldset>
    <fieldset>
      <input placeholder="Fungsi Bangunan" type="text" tabindex="15" required>
    </fieldset>
    <fieldset>
      <input placeholder="Status Tanah" type="text" tabindex="16" required>
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