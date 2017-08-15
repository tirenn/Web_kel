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

    function insert(){
        date_default_timezone_set("Asia/Bangkok");
        $date = date('Y-m-d H:i:s', time());
        $no = $_SESSION['regktp'];
        $nom = str_pad($no,3,0,STR_PAD_LEFT);
        $noreg = "REG-".date('m')."".date('d')."-IMB-".$nom;
        $_SESSION['regktp'] = $no+1;
        
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
            'create_on' => $date
        );

        $insert = $this->M_ktp->insert($data);
        if(true==$insert){
            echo"benar";
        }else{
            $result="Gagal Menyimpan Data";
            echo $result;
        }

        // echo json_encode($data);
        // echo $noreg;
        // echo "<br>";
        // echo $no;
    }

}
?>