<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_ktp extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function insert($data){
			$result = $this->db->insert('table_ktp',$data);
            if($result == true){
                return true;
            }
		}

		function getStatus($nomor_registrasi){
			$query = $this->db->query("SELECT s.status_berkas FROM table_ktp ktp 
			JOIN table_status_berkas s 
			WHERE ktp.table_status_berkas_id = s.id 
			AND ktp.nomor_registrasi LIKE '$nomor_registrasi'");
			return $query->result();
		}


		
	}

?>