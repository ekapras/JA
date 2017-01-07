<?php 

class Mkatalog extends CI_Model{
	/*
	function tampil_batik(){
	$k=$this->db->get('katalog_batik');
	$hasil=$k->result_array();
	return $hasil;
	}

	function tampil_furniture(){
	$k=$this->db->get('katalog_furniture');
	$hasil=$k->result_array();
	return $hasil;
	} */

	function getdata($where,$table){
		return $this->db->get_where($table,$where);
	}

	function show_data(){
	$k=$this->db->get('katalog');
	$hasil=$k->result_array();
	return $hasil;
	}


}
