<?php 

class Mtemplate extends CI_Model{

	function getdata(){
	$k=$this->db->get('jenis_katalog');
	$hasil=$k->result_array();
	return $hasil;
}

}
