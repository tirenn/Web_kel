<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ktp extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('uuid');
		$this->load->model('M_ktp','',TRUE);

    }

    public function index(){
   
            $this->load->view('kelurahan');                
   
    }

    // global $no=1;

    function setnumber($last){
        $number = $last;
        $last++;
        return $last;
    }

    function insert(){

        $secret_key = '6LdJaC0UAAAAAOFitLXQ81SnJPf2mnZZaT8-AeHh';
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            // $response = @file_get_contents($api_url);
            // $data = json_decode($response, true);

            $ch = curl_init($api_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            $data = json_decode($result, true);
 
            if($data['success']){
                
                date_default_timezone_set("Asia/Bangkok");
                $date = date('Y-m-d H:i:s', time());
                // $no = $_SESSION['regktp'];
                // $no = setnumber(0);
                $query = $this->M_ktp->getNoreg();
                foreach ($query as $row){
                    $noreg = $row->noreg;
                }
                $no = $noreg+1;
                $nom = str_pad($no,3,0,STR_PAD_LEFT);
                $noreg = "REG-".date('m')."".substr(date('Y'),2)."-KTP-".$nom;
                // $no = setnumber($no+1);
                
                $data = array(
                    'id' => $this->uuid->v4(),            
                    'nik' => strtoupper($_POST['nik']),
                    'nama_lengkap' => strtoupper($_POST['nama_lengkap']),
                    'tempat_lahir' => strtoupper($_POST['tempat_lahir']),
                    'tanggal_lahir' => $_POST['tanggal_lahir'],
                    'table_agama_id' => $_POST['agama'],
                    'table_jenis_kelamin_id' => $_POST['jenis_kelamin'],
                    'table_status_kawin_id' => $_POST['status_kawin'],
                    'table_status_berkas_id' => 1,
                    'table_golongan_darah_id' => $_POST['golongan_darah'],
                    'pekerjaan' => strtoupper($_POST['pekerjaan']),
                    'alamat' => strtoupper('RT/'.$_POST['rt'].' RW/'.$_POST['rw'].' '.$_POST['alamat']),
                    'nomor_registrasi' => $noreg,
                    'create_on' => $date,
                    'is_deleted' => 0
                );

                $insert = $this->M_ktp->insert($data);
                if(true==$insert){
                    $data['noreg'] = $noreg;
                    $data['back'] = '';
                    $this->load->view('success', $data);
                }else{
                    $data['error'] = 'Gagal Menyimpan Data, Silahkan Coba Lagi';
                    $data['back'] = '';
                    $this->load->view('error', $data);
                }


            }//end succes
            else{
                $data['error'] = 'Wrong CAPTCHA';
                $data['back'] = '';
                $this->load->view('error', $data);
            }

        }else{
            $data['error'] = 'Wrong CAPTCHA';
                $data['back'] = '';
                $this->load->view('error', $data);
        }



        // echo json_encode($data);
        // echo $noreg;
        // echo "<br>";
        // echo $no;
    }

}
?>