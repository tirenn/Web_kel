<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_status_kawin extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getStatusKawin(){
			$query = $this->db->query("SELECT * FROM `table_status_kawin`");
			return $query->result();
		}

		


		
	}

?>