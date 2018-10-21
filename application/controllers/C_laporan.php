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

	public function tampil_kabkot() {
		$data['data']=$this->M_kabkot->tampil_kabkot()->result();
		$this->load->view('laporan/detailprovinsi', $data);
	}

	//funtion laporan kecamatan
	public function tampil_jumlahpendudukkabkot() {
		$data['data']=$this->M_laporan->laporan_jumlahpenduduk_kabkot();
		$this->load->view('laporan/detailjumlahpenduduk', $data);
		//print_r($data['data']);
	}

	//function laporan kelurahan
	public function tampil_laporan_kelurahan() {
		$data['data']=$this->M_laporan->list_data_kelurahan();
		$this->load->view('laporan/detailkelurahan', $data);
		//print_r($data['data']);
	}
	public function jumlahpenduduk_kelurahan($id) {
		$data['data']=$this->M_laporan->list_penduduk_kelurahan($id);
		$this->load->view('laporan/laporan_kelurahan/kelurahan_jumlahpenduduk', $data);
		//print_r($data['data']);
	}

	public function tampil_laporan_kelurahan_ktp(){
		$data['data']=$this->M_laporan->list_data_kelurahan();
		$this->load->view('laporan/detailkelurahan_ktp', $data);
	}

	public function ktp_penduduk_kelurahan($id){
		$data['data']=$this->M_laporan->ktp_penduduk_kelurahan($id);
		$this->load->view('laporan/laporan_kelurahan/kelurahan_ktp', $data);
		//print_r($data['data']);
	}







	public function detail_kabkot($id) {
		$data['data']=$this->M_laporan->laporan_kabkot($id)->result();
		$this->load->view('laporan/laporankabkot', $data);
	}

	public function tampil_kecamatan($id) {
		$data['data']=$this->M_laporan->tampil_provinsi($id)->result();
		$this->load->view('admin/v_userkec', $data);
	}

	public function tampil_kelurahan($id) {
		$data['data']=$this->M_laporan->tampil_provinsi($id)->result();
		$this->load->view('admin/v_userkec', $data);
	}
}

?>