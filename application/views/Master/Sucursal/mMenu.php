<div class="sidebar" data-active-color="blue" data-background-color="black" data-image="<?php echo base_url(); ?>assets/img/sidebar.jpg"><!-- data-color="purple | blue | green | orange | red -->

  <div class="logo">
    <a href="<?php echo base_url(); ?>Master/Inicio" class="simple-text">
      Food and Drink's
    </a>
  </div><!-- Logo -->

  <div class="sidebar-wrapper">

    <div class="user">
      <div class="photo">
        <img src="<?php echo base_url(); ?>assets/fotos/master/<?php echo $this->session->userdata('s_fotografia'); ?>">
      </div>
      <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          <?php echo strtoupper($this->session->userdata('s_nombre') . " " .  $this->session->userdata('s_paterno') . " " .  $this->session->userdata('s_materno')); ?>
          <b class="caret"></b>
        </a>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li>
              <a href="<?php echo base_url(); ?>Master/Perfil">
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
      <li class="active">
        <a href="<?php echo base_url(); ?>Master/Sucursal">
          <i class="material-icons md-18 md-18">account_balance</i>
          <p> Sucursales</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Master/Cajas">
          <i class="material-icons md-18 md-18">monetization_on</i>
          <p> Cajas</p>
        </a>
      </li> 
      <li>
        <a href="<?php echo base_url(); ?>Master/Administrador">
          <i class="material-icons md-18">supervisor_account</i>
          <p> Administradores</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Master/Alimentos">
          <i class="material-icons md-18">local_dining</i>
          <p> Alimentos</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Master/Bebidas">
          <i class="material-icons md-18">local_bar</i>
          <p> Bebidas</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Master/Postres">
          <i class="material-icons md-18">restaurant</i>
          <p> Postres</p>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>Master/Asignacion">
          <i class="material-icons md-18">shuffle</i>
          <p> Asignacion</p>
        </a>
      </li>        
    </ul>
  </div><!-- sidebar-wrapper -->
  <div class="sidebar-background" style="background-image: url(<?php echo base_url(); ?>assets/img/sidebar.jpg);"></div>
</div><!-- sidebar -->