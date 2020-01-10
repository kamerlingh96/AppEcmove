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
<link rel="manifest" href="_manifest.json" data-pwa-version="set_by_pwa.js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-background="none" data-highlight="red2">
<script type="text/javascript">
  function cerrarwebview(){
    Android.showToast("cerrarwebview")
  }
</script>
<div id="page">

    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>

	<div class="header header-fixed header-logo-center">
        <a href="#" class="header-title">ECMOVE</a>
		<a href="<?= base_url()?>" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
	</div>



    <div class="page-content-black"></div>
    <div class="page-content">

        <div class="cover-slider owl-carousel bg-black">
            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <h1 class="center-text bottom-30"><i class="fa fa-4x fa-truck color-white"></i></h1>
                    <h1 class="center-text color-white bolder fa-2x">Tu carga en 3 pasos</h1>
                    <h6 class="center-text color-white bottom-20">Conectamos lo mejor con los mejores</h6>

                    <p class="boxed-text-large color-white opacity-80">
                        With over 10 years ld, we give our customers everything we have.
                    </p>
                    <a href="<?= base_url()?>" class="button button-s bg-highlight button-round-huge button-center-small shadow-large">INICIAR</a>
                </div>
                <div class="caption-overlay bg-black opacity-70"></div>
                <div class="caption-bg" style="background-image:url(<?= base_url()?>estilos/images/pictures/14t.jpg)"></div>
            </div>

            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <h1 class="center-text color-white bolder fa-3x bottom-20">Captions Rock</h1>

                    <div class="divider-small top-30 bottom-30 bg-highlight"></div>

                    <p class="boxed-text-large color-white opacity-80">
                        Limitless possibilities. Switch your cover to reflect
                        your style and design. It's flexible beyond belief.
                    </p>
                    <a href="<?= base_url()?>" class="button button-s bg-highlight button-round-huge button-center-small shadow-large">INICIAR</a>
                </div>
                <div class="caption-overlay bg-black opacity-80"></div>
                <div class="caption-bg" style="background-image:url(<?= base_url()?>estilos/images/pictures/25t.jpg)"></div>
            </div>



            <div data-height="cover" class="caption">
                <div class="caption-center">
                    <h1 class="color-white bolder fa-4x left-20 bottom-20 top-50">FIND</h1>
                    <h1 class="color-white bolder fa-5x left-20 bottom-20">YOUR</h1>
                    <h1 class="color-white bolder fa-4x left-20 bottom-30">STYLE</h1>
                    <p class="left-20 right-50 color-white opacity-90">
                        Limitless possibilities. Switch your cover to reflect
                        your style and design. It's flexible beyond belief.
                    </p>
                    <a href="<?= base_url()?>" class="left-20 button button-s bg-highlight button-round-medium shadow-large">INICIAR</a>
                </div>
                <div class="caption-overlay bg-black opacity-80"></div>
                <div class="caption-bg" style="background-image:url(<?= base_url()?>estilos/images/pictures/29t.jpg)"></div>
            </div>
        </div>
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