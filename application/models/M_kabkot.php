<?php
class M_kabkot extends CI_Model{

	function kabkot_list(){
		$hasil=$this->db->query("SELECT * FROM kabkot");
		return $hasil->result();
	}

	function input_kabkot($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_kabkot(){
		return $this->db->get('kabkot');
	}

	function edit_kabkot($where,$table){
		return $this->db->get_where($table,$where);
	}

	function hapus_kabkot($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_kabkot($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}




	
}