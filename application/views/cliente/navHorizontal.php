<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
        <span class="with-arrow"><span class="bg-primary"></span></span>
        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
            <div class=""><img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
            <div class="m-l-10">
                <h4 class="m-b-0"><?= $perfil->nombre ?></h4>
                <p class=" m-b-0"><?= $perfil->correo ?></p>
            </div>
        </div>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Mi Perfil</a>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> Mi Cartera</a>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Bandeja de entrada</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Ajustar Cuenta</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?= base_url()?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesión</a>
    </div>
</li>
