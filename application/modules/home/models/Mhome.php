<?php 

class Mhome extends CI_Model{

		function getdata2(){
		$k=$this->db->get('jenis_katalog');
		$hasil=$k->result_array();
		return $hasil;
	}

}
