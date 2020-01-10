<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelEmpresa extends CI_Controller {

	public function index()
	{

		$id = $this->session->userdata('id');
		$email = $this->session->userdata('email');
		$user = $this->session->userdata('user');
		$tipo = $this->session->userdata('tipo');
		$estado = $this->session->userdata('estado');

		$datos = array(
			'id' => $id,
			'email' => $email,
			'user' => $user,
			'tipo' => $tipo,
			'estado' => $estado
		);

		$this->load->model('Ingresar');
		$fila_user = $this->Ingresar->getLogin($email);
		$this->load->model('PerfilEmpresa');
		$fila_perfil = $this->PerfilEmpresa->getDatos($id);

		$data = array('datosEmpresa' => $datos, 'datosUsuario' => $fila_user , 'perfil' => $fila_perfil);
		if ($estado == "Solicitud") {
			$this->load->view('empresa/posregistro',$data);
		}elseif ($estado == "Revision"){
			$this->load->view('empresa/revision',$data);
		}elseif ($estado == "Aprovado"){
			$this->load->view('empresa/dashboard',$data);
		}
	}

	public function posregistro(){

		$id = intval($this->session->userdata('id'));
		$nombre_empresa = $this->input->post("nombre_empresa");
		$rfc = $this->input->post("rfc");
		$representante = $this->input->post("representante");
		$tel = $this->input->post("tel");
		$email = $this->input->post("email");
		$calle = $this->input->post("calle");
		$colonia = $this->input->post("colonia");
		$ciudad = $this->input->post("ciudad");
		$estado = $this->input->post("estado");
		$cp = $this->input->post("cp");
		$coordenadas = $this->input->post("coordenadas");

		$this->load->model('PerfilEmpresa');


		$posdata = array(
											'nombre_empresa' => $nombre_empresa,
											'rfc' => $rfc,
											'representante' => $representante,
											'tel' => $tel,
											'correo' => $email,
											'calle' => $calle,
											'colonia' => $colonia,
											'ciudad' => $ciudad,
											'estado_ubicacion' => $estado,
											'cp' => $cp,
											'coordenadas' => $coordenadas,
											'estado' => "Revisión"
		);


		$mi_archivo = 'logo';
		$config['upload_path']          = './uploads/logosEmpresas/';
    $config['allowed_types']        = 'jpg|png';
		$config['file_name']        = "".$id."";

		$this->load->library('upload', $config);

		if ($this->PerfilEmpresa->setPosDatos($posdata,$id)) {
			if ($this->upload->do_upload($mi_archivo)){
				$nombre_logo = $this->upload->data('file_name');
				$actualizar = array('logo' => 'uploads/logosEmpresas/'.$nombre_logo);
				$galeria = array('titulo' => $nombre_empresa,'direccion' => 'uploads/logosEmpresas/'.$nombre_logo, 'tipo' => "empresas");
			$this->PerfilEmpresa->actualizarLogo($actualizar,$id);
			$this->PerfilEmpresa->cargarGaleria($galeria,$id);
			echo "Registro Guardado";
			$this->session->sess_destroy();
			}
		}else {
			echo "error";
		}
	}
}
