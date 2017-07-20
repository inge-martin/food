<?php 
$ruta = base_url().'Mesero/Inicio';
header( "refresh:4; url=$ruta" );
?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<div class="alert alert-info alert-with-icon" data-notify="container">
					<a type="button" aria-hidden="true" class="close" href="<?php echo base_url().'Mesero/Inicio'; ?>">×</a>
					<i data-notify="icon" class="material-icons">add_alert</i>
					<span data-notify="message">
						<h3>¡Felicidades!</h3>
						Orden finalizada con éxito, <br>Pasa a caja a realizar el pago.
					</span>
				</div>
			</div>
		</div>
	</div>
</div>