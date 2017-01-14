<?php
  defined('BASEPATH')OR exit('No direct script access allowed');

  class About extends MY_Controller
  {
      public function __construct(){
        parent::__construct();
        	$this->load->model('Mabout');
        	$this->load->library('image_lib');
        	$this->load->helper('url');
      }

    function index(){
      	$data = array(
			'data_pengembang' => $this->Mabout->tampil_data() 
			);
        $data['content_view'] = 'about/about_v';
        $this->load->view('template/mytemplate_v',$data);
      }  
}
