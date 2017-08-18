<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Status_regis extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('uuid');
		$this->load->model('M_ho','',TRUE);
		$this->load->model('M_ktp','',TRUE);
		$this->load->model('M_kk_header','',TRUE);
		$this->load->model('M_imb','',TRUE);
        
    }

    public function index(){
            $this->load->view('index3');                
    }

    function search(){
        // $jenis_pelayanan = 4;
        // $nomor_registrasi = 'REG-0816-HO-009';
        
        $jenis_pelayanan = $_POST['jenis_layanan'];
        $nomor_registrasi = $_POST['noreg'];
        // echo $nomor_registrasi;

        $result = false;
        $result_value = '';
        $secret_key = '6Lc9FC0UAAAAAMSZhyik9GfpH5dUK5JmxUYvtkrO';
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
            if($data['success']){
                if($jenis_pelayanan == 1){
                    $query = $this->M_ho->getStatus($nomor_registrasi);
                }else if($jenis_pelayanan == 2){
                    $query = $this->M_imb->getStatus($nomor_registrasi);                    
                }else if($jenis_pelayanan == 3){
                    $query = $this->M_kk_header->getStatus($nomor_registrasi);
                }else if($jenis_pelayanan == 4){
                    $query = $this->M_ktp->getStatus($nomor_registrasi);
                }
                $result = true;
                $result_value = '';
                foreach($query as $row){
                    $result_value = $row->status_berkas;
                }

                if(null==$result_value){
                    $data['noreg'] = $nomor_registrasi;
                    $data['value'] = 'Tidak Ditemukan';
                    $this->load->view('index', $data);
                }else{
                    $data['noreg'] = $nomor_registrasi;
                    $data['value'] = $result_value;
                    $this->load->view('index', $data);

                }
            }else{
                $data['error'] = 'Wrong CAPTCHA';
                $data['back'] = 'Status_regis';
                $this->load->view('error', $data);
            }
        }else{
            $data['error'] = 'Wrong CAPTCHA';
            $data['back'] = 'Status_regis';            
            $this->load->view('error', $data);
        }

        
    }

}
?>