<?php 

class Mabout extends CI_Model{
	
	function tampil_data(){
	$k=$this->db->get('pengembang');
	$hasil=$k->result_array();
	return $hasil;
	}
}
