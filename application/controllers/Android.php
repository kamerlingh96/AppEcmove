<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Android extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Register_model");
    $this->load->model('Ingresar');
    $this->load->model('Vehiculo_model');
  }

  function registroTransportista()
  {
    $user = $this->input->post("user");
    $email = $this->input->post("email");
    $pass = $this->input->post("pass");
    $curp = $this->input->post("curp");
    $cel = $this->input->post("cel");

    $resultEmail = $this->Register_model->validarEmail($email);
		$resultCURP = $this->Register_model->validarCURP($curp);

    $response = array();
    if (!$resultEmail && !$resultCURP) {
			$data = array('user' => $user,
										'email' => $email,
										'pass' => $pass,
										'tipo' => 3,
										'estado' => "Solicitud"
			);


      if ($this->Register_model->transportista($data,$curp,$cel)) {
        $response["success"] = true;
        echo json_encode($response);
      }else {
        $response["success"] = false;
        echo json_encode($response);
      }
		}else {
			$response["success"] = false;
      echo json_encode($response);
		}

  }

  function loginTransportista(){
    $email = $this->input->post("email");
    $pass = $this->input->post("pass");

    $resultadoUser = $this->Ingresar->getLogin($email);
    $response = array();
    if ($resultadoUser != null) {
      if ($resultadoUser->pass == $pass && $resultadoUser->email == $email) {
        $response["success"] = true;
        $response["id"] = $resultadoUser->id;
        $response["user"] = $resultadoUser->user;
        $response["pass"] = $resultadoUser->email;
        $response["email"] = $resultadoUser->pass;
        $response["estado"] = $resultadoUser->estado;
        echo json_encode($response);
      }else {
        $response["success"] = false;
        echo json_encode($response);
      }
    }else {
      $response["success"] = false;
      echo json_encode($response);
    }

  }




  function listaDeVehiculos(){
    $vehiculos = $this->Vehiculo_model->getListVehiculos();
    /*foreach ($vehiculos->result() as $value) {
      $response["id"] = $value->id;
      $response["id"] = $value->id;
    }*/
    //echo "<pre>";
    echo json_encode($vehiculos->result());
    //echo "</pre>";
  }

}
