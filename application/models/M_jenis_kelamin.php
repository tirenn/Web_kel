<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_jenis_kelamin extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getJenisKelamin(){
			$query = $this->db->query("SELECT * FROM `table_jenis_kelamin`");
			return $query->result();
		}

		


		
	}

?>