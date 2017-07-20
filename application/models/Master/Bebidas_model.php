<?php
class Bebidas_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_bebida(){
        $this->db->select('*');
        $this->db->from('bebidas');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_detalle_bebida($id_bebida){
        $this->db->select('*');
        $this->db->from('bebidas');
        $this->db->where('id_bebida', $id_bebida);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_bebida($paramBebida){
        $bebidas = array(
            'nombre'        => $paramBebida['nombre'],
            'descripcion'   => $paramBebida['descripcion'],
            'precio'        => $paramBebida['precio'],
            'fotografia'    => $paramBebida['fotografia']
            );
        $this->db->insert('bebidas', $bebidas);
        return $this->db->insert_id();
    }

    public function edit_bebida($parametros){
        $id_bebida    = $parametros['id_bebida'];
        $bebidas      = array(
            'nombre'        => $parametros['nombre'],
            'descripcion'   => $parametros['descripcion'],
            'precio'        => $parametros['precio']
            );
        $this->db->where('id_bebida', $id_bebida);
        return $this->db->update('bebidas', $bebidas);                
    }

    public function delete_bebida($id_bebida){
        $this->db->where('id_bebida', $id_bebida);
        return $this->db->delete('bebidas');
    }


}
