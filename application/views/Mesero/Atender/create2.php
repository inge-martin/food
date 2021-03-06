<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">

		<center>
			<h4 class="text-success" style="margin-bottom: 0px;margin-top: 0px;">Orden de Consumo - 
				<?php echo $mesa['nombre'] ." <small>Ubicación:". $mesa['zona']."</small>"; ?>
			</h4>
		</center>

		<form action="<?php echo base_url("Mesero/Atender/guardarOrden2"); ?>" method="POST">

			<div class="col-sm-10 col-sm-offset-1" id="uno">
				<div class="wizard-container">
					<div class="card wizard-card" data-color="blue" id="wizardProfile">
						<div class="wizard-header">
							<h3 class="wizard-title text-center" style="margin-bottom: 0px;margin-top: 0px;">¿Que deseas ordenar?</h3>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="comensal01">
								<div class="row">
									<div class="col-sm-4 col-sm-offset-2">
										<div class="form-group label-floating">
											<h4 class="info-text"> Comensal 01 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa1" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal1" value="01">
											<input type="hidden" name="fecha1" value="<?php echo date("Y-m-d");?>">

											<label class="control-label">Nombre *</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre1" autofocus="true" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento1" class="form-control valid" aria-invalid="false">
												<?php if (count($alimentos)) {
													foreach ($alimentos as $list) {
														echo "<option value='". $list['id_alimento'] . "'>" . ucwords($list['nombre']. ". -  Precio: $" . $list['precio']) . "</option>";
													}
												}
												?>
												<!-- <option value="0">Ningún Alimento</option> -->
											</select>
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<label class="control-label">Observaciones del alimento:</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento1" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida1" class="form-control valid" aria-invalid="false">
												<?php if (count($bebidas)) {
													foreach ($bebidas as $list) {
														echo "<option value='". $list['id_bebida'] . "'>" . ucwords($list['nombre']. ". -  Precio: $" . $list['precio']) . "</option>";
													}
												}
												?>
												<!-- <option value="0">Ninguna Bebida</option> -->
											</select>
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<label class="control-label">Observaciones de la bebida:</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida1" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre1" class="form-control valid" aria-invalid="false">
												<?php if (count($postres)) {
													foreach ($postres as $list) {
														echo "<option value='". $list['id_postre'] . "'>" . ucwords($list['nombre']. ". -  Precio: $" . $list['precio']) . "</option>";
													}
												}
												?>
												<!-- <option value="0">Ningún Postre</option> -->
											</select>
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<label class="control-label">Observaciones del postre:</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre1" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="siguiente();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="dos" style="display: none;">
				<div class="wizard-container">
					<div class="card wizard-card" data-color="blue" id="wizardProfile">
						<div class="wizard-header">
							<h3 class="wizard-title text-center" style="margin-bottom: 0px;margin-top: 0px;">¿Que deseas ordenar?</h3>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="address">
								<div class="row">
									<div class="col-sm-4 col-sm-offset-2">
										<div class="form-group label-floating">
											<h4 class="info-text"> Comensal 02 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa2" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal2" value="02">
											<input type="hidden" name="fecha2" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre2" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento2" class="form-control valid" aria-invalid="false">
												<?php if (count($alimentos)) {
													foreach ($alimentos as $list) {
														echo "<option value='". $list['id_alimento'] . "'>" . ucwords($list['nombre']. ". -  Precio: $" . $list['precio']) . "</option>";
													}
												}
												?>
												<!-- <option value="0">Ningún Alimento</option> -->
											</select>
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<label class="control-label">Observaciones del alimento:</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento2" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida2" class="form-control valid" aria-invalid="false">
												<?php if (count($bebidas)) {
													foreach ($bebidas as $list) {
														echo "<option value='". $list['id_bebida'] . "'>" . ucwords($list['nombre']. ". -  Precio: $" . $list['precio']) . "</option>";
													}
												}
												?>
												<!-- <option value="0">Ninguna Bebida</option> -->
											</select>
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<label class="control-label">Observaciones de la bebida:</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida2" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre2" class="form-control valid" aria-invalid="false">
												<?php if (count($postres)) {
													foreach ($postres as $list) {
														echo "<option value='". $list['id_postre'] . "'>" . ucwords($list['nombre']. ". -  Precio: $" . $list['precio']) . "</option>";
													}
												}
												?>
												<!-- <option value="0">Ningún Postre</option> -->
											</select>
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<label class="control-label">Observaciones del postre:</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre2" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras();">Anterior</a>
							<button type="submit" class="btn btn-info btn-fill">Guardar</button>
						</div>
					</div>
				</div>
			</div>

		</form>

	</div><!-- container-fluid -->
</div><!-- content -->


<script type="text/javascript">
	function siguiente(){
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='block';
	}
	function atras(){
		document.getElementById('uno').style.display='block';
		document.getElementById('dos').style.display='none';
	}
</script>