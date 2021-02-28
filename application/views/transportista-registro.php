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
<link rel="stylesheet" type="text/css" href="<?= base_url()?>estilos/sistema/lib/toastr/toastr.css">
<!-- Don't forget to update PWA version (must be same) in pwa.js & manifest.json -->
<link rel="manifest" href="_manifest.json" data-pwa-version="set_by_pwa.js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-background="none" data-highlight="red2">

<div id="page">
  <script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
  </script>

  <script type="text/javascript" src="<?= base_url()?>estilos/scripts/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url()?>estilos/scripts/plugins.js"></script>
  <script type="text/javascript" src="<?= base_url()?>estilos/scripts/custom.js"></script>
  <script type="text/javascript" src="<?= base_url()?>estilos/sistema/lib/toastr/toastr.min.js"></script>
  <script src="<?= base_url()?>estilos/sistema/js/registro.js"></script>

    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>

	<div class="header header-fixed header-logo-center">
        <a href="index.html" class="header-title">ECMOVE</a>
		<a href="<?= base_url()?>" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
	</div>


    <div class="page-content header-clear-medium">

            <div class="content-boxed left-40 right-40">
                <div class="content top-10 bottom-10">
                  <form class="" role="form" action="<?= base_url()?>Register/transportista" method="POST" name="formulariocliente" id="cliente">
                    <h1 class="center-text uppercase ultrabold fa-3x">Registro</h1>
                    <p class="center-text color-highlight font-11 under-heading bottom-30">
                        Ingresa la información
                    </p>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-user font-11"></i>
                        <span>Nombres</span>

                        <input type="text" placeholder="Nombre" name="name">
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-user font-11"></i>
                        <span>Apellido Paterno</span>

                        <input type="text" placeholder="Apellido Paterno" name="apellidoPaterno">
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-user font-11"></i>
                        <span>Apellido Materno</span>

                        <input type="text" placeholder="Apellido Materno" name="apellidoMaterno">
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-id-card font-11"></i>
                        <span>Número Económico</span>

                        <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Número Económico" name="curp" maxlength="18">
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-at"></i>
                        <span>Correo</span>

                        <input type="email" placeholder="Correo" name="email">
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-phone"></i>
                        <span>Celular</span>

                        <input type="tel" placeholder="Celular" name="cel">
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-lock font-11"></i>
                        <span>Elegir Contraseña</span>

                        <input type="password" placeholder="Elegir contraseña" name="pass">
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-lock font-11"></i>
                        <span>Confirmar contraseña</span>
                        <input type="password" placeholder="Confirmar contraseña" name="repass">
                    </div>
                    <div class="clear"></div>

                    <a href="" onclick="ejecutarRegistro(event)" id="clicregostroCliente" class="button button-full button-m shadow-large button-round-small bg-green1-dark top-30 bottom-30">CREAR CUENTA</a>

                    <div class="divider bottom-20"></div>
                    <div class="bottom-20">
                        <a href="<?php echo base_url(); ?>Login" class="center-text font-11 color-theme">¿Ya tienes una cuenta? Iniciar sesión.</a>
                    </div>
                    <!-- <a href="#" class="back-button button button-icon button-full button-m shadow-large button-round-small font-11 bg-facebook top-30 bottom-0"><i class="fab fa-facebook-f"></i>Register with with Facebook</a>
                    <a href="#" class="back-button button button-icon button-full button-m shadow-large button-round-small font-11 bg-twitter top-10 bottom-40"><i class="fab fa-twitter"></i>Register with Twitter</a>-->

                  </form>
                </div>
            </div>


    </div>
    <!-- Page Content Class Ends Here-->




    <div class="menu-hider"></div>
</div>



</body>
