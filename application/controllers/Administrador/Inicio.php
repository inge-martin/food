<?php 

class Inicio extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Administrador/Inicio_model');
	}

	function index(){
		$data['alimentos'] 		= $this->Inicio_model->get_alimentos();
		$data['bebidas']		= $this->Inicio_model->get_bebidas();
		$data['postres'] 		= $this->Inicio_model->get_postres();
		$data['sucursales'] 	= $this->Inicio_model->get_sucursal();
		$this->load->view('Administrador/Layout_admin/mHeader');
		$this->load->view('Administrador/Layout_admin/mMenu');
		$this->load->view('Administrador/Layout_admin/mPanel');
		$this->load->view('Administrador/vInicio', $data);
		$this->load->view('Administrador/Layout_admin/mFooter');
	}
}





?>