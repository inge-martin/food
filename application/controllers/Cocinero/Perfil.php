<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cocinero/Perfil_model');
    }

    public function index(){
        $id_usuario = $this->session->userdata('s_id_usuario');

        $data['perfil'] = $this->Perfil_model->get_detalle_usuario($id_usuario);

        $this->load->view('Cocinero/Layout_cocinero/mHeader');
        $this->load->view('Cocinero/Layout_cocinero/mMenu');
        $this->load->view('Cocinero/Layout_cocinero/mPanel');
        $this->load->view('Cocinero/Perfil/view', $data);
        $this->load->view('Cocinero/Layout_cocinero/mFooter');
    }
}
