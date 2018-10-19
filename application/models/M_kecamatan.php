<?php
class M_kecamatan extends CI_Model{

	function kecamatan_list(){
		$hasil=$this->db->query("SELECT * FROM kecamatan");
		return $hasil->result();
	}

	function input_kecamatan($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_kecamatan(){
		return $this->db->get('kecamatan');
	}

	function edit_kecamatan($where,$table){
		return $this->db->get_where($table,$where);
	}

	function hapus_kecamatan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_kecamatan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	
}