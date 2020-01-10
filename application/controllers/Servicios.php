<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

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
				$this->load->model('Servicios_model');
				$result_list_galeria = $this->Servicios_model->getListGaleriaServicios();
				$listCategoriaServicios = $this->Servicios_model->getListCategoriaServicios();
				$listServicios = $this->Servicios_model->getListServicios();
				$data = array('listCategoriaServicios' => $listCategoriaServicios,
											'listServicios' => $listServicios,
											'result_list_galeria' =>  $result_list_galeria,
											'solicitudesEmpresas' => $result_list_empresa,
											'usuario' => $fila_user
				);
				$this->load->view('ecmove/servicios',$data);
			}
		}else {
			header("Location: " . base_url());
		}
	}

	function agregarCategoria(){
		$titulo = $this->input->post("titulo");
		$data = array('titulo' => $titulo);
		$this->load->model('Servicios_model');
		$this->Servicios_model->agregarCategoria($data);
		echo "Categoria Agregada Exitosamente";
	}

	function editarCategoria(){
		$idCategoriaEditar = intval($this->input->post("id"));
		$tituloCategoriaEditar = $this->input->post("titulo");
		$data = array('id' => $idCategoriaEditar, 'titulo' => $tituloCategoriaEditar);
		$this->load->model('Servicios_model');
		$this->Servicios_model->editarCategoria($data);
		echo "Categoria Editada Exitosamente";
	}

	function eliminarCategoria(){
		if ($this->input->is_ajax_request()) {
			$idCategoriaEliminar = intval($this->input->post("id"));
			$this->load->model('Servicios_model');
			$this->Servicios_model->eliminarCategoria($idCategoriaEliminar);
			echo "Categoria Eliminada Exitosamente";
		}

	}

	function agregarServicio(){
		$id = $this->input->post("id");
		$titulo = $this->input->post("titulo");
		$tarifaBase = $this->input->post("tarifaBase");
		$cienMetros = $this->input->post("cienMetros");
		$minutoEspera = $this->input->post("minutoEspera");
		$minutoViaje = $this->input->post("minutoViaje");
		$tiempoDisponibleDesde = $this->input->post("tiempoDisponibleDesde");
		$tiempoDisponibleHasta = $this->input->post("tiempoDisponibleHasta");
		$url = $this->input->post("url");

		$this->load->helper('url');
		$base_url =base_url();
		$url= str_replace($base_url, "", $url);
		$url_id= str_replace("uploads/servicios/", "", $url);
		$id_media = explode(".", $url_id);




		$data = array(
			'id' => null,
			'id_categoria_servicio' => intval($id),
			'titulo' => $titulo,
			'id_media' => intval($id_media[0]),
			'direccion' => $url,
			'tarifa_base' => $tarifaBase,
			'por_cien_metros' => $cienMetros,
			'minuto_espera' => $minutoEspera,
			'por_minuto_pasado' => $minutoViaje,
			'tiempo_disponible_desde' => $tiempoDisponibleDesde,
			'tiempo_disponible_hasta' => $tiempoDisponibleHasta
		);
		$this->load->model('Servicios_model');
		$this->Servicios_model->agregarServicio($data);
		echo "Servicio Agregado Exitosamente";
	}
}
