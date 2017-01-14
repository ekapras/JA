<?php
class katalog extends MY_Controller
{
    function __construct(){
    		parent::__construct();
    		$this->load->helper('form');
    		$this->load->model('Mkatalog');
      }

    function index(){
        $data['content_view'] = 'katalog/katalog_v';
        $this->template->my_template($data);

      }

    function select($id_jenis){
      $where = array('id_jenis' => $id_jenis);
      $data['nama'] = $this->Mkatalog->getdata($where,'nama_katalog')->result();
      $data['jenis'] = $this->Mkatalog->getdata($where,'jenis_katalog')->result();
      $data['content_view']='katalog/katalog_v';
      $this->load->view('template/mytemplate_v', $data);
    }

    function galeri($id_nama){
      $where = array('id_nama' => $id_nama);
      $data['galeri'] = $this->Mkatalog->getdata($where,'galeri_katalog')->result();
      $data['nama'] = $this->Mkatalog->getdata($where,'nama_katalog')->result();
      $data['content_view']='katalog/galeri_v';
      $this->load->view('template/mytemplate_v',$data);
    }
    
}
