<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SolicitudEcmove extends CI_Controller {

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
		$this->load->view('ecmove/solicitud',$data);
	}
}
