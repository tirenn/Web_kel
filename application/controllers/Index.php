<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller{

   public function __construct(){
        parent::__construct();
        // $this->load->helper('url');
    }

    public function index(){
        $this->load->view('kelurahan');
    }

    public function kk(){
        // $jumlah = $this->input->post('jumlah_keluarga');
$jumlah = 2;
$select_box='';
        for ($i = 1; $i <= $jumlah; $i++) {
				$select_box .= '<div class="panel panel-default">'.
							'<div class="panel-heading">Detail Kartu Keluarga ke-'.$i.'</div>'.
							'<div class="panel-body">'.
							
								'<div class="form-group">'.
									'<label for="">Nama Lengkap</label>'.
									'<input type="text" name="nama_lengkap['.$i.']" class="form-control" placeholder="Masukkan Nama Lengkap" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Jenis Kelamin</label>'.
									'<select class="form-control" name="jenis_kelamin['.$i.']" required>'.
										'<option value="0" selected>Pilih Jenis Kelamin</option>'.
										'<option value="1">Laki-Laki</option>'.
										'<option value="2">Perempuan</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Hubungan Keluarga</label>'.
									'<select class="form-control" name="hubungan_keluarga['.$i.']">'.
										'<option value="" selected>Pilih Hubungan Keluarga</option>'.
										'<option value="1">Kepala Keluarga</option>'.
										'<option value="2">Suami</option>'.
										'<option value="3">Istri</option>'.
										'<option value="4">Anak</option>'.
										'<option value="5">Menantu</option>'.
										'<option value="6">Cucu</option>'.
										'<option value="7">Orang Tua</option>'.
										'<option value="8">Mertua</option>'.
										'<option value="9">Famili Lain</option>'.
										'<option value="10">Pembantu</option>'.
										'<option value="11">Lainnya</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Anak ke-</label>'.
									'<input type="number" name="anak_ke['.$i.']" class="form-control" placeholder="Masukkan Anak ke-" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor Akta Pengangkatan Anak</label>'.
									'<input type="number" name="nomor_akta['.$i.']" class="form-control" placeholder="Masukkan Nomor Akta Pengangkatan Anak" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Tempat Lahir</label>'.
									'<input type="text" name="tempat_lahir['.$i.']" class="form-control" placeholder="Masukkan Tempat Lahir" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Tanggal Lahir</label>'.
									'<input type="date" name="tanggal_lahir['.$i.']" class="form-control" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">NIK</label>'.
									'<input type="text" name="nik['.$i.']" class="form-control" placeholder="Masukkan NIK" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor/Akta Tanggal Kelahiran</label>'.
									'<input type="text" name="nomor_kelahiran['.$i.']" class="form-control" placeholder="Masukkan Nomor/Akta Tanggal Kelahiran" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Status Kawin</label>'.
									'<select class="form-control" name="status_kawin['.$i.']" required>'.
										'<option value="0" selected>Pilih Status Kawin</option>'.
										'<option value="1">Belum Kawin</option>'.
										'<option value="2">Kawin</option>'.
										'<option value="3">Cerai Hidup</option>'.
										'<option value="4">Cerai Mati</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor/Akta Tanggal Kawin/Cerai</label>'.
									'<input type="text" name="nomor_kelahiran['.$i.']" class="form-control" placeholder="Masukkan Nomor/Akta Tanggal Kelahiran" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Agama</label>'.
									'<select class="form-control" name="agama['.$i.']" required>'.
										'<option value="0" selected>Pilih Agama</option>'.
										'<option value="1">Islam</option>'.
										'<option value="2">Kristen</option>'.
										'<option value="3">Katholik</option>'.
										'<option value="4">Hindu</option>'.
										'<option value="5">Budha</option>'.
										'<option value="6">Konghucu</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Pilih Golongan Darah</label>'.
									'<select class="form-control" name="golongan_darah['.$i.']">'.
										'<option value="" selected>Golongan Darah</option>'.
										'<option value="1">A</option>'.
										'<option value="2">AB</option>'.
										'<option value="3">B</option>'.
										'<option value="4">O</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Pendidikan Terakhir</label>'.
									'<select class="form-control" name="pendidikan_terakhir['.$i.']">'.
										'<option value="" selected>Pilih Pendidikan Terakhir</option>'.
										'<option value="1">Tidak/Belum Sekolah</option>'.
										'<option value="2">Tidak Tamat SD</option>'.
										'<option value="3">SD/Sederajat</option>'.
										'<option value="4">SLTP/Sederajat</option>'.
										'<option value="5">SLTA/Sederajat</option>'.
										'<option value="6">Diploma I/II</option>'.
										'<option value="7">Akademi/Dipl. III/S. Muda</option>'.
										'<option value="8">Dipl. IV/Strata I</option>'.
										'<option value="9">Strata II</option>'.
										'<option value="10">Strata III</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Status Pendidikan</label>'.
									'<select class="form-control" name="status_pendidikan['.$i.']">'.
										'<option value="" selected>Pilih Status Pendidikan</option>'.
										'<option value="1">Tidak Tamat</option>'.
										'<option value="2">Tamat</option>'.
										'<option value="3">Belum Tamat</option>'.
										'<option value="4">Tidak Sekolah</option>'.
										'<option value="5">Belum Sekolah</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Kelompok Pekerjaan</label>'.
									'<select class="form-control" name="kelompok_pekerjaan['.$i.']">'.
										'<option value="" selected>Pilih Kelompok Pekerjaan</option>'.
										'<option value="1">Swasta</option>'.
										'<option value="2">Wiraswasta</option>'.
										'<option value="3">Pegawa Negeri Sipil</option>'.
										'<option value="4">Pedagang</option>'.
										'<option value="5">Petani</option>'.
										'<option value="6">Nelayan</option>'.
										'<option value="7">Atlet</option>'.
										'<option value="8">Lain-Lain</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Tempat Tinggal Terakhir</label>'.
									'<input type="text" name="tempat_tinggal_terakhir['.$i.']" class="form-control" placeholder="Masukkan Tempat Tinggal Terakhir" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor dan Tanggal Surat Pindah</label>'.
									'<input type="text" name="nomor_tgl_pindah['.$i.']" class="form-control" placeholder="Masukkan Nomor dan Tanggal Surat Pindah" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Kelainan Khusus</label>'.
									'<select class="form-control" name="kelainan_khusus['.$i.']">'.
										'<option value="" selected>Pilih Kelainan Khusus</option>'.
										'<option value="1">Tidak Ada</option>'.
										'<option value="2">Tunawicara</option>'.
										'<option value="3">Tunarungu</option>'.
										'<option value="1">Tunanetra</option>'.
										'<option value="4">Tunarungu/Tunanetra</option>'.
										'<option value="4">Lainnya</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Akseptor KB</label>'.
									'<select class="form-control" name="akseptor_kb['.$i.']">'.
										'<option value="" selected>Pilih Akseptor KB</option>'.
										'<option value="1">Tidak Ada</option>'.
										'<option value="2">IUD</option>'.
										'<option value="3">Kondom</option>'.
										'<option value="4">PIL</option>'.
										'<option value="1">Suntik</option>'.
										'<option value="2">Susuk</option>'.
										'<option value="3">Vasektomi</option>'.
										'<option value="4">Tubektomi</option>'.
										'<option value="3">Tissu</option>'.
										'<option value="4">Lainnya</option>'.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nama Ibu</label>'.
									'<input type="text" name="nama_ibu['.$i.']" class="form-control" placeholder="Masukkan Nama Ibu" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">NIK Ibu</label>'.
									'<input type="text" name="nik_ibu['.$i.']" class="form-control" placeholder="Masukkan NIK Ibu" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nama Ayah</label>'.
									'<input type="text" name="nama_ayah['.$i.']" class="form-control" placeholder="Masukkan Nama Ayah" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">NIK Ayah</label>'.
									'<input type="text" name="nik_ayah['.$i.']" class="form-control" placeholder="Masukkan NIK Ayah" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Tempat Tinggal Terakhir</label>'.
									'<input type="text" name="tmp_tgl_terakhir['.$i.']" class="form-control" placeholder="Masukkan Tempat Tinggal Terakhir" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Keterangan (Catatan Lain)</label>'.
									'<input type="text" name="note['.$i.']" class="form-control" placeholder="Masukkan Keterangan (Catatan Lain)" required>'.
								'</div>'.
							
							'</div>'.
						'</div>';
		}
		echo json_encode($select_box);
    }

}
?>