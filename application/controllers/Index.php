<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller{

   public function __construct(){
        parent::__construct();
        // $this->load->helper('url');
		$this->load->model('M_agama','',TRUE);
		$this->load->model('M_jenis_kelamin','',TRUE);
		$this->load->model('M_status_kawin','',TRUE);
		$this->load->model('M_jenis_permohonan_kk','',TRUE);
		$this->load->model('M_jenis_permohonan_imb','',TRUE);
		$this->load->model('M_jenis_permohonan_ho','',TRUE);
		$this->load->model('M_hubungan_keluarga','',TRUE);
		$this->load->model('M_golongan_darah','',TRUE);
		$this->load->model('M_pendidikan_terakhir','',TRUE);
		$this->load->model('M_status_pendidikan','',TRUE);
		$this->load->model('M_kelompok_pekerjaan','',TRUE);
		$this->load->model('M_kelainan_khusus','',TRUE);
		$this->load->model('M_akseptor_kb','',TRUE);
		
		
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
    }

    public function index(){
		$data = array(
				'agama' => $this->M_agama->getAgama(),
				'jenis_kelamin' => $this->M_jenis_kelamin->getJenisKelamin(),
				'status_kawin' => $this->M_status_kawin->getStatusKawin(),
				'jenis_permohonan_ho' => $this->M_jenis_permohonan_ho->getJenisPermohonan(),
				'jenis_permohonan_imb' => $this->M_jenis_permohonan_imb->getJenisPermohonan(),
				'jenis_permohonan_kk' => $this->M_jenis_permohonan_kk->getJenisPermohonan(),
				'golongan_darah' => $this->M_golongan_darah->getGolonganDarah()
				);
        $this->load->view('index2', $data);
    }

    public function kk(){
		$agama = $this->M_agama->getAgama();
		$jenis_kelamin = $this->M_jenis_kelamin->getJenisKelamin(); 
		$hubungan_keluarga = $this->M_hubungan_keluarga->getHubunganKeluarga(); 
		$status_kawin = $this->M_status_kawin->getStatusKawin();
		$golongan_darah = $this->M_golongan_darah->getGolonganDarah();
		$pendidikan_terakhir = $this->M_pendidikan_terakhir->getPendidikanTerakhir();
		$status_pendidikan = $this->M_status_pendidikan->getStatusPendidikan();
		$kelompok_pekerjaan = $this->M_kelompok_pekerjaan->getKelompokPekerjaan();
		$kelainan_khusus = $this->M_kelainan_khusus->getKelainanKhusus();
		$akseptor_kb = $this->M_akseptor_kb->getAkseptorKb();
		
		
		$select_agama = '';
		foreach($agama as $row){
			$select_agama .= '<option value="'.$row->id.'">'.$row->agama.'</option>';
		}

		$select_status_kawin = '';
		foreach($status_kawin as $row){
			$select_status_kawin .= '<option value="'.$row->id.'">'.$row->status_kawin.'</option>';
		}

		$select_jenis_kelamin = '';
		foreach($jenis_kelamin as $row){
			$select_jenis_kelamin .= '<option value="'.$row->id.'">'.$row->jenis_kelamin.'</option>';
		}

		$select_hubungan_keluarga = '';
		foreach($hubungan_keluarga as $row){
			$select_hubungan_keluarga .= '<option value="'.$row->id.'">'.$row->hubungan_keluarga.'</option>';
		}

		$select_golongan_darah = '';
		foreach($golongan_darah as $row){
			$select_golongan_darah .= '<option value="'.$row->id.'">'.$row->golongan_darah.'</option>';
		}

		$select_pendidikan_terakhir = '';
		foreach($pendidikan_terakhir as $row){
			$select_pendidikan_terakhir .= '<option value="'.$row->id.'">'.$row->pendidikan_terakhir.'</option>';
		}

		$select_status_pendidikan = '';
		foreach($status_pendidikan as $row){
			$select_status_pendidikan .= '<option value="'.$row->id.'">'.$row->status_pendidikan.'</option>';
		}

		$select_kelompok_pekerjaan = '';
		foreach($kelompok_pekerjaan as $row){
			$select_kelompok_pekerjaan .= '<option value="'.$row->id.'">'.$row->kelompok_pekerjaan.'</option>';
		}

		$select_kelainan_khusus = '';
		foreach($kelainan_khusus as $row){
			$select_kelainan_khusus .= '<option value="'.$row->id.'">'.$row->kelainan_khusus.'</option>';
		}

		$select_akseptor_kb = '';
		foreach($akseptor_kb as $row){
			$select_akseptor_kb .= '<option value="'.$row->id.'">'.$row->akseptor_kb.'</option>';
		}

        $jumlah = $this->input->post('jumlah_keluarga');
		// $jumlah = 2;
		$select_box='';
        for ($i = 1; $i <= $jumlah; $i++) {
				$select_box .= '<div class="panel panel-default">'.
							'<div class="panel-heading">Detail Kartu Keluarga ke-'.$i.'</div>'.
							'<div class="panel-body">'.
							
								'<div class="form-group">'.
									'<label for="">Nama Lengkap</label>'.
									'<input type="text" name="nama_lengkap'.$i.'" class="form-control" placeholder="Masukkan Nama Lengkap" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Jenis Kelamin</label>'.
									'<select class="form-control" name="jenis_kelamin'.$i.'" required>'.
										'<option value="" selected>Pilih Jenis Kelamin</option>'.
										$select_jenis_kelamin.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Hubungan Keluarga</label>'.
									'<select class="form-control" name="hubungan_keluarga'.$i.'"  required>'.
										'<option value="" selected>Pilih Hubungan Keluarga</option>'.
										$select_hubungan_keluarga.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Anak ke-</label>'.
									'<input type="number" min="0" name="anak_ke'.$i.'" class="form-control" placeholder="Masukkan Anak ke-" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor Akta Pengangkatan Anak</label>'.
									'<input type="number" min="0" name="nomor_akta'.$i.'" class="form-control" placeholder="Masukkan Nomor Akta Pengangkatan Anak">'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Tempat Lahir</label>'.
									'<input type="text" name="tempat_lahir'.$i.'" class="form-control" placeholder="Masukkan Tempat Lahir" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Tanggal Lahir</label>'.
									'<input type="date" name="tanggal_lahir'.$i.'" class="form-control" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">NIK</label>'.
									'<input type="text" name="nik'.$i.'" class="form-control" placeholder="Masukkan NIK" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor/Akta Tanggal Kelahiran</label>'.
									'<input type="text" name="nomor_kelahiran'.$i.'" class="form-control" placeholder="Masukkan Nomor/Akta Tanggal Kelahiran" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Status Kawin</label>'.
									'<select class="form-control" name="status_kawin'.$i.'" required>'.
										'<option value="" selected>Pilih Status Kawin</option>'.
										$select_status_kawin.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor/Akta Tanggal Kawin/Cerai</label>'.
									'<input type="text" name="nomor_kawin'.$i.'" class="form-control" placeholder="Masukkan Nomor/Akta Tanggal Kelahiran">'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Agama</label>'.
									'<select class="form-control" name="agama'.$i.'" required>'.
										'<option value="" selected>Pilih Agama</option>'.
										$select_agama.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Pilih Golongan Darah</label>'.
									'<select class="form-control" name="golongan_darah'.$i.'" required>'.
										'<option value="" selected>Golongan Darah</option>'.
										$select_golongan_darah.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Pendidikan Terakhir</label>'.
									'<select class="form-control" name="pendidikan_terakhir'.$i.'" required>'.
										'<option value="" selected>Pilih Pendidikan Terakhir</option>'.
										$select_pendidikan_terakhir.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Status Pendidikan</label>'.
									'<select class="form-control" name="status_pendidikan'.$i.'" required>'.
										'<option value="" selected>Pilih Status Pendidikan</option>'.
										$select_status_pendidikan.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Kelompok Pekerjaan</label>'.
									'<select class="form-control" name="kelompok_pekerjaan'.$i.'" required>'.
										'<option value="" selected>Pilih Kelompok Pekerjaan</option>'.
										$select_kelompok_pekerjaan.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Tempat Tinggal Terakhir</label>'.
									'<input type="text" name="tempat_tinggal_terakhir'.$i.'" class="form-control" placeholder="Masukkan Tempat Tinggal Terakhir" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nomor dan Tanggal Surat Pindah</label>'.
									'<input type="text" name="nomor_tgl_pindah'.$i.'" class="form-control" placeholder="Masukkan Nomor dan Tanggal Surat Pindah">'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Kelainan Khusus</label>'.
									'<select class="form-control" name="kelainan_khusus'.$i.'">'.
										'<option value="" selected>Pilih Kelainan Khusus</option>'.										
										$select_kelainan_khusus.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Akseptor KB</label>'.
									'<select class="form-control" name="akseptor_kb'.$i.'">'.
										'<option value="" selected>Pilih Akseptor KB</option>'.
										$select_akseptor_kb.
									'</select>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nama Ibu</label>'.
									'<input type="text" name="nama_ibu'.$i.'" class="form-control" placeholder="Masukkan Nama Ibu" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">NIK Ibu</label>'.
									'<input type="text" name="nik_ibu'.$i.'" class="form-control" placeholder="Masukkan NIK Ibu">'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Nama Ayah</label>'.
									'<input type="text" name="nama_ayah'.$i.'" class="form-control" placeholder="Masukkan Nama Ayah" required>'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">NIK Ayah</label>'.
									'<input type="text" name="nik_ayah'.$i.'" class="form-control" placeholder="Masukkan NIK Ayah">'.
								'</div>'.
								'<div class="form-group">'.
									'<label for="">Keterangan (Catatan Lain)</label>'.
									'<input type="text" name="note'.$i.'" class="form-control" placeholder="Masukkan Keterangan (Catatan Lain)">'.
								'</div>'.
							
							'</div>'.
						'</div>';
		}
		echo json_encode($select_box);
    }

}
?>