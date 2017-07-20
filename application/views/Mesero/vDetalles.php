<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">

		<center>
			<h3 class="text-success" style="margin-bottom: 0px;margin-top: 0px;">Detalle de Orden de Consumo</h3>
		</center>

		<div class="row">
			<div class="col-md-12">
				<div class="card">

					<div class="card-header" data-background-color="blue">
						<h4 class="card-title">
							<div class="col-md-4">#OC: <?php echo $detalles[0]['orden']; ?></div>
							<div class="col-md-4"><?php echo $detalles[0]['mesa']; ?></div>
							<div class="col-md-4"><?php echo date('d-m-Y', strtotime($detalles[0]['fecha'])); ?></div>
						</h4>
						<br>
					</div>
					<div class="card-content table-responsive table-full-width">
						<table class="table table-hover">
							<thead>
								<tr class="text-success">
									<th><h5># Comensal</h5></th>
									<th><h5>Nombre</h5></th>
									<th><h5>Alimento</h5></th>
									<th><h5>Bebida</h5></th>
									<th><h5>Postre</h5></th>
									<th><h5>Estado</h5></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($detalles as $detalles_item): ?>
									<tr>
										<td><?php echo $detalles_item['no_comensal']; ?></td>
										<td><?php echo $detalles_item['comensal']; ?></td>
										<td><?php echo $detalles_item['alimento']; ?></td>
										<td><?php echo $detalles_item['bebida']; ?></td>
										<td><?php echo $detalles_item['postre']; ?></td>
										<td><?php echo $detalles_item['estado']; ?></td>
									</tr> 
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<?php 
				if($estado === "Entregado"){
					?>
					<center>
						<a class="btn btn-info btn-round" onClick="return confirm('¿Estas seguro que quieres finalizar la orden?')" href="<?php echo base_url('Mesero/Inicio/finalizarOC/'.$detalles[0]['orden'].'/'.$detalles[0]['id_mesa']); ?>">Finalizar Orden</a>
					</center>
					<?php 
				}else{
					echo " ";
				}
				?>
			</div>
		</div>

	</div>
</div>