<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransportistaEmpresa_model extends CI_Model{

  function validarEmail($email = ''){
    $result =  $this->db->query("SELECT * FROM users WHERE email = '" . $email . "' LIMIT 1");
    if($result->num_rows() > 0){
        return false;
    }else{
      return true;
    }
  }


  function transportistaUser($data){
    $this->db->insert("users",$data);
    $id=$this->db->insert_id();
    return $id;
  }

  function Transportista($data){
    $this->db->insert("transportistas",$data);
  }

  public function cargarGaleria($data){
    $this->db->insert("galeria",$data);
    $id_galeria = $this->db->insert_id();
    return $id_galeria;
  }

  function transportistasList(){
    return $this->db->get('transportistas');
  }

  public function perfilTransportista($id = ''){
    $result =  $this->db->query("SELECT * FROM transportistas WHERE id_user = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }

  public function perfilTransportistaUser($id = ''){
    $result =  $this->db->query("SELECT * FROM users WHERE id = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }




}
