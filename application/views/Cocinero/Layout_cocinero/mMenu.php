<!-- <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg"> -->
<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo base_url(); ?>assets/img/sidebar.jpg"><!-- data-color="purple | blue | green | orange | red -->

  <div class="logo">
    <a href="<?php echo base_url(); ?>Cocinero/Inicio" class="simple-text">
      Food and Drink's
    </a>
  </div><!-- Logo -->

  <div class="sidebar-wrapper">

    <div class="user">
      <div class="photo">
        <img src="<?php echo base_url(); ?>assets/fotos/cocinero/<?php echo $this->session->userdata('s_fotografia'); ?>">
      </div>
      <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          <?php echo strtoupper($this->session->userdata('s_nombre') . " " .  $this->session->userdata('s_paterno') . " " .  $this->session->userdata('s_materno')); ?>
          <b class="caret"></b>
        </a>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li>
              <a href="<?php echo base_url(); ?>Cocinero/Perfil">
                <i class="material-icons md-18">account_circle</i>
                <p>Mi Perfil</p>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>Login/logout">
                <i class="material-icons md-18">power_settings_new</i>
                <p>Cerrar Sesión</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <ul class="nav">
      <li>
        <a href="<?php echo base_url(); ?>Cocinero/Inicio">
          <i class="material-icons md-18 md-18">speaker_notes</i>
          <p> Ordenes de Consumo</p>
        </a>
      </li>
<!--       <li>
        <a href="<?php echo base_url(); ?>Cocinero/Menu">
          <i class="material-icons md-18">room_service</i>
          <p> Ordenes Listas</p>
        </a>
      </li> -->
<!--       <li>
        <a href="<?php echo base_url(); ?>Cocinero/Cocinero">
        <i class="material-icons md-18">room_service</i>
          <p> Cocineros</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Cocinero/Cantinero">
          <i class="material-icons md-18">local_bar</i>
          <p> Cantineros</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Cocinero/Cocinero">
          <i class="material-icons md-18">restaurant</i>
          <p> Cocineros</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Cocinero/Cajero">
          <i class="material-icons md-18">store</i>
          <p> Cajeros</p>
        </a>
      </li>    -->   
    </ul>
  </div><!-- sidebar-wrapper -->
  <div class="sidebar-background" style="background-image: url(<?php echo base_url(); ?>assets/img/sidebar.jpg);"></div>
</div><!-- sidebar -->
