<?php
class Mesero extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Mesero_model');
    }

    public function index(){
        $data['mesero']  = $this->Mesero_model->get_mesero();
        $data['title']      = "Listado de Meseros";
        $data['mensaje']    = ' ';

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Mesero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Mesero/index', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }

    public function add_Mesero(){
        $data['title'] = "Nuevo Mesero";
        $data['error'] = ' ';

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Mesero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Mesero/create', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');        
    }

    public function nuevoMesero(){
        $paramAdmin['nombre']       = ucwords($this->input->post('nombre'));
        $paramAdmin['paterno']      = ucwords($this->input->post('paterno'));
        $paramAdmin['materno']      = ucwords($this->input->post('materno'));
        $paramAdmin['sexo']         = ucwords($this->input->post('sexo'));
        $paramAdmin['nacimiento']   = $this->input->post('nacimiento');
        $paramAdmin['email']        = $this->input->post('email');
        $paramAdmin['telefono']     = $this->input->post('telefono');
        $paramAdmin['fotografia']   = $this->input->post('fotografia');
        $paramAdmin['usuario']      = $this->input->post('usuario');
        $paramAdmin['contrasena']   = md5($this->input->post('contrasena'));
        $paramAdmin['id_rol']       = 4;
        $paramAdmin['asignacion']   = 'Realizada';
        
        //subes imagen
        $config['upload_path'] = './assets/fotos/mesero/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        //si al subir imagen manda error 
        //regresas el error al formulario
        if (!$this->upload->do_upload("fotografia")) {
            $data['title'] = "Nuevo Mesero";
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Administrador/Layout_admin/mHeader');
            $this->load->view('Administrador/Mesero/mMenu');
            $this->load->view('Administrador/Layout_admin/mPanel');
            $this->load->view('Administrador/Mesero/create', $data);
            $this->load->view('Administrador/Layout_admin/mFooter'); 
        }else{
            $file_info = $this->upload->data();
            $paramAdmin['fotografia']   = $file_info['file_name'];
            $id_user = $this->Mesero_model->insert_admin($paramAdmin);

            $parametros['id_sucursal']  = $this->session->userdata('s_id_sucursal');
            $parametros['id_usuario']   = $id_user;
            $this->Mesero_model->insert_asignacion($parametros);

            $this->load->view('Administrador/Layout_admin/mHeader');
            $this->load->view('Administrador/Mesero/mMenu');
            $this->load->view('Administrador/Layout_admin/mPanel');
            $this->load->view('Administrador/Mesero/success');
            $this->load->view('Administrador/Layout_admin/mFooter'); 
        }   
    }

    public function edit_Mesero(){
        $id_usuario = $this->uri->segment(4);
        
        if (empty($id_usuario)){
            show_404();
        }
        
        $data['title'] = "Edición de Mesero";
        $data['admin'] = $this->Mesero_model->get_detalle_usuario($id_usuario);

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Mesero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Mesero/edit', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }

    public function editarMesero(){
        $parametros['id_usuario']   = $this->input->post('id_usuario');
        $parametros['nombre']       = ucwords($this->input->post('nombre'));
        $parametros['paterno']      = ucwords($this->input->post('paterno'));
        $parametros['materno']      = ucwords($this->input->post('materno'));
        $parametros['nacimiento']   = $this->input->post('nacimiento');
        $parametros['email']        = $this->input->post('email');
        $parametros['telefono']     = $this->input->post('telefono');

        $this->Mesero_model->edit_admin($parametros);   

        redirect( base_url() . 'Administrador/Mesero/');
    }

    public function view_Mesero(){
        $id_usuario = $this->uri->segment(4);
        
        if (empty($id_usuario)){
            show_404();
        }

        $data['admin'] = $this->Mesero_model->get_detalle_usuario($id_usuario);
        $data['title'] = "Ver Mesero";

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Mesero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Mesero/view', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }
}
