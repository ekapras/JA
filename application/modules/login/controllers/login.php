<?php

class Login extends MY_Controller
{
   function __construct(){
      parent::__construct();
      $this->load->helper('form');
      $this->load->model('Mlogin');
      $this->load->library('form_validation');
      $this->load->library('session');
   }

    function index(){
      if (isset($this->session->userdata['logged_in'])) {
        redirect('home');
      }

      else {
        $data = array('' => '', );
        $data['content_view'] = 'login/login_v';
        $this->template->login_template($data);
      }
    }

    function user_login_process() {
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() == FALSE) {
        $data['content_view'] = 'login/login_v';
        $this->template->login_template($data);
      }

      else {$data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password') );
        $result = $this->Mlogin->login($data);

        if ($result == TRUE) {
          $username = $this->input->post('username');
          $result   = $this->Mlogin->read_user_information($username);

          if ($result != false) {
            $session_data = array(
              'username' => $result[0]->username,
              'password' => $result[0]->password, 
              'id'       => $result[0]->id,
              'nama'     => $result[0]->nama,
              'level'    => $result[0]->level);
            $this->session->set_userdata('logged_in', $session_data);
            redirect('home');
          }
        }

        else {
          $data ['content_view'] = 'login/error_v';
          $this->template->login_template($data);
        }
      }
    }

    function logout(){
      $sess_array  = array(
        'username' => '');
      $this->session->unset_userdata('logged_in',$sess_array);
      redirect('home','refresh');
    }
  }