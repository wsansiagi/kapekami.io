<?php
class M_laporan extends CI_Model{


	function input_laporan($data,$table){
		$this->db->insert($table,$data);
	}

	function laporan_kabkot($id){
		$this->db->select('*');
		$this->db-> from('ektp');
		$this->db-> where('id_kabkot', $id);
		return $this->db->get();
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