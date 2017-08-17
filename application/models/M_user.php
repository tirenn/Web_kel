<?php


    if(!isset($_SESSION))
    {
        session_start();
    }

	Class M_user extends CI_Model {


		public function __construct() {
        	parent::__construct();
        	$this->load->database();
    	}

		function cekAdmin($username, $password){
			$query = $this->db->query("SELECT * FROM `table_user` WHERE `username` = '$username' and `password` = '$password' ");
			if ($query->num_rows()>0) {
				foreach ($query->result() as $row){
					$_SESSION['ID_USER'] = $row->id;
					$_SESSION['USERNAME'] = $row->username;
				return true;   
				}
		
			}else{
				return false;
			}
		}

        function updateLogin($username){
            $query = $this->db->query("UPDATE `table_user` SET `is_deleted`= 1 WHERE username = $username");
			if ($query->num_rows()>0) {
                return true;
			}else{
				return false;
			}
        }

		


		
	}

?>
