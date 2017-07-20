<?php
class Sucursal_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_sucursal(){
        $query = $this->db->get('sucursal');
        return $query->result_array();
    }

    public function get_detalle_sucursal($id_sucursal){
        $this->db->select('*');
        $this->db->from('sucursal');
        $this->db->where('id_sucursal', $id_sucursal);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function new_sucursal($parametros){
        $sucursal = array(
            'nombre'    => $parametros['nombre'],
            'telefono'  => $parametros['telefono'],
            'calle'     => $parametros['calle'],
            'numero'    => $parametros['numero'],
            'colonia'   => $parametros['colonia'],
            'estado'    => $parametros['estado'],
            'asignacion_admin'    => $parametros['asignacion_admin'],
            'asignacion_caja'     => $parametros['asignacion_caja']
            );
        $this->db->insert('sucursal',$sucursal);
        return $this->db->insert_id();
    }

    public function edit_sucursal($parametros){
        $id_sucursal    = $parametros['id_sucursal'];
        $sucursal       = array(
            'nombre'    => $parametros['nombre'],
            'telefono'  => $parametros['telefono'],
            'calle'     => $parametros['calle'],
            'numero'    => $parametros['numero'],
            'colonia'   => $parametros['colonia'],
            'estado'    => $parametros['estado']
            );
        $this->db->where('id_sucursal', $id_sucursal);
        return $this->db->update('sucursal', $sucursal);                
    }

    public function delete_sucursal($id_sucursal){
        $this->db->where('id_sucursal', $id_sucursal);
        return $this->db->delete('sucursal');
    }
}
