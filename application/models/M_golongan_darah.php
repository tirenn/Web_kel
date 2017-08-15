<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_golongan_darah extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getGolonganDarah(){
			$query = $this->db->query("SELECT * FROM `table_golongan_darah`");
			return $query->result();
		}

		


		
	}

?>