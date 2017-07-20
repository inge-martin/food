<?php
class Administrador extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Administrador_model');
    }

    public function index(){
        $data['admin'] = $this->Administrador_model->get_admin();
        $data['title'] = "Listado de Administradores";
        $data['mensaje'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Administradores/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Administradores/index', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function add_Administradores(){
        $data['title'] = "Nuevo Administrador";
        $data['error'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Administradores/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Administradores/create', $data);
        $this->load->view('Master/Layout_master/mFooter');        
    }

    public function nuevoAdmin(){
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
        $paramAdmin['id_rol']       = 2;
        $paramAdmin['asignacion']   = 'Pendiente';
        
        //subes imagen
        $config['upload_path'] = './assets/fotos/admin/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        //si al subir imagen manda error 
        //regresas el error al formulario
        if (!$this->upload->do_upload("fotografia")) {
            $data['title'] = "Nuevo Administrador";
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Administradores/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Administradores/create', $data);
            $this->load->view('Master/Layout_master/mFooter'); 
        }else{
            $file_info = $this->upload->data();
            $paramAdmin['fotografia']   = $file_info['file_name'];
            $this->Administrador_model->insert_admin($paramAdmin);

            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Administradores/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Administradores/success');
            $this->load->view('Master/Layout_master/mFooter'); 
        }   
    }

    public function edit_Administradores(){
        $id_usuario = $this->uri->segment(4);
        
        if (empty($id_usuario)){
            show_404();
        }
        
        $data['title'] = "Edición de Administradores";
        $data['admin'] = $this->Administrador_model->get_detalle_usuario($id_usuario);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Administradores/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Administradores/edit', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function editarAdministradores(){
        $parametros['id_usuario']   = $this->input->post('id_usuario');
        $parametros['nombre']       = ucwords($this->input->post('nombre'));
        $parametros['paterno']      = ucwords($this->input->post('paterno'));
        $parametros['materno']      = ucwords($this->input->post('materno'));
        $parametros['nacimiento']   = $this->input->post('nacimiento');
        $parametros['email']        = $this->input->post('email');
        $parametros['telefono']     = $this->input->post('telefono');

        $this->Administrador_model->edit_admin($parametros);   

        redirect( base_url() . 'Master/Administrador/');
    }

    public function view_Administrador(){
        $id_usuario = $this->uri->segment(4);
        
        if (empty($id_usuario)){
            show_404();
        }

        $data['admin'] = $this->Administrador_model->get_detalle_usuario($id_usuario);
        $data['title'] = "Ver Administrador";

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Administradores/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Administradores/view', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }
}
