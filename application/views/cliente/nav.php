<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <!-- User Profile-->
        <li>
            <!-- User Profile-->
            <div class="user-profile d-flex no-block dropdown m-t-20">
                <div class="user-pic"><img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                <div class="user-content hide-menu m-l-10">
                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h5 class="m-b-0 user-name font-medium"><?= $perfil->nombre ?> <i class="fa fa-angle-down"></i></h5>
                        <span class="op-5 user-email"><?= $perfil->correo ?></span>
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
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>PanelCliente/Embarques" aria-expanded="false"><i class="mdi mdi-truck"></i><span class="hide-menu">Embarques</span></a></li>
    </ul>
</nav>
