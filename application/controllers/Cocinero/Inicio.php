<?php 

class Inicio extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cocinero/Inicio_model');
	}

	public function index(){
		$data['alimentos_p']	= $this->Inicio_model->oca_pendientes();
		$data['postres_p']		= $this->Inicio_model->ocp_pendientes();

		$this->load->view('Cocinero/Layout_cocinero/mHeader');
		$this->load->view('Cocinero/Layout_cocinero/mMenu');
		$this->load->view('Cocinero/Layout_cocinero/mPanel');
		$this->load->view('Cocinero/vInicio', $data);
		$this->load->view('Cocinero/Layout_cocinero/mFooter');
	}

	public function alimento_listo(){
		$id_orden 	= $this->uri->segment(4);
		$estado 	= "A_Listo";

		$this->Inicio_model->cambiarEstado($id_orden, $estado);
		redirect(base_url(). 'Cocinero/Inicio');
	}

	public function postre_listo(){
		$id_orden 	= $this->uri->segment(4);
		$estado 	= "Listo";

		$this->Inicio_model->cambiarEstado($id_orden, $estado);
		redirect(base_url(). 'Cocinero/Inicio');
	}
}
?>