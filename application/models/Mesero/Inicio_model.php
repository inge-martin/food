<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function get_disponibles(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('id_mesa, id_sucursal, nombre, 
			no_comensales comensales, zona, estado');
		$this->db->from('mesas');
		$this->db->where('estado', 'Disponible');
		$this->db->where('id_sucursal', $id_sucursal);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_ocupadas(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('id_mesa, id_sucursal, nombre, 
			no_comensales comensales, zona, estado');
		$this->db->from('mesas');
		$this->db->where('estado', 'Ocupada');
		$this->db->where('id_sucursal', $id_sucursal);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_oc_listas(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('s.nombre sucursal, m.nombre mesa, oc.id_orden, oc.no_orden orden, oc.nombre comensal, a.nombre alimento, b.nombre bebida, p.nombre postre ');
		$this->db->from('orden_consumo oc, alimentos a, bebidas b, postres p, mesas m, sucursal s');
		$this->db->where('oc.id_alimento = a.id_alimento');
		$this->db->where('oc.id_bebida = b.id_bebida');
		$this->db->where('oc.id_postre = p.id_postre');
		$this->db->where('oc.id_mesa = m.id_mesa');
		$this->db->where('oc.estado', 'Listo');
		$this->db->where('m.id_sucursal = s.id_sucursal');
		$this->db->where('s.id_sucursal', $id_sucursal);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_num_listas(){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('s.nombre sucursal, m.nombre mesa, oc.id_orden, oc.no_orden orden, oc.nombre comensal, a.nombre alimento, b.nombre bebida, p.nombre postre ');
		$this->db->from('orden_consumo oc, alimentos a, bebidas b, postres p, mesas m, sucursal s');
		$this->db->where('oc.id_alimento = a.id_alimento');
		$this->db->where('oc.id_bebida = b.id_bebida');
		$this->db->where('oc.id_postre = p.id_postre');
		$this->db->where('oc.id_mesa = m.id_mesa');
		$this->db->where('oc.estado', 'Listo');
		$this->db->where('m.id_sucursal = s.id_sucursal');
		$this->db->where('s.id_sucursal', $id_sucursal);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function getOrden($id_mesa){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('MAX(no_orden) oc');
		$this->db->from('orden_consumo oc, sucursal s, mesas m');
		$this->db->where('m.id_sucursal = s.id_sucursal');
		$this->db->where('oc.id_mesa = m.id_mesa');
		$this->db->where('s.id_sucursal', $id_sucursal);
		$this->db->where('m.id_mesa', $id_mesa);
		$query = $this->db->get();
		$r = $query->row();
		return $r->oc;
	}

	public function get_estado($no_orden){
		$this->db->select('id_orden, no_orden, estado');
		$this->db->from('orden_consumo');
		$this->db->where('no_orden', $no_orden);
		$query = $this->db->get();
		$r = $query->row();
		return $r->estado;
	}

	public function get_detalles($id_mesa, $oc){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('m.id_mesa, m.nombre mesa, oc.id_orden, oc.no_orden orden, oc.fecha, oc.no_comensal, oc.nombre comensal, oc.no_comensal, a.nombre alimento, b.nombre bebida, p.nombre postre, oc.estado');
		$this->db->from('orden_consumo oc, alimentos a, bebidas b, postres p, mesas m, sucursal s');
		$this->db->where('oc.id_alimento = a.id_alimento');
		$this->db->where('oc.id_bebida = b.id_bebida');
		$this->db->where('oc.id_postre = p.id_postre');
		$this->db->where('oc.id_mesa = m.id_mesa');
		$this->db->where('oc.estado !=', 'Finalizada');
		$this->db->where('m.id_sucursal = s.id_sucursal');
		$this->db->where('s.id_sucursal', $id_sucursal);
		$this->db->where('oc.id_mesa', $id_mesa);
		$this->db->where('oc.no_orden', $oc);
		$this->db->order_by('oc.no_comensal', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function cambiarEstado($id_orden, $estado){
		$this->db->set('estado', $estado);
		$this->db->where('id_orden', $id_orden);
		return $this->db->update('orden_consumo');  
	}

	public function finalizar_orden($no_orden, $estado){
		$this->db->set('estado', $estado);
		$this->db->where('no_orden', $no_orden);
		return $this->db->update('orden_consumo');  
	}

	public function totalAlimento($no_orden){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('SUM(a.precio) as total_alimento');
		$this->db->from('orden_consumo oc, alimentos a');
		$this->db->where('oc.id_alimento = a.id_alimento');
		$this->db->where('oc.no_orden', $no_orden);
		$query = $this->db->get();
		$r = $query->row();
		return $r->total_alimento;
	}

	public function totalBebida($no_orden){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('SUM(b.precio) as total_bebida');
		$this->db->from('orden_consumo oc, bebidas b');
		$this->db->where('oc.id_bebida = b.id_bebida');
		$this->db->where('oc.no_orden', $no_orden);
		$query = $this->db->get();
		$r = $query->row();
		return $r->total_bebida;
	}

	public function totalPostre($no_orden){
		$id_sucursal = $this->session->userdata('s_id_sucursal');
		$this->db->select('SUM(p.precio) as total_postre');
		$this->db->from('orden_consumo oc, postres p');
		$this->db->where('oc.id_postre = p.id_postre');
		$this->db->where('oc.no_orden', $no_orden);
		$query = $this->db->get();
		$r = $query->row();
		return $r->total_postre;
	}		
	
	public function generaPago($pago){
		$pago = array(
			'id_sucursal'	=> $pago['id_sucursal'],
			'id_mesa'       => $pago['id_mesa'],
			'id_caja'       => $pago['id_caja'],
			'no_orden'      => $pago['no_orden'],
			'total'         => $pago['total'],
			'estado'    	=> $pago['estatus']
			);
		$this->db->insert('pagos', $pago);
		return $this->db->insert_id();
	}

}