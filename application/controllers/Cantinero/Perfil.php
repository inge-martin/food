<?php
class Perfil extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Cantinero/Perfil_model');
    }

    public function index(){
        $id_usuario = $this->session->userdata('s_id_usuario');

        $data['perfil'] = $this->Perfil_model->get_detalle_usuario($id_usuario);

        $this->load->view('Cantinero/Layout_cantinero/mHeader');
        $this->load->view('Cantinero/Layout_cantinero/mMenu');
        $this->load->view('Cantinero/Layout_cantinero/mPanel');
        $this->load->view('Cantinero/Perfil/view', $data);
        $this->load->view('Cantinero/Layout_cantinero/mFooter');
    }
}
