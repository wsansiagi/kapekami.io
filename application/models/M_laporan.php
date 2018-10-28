<?php
class M_laporan extends CI_Model{
	function tampil_laporan(){
		return $this->db->get('ektp');
	}
	function input_laporan($data,$table){
		$this->db->insert($table,$data);
	}
	//model laporan
	function laporan_jumlahpenduduk_kabkot(){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kabkot','kabkot.id_kabkot=ektp.id_kabkot');
		$query = $this->db->get();
		return $query->result();
	}
	function list_data_kelurahan(){
		$this->db->select('*');
		$this->db->from('kecamatan');
		$query = $this->db->get();
		return $query->result();
	}
	function list_penduduk_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$query2 = $this->db->where('ektp.id_kec', $id)->get();
		return $query2->result();
	 }
	 function ktp_penduduk_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$status= 'WajibKTP';
		$array = array('ektp.id_kec' => $id, 'ektp.status' => $status);
		$query2 = $this->db->where($array)->get();
		return $query2->result();
	 }
	 function belumrekam_penduduk_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$status= 'BelumRekam';
		$array = array('ektp.id_kec' => $id, 'ektp.status' => $status);
		$query2 = $this->db->where($array)->get();
		return $query2->result();
	 }
	 function rekamcetak_penduduk_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$status= 'RekamCetak';
		$array = array('ektp.id_kec' => $id, 'ektp.status' => $status);
		$query2 = $this->db->where($array)->get();
		return $query2->result();
	 }
	 function statusrekam_penduduk_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$status= 'StatusRekam';
		$array = array('ektp.id_kec' => $id, 'ektp.status' => $status);
		$query2 = $this->db->where($array)->get();
		return $query2->result();
	 }
	 function luardomisili_penduduk_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$status= 'RekamCetak';
		$array = array('ektp.id_kec' => $id, 'ektp.status' => $status);
		$query2 = $this->db->where($array)->get();
		return $query2->result();
	 }
	 function sk_ktp_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$status= 'SKetKTP';
		$array = array('ektp.id_kec' => $id, 'ektp.status' => $status);
		$query2 = $this->db->where($array)->get();
		return $query2->result();
	 }
	 function ktp_penduduk_kelurahan6($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$status= 'SuratKeteranganPKTP';
		$array = array('ektp.id_kec' => $id, 'ektp.status' => $status);
		$query2 = $this->db->where($array)->get();
		return $query2->result();
	 }
	 
	function edit_laporan($where,$table){
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		return $this->db->get_where($table,$where);
	}
	function hapus_laporan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update_laporan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function list_data_akta(){
		$this->db->select('*');
		$this->db->from('kecamatan');
		$query = $this->db->get();
		return $query->result();
	}
	//BUAT SELECT DATA PER STATUS YAAA :)
	function list_akta_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		//$where = "ektp.id_kec ='.$id.' AND ektp.status = 'AktaKawin'";
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'AktaKawin');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kelurahan2($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		//$where = "ektp.id_kec ='.$id.' AND ektp.status = 'AktaKawin'";
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'PelaporanKematian');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_akta_kelurahan3($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		//$where = "ektp.id_kec ='.$id.' AND ektp.status = 'AktaKawin'";
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'AktaPenduduk018Tahun');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_akta_kelurahan4($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		//$where = "ektp.id_kec ='.$id.' AND ektp.status = 'AktaKawin'";
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'AktaLahir');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_akta_kelurahan5($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'KepemilikanAkta018Tahun');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_akta_kelurahan6($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'AktaPenduduk05Tahun');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_akta_kelurahan7($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'KepemilikanAkta05Tahun');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_akta_kelurahan8($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'TerbitAktaLahir');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_akta_kelurahan9($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'AktaCerai');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_data_pindahdatang(){
		$this->db->select('*');
		$this->db->from('kecamatan');
		$query = $this->db->get();
		return $query->result();
	}
	function list_pidahdatang_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'PindahDatang');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}
	function list_KIA_kelurahan($id){
		$this->db->select('*');
		$this->db->from('ektp');
		$this->db->join('kelurahan','kelurahan.id_kel=ektp.id_kel');
		$where = array('ektp.id_kec' => $id, 'ektp.status' => 'PindahDatang');
		$query3 = $this->db->where($where)->get();
		return $query3->result();
	}


	//select detail oleh admin kab

	 function list_penduduk_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'JumlahPenduduk');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	 }


	 function ktp_penduduk_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'WajibKTP');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	 }
	 function belumrekam_penduduk_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'BelumRekam');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	 }

	 function rekamcetak_penduduk_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'RekamCetak');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	 }

	 function statusrekam_penduduk_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'StatusRekam');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	 }

	 function luardomisili_penduduk_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'RekamCetak');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	 }

	 function sk_ktp_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'SKetKTP');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	 }

	 //model akta admin kab
	 function list_akta_kecamatan($id){
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'AktaKawin');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kecamatan2($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'PelaporanKematian');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	//dari sini belum di setting selectnya
	function list_akta_kecamatan3($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'AktaPenduduk018Tahun');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kecamatan4($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'AktaLahir');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kecamatan5($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'KepemilikanAkta018Tahun');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kecamatan6($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'AktaPenduduk05Tahun');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kecamatan7($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'KepemilikanAkta05Tahun');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kecamatan8($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'TerbitAktaLahir');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	function list_akta_kecamatan9($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'AktaCerai');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	//Select detail pindah datang admin kab
	function list_pidahdatang_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'PindahDatang');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}

	//Select Kia admin kab
	function list_KIA_kecamatan($id){
		$this->db->select_sum('dkbl');
		$this->db->select_sum('dkbp');
		$this->db->select_sum('dpl');
		$this->db->select_sum('dpp');
		$this->db->select_sum('rbl');
		$this->db->select_sum('rbp');
		$this->db->select('ektp.id_kel');
		$this->db->select('ektp.id_kec');
		$this->db->select('ektp.id_kabkot');
		$this->db->select('kelurahan.nama_kelurahan');
		$this->db->select('kecamatan.nama_kecamatan');
		$this->db->from('ektp');
		$this->db->join('kecamatan','kecamatan.id_kec=ektp.id_kec');
		$this->db->join('kelurahan', 'kelurahan.id_kel = ektp.id_kel');
		$where = array('ektp.id_kabkot' => $id, 'ektp.status' => 'KIA');
		$this->db->group_by('ektp.id_kec');
		$query2 = $this->db->where($where)->get();
		return $query2->result();
	}
	
}