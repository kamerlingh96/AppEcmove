<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model("Register_model");
}


	public function registroCliente(){
		$this->load->view('cliente-registro');
	}

	public function registroTransportista(){
		$this->load->view('transportista-registro');
	}

	public function cliente(){
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$cel = $this->input->post("cel");
		$pass = $this->input->post("pass");
		$repass = $this->input->post("repass");

		$resultEmail = $this->Register_model->validarEmail($email);

		if (!$resultEmail) {
			$data = array('user' => $name,
										'email' => $email,
										'pass' => $pass,
										'tipo' => 2,
										'estado' => "Aprovado"
			);

			$this->Register_model->cliente($data, $cel);

			echo "Registro Guardado";
		}else {
			echo "Correo ya registrado";
		}


	}

	public function empresa(){
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$rfc = $this->input->post("rfc");
		$pass = $this->input->post("pass");

		$resultEmail = $this->Register_model->validarEmail($email);
		$resultRFC = $this->Register_model->validarRFC($rfc);

		if (!$resultEmail && !$resultRFC) {
			$data = array('user' => $name,
										'email' => $email,
										'pass' => $pass,
										'tipo' => 4,
										'estado' => "Solicitud"
			);


			$this->Register_model->empresa($data,$rfc);

			echo "Registro Guardado";
		}else {
			echo "Correo y/o RFC ya registrado";
		}


	}

	public function transportista(){
		$name = $this->input->post("name");
		$apellidoPaterno = $this->input->post("apellidoPaterno");
		$apellidoMaterno = $this->input->post("apellidoMaterno");
		$email = $this->input->post("email");
		$curp = $this->input->post("curp");
		$cel = $this->input->post("cel");
		$pass = $this->input->post("pass");

		$resultEmail = $this->Register_model->validarEmail($email);
		$resultCURP = $this->Register_model->validarCURP($curp);

		if (!$resultEmail && !$resultCURP) {
			$data = array('user' => $name,
										'email' => $email,
										'pass' => $pass,
										'tipo' => 3,
										'estado' => "Solicitud"
			);


			$this->Register_model->transportista($data,$curp,$cel,$apellidoPaterno,$apellidoMaterno);

			echo "Registro Guardado";
		}else {
			echo "Correo y/o CURP ya registrado";
		}


	}
}
