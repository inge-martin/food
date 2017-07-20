<?php

Class Login_model extends CI_Model{

	public function validar($user, $pass){
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario', $user);
		$this->db->where('contrasena', $pass);
		$query = $this->db->get();

		if ($query->num_rows() != 0){
			$r = $query->row();
			return $r->id_rol;
		}else{
			return 0;
		}
	}

	public function master($user, $pass){
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario', $user);
		$this->db->where('contrasena', $pass);
		$query = $this->db->get();

		if ($query->num_rows() != 0){
			$r = $query->row();
			$sessions = array(
				's_id_usuario'		=> $r->id_usuario,
				's_nombre'			=> $r->nombre,
				's_paterno'			=> $r->paterno,
				's_materno'			=> $r->materno,
				's_fotografia'		=> $r->fotografia,
				's_usuario'			=> $r->usuario
				);
			$this->session->set_userdata($sessions);
			// return $r->id_rol;
		}
	}

	public function users($user, $pass){
		$this->db->select('u.id_usuario, u.id_rol, u.nombre, u.paterno,
	u.materno, u.fotografia, u.usuario, s.id_sucursal,
	s.nombre sucursal, c.id_caja, c.nombre caja');
		$this->db->from('usuarios u, asignacion_usuario_sucursal aus, sucursal s, asignacion_sucursal_caja asig, cajas c');
		$this->db->where('u.usuario', $user);
		$this->db->where('u.contrasena', $pass);
		$this->db->where('u.id_usuario = aus.id_usuario');
		$this->db->where('aus.id_sucursal = s.id_sucursal');
		$this->db->where('asig.id_sucursal = aus.id_sucursal');
		$this->db->where('asig.id_caja = c.id_caja');
		$query = $this->db->get();

		if ($query->num_rows() != 0){
			$r = $query->row();
			$sessions = array(
				's_id_usuario'		=> $r->id_usuario,
				's_nombre'			=> $r->nombre,
				's_paterno'			=> $r->paterno,
				's_materno'			=> $r->materno,
				's_fotografia'		=> $r->fotografia,
				's_usuario'			=> $r->usuario,
				's_id_sucursal'		=> $r->id_sucursal,
				's_sucursal'		=> $r->sucursal,
				's_id_caja'			=> $r->id_caja,
				's_caja'			=> $r->caja
				);
			$this->session->set_userdata($sessions);
			return $r->id_rol;
		}else{
			return 0;
		}
	}

// select u.id_usuario, u.id_rol, u.nombre, u.paterno,
// 	u.materno, u.fotografia, u.usuario, s.id_sucursal,
// 	s.nombre sucursal, c.id_caja, c.nombre caja
// 	from usuarios u, asignacion_usuario_sucursal aus, sucursal s, asignacion_sucursal_caja asig, cajas c
// 	where u.usuario = "victor"
// 	and  u.contrasena = "ffc150a160d37e92012c196b6af4160d"
// 	and  u.id_usuario = aus.id_usuario
// 	and  aus.id_sucursal = s.id_sucursal
//     and asig.id_sucursal = aus.id_sucursal
//     and asig.id_caja = c.id_caja

}
?>