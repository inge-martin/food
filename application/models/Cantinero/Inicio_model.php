<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function ocb_pendientes(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('s.nombre sucursal, oc.id_orden, oc.no_orden oc, m.nombre mesa, oc.no_comensal,
			oc.nombre comensal, b.nombre bebida, oc.nota_bebida detalle_b, oc.estado');
		$this->db->from('orden_consumo oc, sucursal s, mesas m, bebidas b');
		$this->db->where('m.id_sucursal = s.id_sucursal');
		$this->db->where('m.id_mesa = oc.id_mesa');
		$this->db->where('oc.id_bebida = b.id_bebida');
		$this->db->where('oc.estado' , 'A_Listo');
		$this->db->where('s.id_sucursal', $id_sucursal);
		$this->db->order_by('oc.no_orden', 'ASC');
		$this->db->order_by('oc.fecha', 'ASC');
		$this->db->order_by('oc.no_comensal', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function cambiarEstado($id_orden, $estado){
		$this->db->set('estado', $estado);
		$this->db->where('id_orden', $id_orden);
		return $this->db->update('orden_consumo');  
	}

}