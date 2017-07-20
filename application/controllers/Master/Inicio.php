<?php 

class Inicio extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Master/Inicio_model');
	}

	function index(){
		$data['alimentos'] 		= $this->Inicio_model->get_alimentos();
		$data['bebidas']		= $this->Inicio_model->get_bebidas();
		$data['postres'] 		= $this->Inicio_model->get_postres();
		$data['sucursales'] 	= $this->Inicio_model->get_sucursal();
		$this->load->view('Master/Layout_master/mHeader');
		$this->load->view('Master/Layout_master/mMenu');
		$this->load->view('Master/Layout_master/mPanel');
		$this->load->view('Master/vInicio', $data);
		$this->load->view('Master/Layout_master/mFooter');
	}
}





?>