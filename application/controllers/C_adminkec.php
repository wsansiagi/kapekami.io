<?php
class C_adminkec extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_laporan');
		$this->load->model('Auth_model');
	}
 
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('adminkec/index', $data);
	}

		function tampil_laporan(){
		$data['data']=$this->M_laporan->tampil_laporan()->result();
		$this->load->view('adminkec/v_laporan', $data);
	}

	function edit_laporan($id){
		$where=array('id_ktp'=>$id);
		$data['data']=$this->M_laporan->edit_laporan($where,'ektp')->result();
		$this->load->view('adminkec/v_edit_laporan',$data);
	}

	function hapus_laporan($id){
		$where=array('id_ktp'=>$id);
		$this->M_laporan->hapus_laporan($where,'ektp');
		redirect('index.php/admin/C_admin/tampil_laporan');
	}

	function simpan_laporan(){
		$id_ktp=$this->input->post('id_ktp');
		$id_kabkot=$this->input->post('id_kabkot');
		$id_kec=$this->input->post('id_kec');
		$dkbl=$this->input->post('dkbl');
		$dkbp=$this->input->post('dkbp');
		$dpl=$this->input->post('dpl');
		$dpp=$this->input->post('dpp');
		$bulan=$this->input->post('bulan');
		$tahun=$this->input->post('tahun');
		$status=$this->input->post('status');

		$data=array(
			'id_ktp'=> $id_ktp,
			'id_kabkot' => $id_kabkot,
			'id_kec' => $id_kec,
			'dkbl'=> $dkbl,
			'dkbp'=> $dkbp,
			'dpl'=> $dpl,
			'dpp'=> $dpp,
			'bulan'=>$bulan,
			'tahun'=>$tahun,
			'status'=> $status

		);

		 $this->M_laporan->input_laporan($data,'ektp');
		 redirect('index.php/admin/C_admin/tampil_laporan');
		//print_r($id_kabkot);
	}

	function update_laporan(){
		$id_ktp=$this->input->post('id_ktp');
		$id_kabkot=$this->input->post('id_kabkot');
		$id_kec=$this->input->post('id_kec');
		$dkbl=$this->input->post('dkbl');
		$dkbp=$this->input->post('dkbp');
		$dpl=$this->input->post('dpl');
		$dpp=$this->input->post('dpp');
		$bulan=$this->input->post('bulan');
		$tahun=$this->input->post('tahun');
		$status=$this->input->post('status');

		$data=array(
			'id_kabkot' => $id_kabkot,
			'id_kec' => $id_kec,
			'dkbl'=> $dkbl,
			'dkbp'=> $dkbp,
			'dpl'=> $dpl,
			'dpp'=> $dpp,
			'bulan'=>$bulan,
			'tahun'=>$tahun,
			'status'=> $status

		);
		$where=array(
			'id_ktp' => $id_ktp

		);

		 $this->M_laporan->update_laporan($where,$data,'ektp');
		 redirect('index.php/admin/C_admin/tampil_laporan');
		//print_r($id_kabkot);
	}
}
?>