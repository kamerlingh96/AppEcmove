<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notificaciones_model extends CI_Model{


  public function getListEmpresa()
  {
    $this->db->order_by('id', 'DESC');
    return $this->db->get('empresas');
  }


}
