<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelTransportista extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('Ingresar');
		$this->load->model('PerfilTransportista');
		$this->load->model('Vehiculo_model');
  }

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

		$fila_user = $this->Ingresar->getLogin($email);
		$fila_perfil = $this->PerfilTransportista->getDatos($id);

		$data = array(
			'datosTransportista' => $datos,
			'datosUsuario' => $fila_user,
			'perfil' => $fila_perfil
		);
		if ($estado == "Solicitud") {
			$data['ListaDeVehiculos'] = $ListaDeVehiculos = $this->Vehiculo_model->getListVehiculos();
			$this->load->view('transportista/posregistro',$data);
		}elseif ($estado == "Aprovado"){
			$data['listaDeEmbarques'] = $this->PerfilTransportista->listaDeEmbarques();
			$data['listaDeInicioFin'] = $this->PerfilTransportista->listaDeInicioFin();
			$data['listaDeRemitenteDestinatario'] = $this->PerfilTransportista->listaDeRemitenteDestinatario();
			$data['listaDePaquete'] = $this->PerfilTransportista->listaDePaquete();
			$this->load->view('transportista/transportista-carga',$data);
		}
	}

	public function posregistro(){
		$id = intval($this->session->userdata('id'));
		$data['nombre'] = $nombre = $this->input->post("nombre");
		$data['correo'] = $correo = $this->input->post("correo");
		$data['tel'] = $tel = $this->input->post("tel");
		$data['curp'] = $curp = $this->input->post("curp");
		$data['id_vehiculo'] = $vehiculo = $this->input->post("vehiculo");

		$mi_archivo = "dropzoneComprobante";
		$config['upload_path']          = './uploads/transportistas/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['file_name']        = "".$id."";

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_archivo)){
			echo $this->upload->display_errors();

		}else{
			$nombre_archivo = $this->upload->data('file_name');
			$galeria = array('titulo' => $nombre,'direccion' => base_url().'uploads/transportistas/'.$nombre_archivo, 'tipo' => "transportistas");
			$data['id_galeria_personal'] = $id_galeria = $this->PerfilTransportista->cargarGaleria($galeria);
			$data['img_personal'] = base_url().'uploads/transportistas/'.$nombre_archivo;
			$data['estado'] = 'off';

			$datauser['estado']='Aprovado';

			if ($this->PerfilTransportista->posregistro($id,$data,$datauser)) {
				echo "Registro Guardado";
			}else {
				echo "error";
			}
		}
	}

	public function MisEmbarques($param = '', $idEmbarque = ''){
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

		$fila_user = $this->Ingresar->getLogin($email);
		$fila_perfil = $this->PerfilTransportista->getDatos($id);

		$data = array(
			'datosTransportista' => $datos,
			'datosUsuario' => $fila_user,
			'perfil' => $fila_perfil
		);

		if ($param == "SeleccionarEmbarque") {
			$dataEmbarque = array(
				'estadoDeEmbarque' => "Asignado"
			);
			if ($this->PerfilTransportista->asignarTransportistaEmbarque($idEmbarque,$dataEmbarque)) {
				$dataViaje = array(
					'id_embarque'=> $idEmbarque,
					'id_transportista' => $id,
					'coord' => "En espera"
				);
				if ($this->PerfilTransportista->asignarViaje($dataViaje)) {
					header('Location: '.base_url().'PanelTransportista/Viajes');
				}else {
					echo "Error";
				}
			}
		}else {
			$data['listaDeEmbarques'] = $this->PerfilTransportista->listaDeEmbarques();
			$data['listaDeInicioFin'] = $this->PerfilTransportista->listaDeInicioFin();
			$data['listaDeRemitenteDestinatario'] = $this->PerfilTransportista->listaDeRemitenteDestinatario();
			$data['listaDePaquete'] = $this->PerfilTransportista->listaDePaquete();
			$data['listaDeViajes'] = $this->PerfilTransportista->listaDeViajes($id);
			$this->load->view('transportista/misEmbarques',$data);
		}

	}

	public function Viajes($param = '', $idEmbarque = ''){
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

		$fila_user = $this->Ingresar->getLogin($email);
		$fila_perfil = $this->PerfilTransportista->getDatos($id);

		$data = array(
			'datosTransportista' => $datos,
			'datosUsuario' => $fila_user,
			'perfil' => $fila_perfil
		);

		if ($param == 'En ruta') {
			echo "string";
		}elseif ($param == 'mapaCompleto') {
			$data['idEmbarque'] = $idEmbarque;
			$data['listaDeEmbarques'] = $this->PerfilTransportista->listaDeEmbarques();
			$data['listaDeInicioFin'] = $this->PerfilTransportista->listaDeInicioFin();
			$data['listaDeRemitenteDestinatario'] = $this->PerfilTransportista->listaDeRemitenteDestinatario();
			$data['listaDePaquete'] = $this->PerfilTransportista->listaDePaquete();
			$data['listaDeViajes'] = $this->PerfilTransportista->listaDeViajes($id);
			$this->load->view('transportista/transportista-mapa',$data);
		}else {
			$data['listaDeEmbarques'] = $this->PerfilTransportista->listaDeEmbarques();
			$data['listaDeInicioFin'] = $this->PerfilTransportista->listaDeInicioFin();
			$data['listaDeRemitenteDestinatario'] = $this->PerfilTransportista->listaDeRemitenteDestinatario();
			$data['listaDePaquete'] = $this->PerfilTransportista->listaDePaquete();
			$data['listaDeViajes'] = $this->PerfilTransportista->listaDeViajes($id);
			$this->load->view('transportista/transportista-status',$data);
		}
	}
}
