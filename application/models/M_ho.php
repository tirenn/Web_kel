<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_ho extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function insert($data){
			$result = $this->db->insert('table_ho',$data);
            if($result == true){
                return true;
            }
		}

		function getStatus($nomor_registrasi){
			$query = $this->db->query("SELECT s.status_berkas FROM table_ho h 
			JOIN table_status_berkas s 
			WHERE h.table_status_berkas_id = s.id 
			AND h.nomor_registrasi LIKE '$nomor_registrasi'");
			return $query->result();
		}


		
	}

?>