<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">

		<center>
			<h4 class="text-success" style="margin-bottom: 0px;margin-top: 0px;">Orden de Consumo - 
				<?php echo $mesa['nombre'] ." <small>Ubicación:". $mesa['zona']."</small>"; ?>
			</h4>
		</center>

		<form action="<?php echo base_url("Mesero/Atender/guardarOrden10"); ?>" method="POST">

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
							<a class="btn btn-info btn-round" onClick="siguiente01();">Siguiente</a>
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
							<a class="btn btn-info btn-round" onClick="atras02();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente02();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="tres" style="display: none;">
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
											<h4 class="info-text"> Comensal 03 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa3" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal3" value="03">
											<input type="hidden" name="fecha3" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre3" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento3" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento3" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida3" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida3" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre3" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre3" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras03();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente03();">Siguiente</a>

						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="cuatro" style="display: none;">
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
											<h4 class="info-text"> Comensal 04 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa04" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal04" value="04">
											<input type="hidden" name="fecha04" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre04" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento04" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento04" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida04" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida04" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre04" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre04" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras04();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente04();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="cinco" style="display: none;">
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
											<h4 class="info-text"> Comensal 05 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa05" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal05" value="05">
											<input type="hidden" name="fecha05" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre05" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento05" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento05" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida05" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida05" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre05" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre05" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras05();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente05();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="seis" style="display: none;">
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
											<h4 class="info-text"> Comensal 06 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa06" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal06" value="06">
											<input type="hidden" name="fecha06" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre06" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento06" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento06" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida06" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida06" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre06" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre06" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras06();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente06();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="siete" style="display: none;">
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
											<h4 class="info-text"> Comensal 07 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa07" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal07" value="07">
											<input type="hidden" name="fecha07" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre07" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento07" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento07" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida07" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida07" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre07" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre07" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras07();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente07();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="ocho" style="display: none;">
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
											<h4 class="info-text"> Comensal 08 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa08" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal08" value="08">
											<input type="hidden" name="fecha08" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre08" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento08" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento08" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida08" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida08" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre08" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre08" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras08();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente08();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1" id="nueve" style="display: none;">
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
											<h4 class="info-text"> Comensal 09 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa09" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal09" value="09">
											<input type="hidden" name="fecha09" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre09" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento09" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento09" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida09" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida09" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre09" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre09" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras09();">Anterior</a>
							<a class="btn btn-info btn-round" onClick="siguiente09();">Siguiente</a>
						</div>
					</div>
				</div>
			</div>												

			<div class="col-sm-10 col-sm-offset-1" id="diez" style="display: none;">
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
											<h4 class="info-text"> Comensal 10 </h4>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group label-floating">
											<input type="hidden" name="id_mesa10" value="<?php echo $mesa['id_mesa'] ?>">
											<input type="hidden" name="no_comensal10" value="10">
											<input type="hidden" name="fecha10" value="<?php echo date("Y-m-d");?>">
											
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control valid" aria-invalid="false" name="nombre10" required>
											<span class="material-input"></span>
										</div>
									</div>

									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Alimento</label>
											<select name="id_alimento10" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_alimento10" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Bebida</label>
											<select name="id_bebida10" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_bebida10" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="form-group label-floating">
											<label class="control-label">Postre</label>
											<select name="id_postre10" class="form-control valid" aria-invalid="false">
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
											<input type="text" class="form-control valid" aria-invalid="false" name="nota_postre10" required value="Ninguna">
											<span class="material-input"></span>
										</div>
									</div>																		
								</div>
							</div>
						</div>
						<div class="card-footer text-center">
							<a class="btn btn-info btn-round" onClick="atras10();">Anterior</a>
							<button type="submit" class="btn btn-info btn-fill">Guardar</button>
						</div>
					</div>
				</div>
			</div>						

		</form>

	</div><!-- container-fluid -->
</div><!-- content -->


<script type="text/javascript">
	function siguiente01(){
		document.getElementById('dos').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
	}

	function siguiente02(){
		document.getElementById('tres').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('cuatro').style.display='none';
	}

	function siguiente03(){
		document.getElementById('cuatro').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
	}

	function siguiente04(){
		document.getElementById('cinco').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
	}

	function siguiente05(){
		document.getElementById('seis').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
	}

	function siguiente06(){
		document.getElementById('siete').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
	}

	function siguiente07(){
		document.getElementById('ocho').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
		document.getElementById('siete').style.display='none';
	}

	function siguiente08(){
		document.getElementById('nueve').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
		document.getElementById('siete').style.display='none';
		document.getElementById('ocho').style.display='none';
	}

	function siguiente09(){
		document.getElementById('diez').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
		document.getElementById('siete').style.display='none';
		document.getElementById('ocho').style.display='none';
		document.getElementById('nueve').style.display='none';
	}

	function atras02(){
		document.getElementById('uno').style.display='block';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
	}

	function atras03(){
		document.getElementById('dos').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
	}

	function atras04(){
		document.getElementById('tres').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
	}

	function atras05(){
		document.getElementById('cuatro').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
	}

	function atras06(){
		document.getElementById('cinco').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('seis').style.display='none';
	}

	function atras07(){
		document.getElementById('seis').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('siete').style.display='none';
	}

	function atras08(){
		document.getElementById('siete').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
		document.getElementById('ocho').style.display='none';
	}

	function atras09(){
		document.getElementById('ocho').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
		document.getElementById('siete').style.display='none';
		document.getElementById('nueve').style.display='none';
	}

	function atras10(){
		document.getElementById('nueve').style.display='block';
		document.getElementById('uno').style.display='none';
		document.getElementById('dos').style.display='none';
		document.getElementById('tres').style.display='none';
		document.getElementById('cuatro').style.display='none';
		document.getElementById('cinco').style.display='none';
		document.getElementById('seis').style.display='none';
		document.getElementById('siete').style.display='none';
		document.getElementById('ocho').style.display='none';
		document.getElementById('diez').style.display='none';
	}	
</script>