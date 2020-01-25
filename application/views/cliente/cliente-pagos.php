<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>ECMOVE</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>estilos/styles/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>estilos/styles/framework.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>estilos/fonts/css/fontawesome-all.min.css">
<!-- Don't forget to update PWA version (must be same) in pwa.js & manifest.json -->
<link rel="manifest" href="_manifest.json" data-pwa-version="set_by_pwa.js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-background="none" data-highlight="red2">

<div id="page">

  <script type="text/javascript" src="<?= base_url()?>estilos/scripts/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url()?>estilos/scripts/plugins.js"></script>
  <script type="text/javascript" src="<?= base_url()?>estilos/scripts/custom.js"></script>
  <script type="text/javascript" src="<?= base_url()?>estilos/sistema/lib/jsPDF/jspdf.min.js"></script>

  <script type="text/javascript">
    function generarpdf(){
      //Android.showToast("Hola");
      var doc = new jsPDF();

      doc.text(20, 20, 'Hola mundo');
      doc.text(20, 30, 'Vamos a generar un pdf desde el lado del cliente');

      // Add new page
      doc.addPage();
      doc.text(20, 20, 'Visita programacion.net');

      // Save the PDF
      doc.save('documento.pdf');
    }
  </script>



      <?php
        function obtenerFecha($mes = ''){
          switch ($mes) {
            case '01':
              return "Enero";
              break;
            case '02':
              return "Febrero";
              break;
            case '03':
              return "Marzo";
              break;
            case '04':
              return "Abril";
              break;
            case '05':
              return "Mayo";
              break;
            case '06':
              return "Junio";
              break;
            case '07':
              return "Julio";
              break;
            case '08':
              return "Agosto";
              break;
            case '09':
              return "Septiembre";
              break;
            case '10':
              return "Octubre";
              break;
            case '11':
              return "Noviembre";
              break;
            case '12':
              return "Diciembre";
              break;

            default:
              return "0";
              break;
          }
        }
      ?>

    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>

	<div class="header header-fixed header-logo-center">
        <a href="#" class="header-title">ECMOVE</a>
		<a href="#" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
	</div>

      <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
          <a href="<?= base_url()?>PanelCliente/Perfil"><i class="fa fa-user"></i><span>Perfil</span></a>
          <a href="<?= base_url()?>PanelCliente/Viajes"><i class="fa fa-road"></i><span>Viajes</span></a>
          <a href="<?= base_url()?>"><i class="fa fa-box"></i><span>Carga</span></a>
          <a href="javascript:location.reload()" class="active-nav"><i class="fa fa-wallet"></i><span>Pagos</span></a>
          <a href="<?=base_url()?>PanelCliente/Contacto" data-menu="menu-settings"><i class="fa fa-question"></i><span>Ayuda</span></a>
          <div class="clear"></div>
      </div>

    <div class="page-content header-clear-medium">



      <?php
      if (!empty($listaDeEmbarque)) {
        foreach ($listaDeEmbarque->result() as $embarque) {
          foreach ($listaDeInicioFin->result() as $inicioFin ) {
            if ($embarque->id == $inicioFin->id_embarque) {
              $fechaDeFacturacion = explode("-", $embarque->fechaDeFacturacion);
              $fechaDeVencimiento = explode("-", $embarque->fechaDeVencimiento);

              $mesFacturacion = obtenerFecha($fechaDeFacturacion[1]);
              $mesVencimiento = obtenerFecha($fechaDeVencimiento[1]);

              ?>
              <div data-height="140" class="caption caption-margins round-medium shadow-huge top-30">
                  <div class="caption-top top-25 left-20">
                      <h2 class="bolder color-white">#<?=$embarque->id?></h2>
                      <p class="color-white font-12 opacity-70 top-15 bottom-5"><i class="far fa-calendar"></i> <?php echo "$fechaDeFacturacion[2] $mesFacturacion $fechaDeFacturacion[0]"; ?> <!--<i class="left-15 far fa-clock"></i> Horario--></p>
                      <p class="under-heading color-white font-12 opacity-70" style="margin-bottom:0px !important;"><i class="fa fa-map-marker-alt"></i>A: <?php echo $inicioFin->municipioInicio. " " .$inicioFin->estadoInicio; ?></p>
                      <p class="under-heading color-white font-12 opacity-70"><i class="fa fa-map-marker-alt"></i>B: <?php echo $inicioFin->municipioFin. ", " .$inicioFin->estadoFin; ?></p>
                  </div>
                  <div class="caption-center right-20">
                      <a data-menu="menu-<?=$embarque->id?>" href="#" class="float-right bg-highlight button button-xs round-huge font-11 bottom-0 top-5">DETALLES</a>
                  </div>
                  <div class="caption-overlay bg-black opacity-90"></div>
                  <div class="caption-bg bg-18"></div>
              </div>
              <?php
            }

          }


        }
      }
       ?>





    </div>
    <!-- Page Content Class Ends Here-->



    <?php
    if (!empty($listaDeEmbarque)) {
      foreach ($listaDeEmbarque->result() as $embarque) {
        foreach ($listaDeInicioFin->result() as $inicioFin ) {
          foreach ($listaDePaquete->result() as $paquete ) {
          if ($embarque->id == $inicioFin->id_embarque && $embarque->id == $paquete->id_embarque) {

            $fechaDeFacturacion = explode("-", $embarque->fechaDeFacturacion);
            $fechaDeVencimiento = explode("-", $embarque->fechaDeVencimiento);

            $mesFacturacion = obtenerFecha($fechaDeFacturacion[1]);
            $mesVencimiento = obtenerFecha($fechaDeVencimiento[1]);

            ?>

            <div id="menu-<?=$embarque->id?>" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="460" data-menu-effect="menu-over">
                <div class="content bottom-0 top-30">
                    <div class="one-half" style="width:35%">
                        <img data-src="<?= base_url()?>estilos/images/icons/18.png" src="<?= base_url()?>estilos/images/empty.png" class="preload-image center-horizontal" width="110">
                    </div>
                    <div class="one-half last-column" style="width:60%;">
                        <h3 class="bolder">Detalles de la carga</h3>
                        <p class="bottom-0"><strong>Inicio: </strong><?php echo $inicioFin->municipioInicio. " " .$inicioFin->estadoInicio; ?></p>
                        <p class="bottom-0"><strong>Destino: </strong><?php echo $inicioFin->municipioFin. ", " .$inicioFin->estadoFin; ?></p>
                        <p class="bottom-0"><strong>Cotización: </strong>$<?=number_format($embarque->totalFacturacion)?></p>
                        <p class="bottom-0"><strong>Estado de Pago: </strong><?=$embarque->estadoFacturacion?> </p>
                    </div>
                    <div class="clear"></div>
                    <div class="divider top-10 bottom-10"></div>
                    <h5 class="bold">Descripción de paquete</h5>
                    <p class="bottom-10">
                        <?=$paquete->descripcionPaquete?>
                    </p>
                    <div class="divider top-10 bottom-10"></div>
                    <div class="one-half"  >
                        <a href="<?=base_url()?>PanelCliente/Embarques/cotizacion/<?=$embarque->id?>" style="<?php if($embarque->estadoFacturacion == 'Procesando Pago'){echo 'display: contents;';} ?>" class="button button-s round-small shadow-huge button-full bg-green1-dark">PAGAR</a>

                    </div>
                    <div class="one-half last-column">
                        <a href="#" class="close-menu button button-s round-small shadow-huge button-full bg-blue2-dark">MÁS TARDE</a>
                    </div>
                        <!-- <a href="<?=base_url()?>PanelCliente/Embarques/descargar/<?=$embarque->id?>" class="button button-s round-small shadow-huge button-full bg-blue2-dark">DESCARGAR COTIZACIÓN</a> -->
                </div>
            </div>

            <?php
          }
        }
        }


      }
    }
     ?>

    <!--Menu Task Box-->
    <!-- <div id="menu-task-item" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="460" data-menu-effect="menu-over">
        <div class="content bottom-0 top-30">
            <div class="one-half" style="width:35%">
                <img data-src="<?= base_url()?>estilos/images/icons/18.png" src="<?= base_url()?>estilos/images/empty.png" class="preload-image center-horizontal" width="110">
            </div>
            <div class="one-half last-column" style="width:60%;">
                <h3 class="bolder">Detalles de la carga</h3>
                <p class="bottom-0"><strong>Inicio:</strong>San Cristobal</p>
                <p class="bottom-0"><strong>Destino:</strong> name@domain.com</p>
                <p class="bottom-0"><strong>Dimensión:</strong> 2.5m x 4.0m</p>
                <p class="bottom-0"><strong>Peso:</strong> 200kg </p>
            </div>
            <div class="clear"></div>
            <div class="divider top-10 bottom-10"></div>
            <h5 class="bold">Comentarios</h5>
            <p class="bottom-10">
                Se requiere entrar por la zona adicional paralela a tu corazón
            </p>
            <div class="divider top-10 bottom-10"></div>
            <div class="one-half">
                <a href="comprobante.html" class="button button-s round-small shadow-huge button-full bg-green1-dark">ACEPTAR</a>

            </div>
            <div class="one-half last-column">
                <a href="#" class="close-menu button button-s round-small shadow-huge button-full bg-blue2-dark">MÁS TARDE</a>
            </div>
        </div>
    </div> -->






    <!-- Menu Settings Backgrounds-->

    <!-- Menu Share-->
    <div id="menu-share" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="340" data-menu-effect="menu-over">


    </div>

    <div class="menu-hider"></div>
</div>



</body>
