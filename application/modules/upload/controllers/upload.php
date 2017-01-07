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

    function select($jenis_katalog){
      $where = array('jenis_katalog' => $jenis_katalog);
      $data['katalog'] = $this->Mkatalog->getdata($where,'katalog')->result();
      $data['content_view']='katalog/klik_v';
      $this->load->view('template/mytemplate_v', $data);
    }

    function select2($id){
      $where = array('id' => $id);
      $data['katalog'] = $this->Mkatalog->getdata($where,'katalog')->result();
      $data['content_view']='katalog/subklik_v';
      $this->load->view('template/mytemplate_v', $data);
    }




      /*

    function furniture(){
    	$data = array(
			'tampil_katalog' => $this->Mkatalog->tampil_furniture() 
			);

        $data['content_view'] = 'katalog/furniture_v';
        $this->template->my_template($data);
      }

    function batik(){
    	$data = array(
			'tampil_katalog' => $this->Mkatalog->tampil_batik() 
			);

        $data['content_view'] = 'katalog/batik_v';
        $this->template->my_template($data);
      }

    function rotan(){
        $data['content_view'] = 'katalog/rotan_v';
        $this->template->my_template($data);
      } 

    function patung(){
        $data['content_view'] = 'katalog/patung_v';
        $this->template->my_template($data);
      } 

    function ukir(){
        $data['content_view'] = 'katalog/ukir_v';
        $this->template->my_template($data);
      } 

    function jenis_batik(){
        $data['content_view'] = 'katalog/jenisbatik_v';
        $this->template->my_template($data);
      }  */     
}
