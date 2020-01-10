<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisTransportistas extends CI_Controller {

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
		$this->load->model('PerfilEmpresa');
		$this->load->model('Servicios_model');
		$this->load->model('Vehiculo_model');
		$this->load->model("TransportistaEmpresa_model");
		$fila_user = $this->Ingresar->getLogin($email);
		$fila_perfil = $this->PerfilEmpresa->getDatos($id);
		$listCategoriaServicios = $this->Servicios_model->getListCategoriaServicios();
		$listServicios = $this->Servicios_model->getListServicios();
		$result_list_vehiculos = $this->Vehiculo_model->getListVehiculos();
		$list_transportistas = $this->TransportistaEmpresa_model->transportistasList();

		$data = array('datosEmpresa' => $datos,
		  						'datosUsuario' => $fila_user,
		  						'perfil' => $fila_perfil,
									'categorias' => $listCategoriaServicios,
									'servicios' => $listServicios,
									'vehiculos' => $result_list_vehiculos,
									'transportistas' => $list_transportistas
								);
			$this->load->view('empresa/mistransportistas',$data);
	}

	public function registro(){
		$id = intval($this->session->userdata('id'));
		$nombre = $this->input->post("nombre");
		$correo = $this->input->post("correo");
		$pass = $this->input->post("pass");
		$tel = $this->input->post("tel");
		$curp = $this->input->post("curp");
		$vehiculo = $this->input->post("vehiculo");


		$this->load->model("TransportistaEmpresa_model");

		if ($this->TransportistaEmpresa_model->validarEmail($correo)) {

			$data_users = array('user' => $nombre,
													'email' => $correo,
													'pass' => $pass,
													'tipo' => 5,
													'estado' => "off"
												);
			$ultimo_id = $this->TransportistaEmpresa_model->transportistaUser($data_users);

			$mi_archivo = "personal";
			$config['upload_path']          = './uploads/transportistas/';
	    $config['allowed_types']        = 'jpg|png|jpeg';
			$config['file_name']        = "".$ultimo_id."";

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload($mi_archivo)){
				echo $this->upload->display_errors();

			}else {
				$nombre_archivo = $this->upload->data('file_name');
				$galeria = array('titulo' => $nombre,'direccion' => 'uploads/transportistas/'.$nombre_archivo, 'tipo' => "transportistas");
				$id_galeria = $this->TransportistaEmpresa_model->cargarGaleria($galeria);
			}


			$data_transportistas = array('id_user' => $ultimo_id,
																		'id_empresa' => $id,
																		'nombre' => $nombre,
																		'curp' => $curp,
																		'tel' => $tel,
																		'correo' => $correo,
																		'id_vehiculo' => $vehiculo,
																		'id_galeria_personal' => $id_galeria,
																		'img_personal' => 'uploads/transportistas/'.$nombre_archivo,
																		'estado' => "off"

			);
			$this->TransportistaEmpresa_model->Transportista($data_transportistas);
			echo "Registro completado";
		}else{
			echo "correo ya registrado";
		}
	}

	public function perfil($idTransportista = ''){

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
		$this->load->model('PerfilEmpresa');
		$this->load->model('Servicios_model');
		$this->load->model('Vehiculo_model');
		$this->load->model("TransportistaEmpresa_model");
		$fila_user = $this->Ingresar->getLogin($email);
		$fila_perfil = $this->PerfilEmpresa->getDatos($id);
		$listCategoriaServicios = $this->Servicios_model->getListCategoriaServicios();
		$listServicios = $this->Servicios_model->getListServicios();
		$result_list_vehiculos = $this->Vehiculo_model->getListVehiculos();
		$datosPerfil = $this->TransportistaEmpresa_model->perfilTransportista($idTransportista);
		$datosPerfilUser = $this->TransportistaEmpresa_model->perfilTransportistaUser($idTransportista);

		$data = array('datosEmpresa' => $datos,
		  						'datosUsuario' => $fila_user,
		  						'perfil' => $fila_perfil,
									'categorias' => $listCategoriaServicios,
									'servicios' => $listServicios,
									'vehiculos' => $result_list_vehiculos,
									'datosPerfil' => $datosPerfil,
									'datosPerfilUser' => $datosPerfilUser
								);
			$this->load->view('empresa/perfilTransportista',$data);


	}

	public function actualizar($idTransportista = ''){

		$nombre = $this->input->post("nombre");
		$correo = $this->input->post("correo");
		$pass = $this->input->post("pass");
		$tel = $this->input->post("tel");
		$curp = $this->input->post("curp");
		$vehiculo = $this->input->post("vehiculo");

		$data_transportista = array('nombre' => $nombre,
																'correo' => $correo,
																'tel' => $tel,
																'curp' => $curp,
																'id_vehiculo' => $vehiculo
	);

		$this->db->where('id_user', intval($idTransportista));
		if ($this->db->update('transportistas', $data_transportista)) {
			$this->db->where('id', intval($idTransportista));

			$data_user = array( 'user' => $nombre,
													'email' => $correo,
													'pass' => $pass
			);

			if ($this->db->update('users', $data_user)) {
				echo "Datos Actualizados";
			}
		}else {
			echo "error";
		}


	}


}
