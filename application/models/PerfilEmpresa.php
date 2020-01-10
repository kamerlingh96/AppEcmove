<?php

class PerfilEmpresa extends CI_Model
{

  public function getDatos($id = ''){
    $result =  $this->db->query("SELECT * FROM empresas WHERE id_usuario = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }

  public function setPosDatos($data,$id){
    $this->db->where('id_usuario', $id);
    if ($this->db->update('empresas', $data)) {
      $this->db->where('id', $id);
      $actualizar_user = array( 'user' => $data['representante'],
                                'email' => $data['correo'],
                                'estado' => "Revision",
                              );
      if ($this->db->update('users', $actualizar_user)) {
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }

  }

  public function actualizarLogo($data,$id){
    $this->db->where('id_usuario', $id);
    if ($this->db->update('empresas', $data)) {
      return true;
    }else {
      return false;
    }

  }

  public function cargarGaleria($data,$id){
    $this->db->insert("galeria",$data);
    $id_galeria = $this->db->insert_id();

    $act = array('id_galeria' => $id_galeria);

    $this->db->where('id_usuario', $id);
    $this->db->update('empresas', $act);
  }


}
