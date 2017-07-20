<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function oca_pendientes(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('s.nombre sucursal, oc.id_orden, oc.no_orden oc, m.nombre mesa, oc.no_comensal,
			oc.nombre comensal, a.nombre alimento, oc.nota_alimento detalle_a, oc.estado');
		$this->db->from('orden_consumo oc, sucursal s, mesas m, alimentos a');
		$this->db->where('m.id_sucursal = s.id_sucursal');
		$this->db->where('m.id_mesa = oc.id_mesa');
		$this->db->where('oc.id_alimento = a.id_alimento');
		$this->db->where('oc.estado' , 'Enviado');
		$this->db->where('s.id_sucursal', $id_sucursal);
		$this->db->order_by('oc.no_orden', 'ASC');
		$this->db->order_by('oc.fecha', 'ASC');
		$this->db->order_by('oc.no_comensal', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function ocp_pendientes(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('s.nombre sucursal, oc.id_orden, oc.no_orden oc, m.nombre mesa, oc.nombre comensal, p.nombre postre, oc.nota_postre detalle_p, oc.estado');
		$this->db->from('orden_consumo oc, sucursal s, mesas m, postres p');
		$this->db->where('m.id_sucursal = s.id_sucursal');
		$this->db->where('m.id_mesa = oc.id_mesa');
		$this->db->where('oc.id_postre = p.id_postre');
		$this->db->where('oc.estado' , 'C_Listo');
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