<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelCliente extends CI_Controller {

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
		$this->load->model('PerfilCliente');
		$fila_perfil = $this->PerfilCliente->getDatos($id);

		$data = array( 'datosUsuario' => $fila_user , 'perfil' => $fila_perfil);
		if ($estado == "Solicitud") {
			$this->load->view('cliente/posregistro',$data);
		}elseif ($estado == "Revision"){
			$this->load->view('cliente/revision',$data);
		}elseif ($estado == "Aprovado"){
			$this->load->view('cliente/cliente-carga',$data);
		}
	}

	public function Perfil(){
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
		$this->load->model('PerfilCliente');
		$fila_perfil = $this->PerfilCliente->getDatos($id);

		$data = array( 'datosUsuario' => $fila_user , 'perfil' => $fila_perfil);

		$this->load->view('cliente/cliente-perfil',$data);
	}



	public function Embarques($param = '', $folioCotizacion = '', $orderID = '' , $payerID = ''){
		$id = $this->session->userdata('id');
		$email = $this->session->userdata('email');
		$user = $this->session->userdata('user');
		$tipo = $this->session->userdata('tipo');
		$estado = $this->session->userdata('estado');

		$this->load->model('Ingresar');
		$fila_user = $this->Ingresar->getLogin($email);
		$this->load->model('PerfilCliente');
		$fila_perfil = $this->PerfilCliente->getDatos($id);
		$this->load->model('Servicios_model');
		$result_list_galeria = $this->Servicios_model->getListGaleriaServicios();
		$listCategoriaServicios = $this->Servicios_model->getListCategoriaServicios();
		$listServicios = $this->Servicios_model->getListServicios();
		$this->load->model('Vehiculo_model');
		$result_list_galeria = $this->Vehiculo_model->getListGaleriaVehiculos();
		$result_list_vehiculos = $this->Vehiculo_model->getListVehiculos();


		$data = array('datosUsuario' => $fila_user,
									'perfil' => $fila_perfil,
									'listCategoriaServicios' => $listCategoriaServicios,
									'listServicios' => $listServicios,
									'result_list_galeria' =>  $result_list_galeria,
									'list_galeria' => $result_list_galeria,
									'list_vehiculos' =>  $result_list_vehiculos
								);

		if ($param == 'agregar') {
			$this->load->view('cliente/nuevoEmbarque',$data);
		}elseif ($param == 'cotizar') {

			$dataEmbarque['nombreInicio'] = $nombreInicio = $this->input->post("nombreInicio");
			$dataEmbarque['correoInicio'] = $correoInicio = $this->input->post("correoInicio");
			$dataEmbarque['telefonoInicio'] = $telefonoInicio = $this->input->post("telefonoInicio");
			$dataEmbarque['celularInicio'] = $celularInicio = $this->input->post("celularInicio");

			$dataEmbarque['coordsInicio'] = $coordsInicio = $this->input->post("coordsInicio");
			$dataEmbarque['estadoInicio'] = $estadoInicio = $this->input->post("estadoInicio");
			$dataEmbarque['municipioInicio'] = $municipioInicio = $this->input->post("municipioInicio");
			$dataEmbarque['calleInicio'] = $calleInicio = $this->input->post("calleInicio");
			$dataEmbarque['coloniaInicio'] = $coloniaInicio = $this->input->post("coloniaInicio");
			$dataEmbarque['numExtInicio'] = $numExtInicio = $this->input->post("numExtInicio");
			$dataEmbarque['numIntInicio'] = $numIntInicio = $this->input->post("numIntInicio");
			$dataEmbarque['cpInicio'] = $cpInicio = $this->input->post("cpInicio");
			$dataEmbarque['referenciaInicio'] = $referenciaInicio = $this->input->post("referenciaInicio");


			$dataEmbarque['nombreFin'] = $nombreFin = $this->input->post("nombreFin");
			$dataEmbarque['correoFin'] = $correoFin = $this->input->post("correoFin");
			$dataEmbarque['telefonoFin'] = $telefonoFin = $this->input->post("telefonoFin");
			$dataEmbarque['celularFin'] = $celularFin = $this->input->post("celularFin");

			$dataEmbarque['coordsFin'] = $coordsFin = $this->input->post("coordsFin");
			$dataEmbarque['estadoFin'] = $estadoFin = $this->input->post("estadoFin");
			$dataEmbarque['municipioFin'] = $municipioFin = $this->input->post("municipioFin");
			$dataEmbarque['calleFin'] = $calleFin = $this->input->post("calleFin");
			$dataEmbarque['coloniaFin'] = $coloniaFin = $this->input->post("coloniaFin");
			$dataEmbarque['numExtFin'] = $numExtFin = $this->input->post("numExtFin");
			$dataEmbarque['numIntFin'] = $numIntFin = $this->input->post("numIntFin");
			$dataEmbarque['cpFin'] = $cpFin = $this->input->post("cpFin");
			$dataEmbarque['referenciaFin'] = $referenciaFin = $this->input->post("referenciaFin");

			$dataEmbarque['tipoMaterial'] = $tipoMaterial = $this->input->post("tipoMaterial");
			$dataEmbarque['alto'] = $alto = $this->input->post("alto");
			$dataEmbarque['ancho'] = $ancho = $this->input->post("ancho");
			$dataEmbarque['largo'] = $largo = $this->input->post("largo");
			$dataEmbarque['peso'] = $peso = $this->input->post("peso");
			$dataEmbarque['descripcionPaquete'] = $descripcionPaquete = $this->input->post("descripcionPaquete");

			$dataEmbarque['vehiculoSeleccionado'] = $vehiculoSeleccionado = $this->input->post("vehiculoSeleccionado");

			$fechaDeFacturacion = date("Y-m-d");
			$diasDePlazoFacturacion = date("d")+7;
			$mesActual = date("m");
			$anioActual = date("Y");
			$fechaDeVencimiento = $anioActual . "-" . $mesActual . "-" . $diasDePlazoFacturacion;


			$dataEmbarque['fechaDeFacturacion'] = $fechaDeFacturacion;
			$dataEmbarque['fechaDeVencimiento'] = $fechaDeVencimiento;

			//====================   Operacion de Cotizacion   =======================//


			$dataEmbarque['totalCotizado'] = $totalCotizado = 23000;

			$totalIva = $totalCotizado * 0.16;

			$totalFacturacion = $totalCotizado + $totalIva;

			$dataEmbarque['totalIva'] = $totalIva;
			$dataEmbarque['totalCotizado'] = $totalCotizado;
			$dataEmbarque['totalFacturacion'] = $totalFacturacion;

			//====================      =======================//

			$dataEmbarque['fechaDeFacturacion'] = $fechaDeFacturacion;
			$dataEmbarque['fechaDeVencimiento'] = $fechaDeVencimiento;




			$embarque = array(
												'id_usuario' => $id,
												'fechaDeFacturacion' => $fechaDeFacturacion,
												'fechaDeVencimiento' => $fechaDeVencimiento,
												'totalCotizado' => $totalCotizado,
												'totalFacturacion' => $totalFacturacion,
												'estadoFacturacion' =>	"Pendiente",
												'tipoPago' =>	"Pendiente",
												'estadoDeEmbarque' =>	"Pendiente"

			);

			$dataEmbarque['folioCotizacion'] =$this->PerfilCliente->nuevoEmbarque($embarque);
			$dataEmbarque['fechaDeVencimiento'] = $dataEmbarque['folioCotizacion'];
			if ($dataEmbarque['folioCotizacion'] != false) {

				$remitenteDestinatario = array(
					'id_embarque' => $dataEmbarque['folioCotizacion'],
					'id_usuario' => $id,
					'nombreInicio' => $nombreInicio,
					'correoInicio' => $correoInicio,
					'telefonoInicio' => $telefonoInicio,
					'celularInicio' => $celularInicio,
					'nombreFin' => $nombreFin,
					'correoFin' => $correoFin,
					'telefonoFin' => $telefonoFin,
					'celularFin' => $celularFin
				);

				$inicioFin = array(
					'id_embarque' => $dataEmbarque['folioCotizacion'],
					'id_usuario' => $id,
					'coordsInicio' => $coordsInicio,
					'estadoInicio' => $estadoInicio,
					'municipioInicio' => $municipioInicio,
					'calleInicio' => $calleInicio,
					'cpInicio' => $cpInicio,
					'coloniaInicio' => $coloniaInicio,
					'numExtInicio' => $numExtInicio,
					'numIntInicio' => $numIntInicio,
					'referenciaInicio' => $referenciaInicio,
					'coordsFin' => $coordsFin,
					'estadoFin' => $estadoFin,
					'municipioFin' => $municipioFin,
					'calleFin' => $calleFin,
					'cpFin' => $cpFin,
					'coloniaFin' => $coloniaFin,
					'numExtFin' => $numExtFin,
					'numIntFin' => $numIntFin,
					'referenciaFin' => $referenciaFin
				);

				$paquete = array(
					'id_embarque' => $dataEmbarque['folioCotizacion'],
					'id_usuario' => $id,
					'tipoMaterial' => $tipoMaterial,
					'alto' => $alto,
					'ancho' => $ancho,
					'largo' => $largo,
					'peso' => $peso,
					'descripcionPaquete' => $descripcionPaquete,
					'vehiculoSeleccionado' => $vehiculoSeleccionado
				);

				$dataEmbarque['nuevoEmbarque'] = $this->PerfilCliente->datosDelEmbarque($remitenteDestinatario,$inicioFin,$paquete);
			}


			$data['dataEmbarque'] = $dataEmbarque;
			//header('Location: '.base_url().'PanelCliente/Embarques/cotizacion/'.$dataEmbarque['folioCotizacion'].'');
			header('Location: '.base_url().'PanelCliente/Embarques');
			//$this->load->view('cliente/cotizacionEmbarque',$data);

		}elseif ($param == 'cotizacion') {
			$data['folioCotizacion'] = $folioCotizacion;
			$data['listaDeEmbarque'] = $listaDeEmbarque = $this->PerfilCliente->listaDeEmbarque($id);
			$data['listaDeRemitenteDestinatario'] = $listaDeRemitenteDestinatario = $this->PerfilCliente->listaDeRemitenteDestinatario($id);
			$data['listaDeInicioFin'] = $listaDeInicioFin = $this->PerfilCliente->listaDeInicioFin($id);
			$data['listaDePaquete'] = $listaDePaquete = $this->PerfilCliente->listaDePaquete($id);

			$this->load->view('cliente/comprobante',$data);

		}elseif ($param == 'pagar') {
			$data['folioCotizacion'] = $folioCotizacion;
			$data['listaDeEmbarque'] = $listaDeEmbarque = $this->PerfilCliente->listaDeEmbarque($id);
			$data['listaDeRemitenteDestinatario'] = $listaDeRemitenteDestinatario = $this->PerfilCliente->listaDeRemitenteDestinatario($id);
			$data['listaDeInicioFin'] = $listaDeInicioFin = $this->PerfilCliente->listaDeInicioFin($id);
			$data['listaDePaquete'] = $listaDePaquete = $this->PerfilCliente->listaDePaquete($id);

			$this->load->view('cliente/pagarEmbarque',$data);

		}elseif ($param == 'pagoComprobante') {
			$data['listaDeEmbarque'] = $listaDeEmbarque = $this->PerfilCliente->listaDeEmbarque($id);
			$data['listaDeRemitenteDestinatario'] = $listaDeRemitenteDestinatario = $this->PerfilCliente->listaDeRemitenteDestinatario($id);
			$data['listaDeInicioFin'] = $listaDeInicioFin = $this->PerfilCliente->listaDeInicioFin($id);
			$data['listaDePaquete'] = $listaDePaquete = $this->PerfilCliente->listaDePaquete($id);


			$mi_imagen = 'dropzoneComprobante';
			$config['upload_path'] = "uploads/pagosComprobantes/";
			$config['file_name'] = $folioCotizacion;
			$config['allowed_types'] = "jpg|jpeg|png";
			$config['max_size'] = "50000";

			$this->load->library('upload', $config);

			if ($this->upload->do_upload($mi_imagen)) {
			   $file_ext = $this->upload->data('file_ext');
				 $urlComprobante = base_url()."uploads/pagosComprobantes/$folioCotizacion$file_ext";
			   $verificacionDePago = $this->PerfilCliente->pagoCorizacionComprobante($id,$folioCotizacion, $urlComprobante);
				 if ($verificacionDePago) {
				 	echo "echo";
					header('Location: '.base_url().'PanelCliente/Embarques');
				}else {
					echo "error";
				}


			}else {
				echo $this->upload->display_errors();
			}



			//header('Location: '.base_url().'PanelCliente/Embarques');

		}elseif ($param == 'pagoPaypal') {
			$data['listaDeEmbarque'] = $listaDeEmbarque = $this->PerfilCliente->listaDeEmbarque($id);
			$data['listaDeRemitenteDestinatario'] = $listaDeRemitenteDestinatario = $this->PerfilCliente->listaDeRemitenteDestinatario($id);
			$data['listaDeInicioFin'] = $listaDeInicioFin = $this->PerfilCliente->listaDeInicioFin($id);
			$data['listaDePaquete'] = $listaDePaquete = $this->PerfilCliente->listaDePaquete($id);

			// PAGO CON PAYPAL

			/*$ClientID = "AX4qlAEfqJcUREJfm5kpTOaEqXA4X_hqwS2AC7c_NAZVSXIUYEFo92j1EN4d968-tqdAyCluZpgJkzKJ";
			$Secret = "EGWZR9zpH8SSgrxh6oo4dsf2xvkFHEqzPHDiGXdsn8NwSrv2mKy5F7AxKigC20Ked1rCPlB88UyZXSRB";

			$Login = curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");
			curl_setopt($Login,CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($Login,CURLOPT_USERPWD, $ClientID.":".$Secret);
			curl_setopt($Login,CURLOPT_POSTFIELDS, "grant_type=client_credentials");

			$RespuestaPayPal=curl_exec($Login);
			//print_r($RespuestaPayPal);
			$objRespuestaPayPal=json_decode($RespuestaPayPal);
			//echo "<br>";
			$AccessToken=$objRespuestaPayPal->access_token;
			//echo "access_token: ".$AccessToken;

			$paypalEmbarque = curl_init("https://api.sandbox.paypal.com/v2/checkout/orders/".$orderID);
			curl_setopt($paypalEmbarque,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$AccessToken));
			curl_setopt($paypalEmbarque,CURLOPT_RETURNTRANSFER, TRUE);
			$respuestaPaypalEmbarque=curl_exec($paypalEmbarque);
			$objRespuestaPaypalEmbarque = json_decode($respuestaPaypalEmbarque);
			echo "<pre>";
			print_r($objRespuestaPaypalEmbarque);
			echo "</pre>";
			// PAGO CON PAYPAL
*/
			$verificacionDePago = $this->PerfilCliente->pagoCorizacionPaypal($id,$folioCotizacion, $orderID, $payerID);

			header('Location: '.base_url().'PanelCliente/Embarques');

		}elseif ($param == 'descargar') {
			$data['folioCotizacion'] = $folioCotizacion;
			$data['listaDeEmbarque'] = $listaDeEmbarque = $this->PerfilCliente->listaDeEmbarque($id);
			$data['listaDeRemitenteDestinatario'] = $listaDeRemitenteDestinatario = $this->PerfilCliente->listaDeRemitenteDestinatario($id);
			$data['listaDeInicioFin'] = $listaDeInicioFin = $this->PerfilCliente->listaDeInicioFin($id);
			$data['listaDePaquete'] = $listaDePaquete = $this->PerfilCliente->listaDePaquete($id);

			$this->load->view('cliente/cotizacionEmbarque',$data);


		}else {
			$data['listaDeEmbarque'] = $listaDeEmbarque = $this->PerfilCliente->listaDeEmbarque($id);
			$data['listaDeRemitenteDestinatario'] = $listaDeRemitenteDestinatario = $this->PerfilCliente->listaDeRemitenteDestinatario($id);
			$data['listaDeInicioFin'] = $listaDeInicioFin = $this->PerfilCliente->listaDeInicioFin($id);
			$data['listaDePaquete'] = $listaDePaquete = $this->PerfilCliente->listaDePaquete($id);

			$this->load->view('cliente/cliente-pagos',$data);
		}
	}
}
