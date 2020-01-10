<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

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

				$this->load->model('Galeria_model');
				$result_list_galeria = $this->Galeria_model->getListGaleria();
				$data_galeria = array('list_galeria' => $result_list_galeria, 'solicitudesEmpresas' => $result_list_empresa, 'usuario' => $fila_user );

				$this->load->view('ecmove/galeria',$data_galeria);
			}
		}else {
			header("Location: " . base_url());
		}
	}

	function vehiculosSubir(){
		$lugar1 = './uploads/vehiculos/';
		$this->cargar_archivo($lugar1);
	}

	function serviciosSubir(){
		$lugar1 = './uploads/servicios/';
		$this->cargar_archivo($lugar1);
	}

	function empresasSubir(){
		$lugar1 = './uploads/logosEmpresas/';
		$this->cargar_archivo($lugar1);
	}



	function cargar_archivo($lugar1 = '') {
				if ($lugar1 == "./uploads/vehiculos/") {
        	$mi_archivo1 = 'vehiculosSubir_archivo';

					$config1['upload_path'] = $lugar1;
	        $config1['allowed_types'] = "jpg|png";
	        $config1['file_name'] = "asd";
	        $config1['max_size'] = "50000";

					$this->load->library('upload', $config1);

					if ($this->upload->do_upload($mi_archivo1)) {
							$file_data = array(
								"titulo" => "",
								"direccion" => "vehiculos",
								"tipo" => "vehiculos"
							);

							$file_ext = $this->upload->data('file_ext');
							$file_name = $this->upload->data('orig_name');
							$this->load->model('Galeria_model');
							if ($this->Galeria_model->galeria($file_data,$file_ext,$file_name)) {
								echo "exito";
							}else {
								echo "Error";
							}

	        }else {
	        	echo $this->upload->display_errors();
	        }

				}elseif($lugar1 == "./uploads/servicios/"){
        	$mi_archivo1 = 'serviciosSubir_archivo';

					$config1['upload_path'] = $lugar1;
	        $config1['allowed_types'] = "jpg|png";
	        $config1['file_name'] = "asd";
	        $config1['max_size'] = "50000";

					$this->load->library('upload', $config1);

					if ($this->upload->do_upload($mi_archivo1)) {

							$file_data = array(
								"titulo" => "",
								"direccion" => "servicios",
								"tipo" => "servicios"
							);

							$file_ext = $this->upload->data('file_ext');
							$file_name = $this->upload->data('orig_name');
							$this->load->model('Galeria_model');
							if ($this->Galeria_model->galeria($file_data,$file_ext,$file_name)) {
								echo "exito";
							}else {
								echo "Error";
							}

	        }else {
	        	echo $this->upload->display_errors();
	        }
				}elseif($lugar1 == "./uploads/logosEmpresas/"){
        	$mi_archivo1 = 'empresasSubir_archivo';

					$config1['upload_path'] = $lugar1;
	        $config1['allowed_types'] = "jpg|png";
	        $config1['file_name'] = "asd";
	        $config1['max_size'] = "50000";

					$this->load->library('upload', $config1);

					if ($this->upload->do_upload($mi_archivo1)) {

							$file_data = array(
								"titulo" => "",
								"direccion" => "logosEmpresas",
								"tipo" => "empresas"
							);

							$file_ext = $this->upload->data('file_ext');
							$file_name = $this->upload->data('orig_name');
							$this->load->model('Galeria_model');
							if ($this->Galeria_model->galeria($file_data,$file_ext,$file_name)) {
								echo "exito";
							}else {
								echo "Error";
							}

	        }else {
	        	echo $this->upload->display_errors();
	        }
				}


        $this->load->library('upload', $config1);



    }
}
