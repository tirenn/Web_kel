<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ho_recom extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('uuid');
		$this->load->model('M_ho','',TRUE);

    }

    public function index(){
        $this->load->view('kelurahan');
    }

    function insert(){
        date_default_timezone_set("Asia/Bangkok");
        $date = date('Y-m-d H:i:s', time());
        $no = $_SESSION['regho'];
        $nom = str_pad($no,3,0,STR_PAD_LEFT);
        $noreg = "REG-".date('m')."".date('d')."-HO-".$nom;
        $_SESSION['regho'] = $no+1;
        
        $data = array(
            'ho_id' => $this->uuid->v4(),            
            'nama_lengkap' => strtoupper($_POST['nama_lengkap']),
            'tempat_lahir' => strtoupper($_POST['tempat_lahir']),
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'table_agama_id' => $_POST['agama'],
            'table_jenis_kelamin_id' => $_POST['jenis_kelamin'],
            'table_status_kawin_id' => $_POST['status_kawin'],
            'table_jenis_permohonan_id' => $_POST['jenis_permohonan'],
            'table_status_berkas_id' => 1,
            'pekerjaan' => strtoupper($_POST['pekerjaan']),
            'alamat_rumah' => strtoupper($_POST['alamat_rumah']),
            'telepon_atau_fax' => strtoupper($_POST['telefon_atau_fax']),
            'nama_perusahaan' => strtoupper($_POST['nama_perusahaan']),
            'alamat_perusahaan' => strtoupper($_POST['alamat_perusahaan']),
            'noTelp_perusahaan' => $_POST['noTelp_perusahaan'],
            'jenis_usaha' => strtoupper($_POST['jenis_usaha']),
            'lokasi_usaha' => strtoupper($_POST['lokasi_usaha']),
            'luas_tanah' => strtoupper($_POST['luas_tanah']),
            'luas_usaha' => strtoupper($_POST['luas_usaha']),
            'status_tanah' => strtoupper($_POST['status_tanah']),
            'nomor_registrasi' => $noreg,
            'create_on' => $date
        );

        $insert = $this->M_ho->insert($data);
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