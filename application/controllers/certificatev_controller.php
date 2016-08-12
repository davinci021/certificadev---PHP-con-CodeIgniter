<?php

class certificatev_controller extends CI_Controller{
    
    public function index() {
        
        $data = array('titulo' => 'Home');
        $this->load->view('/guest/head', $data);
        $this->load->view('/guest/header');
        $this->load->view('/guest/aside');
        $this->load->helper('date');
        $this->load->helper('form');
        $this->load->model('certificatev_model');
        $dato=$this->certificatev_model->mostrar();
        $this->load->view('/guest/content');
        $this->load->view('certificatev-listadoPostulaciones', compact('dato'));
        $this->load->view('/guest/contentfin');
        $this->load->view('/guest/footer');
    }
    
    public function mostrar(){
        $this->load->helper('form');
        $this->load->model('certificatev_model');
        $dato=$this->certificatev_model->mostrar();
        $this->load->view('certificatev-listadoPostulaciones', compact('dato'));
    }
    
    public function eliminar(){
        $this->load->helper('url');
        $this->load->helper('form');
        $msj = "";
        $this->load->model('certificatev_model');
        $id_postulacion=$this->input->post('id_postulacion');
        if($this->certificatev_model->eliminar($id_postulacion)){
            $msj="<strong>Postulacion eliminada</strong>";
        }else{ 
            $mensaje="<strong>Error al eliminar</strong>";}
            $dato = $this->certificatev_model->mostrar();
            $data = array('titulo' => 'Agregar Postulacion');
            $this->load->view('/guest/head', $data);
            $this->load->view('/guest/header');
            $this->load->view('/guest/aside');
            $this->load->view('/guest/content');
            $this->load->view('certificatev-listadoPostulaciones', compact('dato','mensaje'));  
            $this->load->view('/guest/contentfin');
            $this->load->view('/guest/footer');
    }
    
    public function agregar() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('rut', 'Rut', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido_paterno', 'Apellido_paterno', 'required');
        $this->form_validation->set_rules('apellido_materno', 'Apellido_meterno', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('comuna', 'Comuna', 'required');
        if ($this->form_validation->run() === true) {
            $id_postulacion = $this->input->post('id_postulacion');
            $rut = $this->input->post('rut');
            $nombre = $this->input->post('nombre');
            $apellido_paterno = $this->input->post('apellido_paterno');
            $apellido_materno = $this->input->post('apellido_materno');
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $sexo = $this->input->post('sexo');
            $telefono = $this->input->post('telefono');
            $email = $this->input->post('email');
            $direccion = $this->input->post('direccion');
            $comuna = $this->input->post('comuna');
            $educacion = $this->input->post('educacion');
            $anos_experiencia = $this->input->post('anos_experiencia');
            $modalidad = $this->input->post('modalidad');
            $curso = $this->input->post('curso');
            $id_solicitud = $this->input->post('id_solicitud');
            $mensaje = "";
            $this->load->model('certificatev_model');
            if ($this->certificatev_model->agregar($id_postulacion, $rut, $nombre, $apellido_paterno, $apellido_materno, $fecha_nacimiento,
                    $sexo, $telefono, $email, $direccion, $comuna, $educacion, $anos_experiencia, $modalidad, $curso, $id_solicitud)) {
                $mensaje = "Postulacion agregada";
            } else {
                $mensaje = "Error al  agregar";
            }
            $data = array('titulo' => 'Agregar Postulacion');
            $this->load->view('/guest/head', $data);
            $this->load->view('/guest/header');
            $this->load->view('/guest/aside');
            $this->load->view('/guest/content');
            $this->load->view('certificatev-postulacion', compact('mensaje'));
            $this->load->view('/guest/contentfin');
            $this->load->view('/guest/footer');
        } else {
            $data = array('titulo' => 'Home');
            $this->load->view('/guest/head', $data);
            $this->load->view('/guest/header');
            $this->load->view('/guest/aside');
            $this->load->view('/guest/content');
            $this->load->view('certificatev-postulacion');
            $this->load->view('/guest/contentfin');
            $this->load->view('/guest/footer');
        }
    }
    
    public function reenviar(){
        $this->load->helper('url');
        $this->load->helper('form');
        $id_postulacion = $this->input->post('id_postulacion');
        $rut = $this->input->post('rut');
        $nombre = $this->input->post('nombre');
        $apellido_paterno = $this->input->post('apellido_paterno');
        $apellido_materno = $this->input->post('apellido_materno');
        $fecha_nacimiento = $this->input->post('fecha_nacimiento');
        $sexo = $this->input->post('sexo');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $comuna = $this->input->post('comuna');
        $educacion = $this->input->post('educacion');
        $anos_experiencia = $this->input->post('anos_experiencia');
        $modalidad = $this->input->post('modalidad');
        $curso = $this->input->post('curso');
        $id_solicitud = $this->input->post('id_solicitud');
        
        $data = array('titulo' => 'Home');
        $this->load->view('/guest/head', $data);
        $this->load->view('/guest/header');
        $this->load->view('/guest/aside');
        $this->load->helper('date');
        $this->load->view('/guest/content');
        $this->load->view('certificatev-editarPostulacion', compact('id_postulacion','rut','nombre','apellido_paterno','apellido_materno',
                        'fecha_nacimiento', 'sexo', 'telefono', 'email','direccion','comuna','educacion',
                        'anos_experiencia','modalidad','curso', 'id_solicitud'));
        $this->load->view('/guest/contentfin');
        $this->load->view('/guest/footer');
    }
    
    public function editar() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('rut', 'Rut', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido_paterno', 'Apellido_paterno', 'required');
        $this->form_validation->set_rules('apellido_materno', 'Apellido_meterno', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('direccion', 'Direccion', 'required');
        $this->form_validation->set_rules('comuna', 'Comuna', 'required');
        if ($this->form_validation->run() === true) {
            $id_postulacion = $this->input->post('id_postulacion');
            $rut = $this->input->post('rut');
            $nombre = $this->input->post('nombre');
            $apellido_paterno = $this->input->post('apellido_paterno');
            $apellido_materno = $this->input->post('apellido_materno');
            $fecha_nacimiento = $this->input->post('fecha_nacimiento');
            $sexo = $this->input->post('sexo');
            $telefono = $this->input->post('telefono');
            $email = $this->input->post('email');
            $direccion = $this->input->post('direccion');
            $comuna = $this->input->post('comuna');
            $educacion = $this->input->post('educacion');
            $anos_experiencia = $this->input->post('anos_experiencia');
            $modalidad = $this->input->post('modalidad');
            $curso = $this->input->post('curso');
            $id_solicitud = $this->input->post('id_solicitud');
            $mensaje = "";
            $this->load->model('certificatev_model');
            if ($this->certificatev_model->editar($id_postulacion, $rut, $nombre, $apellido_paterno, $apellido_materno, $fecha_nacimiento,
                    $sexo, $telefono, $email, $direccion, $comuna, $educacion, $anos_experiencia, $modalidad, $curso, $id_solicitud)) {
                $mensaje = "Postulacion modificada";
            } else {
                $mensaje = "Error al  agregar";
            }
            
            $data = array('titulo' => 'Home');
            $this->load->view('/guest/head', $data);
            $this->load->view('/guest/header');
            $this->load->view('/guest/aside');
            $this->load->helper('date');
            $dato = $this->certificatev_model->mostrar();
            $this->load->view('/guest/content');
            $this->load->view('certificatev-listadoPostulaciones', compact('dato','mensaje'));
            $this->load->view('/guest/contentfin');
            $this->load->view('/guest/footer');
            
            } else {
            $data = array('titulo' => 'Home');
            $this->load->view('/guest/head', $data);
            $this->load->view('/guest/header');
            $this->load->view('/guest/aside');
            $this->load->helper('date');
            $this->load->view('/guest/content');
            $this->load->view('certificatev-listadoPostulaciones');
            $this->load->view('/guest/contentfin');
            $this->load->view('/guest/footer');
        }
    }
    
    public function login() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data = array('titulo' => 'Home');
        $this->load->view('/guest/head', $data);
        $this->load->view('/guest/header');
        $this->load->view('/guest/content');
        $this->load->view('certificatev-sesion');
        $this->load->view('/guest/contentfin');
        $this->load->view('/guest/footer');
    }
    
    public function checkearLogin() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('rut', 'Rut', 'required');
        $this->form_validation->set_rules('clave','Clave','required');
        if ($this->form_validation->run()=== true) {
            $rut = $this->input->post('rut');
            $clave = $this->input->post('clave');
            $this->load->model('certificatev_model');
            if ($this->certificatev_model->login($rut, $clave)) {
                $data = array('titulo' => 'Home');
                $this->load->view('/guest/head', $data);
                $this->load->view('/guest/header');
                $this->load->view('/guest/aside');
                $this->load->helper('date');
                $this->load->helper('form');
                $this->load->model('certificatev_model');
                $dato=$this->certificatev_model->mostrar();
                $this->load->view('/guest/content');
                $this->load->view('certificatev-listadoPostulaciones', compact('dato'));
                $this->load->view('/guest/contentfin');
                $this->load->view('/guest/footer');
            }else{
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data = array('titulo' => 'Login');
                $this->load->view('/guest/head', $data);
                $this->load->view('/guest/header');
                $this->load->view('/guest/content');
                $this->load->view('certificatev-sesion');
                $this->load->view('/guest/contentfin');
                $this->load->view('/guest/footer');
            }
        }else{
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data = array('titulo' => 'Login');
                $this->load->view('/guest/head', $data);
                $this->load->view('/guest/header');
                $this->load->view('/guest/content');
                $this->load->view('certificatev-sesion');
                $this->load->view('/guest/contentfin');
                $this->load->view('/guest/footer');
        }
    }
    
    public function ver(){
        $this->load->helper('url');
        $this->load->helper('form');
        $id_postulacion = $this->input->post('id_postulacion');
        $rut = $this->input->post('rut');
        $nombre = $this->input->post('nombre');
        $apellido_paterno = $this->input->post('apellido_paterno');
        $apellido_materno = $this->input->post('apellido_materno');
        $fecha_nacimiento = $this->input->post('fecha_nacimiento');
        $sexo = $this->input->post('sexo');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        $comuna = $this->input->post('comuna');
        $educacion = $this->input->post('educacion');
        $anos_experiencia = $this->input->post('anos_experiencia');
        $modalidad = $this->input->post('modalidad');
        $curso = $this->input->post('curso');
        $id_solicitud = $this->input->post('id_solicitud');
        
        $data = array('titulo' => 'Home');
        $this->load->view('/guest/head', $data);
        $this->load->view('/guest/header');
        $this->load->view('/guest/aside');
        $this->load->helper('date');
        $this->load->view('/guest/content');
        $this->load->view('certificatev-detallePostulacion', compact('id_postulacion','rut','nombre','apellido_paterno','apellido_materno',
                        'fecha_nacimiento', 'sexo', 'telefono', 'email','direccion','comuna','educacion',
                        'anos_experiencia','modalidad','curso', 'id_solicitud'));
        $this->load->view('/guest/contentfin');
        $this->load->view('/guest/footer');
    }
    
    public function agregarUser(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('rut','Rut','required');
        $this->form_validation->set_rules('nombre','Nombre','required');
        $this->form_validation->set_rules('apellido_paterno','Apellido Paterno','required');
        $this->form_validation->set_rules('apellido_materno','Apellido Materno','required');
        $this->form_validation->set_rules('clave','Clave','required');
       
        
        if ($this->form_validation->run()==true) {
            //si los datos estan correctos
            $rut=  $this->input->post('rut');
            $nombre=  $this->input->post('nombre');
            $apellido_paterno=  $this->input->post('apellido_paterno');
            $apellido_materno=  $this->input->post('apellido_materno');
            $clave=  $this->input->post('clave');
            //cargamos la clase del modelo correspondiente
            $this->load->model('certificatev_model');
            $mensaje="";
           if( $this->certificatev_model->insertar($rut,$nombre,$apellido_paterno,$apellido_materno,$clave)){
               $mensaje="datos insertados";
               $this->load->helper('url');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data = array('titulo' => 'Login');
                $this->load->view('/guest/head', $data);
                $this->load->view('/guest/header');
                $this->load->view('/guest/content');
                $this->load->view('certificatev-sesion',$mensaje);
                $this->load->view('/guest/contentfin');
                $this->load->view('/guest/footer');
           }else{
               $mensaje="error de datos";
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data = array('titulo' => 'Login');
                $this->load->view('/guest/head', $data);
                $this->load->view('/guest/header');
                $this->load->view('/guest/content');
                $this->load->view('certificatev-sesion',$mensaje);
                $this->load->view('/guest/contentfin');
                $this->load->view('/guest/footer');
           }
        }
    }
    
    
    
    public function verestado() {
        $this->load->helper('form');
        $this->form_validation->set_rules('rut','Rut','required|numeric');
        if ($this->form_validation->run()===true) {
            $rut=  $this->input->post('rut');
            $this->load->model('certificatev_model');
            $dato=$this->certificatev_model->verestado($rut);
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data = array('titulo' => 'Ver Estado');
                $this->load->view('/guest/head', $data);
                $this->load->view('/guest/header');
                $this->load->view('/guest/aside');
                $this->load->view('/guest/content');
            $this->load->view('certificatev-estadoPostulacion', compact('dato'));
            $this->load->view('/guest/contentfin');
                $this->load->view('/guest/footer');
        }else{
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data = array('titulo' => 'Ver Estado');
                $this->load->view('/guest/head', $data);
                $this->load->view('/guest/header');
                $this->load->view('/guest/aside');
                $this->load->view('/guest/content');
            $this->load->view('certificatev-estadoPostulacion');
            $this->load->view('/guest/contentfin');
                $this->load->view('/guest/footer');
        }
        
    }
}
