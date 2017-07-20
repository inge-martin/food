<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <?php     if(empty($asignacion)){    ?>      
        <h3>Aun no hay asignaciones.</h3>
        <a href="<?php echo base_url(); ?>Master/Asignacion/add_Asignacion" class='btn btn-success btn-xs'><i class="material-icons">shuffle</i> Nueva Asignación</a>  
        <?php   }else{        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Asignacion/add_Asignacion" rel="tooltip" data-placement="right" title="Nueva"><i class="material-icons">shuffle</i></a>
                    </div>
                    <h4 class="card-title"><?php echo $title1; ?></h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>Nombre de la Sucursal</h5></th>
                                    <th><h5>Nombre del Usuario</h5></th>
                                    <th><h5>Rol</h5></th>
                                    <th><h5>Acción</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($asignacion as $asignacion_item): ?>
                                    <tr>
                                        <td><?php echo $asignacion_item['sucursal']; ?></td>
                                        <td class="td-name">
                                            <?php echo $asignacion_item['nombre']; ?> 
                                            <?php echo $asignacion_item['paterno']; ?> 
                                            <?php echo $asignacion_item['materno']; ?>
                                        </td>
                                        <td><?php echo ucwords($asignacion_item['rol']); ?></td>
                                        <td>
                                            <a type="button" rel="tooltip" class="btn btn-danger btn-simple" data-original-title="Eliminar" title="Eliminar" href="<?php echo base_url('Master/Asignacion/deleteAUS/'.$asignacion_item['id_asignacion'].'/'.$asignacion_item['id_sucursal'].'/'.$asignacion_item['id_usuario']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarla?')">
                                                <i class="material-icons">close</i>
                                            </a> 
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

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Sucursal/add_Sucursal" rel="tooltip" data-placement="right" title="Nueva Sucursal"><i class="material-icons">note_add</i></a>
                    </div>
                    <h4 class="card-title">Sucursales pendientes de asignación</h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>Nombre de la Sucursal</h5></th>
                                    <th><h5>Teléfono</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sucursal as $sucursal_item): ?>
                                    <tr>
                                        <td><?php echo $sucursal_item['nombre']; ?></td>
                                        <td><?php echo $sucursal_item['telefono']; ?></td>
                                    </tr> 
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Administrador/add_Administradores" rel="tooltip" data-placement="right" title="Nuevo Administrador"><i class="material-icons">person_add</i></a>
                    </div>
                    <h4 class="card-title">Administradores pendientes de asignación</h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>Nombre</h5></th>
                                    <th><h5>Paterno</h5></th>
                                    <th><h5>Materno</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($admin as $admin_item): ?>
                                    <tr>
                                        <td class="td-name"><?php echo $admin_item['nombre']; ?></td>
                                        <td><?php echo $admin_item['paterno']; ?></td>
                                        <td><?php echo $admin_item['materno']; ?></td>
                                    </tr> 
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Asignacion de cajas -->


        <?php     if(empty($asignacion)){    ?>      
        <h3>Aun no hay asignaciones.</h3>
        <a href="<?php echo base_url(); ?>Master/Asignacion/add_Asignacion1" class='btn btn-success btn-xs'><i class="material-icons">shuffle</i> Nueva Asignación</a>  
        <?php   }else{        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Asignacion/add_Asignacion1" rel="tooltip" data-placement="right" title="Nueva"><i class="material-icons">shuffle</i></a>
                    </div>
                    <h4 class="card-title"><?php echo $title2; ?></h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>Nombre de la Sucursal</h5></th>
                                    <th><h5>Nombre de la Caja</h5></th>
                                    <th><h5>Acción</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($asignacion_c as $asignacion_c_item): ?>
                                    <tr>
                                        <td><?php echo $asignacion_c_item['sucursal']; ?></td>
                                        <td><?php echo ucwords($asignacion_c_item['caja']); ?></td>
                                        <td>
                                            <a type="button" rel="tooltip" class="btn btn-danger btn-simple" data-original-title="Eliminar" title="Eliminar" href="<?php echo base_url('Master/Asignacion/deleteASC/'.$asignacion_c_item['id_asignacion'].'/'.$asignacion_c_item['id_sucursal'].'/'.$asignacion_c_item['id_caja']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarla?')">
                                                <i class="material-icons">close</i>
                                            </a> 
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

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Sucursal/add_Sucursal" rel="tooltip" data-placement="right" title="Nueva Sucursal"><i class="material-icons">note_add</i></a>
                    </div>
                    <h4 class="card-title">Sucursales pendientes de asignación</h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>Nombre de la Sucursal</h5></th>
                                    <th><h5>Teléfono</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sucursal_c as $sucursal_c_item): ?>
                                    <tr>
                                        <td><?php echo $sucursal_c_item['nombre']; ?></td>
                                        <td><?php echo $sucursal_c_item['telefono']; ?></td>
                                    </tr> 
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                    <a href="<?php echo base_url(); ?>Master/Cajas" rel="tooltip" data-placement="right" title="Nueva Caja"><i class="material-icons">person_add</i></a>
                    </div>
                    <h4 class="card-title">Cajas pendientes de asignación</h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>ID</h5></th>
                                    <th><h5>Nombre Caja</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($caja as $caja_item): ?>
                                    <tr>
                                        <td class="td-name"><?php echo $caja_item['id_caja']; ?></td>
                                        <td><?php echo $caja_item['nombre']; ?></td>
                                    </tr> 
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>