<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
	<div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
		<div class="row">

			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="card card-product" data-count="5">
					<div class="card-image" data-header-animation="true">
						<a href="#pablo">
						<center><img class="img" src="<?php echo base_url('assets/fotos/bebidas/') . $bebida['fotografia']; ?>" style="width: 100%; height: 300px;"></center>
						</a>
					</div>
					<div class="card-content">
						<div class="card-actions">
							<button type="button" class="btn btn-danger btn-simple fix-broken-card">
								<i class="material-icons">build</i> Fix Header!
							</button>
							<a type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Regresar" data-original-title="Regresar" href="<?php echo base_url('Master/Bebidas'); ?>">
								<i class="material-icons">keyboard_backspace</i>
							</a>
							<a type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Editar" data-original-title="Editar" href="<?php echo base_url('Master/Bebidas/edit_Bebida/'.$bebida['id_bebida']); ?>">
								<i class="material-icons">edit</i>
							</a>
							<a type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Eliminar" data-original-title="Eliminar" href="<?php echo base_url('Master/Bebidas/delete/'.$bebida['id_bebida']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarlo?')">
								<i class="material-icons">close</i>
							</a>
						</div>
						<h4 class="card-title">
							<a href="#pablo"><?php echo $bebida['nombre']; ?></a>
						</h4>
						<div class="card-description">
							<?php echo $bebida['descripcion']; ?>
						</div>
					</div>
					<div class="card-footer">
						<div class="price">
							<h4><b>$ <?php echo $bebida['precio']; ?></b></h4>
						</div>
						<div class="stats pull-right">
							<p class="category"><i class="material-icons">info</i> Precio sujeto a cambios.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>