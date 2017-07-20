<?php

class Atender_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	//llena las mesas
	public function get_detalle($id_mesa){
		$this->db->select('id_mesa, id_sucursal, nombre, 
			no_comensales comensales, zona, estado');
		$this->db->from('mesas');
		$this->db->where('id_mesa', $id_mesa);
		$query = $this->db->get();
		return $query->row_array();
	}

	//llena el combo 
	public function get_alimentos(){
		$data = array();
		$this->db->select('*');
		$this->db->from('alimentos');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	//llena el combo 
	public function get_bebidas(){
		$data = array();
		$this->db->select('*');
		$this->db->from('bebidas');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	//llena el combo 
	public function get_postres(){
		$data = array();
		$this->db->select('*');
		$this->db->from('postres');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row){
				$data[] = $row;
			}
		}
		$query->free_result();
		return $data;
	}

	public function get_orden(){
		$this->db->select_max('no_orden');
		$this->db->from('orden_consumo');
		$query = $this->db->get();
		$r = $query->row();
		return $r->no_orden;
	}

	public function insertaDos($com01, $com02){
		$data = array(
			array(
				'no_orden'      => $com01['no_orden1'],
				'fecha'        	=> $com01['fecha1'],
				'id_mesa'    	=> $com01['id_mesa1'],
				'no_comensal'   => $com01['no_comensal1'],
				'nombre'       	=> $com01['nombre1'],
				'id_alimento'   => $com01['id_alimento1'],
				'nota_alimento'	=> $com01['nota_alimento1'],
				'id_bebida'     => $com01['id_bebida1'],
				'nota_bebida'  	=> $com01['nota_bebida1'],
				'id_postre'  	=> $com01['id_postre1'],
				'nota_postre'  	=> $com01['nota_postre1'],
				'estado'  		=> $com01['estado1']
				),
			array(
				'no_orden'      => $com02['no_orden2'],
				'fecha'        	=> $com02['fecha2'],
				'id_mesa'    	=> $com02['id_mesa2'],
				'no_comensal'   => $com02['no_comensal2'],
				'nombre'       	=> $com02['nombre2'],
				'id_alimento'   => $com02['id_alimento2'],
				'nota_alimento'	=> $com02['nota_alimento2'],
				'id_bebida'     => $com02['id_bebida2'],
				'nota_bebida'  	=> $com02['nota_bebida2'],
				'id_postre'  	=> $com02['id_postre2'],
				'nota_postre'  	=> $com02['nota_postre2'],
				'estado'  		=> $com02['estado2']
				)
			);
		$this->db->insert_batch('orden_consumo',$data);
	}

	public function insertaCuatro($com01, $com02, $com03, $com04){
		$data = array(
			array(
				'no_orden'      => $com01['no_orden1'],
				'fecha'        	=> $com01['fecha1'],
				'id_mesa'    	=> $com01['id_mesa1'],
				'no_comensal'   => $com01['no_comensal1'],
				'nombre'       	=> $com01['nombre1'],
				'id_alimento'   => $com01['id_alimento1'],
				'nota_alimento'	=> $com01['nota_alimento1'],
				'id_bebida'     => $com01['id_bebida1'],
				'nota_bebida'  	=> $com01['nota_bebida1'],
				'id_postre'  	=> $com01['id_postre1'],
				'nota_postre'  	=> $com01['nota_postre1'],
				'estado'  		=> $com01['estado1']
				),
			array(
				'no_orden'      => $com02['no_orden2'],
				'fecha'        	=> $com02['fecha2'],
				'id_mesa'    	=> $com02['id_mesa2'],
				'no_comensal'   => $com02['no_comensal2'],
				'nombre'       	=> $com02['nombre2'],
				'id_alimento'   => $com02['id_alimento2'],
				'nota_alimento'	=> $com02['nota_alimento2'],
				'id_bebida'     => $com02['id_bebida2'],
				'nota_bebida'  	=> $com02['nota_bebida2'],
				'id_postre'  	=> $com02['id_postre2'],
				'nota_postre'  	=> $com02['nota_postre2'],
				'estado'  		=> $com02['estado2']
				),
			array(
				'no_orden'      => $com03['no_orden3'],
				'fecha'        	=> $com03['fecha3'],
				'id_mesa'    	=> $com03['id_mesa3'],
				'no_comensal'   => $com03['no_comensal3'],
				'nombre'       	=> $com03['nombre3'],
				'id_alimento'   => $com03['id_alimento3'],
				'nota_alimento'	=> $com03['nota_alimento3'],
				'id_bebida'     => $com03['id_bebida3'],
				'nota_bebida'  	=> $com03['nota_bebida3'],
				'id_postre'  	=> $com03['id_postre3'],
				'nota_postre'  	=> $com03['nota_postre3'],
				'estado'  		=> $com03['estado3']
				),
			array(
				'no_orden'      => $com04['no_orden4'],
				'fecha'        	=> $com04['fecha4'],
				'id_mesa'    	=> $com04['id_mesa4'],
				'no_comensal'   => $com04['no_comensal4'],
				'nombre'       	=> $com04['nombre4'],
				'id_alimento'   => $com04['id_alimento4'],
				'nota_alimento'	=> $com04['nota_alimento4'],
				'id_bebida'     => $com04['id_bebida4'],
				'nota_bebida'  	=> $com04['nota_bebida4'],
				'id_postre'  	=> $com04['id_postre4'],
				'nota_postre'  	=> $com04['nota_postre4'],
				'estado'  		=> $com04['estado4']
				)
			);
		$this->db->insert_batch('orden_consumo',$data);
	}

	public function insertaSeis($com01, $com02, $com03, $com04, $com05, $com06){
		$data = array(
			array(
				'no_orden'      => $com01['no_orden1'],
				'fecha'        	=> $com01['fecha1'],
				'id_mesa'    	=> $com01['id_mesa1'],
				'no_comensal'   => $com01['no_comensal1'],
				'nombre'       	=> $com01['nombre1'],
				'id_alimento'   => $com01['id_alimento1'],
				'nota_alimento'	=> $com01['nota_alimento1'],
				'id_bebida'     => $com01['id_bebida1'],
				'nota_bebida'  	=> $com01['nota_bebida1'],
				'id_postre'  	=> $com01['id_postre1'],
				'nota_postre'  	=> $com01['nota_postre1'],
				'estado'  		=> $com01['estado1']
				),
			array(
				'no_orden'      => $com02['no_orden2'],
				'fecha'        	=> $com02['fecha2'],
				'id_mesa'    	=> $com02['id_mesa2'],
				'no_comensal'   => $com02['no_comensal2'],
				'nombre'       	=> $com02['nombre2'],
				'id_alimento'   => $com02['id_alimento2'],
				'nota_alimento'	=> $com02['nota_alimento2'],
				'id_bebida'     => $com02['id_bebida2'],
				'nota_bebida'  	=> $com02['nota_bebida2'],
				'id_postre'  	=> $com02['id_postre2'],
				'nota_postre'  	=> $com02['nota_postre2'],
				'estado'  		=> $com02['estado2']
				),
			array(
				'no_orden'      => $com03['no_orden3'],
				'fecha'        	=> $com03['fecha3'],
				'id_mesa'    	=> $com03['id_mesa3'],
				'no_comensal'   => $com03['no_comensal3'],
				'nombre'       	=> $com03['nombre3'],
				'id_alimento'   => $com03['id_alimento3'],
				'nota_alimento'	=> $com03['nota_alimento3'],
				'id_bebida'     => $com03['id_bebida3'],
				'nota_bebida'  	=> $com03['nota_bebida3'],
				'id_postre'  	=> $com03['id_postre3'],
				'nota_postre'  	=> $com03['nota_postre3'],
				'estado'  		=> $com03['estado3']
				),
			array(
				'no_orden'      => $com04['no_orden4'],
				'fecha'        	=> $com04['fecha4'],
				'id_mesa'    	=> $com04['id_mesa4'],
				'no_comensal'   => $com04['no_comensal4'],
				'nombre'       	=> $com04['nombre4'],
				'id_alimento'   => $com04['id_alimento4'],
				'nota_alimento'	=> $com04['nota_alimento4'],
				'id_bebida'     => $com04['id_bebida4'],
				'nota_bebida'  	=> $com04['nota_bebida4'],
				'id_postre'  	=> $com04['id_postre4'],
				'nota_postre'  	=> $com04['nota_postre4'],
				'estado'  		=> $com04['estado4']
				),
			array(
				'no_orden'      => $com05['no_orden5'],
				'fecha'        	=> $com05['fecha5'],
				'id_mesa'    	=> $com05['id_mesa5'],
				'no_comensal'   => $com05['no_comensal5'],
				'nombre'       	=> $com05['nombre5'],
				'id_alimento'   => $com05['id_alimento5'],
				'nota_alimento'	=> $com05['nota_alimento5'],
				'id_bebida'     => $com05['id_bebida5'],
				'nota_bebida'  	=> $com05['nota_bebida5'],
				'id_postre'  	=> $com05['id_postre5'],
				'nota_postre'  	=> $com05['nota_postre5'],
				'estado'  		=> $com05['estado5']
				),
			array(
				'no_orden'      => $com06['no_orden6'],
				'fecha'        	=> $com06['fecha6'],
				'id_mesa'    	=> $com06['id_mesa6'],
				'no_comensal'   => $com06['no_comensal6'],
				'nombre'       	=> $com06['nombre6'],
				'id_alimento'   => $com06['id_alimento6'],
				'nota_alimento'	=> $com06['nota_alimento6'],
				'id_bebida'     => $com06['id_bebida6'],
				'nota_bebida'  	=> $com06['nota_bebida6'],
				'id_postre'  	=> $com06['id_postre6'],
				'nota_postre'  	=> $com06['nota_postre6'],
				'estado'  		=> $com06['estado6']
				)
			);
		$this->db->insert_batch('orden_consumo',$data);
	}

	public function insertaOcho($com01, $com02, $com03, $com04, $com05, $com06, $com07, $com08){
		$data = array(
			array(
				'no_orden'      => $com01['no_orden1'],
				'fecha'        	=> $com01['fecha1'],
				'id_mesa'    	=> $com01['id_mesa1'],
				'no_comensal'   => $com01['no_comensal1'],
				'nombre'       	=> $com01['nombre1'],
				'id_alimento'   => $com01['id_alimento1'],
				'nota_alimento'	=> $com01['nota_alimento1'],
				'id_bebida'     => $com01['id_bebida1'],
				'nota_bebida'  	=> $com01['nota_bebida1'],
				'id_postre'  	=> $com01['id_postre1'],
				'nota_postre'  	=> $com01['nota_postre1'],
				'estado'  		=> $com01['estado1']
				),
			array(
				'no_orden'      => $com02['no_orden2'],
				'fecha'        	=> $com02['fecha2'],
				'id_mesa'    	=> $com02['id_mesa2'],
				'no_comensal'   => $com02['no_comensal2'],
				'nombre'       	=> $com02['nombre2'],
				'id_alimento'   => $com02['id_alimento2'],
				'nota_alimento'	=> $com02['nota_alimento2'],
				'id_bebida'     => $com02['id_bebida2'],
				'nota_bebida'  	=> $com02['nota_bebida2'],
				'id_postre'  	=> $com02['id_postre2'],
				'nota_postre'  	=> $com02['nota_postre2'],
				'estado'  		=> $com02['estado2']
				),
			array(
				'no_orden'      => $com03['no_orden3'],
				'fecha'        	=> $com03['fecha3'],
				'id_mesa'    	=> $com03['id_mesa3'],
				'no_comensal'   => $com03['no_comensal3'],
				'nombre'       	=> $com03['nombre3'],
				'id_alimento'   => $com03['id_alimento3'],
				'nota_alimento'	=> $com03['nota_alimento3'],
				'id_bebida'     => $com03['id_bebida3'],
				'nota_bebida'  	=> $com03['nota_bebida3'],
				'id_postre'  	=> $com03['id_postre3'],
				'nota_postre'  	=> $com03['nota_postre3'],
				'estado'  		=> $com03['estado3']
				),
			array(
				'no_orden'      => $com04['no_orden4'],
				'fecha'        	=> $com04['fecha4'],
				'id_mesa'    	=> $com04['id_mesa4'],
				'no_comensal'   => $com04['no_comensal4'],
				'nombre'       	=> $com04['nombre4'],
				'id_alimento'   => $com04['id_alimento4'],
				'nota_alimento'	=> $com04['nota_alimento4'],
				'id_bebida'     => $com04['id_bebida4'],
				'nota_bebida'  	=> $com04['nota_bebida4'],
				'id_postre'  	=> $com04['id_postre4'],
				'nota_postre'  	=> $com04['nota_postre4'],
				'estado'  		=> $com04['estado4']
				),
			array(
				'no_orden'      => $com05['no_orden5'],
				'fecha'        	=> $com05['fecha5'],
				'id_mesa'    	=> $com05['id_mesa5'],
				'no_comensal'   => $com05['no_comensal5'],
				'nombre'       	=> $com05['nombre5'],
				'id_alimento'   => $com05['id_alimento5'],
				'nota_alimento'	=> $com05['nota_alimento5'],
				'id_bebida'     => $com05['id_bebida5'],
				'nota_bebida'  	=> $com05['nota_bebida5'],
				'id_postre'  	=> $com05['id_postre5'],
				'nota_postre'  	=> $com05['nota_postre5'],
				'estado'  		=> $com05['estado5']
				),
			array(
				'no_orden'      => $com06['no_orden6'],
				'fecha'        	=> $com06['fecha6'],
				'id_mesa'    	=> $com06['id_mesa6'],
				'no_comensal'   => $com06['no_comensal6'],
				'nombre'       	=> $com06['nombre6'],
				'id_alimento'   => $com06['id_alimento6'],
				'nota_alimento'	=> $com06['nota_alimento6'],
				'id_bebida'     => $com06['id_bebida6'],
				'nota_bebida'  	=> $com06['nota_bebida6'],
				'id_postre'  	=> $com06['id_postre6'],
				'nota_postre'  	=> $com06['nota_postre6'],
				'estado'  		=> $com06['estado6']
				),
			array(
				'no_orden'      => $com07['no_orden7'],
				'fecha'        	=> $com07['fecha7'],
				'id_mesa'    	=> $com07['id_mesa7'],
				'no_comensal'   => $com07['no_comensal7'],
				'nombre'       	=> $com07['nombre7'],
				'id_alimento'   => $com07['id_alimento7'],
				'nota_alimento'	=> $com07['nota_alimento7'],
				'id_bebida'     => $com07['id_bebida7'],
				'nota_bebida'  	=> $com07['nota_bebida7'],
				'id_postre'  	=> $com07['id_postre7'],
				'nota_postre'  	=> $com07['nota_postre7'],
				'estado'  		=> $com07['estado7']
				),
			array(
				'no_orden'      => $com08['no_orden8'],
				'fecha'        	=> $com08['fecha8'],
				'id_mesa'    	=> $com08['id_mesa8'],
				'no_comensal'   => $com08['no_comensal8'],
				'nombre'       	=> $com08['nombre8'],
				'id_alimento'   => $com08['id_alimento8'],
				'nota_alimento'	=> $com08['nota_alimento8'],
				'id_bebida'     => $com08['id_bebida8'],
				'nota_bebida'  	=> $com08['nota_bebida8'],
				'id_postre'  	=> $com08['id_postre8'],
				'nota_postre'  	=> $com08['nota_postre8'],
				'estado'  		=> $com08['estado8']
				)
			);
		$this->db->insert_batch('orden_consumo',$data);
	}

	public function insertaDiez($com01, $com02, $com03, $com04, $com05, $com06, $com07, $com08, $com09, $com10){
		$data = array(
			array(
				'no_orden'      => $com01['no_orden1'],
				'fecha'        	=> $com01['fecha1'],
				'id_mesa'    	=> $com01['id_mesa1'],
				'no_comensal'   => $com01['no_comensal1'],
				'nombre'       	=> $com01['nombre1'],
				'id_alimento'   => $com01['id_alimento1'],
				'nota_alimento'	=> $com01['nota_alimento1'],
				'id_bebida'     => $com01['id_bebida1'],
				'nota_bebida'  	=> $com01['nota_bebida1'],
				'id_postre'  	=> $com01['id_postre1'],
				'nota_postre'  	=> $com01['nota_postre1'],
				'estado'  		=> $com01['estado1']
				),
			array(
				'no_orden'      => $com02['no_orden2'],
				'fecha'        	=> $com02['fecha2'],
				'id_mesa'    	=> $com02['id_mesa2'],
				'no_comensal'   => $com02['no_comensal2'],
				'nombre'       	=> $com02['nombre2'],
				'id_alimento'   => $com02['id_alimento2'],
				'nota_alimento'	=> $com02['nota_alimento2'],
				'id_bebida'     => $com02['id_bebida2'],
				'nota_bebida'  	=> $com02['nota_bebida2'],
				'id_postre'  	=> $com02['id_postre2'],
				'nota_postre'  	=> $com02['nota_postre2'],
				'estado'  		=> $com02['estado2']
				),
			array(
				'no_orden'      => $com03['no_orden3'],
				'fecha'        	=> $com03['fecha3'],
				'id_mesa'    	=> $com03['id_mesa3'],
				'no_comensal'   => $com03['no_comensal3'],
				'nombre'       	=> $com03['nombre3'],
				'id_alimento'   => $com03['id_alimento3'],
				'nota_alimento'	=> $com03['nota_alimento3'],
				'id_bebida'     => $com03['id_bebida3'],
				'nota_bebida'  	=> $com03['nota_bebida3'],
				'id_postre'  	=> $com03['id_postre3'],
				'nota_postre'  	=> $com03['nota_postre3'],
				'estado'  		=> $com03['estado3']
				),
			array(
				'no_orden'      => $com04['no_orden4'],
				'fecha'        	=> $com04['fecha4'],
				'id_mesa'    	=> $com04['id_mesa4'],
				'no_comensal'   => $com04['no_comensal4'],
				'nombre'       	=> $com04['nombre4'],
				'id_alimento'   => $com04['id_alimento4'],
				'nota_alimento'	=> $com04['nota_alimento4'],
				'id_bebida'     => $com04['id_bebida4'],
				'nota_bebida'  	=> $com04['nota_bebida4'],
				'id_postre'  	=> $com04['id_postre4'],
				'nota_postre'  	=> $com04['nota_postre4'],
				'estado'  		=> $com04['estado4']
				),
			array(
				'no_orden'      => $com05['no_orden5'],
				'fecha'        	=> $com05['fecha5'],
				'id_mesa'    	=> $com05['id_mesa5'],
				'no_comensal'   => $com05['no_comensal5'],
				'nombre'       	=> $com05['nombre5'],
				'id_alimento'   => $com05['id_alimento5'],
				'nota_alimento'	=> $com05['nota_alimento5'],
				'id_bebida'     => $com05['id_bebida5'],
				'nota_bebida'  	=> $com05['nota_bebida5'],
				'id_postre'  	=> $com05['id_postre5'],
				'nota_postre'  	=> $com05['nota_postre5'],
				'estado'  		=> $com05['estado5']
				),
			array(
				'no_orden'      => $com06['no_orden6'],
				'fecha'        	=> $com06['fecha6'],
				'id_mesa'    	=> $com06['id_mesa6'],
				'no_comensal'   => $com06['no_comensal6'],
				'nombre'       	=> $com06['nombre6'],
				'id_alimento'   => $com06['id_alimento6'],
				'nota_alimento'	=> $com06['nota_alimento6'],
				'id_bebida'     => $com06['id_bebida6'],
				'nota_bebida'  	=> $com06['nota_bebida6'],
				'id_postre'  	=> $com06['id_postre6'],
				'nota_postre'  	=> $com06['nota_postre6'],
				'estado'  		=> $com06['estado6']
				),
			array(
				'no_orden'      => $com07['no_orden7'],
				'fecha'        	=> $com07['fecha7'],
				'id_mesa'    	=> $com07['id_mesa7'],
				'no_comensal'   => $com07['no_comensal7'],
				'nombre'       	=> $com07['nombre7'],
				'id_alimento'   => $com07['id_alimento7'],
				'nota_alimento'	=> $com07['nota_alimento7'],
				'id_bebida'     => $com07['id_bebida7'],
				'nota_bebida'  	=> $com07['nota_bebida7'],
				'id_postre'  	=> $com07['id_postre7'],
				'nota_postre'  	=> $com07['nota_postre7'],
				'estado'  		=> $com07['estado7']
				),
			array(
				'no_orden'      => $com08['no_orden8'],
				'fecha'        	=> $com08['fecha8'],
				'id_mesa'    	=> $com08['id_mesa8'],
				'no_comensal'   => $com08['no_comensal8'],
				'nombre'       	=> $com08['nombre8'],
				'id_alimento'   => $com08['id_alimento8'],
				'nota_alimento'	=> $com08['nota_alimento8'],
				'id_bebida'     => $com08['id_bebida8'],
				'nota_bebida'  	=> $com08['nota_bebida8'],
				'id_postre'  	=> $com08['id_postre8'],
				'nota_postre'  	=> $com08['nota_postre8'],
				'estado'  		=> $com08['estado8']
				),
			array(
				'no_orden'      => $com09['no_orden9'],
				'fecha'        	=> $com09['fecha9'],
				'id_mesa'    	=> $com09['id_mesa9'],
				'no_comensal'   => $com09['no_comensal9'],
				'nombre'       	=> $com09['nombre9'],
				'id_alimento'   => $com09['id_alimento9'],
				'nota_alimento'	=> $com09['nota_alimento9'],
				'id_bebida'     => $com09['id_bebida9'],
				'nota_bebida'  	=> $com09['nota_bebida9'],
				'id_postre'  	=> $com09['id_postre9'],
				'nota_postre'  	=> $com09['nota_postre9'],
				'estado'  		=> $com09['estado9']
				),
			array(
				'no_orden'      => $com10['no_orden10'],
				'fecha'        	=> $com10['fecha10'],
				'id_mesa'    	=> $com10['id_mesa10'],
				'no_comensal'   => $com10['no_comensal10'],
				'nombre'       	=> $com10['nombre10'],
				'id_alimento'   => $com10['id_alimento10'],
				'nota_alimento'	=> $com10['nota_alimento10'],
				'id_bebida'     => $com10['id_bebida10'],
				'nota_bebida'  	=> $com10['nota_bebida10'],
				'id_postre'  	=> $com10['id_postre10'],
				'nota_postre'  	=> $com10['nota_postre10'],
				'estado'  		=> $com10['estado10']
				)
			);
		$this->db->insert_batch('orden_consumo',$data);
	}

	public function cambiarEstado($id_mesa, $estado){
		$this->db->set('estado', $estado);
		$this->db->where('id_mesa', $id_mesa);
		return $this->db->update('mesas');  
	}

}