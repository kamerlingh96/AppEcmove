<?php

class Revision_model extends CI_Model
{

  public function idrevision($id = ''){
    $result =  $this->db->query("SELECT * FROM empresas WHERE id_usuario = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }


}
