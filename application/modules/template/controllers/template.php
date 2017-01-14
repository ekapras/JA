<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class template extends MY_Controller
{
  public function __construct(){
    parent::__construct();
        	$this->load->model('Mtemplate');
  }

  function my_template($data = null){
    $this->load->view('template/mytemplate_v', $data);

  }

  function login_template($data = null){
    $this->load->view('template/logintemplate_v', $data);
  }


  function admin(){
        $data = array(
      'data' => $this->Mtemplate->getdata() 
      );
        $this->load->view("template/admin_login_v",$data);
      } 
  function umum(){
      	$data = array(
			'data' => $this->Mtemplate->getdata() 
			);
        $this->load->view("template/notlogin_v",$data);
      } 
}
?>