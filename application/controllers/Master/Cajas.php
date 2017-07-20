<?php
class Cajas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Cajas_model');
    }

    public function index(){
        $data['cajas'] = $this->Cajas_model->get_cajas();
        $data['total'] = $this->Cajas_model->get_total();
        $data['title'] = "Listado de Cajas";
        $data['mensaje'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Cajas/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Cajas/index', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function nuevaCaja(){
        $param['asignacion_caja'] = "Pendiente";
        $param['nombre'] = ucwords($this->input->post('nombre'));
        $this->Cajas_model->insert_caja($param);
        redirect(base_url(). 'Master/Cajas');
    }   
}

