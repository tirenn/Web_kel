<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

   public function __construct(){
        parent::__construct();
 		$this->load->model('M_user','',TRUE);
        // $this->load->helper('url');
    }

    public function index(){
        if (isset($_SESSION['ID_USER'])) {
            echo "admin";
        }
        else{
            $this->load->view('login');        
        }
    }

    function login(){
        $username = $_POST['username'];
		$password = md5($_POST['password']);
		$this->load->model('M_user');
		//$password = md5($password);
		$user = $this->M_user->cekAdmin($username, $password);
		if ($user == true) {
    		$login = $this->M_user->updateLogin($username);
			if($login == true){
                echo 'benar';
            }else{
    			redirect('Login','refresh');            
            }
            // redirect('joblist','refresh');
		}else {
			redirect('Login','refresh');
			// $this->load->view('login');
			
		}
    }

}
?>