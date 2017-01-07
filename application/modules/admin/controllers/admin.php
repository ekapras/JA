<?php
class admin extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
    $this->load->library('upload');
	}

	function member(){

		$this->load->view('admin/member_v');
	}

	function katalog(){

		$data['content_view']=('admin/katalog_v');
		$this->template->my_template($data);
	}

	function tambah_katalog(){

		$data['content_view']=('admin/tambah_katalog_v');
		$this->template->my_template($data);
	}

    function submit_katalog(){
        //passing post data dari view
        $this->load->helper(array('form', 'url'));
        $id       			= $this->input->post('id');
        $jenis_katalog    	= $this->input->post('jenis_katalog');
        $nama_katalog 		= $this->input->post('nama_katalog');
        $deskripsi  		= $this->input->post('deskripsi');
        $image 	= $this->upload->do_upload('image');
        //memasukan ke array
        $data = array(
          'jenis_katalog'   => $jenis_katalog,
          'id'       			  => $id,
          'image' 		        => $image,
          'nama_katalog' 		=> $nama_katalog,
          'deskripsi'  			=> $deskripsi,
          );
        $id = $this->m_admin->add_katalog($data);
        redirect('register/sukses');
    }
}