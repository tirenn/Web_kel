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
        if (isset($_SESSION['ID_USER'])) {
            echo "admin";
        }
        else{
            $this->load->view('kelurahan');                
        }
    }

    function search(){
        // $jenis_pelayanan = 4;
        // $nomor_registrasi = 'REG-0816-HO-009';
        
        $jenis_pelayanan = $this->input->post('jenis_layanan');
        $nomor_registrasi = $this->input->post('nomor_registrasi');

        $result = false;
        $result_value = '';
        // $secret_key = '6Lc9FC0UAAAAAMSZhyik9GfpH5dUK5JmxUYvtkrO';
        // if(isset($_POST['g-recaptcha-response']))
        // {
        //     $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
        //     $response = @file_get_contents($api_url);
        //     $data = json_decode($response, true);
 
        //     if($data['success']){
                if($jenis_pelayanan == 1){
                    $query = $this->M_ktp->getStatus($nomor_registrasi);
                }else if($jenis_pelayanan == 2){
                    $query = $this->M_kk_header->getStatus($nomor_registrasi);                    
                }else if($jenis_pelayanan == 3){
                    $query = $this->M_imb->getStatus($nomor_registrasi);
                }else if($jenis_pelayanan == 4){
                    $query = $this->M_ho->getStatus($nomor_registrasi);
                }
                $result = true;
                $result_value = $query;
                foreach($query as $row){
                    $result_value = $row->status_berkas;
                }

                if(null==$result_value){
                    echo "tidak ditemukan";
                }else{
                    echo "ditemukan";
                }
        //     }else{
        //         $result=false;
        //     }
        // }else{
        //     $result=false;            
        // }

        
    }

}
?>