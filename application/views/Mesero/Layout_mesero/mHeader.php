<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/f&d.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/f&d.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Food and Drink's</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Bootstrap core CSS     -->

  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

  <!--  Material Dashboard CSS    -->
  <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icon-font/material-icons.css" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" />
</head>

<body>
  <?php 
  $sesionU = $this->session->userdata('s_id_usuario');
  if(empty($sesionU)){
    redirect(base_url()."Login");
  }
  ?>
  <div class="wrapper">