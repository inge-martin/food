<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
		
		<center>
			<h3 class="text-success" style="margin-bottom: 0px;margin-top: 0px;">Ordenes de Consumo - <small>Pendientes</small>
			</h3>
		</center>

		<div class="row">

			<div class="col-md-6">
				<h3 class="text-center" style="margin-bottom: 0px;margin-top: 0px;">
					<small class="text-info">Alimentos</small>
				</h3>
				<?php foreach ($alimentos_p as $alimentos_p_item): ?>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header" data-background-color="red" style="padding-top: 5px;padding-bottom: 5px;">
								<h5 class="card-title text-center">
									<?php echo $alimentos_p_item['mesa'] . " <br>#OC: " . $alimentos_p_item['oc']; ?>
								</h5>
							</div>
							<div class="card-content">
								<h5 class="card-title text-center">
									<b>Comensal: <?php echo $alimentos_p_item['no_comensal']; ?></b>
								</h5>
								<h5 class="card-title text-center" style="height: 50px">
									<b><?php echo $alimentos_p_item['alimento']; ?></b><br>
								</h5>
								<h5 class="card-title text-center" style="height: 50px">
									<p style="font-size: 14px;"><?php echo $alimentos_p_item['detalle_a']; ?></p>
								</h5>
								<center>
									<a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Cocinero/Inicio/alimento_listo/'.$alimentos_p_item['id_orden']); ?>">
										<i class="material-icons">check</i> Listo
									</a>
								</center>
							</div>
						</div>
					</div>
				<?php endforeach; ?>				
			</div>

			<div class="col-md-6">
				<h3 class="text-center" style="margin-bottom: 0px;margin-top: 0px;">
					<small class="text-info">Postres</small>
				</h3>
				<?php foreach ($postres_p as $postres_p_item): ?>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header" data-background-color="red" style="padding-top: 5px;padding-bottom: 5px;">
								<h5 class="card-title text-center">
									<?php echo $postres_p_item['mesa'] . " <br>#OC: " . $postres_p_item['oc']; ?>
								</h5>
							</div>
							<div class="card-content">
								<h5 class="card-title text-center" style="height: 50px">
									<b><?php echo $postres_p_item['postre']; ?></b><br>
								</h5>
								<h5 class="card-title text-center" style="height: 50px">
									<p style="font-size: 14px;"><?php echo $postres_p_item['detalle_p']; ?></p>
								</h5>
								<center>
									<a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Cocinero/Inicio/postre_listo/'.$postres_p_item['id_orden']); ?>">
										<i class="material-icons">check</i> Listo
									</a>
								</center>
							</div>
						</div>
					</div>
				<?php endforeach; ?>				
			</div>			

		</div>	
	</div><!-- container-fluid -->
</div><!-- content -->