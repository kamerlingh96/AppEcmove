<?php

class Ingresar extends CI_Model
{

  public function getLogin($email = ''){
    $result =  $this->db->query("SELECT * FROM users WHERE email = '" . $email . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }


}
