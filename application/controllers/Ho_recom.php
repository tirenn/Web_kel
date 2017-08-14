<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ho_recom extends CI_Controller{

   public function __construct(){
        parent::__construct();
        $this->load->library('session');
		$this->load->library('uuid');
        // $this->load->helper('url');
    }

    public function index(){
        $this->load->view('ho_recom');
    }

    function insert(){
        $id = $this->uuid->v4();
        $data = array(
            'nama_lengkap' => $_POST['nama_lengkap'],
            'jenis_permohonan' =>$_POST['jenis_permohonan']
        );
        echo $data['jenis_permohonan'];
    }

}
?>