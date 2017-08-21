<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Coba extends CI_Controller{

   public function __construct(){
        parent::__construct();
 		// $this->load->model('M_user','',TRUE);
        $this->load->helper('url');
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
    $this->load->view("index2",$data);    
    }



}
?>