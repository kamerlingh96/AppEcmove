<?php

class PerfilCliente extends CI_Model
{

  public function getDatos($id = ''){
    $result =  $this->db->query("SELECT * FROM clientes WHERE id_usuario = '" . $id . "' LIMIT 1");
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


  public function nuevoEmbarque($data){
      if ($this->db->insert("embarque",$data)) {
        return $id_embarque = $this->db->insert_id();
      }else {
        return false;
      }
  }

  public function datosDelEmbarque($remitenteDestinatario,$inicioFin,$paquete){
    if ($this->db->insert("remitenteDestinatario",$remitenteDestinatario)) {
      if ($this->db->insert("inicioFin",$inicioFin)) {
        if ($this->db->insert("paquete",$paquete)) {
          return true;
        }else {
          return false;
        }
      }else {
        return false;
      }
    }else {
      return false;
    }
  }


  public function listaDeEmbarque($id){
    $this->db->order_by('id', 'DESC');
    $this->db->where('id_usuario', $id);
    return $this->db->get('embarque');
  }

  public function listaDeRemitenteDestinatario($id){
    $this->db->order_by('id', 'DESC');
    $this->db->where('id_usuario', $id);
    return $this->db->get('remitenteDestinatario');
  }

  public function listaDeInicioFin($id){
    $this->db->order_by('id', 'DESC');
    $this->db->where('id_usuario', $id);
    return $this->db->get('inicioFin');
  }

  public function listaDePaquete($id){
    $this->db->order_by('id', 'DESC');
    $this->db->where('id_usuario', $id);
    return $this->db->get('paquete');
  }

  public function pagoCorizacionPaypal($id,$folioCotizacion, $orderID, $payerID){
    $data = array(
      'id_usuario' => $id,
      'id_embarque' => $folioCotizacion,
      'orderID' => $orderID,
      'payerID' => $payerID
    );

    if ($this->db->insert("pagosPaypal",$data)) {
      $modificar = array(
        'estadoFacturacion' => "Pagado",
        'tipoPago' => "PayPal"
      );
      $this->db->where('id', $folioCotizacion);
      if ($this->db->update('embarque', $modificar)) {
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }

  }

  public function pagoCorizacionComprobante($id,$folioCotizacion, $urlComprobante){
    $data = array(
      'id_usuario' => $id,
      'id_embarque' => $folioCotizacion,
      'urlComprobante' => $urlComprobante
    );


    if ($this->db->insert("pagosComprobantes",$data)) {
      $modificar = array(
        'estadoFacturacion' => "Procesando Pago",
        'tipoPago' => "Comprobante"
      );
      $this->db->where('id', $folioCotizacion);
      if ($this->db->update('embarque', $modificar)) {
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }


  }


}
