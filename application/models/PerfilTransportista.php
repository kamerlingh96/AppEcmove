<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerfilTransportista extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getDatos($id){
    $result =  $this->db->query("SELECT * FROM transportistas WHERE id_user = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }

  public function cargarGaleria($data){
    $this->db->insert("galeria",$data);
    $id_galeria = $this->db->insert_id();
    return $id_galeria;
  }

  public function posregistro($id,$data,$datauser){
    $this->db->where('id', $id);
    if ($this->db->update('users', $datauser)) {
      $this->db->where('id_user', $id);
      if ($this->db->update('transportistas', $data)) {
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }
  }

  public function listaDeEmbarques(){
    $this->db->order_by('id', 'DESC');
    return $this->db->get('embarque');
  }

  public function listaDeInicioFin(){
    return $this->db->get('inicioFin');
  }

  public function asignarTransportistaEmbarque($id,$data){
    $this->db->where('id', $id);
    if ($this->db->update('embarque', $data)) {
      return true;
    }else {
      return false;
    }
  }

  public function asignarViaje($data){
    if ($this->db->insert("viajes",$data)) {
      return true;
    }else {
      return false;
    }
  }

  public function listaDeViajes($id){
    $this->db->where('id_transportista', $id);
    return $this->db->get('viajes');
  }

  public function listaDeRemitenteDestinatario(){
    return $this->db->get('remitenteDestinatario');
  }

  public function listaDePaquete(){
    return $this->db->get('paquete');
  }

}
