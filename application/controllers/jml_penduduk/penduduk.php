<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penduduk extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_penduduk');
    }
    function index(){
        $this->load->view('penduduk/index');
    }
 
    function data_penduduk(){
        $data=$this->M_penduduk->selectall();
        echo json_encode($data);
    }
}
?>