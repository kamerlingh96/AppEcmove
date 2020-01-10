<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <!-- User Profile-->
        <li>
            <!-- User Profile-->
            <div class="user-profile d-flex no-block dropdown m-t-20">
                <div class="user-pic"><img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                <div class="user-content hide-menu m-l-10">
                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5 class="m-b-0 user-name font-medium"><?=$usuario->user?> <i class="fa fa-angle-down"></i></h5>
                        <span class="op-5 user-email"><?=$usuario->email?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Mi Perfil</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> Mi Cartera</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Bandeja de entrada</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Ajustar Cuenta</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url()?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesión</a>
                    </div>
                </div>
            </div>
            <!-- End User Profile-->
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>" aria-expanded="false"><i class="ti-home"></i><span class="hide-menu">Panel</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>PanelEcmove/Embarques" aria-expanded="false"><i class="mdi mdi-truck"></i><span class="hide-menu">Embarques</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>SolicitudEcmove" aria-expanded="false"><i class="mdi mdi-bell"></i><span class="hide-menu">Solicitud</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>PanelEcmove/Clientes" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Clientes</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>PanelEcmove/Transportistas" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Transportistas</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>Galeria" aria-expanded="false"><i class="mdi mdi-camera-iris"></i><span class="hide-menu">Galería</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-notification-clear-all"></i><span class="hide-menu">Definiciones de Base</span></a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item"><a href="<?= base_url()?>Servicios" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Servicios</span></a></li>
                <li class="sidebar-item"><a href="<?= base_url()?>Vehiculos" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Vehiculo</span></a></li>
            </ul>
        </li>
    </ul>
</nav>
