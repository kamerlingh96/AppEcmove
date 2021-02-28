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



<script type="text/javascript" src="<?= base_url()?>estilos/scripts/jquery.js"></script>
<script type="text/javascript" src="<?= base_url()?>estilos/scripts/plugins.js"></script>
<script type="text/javascript" src="<?= base_url()?>estilos/scripts/custom.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9pK_ZAsjpURG7WHpwIDoipu00zcZNciA&callback=initMap"></script>

<script type="text/javascript">

function elegirpuntob(){
  document.getElementById("puntoA").style.display="none"
  document.getElementById("puntoB").style.display=""
}

function cancelarpunto(){
  document.getElementById("puntoA").style.display=""
  document.getElementById("puntoB").style.display="none"
}


function generarNuevoEmbarque(){
  document.nuevoEmbarque.submit();
}


</script>

<style media="screen">
#map_inicio {
  width: 100%;
  height: 100%;
}
#map_fin {
  width: 100%;
  height: 100%;
}

#buscadorA,
#buscadorB{
  position: absolute;
  top: 50px;
  left: 0;
  right: 0;
  margin: 0 auto;
  width: 100%;
  padding-left: 20px;
  padding-right: 20px;
  background-color: #FFF;
  /* position: absolute;
  margin-top: -420px;
  width: 200px;
  left: 50%;
  margin-left: -100px;
  text-align: center; */
}

#buscadorA .form-field,
#buscadorB .form-field{
  width: 70%;
  display: flex;
  float: left;
}

#buscadorA .form-button,
#buscadorB .form-button{
  width: 30%;
  display: flex;
  float: left;
  margin-top: 10px;
  margin-bottom: 10px;
  padding: 0 10px 0 10px;
}


</style>


</head>

<body class="theme-light" data-background="none" data-highlight="red2">

<div id="page">


    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>

	<div class="header header-fixed header-logo-center">
        <a href="#" class="header-title">ECMOVE</a>
		<a href="<?= base_url()?>Login/logout" class="back-button header-icon header-icon-1"><i class="fas fa-times"></i></a>
	</div>

    <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
        <a href="<?=base_url()?>PanelCliente/Perfil"><i class="fa fa-user"></i><span>Perfil</span></a>
        <a href="<?= base_url()?>PanelCliente/Viajes"><i class="fa fa-road"></i><span>Viajes</span></a>
        <a href="javascript:location.reload()" class="active-nav"><i class="fa fa-box"></i><span>Carga</span></a>
        <a href="<?=base_url()?>PanelCliente/Embarques"><i class="fa fa-wallet"></i><span>Pagos</span></a>
        <a href="<?=base_url()?>PanelCliente/Contacto" data-menu="menu-settings"><i class="fa fa-question"></i><span>Ayuda</span></a>
        <div class="clear"></div>
    </div>

    <div class="page-content-black"></div>
    <div class="page-content" id="puntoA">
      
     

		    <div class="map-full">
          
			       <div id="map_inicio"></div>
             <div id="buscadorA">
                <form>
                  <fieldset>
                    <div class="form-field form-name">
                      <input type="text" name="contactNameField" value="" class="contactField round-small requiredField" id="direccionA"/>
                    </div>
                    <div class="form-button">
                      <input type="button" class="button bg-highlight button-m button-full round-small bottom-0 shadow-huge contactSubmitButton" value="Buscar" id="buscarA" />
                    </div>
                  </fieldset>
                </form>
              </div>
             <div id="mapdistancia" style="display:none;"></div>
              <div data-height="cover" class="caption ">
                <div class="caption-center">
                    <h1 class="center-text color-white bolder font-30">ELEGIR PUNTO DE CARGA</h1>
                    <p class="boxed-text-large under-heading color-white opacity-90 top-10">
                        ¿En dónde pasamos por tu carga?
                    </p>
                    <a href="#" class="show-map button button-m button-center-medium bg-green1-dark button-round-small">PUNTO DE CARGA</a>
                </div>
                <div class="caption-overlay bg-black opacity-80"></div>
              </div>
            <a href="#" data-menu="menu-signup" class="hide-map button button-m bg-green1-dark button-round-small">ELEGIR</a>
        </div>
    </div>

    <div class="page-content" id="puntoB" style="display:none;">
		    <div class="map-full">
			       <div id="map_fin"></div>
              <div id="buscadorB">
                <form>
                  <fieldset>
                    <div class="form-field form-name">
                      <input type="text" name="contactNameField" value="" class="contactField round-small requiredField" id="direccionB"/>
                    </div>
                    <div class="form-button">
                      <input type="button" class="button bg-highlight button-m button-full round-small bottom-0 shadow-huge contactSubmitButton" value="BuscarB" id="buscarB" />
                    </div>
                  </fieldset>
                </form>
              </div>
              <div data-height="cover" class="caption ">
                <div class="caption-center">
                    <h1 class="center-text color-white bolder font-30">ELEGIR PUNTO DE DESTINO</h1>
                    <p class="boxed-text-large under-heading color-white opacity-90 top-10">
                        ¿En dónde pasamos por tu carga?
                    </p>
                    <a href="#" class="show-map button button-m button-center-medium bg-green1-dark button-round-small">DESTINO DE CARGA</a>
                    <br>
                    <a href="#" onclick="cancelarpunto()" class="button button-m button-center-medium bg-highlight button-round-small">CANCELAR</a>
                </div>
                <div class="caption-overlay bg-black opacity-80"></div>
              </div>
            <a href="#" onclick="mapadistancia()" data-menu="menu-signup3" class="hide-map button button-m bg-green1-dark button-round-small">ELEGIR</a>
        </div>
    </div>

    <form action="<?=base_url()?>PanelCliente/Embarques/cotizar"  method="post" name="nuevoEmbarque" enctype="multipart/form-data" id="nuevoEmbarque">
      <div id="menu-signup" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="450" data-menu-effect="menu-over">
        <div class="content">
          <h1 class="uppercase ultrabold top-20">Contacto de embarque</h1>


          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-user font-12"></i>
            <span>Nombre quien envía</span>

            <input type="name" placeholder="Nombre quien envía" name="nombreInicio" value="<?= $perfil->nombre ?>">
          </div>
          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-envelope"></i>
            <span>Correo quien envía</span>

            <input type="email" placeholder="Correo quien envía" name="correoInicio" value="<?= $perfil->correo ?>">
          </div>
          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-mobile font-12"></i>
            <span>Celular</span>

            <input type="tel" placeholder="Celular Quien Envia" name="celularInicio" value="<?= $perfil->tel ?>">
          </div>
          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-phone font-12"></i>
            <span>Teléfono</span>

            <input type="tel" placeholder="Teléfono quien envía (Opcional)" name="telefonoInicio">
          </div>


          <div class="clear"></div>
          <a href="#"  data-menu="menu-signup2" class="button button-full button-s shadow-large button-round-small bg-blue2-dark top-10">CONFIRMAR</a>
          <a href="#" class="close-menu button button-full button-s shadow-large button-round-small bg-red2-dark top-10">CANCELAR</a>
        </div>
      </div>

      <div id="menu-signup2" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="450" data-menu-effect="menu-over">
        <div class="content">
          <h1 class="uppercase ultrabold top-20">Contacto de embarque</h1>
          <!-- <h4 class="top-20">Dirección: <span id="direccionInicio">calle zacapu</span></h4> -->

          <p><b>Dirección de Embarque: </b><span id="direccionInicio"></span></p>
          <div class="" style="display:none;">
            <input type="text" name="coordsInicio" id="coordsInicio">
            <input type="text" name="estadoInicio" id="estadoInicio">
            <input type="text" name="municipioInicio" id="municipioInicio">
            <input type="text" name="calleInicio" id="calleInicio">
            <input type="text" name="coloniaInicio" id="coloniaInicio">
            <input type="text" name="numExtInicio" id="numExtInicio">
            <input type="text" name="numIntInicio" id="numIntInicio">
            <input type="text" name="cpInicio" id="cpInicio">
          </div>





          <div class="input-style has-icon input-style-1 input-required">
            <span>Referencia</span>

            <textarea type="text" placeholder="Referencia" name="referenciaInicio" ></textarea>
          </div>

          <div class="clear"></div>
          <a href="#" onclick="elegirpuntob()" class="close-menu button button-full button-s shadow-large button-round-small bg-blue2-dark top-10">CONFIRMAR</a>
          <a href="#" class="close-menu button button-full button-s shadow-large button-round-small bg-red2-dark top-10">CANCELAR</a>
        </div>
      </div>




      <div id="menu-signup3" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="450" data-menu-effect="menu-over">
        <div class="content">
          <h1 class="uppercase ultrabold top-20">Contacto de Destino</h1>


          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-user font-12"></i>
            <span>Nombre quien recibe</span>

            <input type="name" placeholder="Nombre quien recibe" name="nombreFin" >
          </div>
          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-envelope"></i>
            <span>Correo quien recibe</span>

            <input type="email" placeholder="Correo quien recibe" name="correoFin" >
          </div>

          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-mobile font-12"></i>
            <span>Celular</span>

            <input type="tel" placeholder="Celular quien recibe" name="celularFin">
          </div>

          <div class="input-style has-icon input-style-1 input-required">
            <i class="input-icon fa fa-phone font-12"></i>
            <span>Teléfono</span>

            <input type="tel" placeholder="Teléfono quien recibe (Opcional)" name="telefonoFin">
          </div>

          <div class="clear"></div>
          <a href="#"  data-menu="menu-signup4" class="button button-full button-s shadow-large button-round-small bg-blue2-dark top-10">CONFIRMAR</a>
          <a href="#" class="close-menu button button-full button-s shadow-large button-round-small bg-red2-dark top-10">CANCELAR</a>
        </div>
      </div>

      <div id="menu-signup4" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="450" data-menu-effect="menu-over">
        <div class="content">
          <h1 class="uppercase ultrabold top-20">Contacto de Destino</h1>
          <!-- <h4 class="top-20">Dirección: <span id="direccionInicio">calle zacapu</span></h4> -->

          <p><b>Dirección de Embarque: </b><span id="direccionFin"></span></p>

          <div class="" style="display:none;">
            <input type="text" name="coordsFin" id="coordsFin">
            <input type="text" name="estadoFin" id="estadoFin">
            <input type="text" name="municipioFin" id="municipioFin">
            <input type="text" name="calleFin" id="calleFin">
            <input type="text" name="coloniaFin" id="coloniaFin">
            <input type="text" name="numExtFin" id="numExtFin">
            <input type="text" name="numIntFin" id="numIntFin">
            <input type="text" name="cpFin" id="cpFin">
            <input type="number" name="distanciaMetros" id="distanciaMetros">
          </div>

          <div class="input-style has-icon input-style-1 input-required">
            <span>Referencia</span>

            <textarea type="text" placeholder="Referencia" name="referenciaFin" ></textarea>
          </div>

          <div class="clear"></div>
          <a href="#" data-menu="menu-signup5" class="button button-full button-s shadow-large button-round-small bg-blue2-dark top-10">CONFIRMAR</a>
          <a href="#" class="close-menu button button-full button-s shadow-large button-round-small bg-red2-dark top-10">CANCELAR</a>
        </div>
      </div>


      <div id="menu-signup5" class="menu menu-box-bottom menu-box-detached round-medium" data-menu-height="450" data-menu-effect="menu-over">
        <div class="content">
          <h1 class="uppercase ultrabold top-20">Detalles de la carga</h1>

          <div class="" style="display:none;">
            <input type="text" name="tipoMaterial" value="Solido">
          </div>

          <div class="input-style input-style-1 input-required">
            <span>Alto</span>

            <input type="number" placeholder="Alto" name="alto" >
          </div>
          <div class="input-style input-style-1 input-required">
            <span>Ancho</span>

            <input type="number" placeholder="Ancho" name="ancho" >
          </div>

          <div class="input-style input-style-1 input-required">
            <span>Largo</span>

            <input type="number" placeholder="Largo" name="largo">
          </div>

          <div class="input-style n input-style-1 input-required">
            <span>Peso</span>

            <input type="number" placeholder="Peso" name="peso">
          </div>

          <div style="display:none">
            <input type="text" name="vehiculoSeleccionado" value="RABON 1 EJE">
          </div>

          <div class="input-style has-icon input-style-1 input-required">
            <span>¿Necesita algun tipo de embalaje?</span>

            <textarea type="text" placeholder="Descripción" name="descripcionPaquete" ></textarea>
          </div>

          <div class="clear"></div>
          <a href="#"  onclick="generarNuevoEmbarque()" class="button button-full button-s shadow-large button-round-small bg-blue2-dark top-10">CONFIRMAR</a>
          <a href="#" class="close-menu button button-full button-s shadow-large button-round-small bg-red2-dark top-10">CANCELAR</a>
        </div>
      </div>

    </form>

    <div class="menu-hider"></div>


  </div>


  <script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";

    /* $("#buscarA").click(function() {
      var direccionA = $("#direccionA").val();
      buscarDireccionA()
    }) */



  </script>

  
<script type="text/javascript" src="<?= base_url()?>estilos/sistema/js/nuevaCarga.js"></script>




</body>
</html>
