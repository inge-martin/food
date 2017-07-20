<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function pagos_pendientes(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('p.id_pago,m.id_mesa, m.nombre mesa, p.no_orden oc, p.total');
		$this->db->from('pagos p, mesas m');
		$this->db->where('p.id_mesa = m.id_mesa');
		$this->db->where('p.estado', "Pendiente");
		$this->db->where('p.id_sucursal', $id_sucursal);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function pagos_detalles($id_pago){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('oc.no_orden oc, oc.id_mesa, m.nombre mesa, a.nombre alimento, a.precio a_precio, b.nombre bebida, pagos.id_pago, pagos.total,
			b.precio b_precio, p.nombre postre, p.precio p_precio');
		$this->db->from('orden_consumo oc, alimentos a, bebidas b, postres p, pagos, mesas m');
		$this->db->where('oc.id_alimento = a.id_alimento');
		$this->db->where('oc.id_bebida = b.id_bebida');
		$this->db->where('oc.id_postre = p.id_postre');
		$this->db->where('oc.id_mesa = m.id_mesa');
		$this->db->where('pagos.no_orden = oc.no_orden');
		$this->db->where('pagos.estado', "Pendiente");
		$this->db->where('pagos.id_pago', $id_pago);
		$this->db->where('pagos.id_sucursal', $id_sucursal);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function pagarOC($id_pago, $estado){
		$this->db->set('estado', $estado);
		$this->db->where('id_pago', $id_pago);
		return $this->db->update('pagos');  
	}

	public function CambiarEstado($id_mesa, $estatus){
		$this->db->set('estado', $estatus);
		$this->db->where('id_mesa', $id_mesa);
		return $this->db->update('mesas');  
	}

}