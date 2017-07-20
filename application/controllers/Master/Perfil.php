<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Administrador_model');
    }

    public function index(){
        $id_usuario = $this->session->userdata('s_id_usuario');

        $data['admin'] = $this->Administrador_model->get_detalle_usuario($id_usuario);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Layout_master/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Perfil/view', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }
}
