<?php
class Asignacion extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Asignaciones_model');
    }

    public function index(){
        $data['asignacion'] = $this->Asignaciones_model->get_asignaciones();
        $data['sucursal'] = $this->Asignaciones_model->get_sucursales();
        $data['admin'] = $this->Asignaciones_model->get_admins();

        $data['asignacion_c'] = $this->Asignaciones_model->get_asignaciones_caja();
        $data['sucursal_c'] = $this->Asignaciones_model->get_sucursales_c();
        $data['caja'] = $this->Asignaciones_model->get_cajas();
        $data['title1'] = "Listado de Asignaciones de Administradores";
        $data['title2'] = "Listado de Asignaciones de Cajas";
        $data['mensaje'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Asignacion/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Asignacion/index', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function add_Asignacion(){
        $data['title'] = "Nueva Asignación";
        $data['sucursal'] = $this->Asignaciones_model->get_sucu_pendientes();
        $data['admin'] = $this->Asignaciones_model->get_admin_pendientes();
        $data['error'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Asignacion/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Asignacion/create', $data);
        $this->load->view('Master/Layout_master/mFooter');        
    }

    public function nuevaAsignacion(){
        $id_sucursal  = $this->input->post('id_sucursal');
        $id_usuario   = $this->input->post('id_usuario');
        $status = "Realizada";
        
        $this->Asignaciones_model->insert_asignacion($id_sucursal, $id_usuario);
        $this->Asignaciones_model->update_sucursal($id_sucursal, $status);
        $this->Asignaciones_model->update_usuarios($id_usuario, $status);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Asignacion/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Asignacion/success');
        $this->load->view('Master/Layout_master/mFooter'); 
    }

    public function nuevaAsignacion_Caja(){
        $id_sucursal  = $this->input->post('id_sucursal');
        $id_caja   = $this->input->post('id_caja');
        $status = "Realizada";
        
        $this->Asignaciones_model->insert_asignacion_caja($id_sucursal, $id_caja);
        $this->Asignaciones_model->update_sucursal_c($id_sucursal, $status);
        $this->Asignaciones_model->update_cajas($id_caja, $status);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Asignacion/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Asignacion/success');
        $this->load->view('Master/Layout_master/mFooter'); 
    }

    public function add_Asignacion1(){
        $data['title'] = "Nueva Asignación";
        $data['sucursal1'] = $this->Asignaciones_model->get_sucu_pendientes1();
        $data['caja'] = $this->Asignaciones_model->get_caja_pendientes();
        $data['error'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Asignacion/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Asignacion/create1', $data);
        $this->load->view('Master/Layout_master/mFooter');        
    }

    public function deleteAUS(){
        $id_asignacion  = $this->uri->segment(4);
        $id_sucursal    = $this->uri->segment(5);
        $id_usuario     = $this->uri->segment(6);
        $status         = "Pendiente";
        
        if (empty($id_asignacion)){
            show_404();
        }

        $this->Asignaciones_model->delete_asignacion($id_asignacion);
        $this->Asignaciones_model->update_sucursal($id_sucursal, $status);
        $this->Asignaciones_model->update_usuarios($id_usuario, $status);
        redirect( base_url() . 'Master/Asignacion');
    }

    public function deleteASC(){
        $id_asignacion  = $this->uri->segment(4);
        $id_sucursal    = $this->uri->segment(5);
        $id_caja     = $this->uri->segment(6);
        $status         = "Pendiente";
        
        if (empty($id_asignacion)){
            show_404();
        }

        $this->Asignaciones_model->delete_asignacion_c($id_asignacion);
        $this->Asignaciones_model->update_sucursal_c($id_sucursal, $status);
        $this->Asignaciones_model->update_cajas($id_caja, $status);
        redirect( base_url() . 'Master/Asignacion');
    }
}
