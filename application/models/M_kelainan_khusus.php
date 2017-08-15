<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_kelainan_khusus extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function getKelainanKhusus(){
			$query = $this->db->query("SELECT * FROM `table_kelainan_khusus`");
			return $query->result();
		}

		


		
	}

?>