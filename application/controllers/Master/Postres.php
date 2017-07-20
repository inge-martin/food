<?php
class Postres extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Postres_model');
    }

    public function index(){
        $data['postres'] = $this->Postres_model->get_alimento();
        $data['title'] = "Listado de Postres";
        $data['mensaje'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Postres/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Postres/index', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function add_Postres(){
        $data['title'] = "Nuevo Postre";
        $data['error'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Postres/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Postres/create', $data);
        $this->load->view('Master/Layout_master/mFooter');        
    }

    public function nuevoPostre(){
        $paramPostre['nombre']       = ucwords($this->input->post('nombre'));
        $paramPostre['descripcion']  = ucfirst($this->input->post('descripcion'));
        $paramPostre['precio']       = $this->input->post('precio');
        $paramPostre['fotografia']   = $this->input->post('fotografia');
        
        //subes imagen
        $config['upload_path'] = './assets/fotos/postres/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        //si al subir imagen manda error 
        //regresas el error al formulario
        if (!$this->upload->do_upload("fotografia")) {
            $data['title'] = "Nuevo Postre";
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Postres/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Postres/create', $data);
            $this->load->view('Master/Layout_master/mFooter'); 
        }else{
            $file_info = $this->upload->data();
            $paramPostre['fotografia']   = $file_info['file_name'];
            $this->Postres_model->insert_alimento($paramPostre);

            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Postres/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Postres/success');
            $this->load->view('Master/Layout_master/mFooter'); 
        }   
    }

    public function edit_Postre(){
        $id_postre = $this->uri->segment(4);
        
        if (empty($id_postre)){
            show_404();
        }
        
        $data['title'] = "Edición de Postre";
        $data['alimento'] = $this->Postres_model->get_detalle_alimento($id_postre);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Postres/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Postres/edit', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function editarPostre(){
        $parametros['id_postre']  = $this->input->post('id_postre');
        $parametros['nombre']       = ucwords($this->input->post('nombre'));
        $parametros['descripcion']  = ucfirst($this->input->post('descripcion'));
        $parametros['precio']       = $this->input->post('precio');

        $this->Postres_model->edit_alimento($parametros);   

        redirect( base_url() . 'Master/Postres/');
    }

    public function view_Postres(){
        $id_postre = $this->uri->segment(4);
        
        if (empty($id_postre)){
            show_404();
        }

        $data['postre'] = $this->Postres_model->get_detalle_alimento($id_postre);
        $data['title'] = "Ver Postre";

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Postres/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Postres/view', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function delete(){
        $id_postre = $this->uri->segment(4);
        
        if (empty($id_postre)){
            show_404();
        }

        $this->Postres_model->delete_alimento($id_postre);        
        redirect( base_url() . 'Master/Postres');
    }
}
