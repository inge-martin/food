<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cajero/Perfil_model');
    }

    public function index(){
        $id_usuario = $this->session->userdata('s_id_usuario');

        $data['perfil'] = $this->Perfil_model->get_detalle_usuario($id_usuario);

        $this->load->view('Cajero/Layout_cajero/mHeader');
        $this->load->view('Cajero/Layout_cajero/mMenu');
        $this->load->view('Cajero/Layout_cajero/mPanel');
        $this->load->view('Cajero/Perfil/view', $data);
        $this->load->view('Cajero/Layout_cajero/mFooter');
    }
}
