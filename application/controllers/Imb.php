<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Imb extends CI_Controller{

   public function __construct(){
        parent::__construct();
        // $this->load->helper('url');
    }

    public function index(){
        $this->load->view('imb');
    }

}
?>