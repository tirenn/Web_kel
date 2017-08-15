<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_pendidikan_terakhir extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getPendidikanTerakhir(){
			$query = $this->db->query("SELECT * FROM `table_pendidikan_terakhir`");
			return $query->result();
		}

		


		
	}

?>