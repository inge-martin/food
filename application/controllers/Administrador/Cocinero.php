<?php
class Cocinero extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Administrador/Cocinero_model');
    }

    public function index(){
        $data['cocinero']   = $this->Cocinero_model->get_cocinero();
        $data['title']      = "Listado de Cocineros";
        $data['mensaje']    = ' ';

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Cocinero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Cocinero/index', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }

    public function add_Cocinero(){
        $data['title'] = "Nuevo Cocinero";
        $data['error'] = ' ';

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Cocinero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Cocinero/create', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');        
    }

    public function nuevoCocinero(){
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
        $paramAdmin['id_rol']       = 3;
        $paramAdmin['asignacion']   = 'Realizada';
        
        //subes imagen
        $config['upload_path'] = './assets/fotos/cocinero/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        //si al subir imagen manda error 
        //regresas el error al formulario
        if (!$this->upload->do_upload("fotografia")) {
            $data['title'] = "Nuevo Cocinero";
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Administrador/Layout_admin/mHeader');
            $this->load->view('Administrador/Cocinero/mMenu');
            $this->load->view('Administrador/Layout_admin/mPanel');
            $this->load->view('Administrador/Cocinero/create', $data);
            $this->load->view('Administrador/Layout_admin/mFooter'); 
        }else{
            $file_info = $this->upload->data();
            $paramAdmin['fotografia']   = $file_info['file_name'];
            $id_user = $this->Cocinero_model->insert_admin($paramAdmin);

            $parametros['id_sucursal']  = $this->session->userdata('s_id_sucursal');
            $parametros['id_usuario']   = $id_user;
            $this->Cocinero_model->insert_asignacion($parametros);

            $this->load->view('Administrador/Layout_admin/mHeader');
            $this->load->view('Administrador/Cocinero/mMenu');
            $this->load->view('Administrador/Layout_admin/mPanel');
            $this->load->view('Administrador/Cocinero/success');
            $this->load->view('Administrador/Layout_admin/mFooter'); 
        }   
    }

    public function edit_Cocinero(){
        $id_usuario = $this->uri->segment(4);
        
        if (empty($id_usuario)){
            show_404();
        }
        
        $data['title'] = "Edición de Cocinero";
        $data['admin'] = $this->Cocinero_model->get_detalle_usuario($id_usuario);

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Cocinero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Cocinero/edit', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }

    public function editarCocinero(){
        $parametros['id_usuario']   = $this->input->post('id_usuario');
        $parametros['nombre']       = ucwords($this->input->post('nombre'));
        $parametros['paterno']      = ucwords($this->input->post('paterno'));
        $parametros['materno']      = ucwords($this->input->post('materno'));
        $parametros['nacimiento']   = $this->input->post('nacimiento');
        $parametros['email']        = $this->input->post('email');
        $parametros['telefono']     = $this->input->post('telefono');

        $this->Cocinero_model->edit_admin($parametros);   

        redirect( base_url() . 'Administrador/Cocinero/');
    }

    public function view_Cocinero(){
        $id_usuario = $this->uri->segment(4);
        
        if (empty($id_usuario)){
            show_404();
        }

        $data['admin'] = $this->Cocinero_model->get_detalle_usuario($id_usuario);
        $data['title'] = "Ver Cocinero";

        $this->load->view('Administrador/Layout_admin/mHeader');
        $this->load->view('Administrador/Cocinero/mMenu');
        $this->load->view('Administrador/Layout_admin/mPanel');
        $this->load->view('Administrador/Cocinero/view', $data);
        $this->load->view('Administrador/Layout_admin/mFooter');
    }
}
