<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculo_model extends CI_Model{




  public function getListGaleriaVehiculos()
  {
    $this->db->order_by('id', 'DESC');
    $this->db->where('tipo', 'vehiculos');
    return $this->db->get('galeria');
  }

  public function getListVehiculos()
  {
    $this->db->order_by('id', 'DESC');
    return $this->db->get('vehiculos');
  }

  public function buscarid($url)
  {
    $result =  $this->db->query("SELECT * FROM galeria WHERE direccion = '" . $url . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return false;
    }
  }

  function agregarVehiculo($data){
    if ($this->db->insert("vehiculos",$data)) {
      return true;
    }else {
      return false;
    }

  }


}
