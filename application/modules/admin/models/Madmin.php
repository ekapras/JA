<?php
	
	class Madmin extends CI_Model {
		
		function __construct(){
			parent::__construct();
		}
		
		function add_katalog($data){
			$this->db->insert('jenis_katalog',$data);
		}

		function cek(){

			$query=$this->db->get('jenis_katalog');
			return $query;
		}

		function tambah_subkatalog($where,$table){
			return $this->db->get_where($table,$where);
		}
		function submit_subkatalog($data,$where){
			$this->db->insert('nama_katalog',$data,$where);
		}

		function ceksub(){

			$query=$this->db->get('nama_katalog');
			return $query;
		}
	}
?>