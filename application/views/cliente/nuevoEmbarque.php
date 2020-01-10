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
    <title>Nuevo Embarque</title>
    <!-- Custom CSS -->
    <link href="<?= base_url()?>estilos/dist/css/style.min.css" rel="stylesheet">

    <link href="<?= base_url()?>estilos/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?= base_url()?>estilos/assets/libs/jquery-steps/steps.css" rel="stylesheet">

    <style>

      #map_inicio {
        width: 100%;
        height: 300px
      }
      #map_fin {
        width: 100%;
        height: 300px
      }

      #seleccionarTransporte{
        border:1px solid #2962FF;
        width: 100%;
        overflow-y:hidden;
        overflow-x:scroll;
      }
      .checkboxTransporte{
        margin: 10px 30px;
        height: 85%;
        width: 185px;
        border-radius: 2px;
        display: inline-block;
        position: relative;
        float:left;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
      }

      .checkboxTransporte:hover{
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
      }
      .checkboxTransporte input {
        display: none !important;
      }

      .checkboxTransporte input {
        display: none  !important;
      }

      .transporteSeleccionado{
        position: absolute;
        width: 100%;
        height:100;
        background-color: rgba(0,0,0,0);
      }

      .checkboxTransporte input:checked  + .imgTextTransporte{
          position: absolute;
          width: 100%;
          height:100%;
          background-color: rgba(0,0,0,0.5);
        }

      .imgTransporte{
        margin: 10px;
        height: 50%;
      }
      .imgTransporte img{
        width: 100%;
      }

      .tipoTransporte{

      }


    </style>
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
                        $this->load->view('cliente/notificaciones');
                         ?>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <?php
                        $this->load->view('cliente/navHorizontal');
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
                $this->load->view('cliente/nav');
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
                        <h4 class="page-title">Nuevo Embarque</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Nuevo Embarques</li>
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
                          <div class="card-body wizard-content">
                              <h4 class="card-title">Detalles del Embarque</h4>
                              <h6 class="card-subtitle">Ingrese los datos de inicio y destino del envio</h6>
                              <form action="<?=base_url()?>PanelCliente/Embarques/cotizar" class="validation-wizard wizard-circle m-t-40" method="post" name="nuevoEmbarque" enctype="multipart/form-data" id="nuevoEmbarque">
                                  <!-- Step 1 -->
                                  <h6>Remitente</h6>
                                  <section>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label> Nombre : <span class="danger">*</span> </label>
                                                  <input type="text" class="form-control " readonly="readonly"  name="nombreInicio" value="<?= $perfil->nombre ?>"> </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label> Correo : <span class="danger">*</span> </label>
                                                  <input type="email" class="form-control "  name="correoInicio" readonly="readonly" value="<?= $perfil->correo ?>"> </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label> Telefono : <span class="danger">*</span> </label>
                                                  <input type="tel" class="form-control "  name="telefonoInicio"> </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="wphoneNumber2"> Celular :</label>
                                                  <input type="tel" class="form-control"  name="celularInicio" value="<?=$perfil->tel?>"> </div>
                                          </div>
                                      </div>
                                  </section>
                                  <!-- Step 2 -->
                                  <h6>Inicio</h6>
                                  <section>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="map_inicio"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="display:">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="wemailAddress2"> Coordenadas : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control " id="coords_inicio" readonly="readonly" name="coordsInicio"/> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location1">Estado : <span class="danger">*</span></label>
                                                <select class="custom-select form-control " id="estado_inicio" name="estadoInicio" onchange="lee_json(this.value)">
                                                  <option value="0">Todo México</option>
                                                  <option value="1-Aguascalientes">Aguascalientes</option>
                                                  <option value="2-Baja California">Baja California</option>
                                                  <option value="3-Baja California Sur">Baja California Sur</option>
                                                  <option value="4-Campeche">Campeche</option>
                                                  <option value="5-Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                  <option value="6-Colima">Colima</option>
                                                  <option value="7-Chiapas">Chiapas</option>
                                                  <option value="8-Chihuahua">Chihuahua</option>
                                                  <option value="9-Distrito Federal">Distrito Federal</option>
                                                  <option value="10-Durango">Durango</option>
                                                  <option value="11-Guanajuato">Guanajuato</option>
                                                  <option value="12-Guerrero">Guerrero</option>
                                                  <option value="13-Hidalgo">Hidalgo</option>
                                                  <option value="14-Jalisco">Jalisco</option>
                                                  <option value="15-México">México</option>
                                                  <option value="16-Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                  <option value="17-Morelos">Morelos</option>
                                                  <option value="18-Nayarit">Nayarit</option>
                                                  <option value="19-Nuevo León">Nuevo León</option>
                                                  <option value="20-Oaxaca">Oaxaca</option>
                                                  <option value="21-Puebla">Puebla</option>
                                                  <option value="22-Querétaro">Querétaro</option>
                                                  <option value="23-Quintana Roo">Quintana Roo</option>
                                                  <option value="24-San Luis Potosí">San Luis Potosí</option>
                                                  <option value="25-Sinaloa">Sinaloa</option>
                                                  <option value="26-Sonora">Sonora</option>
                                                  <option value="27-Tabasco">Tabasco</option>
                                                  <option value="28-Tamaulipas">Tamaulipas</option>
                                                  <option value="29-Tlaxcala">Tlaxcala</option>
                                                  <option value="30-Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                                  <option value="31-Yucatán">Yucatán</option>
                                                  <option value="32-Zacatecas">Zacatecas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location1">Municipio : <span class="danger">*</span></label>
                                                <select class="custom-select form-control " id="municipio_inicio" name="municipioInicio">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label> Calle : <span class="danger">*</span> </label>
                                              <input type="text" class="form-control "  name="calleInicio" id="calleInicio"> </div>
                                      </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Colonia : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control "  name="coloniaInicio" id="coloniaInicio"> </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label> Num. Ext : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control "  name="numExtInicio"> </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label> Num. Int (Opcional): </label>
                                                <input type="text" class="form-control"  name="numIntInicio"> </div>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <label>Buscar Dirección</label>
                                            <button type="button" class="btn waves-effect waves-light btn-block btn-info" onclick="BuscarInicio()">Buscar</button>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>Referencia :</label>
                                              <textarea rows="6" class="form-control" name="referenciaInicio"></textarea>
                                          </div>
                                      </div>
                                    </div>
                                  </section>
                                  <!-- Step 3 -->
                                  <h6>Destinatario</h6>
                                  <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Nombre : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control "  name="nombreFin"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Correo : <span class="danger">*</span> </label>
                                                <input type="email" class="form-control "  name="correoFin"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemailAddress2"> Telefono : <span class="danger">*</span> </label>
                                                <input type="tel" class="form-control "  name="telefonoFin"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wphoneNumber2"> Celular :</label>
                                                <input type="tel" class="form-control"  name="celularFin"> </div>
                                        </div>
                                    </div>
                                  </section>
                                  <!-- Step 4 -->
                                  <h6>Fin</h6>
                                  <section>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div id="map_fin"></div>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="row" style="display:">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label> Coordenadas : <span class="danger">*</span> </label>
                                              <input type="text" class="form-control " id="coords_fin" readonly="readonly" name="coordsFin"/> </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="location1">Estado : <span class="danger">*</span></label>
                                              <select class="custom-select form-control " id="estado_fin" name="estadoFin" onchange="lee_json_fin(this.value)">
                                                <option value="0">Todo México</option>
                                                <option value="1-Aguascalientes">Aguascalientes</option>
                                                <option value="2-Baja California">Baja California</option>
                                                <option value="3-Baja California Sur">Baja California Sur</option>
                                                <option value="4-Campeche">Campeche</option>
                                                <option value="5-Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                <option value="6-Colima">Colima</option>
                                                <option value="7-Chiapas">Chiapas</option>
                                                <option value="8-Chihuahua">Chihuahua</option>
                                                <option value="9-Distrito Federal">Distrito Federal</option>
                                                <option value="10-Durango">Durango</option>
                                                <option value="11-Guanajuato">Guanajuato</option>
                                                <option value="12-Guerrero">Guerrero</option>
                                                <option value="13-Hidalgo">Hidalgo</option>
                                                <option value="14-Jalisco">Jalisco</option>
                                                <option value="15-México">México</option>
                                                <option value="16-Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                <option value="17-Morelos">Morelos</option>
                                                <option value="18-Nayarit">Nayarit</option>
                                                <option value="19-Nuevo León">Nuevo León</option>
                                                <option value="20-Oaxaca">Oaxaca</option>
                                                <option value="21-Puebla">Puebla</option>
                                                <option value="22-Querétaro">Querétaro</option>
                                                <option value="23-Quintana Roo">Quintana Roo</option>
                                                <option value="24-San Luis Potosí">San Luis Potosí</option>
                                                <option value="25-Sinaloa">Sinaloa</option>
                                                <option value="26-Sonora">Sonora</option>
                                                <option value="27-Tabasco">Tabasco</option>
                                                <option value="28-Tamaulipas">Tamaulipas</option>
                                                <option value="29-Tlaxcala">Tlaxcala</option>
                                                <option value="30-Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                                <option value="31-Yucatán">Yucatán</option>
                                                <option value="32-Zacatecas">Zacatecas</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="location1">Municipio : <span class="danger">*</span></label>
                                              <select class="custom-select form-control " id="municipio_fin" name="municipioFin">
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label> Calle : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control "  name="calleFin" id="calleFin"> </div>
                                    </div>
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label> Colonia : <span class="danger">*</span> </label>
                                              <input type="text" class="form-control "  name="coloniaFin" id="coloniaFin"> </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label> Num. Ext : <span class="danger">*</span> </label>
                                              <input type="text" class="form-control "  name="numExtFin"> </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label> Num. Int (Opcional): </label>
                                              <input type="text" class="form-control"  name="numIntFin"> </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group">
                                          <label>Buscar Dirección</label>
                                          <button type="button" class="btn waves-effect waves-light btn-block btn-info" onclick="BuscarFin()">Buscar</button>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Referencia :</label>
                                            <textarea rows="6" class="form-control" name="referenciaFin"></textarea>
                                        </div>
                                    </div>
                                  </div>
                                </section>
                                  <!-- Step 5 -->
                                  <h6>Paquete</h6>
                                  <section>
                                      <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Tipo de Material :</label>
                                                <div class="c-inputs-stacked">
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" id="customRadio11" name="tipoMaterial" class="custom-control-input" checked value="Solido">
                                                        <label class="custom-control-label" for="customRadio11">Solido</label>
                                                    </div>
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" id="customRadio12" name="tipoMaterial" class="custom-control-input" value="Liquido">
                                                        <label class="custom-control-label" for="customRadio12">Liquido</label>
                                                    </div>
                                                    <div class="custom-control custom-radio ">
                                                        <input type="radio" id="customRadio13" name="tipoMaterial" class="custom-control-input" value="Gaseoso">
                                                        <label class="custom-control-label" for="customRadio13">Gaseoso</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="col-md-10" style="">
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Dimenciones :</label>
                                                    <div class="row form-group">
                                                      <label class="col-md-2">Alto:</label>
                                                      <div class="col-md-4 input-group">
                                                        <input type="number" class="form-control" name="alto" min="0" value="0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Mts</span>
                                                        </div>
                                                      </div>
                                                      <label class="col-md-2">Ancho:</label>
                                                      <div class="col-md-4 input-group">
                                                        <input type="number" class="form-control" name="ancho" min="0" value="0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Mts</span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="row form-group">
                                                      <label class="col-md-2">Largo:</label>
                                                      <div class="col-md-4 input-group">
                                                        <input type="number" class="form-control" name="largo" min="0" value="0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Mts</span>
                                                        </div>
                                                      </div>
                                                      <label class="col-md-2">Peso:</label>
                                                      <div class="col-md-4 input-group">
                                                        <input type="number" class="form-control" name="peso" min="0" value="0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg</span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="shortDescription1">Descripción del Paquete :</label>
                                                  <textarea rows="6" class="form-control" name="descripcionPaquete"></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                  </section>
                                  <!-- Step 5 -->
                                  <h6>Transporte</h6>
                                  <section>
                                    <div class="row" >
                                      <div class="col-md-12 text-center" id="buscarTransporte">
                                        <div class="form-group">
                                          <h4>Buscar transporte para el envio</h4>
                                          <button type="button" class="btn waves-effect waves-light btn-block btn-info" style="width:20%;" id="btnBuscarTransporte">Buscar</button>
                                        </div>
                                      </div>
                                      <div class="col-md-12 text-center" id="seleccionarTransporte" style="height:max-content;display:none;visibility:hidden;margin-bottom:10px;">
                                        <div class="row" style="width:max-content;">
                                          <div class="col-md-12">
                                            <?php
                                            foreach ($list_vehiculos->result() as $fila) {
                                              ?>
                                              <label class="checkboxTransporte">
                                                <input type="radio" name="vehiculoSeleccionado" value="<?= $fila->vehiculo ?>"/>
                                                <div class="imgTextTransporte">
                                                  <div class="imgTransporte">
                                                    <img src="<?=base_url()?><?= $fila->direccion ?>" alt="">
                                                  </div>
                                                  <div class="tipoTransporte">
                                                    <h4><?= $fila->vehiculo ?></h4>
                                                  </div>

                                                </div>
                                              </label>
                                              <?php
                                            }

                                             ?>
                                            <label class="checkboxTransporte">
                                              <input type="radio" name="cap1"/>
                                              <div class="imgTextTransporte">
                                                <div class="imgTransporte">
                                                  <img src="<?=base_url()?>uploads/vehiculos/21.jpg" alt="">
                                                </div>
                                                <div class="tipoTransporte">
                                                  <h4>TORTON 2 EJES</h4>
                                                </div>

                                              </div>
                                            </label>
                                          </div>
                                        </div>
                                        <br>
                                      </div>
                                    </div>
                                  </section>
                              </form>
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
    <script src="<?= base_url()?>estilos/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url()?>estilos/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?= base_url()?>estilos/sistema/mx/municipios.js"></script>
    <script src="<?= base_url()?>estilos/assets/libs/block-ui/jquery.blockUI.js"></script>


    <script>

    var form = $(".validation-wizard").show();

    $(".validation-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
          next: "Siguiente",
          previous: "Regresar",
            finish: "&#10004; Cotizar"
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function(event, currentIndex) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function(event, currentIndex) {

          document.nuevoEmbarque.submit();
/*
          var formData = new FormData($("#nuevoEmbarque")[0]);
          $.ajax({
            url:$("#nuevoEmbarque").attr("action"),
            type:$("#nuevoEmbarque").attr("method"),
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(respuesta){

              if (respuesta == "curp") {
                alert("CURP" + respuesta);
              }else if (respuesta == "creado") {
                alert("Creado Correctamente");
                setTimeout(function() {
                  //your code to be executed after 1 second
                  var base_url = "<?php echo base_url(); ?>";
                  window.location=base_url+"Comerciantes_list_controller/list";
                }, 2000);
              }

            }
          });*/


        }
    }), $(".validation-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass)
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },
        rules: {
            email: {
                email: !0
            }
        }
    })
    </script>

    <script>


    var marker,markerFin;          //variable del marcador
    var coords = {}, coordsFin = {};    //coordenadas obtenidas con la geolocalización

    //Funcion principal
    initMap = function ()
    {

        //usamos la API para geolocalizar el usuario
            navigator.geolocation.getCurrentPosition(
              function (position){
                coords =  {
                  lng: position.coords.longitude,
                  lat: position.coords.latitude
                };
                coordsFin =  {
                  lng: position.coords.longitude,
                  lat: position.coords.latitude
                };
                setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa
                setMapaFin(coordsFin);

              },function(error){console.log(error);});

    }



    function setMapa (coords)
    {
          //Se crea una nueva instancia del objeto mapa
          var map = new google.maps.Map(document.getElementById('map_inicio'),
          {
            zoom: 13,
            center:new google.maps.LatLng(coords.lat,coords.lng),

          });

          //Creamos el marcador en el mapa con sus propiedades
          //para nuestro obetivo tenemos que poner el atributo draggable en true
          //position pondremos las mismas coordenas que obtuvimos en la geolocalización
          marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(coords.lat,coords.lng),

          });
          //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica
          //cuando el usuario a soltado el marcador

          marker.addListener( 'dragend', function (event)
          {
            //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
            document.getElementById("coords_inicio").value = this.getPosition().lat()+","+ this.getPosition().lng();
          });
    }




    function setMapaFin (coordsFin)
    {
          //Se crea una nueva instancia del objeto mapa
          var map2 = new google.maps.Map(document.getElementById('map_fin'),
          {
            zoom: 13,
            center:new google.maps.LatLng(coords.lat,coords.lng),

          });

          //Creamos el marcador en el mapa con sus propiedades
          //para nuestro obetivo tenemos que poner el atributo draggable en true
          //position pondremos las mismas coordenas que obtuvimos en la geolocalización
          marker2 = new google.maps.Marker({
            map: map2,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(coords.lat,coords.lng),

          });
          //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica
          //cuando el usuario a soltado el marcador

          marker2.addListener( 'dragend', function (event)
          {
            //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
            document.getElementById("coords_fin").value = this.getPosition().lat()+","+ this.getPosition().lng();
            console.log(this.getPosition().lat()+","+ this.getPosition().lng());
          });
    }

    //callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
    function toggleBounce() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    }

    // Carga de la libreria de google maps

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9pK_ZAsjpURG7WHpwIDoipu00zcZNciA&callback=initMap"></script>


    <script type="text/javascript">
      function BuscarInicio(){
        // Obtenemos la dirección y la asignamos a una variable
        var estadoInicio = $('#estado_inicio').val();
        var municipioInicio = $('#municipio_inicio').val();
        var coloniaInicio = $('#coloniaInicio').val();
        var calleInicio = $('#calleInicio').val();

        var arrayDeCadenasEstadoInicio = estadoInicio.split('-');

        var direccion = arrayDeCadenasEstadoInicio[1] + ', ' + municipioInicio + ', ' + coloniaInicio + ', ' + calleInicio;

        console.log(direccion);
        // Creamos el Objeto Geocoder
        var geocoder = new google.maps.Geocoder();
        // Hacemos la petición indicando la dirección e invocamos la función
        // geocodeResult enviando todo el resultado obtenido
        geocoder.geocode({ 'address': direccion}, geocodeResult);
      }

      function BuscarFin(){
        // Obtenemos la dirección y la asignamos a una variable
        var estadoFin = $('#estado_fin').val();
        var municipioFin = $('#municipio_fin').val();
        var coloniaFin = $('#coloniaFin').val();
        var calleFin = $('#calleFin').val();

        var arrayDeCadenasEstadoFin = estadoFin.split('-');

        var direccion = arrayDeCadenasEstadoFin[1] + ', ' + municipioFin + ', ' + coloniaFin + ', ' + calleFin;

        console.log(direccion);
        // Creamos el Objeto Geocoder
        var geocoderFin = new google.maps.Geocoder();
        // Hacemos la petición indicando la dirección e invocamos la función
        // geocodeResult enviando todo el resultado obtenido
        geocoderFin.geocode({ 'address': direccion}, geocodeResultFin);
      }

      function geocodeResult(results, status) {
        // Verificamos el estatus
        if (status == 'OK') {
          // Si hay resultados encontrados, centramos y repintamos el mapa
          // esto para eliminar cualquier pin antes puesto

          var mapOptions = {
            center: results[0].geometry.location,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          map = new google.maps.Map($("#map_inicio").get(0), mapOptions);
          // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
          map.fitBounds(results[0].geometry.viewport);
          // Dibujamos un marcador con la ubicación del primer resultado obtenido
          var markerOptions = {
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: results[0].geometry.location
           }
          var marker = new google.maps.Marker(markerOptions);
          var localizacion = results[0].geometry.location;
          var localizacion1 = ''+ localizacion;
          var cantidadLocalizacion = localizacion1.length;
          localizacion = localizacion1.slice(1,cantidadLocalizacion-1);
          document.getElementById("coords_inicio").value = localizacion;
          marker.addListener( 'dragend', function (event)
          {
            //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
            document.getElementById("coords_inicio").value = this.getPosition().lat()+","+ this.getPosition().lng();
          });
          marker.setMap(map);
        }else {
            // En caso de no haber resultados o que haya ocurrido un error
            // lanzamos un mensaje con el error
            alert("Geocoding no tuvo éxito debido a: " + status);
        }
    }

    function geocodeResultFin(results, status) {
      // Verificamos el estatus
      if (status == 'OK') {
        // Si hay resultados encontrados, centramos y repintamos el mapa
        // esto para eliminar cualquier pin antes puesto

        var mapOptions = {
          center: results[0].geometry.location,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map($("#map_fin").get(0), mapOptions);
        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
        map.fitBounds(results[0].geometry.viewport);
        // Dibujamos un marcador con la ubicación del primer resultado obtenido
        var markerOptions = {
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: results[0].geometry.location
         }
        var marker = new google.maps.Marker(markerOptions);
        var localizacion = results[0].geometry.location;
        var localizacion1 = ''+ localizacion;
        var cantidadLocalizacion = localizacion1.length;
        localizacion = localizacion1.slice(1,cantidadLocalizacion-1);
        document.getElementById("coords_fin").value = localizacion;
        marker.addListener( 'dragend', function (event)
        {
          //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
          document.getElementById("coords_fin").value = this.getPosition().lat()+","+ this.getPosition().lng();
        });
        marker.setMap(map);
      }else {
          // En caso de no haber resultados o que haya ocurrido un error
          // lanzamos un mensaje con el error
          alert("Geocoding no tuvo éxito debido a: " + status);
      }
  }
    </script>


    <script type="text/javascript">


      $(function() {
        $('#btnBuscarTransporte').on('click', function() {
          document.getElementById("buscarTransporte").style.display = 'none';
          document.getElementById("seleccionarTransporte").style.display = '';
            var block_ele = $(this).closest('.row');
            $(block_ele).block({
                message: '<i class="fas fa-spin fa-sync text-white"></i>',
                timeout: 1000, //unblock after 2 seconds
                overlayCSS: {
                    backgroundColor: '#000',
                    opacity: 1,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });

            setTimeout(function(){
              document.getElementById("seleccionarTransporte").style.visibility = 'visible';
            }, 500);
        });
      });
    </script>




</body>


</html>
