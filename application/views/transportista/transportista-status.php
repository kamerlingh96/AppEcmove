<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<title>ECMOVE</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>estilos/styles/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>estilos/styles/framework.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>estilos/fonts/css/fontawesome-all.min.css">
<!-- Don't forget to update PWA version (must be same) in pwa.js & manifest.json -->
</head>

<body class="theme-light" data-background="none" data-highlight="red2">

<div id="page">

    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
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

	<div class="header header-fixed header-logo-center">
        <a href="index.html" class="header-title">ECMOVE</a>
	</div>

      <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
          <a href="<?=base_url()?>PanelTransportista/Perfil"><i class="fa fa-user"></i><span>Perfil</span></a>
          <a href="javascript:location.reload()" class="active-nav"><i class="fa fa-road"></i><span>Viajes</span></a>
          <a href="<?= base_url()?>PanelTransportista"><i class="fa fa-box"></i><span>Carga</span></a>
          <a href="<?= base_url()?>PanelTransportista/Pagos"><i class="fa fa-wallet"></i><span>Pagos</span></a>
          <a href="<?=base_url()?>PanelTransportista/Contacto" data-menu="menu-settings"><i class="fa fa-question"></i><span>Ayuda</span></a>
          <div class="clear"></div>
      </div>

    <div class="page-content header-clear-large">

      <div data-height="100" class="caption caption-margins round-medium shadow-huge">
          <div class="caption-center right-15 top-15 text-right">
              <a href="<?=base_url()?>PanelTransportista/Viajes/historial" class="back-button button button-xs button-round-huge bg-highlight">Historial</a>
          </div>
          <div class="caption-center left-15 text-left">
              <h1 class="color-white bolder">Mis Viajes</h1>
              <p class="under-heading color-white opacity-90 bottom-0">
                  Viajes completados
              </p>
          </div>
          <div class="caption-overlay bg-black opacity-70"></div>
          <div class="caption-bg bg-18"></div>
      </div>


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




                          <div class="content-boxed content-boxed-full">
                              <img src="<?= base_url()?>estilos/images/pictures/18w.jpg" class="preload-image responsive-image bottom-20">
                              <div class="content bottom-10">
                                  <div class="float-left">
                                      <h1 class="bolder">#<?=$embarque->id?></h1>
                                      <!-- <p class="font-10 under-heading bottom-15"><i class="fa fa-map-marker-alt right-10"></i>Melbourne Victoria, Collins Street</p> -->
                                  </div>
                                  <a href="<?= base_url()?>PanelTransportista/Viajes/mapaCompleto/<?=$embarque->id?>" class="button button-xs bg-highlight round-huge shadow-huge float-right font-11">Ver Mapa Completo</a>
                                  <div class="divider clear bottom-15"></div>
                                  <a href="#" class="toggle-icon toggle-off bottom-15"
                                     data-icons-size="12"
                                     data-toggle-effect="rotate-45"
                                     data-toggle-icon-on="color-green1-dark"
                                     data-toggle-icon-off="color-red1-dark"
                                     data-toggle-content="toggle-content-6-<?=$embarque->id?>">
                                      <span class="color-theme regularbold">Ver mas</span>
                                      <i class="fa fa-plus"></i>
                                  </a>
                                  <div class="toggle-content" id="toggle-content-6-<?=$embarque->id?>">
                                    <div class="link-list link-list-2 link-list-long-border ">
                                        <a href="#">
                                            <i class="far fa-calendar color-blue2-dark" style="top: 30px!important;"></i>

                                            <?php
                                            if ($embarque->estadoDeEmbarque == "Asignado") {
                                              ?>
                                              <span>Embarcado</span>
                                              <em class="bg-blue2-dark" style="top: 30px!important;">En proceso</em>
                                              <?php
                                            }elseif ($embarque->estadoDeEmbarque == "En ruta") {
                                              ?>
                                              <span>En ruta</span>
                                              <em class="bg-blue2-dark" style="top: 30px!important;">En proceso</em>
                                              <?php
                                            }elseif ($embarque->estadoDeEmbarque == "Completado") {
                                              ?>
                                              <span>Completado</span>
                                              <em class="bg-green2-dark" style="top: 30px!important;">Listo</em>
                                              <?php
                                            }
                                             ?>

                                        </a>

                                    </div>
                                    <div class="one-half">
                                        <strong class="color-theme">Ganancia:</strong>
                                        <p class="font-12 bottom-15">$<?=number_format($embarque->totalFacturacion - 14000)?></p>
                                    </div>
                                    <div class="one-half last-column">
                                        <strong class="color-theme">Tiempo:</strong>
                                        <p class="font-12 bottom-15"><i class="far fa-clock right-5"></i>09:00 AM</p>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="one-half">
                                        <strong class="color-theme">Descripción:</strong>
                                        <p class="font-12 bottom-15"><?=$paquete->descripcionPaquete?></p>
                                    </div>
                                    <div class="one-half last-column">
                                        <strong class="color-theme">Distancia:</strong>
                                        <p class="font-12 bottom-15"><?=$inicioFin->distanciaMetros/1000?>Km</p>
                                    </div>
                                    <div class="divider clear bottom-15"></div>
                                    <div class="one-half ">
                                      <a href="tel:<?=$remitenteDestinatario->telefonoInicio?>" class="button button-s button-full round-small shadow-huge bg-green3-dark">Llamar A</a>
                                    </div>
                                    <div class="one-half last-column">
                                      <a href="google.navigation:q=<?=$inicioFin->coordsInicio?>&mode=d" class="button button-s button-full round-small shadow-huge bg-highlight">Punto A</a>
                                    </div>
                                    <div class="one-half ">
                                      <a href="tel:<?=$remitenteDestinatario->telefonoFin?>" class="button button-s button-full round-small shadow-huge bg-green3-dark">Llamar B</a>
                                    </div>
                                    <div class="one-half last-column">
                                      <a href="google.navigation:q=<?=$inicioFin->coordsFin?>&mode=d" class="button button-s button-full round-small shadow-huge bg-highlight">Punto B</a>
                                    </div>

                                  </div>
                                   <?php
                                   if ($embarque->estadoDeEmbarque == "Asignado") {
                                     ?>
                                     <a href="<?= base_url()?>PanelTransportista/Viajes/asignado/<?=$embarque->id?>" class="button button-s button-full round-small shadow-huge bg-highlight">Embarcado</a>
                                     <?php
                                   }elseif ($embarque->estadoDeEmbarque == "En ruta") {
                                     ?>
                                     <a href="<?= base_url()?>PanelTransportista/Viajes/enruta/<?=$embarque->id?>" class="button button-s button-full round-small shadow-huge bg-highlight">Completado</a>
                                     <?php
                                   }
                                    ?>
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


        <!-- <div class="content-boxed content-boxed-full">
            <img data-src="<?= base_url()?>estilos/images/pictures/18w.jpg" class="preload-image responsive-image bottom-20">
            <div class="content bottom-10">
                <div class="float-left">
                    <h1 class="bolder">Paintball Event</h1>
                    <p class="font-10 under-heading bottom-15"><i class="fa fa-map-marker-alt right-10"></i>Melbourne Victoria, Collins Street</p>
                </div>
                <a href="#" class="button button-xs bg-highlight round-huge shadow-huge float-right font-11">Ver Mapa Completo</a>
                <div class="divider clear bottom-15"></div>
                <a href="#" class="toggle-icon toggle-off bottom-15"
                   data-icons-size="12"
                   data-toggle-effect="rotate-45"
                   data-toggle-icon-on="color-green1-dark"
                   data-toggle-icon-off="color-red1-dark"
                   data-toggle-content="toggle-content-6">
                    <span class="color-theme regularbold">Ver mas</span>
                    <i class="fa fa-plus"></i>
                </a>
                <div class="toggle-content" id="toggle-content-6">
                  <div class="one-half">
                      <strong class="color-theme">Date:</strong>
                      <p class="font-12 bottom-15"><i class="far fa-calendar right-5"></i>15 August 2025</p>
                  </div>
                  <div class="one-half last-column">
                      <strong class="color-theme">Time:</strong>
                      <p class="font-12 bottom-15"><i class="far fa-clock right-5"></i>09:00 AM</p>
                  </div>
                  <div class="clear"></div>
                  <strong class="color-theme">Description</strong>
                  <p>
                      Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event.
                      Protection required for all visitors that plan on walking the course.
                  </p>

                  <div class="user-group">
                      <div class="user-group-manager border-highlight">
                          <img class="shadow-large" src="<?= base_url()?>estilos/images/pictures/faces/4s.png" alt="img">
                          <h4 class="color-theme">Vincent M.</h4>
                          <em class="color-highlight">Event Creator</em>
                      </div>
                      <div class="user-group-title">
                          <h5 class="color-theme bolder bottom-0">Friends that are Going</h5>
                          <p class="under-heading font-10 color-highlight bottom-15">John, Jack, Jason and Joe and 16 others</p>
                      </div>
                      <div class="user-group-users">
                          <img class="shadow-large" src="images/pictures/faces/2s.png">
                          <img class="shadow-large" src="images/pictures/faces/3s.png">
                          <img class="shadow-large" src="images/pictures/faces/1s.png">
                          <img class="shadow-large" src="images/pictures/faces/4s.png">
                          <div class="clear"></div>
                      </div>
                      <div class="clear"></div>
                  </div>
                </div>

                <a href="#" class="button button-s button-full round-small shadow-huge bg-highlight">Join Event</a>

            </div>
        </div> -->


                <!-- <div class="content-boxed content-boxed-full">
                    <div data-height="200" class="caption  shadow-huge bottom-15">
                        <div class="caption-bottom top-25 left-20">
                            <p class="color-white font-10 opacity-80 top-15 bottom-5"><i class="far fa-calendar"></i> August 28 <i class="left-15 far fa-clock"></i> 09:00 PM</p>
                            <p class="under-heading color-white font-10 opacity-80"><i class="fa fa-map-marker-alt"></i>Melbourne, Victoria, Australia Collins Street</p>
                        </div>
                        <div class="caption-overlay bg-gradient opacity-90"></div>
                        <div class="caption-bg bg-18"></div>
                    </div>
                    <div class="content bottom-10">
                        <div class="float-left">
                            <h1 class="bolder">Classic Event Card</h1>
                            <p class="font-10 under-heading bottom-15"><i class="fa fa-map-marker-alt right-10"></i>Melbourne Victoria, Collins Street</p>
                        </div>
                        <a href="#" class="button button-xs bg-highlight round-huge shadow-huge float-right font-11 top-5">View on Map</a>
                    </div>
                </div> -->


        <!-- <div class="content-boxed content-boxed-full">
            <img data-src="<?= base_url()?>estilos/images/pictures/28w.jpg" class="preload-image responsive-image bottom-20">
            <div class="content bottom-10">
                <h1 class="bolder">Apple Keynote</h1>
                <p class="font-10 under-heading bottom-0 color-highlight">We have Something Special For You</p>
                <div class="link-list link-list-2 link-list-long-border ">
                    <a href="#">
                        <i class="far fa-calendar color-blue2-dark"></i>
                        <span>Sat, May 25, 2029</span>
                        <strong>10:00 AM -  11:30 AM</strong>
                        <em class="bg-blue2-dark">SAVE EVENT</em>
                    </a>
                    <a href="#">
                        <i class="fa fa-map-marker-alt color-red2-dark"></i>
                        <span>Apple Campus</span>
                        <em class="bg-blue2-dark">SEE ON MAP</em>
                        <strong>Palo Alto, California</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-ticket-alt color-green1-dark"></i>
                        <span>Invite Only</span>
                        <strong>VIP Pass - $250</strong>
                        <em class="bg-blue2-dark">GET TICKET</em>
                    </a>
                </div>

                <h4 class="bolder top-20">About Event</h4>
                <p>
                    Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event.
                    Protection required for all visitors that plan on walking the course.
                </p>

                <div class="float-left">
                <div class="user-group-users">
                    <img class="shadow-large" src="images/pictures/faces/2s.png">
                    <img class="shadow-large" src="images/pictures/faces/3s.png">
                    <img class="shadow-large" src="images/pictures/faces/1s.png">
                    <img class="shadow-large" src="images/pictures/faces/4s.png">
                    <div class="clear"></div>
                </div>
                </div>
                <div class="float-left top-10">
                    <strong class="color-theme">+562 Others Going</strong>
                </div>
                <div class="clear"></div>
                <a href="#" class="button button-s button-full round-small shadow-huge bg-highlight top-20">Request Invitation to Event</a>

            </div>
        </div> -->

        <!-- <a href="page-20-event-1.html" class="button button-margins bg-highlight round-small bottom-30 shadow-huge button-m button-full">Check out Event Simple Cards</a> -->


        <!-- <div class="content-boxed">
            <div class="footer">
                <a href="#" class="footer-title"><span class="color-highlight">StickyMobile</span></a>
                <p class="footer-text"><span>Made with <i class="fa fa-heart color-highlight font-16 left-10 right-10"></i> by Enabled</span><br><br>Powered by the best Mobile Website Developer on the Envato Marketplaces. Elite Quality. Elite Products.</p>
                <div class="footer-socials">
                    <a href="#" class="round-tiny shadow-medium bg-facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="round-tiny shadow-medium bg-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="round-tiny shadow-medium bg-phone"><i class="fa fa-phone"></i></a>
                    <a href="#" data-menu="menu-share" class="round-tiny shadow-medium bg-red2-dark"><i class="fa fa-share-alt"></i></a>
                    <a href="#" class="back-to-top round-tiny shadow-medium bg-dark1-light"><i class="fa fa-angle-up"></i></a>
                </div>
                <div class="clear"></div>
                <p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights Reserved.</p>
                <p class="footer-links"><a href="#" class="color-highlight">Privacy Policy</a> | <a href="#" class="color-highlight">Terms and Conditions</a> | <a href="#" class="back-to-top color-highlight"> Back to Top</a></p>
                <div class="clear"></div>
            </div>
        </div> -->
    </div>
    <!-- Page Content Class Ends Here-->

    <!--Menu Settings-->
    <div id="menu-settings" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="310" data-menu-effect="menu-over">
        <div class="content bottom-0">
            <div class="menu-title"><h1>Settings</h1><p class="color-highlight">Flexible and Easy to Use</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
            <div class="divider bottom-20"></div>
            <div class="toggle-with-icon">
                <i class="toggle-icon round-tiny fa fa-moon bg-red2-dark color-white"></i>
                <a href="#" class="toggle-switch toggle-ios toggle-off"
                   data-toggle-theme
                   data-toggle-height="27"
                   data-toggle-width="50"
                   data-toggle-content="toggle-content-1"
                   data-toggle-checkbox="toggle-checkbox-1"
                   data-bg-on="bg-green1-dark"
                   data-bg-off="">
                    <span class="color-theme regularbold font-13">Dark Mode</span>
                    <strong></strong>
                    <u></u>
                </a>
            </div>
            <div class="divider top-25 bottom-0"></div>
            <div class="link-list link-list-2 link-list-long-border">
                <a href="#" data-menu="menu-highlights">
                    <i class="fa fa-tint bg-green1-dark color-white round-tiny"></i>
                    <span>Page Highlight</span>
                    <strong>16 Color Highlights Included</strong>
                    <em class="bg-highlight">HOT</em>
                </a>
                <a href="#" data-menu="menu-backgrounds" class="no-border">
                    <i class="fa fa-brush bg-blue2-dark color-white round-tiny"></i>
                    <span>Page Background</span>
                    <strong>10 Page Gradients Included</strong>
                    <em class="bg-highlight">NEW</em>
                </a>
            </div>
        </div>

    </div>
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
    <!-- Menu Share-->
    <div id="menu-share" class="menu menu-box-bottom menu-box-detached round-large" data-menu-height="340" data-menu-effect="menu-over">
        <div class="content bottom-0">
            <div class="menu-title"><h1>Share the Love</h1><p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
            <div class="divider bottom-0"></div>
        </div>
        <div class="link-list link-list-1 left-15 right-15">
            <a href="#" class="shareToFacebook">
                <i class="font-18 fab fa-facebook color-facebook"></i>
                <span class="font-13">Facebook</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="#" class="shareToTwitter">
                <i class="font-18 fab fa-twitter-square color-twitter"></i>
                <span class="font-13">Twitter</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="#" class="shareToLinkedIn">
                <i class="font-18 fab fa-linkedin color-linkedin"></i>
                <span class="font-13">LinkedIn</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="#" class="shareToWhatsApp">
                <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                <span class="font-13">WhatsApp</span>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="#" class="shareToMail no-border">
                <i class="font-18 fa fa-envelope-square color-mail"></i>
                <span class="font-13">Email</span>
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>

    <div class="menu-hider"></div>
</div>


<script type="text/javascript" src="<?= base_url()?>estilos/scripts/jquery.js"></script>
<script type="text/javascript" src="<?= base_url()?>estilos/scripts/plugins.js"></script>
<script type="text/javascript" src="<?= base_url()?>estilos/scripts/custom.js"></script>
</body>
