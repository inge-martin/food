<?php
class Alimentos extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Master/Alimentos_model');
    }

    public function index(){
        $data['alimentos'] = $this->Alimentos_model->get_alimento();
        $data['title'] = "Listado de Alimentos";
        $data['mensaje'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Alimentos/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Alimentos/index', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function add_Alimentos(){
        $data['title'] = "Nuevo Alimento";
        $data['error'] = ' ';

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Alimentos/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Alimentos/create', $data);
        $this->load->view('Master/Layout_master/mFooter');        
    }

    public function nuevoAlimento(){
        $paramAlimento['nombre']       = ucwords($this->input->post('nombre'));
        $paramAlimento['descripcion']  = ucfirst($this->input->post('descripcion'));
        $paramAlimento['precio']       = $this->input->post('precio');
        $paramAlimento['fotografia']   = $this->input->post('fotografia');
        
        //subes imagen
        $config['upload_path'] = './assets/fotos/alimentos/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);

        //si al subir imagen manda error 
        //regresas el error al formulario
        if (!$this->upload->do_upload("fotografia")) {
            $data['title'] = "Nuevo Alimento";
            $data['error'] = $this->upload->display_errors('<p>', '</p>');
            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Alimentos/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Alimentos/create', $data);
            $this->load->view('Master/Layout_master/mFooter'); 
        }else{
            $file_info = $this->upload->data();
            $paramAlimento['fotografia']   = $file_info['file_name'];
            $this->Alimentos_model->insert_alimento($paramAlimento);

            $this->load->view('Master/Layout_master/mHeader');
            $this->load->view('Master/Alimentos/mMenu');
            $this->load->view('Master/Layout_master/mPanel');
            $this->load->view('Master/Alimentos/success');
            $this->load->view('Master/Layout_master/mFooter'); 
        }   
    }

    public function edit_Alimento(){
        $id_alimento = $this->uri->segment(4);
        
        if (empty($id_alimento)){
            show_404();
        }
        
        $data['title'] = "Edición de Alimento";
        $data['alimento'] = $this->Alimentos_model->get_detalle_alimento($id_alimento);

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Alimentos/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Alimentos/edit', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function editarAlimento(){
        $parametros['id_alimento']  = $this->input->post('id_alimento');
        $parametros['nombre']       = ucwords($this->input->post('nombre'));
        $parametros['descripcion']  = ucfirst($this->input->post('descripcion'));
        $parametros['precio']       = $this->input->post('precio');

        $this->Alimentos_model->edit_alimento($parametros);   

        redirect( base_url() . 'Master/Alimentos/');
    }

    public function view_Alimentos(){
        $id_alimento = $this->uri->segment(4);
        
        if (empty($id_alimento)){
            show_404();
        }

        $data['alimento'] = $this->Alimentos_model->get_detalle_alimento($id_alimento);
        $data['title'] = "Ver Alimento";

        $this->load->view('Master/Layout_master/mHeader');
        $this->load->view('Master/Alimentos/mMenu');
        $this->load->view('Master/Layout_master/mPanel');
        $this->load->view('Master/Alimentos/view', $data);
        $this->load->view('Master/Layout_master/mFooter');
    }

    public function delete(){
        $id_alimento = $this->uri->segment(4);
        
        if (empty($id_alimento)){
            show_404();
        }

        $this->Alimentos_model->delete_alimento($id_alimento);        
        redirect( base_url() . 'Master/Alimentos');
    }
}
