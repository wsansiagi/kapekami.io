<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {

		public function cek_user($data) {
			$query = $this->db->get_where('user', $data);
			return $query;
		}

		function input_user($data,$table){
		$this->db->insert($table,$data);
		}

		function tampil_user(){
			return $this->db->get('user');
		}

		function edit_user($where,$table){
			return $this->db->get_where($table,$where);
		}

		function hapus_user($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function update_user($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	}

?>