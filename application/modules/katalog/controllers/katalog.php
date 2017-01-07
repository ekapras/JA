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

    function clay(){
      $data['katalog'] = $this->Mkatalog->getdata_clay()->result();
      $data['content_view']='katalog/clay_v';
      $this->load->view('template/mytemplate_v', $data);
    }

    function wood(){
      $data['katalog'] = $this->Mkatalog->getdata_wood()->result();
      $data['content_view']='katalog/wood_v';
      $this->load->view('template/mytemplate_v', $data);
    }

    function metal(){
      $data['katalog'] = $this->Mkatalog->getdata_metal()->result();
      $data['content_view']='katalog/metal_v';
      $this->load->view('template/mytemplate_v', $data);
    }

    function fabric(){
      $data['katalog'] = $this->Mkatalog->getdata_fabric()->result();
      $data['content_view']='katalog/fabric_v';
      $this->load->view('template/mytemplate_v', $data);
    }

    function street(){
      $data['katalog'] = $this->Mkatalog->getdata_street()->result();
      $data['content_view']='katalog/street_v';
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
