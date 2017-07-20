<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/f&d.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/f&d.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Food and Drink's</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" /> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/icon-font/material-icons.css" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="signup-page">
	<div class="wrapper">
		<div class="header header-filter" style="background-image: url('<?php echo base_url(); ?>assets/img/city.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form action="<?php echo base_url(); ?>Login/validar" method="post">
								<center><div class="header text-center" style="background-color: #ee3e22">
									<!-- <a href="<?php echo base_url(); ?>"><h4><b>Food and Drink's</b></h4></a> -->
									<div class="social-line">
										<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/f&d.png" style="width: 120px; height: 120px;"></a>
									</div>
								</div></center>
								<p class="text-divider">Logueate para iniciar sesión</p>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" class="form-control" name="txtUsuario" placeholder="Ingrese su Usuario" required="required" autofocus>
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" class="form-control" name="txtContrasena" placeholder="Ingrese su Contrasena" required="required">
									</div>
								</div>
								<div class="footer text-center">
									<button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Iniciar Sesión</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url(); ?>assets/js/material-kit.js" type="text/javascript"></script>

<?php 
if($mensaje == ' '){
echo "<div></div>";
}else{
?>
<script>
  $.notify("<?php echo $mensaje; ?>");
</script>
<?php 
}
?>

</html>
