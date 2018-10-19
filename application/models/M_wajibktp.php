<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM tbl_barang");
		return $hasil->result();
	}

	function simpan_barang($kobar,$nabar,$harga){
		$hasil=$this->db->query("INSERT INTO tbl_barang (barang_kode,barang_nama,barang_harga)VALUES('$kobar','$nabar','$harga')");
		return $hasil;
	}
?>