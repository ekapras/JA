<?php
	
	class m_admin extends CI_Model {
		
		function __construct(){
			parent::__construct();
		}
		
		function add_katalog($data){

			$this->load->database();
			$this->db->insert('katalog',$data);
		}
	}
?>