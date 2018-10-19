<?php
class M_kelurahan extends CI_Model{

	function input_kelurahan($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_kelurahan(){
		return $this->db->get('kelurahan');
	}

	function edit_kelurahan($where,$table){
		return $this->db->get_where($table,$where);
	}

	function hapus_kelurahan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_kelurahan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	
}