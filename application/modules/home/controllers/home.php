<?php
class home extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Mhome');
	}

	function index(){

		$data['content_view']='home/home_v';
		$this->template->my_template($data);
	}


}