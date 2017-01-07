<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class template extends MY_Controller
{
  public function __construct(){
    parent::__construct();
  }

  function my_template($data = null){
    $this->load->view('template/mytemplate_v', $data);
  }

  function login_template($data = null){
    $this->load->view('template/logintemplate_v', $data);
  }
}
?>