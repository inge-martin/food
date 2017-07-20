<?php
class Alimentos_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_alimento(){
        $this->db->select('*');
        $this->db->from('alimentos');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_detalle_alimento($id_alimento){
        $this->db->select('*');
        $this->db->from('alimentos');
        $this->db->where('id_alimento', $id_alimento);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_alimento($paramAlimento){
        $alimentos = array(
            'nombre'        => $paramAlimento['nombre'],
            'descripcion'   => $paramAlimento['descripcion'],
            'precio'        => $paramAlimento['precio'],
            'fotografia'    => $paramAlimento['fotografia']
            );
        $this->db->insert('alimentos', $alimentos);
        return $this->db->insert_id();
    }

    public function edit_alimento($parametros){
        $id_alimento    = $parametros['id_alimento'];
        $alimentos      = array(
            'nombre'        => $parametros['nombre'],
            'descripcion'   => $parametros['descripcion'],
            'precio'        => $parametros['precio']
            );
        $this->db->where('id_alimento', $id_alimento);
        return $this->db->update('alimentos', $alimentos);                
    }

    public function delete_alimento($id_alimento){
        $this->db->where('id_alimento', $id_alimento);
        return $this->db->delete('alimentos');
    }


}
