<?php

class certificatev_model extends CI_Model {
    public function _construct() {
        parent::CI_Model;
    } //comentario
    
    public function login($rut, $clave) {
        $this->db->select('rut, clave','id_tipo_usuario');
        $this->db->from('usuario');
        $this->db->where('rut', $rut);
        $this->db->where('clave', $clave);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        }else{
            return false;
        }
    }
    
    public function verestado($rut) {
        $this->db->select('id_solicitud');
        $this->db->from('postulacion');
        $this->db->where('rut', $rut);
        $query = $this->db->get();
        return $query;
    }
    
    public function mostrar() {
        return $this->db->get('postulacion');
    }
        
    public function eliminar($id_postulacion){
      return $this->db->delete('postulacion',array('id_postulacion'=>$id_postulacion));
    }
    
    public function agregar($id_postulacion, $rut,$nombre,$apellido_paterno,$apellido_materno,
                        $fecha_nacimiento, $sexo, $telefono, $email, $direccion,
                        $comuna, $educacion, $anos_experiencia, $modalidad,
                        $curso,$id_solicitud){
        $dato=array('id_postulacion'=>$id_postulacion,
            'rut'=>$rut,
            'nombre'=>$nombre,
            'apellido_paterno'=>$apellido_paterno,
            'apellido_materno'=>$apellido_materno,
            'fecha_nacimiento'=>$fecha_nacimiento,
            'sexo'=>$sexo,
            'telefono'=>$telefono,
            'email'=>$email,
            'direccion'=>$direccion,
            'comuna'=>$comuna,
            'educacion'=>$educacion,
            'anos_experiencia'=>$anos_experiencia,
            'modalidad'=>$modalidad,
            'curso'=>$curso,
            'id_solicitud'=>$id_solicitud);
        return $this->db->insert('postulacion',$dato);
    }
    
    public function editar($id_postulacion, $rut,$nombre,$apellido_paterno,$apellido_materno,
                        $fecha_nacimiento, $sexo, $telefono, $email, $direccion,
                        $comuna, $educacion, $anos_experiencia, $modalidad,
                        $curso,$id_solicitud){
        $dato = array('rut'=>$rut,
            'nombre'=>$nombre,
            'apellido_paterno'=>$apellido_paterno,
            'apellido_materno'=>$apellido_materno,
            'fecha_nacimiento'=>$fecha_nacimiento,
            'sexo'=>$sexo,
            'telefono'=>$telefono,
            'email'=>$email,
            'direccion'=>$direccion,
            'comuna'=>$comuna,
            'educacion'=>$educacion,
            'anos_experiencia'=>$anos_experiencia,
            'modalidad'=>$modalidad,
            'curso'=>$curso,
            'id_solicitud'=>$id_solicitud);
        return $this->db->update('postulacion',$dato, array('id_postulacion'=>$id_postulacion));
    }
    
    public function insertar($rut,$nombre,$apellido_paterno,$apellido_materno,$clave){
      $data=array(
            'rut'=>$rut,
            'nombre'=>$nombre,
            'apellido_paterno'=>$apellido_paterno,
            'apellido_materno'=>$apellido_materno,
            'clave'=>$clave,
            'id_tipo_usuario'=>'1');  
        return  $this->db->insert('usuario',$data);
        
    }
}
