<?php
class Mesa_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_mesa($id_sucursal){
        $this->db->select('*');
        $this->db->from('mesas');
        $this->db->where('id_sucursal', $id_sucursal);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_total($id_sucursal){
        $this->db->select('*');
        $this->db->from('mesas');
        $this->db->where('id_sucursal', $id_sucursal);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function insert_mesa($param){
        $mesa = array(
            'id_sucursal'       => $param['id_sucursal'],
            'nombre'       => $param['nombre'],
            'no_comensales' => $param['no_comensales'],
            'zona'              => $param['zona'],
            'estado'              => $param['estado']
            );
        $this->db->insert('mesas', $mesa);
        return $this->db->insert_id();
    }

}
