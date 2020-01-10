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
    <title>Posregistro</title>
    <!-- Custom CSS -->
    <link href="<?= base_url()?>estilos/dist/css/style.min.css" rel="stylesheet">
    <link href="<?= base_url()?>estilos/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
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
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class=""><img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?= $datosEmpresa['user'] ?></h4>
                                        <p class=" m-b-0"><?= $datosEmpresa['email'] ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="<?= base_url()?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesión</a>
                            </div>
                        </li>
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
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium"><?= $datosEmpresa['user'] ?> <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?= $datosEmpresa['email'] ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="<?= base_url()?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesión</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                    </ul>
                </nav>
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
                        <div class="card" id="posregistro">
                            <div class="card-body">
                                <h3 class="text-center">Bienvenido <?= $datosUsuario->user ?></h3>
                                <h5 class="text-center">Nos alegra que te unas a nuestro grupo de ECMOVE, antes de iniciar es necesario que rellenes unos campos para completar tu información</h5>
                            </div>
                            <div class="row button-group">
                              <div class="col-md-4" style="padding:20px;">
                              </div>
                              <div class="col-md-4 center" style="padding:20px;">
                                  <button type="button" class="btn btn-rounded btn-block btn-info" onclick="posregistro()"><span style="font-size:18px;">Iniciar</span></button>
                              </div>
                            </div>

                        </div>
                        <div class="card" style="display:none;" id="formposregistro">
                          <div class="card-body">
                            <h3 class="text-center">Bienvenido <?= $datosEmpresa['user'] ?></h3>
                            <h5 class="text-center">Nos alegra que te unas a nuestro grupo de ECMOVE, antes de iniciar es necesario que rellenes unos campos para completar tu información</h5>
                          </div>
                          <form class="needs-validation" novalidate action="<?= base_url()?>PanelEmpresa/posregistro" method="post" id="empresa">
                              <div class="card-body">
                                  <h4 class="card-title">Información Empresarial</h4>
                              </div>
                              <hr>
                              <div class="form-body">
                                  <div class="card-body">
                                      <div class="row p-t-20">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Nombre de la empresa</label>
                                                  <input type="text" id="" class="form-control" placeholder="Empresa S.A. de C.V." required name="nombre_empresa">
                                                  <div class="valid-feedback">
                                                    ¡Bien!
                                                  </div>
                                                  <div class="invalid-feedback">
                                                    Dato requerido
                                                  </div>
                                                </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                              <div class="form-group has-danger">
                                                  <label class="control-label">R.F.C.</label>
                                                  <input type="text" id="" class="form-control form-control-danger" placeholder="AAAA123456ABC" required value="<?= $perfil->rfc ?>" name="rfc">
                                                  <div class="valid-feedback">
                                                    ¡Bien!
                                                  </div>
                                                  <div class="invalid-feedback">
                                                    Dato requerido
                                                  </div>
                                              </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                <label class="control-label">Nombre Representante Legal</label>
                                                <input type="text" id="" class="form-control" placeholder="John Wick." required name="representante">
                                                <div class="valid-feedback">
                                                  ¡Bien!
                                                </div>
                                                <div class="invalid-feedback">
                                                  Dato requerido
                                                </div>
                                              </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="control-label">Telefono</label>
                                              <input type="tel" id="" class="form-control" placeholder="1-(555)-555-5555" required name="tel">
                                              <div class="valid-feedback">
                                                ¡Bien!
                                              </div>
                                              <div class="invalid-feedback">
                                                Dato requerido
                                              </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="control-label">Correo</label>
                                              <input type="email" id="" class="form-control" placeholder="info@ejemplo.com" required value="<?= $perfil->correo ?>" name="email">
                                              <div class="valid-feedback">
                                                ¡Bien!
                                              </div>
                                              <div class="invalid-feedback">
                                                Dato requerido
                                              </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Logo Empresarial</label>
                                                <input type="file" class="form-control" name="logo" required>
                                                <div class="valid-feedback">
                                                  ¡Bien!
                                                </div>
                                                <div class="invalid-feedback">
                                                  Dato requerido
                                                </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <h4 class="card-title m-t-40">Dirección</h4>
                                  </div>
                                  <hr>
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-md-6 ">
                                              <div class="form-group">
                                                  <label>Calle</label>
                                                  <input type="text" class="form-control" placeholder="Calle/Avenida" required name="calle">
                                                  <div class="valid-feedback">
                                                    ¡Bien!
                                                  </div>
                                                  <div class="invalid-feedback">
                                                    Dato requerido
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6 ">
                                              <div class="form-group">
                                                  <label>Colonia</label>
                                                  <input type="text" class="form-control" placeholder="Colonia" required name="colonia">
                                                  <div class="valid-feedback">
                                                    ¡Bien!
                                                  </div>
                                                  <div class="invalid-feedback">
                                                    Dato requerido
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Ciudad</label>
                                                  <input type="text" class="form-control" placeholder="Carmen" required name="ciudad">
                                                  <div class="valid-feedback">
                                                    ¡Bien!
                                                  </div>
                                                  <div class="invalid-feedback">
                                                    Dato requerido
                                                  </div>
                                              </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Estado</label>
                                                <select class="form-control custom-select" required name="estado">
                                                    <option value="">--Selecciona el estado--</option>
                                                    <option value="Aguascalientes">Aguascalientes</option>
                                                    <option value="Baja California">Baja California</option>
                                                    <option value="Baja California Sur">Baja California Sur</option>
                                                    <option value="Campeche">Campeche</option>
                                                    <option value="Chiapas">Chiapas</option>
                                                    <option value="Chihuahua">Chihuahua</option>
                                                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                    <option value="Colima">Colima</option>
                                                    <option value="Durango">Durango</option>
                                                    <option value="Estado de México">Estado de México</option>
                                                    <option value="Guanajuato">Guanajuato</option>
                                                    <option value="Guerrero">Guerrero</option>
                                                    <option value="Hidalgo">Hidalgo</option>
                                                    <option value="Jalisco">Jalisco</option>
                                                    <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                    <option value="Morelos">Morelos</option>
                                                    <option value="Nayarit">Nayarit</option>
                                                    <option value="Nuevo León">Nuevo León</option>
                                                    <option value="Oaxaca">Oaxaca</option>
                                                    <option value="Puebla">Puebla</option>
                                                    <option value="Querétaro">Querétaro</option>
                                                    <option value="Quintana Roo">Quintana Roo</option>
                                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                                    <option value="Sinaloa">Sinaloa</option>
                                                    <option value="Sonora">Sonora</option>
                                                    <option value="Tabasco">Tabasco</option>
                                                    <option value="Tamaulipas">Tamaulipas</option>
                                                    <option value="Tlaxcala">Tlaxcala</option>
                                                    <option value="Veracruz">Veracruz</option>
                                                    <option value="Yucatán">Yucatán</option>
                                                    <option value="Zacatecas">Zacatecas</option>
                                                </select>
                                                <div class="valid-feedback">
                                                  ¡Bien!
                                                </div>
                                                <div class="invalid-feedback">
                                                  Dato requerido
                                                </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Código postal</label>
                                                  <input type="numer" class="form-control" placeholder="12345" required name="cp">
                                                  <div class="valid-feedback">
                                                    ¡Bien!
                                                  </div>
                                                  <div class="invalid-feedback">
                                                    Dato requerido
                                                  </div>
                                              </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>coordenadas</label>
                                                <input type="text" class="form-control" Readonly id="coords" required name="coordenadas">
                                                <div class="valid-feedback">
                                                  ¡Bien!
                                                </div>
                                                <div class="invalid-feedback">
                                                  Dato requerido
                                                </div>
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                          <div id="map" style="width:100%;height:400px;"></div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="form-actions">
                                      <div class="card-body">
                                          <button type="submit" class="btn btn-success" id="ts-success"> <i class="fa fa-check"></i> Guardar</button>
                                          <button type="button" class="btn btn-dark" onclick="cancelar()">Cancelar</button>
                                      </div>
                                  </div>
                              </div>
                          </form>
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
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
    </script>
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

    <script src="<?= base_url()?>estilos/assets/libs/toastr/build/toastr.min.js"></script>
    <script src="<?= base_url()?>estilos/sistema/js/posregistro-empresa.js"></script>

    <script type="text/javascript">
      function posregistro(){
        document.getElementById("formposregistro").style.display = "block";
        document.getElementById("posregistro").style.display = "none";
      }
    </script>

    <script type="text/javascript">
      function cancelar(){
        document.getElementById("formposregistro").style.display = "none";
        document.getElementById("posregistro").style.display = "block";
      }
    </script>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

    <script>


    var marker;          //variable del marcador
    var coords = {};    //coordenadas obtenidas con la geolocalización

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
              setMapa(coords);  //pasamos las coordenadas al metodo para crear el mapa


            },function(error){console.log(error);});

    }



    function setMapa (coords)
    {
          //Se crea una nueva instancia del objeto mapa
          var map = new google.maps.Map(document.getElementById('map'),
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
          marker.addListener('click', toggleBounce);

          marker.addListener( 'dragend', function (event)
          {
            //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
            document.getElementById("coords").value = this.getPosition().lat()+","+ this.getPosition().lng();
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
</body>


</html>
