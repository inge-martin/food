<?php 

class Inicio extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mesero/Inicio_model');
	}

	// llena las mesas
	public function index(){
		$data['disponibles']	= $this->Inicio_model->get_disponibles();
		$data['ocupadas']		= $this->Inicio_model->get_ocupadas();
		$data['num']			= $this->Inicio_model->get_num_listas();

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/vInicio', $data);
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

	//ordenes listas
	public function listas(){
		$data['num']	= $this->Inicio_model->get_num_listas();
		$data['oc_listas']	= $this->Inicio_model->get_oc_listas();

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/vListas', $data);
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

	// Entregar ordenes listas
	public function entregar(){
		$id_orden 	= $this->uri->segment(4);
		$estado 	= "Entregado";

		$this->Inicio_model->cambiarEstado($id_orden, $estado);
		redirect(base_url(). 'Mesero/Inicio/listas');
	}

	// Ver detalles de ordenes de la mesa
	public function detalles(){
		$id_mesa 	= $this->uri->segment(4);
		$oc	= $this->Inicio_model->getOrden($id_mesa);
		$data['num']	= $this->Inicio_model->get_num_listas();

		$data['detalles']	= $this->Inicio_model->get_detalles($id_mesa, $oc);
		$data['estado']	= $this->Inicio_model->get_estado($oc);

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/vDetalles', $data);
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

	// finalizas la orden de consumo
	public function finalizarOC(){
		$data['num']	= $this->Inicio_model->get_num_listas();

		$no_orden = $this->uri->segment(4);
		
		$estado 	= "Finalizado";

		// 1. cambias estado de la OC a finalizado
		// 2. guardas el total en la tabla pagos
		$this->Inicio_model->finalizar_orden($no_orden, $estado);

		$a = $this->Inicio_model->totalAlimento($no_orden);
		$b = $this->Inicio_model->totalBebida($no_orden);
		$p = $this->Inicio_model->totalPostre($no_orden);

		$pago['id_sucursal'] 	= $this->session->userdata('s_id_sucursal');
		$pago['id_mesa'] 		= $this->uri->segment(5);
		$pago['id_caja'] 		= $this->session->userdata('s_id_caja');
		$pago['no_orden'] 		= $this->uri->segment(4);
		$pago['total'] 			= $a + $b + $p;
		$pago['estatus'] 		= "Pendiente";

		$this->Inicio_model->generaPago($pago);

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/success');
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

}





?>