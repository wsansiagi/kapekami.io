<?php
class M_laporan extends CI_Model{


	function input_laporan($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_laporan(){
		return $this->db->get('ektp');
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