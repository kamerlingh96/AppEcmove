<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ingresar');
	}

	public function index()
	{

		if ($this->session->userdata('login')) {
			if ($this->session->userdata('tipo') == 1) {

				$id = $this->session->userdata('id');
				$email = $this->session->userdata('email');
				$user = $this->session->userdata('user');
				$tipo = $this->session->userdata('tipo');
				$estado = $this->session->userdata('estado');

				$fila_user = $this->Ingresar->getLogin($email);

				$this->load->model('Notificaciones_model');
				$result_list_empresa = $this->Notificaciones_model->getListEmpresa();

				$this->load->model('Vehiculo_model');
				$result_list_galeria = $this->Vehiculo_model->getListGaleriaVehiculos();
				$result_list_vehiculos = $this->Vehiculo_model->getListVehiculos();
				$data_galeria = array('list_galeria' => $result_list_galeria, 'list_vehiculos' =>  $result_list_vehiculos, 'solicitudesEmpresas' => $result_list_empresa,'usuario' => $fila_user  );


				$this->load->view('ecmove/vehiculos', $data_galeria);
			}
		}else {
			header("Location: " . base_url());
		}
	}

	function agregarVehiculo(){
		$titulo = $this->input->post("titulo");
		$url = $this->input->post("url");
		$this->load->helper('url');
		$base_url =base_url();
		$url= str_replace($base_url, "", $url);

		$this->load->model('Vehiculo_model');
		$idResult = $this->Vehiculo_model->buscarid($url);
		if ($idResult != false) {
			$id = $idResult->id;

			$data = array('vehiculo' => $titulo,
			'media_id' => $id,
			'direccion' => $url
		);
		if ($this->Vehiculo_model->agregarVehiculo($data)) {
			echo "Vehiculo Agregado Exitosamente";
		}else {
			echo "Error";
		}

			// code...
		}else {
			echo "Error";
		}


	}
}
