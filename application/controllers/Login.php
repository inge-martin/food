<?php

Class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index(){
		$data['mensaje'] = ' ';
		$this->load->view('vLogin',$data);
	}

	public function validar(){
		$user = $this->input->post('txtUsuario');
		$pass = md5($this->input->post('txtContrasena'));

		$resultado = $this->Login_model->validar($user, $pass);

		if($resultado == 0){
			$data['mensaje'] = "Tu usuario o contraseña son incorrectos.";
			$this->load->view('vLogin',$data);
		}elseif($resultado == 1){
			$this->Login_model->master($user, $pass);
			redirect(base_url(). 'Master/Inicio');
		}else{
			$user_rol = $this->Login_model->users($user, $pass);
			switch ($user_rol) {
				case 2:
					redirect(base_url(). 'Administrador/Inicio');
					break;
				case 3:
					redirect(base_url(). 'Cocinero/Inicio');
					break;
				case 4:
					redirect(base_url(). 'Mesero/Inicio');
					break;
				case 5:
					redirect(base_url(). 'Cantinero/Inicio');
					break;
				case 6:
					redirect(base_url(). 'Cajero/Inicio');
					break;
				default:
					$data['mensaje'] = "<b>¡Aun no estas asignado a una sucursal!</b><br>Consulta al administrador Master.";
					$this->load->view('vLogin',$data);				
					break;
			}//switch
		}//else
	}//fin

	public function logout(){
		$this->session->unset_userdata('vars_sesion');
		$this->session->sess_destroy();
		redirect(base_url()."Login");
	}
}
?>