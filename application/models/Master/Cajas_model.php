<?php
class Cajas_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_cajas(){
        $this->db->select('*');
        $this->db->from('cajas');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_total(){
        $this->db->select('*');
        $this->db->from('cajas');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function insert_caja($param){
        $caja = array(
            'asignacion_caja'   => $param['asignacion_caja'],
            'nombre'            => $param['nombre']
            );
        $this->db->insert('cajas', $caja);
        return $this->db->insert_id();
    }
}
