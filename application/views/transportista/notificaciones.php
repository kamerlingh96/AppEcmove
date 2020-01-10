<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>

    </a>
    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
        <span class="with-arrow"><span class="bg-primary"></span></span>
        <ul class="list-style-none">
            <li>
                <div class="drop-title bg-primary text-white">
                  <?php $numeroDeEmbarquesPendientes = 0;?>
                  <?php foreach ($listaDeEmbarques->result() as $embarque): ?>
                    <?php if ($embarque->estadoDeEmbarque == "Pendiente"): ?>
                      <?php $numeroDeEmbarquesPendientes++; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                    <h4 class="m-b-0 m-t-5"><?php echo $numeroDeEmbarquesPendientes; ?> Nuevos</h4>
                    <span class="font-light">Notificaciones</span>
                </div>
            </li>
            <li>
                <div class="message-center notifications">
                    <!-- Message -->
                    <?php foreach ($listaDeEmbarques->result() as $embarque): ?>
                      <?php if ($embarque->estadoDeEmbarque == "Pendiente"): ?>
                        <?php foreach ($listaDeInicioFin->result() as $inicioFin): ?>
                          <?php if ($embarque->id == $inicioFin->id_embarque): ?>
                            <a href="javascript:void(0)" class="message-item">
                              <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                              <span class="mail-contnet">
                                <h5 class="message-title">Origen: </b><?=$inicioFin->estadoInicio?>, <?=$inicioFin->municipioInicio?></h5> <span class="mail-desc"><b>Destino: </b><?=$inicioFin->estadoFin?>, <?=$inicioFin->municipioFin?></span> <span class="time">9:30 AM</span> </span>
                              </a>

                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                    <!-- Message
                    <a href="javascript:void(0)" class="message-item">
                        <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                        <span class="mail-contnet">
                            <h5 class="message-title">Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </span>
                    </a>
                     Message
                    <a href="javascript:void(0)" class="message-item">
                        <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                        <span class="mail-contnet">
                            <h5 class="message-title">Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </span>
                    </a>
                     Message
                    <a href="javascript:void(0)" class="message-item">
                        <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                        <span class="mail-contnet">
                            <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                    </a>-->
                </div>
            </li>
            <li>
                <a class="nav-link text-center m-b-5" href="javascript:void(0);"> <strong>Ver todas las notificaciones</strong> <i class="fa fa-angle-right"></i> </a>
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
                    <h4 class="m-b-0 m-t-5">5 New</h4>
                    <span class="font-light">Messages</span>
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
                <a class="nav-link text-center link" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
            </li>
        </ul>
    </div>
</li>
