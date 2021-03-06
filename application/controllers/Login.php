<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    //Codeigniter : Write Less Do More
  }

	public function index()
	{
		if ($this->session->userdata('login')) {
			if ($this->session->userdata('tipo') == 1) {
				header("Location: " . base_url(). "PanelEcmove");
			}elseif ($this->session->userdata('tipo') == 2) {
				header("Location: " . base_url(). "PanelCliente");
			}elseif ($this->session->userdata('tipo') == 3) {
				header("Location: " . base_url(). "PanelTransportista");
			}elseif ($this->session->userdata('tipo') == 4) {
				header("Location: " . base_url(). "PanelEmpresa");
			}
		}
		$this->load->view('login');
	}

	public function log()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$this->load->model('Ingresar');
    $fila_user = $this->Ingresar->getLogin($email);

		if ($fila_user != null) {
			if ($fila_user->pass == $pass) {
				$data = array(
					'id' => $fila_user->id,
          'user' => $fila_user->user,
          'email' => $email,
          'tipo' => $fila_user->tipo,
          'login' => true,
					'estado' => $fila_user->estado
        );
				$this->session->set_userdata($data);
        header("Location: " . base_url());
			}else{
				header("Location: " . base_url());
			}
		}else {
			header("Location: " . base_url());
		}
	}


	public function logout(){
    $this->session->sess_destroy();
    header("Location: " . base_url());
  }
}
