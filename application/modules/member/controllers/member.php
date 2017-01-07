<?php
class member extends MY_Controller
{
	function __construct(){
		parent::__construct();
	}

	function home(){

		$data['content_view']='member/home_v';
		$this->template->my_template($data);
	}


}