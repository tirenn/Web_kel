<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_kk_detail extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function insert($data){
			$result = $this->db->insert('table_kk_detail',$data);
            if($result == true){
                return true;
            }
		}

		


		
	}

?>