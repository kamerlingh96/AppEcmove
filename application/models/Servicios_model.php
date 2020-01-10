<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios_model extends CI_Model{


  public function getListCategoriaServicios()
  {
    return $this->db->get('categorias_servicios');
  }

  public function getListServicios()
  {
    return $this->db->get('servicios');
  }

  function agregarCategoria($data){
    $this->db->insert("categorias_servicios",$data);
  }

  function editarCategoria($data){
    $this->db->where('id', $data['id']);
    $this->db->update('categorias_servicios', $data);
  }

  function eliminarCategoria($id){
    $this->db->where('id', $id);
    $this->db->delete('categorias_servicios');
  }

  function agregarServicio($data){
    $this->db->insert("servicios",$data);
  }

  public function getListGaleriaServicios()
  {
    $this->db->order_by('id', 'DESC');
    return $this->db->get('vehiculos');
  }



}
