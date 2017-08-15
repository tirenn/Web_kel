<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_akseptor_kb extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getAkseptorKb(){
			$query = $this->db->query("SELECT * FROM `table_akseptor_kb`");
			return $query->result();
		}

		


		
	}

?>