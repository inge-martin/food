<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Perfil_model');
    }

    public function index(){
        $id_usuario = $this->session->userdata('s_id_usuario');

        $data['perfil'] = $this->Perfil_model->get_detalle_usuario($id_usuario);

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Layout_admin/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Perfil/view', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }
}
