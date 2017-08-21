<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Status_regis extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
        $this->load->library('recaptcha');  
        // $this->load->library('recaptchalib');        
              
        $this->load->library('uuid');
		$this->load->model('M_ho','',TRUE);
		$this->load->model('M_ktp','',TRUE);
		$this->load->model('M_kk_header','',TRUE);
		$this->load->model('M_imb','',TRUE);
        
    }

    public function index(){
            $this->load->view('index-regis');                
    }

    function search(){
        // $jenis_pelayanan = 4;
        // $nomor_registrasi = 'REG-0816-HO-009';
        
        $jenis_pelayanan = $_POST['jenis_layanan'];
        $nomor_registrasi = $_POST['noreg'];
        // echo $nomor_registrasi;
        // require_once('recaptchalib.php');
        // $privatekey = "6LeZbC0UAAAAANuucOjtkhYRkuYX3aaipoEAXoyp";
        // $resp = recaptcha_check_answer ($privatekey,
        //                                 $_SERVER["REMOTE_ADDR"],
        //                                 $_POST["recaptcha_challenge_field"],
        //                                 $_POST["recaptcha_response_field"]);

        // if (!$resp->is_valid) {
            // What happens when the CAPTCHA was entered incorrectly
            // die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
            //     "(reCAPTCHA said: " . $resp->error . ")");
        //         $data['error'] = 'Wrong CAPTCHA';
        //         $data['back'] = 'Status_regis';
        //         $this->load->view('error', $data);
        // } else {
            // Your code here to handle a successful verification
        //     if($jenis_pelayanan == 1){
        //             $query = $this->M_ho->getStatus($nomor_registrasi);
        //         }else if($jenis_pelayanan == 2){
        //             $query = $this->M_imb->getStatus($nomor_registrasi);                    
        //         }else if($jenis_pelayanan == 3){
        //             $query = $this->M_kk_header->getStatus($nomor_registrasi);
        //         }else if($jenis_pelayanan == 4){
        //             $query = $this->M_ktp->getStatus($nomor_registrasi);
        //         }
        //         $result = true;
        //         $result_value = '';
        //         foreach($query as $row){
        //             $result_value = $row->status_berkas;
        //         }

        //         if(null==$result_value){
        //             $data['noreg'] = $nomor_registrasi;
        //             $data['value'] = 'Tidak Ditemukan';
                    
        //             $this->load->view('success_regis', $data);
        //         }else{
                    
        //             $data['noreg'] = $nomor_registrasi;
        //             $data['value'] = $result_value;
        //             $this->load->view('success_regis', $data);

        //         }
        // }

        // // Catch the user's answer
        // $captcha_answer = $this->input->post('g-recaptcha-response');

        // // Verify user's answer
        // $response = $this->recaptcha->verifyResponse($captcha_answer);

        // // Processing ...
        // if ($response['success']) {
        //     // Your success code here
        //     if($jenis_pelayanan == 1){
        //             $query = $this->M_ho->getStatus($nomor_registrasi);
        //         }else if($jenis_pelayanan == 2){
        //             $query = $this->M_imb->getStatus($nomor_registrasi);                    
        //         }else if($jenis_pelayanan == 3){
        //             $query = $this->M_kk_header->getStatus($nomor_registrasi);
        //         }else if($jenis_pelayanan == 4){
        //             $query = $this->M_ktp->getStatus($nomor_registrasi);
        //         }
        //         $result = true;
        //         $result_value = '';
        //         foreach($query as $row){
        //             $result_value = $row->status_berkas;
        //         }

        //         if(null==$result_value){
        //             $data['noreg'] = $nomor_registrasi;
        //             $data['value'] = 'Tidak Ditemukan';
                    
        //             $this->load->view('success_regis', $data);
        //         }else{
                    
        //             $data['noreg'] = $nomor_registrasi;
        //             $data['value'] = $result_value;
        //             $this->load->view('success_regis', $data);

        //         }
        // } else {
        //     // Something goes wrong
        //     // var_dump($response);
        //     $data['error'] = 'Wrong CAPTCHA';
        //         $data['back'] = 'Status_regis';
        //         $this->load->view('error', $data);
        // }

        $result = false;
        $result_value = '';
        $secret_key = '6LdIai0UAAAAAEsbqSPWIDBYzlALAtcWYMlwfWL4';
        $ip = $_SERVER['REMOTE_ADDR'];
        // ini_set("allow_url_include", "1");
        // ini_set("allow_url_fopen", "1");
        
        if(isset($_POST['g-recaptcha-response']))
        {

            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' .urlencode($secret_key). '&response='.$_POST['g-recaptcha-response'];
            // $response = file_get_contents($api_url);
            // $data = json_decode($response, true);
            $ch = curl_init($api_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $data = json_decode($result, true);
            
 
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
                    
                    $this->load->view('success_regis', $data);
                }else{
                    
                    $data['noreg'] = $nomor_registrasi;
                    $data['value'] = $result_value;
                    $this->load->view('success_regis', $data);

                }
                // echo"benar";
            }else{
                // echo "salah";
                $data['error'] = 'Wrong CAPTCHA!';
            $data['back'] = 'Status_regis';            
            $this->load->view('error', $data);
            }
        }else{
            $data['error'] = 'Klik CAPTCHA';
            $data['back'] = 'Status_regis';            
            $this->load->view('error', $data);
        //    echo "captcha salah";
        }

        
    }

}
?>