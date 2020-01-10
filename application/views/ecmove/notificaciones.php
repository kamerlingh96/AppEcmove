<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
      <?php
      $contSolicitudes = 0;
      foreach ($solicitudesEmpresas->result() as $fila) {
        if ($fila->estado == "Solicitud") {
          $contSolicitudes++;
        }elseif ($fila->estado == "Revision") {
          $contSolicitudes++;
        }
      }
      if ($contSolicitudes!=0) {
        echo $contSolicitudes;
      }else {
        echo "";
      }
      ?>

    </a>
    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
        <span class="with-arrow"><span class="bg-primary"></span></span>
        <ul class="list-style-none">
            <li>
                <div class="drop-title bg-primary text-white">
                    <h4 class="m-b-0 m-t-5"><?php
                    if ($contSolicitudes!=0) {
                      echo $contSolicitudes. " Nueva";
                    }else {
                      echo "";
                    }
                    ?></h4>
                    <span class="font-light">Notificaciones</span>
                </div>
            </li>
            <li>
                <div class="message-center notifications">
                    <?php
                    foreach ($solicitudesEmpresas->result() as $fila) {
                      if ($fila->estado == "Solicitud") {
                        ?>
                        <a href="javascript:void(0)" class="message-item">
                            <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                            <span class="mail-contnet">
                                <h5 class="message-title"><?=$fila->nombre_empresa?></h5> <span class="mail-desc"><?=$fila->estado?></span> <span class="time"><?=$fila->fecha_registro?></span> </span>
                        </a>
                        <?php
                      }elseif ($fila->estado == "Revision") {
                        ?>
                        <a href="javascript:void(0)" class="message-item">
                            <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                            <span class="mail-contnet">
                                <h5 class="message-title"><?=$fila->nombre_empresa?></h5> <span class="mail-desc"><?=$fila->estado?></span> <span class="time"><?=$fila->fecha_registro?></span> </span>
                        </a>
                        <?php
                      }
                    }
                    ?>
                    <!-- Message -->

                </div>
            </li>
            <li>
                <a class="nav-link text-center m-b-5" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
            </li>
        </ul>
    </div>
</li>
<!-- ============================================================== -->
<!-- End Comment -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Messages -->
<!-- ============================================================== -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>

    </a>
    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
        <span class="with-arrow"><span class="bg-danger"></span></span>
        <ul class="list-style-none">
            <li>
                <div class="drop-title text-white bg-danger">
                    <h4 class="m-b-0 m-t-5">5 Nuevos</h4>
                    <span class="font-light">Mensaje</span>
                </div>
            </li>
            <li>
                <div class="message-center message-body">
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                        <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                        <span class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </span>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                        <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                        <span class="mail-contnet">
                            <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </span>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                        <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                        <span class="mail-contnet">
                            <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </span>
                    </a>
                    <!-- Message -->
                    <a href="javascript:void(0)" class="message-item">
                        <span class="user-img"> <img src="<?= base_url()?>estilos/assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                        <span class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                    </a>
                </div>
            </li>
            <li>
                <a class="nav-link text-center link" href="javascript:void(0);"> <b>Ver todos los correos electrónicos</b> <i class="fa fa-angle-right"></i> </a>
            </li>
        </ul>
    </div>
</li>
