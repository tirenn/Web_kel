<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Form KK</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/kk.css">
</head>

<body>
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <span>Form Kartu Keluarga</span>
  <p class="edit-paragraf">Kelurahan Landungsari</p>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Details</div>
  </div>
  <div class="form">
    <h2>Isi biodata anda.</h2>
    <form>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Jenis Permohonan</option>
        <option value="1">Baru</option>
        <option value="2">Perubahan</option>
        <option value="3">Pisah KK</option>
      </select>
      </label></p>
      <input type="text" placeholder="Nama Lengkap"/>
      <input type="text" placeholder="Alamat"/>
      <input type="text" placeholder="Kode Pos"/>
      <input type="text" placeholder="RT"/>
      <input type="text" placeholder="RW"/>
      <input type="text" placeholder="Jumlah Anggota Keluarga"/>
    </form>
  </div>
  <div class="form">
    <h2>Lengkapi biodata anda.</h2>
    <form>
      <input type="text" placeholder="Nama Lengkap"/>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Jenis Kelamin</option>
        <option value="1">Laki-Laki</option>
        <option value="2">Perempuan</option>
      </select>
      </label></p>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Hubungan Keluarga</option>
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
      </label></p>
        <input type="text" placeholder="Anak Ke-"/>
        <input type="text" placeholder="Nomor Akta Pengangkatan Anak"/>
        <input type="text" placeholder="Tempat Lahir"/>
        <input type="text" placeholder="Tanggal Lahir (dd-mm-yy)"/>
        <input type="text" placeholder="NIK"/>
        <input type="text" placeholder="Nomor/Tanggal Akta Kelahiran"/>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Status Kawin</option>
        <option value="1">Belum Kawin</option>
        <option value="2">Kawin</option>
        <option value="3">Cerai Hidup</option>
        <option value="4">Cerai Mati</option>
      </select>
      </label></p>
        <input type="text" placeholder="Nomor/Tanggal Akta Kawin/Cerai"/>
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
      <p><label class="custom-select">
      <select>
        <option value="" selected>Golongan Darah</option>
        <option value="1">A</option>
        <option value="2">AB</option>
        <option value="3">B</option>
        <option value="4">O</option>
      </select>
      </label></p>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Pendidikan Terakhir</option>
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
      </label></p>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Status Pendidikan</option>
        <option value="1">Tidak Tamat</option>
        <option value="2">Tamat</option>
        <option value="3">Belum Tamat</option>
        <option value="4">Tidak Sekolah</option>
        <option value="5">Belum Sekolah</option>
      </select>
      </label></p>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Kelompok Pekerjaan</option>
        <option value="1">Swasta</option>
        <option value="2">Wiraswasta</option>
        <option value="3">Pegawa Negeri Sipil</option>
        <option value="4">Pedagang</option>
        <option value="5">Petani</option>
        <option value="6">Nelayan</option>
        <option value="7">Atlet</option>
        <option value="8">Lain-Lain</option>
      </select>
      </label></p>
        <input type="text" placeholder="Tempat Tinggal Terakhir"/>
        <input type="text" placeholder="Nomor dan Tanggal Surat Pindah"/>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Kelainan Khusus</option>
        <option value="1">Tidak Ada</option>
        <option value="2">Tunawicara</option>
        <option value="3">Tunarungu</option>
        <option value="1">Tunanetra</option>
        <option value="4">Tunarungu/Tunanetra</option>
        <option value="4">Lainnya</option>
      </select>
      </label></p>
      <p><label class="custom-select">
      <select>
        <option value="" selected>Akseptor KB</option>
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
      </label></p>
        <input type="text" placeholder="Nama Ibu"/>
        <input type="text" placeholder="NIK Ibu"/>
        <input type="text" placeholder="Nama Ayah"/>
        <input type="text" placeholder="NIK Ayah"/>
        <input type="text" placeholder="Tempat Tinggal Terakhir"/>
        <input type="text" placeholder="Keterangan (Catatan Lain)"/>
        <button>Daftar</button>
    </form>
  </div>
  <div class="cta"></div>
</div>
<div class="spacer"></div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="<?= base_url();?>assets/js/index.js"></script>

</body>
</html>
