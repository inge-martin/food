<?php

class Inicio_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function get_alimentos(){
		$query = $this->db->get('alimentos');
		return $query->num_rows();
	}

	public function get_bebidas(){
		$query = $this->db->get('bebidas');
		return $query->num_rows();
	}	

	public function get_postres(){
		$query = $this->db->get('postres');
		return $query->num_rows();
	}

	public function get_sucursal(){
		$query = $this->db->get('sucursal');
		return $query->num_rows();
	}
	
}