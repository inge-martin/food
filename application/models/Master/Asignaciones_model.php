<?php
class Asignaciones_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    //llena el index
    public function get_asignaciones(){
        $this->db->select('aus.id_asignacion, s.id_sucursal, s.nombre sucursal, u.id_usuario, u.nombre, u.paterno, u.materno, r.nombre rol');
        $this->db->from('asignacion_usuario_sucursal aus, sucursal s, 
            usuarios u, rol_usuarios r');
        $this->db->where('s.id_sucursal = aus.id_sucursal');
        $this->db->where('aus.id_usuario = u.id_usuario');
        $this->db->where('u.id_rol = r.id_rol');
        $this->db->where('u.id_rol = 2');
        $query = $this->db->get();
        return $query->result_array();
    }

    //llena las sucursales pendientes
    public function get_sucursales(){
        $this->db->select('*');
        $this->db->from('sucursal');
        $this->db->where('asignacion_admin', 'Pendiente');
        $query = $this->db->get();
        return $query->result_array();
    }

    //llena las sucursales pendientes
    public function get_admins(){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id_rol', '2');
        $this->db->where('asignacion_admin', 'Pendiente');
        $query = $this->db->get();
        return $query->result_array();
    }

    //llena el combo 
    public function get_sucu_pendientes(){
        $data = array();
        $this->db->select('*');
        $this->db->from('sucursal');
        $this->db->where('asignacion_admin', 'Pendiente');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    //llena el combo 
    public function get_sucu_pendientes1(){
        $data = array();
        $this->db->select('*');
        $this->db->from('sucursal');
        $this->db->where('asignacion_caja', 'Pendiente');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }    

    //llena el combo 
    public function get_caja_pendientes(){
        $data = array();
        $this->db->select('*');
        $this->db->from('cajas');
        $this->db->where('asignacion_caja', 'Pendiente');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    //llena el combo 
    public function get_admin_pendientes(){
        $data = array();
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id_rol', '2');
        $this->db->where('asignacion_admin', 'Pendiente');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function insert_asignacion($id_sucursal, $id_usuario){
        $insert      = array(
            'id_sucursal'   => $id_sucursal,
            'id_usuario'    => $id_usuario
            );
        $this->db->insert('asignacion_usuario_sucursal', $insert);
        return $this->db->insert_id();
    }

    public function update_sucursal($id_sucursal, $status){
        $this->db->set('asignacion_admin', $status);
        $this->db->where('id_sucursal', $id_sucursal);
        return $this->db->update('sucursal');                
    }

    public function update_usuarios($id_usuario, $status){
        $this->db->set('asignacion_admin', $status);
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->update('usuarios');                
    }

    public function delete_asignacion($id_asignacion){
        $this->db->where('id_asignacion', $id_asignacion);
        return $this->db->delete('asignacion_usuario_sucursal');
    }

    //----------------------------------------------------------

        //Asignacion caja

        //llena el index
    public function get_asignaciones_caja(){
        $this->db->select('a_sc.id_asignacion, a_sc.id_sucursal, a_sc.id_caja, s.nombre sucursal, c.nombre caja');
        $this->db->from('asignacion_sucursal_caja a_sc, sucursal s, cajas c');
        $this->db->where('a_sc.id_sucursal = s.id_sucursal');
        $this->db->where('a_sc.id_caja = c.id_caja');
        $query = $this->db->get();
        return $query->result_array();
    }

    //llena las sucursales pendientes
    public function get_sucursales_c(){
        $this->db->select('*');
        $this->db->from('sucursal');
        $this->db->where('asignacion_caja', 'Pendiente');
        $query = $this->db->get();
        return $query->result_array();
    }

    //llena las sucursales pendientes
    public function get_cajas(){
        $this->db->select('*');
        $this->db->from('cajas');
        $this->db->where('asignacion_caja', 'Pendiente');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_sucursal_c($id_sucursal, $status){
        $this->db->set('asignacion_caja', $status);
        $this->db->where('id_sucursal', $id_sucursal);
        return $this->db->update('sucursal');                
    }

    public function update_cajas($id_caja, $status){
        $this->db->set('asignacion_caja', $status);
        $this->db->where('id_caja', $id_caja);
        return $this->db->update('cajas');                
    }

    public function delete_asignacion_c($id_asignacion){
        $this->db->where('id_asignacion', $id_asignacion);
        return $this->db->delete('asignacion_sucursal_caja');
    }

    public function insert_asignacion_caja($id_sucursal, $id_caja){
        $insert      = array(
            'id_sucursal'   => $id_sucursal,
            'id_caja'       => $id_caja
            );
        $this->db->insert('asignacion_sucursal_caja', $insert);
        return $this->db->insert_id();
    }

}
