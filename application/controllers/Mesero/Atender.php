<?php 

class Atender extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Mesero/Atender_model');
		$this->load->model('Mesero/Inicio_model');
	}

	public function create(){

		$id_mesa 	= $this->uri->segment(4);
		$comensales = $this->uri->segment(5);

		$data['mesa']		= $this->Atender_model->get_detalle($id_mesa);
		$data['alimentos']	= $this->Atender_model->get_alimentos();
		$data['bebidas']	= $this->Atender_model->get_bebidas();
		$data['postres']	= $this->Atender_model->get_postres();
		$data['num']		= $this->Inicio_model->get_num_listas();

		switch ($comensales) {
			case 2:
			$this->load->view('Mesero/Layout_mesero/mHeader');
			$this->load->view('Mesero/Layout_mesero/mMenu', $data);
			$this->load->view('Mesero/Layout_mesero/mPanel');
			$this->load->view('Mesero/Atender/create2', $data);
			$this->load->view('Mesero/Layout_mesero/mFooter');
			break;
			case 4:
			$this->load->view('Mesero/Layout_mesero/mHeader');
			$this->load->view('Mesero/Layout_mesero/mMenu', $data);
			$this->load->view('Mesero/Layout_mesero/mPanel');
			$this->load->view('Mesero/Atender/create4', $data);
			$this->load->view('Mesero/Layout_mesero/mFooter');
			break;
			case 6:
			$this->load->view('Mesero/Layout_mesero/mHeader');
			$this->load->view('Mesero/Layout_mesero/mMenu', $data);
			$this->load->view('Mesero/Layout_mesero/mPanel');
			$this->load->view('Mesero/Atender/create6', $data);
			$this->load->view('Mesero/Layout_mesero/mFooter');
			break;
			case 8:
			$this->load->view('Mesero/Layout_mesero/mHeader');
			$this->load->view('Mesero/Layout_mesero/mMenu', $data);
			$this->load->view('Mesero/Layout_mesero/mPanel');
			$this->load->view('Mesero/Atender/create8', $data);
			$this->load->view('Mesero/Layout_mesero/mFooter');
			break;
			case 10:
			$this->load->view('Mesero/Layout_mesero/mHeader');
			$this->load->view('Mesero/Layout_mesero/mMenu', $data);
			$this->load->view('Mesero/Layout_mesero/mPanel');
			$this->load->view('Mesero/Atender/create10', $data);
			$this->load->view('Mesero/Layout_mesero/mFooter');
			break;
			default:
			echo "Algo salio mal";
			break;
		}
	}

	public function guardarOrden2(){
		$data['num']			= $this->Inicio_model->get_num_listas();
		$last_orden = $this->Atender_model->get_orden();
		$orden 		= $last_orden + 1;

		//Comensal 01
		$com01['no_orden1']			= $orden;
		$com01['fecha1']			= $this->input->post('fecha1');
		$com01['id_mesa1']			= $this->input->post('id_mesa1');
		$com01['no_comensal1']		= $this->input->post('no_comensal1');
		$com01['nombre1']			= ucfirst($this->input->post('nombre1'));
		$com01['id_alimento1']		= $this->input->post('id_alimento1');
		$com01['nota_alimento1']	= ucfirst($this->input->post('nota_alimento1'));
		$com01['id_bebida1']		= $this->input->post('id_bebida1');
		$com01['nota_bebida1']		= ucfirst($this->input->post('nota_bebida1'));
		$com01['id_postre1']		= $this->input->post('id_postre1');
		$com01['nota_postre1']		= ucfirst($this->input->post('nota_postre1'));
		$com01['estado1']			= "Enviado";

		//Comensal 02
		$com02['no_orden2']			= $orden;
		$com02['fecha2']			= $this->input->post('fecha2');
		$com02['id_mesa2']			= $this->input->post('id_mesa2');
		$com02['no_comensal2']		= $this->input->post('no_comensal2');
		$com02['nombre2']			= ucfirst($this->input->post('nombre2'));
		$com02['id_alimento2']		= $this->input->post('id_alimento2');
		$com02['nota_alimento2']	= ucfirst($this->input->post('nota_alimento2'));
		$com02['id_bebida2']		= $this->input->post('id_bebida2');
		$com02['nota_bebida2']		= ucfirst($this->input->post('nota_bebida2'));
		$com02['id_postre2']		= $this->input->post('id_postre2');
		$com02['nota_postre2']		= ucfirst($this->input->post('nota_postre2'));
		$com02['estado2']			= "Enviado";

		$this->Atender_model->insertaDos($com01, $com02);
		
		$id_mesa = $this->input->post('id_mesa1');
		$estado = "Ocupada";
		$this->Atender_model->cambiarEstado($id_mesa, $estado);

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/Atender/success');
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

	public function guardarOrden4(){
		$data['num']			= $this->Inicio_model->get_num_listas();
		$last_orden = $this->Atender_model->get_orden();
		$orden 		= $last_orden + 1;

		//Comensal 01
		$com01['no_orden1']			= $orden;
		$com01['fecha1']			= $this->input->post('fecha1');
		$com01['id_mesa1']			= $this->input->post('id_mesa1');
		$com01['no_comensal1']		= $this->input->post('no_comensal1');
		$com01['nombre1']			= ucfirst($this->input->post('nombre1'));
		$com01['id_alimento1']		= $this->input->post('id_alimento1');
		$com01['nota_alimento1']	= ucfirst($this->input->post('nota_alimento1'));
		$com01['id_bebida1']		= $this->input->post('id_bebida1');
		$com01['nota_bebida1']		= ucfirst($this->input->post('nota_bebida1'));
		$com01['id_postre1']		= $this->input->post('id_postre1');
		$com01['nota_postre1']		= ucfirst($this->input->post('nota_postre1'));
		$com01['estado1']			= "Enviado";

		//Comensal 02
		$com02['no_orden2']			= $orden;
		$com02['fecha2']			= $this->input->post('fecha2');
		$com02['id_mesa2']			= $this->input->post('id_mesa2');
		$com02['no_comensal2']		= $this->input->post('no_comensal2');
		$com02['nombre2']			= ucfirst($this->input->post('nombre2'));
		$com02['id_alimento2']		= $this->input->post('id_alimento2');
		$com02['nota_alimento2']	= ucfirst($this->input->post('nota_alimento2'));
		$com02['id_bebida2']		= $this->input->post('id_bebida2');
		$com02['nota_bebida2']		= ucfirst($this->input->post('nota_bebida2'));
		$com02['id_postre2']		= $this->input->post('id_postre2');
		$com02['nota_postre2']		= ucfirst($this->input->post('nota_postre2'));
		$com02['estado2']			= "Enviado";

		//Comensal 03
		$com03['no_orden3']			= $orden;
		$com03['fecha3']			= $this->input->post('fecha3');
		$com03['id_mesa3']			= $this->input->post('id_mesa3');
		$com03['no_comensal3']		= $this->input->post('no_comensal3');
		$com03['nombre3']			= ucfirst($this->input->post('nombre3'));
		$com03['id_alimento3']		= $this->input->post('id_alimento3');
		$com03['nota_alimento3']	= ucfirst($this->input->post('nota_alimento3'));
		$com03['id_bebida3']		= $this->input->post('id_bebida3');
		$com03['nota_bebida3']		= ucfirst($this->input->post('nota_bebida3'));
		$com03['id_postre3']		= $this->input->post('id_postre3');
		$com03['nota_postre3']		= ucfirst($this->input->post('nota_postre3'));
		$com03['estado3']			= "Enviado";

		//Comensal 04
		$com04['no_orden4']			= $orden;
		$com04['fecha4']			= $this->input->post('fecha04');
		$com04['id_mesa4']			= $this->input->post('id_mesa04');
		$com04['no_comensal4']		= $this->input->post('no_comensal04');
		$com04['nombre4']			= ucfirst($this->input->post('nombre04'));
		$com04['id_alimento4']		= $this->input->post('id_alimento04');
		$com04['nota_alimento4']	= ucfirst($this->input->post('nota_alimento04'));
		$com04['id_bebida4']		= $this->input->post('id_bebida04');
		$com04['nota_bebida4']		= ucfirst($this->input->post('nota_bebida04'));
		$com04['id_postre4']		= $this->input->post('id_postre04');
		$com04['nota_postre4']		= ucfirst($this->input->post('nota_postre04'));
		$com04['estado4']			= "Enviado";

		$this->Atender_model->insertaCuatro($com01, $com02, $com03, $com04);
		
		$id_mesa = $this->input->post('id_mesa1');
		$estado = "Ocupada";
		$this->Atender_model->cambiarEstado($id_mesa, $estado);

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/Atender/success');
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

	public function guardarOrden6(){
		$data['num']			= $this->Inicio_model->get_num_listas();
		$last_orden = $this->Atender_model->get_orden();
		$orden 		= $last_orden + 1;

		//Comensal 01
		$com01['no_orden1']			= $orden;
		$com01['fecha1']			= $this->input->post('fecha1');
		$com01['id_mesa1']			= $this->input->post('id_mesa1');
		$com01['no_comensal1']		= $this->input->post('no_comensal1');
		$com01['nombre1']			= ucfirst($this->input->post('nombre1'));
		$com01['id_alimento1']		= $this->input->post('id_alimento1');
		$com01['nota_alimento1']	= ucfirst($this->input->post('nota_alimento1'));
		$com01['id_bebida1']		= $this->input->post('id_bebida1');
		$com01['nota_bebida1']		= ucfirst($this->input->post('nota_bebida1'));
		$com01['id_postre1']		= $this->input->post('id_postre1');
		$com01['nota_postre1']		= ucfirst($this->input->post('nota_postre1'));
		$com01['estado1']			= "Enviado";

		//Comensal 02
		$com02['no_orden2']			= $orden;
		$com02['fecha2']			= $this->input->post('fecha2');
		$com02['id_mesa2']			= $this->input->post('id_mesa2');
		$com02['no_comensal2']		= $this->input->post('no_comensal2');
		$com02['nombre2']			= ucfirst($this->input->post('nombre2'));
		$com02['id_alimento2']		= $this->input->post('id_alimento2');
		$com02['nota_alimento2']	= ucfirst($this->input->post('nota_alimento2'));
		$com02['id_bebida2']		= $this->input->post('id_bebida2');
		$com02['nota_bebida2']		= ucfirst($this->input->post('nota_bebida2'));
		$com02['id_postre2']		= $this->input->post('id_postre2');
		$com02['nota_postre2']		= ucfirst($this->input->post('nota_postre2'));
		$com02['estado2']			= "Enviado";

		//Comensal 03
		$com03['no_orden3']			= $orden;
		$com03['fecha3']			= $this->input->post('fecha3');
		$com03['id_mesa3']			= $this->input->post('id_mesa3');
		$com03['no_comensal3']		= $this->input->post('no_comensal3');
		$com03['nombre3']			= ucfirst($this->input->post('nombre3'));
		$com03['id_alimento3']		= $this->input->post('id_alimento3');
		$com03['nota_alimento3']	= ucfirst($this->input->post('nota_alimento3'));
		$com03['id_bebida3']		= $this->input->post('id_bebida3');
		$com03['nota_bebida3']		= ucfirst($this->input->post('nota_bebida3'));
		$com03['id_postre3']		= $this->input->post('id_postre3');
		$com03['nota_postre3']		= ucfirst($this->input->post('nota_postre3'));
		$com03['estado3']			= "Enviado";

		//Comensal 04
		$com04['no_orden4']			= $orden;
		$com04['fecha4']			= $this->input->post('fecha04');
		$com04['id_mesa4']			= $this->input->post('id_mesa04');
		$com04['no_comensal4']		= $this->input->post('no_comensal04');
		$com04['nombre4']			= ucfirst($this->input->post('nombre04'));
		$com04['id_alimento4']		= $this->input->post('id_alimento04');
		$com04['nota_alimento4']	= ucfirst($this->input->post('nota_alimento04'));
		$com04['id_bebida4']		= $this->input->post('id_bebida04');
		$com04['nota_bebida4']		= ucfirst($this->input->post('nota_bebida04'));
		$com04['id_postre4']		= $this->input->post('id_postre04');
		$com04['nota_postre4']		= ucfirst($this->input->post('nota_postre04'));
		$com04['estado4']			= "Enviado";

		//Comensal 05
		$com05['no_orden5']			= $orden;
		$com05['fecha5']			= $this->input->post('fecha05');
		$com05['id_mesa5']			= $this->input->post('id_mesa05');
		$com05['no_comensal5']		= $this->input->post('no_comensal05');
		$com05['nombre5']			= ucfirst($this->input->post('nombre05'));
		$com05['id_alimento5']		= $this->input->post('id_alimento05');
		$com05['nota_alimento5']	= ucfirst($this->input->post('nota_alimento05'));
		$com05['id_bebida5']		= $this->input->post('id_bebida05');
		$com05['nota_bebida5']		= ucfirst($this->input->post('nota_bebida05'));
		$com05['id_postre5']		= $this->input->post('id_postre05');
		$com05['nota_postre5']		= ucfirst($this->input->post('nota_postre05'));
		$com05['estado5']			= "Enviado";

		//Comensal 06
		$com06['no_orden6']			= $orden;
		$com06['fecha6']			= $this->input->post('fecha06');
		$com06['id_mesa6']			= $this->input->post('id_mesa06');
		$com06['no_comensal6']		= $this->input->post('no_comensal06');
		$com06['nombre6']			= ucfirst($this->input->post('nombre06'));
		$com06['id_alimento6']		= $this->input->post('id_alimento06');
		$com06['nota_alimento6']	= ucfirst($this->input->post('nota_alimento06'));
		$com06['id_bebida6']		= $this->input->post('id_bebida06');
		$com06['nota_bebida6']		= ucfirst($this->input->post('nota_bebida06'));
		$com06['id_postre6']		= $this->input->post('id_postre06');
		$com06['nota_postre6']		= ucfirst($this->input->post('nota_postre06'));
		$com06['estado6']			= "Enviado";		


		$this->Atender_model->insertaSeis($com01, $com02, $com03, $com04, $com05, $com06);
		
		$id_mesa = $this->input->post('id_mesa1');
		$estado = "Ocupada";
		$this->Atender_model->cambiarEstado($id_mesa, $estado);

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/Atender/success');
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

	public function guardarOrden8(){
		$data['num']			= $this->Inicio_model->get_num_listas();
		$last_orden = $this->Atender_model->get_orden();
		$orden 		= $last_orden + 1;

		//Comensal 01
		$com01['no_orden1']			= $orden;
		$com01['fecha1']			= $this->input->post('fecha1');
		$com01['id_mesa1']			= $this->input->post('id_mesa1');
		$com01['no_comensal1']		= $this->input->post('no_comensal1');
		$com01['nombre1']			= ucfirst($this->input->post('nombre1'));
		$com01['id_alimento1']		= $this->input->post('id_alimento1');
		$com01['nota_alimento1']	= ucfirst($this->input->post('nota_alimento1'));
		$com01['id_bebida1']		= $this->input->post('id_bebida1');
		$com01['nota_bebida1']		= ucfirst($this->input->post('nota_bebida1'));
		$com01['id_postre1']		= $this->input->post('id_postre1');
		$com01['nota_postre1']		= ucfirst($this->input->post('nota_postre1'));
		$com01['estado1']			= "Enviado";

		//Comensal 02
		$com02['no_orden2']			= $orden;
		$com02['fecha2']			= $this->input->post('fecha2');
		$com02['id_mesa2']			= $this->input->post('id_mesa2');
		$com02['no_comensal2']		= $this->input->post('no_comensal2');
		$com02['nombre2']			= ucfirst($this->input->post('nombre2'));
		$com02['id_alimento2']		= $this->input->post('id_alimento2');
		$com02['nota_alimento2']	= ucfirst($this->input->post('nota_alimento2'));
		$com02['id_bebida2']		= $this->input->post('id_bebida2');
		$com02['nota_bebida2']		= ucfirst($this->input->post('nota_bebida2'));
		$com02['id_postre2']		= $this->input->post('id_postre2');
		$com02['nota_postre2']		= ucfirst($this->input->post('nota_postre2'));
		$com02['estado2']			= "Enviado";

		//Comensal 03
		$com03['no_orden3']			= $orden;
		$com03['fecha3']			= $this->input->post('fecha3');
		$com03['id_mesa3']			= $this->input->post('id_mesa3');
		$com03['no_comensal3']		= $this->input->post('no_comensal3');
		$com03['nombre3']			= ucfirst($this->input->post('nombre3'));
		$com03['id_alimento3']		= $this->input->post('id_alimento3');
		$com03['nota_alimento3']	= ucfirst($this->input->post('nota_alimento3'));
		$com03['id_bebida3']		= $this->input->post('id_bebida3');
		$com03['nota_bebida3']		= ucfirst($this->input->post('nota_bebida3'));
		$com03['id_postre3']		= $this->input->post('id_postre3');
		$com03['nota_postre3']		= ucfirst($this->input->post('nota_postre3'));
		$com03['estado3']			= "Enviado";

		//Comensal 04
		$com04['no_orden4']			= $orden;
		$com04['fecha4']			= $this->input->post('fecha04');
		$com04['id_mesa4']			= $this->input->post('id_mesa04');
		$com04['no_comensal4']		= $this->input->post('no_comensal04');
		$com04['nombre4']			= ucfirst($this->input->post('nombre04'));
		$com04['id_alimento4']		= $this->input->post('id_alimento04');
		$com04['nota_alimento4']	= ucfirst($this->input->post('nota_alimento04'));
		$com04['id_bebida4']		= $this->input->post('id_bebida04');
		$com04['nota_bebida4']		= ucfirst($this->input->post('nota_bebida04'));
		$com04['id_postre4']		= $this->input->post('id_postre04');
		$com04['nota_postre4']		= ucfirst($this->input->post('nota_postre04'));
		$com04['estado4']			= "Enviado";

		//Comensal 05
		$com05['no_orden5']			= $orden;
		$com05['fecha5']			= $this->input->post('fecha05');
		$com05['id_mesa5']			= $this->input->post('id_mesa05');
		$com05['no_comensal5']		= $this->input->post('no_comensal05');
		$com05['nombre5']			= ucfirst($this->input->post('nombre05'));
		$com05['id_alimento5']		= $this->input->post('id_alimento05');
		$com05['nota_alimento5']	= ucfirst($this->input->post('nota_alimento05'));
		$com05['id_bebida5']		= $this->input->post('id_bebida05');
		$com05['nota_bebida5']		= ucfirst($this->input->post('nota_bebida05'));
		$com05['id_postre5']		= $this->input->post('id_postre05');
		$com05['nota_postre5']		= ucfirst($this->input->post('nota_postre05'));
		$com05['estado5']			= "Enviado";

		//Comensal 06
		$com06['no_orden6']			= $orden;
		$com06['fecha6']			= $this->input->post('fecha06');
		$com06['id_mesa6']			= $this->input->post('id_mesa06');
		$com06['no_comensal6']		= $this->input->post('no_comensal06');
		$com06['nombre6']			= ucfirst($this->input->post('nombre06'));
		$com06['id_alimento6']		= $this->input->post('id_alimento06');
		$com06['nota_alimento6']	= ucfirst($this->input->post('nota_alimento06'));
		$com06['id_bebida6']		= $this->input->post('id_bebida06');
		$com06['nota_bebida6']		= ucfirst($this->input->post('nota_bebida06'));
		$com06['id_postre6']		= $this->input->post('id_postre06');
		$com06['nota_postre6']		= ucfirst($this->input->post('nota_postre06'));
		$com06['estado6']			= "Enviado";

		//Comensal 07
		$com07['no_orden7']			= $orden;
		$com07['fecha7']			= $this->input->post('fecha07');
		$com07['id_mesa7']			= $this->input->post('id_mesa07');
		$com07['no_comensal7']		= $this->input->post('no_comensal07');
		$com07['nombre7']			= ucfirst($this->input->post('nombre07'));
		$com07['id_alimento7']		= $this->input->post('id_alimento07');
		$com07['nota_alimento7']	= ucfirst($this->input->post('nota_alimento07'));
		$com07['id_bebida7']		= $this->input->post('id_bebida07');
		$com07['nota_bebida7']		= ucfirst($this->input->post('nota_bebida07'));
		$com07['id_postre7']		= $this->input->post('id_postre07');
		$com07['nota_postre7']		= ucfirst($this->input->post('nota_postre07'));
		$com07['estado7']			= "Enviado";

		//Comensal 08
		$com08['no_orden8']			= $orden;
		$com08['fecha8']			= $this->input->post('fecha08');
		$com08['id_mesa8']			= $this->input->post('id_mesa08');
		$com08['no_comensal8']		= $this->input->post('no_comensal08');
		$com08['nombre8']			= ucfirst($this->input->post('nombre08'));
		$com08['id_alimento8']		= $this->input->post('id_alimento08');
		$com08['nota_alimento8']	= ucfirst($this->input->post('nota_alimento08'));
		$com08['id_bebida8']		= $this->input->post('id_bebida08');
		$com08['nota_bebida8']		= ucfirst($this->input->post('nota_bebida08'));
		$com08['id_postre8']		= $this->input->post('id_postre08');
		$com08['nota_postre8']		= ucfirst($this->input->post('nota_postre08'));
		$com08['estado8']			= "Enviado";				


		$this->Atender_model->insertaOcho($com01, $com02, $com03, $com04, $com05, $com06, $com07, $com08);
		
		$id_mesa = $this->input->post('id_mesa1');
		$estado = "Ocupada";
		$this->Atender_model->cambiarEstado($id_mesa, $estado);

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/Atender/success');
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

	public function guardarOrden10(){
		$data['num']			= $this->Inicio_model->get_num_listas();
		$last_orden = $this->Atender_model->get_orden();
		$orden 		= $last_orden + 1;

		//Comensal 01
		$com01['no_orden1']			= $orden;
		$com01['fecha1']			= $this->input->post('fecha1');
		$com01['id_mesa1']			= $this->input->post('id_mesa1');
		$com01['no_comensal1']		= $this->input->post('no_comensal1');
		$com01['nombre1']			= ucfirst($this->input->post('nombre1'));
		$com01['id_alimento1']		= $this->input->post('id_alimento1');
		$com01['nota_alimento1']	= ucfirst($this->input->post('nota_alimento1'));
		$com01['id_bebida1']		= $this->input->post('id_bebida1');
		$com01['nota_bebida1']		= ucfirst($this->input->post('nota_bebida1'));
		$com01['id_postre1']		= $this->input->post('id_postre1');
		$com01['nota_postre1']		= ucfirst($this->input->post('nota_postre1'));
		$com01['estado1']			= "Enviado";

		//Comensal 02
		$com02['no_orden2']			= $orden;
		$com02['fecha2']			= $this->input->post('fecha2');
		$com02['id_mesa2']			= $this->input->post('id_mesa2');
		$com02['no_comensal2']		= $this->input->post('no_comensal2');
		$com02['nombre2']			= ucfirst($this->input->post('nombre2'));
		$com02['id_alimento2']		= $this->input->post('id_alimento2');
		$com02['nota_alimento2']	= ucfirst($this->input->post('nota_alimento2'));
		$com02['id_bebida2']		= $this->input->post('id_bebida2');
		$com02['nota_bebida2']		= ucfirst($this->input->post('nota_bebida2'));
		$com02['id_postre2']		= $this->input->post('id_postre2');
		$com02['nota_postre2']		= ucfirst($this->input->post('nota_postre2'));
		$com02['estado2']			= "Enviado";

		//Comensal 03
		$com03['no_orden3']			= $orden;
		$com03['fecha3']			= $this->input->post('fecha3');
		$com03['id_mesa3']			= $this->input->post('id_mesa3');
		$com03['no_comensal3']		= $this->input->post('no_comensal3');
		$com03['nombre3']			= ucfirst($this->input->post('nombre3'));
		$com03['id_alimento3']		= $this->input->post('id_alimento3');
		$com03['nota_alimento3']	= ucfirst($this->input->post('nota_alimento3'));
		$com03['id_bebida3']		= $this->input->post('id_bebida3');
		$com03['nota_bebida3']		= ucfirst($this->input->post('nota_bebida3'));
		$com03['id_postre3']		= $this->input->post('id_postre3');
		$com03['nota_postre3']		= ucfirst($this->input->post('nota_postre3'));
		$com03['estado3']			= "Enviado";

		//Comensal 04
		$com04['no_orden4']			= $orden;
		$com04['fecha4']			= $this->input->post('fecha04');
		$com04['id_mesa4']			= $this->input->post('id_mesa04');
		$com04['no_comensal4']		= $this->input->post('no_comensal04');
		$com04['nombre4']			= ucfirst($this->input->post('nombre04'));
		$com04['id_alimento4']		= $this->input->post('id_alimento04');
		$com04['nota_alimento4']	= ucfirst($this->input->post('nota_alimento04'));
		$com04['id_bebida4']		= $this->input->post('id_bebida04');
		$com04['nota_bebida4']		= ucfirst($this->input->post('nota_bebida04'));
		$com04['id_postre4']		= $this->input->post('id_postre04');
		$com04['nota_postre4']		= ucfirst($this->input->post('nota_postre04'));
		$com04['estado4']			= "Enviado";

		//Comensal 05
		$com05['no_orden5']			= $orden;
		$com05['fecha5']			= $this->input->post('fecha05');
		$com05['id_mesa5']			= $this->input->post('id_mesa05');
		$com05['no_comensal5']		= $this->input->post('no_comensal05');
		$com05['nombre5']			= ucfirst($this->input->post('nombre05'));
		$com05['id_alimento5']		= $this->input->post('id_alimento05');
		$com05['nota_alimento5']	= ucfirst($this->input->post('nota_alimento05'));
		$com05['id_bebida5']		= $this->input->post('id_bebida05');
		$com05['nota_bebida5']		= ucfirst($this->input->post('nota_bebida05'));
		$com05['id_postre5']		= $this->input->post('id_postre05');
		$com05['nota_postre5']		= ucfirst($this->input->post('nota_postre05'));
		$com05['estado5']			= "Enviado";

		//Comensal 06
		$com06['no_orden6']			= $orden;
		$com06['fecha6']			= $this->input->post('fecha06');
		$com06['id_mesa6']			= $this->input->post('id_mesa06');
		$com06['no_comensal6']		= $this->input->post('no_comensal06');
		$com06['nombre6']			= ucfirst($this->input->post('nombre06'));
		$com06['id_alimento6']		= $this->input->post('id_alimento06');
		$com06['nota_alimento6']	= ucfirst($this->input->post('nota_alimento06'));
		$com06['id_bebida6']		= $this->input->post('id_bebida06');
		$com06['nota_bebida6']		= ucfirst($this->input->post('nota_bebida06'));
		$com06['id_postre6']		= $this->input->post('id_postre06');
		$com06['nota_postre6']		= ucfirst($this->input->post('nota_postre06'));
		$com06['estado6']			= "Enviado";

		//Comensal 07
		$com07['no_orden7']			= $orden;
		$com07['fecha7']			= $this->input->post('fecha07');
		$com07['id_mesa7']			= $this->input->post('id_mesa07');
		$com07['no_comensal7']		= $this->input->post('no_comensal07');
		$com07['nombre7']			= ucfirst($this->input->post('nombre07'));
		$com07['id_alimento7']		= $this->input->post('id_alimento07');
		$com07['nota_alimento7']	= ucfirst($this->input->post('nota_alimento07'));
		$com07['id_bebida7']		= $this->input->post('id_bebida07');
		$com07['nota_bebida7']		= ucfirst($this->input->post('nota_bebida07'));
		$com07['id_postre7']		= $this->input->post('id_postre07');
		$com07['nota_postre7']		= ucfirst($this->input->post('nota_postre07'));
		$com07['estado7']			= "Enviado";

		//Comensal 08
		$com08['no_orden8']			= $orden;
		$com08['fecha8']			= $this->input->post('fecha08');
		$com08['id_mesa8']			= $this->input->post('id_mesa08');
		$com08['no_comensal8']		= $this->input->post('no_comensal08');
		$com08['nombre8']			= ucfirst($this->input->post('nombre08'));
		$com08['id_alimento8']		= $this->input->post('id_alimento08');
		$com08['nota_alimento8']	= ucfirst($this->input->post('nota_alimento08'));
		$com08['id_bebida8']		= $this->input->post('id_bebida08');
		$com08['nota_bebida8']		= ucfirst($this->input->post('nota_bebida08'));
		$com08['id_postre8']		= $this->input->post('id_postre08');
		$com08['nota_postre8']		= ucfirst($this->input->post('nota_postre08'));
		$com08['estado8']			= "Enviado";				

		//Comensal 09
		$com09['no_orden9']			= $orden;
		$com09['fecha9']			= $this->input->post('fecha09');
		$com09['id_mesa9']			= $this->input->post('id_mesa09');
		$com09['no_comensal9']		= $this->input->post('no_comensal09');
		$com09['nombre9']			= ucfirst($this->input->post('nombre09'));
		$com09['id_alimento9']		= $this->input->post('id_alimento09');
		$com09['nota_alimento9']	= ucfirst($this->input->post('nota_alimento09'));
		$com09['id_bebida9']		= $this->input->post('id_bebida09');
		$com09['nota_bebida9']		= ucfirst($this->input->post('nota_bebida09'));
		$com09['id_postre9']		= $this->input->post('id_postre09');
		$com09['nota_postre9']		= ucfirst($this->input->post('nota_postre09'));
		$com09['estado9']			= "Enviado";

		//Comensal 10
		$com10['no_orden10']			= $orden;
		$com10['fecha10']			= $this->input->post('fecha10');
		$com10['id_mesa10']			= $this->input->post('id_mesa10');
		$com10['no_comensal10']		= $this->input->post('no_comensal10');
		$com10['nombre10']			= ucfirst($this->input->post('nombre10'));
		$com10['id_alimento10']		= $this->input->post('id_alimento10');
		$com10['nota_alimento10']	= ucfirst($this->input->post('nota_alimento10'));
		$com10['id_bebida10']		= $this->input->post('id_bebida10');
		$com10['nota_bebida10']		= ucfirst($this->input->post('nota_bebida10'));
		$com10['id_postre10']		= $this->input->post('id_postre10');
		$com10['nota_postre10']		= ucfirst($this->input->post('nota_postre10'));
		$com10['estado10']			= "Enviado";

		$this->Atender_model->insertaDiez($com01, $com02, $com03, $com04, $com05, 
			$com06, $com07, $com08, $com09, $com10);
		
		$id_mesa = $this->input->post('id_mesa1');
		$estado = "Ocupada";
		$this->Atender_model->cambiarEstado($id_mesa, $estado);

		$this->load->view('Mesero/Layout_mesero/mHeader');
		$this->load->view('Mesero/Layout_mesero/mMenu', $data);
		$this->load->view('Mesero/Layout_mesero/mPanel');
		$this->load->view('Mesero/Atender/success');
		$this->load->view('Mesero/Layout_mesero/mFooter');
	}

}
?>