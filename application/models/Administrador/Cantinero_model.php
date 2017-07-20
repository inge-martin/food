<?php
class Cantinero_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_cantinero(){
        $id_sucursal = $this->session->userdata('s_id_sucursal');
        $this->db->select('s.id_sucursal, s.nombre suursal, r.nombre rol, 
            u.id_usuario, u.nombre, u.paterno, u.materno, u.sexo,
            u.nacimiento, u.email, u.fotografia, u.telefono, u.usuario');
        $this->db->from('asignacion_usuario_sucursal aus, usuarios u, sucursal s, rol_usuarios r');
        $this->db->where('s.id_sucursal = aus.id_sucursal');
        $this->db->where('aus.id_usuario = u.id_usuario');
        $this->db->where('u.id_rol = r.id_rol');
        $this->db->where('u.id_rol', '5');
        $this->db->where('aus.id_sucursal', $id_sucursal);
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

    public function insert_asignacion($parametros){
        $asignacion = array(
            'id_sucursal'   => $parametros['id_sucursal'],
            'id_usuario'    => $parametros['id_usuario']
            );
        $this->db->insert('asignacion_usuario_sucursal', $asignacion);
        return $this->db->insert_id();
    }
}
