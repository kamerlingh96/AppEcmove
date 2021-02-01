<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>ECMOVE</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>styles/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>styles/framework.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>fonts/css/fontawesome-all.min.css">
<!-- Don't forget to update PWA version (must be same) in pwa.js & manifest.json -->
<link rel="manifest" href="_manifest.json" data-pwa-version="set_by_pwa.js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-background="none" data-highlight="red2">

<div id="page">

    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>

	<div class="header header-fixed header-logo-center">
        <a href="#" class="header-title">ECMOVE</a>
	</div>

        <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
          <a href="<?= base_url()?>PanelTransportista/Perfil" ><i class="fa fa-user"></i><span>Perfil</span></a>
          <a href="<?= base_url()?>PanelTransportista/Viajes"><i class="fa fa-road"></i><span>Viajes</span></a>
          <a href="<?= base_url()?>PanelTransportista"><i class="fa fa-box"></i><span>Carga</span></a>
          <a href="<?= base_url()?>PanelTransportista/Pagos" class="active-nav"><i class="fa fa-wallet"></i><span>Pagos</span></a>
          <a href="<?=base_url()?>PanelTransportista/Contacto" data-menu="menu-settings"><i class="fa fa-question"></i><span>Ayuda</span></a>
            <div class="clear"></div>
        </div>

    <div class="page-content header-clear">

        <div data-height="230" class="caption caption-margins round-medium shadow-huge top-30">
            <div class="caption-top left-20 top-20">
                <h1 class="color-white bottom-0 bolder"><?= $perfil->nombre ?> <?= $perfil->apellidoPaterno ?></h1>
                <p class="bottom-0 color-white opacity-50 under-heading font-12">ID <?= $perfil->id_user ?></p>
            </div>
            <div class="caption-top top-20 right-15">
                <a href="#" class="float-right font-11 button button-xs round-small shadow-huge bg-highlight">EDITAR</a>
            </div>
            <div class="caption-bottom bottom-35">
                <h1 class="center-text color-white fa-4x bolder">$8.178</h1>
                <p class="center-text color-white opacity-70 bottom-0 font-11">Balance Total</p>
            </div>
            <div class="caption-bottom">
                <p class="left-15 font-8 font-500 opacity-50 color-white">Exp: 10/22</p>
            </div>
            <div class="caption-bottom">
                <p class="text-right right-15 font-8 font-500 opacity-50 color-white"><i class="fa fa-wifi font-10 rotate-90"></i></p>
            </div>
            <div class="caption-overlay bg-black opacity-75"></div>
            <div class="caption-bg bg-18"></div>
        </div>

        <div class="content-boxed content-boxed-full">
            <div class="tab-controls tab-animated tabs-medium"
                 data-tab-items="1"
                 data-tab-active="bg-blue2-light">
                <a href="#" class="font-12" data-tab-active data-tab="tab-1">HISTORIAL</a>

            </div>
            <div class="clear bottom-15"></div>


            <div class="tab-content left-20 right-20" id="tab-1">

                <div class="shadow-large alert alert-large alert-round-medium bg-green1-dark bottom-30 top-30">
                    <i class="fa fa-check"></i>
                    <strong class="uppercase ultrabold">Transfer Complete</strong>
                    <span>You received $200 from John Doe</span>
                </div>
                <div class="shadow-large alert alert-small alert-round-medium bg-blue2-dark bottom-20">
                    <i class="fa fa-upload"></i>
                    <span>Send $100 to Karla <span class="float-right right-10 font-12 opacity-50">Procesando</span></span>
                </div>
                <div class="shadow-large alert alert-small alert-round-medium bg-green1-dark bottom-20">
                    <i class="fa fa-upload"></i>
                    <span>Send $14.99 to John <span class="float-right right-10 font-12 opacity-50">En espera</span></span>
                </div>
                <div class="shadow-large alert alert-small alert-round-medium bg-yellow1-dark bottom-20">
                    <i class="fa fa-download"></i>
                    <span>Receive $500 from Joe <span class="float-right right-10 font-12 opacity-50">Verificado</span></span>
                </div>
                <div class="shadow-large alert alert-small alert-round-medium bg-red2-dark">
                    <i class="fa fa-user"></i>
                    <span>Withdra $500 to Card <span class="float-right right-10 font-12 opacity-50">Rechazado</span></span>
                </div>
            </div>
        </div>


    </div>
    <!-- Page Content Class Ends Here-->



    <div class="menu-hider"></div>
</div>


<script type="text/javascript" src="<?= base_url()?>scripts/jquery.js"></script>
<script type="text/javascript" src="<?= base_url()?>scripts/plugins.js"></script>
<script type="text/javascript" src="<?= base_url()?>scripts/custom.js"></script>
</body>
