<?php
class home extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Mhome');
	}

	function index(){
		$data = array(
			'data_katalog' => $this->Mhome->getdata2() 
			);
        $data['content_view'] = 'home/home_v';
        $this->load->view("template/mytemplate_v",$data);
    }
}
