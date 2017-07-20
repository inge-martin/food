<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
		
		<center><label class="text-success"><h3>*Mesas Disponibles - </h3></label>  <label class="text-danger"><h3>- Mesas Ocupadas*</h3></label></center>

		<div class="row">
			<?php foreach ($disponibles as $disponibles_item): ?>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="card">
						<div class="card-header" data-background-color="green" style="padding-top: 5px;padding-bottom: 5px;">
							<h5 class="card-title text-center"><?php echo $disponibles_item['nombre']; ?></h5>
						</div>
						<div class="card-content">
							<h5 class="card-title text-center">
								<b><?php echo $disponibles_item['comensales']; ?></b> Comensal	<br>
								<small class="text-center"><?php echo $disponibles_item['zona']; ?></small>
							</h5>
							<center>
								<a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Mesero/Atender/create/'.$disponibles_item['id_mesa'].'/'.$disponibles_item['comensales']); ?>">
									<i class="material-icons">check</i> Atender
								</a>
							</center>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<?php foreach ($ocupadas as $ocupadas_item): ?>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="card">
						<div class="card-header" data-background-color="red" style="padding-top: 5px;padding-bottom: 5px;">
							<h5 class="card-title text-center"><?php echo $ocupadas_item['nombre']; ?></h5>
						</div>
						<div class="card-content">
							<h5 class="card-title text-center">
								<b><?php echo $ocupadas_item['comensales']; ?></b> Comensal	<br>
								<small class="text-center"><?php echo $ocupadas_item['zona']; ?></small>
							</h5>
							<center>
							<a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Mesero/Inicio/detalles/'.$ocupadas_item['id_mesa']); ?>">
									<i class="material-icons">remove_red_eye</i> Ver
								</a>
							</center>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>	
	</div><!-- container-fluid -->
</div><!-- content -->