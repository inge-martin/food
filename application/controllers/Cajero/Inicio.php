<?php 

class Inicio extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cajero/Inicio_model');
	}

	public function index(){
		$data['pagos']	= $this->Inicio_model->pagos_pendientes();

		$this->load->view('Cajero/Layout_cajero/mHeader');
		$this->load->view('Cajero/Layout_cajero/mMenu');
		$this->load->view('Cajero/Layout_cajero/mPanel');
		$this->load->view('Cajero/vInicio', $data);
		$this->load->view('Cajero/Layout_cajero/mFooter');
	}

	public function detalles(){
		$id_pago = $this->uri->segment('4');
		$data['detalles']	= $this->Inicio_model->pagos_detalles($id_pago);

		$this->load->view('Cajero/Layout_cajero/mHeader');
		$this->load->view('Cajero/Layout_cajero/mMenu');
		$this->load->view('Cajero/Layout_cajero/mPanel');
		$this->load->view('Cajero/vDetalles', $data);
		$this->load->view('Cajero/Layout_cajero/mFooter');
	}

	public function pagar($id_pago, $id_mesa){
		//Pagas la orden
		$id_pago = $this->uri->segment('4');
		$estado 	= "Pagado";
		$this->Inicio_model->pagarOC($id_pago, $estado);
		
		//Cambias el estado de la mesa a disponible
		$estatus 	= "Disponible";
		$id_mesa = $this->uri->segment('5');
		$this->Inicio_model->CambiarEstado($id_mesa, $estatus);
		redirect(base_url(). 'Cajero/Inicio');
	}

	// public function generar(){

	// 	$timezone = "America/Mexico_City";
	// 	date_default_timezone_set($timezone);

	// 	$hora = date("H:i:s");
	// 	$fecha = date("d-m-Y");

	// 	$id_clinica     = $this->input->post('id_clinica');
	// 	$data['clinica']    = $this->Expediente_model->get_clinica($id_clinica);

	// 	$html = $this->load->view('Administrador/Expediente/imprimir', $data, true);
	// 	$pdfFilePath = "Clinic-pet-Carnet-".$fecha."_".$hora.".pdf";

	// 	$this->load->library('M_pdf');
	// 	$this->m_pdf->pdf->WriteHTML($html);
	// 	$this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	// }

}
?>