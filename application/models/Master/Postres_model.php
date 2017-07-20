<?php
class Postres_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_alimento(){
        $this->db->select('*');
        $this->db->from('postres');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_detalle_alimento($id_postre){
        $this->db->select('*');
        $this->db->from('postres');
        $this->db->where('id_postre', $id_postre);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_alimento($paramPostre){
        $postres = array(
            'nombre'        => $paramPostre['nombre'],
            'descripcion'   => $paramPostre['descripcion'],
            'precio'        => $paramPostre['precio'],
            'fotografia'    => $paramPostre['fotografia']
            );
        $this->db->insert('postres', $postres);
        return $this->db->insert_id();
    }

    public function edit_alimento($parametros){
        $id_postre    = $parametros['id_postre'];
        $postres      = array(
            'nombre'        => $parametros['nombre'],
            'descripcion'   => $parametros['descripcion'],
            'precio'        => $parametros['precio']
            );
        $this->db->where('id_postre', $id_postre);
        return $this->db->update('postres', $postres);                
    }

    public function delete_alimento($id_postre){
        $this->db->where('id_postre', $id_postre);
        return $this->db->delete('postres');
    }


}
