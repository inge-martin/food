<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Mesero/Perfil_model');
        $this->load->model('Mesero/Inicio_model');
    }

    public function index(){
        $id_usuario = $this->session->userdata('s_id_usuario');
        $data['num']            = $this->Inicio_model->get_num_listas();

        $data['perfil'] = $this->Perfil_model->get_detalle_usuario($id_usuario);

        $this->load->view('Mesero/Layout_mesero/mHeader');
        $this->load->view('Mesero/Layout_mesero/mMenu', $data);
        $this->load->view('Mesero/Layout_mesero/mPanel');
        $this->load->view('Mesero/Perfil/view', $data);
        $this->load->view('Mesero/Layout_mesero/mFooter');
    }
}
