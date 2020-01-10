<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revision extends CI_Controller {


	public function revisionSolicitud($id = '')
	{
		$this->load->model('Notificaciones_model');
		$this->load->model('Revision_model');
		$result_list_empresa = $this->Notificaciones_model->getListEmpresa();
		$result_revision_empresa = $this->Revision_model->idrevision($id);
		$data = array('solicitudesEmpresas' => $result_list_empresa, 'revisionEmpresa' => $result_revision_empresa);
		$this->load->view('ecmove/revision',$data);
	}

	public function aprovar($id = ''){
		$aprovar = array(
											'estado' => "Aprovado"
		);
		$this->db->where('id_usuario', $id);
    $this->db->update('empresas', $aprovar);
		$this->db->where('id', $id);
		$this->db->update('users', $aprovar);
		header("Location: " . base_url());
	}
}
