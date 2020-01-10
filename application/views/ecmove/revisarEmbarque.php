<!DOCTYPE html>
<html dir="ltr" lang="es">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>uploads/sistema/favicon.png">
    <title>Revisión</title>
    <!-- Custom CSS -->
    <link href="<?= base_url()?>estilos/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


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
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?= base_url()?>">
                        <!-- Logo icon -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?= base_url()?>uploads/sistema/logo.png" alt="homepage" class="dark-logo" width="200"/>
                             <!-- Light Logo text -->
                             <img src="<?= base_url()?>uploads/sistema/logo.png" class="light-logo" alt="homepage" width="200" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <?php
                        $this->load->view('ecmove/notificaciones');
                         ?>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <?php
                        $this->load->view('ecmove/navHorizontal');
                         ?>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php
                $this->load->view('ecmove/nav');
                 ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Starter Page</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Panel</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <div class="m-r-10">
                                <div class="lastmonth"></div>
                            </div>
                            <div class=""><small>LAST MONTH</small>
                                <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    /*echo "<pre>";
                                    print_r($dataEmbarque);
                                    echo "</pre>";
                                    echo $dataEmbarque['coordsInicio'];
                                    echo "<br>";
                                    echo $dataEmbarque['coordsFin'];*/
                                    ?>
                                    <ul class="nav nav-tabs" role="tablist">
                                      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cotizacion" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Cotización</span></a> </li>
                                      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#navegacion" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Datos</span></a> </li>
                                      <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pago" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Pago</span></a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabcontent-border">
                                        <div class="tab-pane" id="cotizacion" role="tabpanel">
                                            <div class="p-20">
                                              <?php foreach ($listaDeEmbarque->result() as $embarque): ?>
                                                <?php foreach ($listaDeRemitenteDestinatario->result() as $remitenteDestinatario): ?>
                                                  <?php foreach ($listaDeInicioFin->result() as $inicioFin): ?>
                                                    <?php foreach ($listaDePaquete->result() as $paquete): ?>

                                                      <?php if ($embarque->id == $folioCotizacion &&
                                                                $remitenteDestinatario->id_embarque == $folioCotizacion &&
                                                                $inicioFin->id_embarque == $folioCotizacion &&
                                                                $paquete->id_embarque == $folioCotizacion): ?>

                                                        <div class=" printableArea">
                                                              <h3><b>COTIZACIÓN DEL EMBARQUE</b> <span class="pull-right">#<?= $embarque->id?></span></h3>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="pull-left">
                                                                        <address>
                                                                            <h3> &nbsp;<b class="text-danger">ECMOVE</b></h3>
                                                                            <p class="text-muted m-l-5">C-26 / 41 y 41a,
                                                                                <br/> Col. Centro 24100,
                                                                                <br/> Ciudad del Carmen, Camp.
                                                                                <br/>finanzas@ecmove.com
                                                                                <br/>www.ecmove.com</p>
                                                                        </address>
                                                                    </div>
                                                                    <div class="pull-right text-right">
                                                                        <address>
                                                                            <h4 class="font-bold"><?= $remitenteDestinatario->nombreInicio ?>,</h4>
                                                                            <p class="text-muted m-l-30"><?= $inicioFin->calleInicio?>,
                                                                                <br/> Col. <?= $inicioFin->coloniaInicio?> 23100,
                                                                                <br/> <?= $inicioFin->municipioInicio?>, <?= $inicioFin->estadoInicio?></p>

                                                                                <?php
                                                                                $fechaDeFacturacion = explode("-", $embarque->fechaDeFacturacion);
                                                                                $fechaDeVencimiento = explode("-", $embarque->fechaDeVencimiento);

                                                                                $mesFacturacion = obtenerFecha($fechaDeFacturacion[1]);
                                                                                $mesVencimiento = obtenerFecha($fechaDeVencimiento[1]);

                                                                                ?>
                                                                            <p class="m-t-30"><b>Fecha de la factura :</b> <i class="fa fa-calendar"></i> <?php echo "$fechaDeFacturacion[2] $mesFacturacion $fechaDeFacturacion[0]"; ?></p>
                                                                            <p><b>Fecha de vencimiento :</b> <i class="fa fa-calendar"></i> <?php echo "$fechaDeVencimiento[2] $mesVencimiento $fechaDeVencimiento[0]"; ?></p>
                                                                        </address>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="table-responsive m-t-40" style="clear: both;">
                                                                        <table class="table table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="text-center">#</th>
                                                                                    <th>Descripción</th>
                                                                                    <th class="text-left">Embarque</th>
                                                                                    <th class="text-left">Destino</th>
                                                                                    <th class="text-right">Total</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">1</td>
                                                                                    <td>Servicio de transporte: <br>
                                                                                    <?= $paquete->vehiculoSeleccionado?></td>
                                                                                    <td class="text-left"><?= $inicioFin->calleInicio?> <?= $inicioFin->numExtInicio?>, Col. <?= $inicioFin->coloniaInicio?> 23100 <br>
                                                                                    <?= $inicioFin->municipioInicio?>, <?= $inicioFin->estadoInicio?> </td>
                                                                                    <td class="text-left"><?= $inicioFin->calleFin?> <?= $inicioFin->numExtFin?>, Col. <?= $inicioFin->coloniaFin?> 23100 <br>
                                                                                    <?= $inicioFin->municipioFin?>, <?= $inicioFin->estadoFin?> </td>
                                                                                    <td class="text-right"> $<?= number_format($embarque->totalCotizado)?> </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="pull-right m-t-30 text-right">
                                                                      <?php
                                                                      $totalIva = $embarque->totalCotizado * 0.16;

                                                                       ?>
                                                                        <p>IVA (16%) : $<?=number_format($totalIva)?> </p>
                                                                        <hr>
                                                                        <h3><b>Total :</b> $<?= number_format($embarque->totalFacturacion)?></h3>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <hr>
                                                                    <div class="row">
                                                                      <div class="col-md-12">
                                                                        <h4>Datos Bancario</h4>
                                                                        <p>
                                                                          Razón Social: AAAAAAAA AAAAAAAA AAAAAAA SA de CV
                                                                          <br/>RFC: AAAA123456AAA
                                                                          <br/>BANCO DE MEXICO
                                                                          <br/>Tarjeta: 4444 4444 4444 4444
                                                                          <br/>Cuenta: 123456
                                                                          <br/>Clabe: 32134315312431
                                                                        </p>
                                                                      </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Imprimir </span> </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <script type="text/javascript">
                                                          var coordsInicio = '<?php echo $inicioFin->coordsInicio;?>';
                                                          var coordsFin = '<?php echo $inicioFin->coordsFin;?>';
                                                        </script>

                                                      <?php endif; ?>

                                                    <?php endforeach; ?>
                                                  <?php endforeach; ?>
                                                <?php endforeach; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane p-20" id="navegacion" role="tabpanel">
                                          <h4>Ruta a seguir</h4>

                                        </br>
                                        <?php foreach ($listaDeEmbarque->result() as $embarque): ?>
                                          <?php foreach ($listaDeRemitenteDestinatario->result() as $remitenteDestinatario): ?>
                                            <?php foreach ($listaDeInicioFin->result() as $inicioFin): ?>
                                              <?php foreach ($listaDePaquete->result() as $paquete): ?>

                                                <?php if ($embarque->id == $folioCotizacion &&
                                                          $remitenteDestinatario->id_embarque == $folioCotizacion &&
                                                          $inicioFin->id_embarque == $folioCotizacion &&
                                                          $paquete->id_embarque == $folioCotizacion): ?>
                                                  <div class="row">
                                                    <div class="col-md-4">
                                                      <h4>A: Remitente</h4>
                                                      <p class="text-muted m-l-5"><?= $remitenteDestinatario->nombreInicio?>
                                                          <br/> Correo: <?= $remitenteDestinatario->correoInicio?>
                                                          <br/> Telefono: <?= $remitenteDestinatario->telefonoInicio?>
                                                          <br/>Celular: <?= $remitenteDestinatario->celularInicio?>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 ">
                                                      <h4>B: Destinatario</h4>
                                                      <p class="text-muted m-l-5"><?= $remitenteDestinatario->nombreFin?>
                                                          <br/> Correo: <?= $remitenteDestinatario->correoFin?>
                                                          <br/> Telefono: <?= $remitenteDestinatario->telefonoFin?>
                                                          <br/>Celular: <?= $remitenteDestinatario->celularFin?>
                                                      </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <h4>Paquete</h4>
                                                      <p class="text-muted m-l-5">Material: <?= $paquete->tipoMaterial?>
                                                        <?php if ($paquete->tipoMaterial == "Solido"): ?>
                                                          <br/> Alto: <?= $paquete->alto?> Mts
                                                          <br/> Ancho: <?= $paquete->ancho?> Mts
                                                          <br/>Largo: <?= $paquete->largo?> Mts
                                                          <br/>Peso: <?= $paquete->peso?> Kg
                                                        <?php endif; ?>
                                                          <br/>Descripción: <?= $paquete->descripcionPaquete?>
                                                          <br/>Transporte: <?= $paquete->vehiculoSeleccionado?>
                                                      </p>
                                                    </div>
                                                  </div>
                                                <?php endif; ?>

                                              <?php endforeach; ?>
                                            <?php endforeach; ?>
                                          <?php endforeach; ?>
                                          <?php endforeach; ?>
                                        </div>
                                        <div class="tab-pane p-20 active" id="pago" role="tabpanel">
                                          <?php foreach ($listaDeEmbarque->result() as $embarque): ?>
                                            <?php foreach ($listaDeRemitenteDestinatario->result() as $remitenteDestinatario): ?>
                                              <?php foreach ($listaDeInicioFin->result() as $inicioFin): ?>
                                                <?php foreach ($listaDePaquete->result() as $paquete): ?>
                                                  <?php if ($embarque->id == $folioCotizacion &&
                                                            $remitenteDestinatario->id_embarque == $folioCotizacion &&
                                                            $inicioFin->id_embarque == $folioCotizacion &&
                                                            $paquete->id_embarque == $folioCotizacion): ?>

                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                <p style="font-size:20px;">Tipo de Pago: <b><?= $embarque->tipoPago ?></b></p>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <p style="font-size:20px;">Folio de Cotización: <b>#<?= $embarque->id?></b></p>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <p style="font-size:20px;">Estado de Facturacion: <b><?= $embarque->estadoFacturacion ?></b></p>
                                                              </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                              <div class="col-md-6">
                                                                <?php if ($embarque->tipoPago == "Comprobante"): ?>
                                                                  <?php foreach ($pagoComprobante->result() as $Comprobantes): ?>
                                                                    <div class="media">
                                                                      <img class="m-r-15 img-fluid w-100" src="<?=base_url()?><?=$Comprobantes->urlComprobante?>" alt="Generic placeholder image">
                                                                    </div>

                                                                  <?php endforeach; ?>

                                                                <?php endif; ?>
                                                              </div>
                                                              <div class="col-md-6 text-center">
                                                                <div class="row" style="height: 100%; display: flex; align-items: center;">
                                                                  <div class="col-md-12">
                                                                    <div class="row">
                                                                      <div class="col-md-12">
                                                                        <h3>Total de Factura</h3>
                                                                        <h4>$<?= number_format($embarque->totalFacturacion)?></h4>
                                                                      </div>
                                                                      <div class="col-md-12">
                                                                        <div class="button-group">
                                                                          <a href="<?=base_url()?>PanelEcmove/Embarques/AprobarEmbarque/<?=$folioCotizacion?>"><button type="button" class="btn waves-effect waves-light btn-success" style="width:50%;font-size:18px;"><b>Aprovar</b></button></a>
                                                                        </div>
                                                                      </div>
                                                                      <div class="col-md-12">
                                                                        <div class="button-group">
                                                                          <a href="<?=base_url()?>PanelEcmove/Embarques/DeclinarEmbarque/<?=$folioCotizacion?>"><button type="button" class="btn waves-effect waves-light btn-danger" style="width:50%;font-size:18px;"><b>Declinar</b></button></a>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>

                                                  <?php endif; ?>

                                                <?php endforeach; ?>
                                              <?php endforeach; ?>
                                            <?php endforeach; ?>
                                          <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
             <footer class="footer text-center">
       Todos los derechos reservados por Xtreme admin. Diseñado y desarrollado por <a href="https://artbot.mx/">ARTBOT</a>.
</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-15 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                            <label class="custom-control-label" for="theme-view">Dark Theme</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                            <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                            <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                            <label class="custom-control-label" for="header-position">Fixed Header</label>
                        </div>
                        <div class="custom-control custom-checkbox m-t-10">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none m-t-20">
                        <li>
                            <div class="message-center chat-scroll">
                                <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </span>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </span>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </span>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <span class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?= base_url()?>estilos/assets/images/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?= base_url()?>estilos/assets/images/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?= base_url()?>estilos/assets/images/users/4.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?= base_url()?>estilos/assets/images/users/6.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url()?>estilos/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url()?>estilos/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url()?>estilos/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?= base_url()?>estilos/dist/js/app.min.js"></script>
    <script src="<?= base_url()?>estilos/dist/js/app.init.light-sidebar.js"></script>
    <script src="<?= base_url()?>estilos/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url()?>estilos/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url()?>estilos/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url()?>estilos/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url()?>estilos/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url()?>estilos/dist/js/custom.min.js"></script>
</body>


</html>
