<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;" >
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
		
		<center>
			<h3 class="text-success" style="margin-bottom: 0px;margin-top: 0px;">Ordenes de Consumo - <small>Pendientes de pago</small>
			</h3>
		</center>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header" data-background-color="red" style="padding-top: 5px;padding-bottom: 30px;">
							<div class="col-md-6">
								<h5 class="card-title text-center">
									<?php echo $detalles[0]['mesa']; ?>
								</h5>
							</div>
							<div class="col-md-6">
								<h5 class="card-title text-center">
									#OC:<?php echo $detalles[0]['oc']; ?>
								</h5>
							</div>
						</div>
						<div class="card-content">
							<div class="col-md-12">
								<?php foreach ($detalles as $detalles_item): ?>
									<div class="col-md-9">
										<p class="card-title text-left">
											<?php echo $detalles_item['alimento']; ?>
										</p>
										<p class="card-title text-left">
											<?php echo $detalles_item['bebida']; ?>
										</p>
										<p class="card-title text-left">
											<?php echo $detalles_item['postre']; ?>
										</p>								
										<hr style="margin-top: 5px; margin-bottom: 5px;">
									</div>
									<div class="col-md-3">
										<p class="card-title text-left">
											$ <?php echo $detalles_item['a_precio']; ?>
										</p>
										<p class="card-title text-left">
											$ <?php echo $detalles_item['b_precio']; ?>
										</p>									
										<p class="card-title text-left">
											$ <?php echo $detalles_item['p_precio']; ?>
										</p>
										<hr style="margin-top: 5px; margin-bottom: 5px;">
									</div>
								<?php endforeach; ?>				
							</div>
							<div class="col-md-9">
								<h5 class="card-title text-right">
									<p>Total: </p>
								</h5>
							</div>
							<div class="col-md-3">
								<h5 class="card-title text-left">
									<p>$ <?php echo $detalles_item['total']; ?></p>
								</h5>
							</div>
							<center>
								<a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Cajero/Inicio/pagar/'.$detalles_item['id_pago'].'/'.$detalles_item['id_mesa']); ?>">
									<i class="material-icons">check</i> Pagar
								</a>
							</center>
						</div>
					</div>
				</div>
			</div>	

		</div>	
	</div><!-- container-fluid -->
</div><!-- content -->