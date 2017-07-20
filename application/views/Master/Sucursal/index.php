<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <?php   if(empty($sucursal)){   ?>      
        <label>Aun no hay sucursales.</label>
        <a href="<?php echo base_url(); ?>Master/Sucursal/add_Sucursal" class='btn btn-success btn-xs'><i class="material-icons">note_add</i> Nueva Sucursal</a>  
        <?php   }else{        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Sucursal/add_Sucursal" rel="tooltip" data-placement="right" title="Nueva"><i class="material-icons">note_add</i></a>
                    </div>
                    <h4 class="card-title"><?php echo $title; ?></h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>ID</h5></th>
                                    <th><h5>Nombre</h5></th>
                                    <th><h5>Teléfono</h5></th>
                                    <th><h5>Calle</h5></th>
                                    <th><h5>Colonia</h5></th>
                                    <th><h5>Estado</h5></th>
                                    <th><h5>Acción</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sucursal as $sucursal_item): ?>
                                    <tr>
                                        <td><?php echo $sucursal_item['id_sucursal']; ?></td>
                                        <td><?php echo ucfirst($sucursal_item['nombre']); ?></td>
                                        <td><?php echo $sucursal_item['telefono']; ?></td>
                                        <td><?php echo $sucursal_item['calle'] . " # " . $sucursal_item['numero']; ?></td>
                                        <td><?php echo $sucursal_item['colonia']; ?></td>
                                        <td><?php echo $sucursal_item['estado']; ?></td>

                                        <td class="td-actions text-right">
                                            <a type="button" rel="tooltip" class="btn btn-success btn-simple" data-original-title="Editar" title="Editar" href="<?php echo base_url('Master/Sucursal/edit_Sucursal/'.$sucursal_item['id_sucursal']); ?>">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <!-- 
                                            <a type="button" rel="tooltip" class="btn btn-danger btn-simple" data-original-title="Eliminar" title="Eliminar" href="<?php echo base_url('Master/Sucursal/delete/'.$sucursal_item['id_sucursal']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarla?')">
                                                <i class="material-icons">close</i>
                                            </a>
                                            -->                                     
                                        </td>
                                    </tr> 
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>