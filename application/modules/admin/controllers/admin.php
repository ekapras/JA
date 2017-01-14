<?php
class admin extends MY_Controller
{
	function __construct(){
		parent::__construct();
        $this->load->model('Madmin');
		$this->load->model('katalog/Mkatalog');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    function tambah_katalog(){

        $data['content_view']=('admin/tambah_katalog_v');
        $this->template->my_template($data);
    }

    function submit_jenis_katalog(){
        $config['upload_path'] = './assets/images/jenis';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width']  = '2000';
        $config['max_height']  = '1024';

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('image')){
          $image="";
        }

        else{
            $image=$this->upload->file_name;
        }
        $info=array(
            'id_jenis'=>$this->input->post('id_jenis'),
            'jenis_katalog'=>$this->input->post('jenis_katalog'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'image'=>$image
            );
        $this->Madmin->add_katalog($info);
        $data['content_view']=('admin/tambah_katalog_v_s');
        $this->template->my_template($data);
    }
    /*
    function submit_jenis_katalog(){
        $config['upload_path'] = './assets/images/jenis';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width']  = '2000';
        $config['max_height']  = '1024';

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('image')){
          $image="";
        }

        else{
            $image=$this->upload->file_name;
        }
        $info=array(
            'id_jenis'=>$this->input->post('id_jenis'),
            'jenis_katalog'=>$this->input->post('jenis_katalog'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'image'=>$image
            );
        $this->Madmin->add_katalog($info);
        $data['content_view']=('admin/tambah_katalog_v_s');
        $this->template->my_template($data);
    } */

    function tambah_subkatalog($id_jenis){
        $where = array('id_jenis' => $id_jenis);
        $data['subkatalog']= $this->Madmin->tambah_subkatalog($where,'nama_katalog')->result();

		$data['content_view']=('admin/tambah_subkatalog_v');
		$this->template->my_template($data);
	}

    function submit_subkatalog(){
        $config['upload_path'] = './assets/images/nama';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width']  = '2000';
        $config['max_height']  = '1024';

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('gambar')){
          $gambar="";
        }

        else{
            $gambar=$this->upload->file_name;
        }


        $id_jenis = $this->input->post('id_jenis');
        $id_nama = $this->input->post('id_nama');
        $nama_katalog = $this->input->post('nama_katalog');
        $deskripsi = $this->input->post('deskripsi');


        $where = array(
        'id_jenis' => $id_jenis
        );
        $info=array(
            'id_nama'=>$this->input->post('id_nama'),
            'nama_katalog'=>$this->input->post('nama_katalog'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'gambar'=>$gambar
            );
        $this->Madmin->submit_subkatalog($info,$where);
        $data['content_view']=('admin/tambah_katalog_v_s');
        $this->template->my_template($data);
    }

    




    /*

  function submit_jenis_katalog(){
    $config['upload_path'] = './assets/images/jenis';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width']  = '2000';
    $config['max_height']  = '1024';
    $this->upload->initialize($config);
    if(!$this->upload->do_upload('image')){
      $image='image';
    }
    else{
      $image=$this->upload->file_name;
    }
    $data=array(
      'id_jenis'=>$this->input->post('id_jenis'),
      'jenis_katalog'=>$this->input->post('jenis_katalog'),
      'deskripsi'=>$this->input->post('deskripsi'),
      'image'=>$this->input->post('image')
      );
    $this->Madmin->add_katalog($data);
    redirect('home/index');
    }
*/

}
