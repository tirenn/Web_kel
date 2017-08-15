<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_hubungan_keluarga extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getHubunganKeluarga(){
			$query = $this->db->query("SELECT * FROM `table_hubungan_keluarga`");
			return $query->result();
		}

		


		
	}

?>