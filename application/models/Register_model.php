<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{

  function validarEmail($email = ''){
    $result =  $this->db->query("SELECT * FROM users WHERE email = '" . $email . "' LIMIT 1");
    if($result->num_rows() > 0){
        return true;
    }else{
      return false;
    }
  }

  function validarRFC($rfc = ''){
    $result =  $this->db->query("SELECT * FROM empresas WHERE rfc = '" . $rfc . "' LIMIT 1");
    if($result->num_rows() > 0){
        return true;
    }else{
      return false;
    }
  }

  function validarCURP($curp = ''){
    $result =  $this->db->query("SELECT * FROM transportistas WHERE curp = '" . $curp . "' LIMIT 1");
    if($result->num_rows() > 0){
        return true;
    }else{
      return false;
    }
  }

  function cliente($data, $cel){
    if ($this->db->insert("users",$data)) {
      $id=$this->db->insert_id();
      date_default_timezone_set('America/Mexico_City');
      $data2 = array( 'id_usuario' => $id,
      'nombre' => $data['user'],
      'correo' => $data['email'],
      'tel' => $cel,
      'fecha_registro' => date('Y-m-d H:i:s'),
      'estado' => "Aprovado"
    );
    if ($this->db->insert("clientes",$data2)) {
      return true;
    }else {
      return false;
    }
  }else {
    return false;

  }

  }

  function empresa($data,$rfc){
    $this->db->insert("users",$data);
    $id=$this->db->insert_id();
    date_default_timezone_set('America/Mexico_City');
    $data2 = array( 'id_usuario' => $id,
                    'nombre_empresa' => "",
                    'rfc' => $rfc,
                    'fecha_registro' => date('Y-m-d H:i:s'),
                    'estado' => "Solicitud"
    );
    $this->db->insert("empresas",$data2);
  }

  function transportista($data,$curp, $cel='',$apellidoPaterno,$apellidoMaterno){
    if($this->db->insert("users",$data)){
      $id=$this->db->insert_id();
      date_default_timezone_set('America/Mexico_City');
      $data2 = array( 'id_user' => $id,
                      'id_empresa' => 0,
                      'nombre' => $data['user'],
                      'apellidoPaterno' => $apellidoPaterno,
                      'apellidoMaterno' => $apellidoMaterno,
                      'curp' => $curp,
                      'tel' => $cel,
                      'correo' => $data['email'],
                      'estado' => "Solicitud"
      );
      if($this->db->insert("transportistas",$data2)){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }


}
