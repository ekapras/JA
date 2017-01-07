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

	function getdata_street(){
		return $this->db->get('street');
	}

	function getdata_clay(){
		return $this->db->get('clay');
	}

	function getdata_wood(){
		return $this->db->get('wood');
	}

	function getdata_metal(){
		return $this->db->get('metal');
	}

	function getdata_fabric(){
		return $this->db->get('fabric');
	}

	function show_data(){
	$k=$this->db->get('katalog');
	$hasil=$k->result_array();
	return $hasil;
	}


}
