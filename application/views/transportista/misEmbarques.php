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
    <title>Panel</title>

    <link href="<?= base_url()?>estilos/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?= base_url()?>estilos/assets/libs/jquery-steps/steps.css" rel="stylesheet">

    <link href="<?= base_url()?>estilos/assets/libs/footable/css/footable.core.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url()?>estilos/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <style media="screen">
    #map {
      height: 100%;
      float: left;
      width: 100%;
    }
</style>
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
                        $this->load->view('transportista/notificaciones');
                         ?>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <?php
                        $this->load->view('transportista/navHorizontal');
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
                $this->load->view('transportista/nav');
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
                        <h4 class="page-title">Mis Embarques</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mis Embarques</li>
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
              <?php $trabajando = false; ?>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="row">
                                <?php foreach ($listaDeViajes->result() as $viaje): ?>
                                  <?php if ($viaje->id_transportista == $perfil->id_user): ?>
                                    <?php foreach ($listaDeEmbarques->result() as $embarque): ?>
                                      <?php if ($embarque->estadoDeEmbarque != "Completado" && $viaje->id_embarque == $embarque->id): ?>
                                        <?php foreach ($listaDeInicioFin->result() as $inicioFin): ?>
                                          <?php if ($inicioFin->id_embarque == $embarque->id): ?>
                                            <?php foreach ($listaDeRemitenteDestinatario->result() as $remitenteDestinatario): ?>
                                              <?php if ($remitenteDestinatario->id_embarque == $embarque->id): ?>
                                                <?php foreach ($listaDePaquete->result() as $paquete): ?>
                                                  <?php if ($paquete->id_embarque == $embarque->id): ?>

                                            <?php
                                            $trabajando = true;
                                             ?>
                                            <div class="col-12">
                                                <div class="">
                                                    <div class="wizard-content">
                                                        <h4 class="card-title">Proceso de Embarque #<?=$embarque->id?></h4>
                                                        <form action="#" class="validation-wizard wizard-circle m-t-40" id="proceso">
                                                            <!-- Step 1 -->
                                                            <h6>Asignado</h6>
                                                            <section>

                                                            </section>
                                                            <!-- Step 2 -->
                                                            <h6>Embarcado</h6>
                                                            <section>

                                                            </section>
                                                            <!-- Step 3 -->
                                                            <h6>En ruta</h6>
                                                            <section>

                                                            </section>
                                                            <!-- Step 4 -->
                                                            <h6>Completado</h6>
                                                            <section>

                                                            </section>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                              var estadoEmbarque = "<?php echo $embarque->estadoDeEmbarque; ?>"
                                              var procesoLi = document.getElementById("proceso").getElementsByTagName("li");
                                              var procesoDiv = document.getElementById("proceso").getElementsByTagName("div");
                                              window.onload= () => {
                                                procesoDiv[2].style.display = "none";

                                                switch (estadoEmbarque) {
                                                  case "Asignado":
                                                    procesoLi[0].classList.remove("current")
                                                    procesoLi[0].classList.add("done")
                                                    procesoLi[1].classList.remove("disabled")
                                                    procesoLi[1].classList.add("current")
                                                  break;
                                                  case "Embarcado":
                                                    procesoLi[0].classList.remove("current")
                                                    procesoLi[0].classList.add("done")
                                                    procesoLi[1].classList.remove("current")
                                                    procesoLi[1].classList.add("done")
                                                    procesoLi[2].classList.remove("disabled")
                                                    procesoLi[2].classList.add("current")
                                                  break;
                                                  case "En ruta":
                                                    procesoLi[0].classList.remove("current")
                                                    procesoLi[0].classList.add("done")
                                                    procesoLi[1].classList.remove("current")
                                                    procesoLi[1].classList.add("done")
                                                    procesoLi[2].classList.remove("current")
                                                    procesoLi[2].classList.add("done")
                                                    procesoLi[3].classList.remove("disabled")
                                                    procesoLi[3].classList.add("current")
                                                  break;
                                                  case "Completado":
                                                    procesoLi[0].classList.remove("current")
                                                    procesoLi[0].classList.add("done")
                                                    procesoLi[1].classList.remove("current")
                                                    procesoLi[1].classList.add("done")
                                                    procesoLi[2].classList.remove("current")
                                                    procesoLi[2].classList.add("done")
                                                    procesoLi[3].classList.remove("current")
                                                    procesoLi[3].classList.add("done")
                                                    procesoLi[4].classList.remove("disabled")
                                                    procesoLi[4].classList.add("current")
                                                  break;
                                                  default:

                                                }

                                              }
                                              var coordsInicio = '<?php echo $inicioFin->coordsInicio;?>';
                                              var coordsFin = '<?php echo $inicioFin->coordsFin;?>';
                                            </script>

                                            <br>
                                            <div class="col-md-12">
                                              <div class="row">
                                                <div class="col-md-12" style="height:500px;">
                                                  <div id="map"></div>
                                                </div>
                                              </div>
                                              <div class="row m-20">
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
                                            </div>
                                                  <?php endif; ?>
                                                <?php endforeach; ?>
                                              <?php endif; ?>
                                            <?php endforeach; ?>
                                          <?php endif; ?>
                                        <?php endforeach; ?>
                                      <?php endif; ?>
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                                <?php endforeach; ?>

                                <div class="col-md-6 m-t-20">
                                  <h4 class="card-title">Tabla de Mis Embarques</h4>
                                </div>
                                <?php
                                if (!$trabajando) {
                                  ?>
                                  <div class="col-md-6 text-right m-t-20">
                                    <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Buscar Nuevo Embarque</button>
                                  </div>
                                  <?php
                                }
                                 ?>
                                <!-- sample modal content -->
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Buscar Nuevo Embarque</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="table-responsive">
                                                  <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                                      <thead>
                                                          <tr>
                                                              <th>Origen</th>
                                                              <th>Destino</th>
                                                              <th>Ganacia</th>
                                                              <th>Km</th>
                                                              <th>Act</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                        <?php foreach ($listaDeEmbarques->result() as $embarque): ?>
                                                          <?php if ($embarque->estadoDeEmbarque == "Pendiente"): ?>
                                                            <?php foreach ($listaDeInicioFin->result() as $inicioFin): ?>
                                                              <?php if ($embarque->id == $inicioFin->id_embarque): ?>
                                                          <tr>
                                                            <td><?=$inicioFin->estadoInicio?>, <?=$inicioFin->municipioInicio?></td>
                                                            <td><?=$inicioFin->estadoFin?>, <?=$inicioFin->municipioFin?></td>
                                                            <td>$ <?php echo number_format($embarque->totalFacturacion); ?></td>
                                                            <td>220Km</td>
                                                            <td>
                                                              <a href="<?=base_url()?>PanelTransportista/MisEmbarques/SeleccionarEmbarque/<?=$embarque->id?>"><button type="button" class="btn waves-effect waves-light btn-success">Seleccionar</button></a>
                                                            </td>
                                                          </tr>
                                                            <?php endif; ?>
                                                          <?php endforeach; ?>
                                                        <?php endif; ?>
                                                      <?php endforeach; ?>
                                                      </tbody>
                                                      <tfoot>
                                                          <tr>

                                                              <td colspan="7">
                                                                  <div class="">
                                                                      <nav aria-label="Page navigation example">
                                                                          <ul class="pagination float-right"></ul>
                                                                      </nav>
                                                                  </div>
                                                              </td>
                                                          </tr>
                                                      </tfoot>
                                                  </table>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                              </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Folio</th>
                                                <th>Origen</th>
                                                <th>Destino</th>
                                                <th>Ganacia</th>
                                                <th>Fecha de Entrega</th>
                                                <th>Estado</th>
                                                <th>Act</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($listaDeViajes->result() as $viaje): ?>
                                            <?php if ($viaje->id_transportista == $perfil->id_user): ?>
                                              <?php foreach ($listaDeEmbarques->result() as $embarque): ?>
                                                <?php if ($viaje->id_embarque == $embarque->id): ?>
                                                    <tr>
                                                      <td>#<?=$embarque->id?></td>
                                                      <td>Solido</td>
                                                      <td>Refacciones de autos</td>
                                                      <td>$26,800.00</td>
                                                      <!--<td><span class="label label-<?php if($cliente->estado == "Activo"){echo "success";}elseif($cliente->estado == "Bloqueado"){echo "danger";}elseif ($cliente->estado == "Pendiente") {
                                                      echo "warning";
                                                      } ?>"><?=$cliente->estado?></span></td>-->
                                                      <td>29 de Octubre del 2019</td>
                                                      <td><span class="label label-success">Completado</span></td>
                                                      <td>
                                                        <a href="#"><button type="button" class="btn waves-effect waves-light btn-dark">Ver</button></a>
                                                      </td>
                                                    </tr>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>
                                          <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>

                                                <td colspan="7">
                                                    <div class="">
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination float-right"></ul>
                                                        </nav>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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
    <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
    </script>
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

    <script src="<?= base_url()?>estilos/assets/libs/footable/dist/footable.all.min.js"></script>
    <script src="<?= base_url()?>estilos/dist/js/pages/tables/footable-init.js"></script>

    <script src="<?= base_url()?>estilos/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url()?>estilos/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>

    <script>




    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function(event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function(event, currentIndex) {
            swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
        }
    })


    </script>


    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7
        });
        directionsRenderer.setMap(map);

          calculateAndDisplayRoute(directionsService, directionsRenderer);

      }

      function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        directionsService.route(
            {
              origin:  coordsInicio,
              destination:  coordsFin,
              travelMode: 'DRIVING'
            },
            function(response, status) {
              if (status === 'OK') {
                directionsRenderer.setDirections(response);
              } else {
                window.alert('Directions request failed due to ' + status);
              }
            });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9pK_ZAsjpURG7WHpwIDoipu00zcZNciA&callback=initMap">
    </script>
</body>


</html>
