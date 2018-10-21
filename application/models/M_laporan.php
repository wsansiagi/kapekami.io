<?php
class M_laporan extends CI_Model{


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
	

	function edit_laporan($where,$table){
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




	
}