<?php
class C_admin extends CI_Controller {
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

	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/index', $data);
	}

	//USER	

	function tampil_user(){
		$data['data']=$this->Model_user->tampil_user()->result();
		$this->load->view('admin/v_user', $data);
	}

	function tampil_userkab(){
		$result  = array (
			'data' => $this->Model_user->tampil_userkab()->result(),
			'kabkot' => $this->M_kabkot->tampil_kabkot()->result()
		);
		$this->load->view('admin/v_userkabkot', $result);
	}

	function tampil_userkec(){
		$result  = array (
			'data' => $this->Model_user->tampil_userkec()->result(),
			'kabkot' => $this->M_kabkot->tampil_kabkot()->result(),
			'kecamatan' => $this->M_kecamatan->tampil_kecamatan()->result()
		);
		$this->load->view('admin/v_userkec', $result);
	}

	function edit_user($id){
		$where=array('id_user'=>$id);
		$data['data']=$this->Model_user->edit_user($where,'user')->result();
		$this->load->view('admin/v_edit_user',$data);
	}

	function hapus_user($id){
		$where=array('id_user'=>$id);
		$this->Model_user->hapus_kabkot($where,'user');
		redirect('index.php/admin/C_admin/tampil_usert');
	}

	function simpan_user(){
	//	$id_user=$this->input->post('id_user');
		$id_kabkot=$this->input->post('id_kabkot');
		$id_kec=$this->input->post('id_kec');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');

		$data=array(
	//		'id_user'=> $id_user,
			'id_kabkot' => $id_kabkot,
			'id_kec' => $id_kec,
			'username'=> $username,
			'password'=>$password,
			'level'=>$level

		);

		 $this->Model_user->input_user($data,'user');
		 redirect('index.php/admin/C_admin/tampil_user');
		//print_r($id_kabkot);
	}

	function update_user(){
		$id_user=$this->input->post('id_user');
		$id_kabkot=$this->input->post('id_kabkot');
		$id_kec=$this->input->post('id_kec');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');

		$data=array(
			'id_kabkot' => $id_kabkot,
			'id_kec' => $id_kec,
			'username'=> $username,
			'password'=>$password,
			'level'=>$level

		);
		$where=array(
			'id_user' => $id_user

		);

		 $this->Model_user->update_user($where,$data,'user');
		 redirect('index.php/admin/C_admin/tampil_user');
		//print_r($id_kabkot);
	}
	
	//KABUPATEN KOTA	

	function tampil_kabkot(){
		$data['data']=$this->M_kabkot->tampil_kabkot()->result();
		$this->load->view('admin/v_kabkot', $data);
	}

	function edit_kabkot($id){
		$where=array('id_kabkot'=>$id);
		$data['data']=$this->M_kabkot->edit_kabkot($where,'kabkot')->result();
		$this->load->view('admin/v_edit_kabkot',$data);
	}

	function hapus_kabkot($id){
		$where=array('id_kabkot'=>$id);
		$this->M_kabkot->hapus_kabkot($where,'kabkot');
		redirect('index.php/admin/C_admin/tampil_kabkot');
	}

	function simpan_kabkot(){
		$id_kabkot=$this->input->post('id_kabkot');
		$nama_kabkot=$this->input->post('nama_kabkot');

		$data=array(
			'id_kabkot' => $id_kabkot,
			'nama_kabkot' => $nama_kabkot

		);

		 $this->M_kabkot->input_kabkot($data,'kabkot');
		 redirect('index.php/admin/C_admin/tampil_kabkot');
		//print_r($id_kabkot);
	}

	function update_kabkot(){
		$id_kabkot=$this->input->post('id_kabkot');
		$nama_kabkot=$this->input->post('nama_kabkot');

		$data=array(
			'nama_kabkot' => $nama_kabkot

		);
		$where=array(
			'id_kabkot' => $id_kabkot

		);

		 $this->M_kabkot->update_kabkot($where,$data,'kabkot');
		 redirect('index.php/admin/C_admin/tampil_kabkot');
		//print_r($id_kabkot);
	}

	//KECAMATAN PART...
	//------------------------------
	function tampil_kecamatan(){
		$result  = array (
				'data' => $this->M_kecamatan->tampil_kecamatan()->result(),
				'kabkot' => $this->M_kabkot->tampil_kabkot()->result()
		);
		$this->load->view('admin/v_kecamatan',$result);
	}

	function edit_kecamatan($id){
		$where=array('id_kec'=>$id);
		$data['data']=$this->M_kecamatan->edit_kecamatan($where,'kecamatan')->result();
		$this->load->view('admin/v_edit_kecamatan',$data);
	}

	function hapus_kecamatan($id){
		$where=array('id_kec'=>$id);
		$this->M_kabkot->hapus_kecamatan($where,'kecamatan');
		redirect('index.php/admin/C_admin/tampil_kecamatan');
	}

	function simpan_kecamatan(){
		$id_kec=$this->input->post('id_kec');
		$id_kabkot=$this->input->post('id_kabkot');
		$nama_kecamatan=$this->input->post('nama_kecamatan');

		$data=array(
			'id_kec' => $id_kec,
			'id_kabkot' => $id_kabkot,
			'nama_kecamatan' => $nama_kecamatan
		);

		  $this->M_kecamatan->input_kecamatan($data,'kecamatan');
		 redirect('index.php/admin/C_admin/tampil_kecamatan');
		//print_r($id_kabkot);
	}

	function update_kecamatan(){
		$id_kec=$this->input->post('id_kec');
		$id_kabkot=$this->input->post('id_kabkot');
		$nama_kecamatan=$this->input->post('nama_kecamatan');

		$data=array(
			'id_kabkot' => $id_kabkot,
			'nama_kecamatan' => $nama_kecamatan

		);
		$where=array(
			'id_kec' => $id_kec

		);

		 $this->M_kecamatan->update_kecamatan($where,$data,'kecamatan');
		 redirect('index.php/admin/C_admin/tampil_kecamatan');
		//print_r($id_kabkot);
	}


	//KELURAHAN.....
	//----------------------------------------------
	function tampil_kelurahan(){
		$result  = array (
				'data' => $this->M_kelurahan->tampil_kelurahan()->result(),
				'kecamatan' => $this->M_kecamatan->tampil_kecamatan()->result()
		);
		$this->load->view('admin/v_kelurahan',$result);
	}

	function edit_kelurahan($id){
		$where=array('id_kel'=>$id);
		$data['data']=$this->M_kelurahan->edit_kelurahan($where,'kelurahan')->result();
		$this->load->view('admin/v_edit_kelurahan',$data);
	}

	function hapus_kelurahan($id){
		$where=array('id_kel'=>$id);
		$this->M_kelurahan->hapus_kelurahan($where,'kelurahan');
		redirect('index.php/admin/C_admin/tampil_kelurahan');
	}

	function simpan_kelurahan(){
		$id_kel=$this->input->post('id_kel');
		$id_kec=$this->input->post('id_kec');
		$nama_kelurahan=$this->input->post('nama_kelurahan');

		$data=array(
			'id_kel' => $id_kel,
			'id_kec' => $id_kec,
			'nama_kelurahan' => $nama_kelurahan
		);

		  $this->M_kelurahan->input_kelurahan($data,'kelurahan');
		 redirect('index.php/admin/C_admin/tampil_kelurahan');
		//print_r($id_kabkot);
	}

	function update_kelurahan(){
		$id_kel=$this->input->post('id_kel');
		$id_kec=$this->input->post('id_kec');
		$nama_kelurahan=$this->input->post('nama_kelurahan');

		$data=array(
			'id_kec' => $id_kec,
			'nama_kelurahan' => $nama_kelurahan

		);
		$where=array(
			'id_kel' => $id_kel

		);

		 $this->M_kelurahan->update_kelurahan($where,$data,'kelurahan');
		 redirect('index.php/admin/C_admin/tampil_kelurahan');
		//print_r($id_kabkot);
	}


	function tampil_laporan(){
		$data['data']=$this->M_laporan->tampil_laporan()->result();
		$this->load->view('admin/v_laporan', $data);
	}

	function edit_laporan($id){
		$where=array('id_ktp'=>$id);
		$data['data']=$this->M_laporan->edit_laporan($where,'ektp')->result();
		$this->load->view('admin/v_edit_laporan',$data);
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

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('index.php/auth');
	}

	

}
?>