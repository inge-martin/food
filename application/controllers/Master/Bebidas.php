<?php
class Bebidas extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Bebidas_model');
    }

    public function index(){
        $data['bebidas'] = $this->Bebidas_model->get_bebida();
        $data['title'] = "Listado de Bebidas";
        $data['mensaje'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Bebidas/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Bebidas/index', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function add_Bebidas(){
        $data['title'] = "Nueva Bebida";
        $data['error'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Bebidas/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Bebidas/create', $data);
        $this->load->view('Master/Layout_master/mFooter');        
    }

    public function nuevaBebida(){
        $paramBebida['nombre']       = ucwords($this->input->post('nombre'));
        $paramBebida['descripcion']  = ucfirst($this->input->post('descripcion'));
        $paramBebida['precio']       = $this->input->post('precio');
        $paramBebida['fotografia']   = $this->input->post('fotografia');
        
        //subes imagen
        $config['upload_path'] = './assets/fotos/bebidas/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        //si al subir imagen manda error 
        //regresas el error al formulario
        if (!$this->upload->do_upload("fotografia")) {
            $data['title'] = "Nuevo Bebida";
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Bebidas/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Bebidas/create', $data);
            $this->load->view('Master/Layout_master/mFooter'); 
        }else{
            $file_info = $this->upload->data();
            $paramBebida['fotografia']   = $file_info['file_name'];
            $this->Bebidas_model->insert_bebida($paramBebida);

            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Bebidas/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Bebidas/success');
            $this->load->view('Master/Layout_master/mFooter'); 
        }   
    }

    public function edit_Bebida(){
        $id_bebida = $this->uri->segment(4);
        
        if (empty($id_bebida)){
            show_404();
        }
        
        $data['title'] = "Edición de Bebida";
        $data['bebida'] = $this->Bebidas_model->get_detalle_bebida($id_bebida);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Bebidas/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Bebidas/edit', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function editarBebida(){
        $parametros['id_bebida']  = $this->input->post('id_bebida');
        $parametros['nombre']       = ucwords($this->input->post('nombre'));
        $parametros['descripcion']  = ucfirst($this->input->post('descripcion'));
        $parametros['precio']       = $this->input->post('precio');

        $this->Bebidas_model->edit_bebida($parametros);   

        redirect( base_url() . 'Master/Bebidas/');
    }

    public function view_Bebidas(){
        $id_bebida = $this->uri->segment(4);
        
        if (empty($id_bebida)){
            show_404();
        }

        $data['bebida'] = $this->Bebidas_model->get_detalle_bebida($id_bebida);
        $data['title'] = "Ver Bebida";

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Bebidas/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Bebidas/view', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function delete(){
        $id_bebida = $this->uri->segment(4);
        
        if (empty($id_bebida)){
            show_404();
        }

        $this->Bebidas_model->delete_bebida($id_bebida);        
        redirect( base_url() . 'Master/Bebidas');
    }
}
