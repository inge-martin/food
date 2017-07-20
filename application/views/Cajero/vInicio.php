<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
		
		<center>
			<h3 class="text-success" style="margin-bottom: 0px;margin-top: 0px;">Ordenes de Consumo - <small>Pendientes de pago</small>
			</h3>
		</center>

		<div class="row">
			<div class="col-md-12">
				<?php foreach ($pagos as $pagos_item): ?>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header" data-background-color="red" style="padding-top: 5px;padding-bottom: 30px;">
								<div class="col-md-6">
									<h5 class="card-title text-center">
										<?php echo $pagos_item['mesa']; ?>
									</h5>
								</div>
								<div class="col-md-6">
									<h5 class="card-title text-center">
										#OC:<?php echo $pagos_item['oc']; ?>
									</h5>
								</div>
							</div>
							<div class="card-content">

								<h5 class="card-title text-center">
									Total: $<?php echo $pagos_item['total']; ?>
								</h5>
								<center>
									<a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Cajero/Inicio/detalles/'.$pagos_item['id_pago']); ?>">
										<i class="material-icons">check</i> Ver Detalles
									</a>
									<a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Cajero/Inicio/pagar/'.$pagos_item['id_pago'].'/'.$pagos_item['id_mesa']); ?>">
										<i class="material-icons">check</i> Pagar
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