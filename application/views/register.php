<!DOCTYPE html>
<html dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>uploads/sistema/favicon.png">
    <title>Xtreme admin Template - The Ultimate Multipurpose admin template</title>
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
    <div class="main-wrapper">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url()?>estilos/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box" id="register-cliente" style="display:none">
                <div>
                    <div class="logo">
                        <span class="db"><img src="<?= base_url()?>uploads/sistema/favicon.png" alt="logo" style="width:170px;"/></span>
                        <h5 class="font-medium m-b-20">CLIENTE</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" role="form" action="<?= base_url()?>Register/cliente" method="POST" id="cliente">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="Nombre de usuario" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="Correo" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " placeholder="Contraseña" name="pass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " placeholder="Confirmar contraseña" name="repass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Estoy de acuerdo con todos los <a href="javascript:void(0)">Términos</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit" value="Registrar">REGÍSTRATE</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        <a href="" class="text-danger m-l-5 " onclick="regresar();"><b>Regresar</b></a>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        ¿Ya tienes una cuenta? <a href="<?= base_url()?>" class="text-info m-l-5 "><b>Inicia sesión</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auth-box" id="register-transportista" style="display:none">
                <div>
                    <div class="logo">
                        <span class="db"><img src="<?= base_url()?>uploads/sistema/favicon.png" alt="logo" style="width:170px;"/></span>
                        <h5 class="font-medium m-b-20">TRANSPORTISTA</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" role="form" action="<?= base_url()?>Register/transportista" method="POST" id="transportista">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="Nombre de usuario" name="name">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="CURP" name="curp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="Correo" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " placeholder="Contraseña" name="pass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " placeholder="Confirmar contraseña" name="repass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Estoy de acuerdo con todos los <a href="javascript:void(0)">Términos</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit">REGÍSTRATE</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        <a href="" class="text-danger m-l-5 " onclick="regresar();"><b>Regresar</b></a>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        ¿Ya tienes una cuenta? <a href="<?= base_url()?>" class="text-info m-l-5 "><b>Inicia sesión</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auth-box" id="register-empresa" style="display:none">
                <div>
                    <div class="logo">
                        <span class="db"><img src="<?= base_url()?>uploads/sistema/favicon.png" alt="logo" style="width:170px;"/></span>
                        <h5 class="font-medium m-b-20">EMPRESA</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" action="<?= base_url()?>Register/empresa" method="post" id="empresa">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="Nombre de usuario" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="Correo" name="email">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="text" required=" " placeholder="RFC" name="rfc">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " placeholder="Contraseña" name="pass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" type="password" required=" " placeholder="Confirmar contraseña" name="repass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Estoy de acuerdo con todos los <a href="javascript:void(0)">Términos</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit">REGÍSTRATE</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        <a href="" class="text-danger m-l-5 " onclick="regresar();"><b>Regresar</b></a>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        ¿Ya tienes una cuenta? <a href="<?= base_url()?>" class="text-info m-l-5 "><b>Inicia sesión</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auth-box" id="type-register" style="max-width: 900px;">
                <div>
                    <div class="logo">
                        <span class="db"><img src="<?= base_url()?>uploads/sistema/favicon.png" alt="logo" style="width:170px;"/></span>
                        <h5 class="font-medium m-b-20">Registrarse como...</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit" id="btn-register-cliente" onclick="registerCliente();">CLIENTE</button>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit" id="btn-register-transportista" onclick="registerTransportista();">TRANSPORTISTA</button>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit" id="btn-register-empresa" onclick="registerEmpresa();">EMPRESA</button>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-sm-12 text-center ">
                            ¿Ya tienes una cuenta? <a href="<?= base_url()?>" class="text-info m-l-5 "><b>Inicia sesión</b></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url()?>estilos/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url()?>estilos/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url()?>estilos/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
    </script>

    <script src="<?= base_url()?>estilos/sistema/js/registro.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>

    <script type="text/javascript">



    function regresar(){
      document.getElementById("type-register").style.display = "inline";
        document.getElementById("register-cliente").style.display = "none";
        document.getElementById("register-transportista").style.display = "none";
        document.getElementById("register-empresa").style.display = "none";
    }

    function registerCliente(){
      document.getElementById("type-register").style.display = "none";
        document.getElementById("register-cliente").style.display = "inline";
    }

    function registerTransportista(){
      document.getElementById("type-register").style.display = "none";
        document.getElementById("register-transportista").style.display = "inline";
    }

    function registerEmpresa(){
      document.getElementById("type-register").style.display = "none";
        document.getElementById("register-empresa").style.display = "inline";
    }
    </script>




</body>


</html>
