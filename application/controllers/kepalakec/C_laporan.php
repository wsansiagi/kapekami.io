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
		$this->load->view('kepalakec/detailprovinsi', $data);
	}
	//funtion laporan kecamatan
	public function tampil_jumlahpendudukkabkot() {
		$data['data']=$this->M_laporan->laporan_jumlahpenduduk_kabkot();
		$this->load->view('kepalakec/detailjumlahpenduduk', $data);
		//print_r($data['data']);
	}
	//function laporan kelurahan
	public function tampil_laporan_kelurahan() {
		$data['data']=$this->M_laporan->list_data_kelurahan();
		$this->load->view('kepalakec/detailkelurahan', $data);
		//print_r($data['data']);
	}
	public function tampil_jumlahakta(){
		$data['data']=$this->M_laporan->list_data_akta();
		$this->load->view('kepalakec/detailakta', $data);
	}
	public function jumlahpenduduk_kelurahan($id) {
		$data['data']=$this->M_laporan->list_penduduk_kelurahan($id);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_jumlahpenduduk', $data);
		//print_r($data['data']);
	}
	public function tampil_laporan_kelurahan_ktp(){
		$data['data']=$this->M_laporan->list_data_kelurahan();
		$this->load->view('kepalakec/detailkelurahan_ktp', $data);
	}
	public function ktp_penduduk_kelurahan($id){
		$data = array(
			'wajibktp'=> $this->M_laporan->ktp_penduduk_kelurahan($id),
			'wajibktpbelumrekam'=> $this->M_laporan->ktp_penduduk_kelurahan2($id),
			'perekamanpencetakan'=> $this->M_laporan->ktp_penduduk_kelurahan3($id),
			'ktpstatusrekam'=> $this->M_laporan->ktp_penduduk_kelurahan4($id),
			'pencetakanktpld'=> $this->M_laporan->ktp_penduduk_kelurahan5($id),
			'suratketeranganpktp'=> $this->M_laporan->ktp_penduduk_kelurahan5($id)
		);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_ktp', $data);
	
	}
	public function detail_kabkot($id) {
		$data['data']=$this->M_laporan->laporan_kabkot($id)->result();
		$this->load->view('kepalakec/laporankabkot', $data);
	}
	public function tampil_kecamatan($id) {
		$data['data']=$this->M_laporan->tampil_provinsi($id)->result();
		$this->load->view('admin/v_userkec', $data);
	}
	public function tampil_kelurahan($id) {
		$data['data']=$this->M_laporan->tampil_provinsi($id)->result();
		$this->load->view('admin/v_userkec', $data);
	}
	public function akta_kelurahan($id){
		$data = array(
			'aktakawin' => $this->M_laporan->list_akta_kelurahan($id),
			'pelaporankematian' => $this->M_laporan->list_akta_kelurahan2($id),
			'aktapenduduk018tahun' => $this->M_laporan->list_akta_kelurahan3($id),
			'aktalahir' => $this->M_laporan->list_akta_kelurahan4($id),
			'kepemilikanakta018tahun' => $this->M_laporan->list_akta_kelurahan5($id),
			'aktapenduduk05tahun' => $this->M_laporan->list_akta_kelurahan6($id),
			'kepemilikanakta05tahun' => $this->M_laporan->list_akta_kelurahan7($id),
			'terbitaktaLahir' => $this->M_laporan->list_akta_kelurahan6($id),
			'aktacerai' => $this->M_laporan->list_akta_kelurahan7($id)
		);
		$this->load->view('laporan/laporan_kelurahan/kelurahan_akta', $data);
		//print_r($data);
	}
	public function tampil_pindahdatang(){
		$data['data']=$this->M_laporan->list_data_pindahdatang();
		$this->load->view('kepalakec/detailpindah', $data);
	}
	public function pindahdatang_kelurahan($id){
		$data['data']=$this->M_laporan->list_pidahdatang_kelurahan($id);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_pindahdatang', $data);
	}
	//WANDOYA
	public function detail_jumlahpenduduk($id){
		$data['data']=$this->M_laporan->list_penduduk_kelurahan($id);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_jumlahpenduduk', $data);
	}
	public function detail_ktp($id){
		$data = array(
			'wajibktp'=> $this->M_laporan->ktp_penduduk_kelurahan($id),
			'wajibktpbelumrekam'=> $this->M_laporan->belumrekam_penduduk_kelurahan($id),
			'perekamanpencetakan'=> $this->M_laporan->rekamcetak_penduduk_kelurahan($id),
			'ktpstatusrekam'=> $this->M_laporan->statusrekam_penduduk_kelurahan($id),
			'pencetakanktpld'=> $this->M_laporan->luardomisili_penduduk_kelurahan($id),
			'suratketeranganpktp'=> $this->M_laporan->sk_ktp_kelurahan($id)
		);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_ktp', $data);
	}
	public function detail_akta($id){
		$data = array(
			'aktakawin' => $this->M_laporan->list_akta_kelurahan($id),
			'pelaporankematian' => $this->M_laporan->list_akta_kelurahan2($id),
			'aktapenduduk018tahun' => $this->M_laporan->list_akta_kelurahan3($id),
			'aktalahir' => $this->M_laporan->list_akta_kelurahan4($id),
			'kepemilikanakta018tahun' => $this->M_laporan->list_akta_kelurahan5($id),
			'aktapenduduk05tahun' => $this->M_laporan->list_akta_kelurahan6($id),
			'kepemilikanakta05tahun' => $this->M_laporan->list_akta_kelurahan7($id),
			'terbitaktaLahir' => $this->M_laporan->list_akta_kelurahan6($id),
			'aktacerai' => $this->M_laporan->list_akta_kelurahan7($id)
		);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_akta', $data);
	}
	public function detail_pindah($id){
		$data['data']=$this->M_laporan->list_pidahdatang_kelurahan($id);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_pindahdatang', $data);
	}
	public function detail_KIA($id){
		$data['data']=$this->M_laporan->list_KIA_kelurahan($id);
		$this->load->view('kepalakec/laporan_kelurahan/kelurahan_KIA', $data);
	}
	function edit_laporan($id){
		$where=array('id_ktp'=>$id);
		$data['data']=$this->M_laporan->edit_laporan($where,'ektp')->result();
		$this->load->view('adminkec/v_edit_laporan',$data);
	}
	function update_laporan(){
		$id_kabkot=$this->input->post('id_kabkot');
		$id_kec=$this->input->post('id_kec');
		$dkbl=$this->input->post('dkbl');
		$dkbp=$this->input->post('dkbp');
		$dpl=$this->input->post('dpl');
		$dpp=$this->input->post('dpp');
		$rbl=$this->input->post('rbl');
		$rbp=$this->input->post('rbp');
		$rsbl=$this->input->post('rsbl');
		$rsbp=$this->input->post('rsbp');
		$cbl=$this->input->post('cbl');
		$cbp=$this->input->post('cbp');
		$csbl=$this->input->post('csbl');
		$csbp=$this->input->post('csbp');
		$bio=$this->input->post('bio');
		$sfe=$this->input->post('sfe');
		$efc=$this->input->post('efc');
		$dup=$this->input->post('dup');
		$adj=$this->input->post('adj');
		$prr=$this->input->post('prr');
		$cetakktp=$this->input->post('cetakktp');
		$bct=$this->input->post('bct');
		$bctt=$this->input->post('bctt');
		$usial=$this->input->post('usial');
		$usiap=$this->input->post('usiap');
		$lahirl=$this->input->post('lahirl');
		$lahirp=$this->input->post('lahirp');
		$kawin=$this->input->post('kawin');
		$akawin=$this->input->post('akawin');
		$skawin=$this->input->post('skawin');
		$sakawin=$this->input->post('sakawin');
		$cerai=$this->input->post('cerai');
		$acerai=$this->input->post('acerai');
		$scerai=$this->input->post('scerai');
		$sacerai=$this->input->post('sacerai');
		$pkb=$this->input->post('pkb');
		$pksb=$this->input->post('pksb');
		$akb=$this->input->post('akb');
		$aksb=$this->input->post('aksb');
		$akbt=$this->input->post('akbt');
		$aksbt=$this->input->post('aksbt');
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
			'rbl'=>$rbl,
			'rbp'=>$rbp,
			'rsbl'=>$rsbl,
			'rsbp'=>$rsbp,
			'cbl'=>$cbl,
			'cbp'=>$cbp,
			'csbl'=>$csbl,
			'csbp'=>$csbp,
			'bio'=>$bio,
			'sfe'=>$sfe,
			'efc'=>$efc,
			'dup'=>$dup,
			'adj'=>$adj,
			'prr'=>$prr,
			'cetakktp'=>$cetakktp,
			'bct'=>$bct,
			'bctt'=>$bctt,
			'usial'=>$usial,
			'usiap'=>$usiap,
			'lahirl'=>$lahirl,
			'lahirp'=>$lahirp,
			'kawin'=>$kawin,
			'akawin'=>$akawin,
			'skawin'=>$skawin,
			'sakawin'=>$sakawin,
			'cerai'=>$cerai,
			'acerai'=>$acerai,
			'scerai'=>$scerai,
			'sacerai'=>$sacerai,
			'pkb'=>$pkb,
			'pksb'=>$pksb,
			'akb'=>$akb,
			'aksb'=>$aksb,
			'akbt'=>$akbt,
			'aksbt'=>$aksbt,
			'bulan'=>$bulan,
			'tahun'=>$tahun,
			'status'=> $status
		);
		$where=array(
			'id_ktp' => $id_ktp
		);
		 $this->M_laporan->update_laporan($where,$data,'ektp');
		 redirect('kepalakec/C_laporan/detail_ktp/'.$this->session->userdata('id_kec'));
		//print_r($id_kabkot);
	}
	
}
?>