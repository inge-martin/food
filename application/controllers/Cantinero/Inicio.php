<?php 

class Inicio extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cantinero/Inicio_model');
	}

	public function index(){
		$data['bebidas_p']	= $this->Inicio_model->ocb_pendientes();

		$this->load->view('Cantinero/Layout_cantinero/mHeader');
		$this->load->view('Cantinero/Layout_cantinero/mMenu');
		$this->load->view('Cantinero/Layout_cantinero/mPanel');
		$this->load->view('Cantinero/vInicio', $data);
		$this->load->view('Cantinero/Layout_cantinero/mFooter');
	}

	public function listo(){
		$id_orden 	= $this->uri->segment(4);
		$estado 	= "C_Listo";

		$this->Inicio_model->cambiarEstado($id_orden, $estado);
		redirect(base_url(). 'Cantinero/Inicio');

	}
}
?>