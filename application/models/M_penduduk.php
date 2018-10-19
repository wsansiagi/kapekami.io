<?php
class M_penduduk extends CI_Model{

	function list_penduduk(){
		$hasil=$this->db->query("SELECT * FROM jmlpenduduk");
		return $hasil->result();
	}

	function simpan_penduduk($id_penduduk,$id_kec,$dkbl,$dkbp,$dpl,$dpp,$bulan,$tahun){
		$hasil=$this->db->query("INSERT INTO jmlpenduduk (id_penduduk,id_kec,dkbl,dkbp,dpl,dpp,bulan,tahun)VALUES('$id_penduduk','$id_kec','$dkbl','$dkbp','$dpl','$dpp','$bulan','$tahun')");
		return $hasil;
	}


     
}