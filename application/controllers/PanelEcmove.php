<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelEcmove extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ingresar');
	}


	public function index()
	{
		$id = $this->session->userdata('id');
		$email = $this->session->userdata('email');
		$user = $this->session->userdata('user');
		$tipo = $this->session->userdata('tipo');
		$estado = $this->session->userdata('estado');

		$fila_user = $this->Ingresar->getLogin($email);
		$this->load->model('Notificaciones_model');
		$result_list_empresa = $this->Notificaciones_model->getListEmpresa();
		$data = array('solicitudesEmpresas' => $result_list_empresa, 'usuario' => $fila_user );
		$this->load->view('ecmove/dashboard',$data);
	}

	public function Embarques($param = '', $idEmbarque = ''){
		$id = $this->session->userdata('id');
		$email = $this->session->userdata('email');
		$user = $this->session->userdata('user');
		$tipo = $this->session->userdata('tipo');
		$estado = $this->session->userdata('estado');
		$fila_user = $this->Ingresar->getLogin($email);

		$this->load->model('Notificaciones_model');
		$this->load->model('PerfilEcmove');
		$solicitudesEmpresas = $this->Notificaciones_model->getListEmpresa();
		$listaDeEmbarque = $this->PerfilEcmove->listaDeEmbarque();
		$data = array(
			'solicitudesEmpresas' => $solicitudesEmpresas,
			'listaDeEmbarque' => $listaDeEmbarque,
			'usuario' => $fila_user
		);

		if ($param == "Revision") {
			$data['listaDeRemitenteDestinatario'] = $listaDeRemitenteDestinatario = $this->PerfilEcmove->listaDeRemitenteDestinatario($idEmbarque);
			$data['listaDeInicioFin'] = $listaDeInicioFin = $this->PerfilEcmove->listaDeInicioFin($idEmbarque);
			$data['listaDePaquete'] = $listaDePaquete = $this->PerfilEcmove->listaDePaquete($idEmbarque);
			foreach ($listaDeEmbarque->result() as $embarque ) {
				if ($embarque->id == $idEmbarque) {
					if ($embarque->tipoPago == "Comprobante" ) {
						$data['pagoComprobante'] = $pagoComprobante = $this->PerfilEcmove->pagoComprobante($idEmbarque);
					}
				}
			}
			$data['folioCotizacion'] =  $idEmbarque;
			$this->load->view('ecmove/revisarEmbarque',$data);

		}elseif ($param == "AprobarEmbarque"){
			if ($this->PerfilEcmove->AprobarEmbarque($idEmbarque)) {
				header('Location: '.base_url().'PanelEcmove/Embarques/Ver/'.$idEmbarque.'');
			}else {

			}
		}elseif ($param == "DeclinarEmbarque"){

		}elseif ($param == "Ver") {
			$data['listaDeRemitenteDestinatario'] =  $this->PerfilEcmove->listaDeRemitenteDestinatario($idEmbarque);
			$data['listaDeInicioFin'] =  $this->PerfilEcmove->listaDeInicioFin($idEmbarque);
			$data['listaDePaquete'] =  $this->PerfilEcmove->listaDePaquete($idEmbarque);
			$data['pagoComprobante'] =  $this->PerfilEcmove->pagoComprobante($idEmbarque);
			$data['folioCotizacion'] =  $idEmbarque;
			$this->load->view('ecmove/verEmbarque',$data);
		}else {
			$this->load->view('ecmove/embarques',$data);
		}
	}

	public function Clientes($param = '', $idCliente = ''){
		$id = $this->session->userdata('id');
		$email = $this->session->userdata('email');
		$user = $this->session->userdata('user');
		$tipo = $this->session->userdata('tipo');
		$estado = $this->session->userdata('estado');
		$fila_user = $this->Ingresar->getLogin($email);

		$this->load->model('Notificaciones_model');
		$this->load->model('PerfilEcmove');
		$solicitudesEmpresas = $this->Notificaciones_model->getListEmpresa();
		$data = array(
			'solicitudesEmpresas' => $solicitudesEmpresas,
			'usuario' => $fila_user
		);
		if ($param == "Ver") {
			// code...
		}else {
			$data['listaDeClientes'] = $listaDeClientes = $this->PerfilEcmove->listaDeClientes();
			$this->load->view('ecmove/clientes',$data);
		}
	}

	public function Transportistas($param = '', $idTransportistas = ''){
		$id = $this->session->userdata('id');
		$email = $this->session->userdata('email');
		$user = $this->session->userdata('user');
		$tipo = $this->session->userdata('tipo');
		$estado = $this->session->userdata('estado');
		$fila_user = $this->Ingresar->getLogin($email);

		$this->load->model('Notificaciones_model');
		$this->load->model('PerfilEcmove');
		$solicitudesEmpresas = $this->Notificaciones_model->getListEmpresa();
		$data = array(
			'solicitudesEmpresas' => $solicitudesEmpresas,
			'usuario' => $fila_user
		);
		if ($param == 'Ver') {
			// code...
		}else{
			$data['listaDeTransportistas'] = $listaDeTransportistas = $this->PerfilEcmove->listaDeTransportistas();
			$this->load->view('ecmove/transportistas',$data);
		}
	}

}
