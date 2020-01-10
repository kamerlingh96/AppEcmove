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
</head>

<body class="theme-light" data-background="none" data-highlight="red2">

<div id="page">

  <script type="text/javascript">

  setTimeout(function () {
    // Obtener referencia al input y a la imagen

    const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

    // Escuchar cuando cambie
    $seleccionArchivos.addEventListener("change", () => {
    // Los archivos seleccionados, pueden ser muchos o uno
    document.getElementById("btnEnviarComprobante").style.display=""
    const archivos = $seleccionArchivos.files;
    // Si no hay archivos salimos de la función y quitamos la imagen
    if (!archivos || !archivos.length) {
      $imagenPrevisualizacion.src = "";
      return;
    }
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const primerArchivo = archivos[0];
    // Lo convertimos a un objeto de tipo objectURL
    const objectURL = URL.createObjectURL(primerArchivo);
    // Y a la fuente de la imagen le ponemos el objectURL
    $imagenPrevisualizacion.src = objectURL;
    });
  }, 500);

  </script>



    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>

	<div class="header header-fixed header-logo-center">
        <a href="#" class="header-title">ECMOVE</a>
		<a href="<?= base_url()?>PanelCliente/Embarques" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
	</div>

        <!-- <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
            <a href="cliente-perfil.html"><i class="fa fa-user"></i><span>Perfil</span></a>
            <a href="status-viaje.htmml"><i class="fa fa-road"></i><span>Viajes</span></a>
            <a href="<?=base_url()?>" class="active-nav"><i class="fa fa-box"></i><span>Carga</span></a>
            <a href="<?= base_url()?>PanelCliente/Embarques"><i class="fa fa-wallet"></i><span>Pagos</span></a>
            <a href="ayuda.html" data-menu="menu-settings"><i class="fa fa-question"></i><span>Ayuda</span></a>
            <div class="clear"></div>
        </div> -->


    <div class="page-content header-clear-medium">

        <div data-height="130" class="caption caption-margins round-medium shadow-huge">

            <div class="caption-center left-15 text-left">
                <h1 class="color-white bolder">Comprobante #<?=$folioCotizacion?></h1>
                <p class="under-heading color-white opacity-90 bottom-0">
                    Bienvenido
                </p>
            </div>
            <div class="caption-overlay bg-black opacity-70"></div>
            <div class="caption-bg bg-18"></div>
        </div>


        <div class="content content-boxed round-medium shadow-huge">
            <div class="content">

                <div class="divider"></div>

                <p class="bottom-20">
                    Envia una foto de tu comprobante de pago realizado.
                </p>
                <div class="file-data">
                    <input type="file" class="upload-file button bg-highlight button-full shadow-huge round-small button-xs " accept="image/*" id="seleccionArchivos">
                    <p class="upload-file-text">Seleccionar</p>
                    <img src="<?= base_url()?>estilos/images/empty.png">
                </div>
                <div class="divider divider-margins bottom-0"></div>
                <div class="">

                </div>

                <img id="imagenPrevisualizacion" style="height:100%;width:100%;">
                <br>
                <a href="#"  onclick="generarNuevoEmbarque()" style="display:none;" id="btnEnviarComprobante" class="button button-full button-s shadow-large button-round-small bg-blue2-dark top-10">Enviar</a>


                <!--<div class="link-list link-list-2 link-list-long-border upload-file-data disabled">
                    <a href="#">
                        <i class="fa fa-info-circle color-blue2-dark"></i>
                        <span>File Name</span>
                        <strong class="font-12 upload-file-name">Flexible, Fast, and Very Powerful</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-weight-hanging color-brown1-dark"></i>
                        <span>File Size</span>
                        <strong class="font-12 upload-file-size">Colorful, easy to use and beautiful</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-tag color-red2-dark"></i>
                        <span>File Type</span>
                        <strong class="font-12 upload-file-type">Colorful, easy to use and beautiful</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-clock color-green1-dark"></i>
                        <span>Modified Date</span>
                        <strong class="font-12 upload-file-modified">Designed to feel iOS like</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>-->
            </div>
        </div>




    </div>
    <!-- Page Content Class Ends Here-->

    <!--Menu Settings-->

    <!--Menu Settings Highlights-->
    <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="380" data-menu-effect="menu-over">
        <div class="content bottom-0">
            <div class="menu-title"><h1>Highlights</h1><p class="color-highlight">Any Element can have a Highlight Color</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
            <div class="divider bottom-0"></div>
            <div class="highlight-changer bottom-30">
                <a href="#" data-change-highlight="blue2"><i class="fa fa-circle color-blue2-dark"></i><span class="color-blue2-light">Default</span></a>
                <a href="#" data-change-highlight="red1"><i class="fa fa-circle color-red1-dark"></i><span class="color-red2-light">Red</span></a>
                <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span class="color-orange-light">Orange</span></a>
                <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span class="color-pink2-light">Pink</span></a>
                <a href="#" data-change-highlight="magenta2"><i class="fa fa-circle color-magenta2-dark"></i><span class="color-magenta2-light">Purple</span></a>
                <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span class="color-aqua-light">Aqua</span></a>
                <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span class="color-teal-light">Teal</span></a>
                <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span class="color-mint-light">Mint</span></a>
                <a href="#" data-change-highlight="green2"><i class="fa fa-circle color-green2-dark"></i><span class="color-green2-light">Green</span></a>
                <a href="#" data-change-highlight="green1"><i class="fa fa-circle color-green1-dark"></i><span class="color-green1-light">Grass</span></a>
                <a href="#" data-change-highlight="yellow2"><i class="fa fa-circle color-yellow2-dark"></i><span class="color-yellow2-light">Sunny</span></a>
                <a href="#" data-change-highlight="yellow1"><i class="fa fa-circle color-yellow1-dark"></i><span class="color-yellow1-light">Goldish</span></a>
                <a href="#" data-change-highlight="brown1"><i class="fa fa-circle color-brown1-dark"></i><span class="color-brown1-light">Wood</span></a>
                <a href="#" data-change-highlight="dark1"><i class="fa fa-circle color-dark1-dark"></i><span class="color-dark1-light">Night</span></a>
                <a href="#" data-change-highlight="dark2"><i class="fa fa-circle color-dark2-dark"></i><span class="color-dark2-light">Dark</span></a>
                <div class="clear"></div>
            </div>
            <a href="#" data-menu="menu-settings" class="button button-s button-full button-m button-round-large bg-highlight shadow-large">Back to Settings</a>
        </div>
    </div>
    <!-- Menu Settings Backgrounds-->
    <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="310" data-menu-effect="menu-over">
        <div class="content">
            <div class="menu-title"><h1>Backgrounds</h1><p class="color-highlight">Change Page Color Behind Content Boxes</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
            <div class="divider bottom-0"></div>
            <div class="background-changer bottom-30">
                <a href="#" data-change-background="none"><i class="bg-theme"></i><span>Default</span></a>
                <a href="#" data-change-background="plum"><i class="body-plum"></i><span class="color-plum-dark">Plum</span></a>
                <a href="#" data-change-background="magenta3"><i class="body-magenta3"></i><span class="color-magenta3-dark">Magenta</span></a>
                <a href="#" data-change-background="dark3"><i class="body-dark3"></i><span class="color-dark3-dark">Dark</span></a>
                <a href="#" data-change-background="violet"><i class="body-violet"></i><span class="color-violet-dark">Violet</span></a>
                <a href="#" data-change-background="red3"><i class="body-red3"></i><span class="color-red3-dark">Red</span></a>
                <a href="#" data-change-background="green3"><i class="body-green3"></i><span class="color-green3-dark">Green</span></a>
                <a href="#" data-change-background="sky"><i class="body-sky"></i><span class="color-sky-dark">Sky</span></a>
                <a href="#" data-change-background="pumpkin"><i class="body-pumpkin"></i><span class="color-pumpkin-dark">Orange</span></a>
                <a href="#" data-change-background="yellow3"><i class="body-yellow3"></i><span class="color-yellow3-dark">Yellow</span></a>
                <div class="clear"></div>
            </div>
            <a href="#" data-menu="menu-settings" class="button button-s button-full button-m button-round-large bg-highlight shadow-large">Back to Settings</a>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url()?>estilos/scripts/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url()?>estilos/scripts/plugins.js"></script>
    <script type="text/javascript" src="<?= base_url()?>estilos/scripts/custom.js"></script>


    <div class="menu-hider"></div>
</div>




</body>
