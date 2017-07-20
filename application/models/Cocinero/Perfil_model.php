<?php
class Perfil_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_detalle_usuario($id_usuario){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id_usuario', $id_usuario);
        $query = $this->db->get();
        return $query->row_array();
    }

}
