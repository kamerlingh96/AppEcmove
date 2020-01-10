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
    <title>Servicios</title>
    <!-- Custom CSS -->
    <link href="<?= base_url()?>estilos/dist/css/style.min.css" rel="stylesheet">

    <link href="<?= base_url()?>estilos/assets/libs/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
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
                        <h4 class="page-title">Servicios</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Servicios</li>
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
                            <h4 class="card-title">Lista de Vehiculos</h4>
                            <h6 class="card-subtitle"></h6>
                            <button type="button" class="btn btn-danger btn-rounded m-t-10 mb-2 float-right m-l-10" data-toggle="modal" data-target="#add-contact" id="sa-params">Eliminar Categoría Seleccionada</button>
                            <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right m-l-10" data-toggle="modal" data-target="#add-categoria">Agregar Nueva Categoría</button>
                            <button type="button" class="btn btn-success btn-rounded m-t-10 mb-2 float-right" data-toggle="modal" data-target="#edit-categoria" onclick="servicioSeleccionadoaction()">Editar Categoría Seleccionada</button>




                            <!-- Nav tabs -->

                            <?php
                            $primero = true;
                             ?>
                            <ul class="nav nav-tabs" role="tablist" style="margin-top:80px;">
                              <?php
                              foreach ($listCategoriaServicios->result() as $fila) {
                              ?>
<li class="nav-item"> <a class="nav-link <?php if($primero){echo "active";$primero = false;} ?>" id="servicioTabId<?= $fila->id?>" onclick="cambiarServicioSeleccionado('<?= $fila->id?>','<?= $fila->titulo?>')" data-value="<?= $fila->id?>,<?= $fila->titulo?>" data-toggle="tab" href="#Servicio_<?= $fila->id?>" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><?= $fila->titulo?></span></a> </li>
                                <div id="add-servicio<?= $fila->id?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Agregar Servicio</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      </div>
                                      <form class="" action="<?= base_url()?>Servicios/agregarServicio" method="post" id="agregarServicio">
                                        <div class="modal-body">
                                          <from class="form-horizontal form-material">
                                            <div class="form-group">
                                              <div class="row">
                                                <div class="col-md-6 m-b-20">
                                                  <input type="text" class="form-control" placeholder="ID" name="id" value="<?= $fila->id?>" readonly>
                                                </div>
                                                <div class="col-md-6 m-b-20">
                                                  <input type="text" class="form-control" placeholder="Título" name="titulo" readonly id="titulo<?= $fila->id?>">
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-6 m-b-20">
                                                  <h6 class="card-subtitle">Tarifa base</h6>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control" value="0" name="tarifaBase">
                                                  </div>
                                                </div>
                                                <div class="col-md-6 m-b-20">
                                                  <h6 class="card-subtitle">/100 Metros</h6>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control" value="0" name="cienMetros">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-6 m-b-20">
                                                  <h6 class="card-subtitle">/Minuto de espera</h6>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control" value="0" name="minutoEspera">
                                                  </div>
                                                </div>
                                                <div class="col-md-6 m-b-20">
                                                  <h6 class="card-subtitle">/Minuto de viaje</h6>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control" value="0" name="minutoViaje">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-6 m-b-20">
                                                  <h6 class="card-subtitle">Tiempo disponible desde</h6>
                                                  <div class="form-group">
                                                      <input type="time" class="form-control" value="00:00" name="tiempoDisponibleDesde">
                                                  </div>
                                                </div>
                                                <div class="col-md-6 m-b-20">
                                                  <h6 class="card-subtitle">Tiempo disponible hasta</h6>
                                                  <div class="form-group">
                                                      <input type="time" class="form-control" value="23:59" name="tiempoDisponibleHasta">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" placeholder="direccion" value="" id="direccionURL<?= $fila->id?>" name="url" readonly>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-12 m-b-20" style="text-align:center;">
                                                  <img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="user" width="150" onclick="cambiar()" id="imgSelecionada<?= $fila->id?>" style="display:none;">
                                                </div>
                                                <div class="col-md-12 m-b-20" style="text-align:center;">
                                                  <button type="button" class="btn btn-rounded m-t-10 mb-2 float-center" data-toggle="modal" data-target="#agregarMedia<?= $fila->id?>">SELECCIONAR MEDIO...</button>

                                                </div>
                                              </div>
                                            </div>
                                          </from>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-info waves-effect">Guardar</button>
                                          <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                        </div>
                                      </form>
                                    </div>
                                  <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>

                                <div id="agregarMedia<?= $fila->id?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                  <div class="modal-dialog" style="max-width:800px;">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Seleccionar Medio (<?= $fila->titulo?>)</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      </div>
                                      <div class="modal-body">
                                        <from class="form-horizontal form-material">
                                          <div class="form-group">
                                            <div class="row">
                                              <div class="col-md-8 m-b-20" style="height:430px;overflow: scroll;" id="imgMedia">
                                                <?php foreach ($result_list_galeria->result() as $fila_galeria) {
                                                  ?>
                                                  <div style="margin:5px;float:left;">
                                                    <img src="<?= base_url()?><?= $fila_galeria->direccion?>" alt="user" width="150" height="120" onclick="cambiar()" id="img<?php echo $fila_galeria->media_id;?>" title="<?=$fila_galeria->vehiculo?>,<?= $fila->id?>">
                                                  </div>
                                                  <?php
                                                  }
                                                ?>

                                              </div>
                                              <div class="col-md-4 m-b-20">
                                                <div class="col-md-12" style="height:220px;">
                                                    <img src="<?= base_url()?>estilos/assets/images/users/4.jpg" alt="user" width="100%" height="100%" class="rounded-circle" id="imagenSelec<?= $fila->id?>">
                                                </div>
                                                <div class="col-md-12 m-t-20">
                                                  <input type="text" class="form-control" placeholder="Título" disabled id="tituloImagen<?= $fila->id?>">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </from>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal" onclick="selecionarImg()">Guardar</button>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                      </div>
                                    </div>
                                  <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>

                              <?php
                              }

                               ?>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border p-20">
                              <?php
                              $segundo = true;
                               ?>
                              <?php
                              foreach ($listCategoriaServicios->result() as $fila) {
                              ?>
                              <div class="tab-pane <?php if($segundo){echo "active";$segundo = false;} ?>" id="Servicio_<?= $fila->id?>" role="tabpanel">
                                <div class="table-responsive">

                                  <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right m-l-10" data-toggle="modal" data-target="#add-servicio<?= $fila->id?>">Agregar Servicio</button>
                                  <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-md" data-paging="true" data-paging-size="7" style="">
                                    <thead>
                                      <tr class="footable-header">
                                        <th class="footable-first-visible" style="display: table-cell;">ID</th>
                                        <th style="display: table-cell;">Imagen</th>
                                        <th style="display: table-cell;">Título</th>
                                        <th style="display: table-cell;">Tarifa Base</th>
                                        <th style="display: table-cell;">/100 Metros</th>
                                        <th style="display: table-cell;">/Minuto de espera</th>
                                        <th style="display: table-cell;">/Minuto de viaje</th>
                                        <th style="display: table-cell;">Tiempo disponible desde</th>
                                        <th style="display: table-cell;">Tiempo disponible hasta</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                      <?php
                                        foreach ($listServicios->result() as $servicio) {
                                          if ($servicio->id_categoria_servicio == $fila->id) {
                                            ?>
                                            <tr>
                                              <td class="footable-first-visible" style="display: table-cell;"><?= $servicio->id?></td>
                                              <td style="display: table-cell;">
                                                <a href="javascript:void(0)"><img src="<?= base_url()?><?= $servicio->direccion?>" alt="user" height="40"></a>
                                              </td>
                                              <td style="display: table-cell;"><?= $servicio->titulo?></td>
                                              <td style="display: table-cell;"><?= $servicio->tarifa_base?></td>
                                              <td style="display: table-cell;"><?= $servicio->por_cien_metros?></td>
                                              <td style="display: table-cell;"><?= $servicio->minuto_espera?></td>
                                              <td style="display: table-cell;"><?= $servicio->por_minuto_pasado?></td>
                                              <td style="display: table-cell;"><?= $servicio->tiempo_disponible_desde?></td>
                                              <td style="display: table-cell;"><?= $servicio->tiempo_disponible_hasta?></td>
                                            </tr>
                                            <?php
                                          }
                                        }
                                       ?>



                                    </tbody>
                                    <tfoot>
                                      <tr class="footable-paging">
                                        <td colspan="9">
                                          <div class="footable-pagination-wrapper">
                                            <ul class="pagination justify-content-center">
                                              <li class="footable-page-nav disabled" data-page="first"><a class="footable-page-link" href="#">«</a></li>
                                              <li class="footable-page-nav disabled" data-page="prev"><a class="footable-page-link" href="#">‹</a></li>
                                              <li class="footable-page visible active" data-page="1"><a class="footable-page-link" href="#">1</a></li>
                                              <li class="footable-page visible"   data-page="2"><a class="footable-page-link" href="#">2</a></li>
                                              <li class="footable-page-nav" data-page="next"><a class="footable-page-link" href="#">›</a></li>
                                              <li class="footable-page-nav" data-page="last"><a class="footable-page-link" href="#">»</a></li>
                                            </ul>
                                            <div class="divider"></div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tfoot>
                                  </table>
                                </div>
                              </div>
                              <?php
                              }
                               ?>
                            </div>

                            <div id="edit-categoria" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Editar Categoría Seleccionada</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  </div>
                                  <form class="" action="<?= base_url()?>Servicios/editarCategoria" method="post" id="editarCategoria">
                                    <div class="modal-body">
                                        <div class="form-group">
                                          <div class="col-md-12 m-b-20" style="display:none;">
                                            <input type="text" class="form-control" name="id" placeholder="ID" id="textIdServicio">
                                          </div>
                                          <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" name="titulo" placeholder="Título" value="Servicio 1" id="textTituloServicio">
                                          </div>
                                          <div class="col-md-12 m-b-20">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-info waves-effect">Guardar</button>
                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                    </div>
                                  </form>
                                </div>
                              <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>


                            <!-- Add Contact Popup Model -->
                            <div id="add-categoria" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Agregar Nueva Categoría</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  </div>
                                  <form class="" action="<?= base_url()?>Servicios/agregarCategoria" method="post" id="agregarCategoria">
                                    <div class="modal-body">
                                      <from class="form-horizontal form-material">
                                        <div class="form-group">
                                          <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="ID" disabled>
                                          </div>
                                          <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Título" name="titulo">
                                          </div>
                                          <div class="col-md-12 m-b-20">
                                          </div>
                                        </div>
                                      </from>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-info waves-effect">Guardar</button>
                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                    </div>
                                  </form>
                                </div>
                              <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
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
    <script src="<?= base_url()?>estilos/sistema/js/agregarNuevaCategoria.js"></script>
    <script src="<?= base_url()?>estilos/sistema/js/editarCategoria.js"></script>
    <script src="<?= base_url()?>estilos/sistema/js/agregarNuevoServicio.js"></script>
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    !function($) {
        "use strict";

        var SweetAlert = function() {};

        //examples
        SweetAlert.prototype.init = function() {


        //Parameter
        $('#sa-params').click(function(){
          swal({
            title: "¿Estás seguro?",
            text: "Una vez eliminado, no podrá recuperar la información! "+servicioSeleccionado,
            icon: "warning",
            buttons: ["Cancelar", true],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {

              $.ajax({
                url:"Servicios/eliminarCategoria",
                type:"POST",
                data:{id:idservicioSeleccionado},
                success:function(respuesta){
                  alert(respuesta);
                  if (respuesta == "Categoria Eliminada Exitosamente") {
                    //swal("Poof! La Categoria ha sido eliminada!", {
                      //icon: "success",
                    //});
                    window.location=base_url;
                  }
                }
              });



            } else {
              //swal("Your imaginary file is safe!");
            }
          });
        });



        },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
    }(window.jQuery),

    //initializing
    function($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);

    </script>


    <script type="text/javascript">
    var brandImg = document.querySelectorAll("#imgMedia img");

    for (var i = 0; i < brandImg.length; i++) {
    var ckEdiloop = brandImg[i];
    var imagenSelecId;
    var tituloImagenSelecId;
    ckEdiloop.addEventListener("click", function(el){
        var thisSrc = this.src;
        var thisTittle = this.title;
        var ckEdImg = '<p><img src="'+thisSrc+'" /></p>'; // La forma como las imágenes son envueltas en ckEditor
        var cadena = thisTittle,
        separador = ",", // un espacio en blanco
        limite    = 2,
        arregloDeSubCadenas = cadena.split(separador, limite);
        imagenSelecId = arregloDeSubCadenas[1];
        tituloImagenSelecId =arregloDeSubCadenas[0];
        console.log(arregloDeSubCadenas);
        document.getElementById('imagenSelec'+arregloDeSubCadenas[1]).src = thisSrc;
        document.getElementById('tituloImagen'+arregloDeSubCadenas[1]).value = thisTittle;
        // CKEDITOR.instances['mi_textarea'].insertHtml(ckEdImg) // Añade img al editor
    });
    }

    function selecionarImg(){
      var imgSelecionada = document.getElementById('imagenSelec'+imagenSelecId).src;
      var tittleimgSelecionada = document.getElementById('imagenSelec'+imagenSelecId).title;
      document.getElementById('imgSelecionada'+imagenSelecId).style.display = "inline";
      document.getElementById('imgSelecionada'+imagenSelecId).src = imgSelecionada;
      document.getElementById('direccionURL'+imagenSelecId).value = imgSelecionada;
      document.getElementById('titulo'+imagenSelecId).value = tituloImagenSelecId;
    }

    <?php
    $estadoServicio = true;
      foreach ($listCategoriaServicios->result() as $fila) {
        if ($estadoServicio) {
        ?>
        var servicioSeleccionado = "<?= $fila->titulo?>";
        var idservicioSeleccionado = "<?=$fila->id?>";
        <?php
        $estadoServicio = false;
        }
      }

     ?>



    function cambiarServicioSeleccionado(id,servicio){
      servicioSeleccionado = servicio;
      idservicioSeleccionado = id;
    }

    function servicioSeleccionadoaction(){
      //console.log("hola");
      document.getElementById('textIdServicio').value = idservicioSeleccionado;
      document.getElementById('textTituloServicio').value = servicioSeleccionado;
    }

    </script>
</body>


</html>
