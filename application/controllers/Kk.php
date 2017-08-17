<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Kk extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('uuid');
		$this->load->model('M_kk_header','',TRUE);
		$this->load->model('M_kk_detail','',TRUE);
        
    }

    public function index(){
        if (isset($_SESSION['ID_USER'])) {
            echo "admin";
        }
        else{
            $this->load->view('kelurahan');                
        }
    }

    function insert(){

        $secret_key = '6Lc9FC0UAAAAAMSZhyik9GfpH5dUK5JmxUYvtkrO';
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
            if($data['success']){
                    date_default_timezone_set("Asia/Bangkok");
                    $date = date('Y-m-d H:i:s', time());
                    $no = $_SESSION['regkk'];
                    $nom = str_pad($no,3,0,STR_PAD_LEFT);
                    $noreg = "REG-".date('m')."".date('d')."-KK-".$nom;
                    $_SESSION['regkk'] = $no+1;

                    $id_header= $this->uuid->v4();
                    
                    $data_header = array(
                        'id' => $id_header,            
                        'table_jenis_permohonan_id' => strtoupper($_POST['jenis_permohonan']),
                        'nama_lengkap' => strtoupper($_POST['nama_lengkap_header']),
                        'kode_pos' => strtoupper($_POST['kode_pos']),
                        'jumlah_anggota_keluarga' => $_POST['jumlah_anggota_keluarga'],
                        'table_status_berkas_id' => 1,
                        'alamat' => strtoupper('RT/'.$_POST['rt'].' RW/'.$_POST['rw'].' '.$_POST['alamat']),
                        'nomor_registrasi' => $noreg,
                        'create_on' => $date,
                        'is_deleted' => 0
                    );

                    $insert = $this->M_kk_header->insert($data_header);
                    if(true==$insert){
                        
                        for($i=1; $i<=$_POST['jumlah_anggota_keluarga']; $i++){
                            $id_detail = $this->uuid->v4();
                            $data_detail[$i] = array(
                                'id' => $id_detail,
                                'table_akseptor_kb_id' => $_POST['akseptor_kb'.$i.''],
                                'table_jenis_kelamin_id' => $_POST['jenis_kelamin'.$i.''],
                                'table_hubungan_keluarga_id' => $_POST['hubungan_keluarga'.$i.''],
                                'table_status_kawin_id' => $_POST['status_kawin'.$i.''],
                                'table_agama_id' => $_POST['agama'.$i.''],
                                'table_golongan_darah_id' => $_POST['golongan_darah'.$i.''],
                                'table_pendidikan_terakhir_id' => $_POST['pendidikan_terakhir'.$i.''],
                                'table_status_pendidikan_id' => $_POST['status_pendidikan'.$i.''],
                                'table_kelompok_pekerjaan_id' => $_POST['kelompok_pekerjaan'.$i.''],
                                'table_kelainan_khusus_id' => $_POST['kelainan_khusus'.$i.''],
                                'table_kk_header_id' => $id_header,
                                'nik' => strtoupper($_POST['nik'.$i.'']),
                                'nama_lengkap' => strtoupper($_POST['nama_lengkap'.$i.'']),
                                'anak_ke' => $_POST['anak_ke'.$i.''],
                                'nomr_akta_pengangkatan_anak' => $_POST['nomor_akta'.$i.''],
                                'tempat_lahir' => strtoupper($_POST['tempat_lahir'.$i.'']),
                                'tanggal_lahir' => $_POST['tanggal_lahir'.$i.''],
                                'nomor_atau_tanggal_akta_kelahiran' => strtoupper($_POST['nomor_kelahiran'.$i.'']),
                                'nomor_atau_tanggal_akta_kawin_atau_cerai' => strtoupper($_POST['nomor_kawin'.$i.'']),
                                'tempat_tinggal_terakhir' => strtoupper($_POST['tempat_tinggal_terakhir'.$i.'']),
                                'nomor_dan_tanggal_surat_pindah' => strtoupper($_POST['nomor_tgl_pindah'.$i.'']),
                                'nama_ibu' => strtoupper($_POST['nama_ibu'.$i.'']),
                                'nik_ibu' => strtoupper($_POST['nik_ibu'.$i.'']),
                                'nama_ayah' => strtoupper($_POST['nama_ayah'.$i.'']),
                                'nik_ayah' => strtoupper($_POST['nik_ayah'.$i.'']),
                                'keterangan' => strtoupper($_POST['note'.$i.'']),
                                'create_on' => $date,
                                'is_deleted' => 0
                            ); //end data detail

                            $insert = $this->M_kk_detail->insert($data_detail[$i]);
                            if(true==$insert){
                                echo"benar";
                            }else{
                                $result="Gagal Menyimpan Data";
                                echo $result;
                            }

                        }//end for

                    }else{
                        $result="Gagal Menyimpan Data";
                        echo $result;
                    }


            }//end succes
            else{
                // $success = false;
                echo 'salah';
            }
        }

        

        
        

        // echo json_encode($data);
        // echo $noreg;
        // echo "<br>";
        // echo $no;
    }

}
?>