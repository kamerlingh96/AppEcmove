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
    <title>Galería</title>
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
                        <h4 class="page-title">Galería</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Galería</li>
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
                            <div class="card-body" style="height:700px;">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#todo" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Todo</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vehiculos" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Vehiculos</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#servicios" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Servicios</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#empresas" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Empresas</span></a> </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="todo" role="tabpanel">
                                  <div class="row">
                                    <div class="col-md-9">
                                      <div class="row">
                                        <div class="col-md-12" style="max-height: 600px;height: 100%; overflow: scroll;" id="imgMedia">
                                          <?php
                                          foreach ($list_galeria->result() as $fila) {
                                            ?>
                                            <div style="margin:15px;float:left;">
                                              <img src="<?= base_url()?><?= $fila->direccion?>" alt="user" width="120" onclick="cambiar()" id="img<?php echo $fila->id;?>" title="<?=$fila->titulo?>">
                                            </div>
                                            <?php
                                        }
                                          ?>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="row">
                                        <div class="col-12" style="height:200px;">
                                          <img src="<?= base_url()?>estilos//assets/images/users/4.jpg" alt="user"  height="100%" width="200px" class="rounded-circle" id="imagenSelec" style="display:block;margin:auto;">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12" style="height:100%;">
                                          <form class="m-t-20">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="tituloTodo" aria-describedby="name" placeholder="Nombre" >
                                            </div>
                                            <div class="form-group">
                                              <fieldset class="form-group">
                                                <input type="file" class="form-control-file" id="exampleInputFile">
                                              </fieldset>
                                            </div>
                                            <div class="col-md-12 m-b-20" style="text-align:center;">
                                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-center" data-toggle="modal" data-target="#agregarMedia">Guardar</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>

                                    </div>
                                  </div>

                                </div>
                                <div class="tab-pane" id="vehiculos" role="tabpanel">
                                  <div class="row">
                                    <div class="col-md-9">
                                      <div class="row">
                                        <div class="col-md-12" style="height: 330px; overflow: scroll;">
                                          <?php
                                          foreach ($list_galeria->result() as $fila) {
                                            if ($fila->tipo == "vehiculos") {
                                            ?>
                                            <div style="margin:15px;float:left;">

                                              <img src="<?= base_url()?><?= $fila->direccion?>" alt="user" width="120" onclick="cambiar()" id="img<?php echo $fila->id;?>">
                                            </div>
                                            <?php
                                            }
                                        }
                                          ?>
                                        </div>
                                      </div>
                                      <form class="" role="form"  action="<?= base_url()?>Galeria/vehiculosSubir" method="POST" id="vehiculosSubir">
                                        <div class="row" style="margin: 20px;">
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <fieldset class="form-group">
                                                <input type="file" class="form-control-file" accept="image/png, image/jpeg" id="vehiculosSubir_archivo" name="vehiculosSubir_archivo">
                                              </fieldset>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="" style="text-align:center;">
                                              <button type="submit" class="btn btn-info btn-rounded m-t-10 mb-2 float-center" >Subir</button>
                                            </div>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="row">
                                        <div class="col-12" style="height:200px;">
                                          <img src="<?= base_url()?>estilos//assets/images/users/4.jpg" alt="user"  height="100%" class="rounded-circle" id="imagenSelec" style="display:block;margin:auto;">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12" style="height:100%;">
                                          <form class="m-t-20">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Nombre">
                                            </div>
                                            <div class="form-group">
                                              <fieldset class="form-group">
                                                <input type="file" class="form-control-file" id="exampleInputFile2">
                                              </fieldset>
                                            </div>
                                            <div class="col-md-12 m-b-20" style="text-align:center;">
                                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-center">Guardar</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="servicios" role="tabpanel">
                                  <div class="row">
                                    <div class="col-md-9">
                                      <div class="row">
                                        <div class="col-md-12" style="height: 330px; overflow: scroll;">
                                          <?php
                                          foreach ($list_galeria->result() as $fila) {
                                            if ($fila->tipo == "servicios") {
                                            ?>
                                            <div style="margin:15px;float:left;">

                                              <img src="<?= base_url()?><?= $fila->direccion?>" alt="user" width="120" onclick="cambiar()" id="img<?php echo $fila->id;?>">
                                            </div>
                                            <?php
                                            }
                                        }
                                          ?>
                                        </div>
                                      </div>
                                      <form class="" role="form"  action="<?= base_url()?>Galeria/serviciosSubir" method="POST" id="serviciosSubir">
                                        <div class="row" style="margin: 20px;">
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <fieldset class="form-group">
                                                <input type="file" class="form-control-file" accept="image/png, image/jpeg" id="serviciosSubir_archivo" name="serviciosSubir_archivo">
                                              </fieldset>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="" style="text-align:center;">
                                              <button type="submit" class="btn btn-info btn-rounded m-t-10 mb-2 float-center" >Subir</button>
                                            </div>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="row">
                                        <div class="col-12" style="height:200px;">
                                          <img src="<?= base_url()?>estilos//assets/images/users/4.jpg" alt="user"  height="100%" class="rounded-circle" id="imagenSelec" style="display:block;margin:auto;">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12" style="height:100%;">
                                          <form class="m-t-20">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Nombre">
                                            </div>
                                            <div class="form-group">
                                              <fieldset class="form-group">
                                                <input type="file" class="form-control-file" id="exampleInputFile2">
                                              </fieldset>
                                            </div>
                                            <div class="col-md-12 m-b-20" style="text-align:center;">
                                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-center">Guardar</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="empresas" role="tabpanel">
                                  <div class="row">
                                    <div class="col-md-9">
                                      <div class="row">
                                        <div class="col-md-12" style="height: 330px; overflow: scroll;">
                                          <?php
                                          foreach ($list_galeria->result() as $fila) {
                                            if ($fila->tipo == "empresas") {
                                            ?>
                                            <div style="margin:15px;float:left;">

                                              <img src="<?= base_url()?><?= $fila->direccion?>" alt="user" width="120" onclick="cambiar()" id="img<?php echo $fila->id;?>">
                                            </div>
                                            <?php
                                            }
                                        }
                                          ?>
                                        </div>
                                      </div>
                                      <form class="" role="form"  action="<?= base_url()?>Galeria/empresasSubir" method="POST" id="empresasSubir">
                                        <div class="row" style="margin: 20px;">
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <fieldset class="form-group">
                                                <input type="file" class="form-control-file" accept="image/png, image/jpeg" id="empresasSubir_archivo" name="empresasSubir_archivo">
                                              </fieldset>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="" style="text-align:center;">
                                              <button type="submit" class="btn btn-info btn-rounded m-t-10 mb-2 float-center" >Subir</button>
                                            </div>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="row">
                                        <div class="col-12" style="height:200px;">
                                          <img src="<?= base_url()?>estilos//assets/images/users/4.jpg" alt="user"  height="100%" class="rounded-circle" id="imagenSelec" style="display:block;margin:auto;">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12" style="height:100%;">
                                          <form class="m-t-20">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Nombre">
                                            </div>
                                            <div class="form-group">
                                              <fieldset class="form-group">
                                                <input type="file" class="form-control-file" id="exampleInputFile2">
                                              </fieldset>
                                            </div>
                                            <div class="col-md-12 m-b-20" style="text-align:center;">
                                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-center">Guardar</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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

    <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
    </script>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url()?>estilos/assets/libs/jquery/dist/jquery.min.js"></script>

    <script src="<?= base_url()?>estilos/sistema/js/galeriaSubirVehiculos.js"></script>
    <script src="<?= base_url()?>estilos/sistema/js/galeriaSubirServicios.js"></script>
    <script src="<?= base_url()?>estilos/sistema/js/galeriaSubirEmpresas.js"></script>
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

    <script type="text/javascript">
    var brandImg = document.querySelectorAll("#imgMedia img");

    for (var i = 0; i < brandImg.length; i++) {
    var ckEdiloop = brandImg[i];
    ckEdiloop.addEventListener("click", function(el){
        var thisSrc = this.src;
        var thisTittle = this.title;
        var ckEdImg = '<p><img src="'+thisSrc+'" /></p>'; // La forma como las imágenes son envueltas en ckEditor
        document.getElementById('imagenSelec').src = thisSrc;
        document.getElementById('tituloTodo').value = thisTittle;
        // CKEDITOR.instances['mi_textarea'].insertHtml(ckEdImg) // Añade img al editor
    });
    }

    /*function selecionarImg(){
      var imgSelecionada = document.getElementById('imagenSelec').src
      document.getElementById('imgSelecionada').style.display = "inline";
      document.getElementById('imgSelecionada').src = imgSelecionada;
    }*/

    </script>
</body>


</html>
