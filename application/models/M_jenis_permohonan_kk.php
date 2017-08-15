<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_jenis_permohonan_kk extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getJenisPermohonan(){
			$query = $this->db->query("SELECT * FROM `table_jenis_permohonan_kk`");
			return $query->result();
		}

		


		
	}

?>