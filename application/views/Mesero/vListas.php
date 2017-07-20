<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
		
		<center>
			<h3 class="text-success" style="margin-bottom: 0px;margin-top: 0px;">Ordenes de Consumo - <small>Listas</small>
			</h3>
		</center>
		<div class="row">
			<?php foreach ($oc_listas as $oc_listas_item): ?>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header" data-background-color="green" style="padding-top: 5px;padding-bottom: 5px;">
							<h5 class="card-title text-center">
							<?php echo $oc_listas_item['mesa'] . " - #OC: " . $oc_listas_item['orden']; ?> 
							</h5>
						</div>
						<div class="card-content">
							<h5 class="card-title text-center">
								<b>Comensal: <?php echo $oc_listas_item['comensal']; ?></b><br>
								Alimento: <?php echo $oc_listas_item['alimento']; ?><br>
								Bebida: <?php echo $oc_listas_item['bebida']; ?><br>
								Postre: <?php echo $oc_listas_item['postre']; ?><br>
							</h5>
							<center><a class="btn btn-info btn-round btn-xs" href="<?php echo base_url('Mesero/Inicio/entregar/'.$oc_listas_item['id_orden']); ?>">
								<i class="material-icons">check</i> Entregar
							</a></center>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>	
	</div><!-- container-fluid -->
</div><!-- content -->