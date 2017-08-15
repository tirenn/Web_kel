<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_status_pendidikan extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getStatusPendidikan(){
			$query = $this->db->query("SELECT * FROM `table_status_pendidikan`");
			return $query->result();
		}

		


		
	}

?>