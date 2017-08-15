<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_kelompok_pekerjaan extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getKelompokPekerjaan(){
			$query = $this->db->query("SELECT * FROM `table_kelompok_pekerjaan`");
			return $query->result();
		}

		


		
	}

?>