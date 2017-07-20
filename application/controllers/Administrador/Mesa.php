<?php
class Mesa extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Mesa_model');
    }

    public function index(){
        $id_sucursal        = $this->session->userdata('s_id_sucursal');
        $data['mesa']       = $this->Mesa_model->get_mesa($id_sucursal);
        $data['total']       = $this->Mesa_model->get_total($id_sucursal);
        $data['title']      = "Listado de Mesas";
        $data['mensaje']    = ' ';

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Mesa/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Mesa/index', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }

    public function nuevaMesa(){
        $param['id_sucursal']  = $this->session->userdata('s_id_sucursal');
        $param['nombre']  = $this->input->post('numero_mesa');
        $param['no_comensales']     = $this->input->post('comensal');
        $param['zona']         = $this->input->post('zona');
        $param['estado']         = "Disponible";

        $res = $this->Mesa_model->insert_mesa($param);
        if($res != 0){
            redirect(base_url(). 'Administrador/Mesa');
        }
    }

}