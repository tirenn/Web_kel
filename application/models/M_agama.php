<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_agama extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getAgama(){
			$query = $this->db->query("SELECT * FROM `table_agama`");
			return $query->result();
		}

		


		
	}

?>