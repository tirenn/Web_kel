<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Status_regis extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('uuid');
		$this->load->model('M_ho','',TRUE);

    }

    public function index(){
        $this->load->view('kelurahan');
    }

    function search(){
        
    }

}
?>