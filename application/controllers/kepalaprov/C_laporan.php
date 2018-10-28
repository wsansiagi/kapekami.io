<?php
class C_laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->model('M_penduduk');
		$this->load->model('M_kecamatan');
		$this->load->model('M_kabkot');
		$this->load->model('M_kelurahan');
		$this->load->model('M_laporan');
		$this->load->model('Auth_model');
	}
	public function tampil_semua(){
		$data['data']=$this->M_laporan->list_semua_data();
		$this->load->view('kepalaprov/listprov', $data);
		//print_r($data['data']);
	}
	
	
}
?>