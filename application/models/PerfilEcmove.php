<?php

class PerfilEcmove extends CI_Model
{

  public function listaDeEmbarque(){
    $this->db->order_by('id', 'DESC');
    return $this->db->get('embarque');
  }


  public function listaDeRemitenteDestinatario($id){
    $this->db->order_by('id', 'DESC');
    $this->db->where('id_embarque', $id);
    return $this->db->get('remitentedestinatario');
  }

  public function listaDeInicioFin($id){
    $this->db->order_by('id', 'DESC');
    $this->db->where('id_embarque', $id);
    return $this->db->get('iniciofin');
  }

  public function listaDePaquete($id){
    $this->db->order_by('id', 'DESC');
    $this->db->where('id_embarque', $id);
    return $this->db->get('paquete');
  }

  public function pagoComprobante($id){
    $this->db->where('id_embarque', $id);
    return $this->db->get('pagoscomprobantes');
  }

  public function AprobarEmbarque($id){
    $modificar = array(
      'estadoFacturacion' => "Pagado",
      'estadoDeEmbarque' => "Pendiente"
    );
    $this->db->where('id', $id);
    if ($this->db->update('embarque', $modificar)) {
      return true;
    }else {
      return false;
    }
  }

  public function listaDeClientes(){
    $this->db->order_by('id', 'DESC');
    return $this->db->get('clientes');
  }

  public function listaDeTransportistas(){
    $this->db->order_by('id', 'DESC');
    return $this->db->get('transportistas');
  }


}
