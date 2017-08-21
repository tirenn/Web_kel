<!DOCTYPE html>
<html lang="en">

<head>
	<title>Wedding Bagus Ayu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Tugas KKN TTV">
	<!-- <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/lightbox.min.css">
    <script src="<?php echo base_url();?>/assets/js/lightbox-plus-jquery.min.js"></script>
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    	<script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css"> 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
</head>


<body>

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
        <input type="text" id="datepicker" data-validation="birthdate" data-validation-format="mm/dd/yyyy" data-validation-error-msg-required="Tanggal Lahir Tidak Boleh Kosong" data-validation-error-msg="Tanggal Lahir Tidak Boleh Lebih Dari Hari Ini" name="tanggal_lahir" class="form-control">
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


</body>

</html>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

<script>
$.validate({
  modules : 'date'
});
</script>