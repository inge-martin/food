<?php
class Sucursal extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Sucursal_model');
    }

    public function index(){
        $data['sucursal'] = $this->Sucursal_model->get_sucursal();
        $data['title'] = "Listado de Sucursales";
        $data['mensaje'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Sucursal/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Sucursal/index', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function add_Sucursal(){
        $data['title'] = "Nueva Sucursal";

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Sucursal/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Sucursal/create', $data);
        $this->load->view('Master/Layout_master/mFooter');        
    }

    public function nuevaSucursal(){
        $parametros['nombre']         = ucwords($this->input->post('nombre'));
        $parametros['calle']          = ucwords($this->input->post('calle'));
        $parametros['colonia']        = ucwords($this->input->post('colonia'));
        $parametros['estado']         = ucwords($this->input->post('estado'));
        $parametros['telefono']       = $this->input->post('telefono');
        $parametros['numero']         = $this->input->post('numero');
        $parametros['asignacion_admin']   = "Pendiente";
        $parametros['asignacion_caja']    = "Pendiente";

        $result = $this->Sucursal_model->new_sucursal($parametros);

        if($result > 0){

            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Sucursal/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Sucursal/success');
            $this->load->view('Master/Layout_master/mFooter');
        }
    }

    public function edit_Sucursal(){
        $id_sucursal = $this->uri->segment(4);
        
        if (empty($id_sucursal)){
            show_404();
        }
        
        $data['title'] = "Edición de Sucursal";
        $data['sucursal'] = $this->Sucursal_model->get_detalle_sucursal($id_sucursal);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Sucursal/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Sucursal/edit', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function editarSucursal(){
        //Datos de sucursal
        $parametros['id_sucursal']    = $this->input->post('id_sucursal');
        $parametros['telefono']       = $this->input->post('telefono');
        $parametros['numero']         = $this->input->post('numero');
        $parametros['nombre']         = ucwords($this->input->post('nombre'));
        $parametros['calle']          = ucwords($this->input->post('calle'));
        $parametros['colonia']        = ucwords($this->input->post('colonia'));
        $parametros['estado']         = ucwords($this->input->post('estado'));

        $this->Sucursal_model->edit_sucursal($parametros);   

        redirect( base_url() . 'Master/Sucursal/');
    }
    
    public function delete(){
        $id_sucursal = $this->uri->segment(4);
        
        if (empty($id_sucursal)){
            show_404();
        }

        $this->Sucursal_model->delete_sucursal($id_sucursal);        
        redirect( base_url() . 'Master/Sucursal');
    }
}
