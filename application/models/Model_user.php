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
			$this->db->select('*');
			$this->db-> from('user');
			$this->db-> where('level =', 'adminkepalaprovinsi');
			return $this->db->get();
		}

		function tampil_userkab(){
			$this->db-> select('*');
			$this->db-> from('user');
			$this->db-> where('level', 'adminkepalakabupaten');
			return $this->db->get();
		}

		function tampil_userkec(){
			$this->db-> select('*');
            $this->db-> from('user');
			$this->db-> where('level', 'adminkepalakecamatan');
			return $this->db->get();
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