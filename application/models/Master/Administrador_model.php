<?php
class Administrador_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_admin(){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id_rol', '2');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_detalle_usuario($id_usuario){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id_usuario', $id_usuario);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function edit_admin($parametros){
        $id_usuario    = $parametros['id_usuario'];
        $administrador      = array(
            'nombre'        => $parametros['nombre'],
            'paterno'       => $parametros['paterno'],
            'materno'       => $parametros['materno'],
            'nacimiento'    => $parametros['nacimiento'],
            'email'        => $parametros['email'],
            'telefono'      => $parametros['telefono']
            );
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->update('usuarios', $administrador);                
    }

    public function insert_admin($paramAdmin){
        $administrador = array(
            'id_rol'        => $paramAdmin['id_rol'],
            'nombre'        => $paramAdmin['nombre'],
            'paterno'       => $paramAdmin['paterno'],
            'materno'       => $paramAdmin['materno'],
            'sexo'          => $paramAdmin['sexo'],
            'nacimiento'    => $paramAdmin['nacimiento'],
            'email'         => $paramAdmin['email'],
            'fotografia'    => $paramAdmin['fotografia'],
            'telefono'      => $paramAdmin['telefono'],
            'usuario'       => $paramAdmin['usuario'],
            'contrasena'    => $paramAdmin['contrasena'],
            'asignacion_admin'    => $paramAdmin['asignacion']
            );
        $this->db->insert('usuarios', $administrador);
        return $this->db->insert_id();
    }
}
