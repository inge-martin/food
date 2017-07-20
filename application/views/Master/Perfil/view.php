<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<div class="card card-profile">
					<div class="card-avatar">
						<img class="img" src="<?php echo base_url('assets/fotos/master/') . $admin['fotografia']; ?>" />
					</div>
					<div class="content">
						<h3 class="category text-success">
							<?php echo ucwords($admin['nombre']. " " .$admin['paterno'] . " " . $admin['materno'] ); ?><br>
							<small>"Administrador Master"</small>
						</h3>
						<p class="card-content">
							<label class="text-warning">Usuario: </label>&nbsp;
							<label class="text-gray"><?php echo $admin['usuario']; ?></label><br>
							<label class="text-warning">Sexo: </label>
							<label class="text-gray"><?php echo ucwords($admin['sexo']); ?></label><br>
							<label class="text-warning">F. Nacimiento: </label>
							<label class="text-gray"><?php echo date("d-m-Y", strtotime($admin['nacimiento'])); ?></label><br>
							<label class="text-warning">Email: </label>
							<label class="text-gray"><?php echo $admin['email']; ?></label><br>
							<label class="text-warning">Teléfono: </label>
							<label class="text-gray"><?php echo $admin['telefono']; ?></label><br>
						</p>
					</div>
					<!-- <a class="btn btn-info btn-round" href="<?php echo base_url('Master/Administrador'); ?>">Regresar</a> -->
				</div>
			</div>          
		</div>
	</div>
</div>