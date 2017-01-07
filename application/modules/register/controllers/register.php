<?php
class Register extends MY_Controller
{
    function __construct(){
    		parent::__construct();
    		$this->load->helper('form');
    		$this->load->model('Mregister');
    		$this->load->library('form_validation');
    		$this->load->library('session');
      }

    function index(){
        $data['content_view'] = 'register/register_v';
        $this->template->login_template($data);
      }

    function sukses(){
        $data['content_view'] = 'register/sukses_v';
        $this->template->login_template($data);
      }

    function submit(){
        //passing post data dari view
        $this->load->helper(array('form', 'url'));
        $id       = $this->input->post('id');
        $level    = $this->input->post('level');
        $jkelamin = $this->input->post('jkelamin');
        $tgl_lhr  = $this->input->post('tgl_lhr');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama     = $this->input->post('nama');
        $email    = $this->input->post('email');
        
        //memasukan ke array
        $data = array(
          'level'    => $level,
          'id'       => $id,
          'username' => $username,
          'jkelamin' => $jkelamin,
          'password' => $password,
          'tgl_lhr'  => $tgl_lhr,
          'nama'     => $nama,
          'email'    => $email
          //'active'   => 0
        );
        //tambahkan akun ke database
        $this->load->model('Mregister');
        $id = $this->Mregister->add_account($data);
        redirect('register/sukses');
        
        //enkripsi id
        /*$encrypted_id = md5($id);
        
        $this->load->library('email');
        $config = array();
        $config['charset']      = 'utf-8';
        $config['useragent']    = 'Codeigniter';
        $config['protocol']     = "smtp";
        $config['mailtype']     = "html";
        $config['smtp_host']    = "ssl://smtp.gmail.com";//pengaturan smtp
        $config['smtp_port']    = "465";
        $config['smtp_timeout'] = "400";
        $config['smtp_user']    = "ekapras19@gmail.com"; // isi dengan email kamu
        $config['smtp_pass']    = "eka1901:"; // isi dengan password kamu
        $config['crlf']         = "\r\n"; 
        $config['newline']      = "\r\n"; 
        $config['wordwrap']     = TRUE;
        //memanggil library email dan set konfigurasi untuk pengiriman email
          
        $this->email->initialize($config);
        //konfigurasi pengiriman
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject("Verifikasi Akun");
        $this->email->message(
          "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
          site_url("register/verification/$encrypted_id")
        );
        
        if($this->email->send())
        {
          echo "Berhasil melakukan registrasi, silahkan cek email kamu";
        }
        else
        {
          echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email";
        }
        
        echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
      }


    function verification($key){

      $this->load->helper('url');
      $this->load->model('Mregister');
      $this->Mregister->changeActiveState($key);
      echo "Selamat kamu telah memverifikasi akun kamu";
      echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
    }*/
  }
}
