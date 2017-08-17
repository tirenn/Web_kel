<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Coba extends CI_Controller{

   public function __construct(){
        parent::__construct();
 		// $this->load->model('M_user','',TRUE);
        // $this->load->helper('url');
    }

    public function index(){
            $this->load->view('index');        
        
    }


}
?>