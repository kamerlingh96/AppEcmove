<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_model extends CI_Model{

  function galeria($data,$file_ext,$file_name){
    if ($this->db->insert("galeria",$data)) {
      $id = $this->db->insert_id();
      $this->db->where('id', $id);

      $file_data = array(
        "titulo" => "",
        "direccion" => "uploads/".$data['direccion']."/".$id.$file_ext."",
        "tipo" => $data['tipo']
      );

      rename("./uploads/".$data['direccion']."/".$file_name."", "uploads/".$data['direccion']."/".$id.$file_ext."");

      if ($this->db->update('galeria', $file_data)) {
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }

  }


  public function getListGaleria()
  {
    $this->db->order_by('id', 'DESC');
    return $this->db->get('galeria');
  }


}
