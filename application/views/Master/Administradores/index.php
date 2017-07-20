<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <?php     if(empty($admin)){    ?>      
        <label>Aun no hay administradores.</label>
        <a href="<?php echo base_url(); ?>Master/Administrador/add_Administradores" class='btn btn-success btn-xs'><i class="material-icons">person_add</i> Nuevo Administrador</a>  
        <?php   }else{        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Administrador/add_Administradores" rel="tooltip" data-placement="right" title="Nuevo"><i class="material-icons">person_add</i></a>
                    </div>
                    <h4 class="card-title"><?php echo $title; ?></h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>ID</h5></th>
                                    <th><h5>Nombre</h5></th>
                                    <th><h5>Sexo</h5></th>
                                    <th><h5>Email</h5></th>
                                    <th><h5>Teléfono</h5></th>
                                    <th><h5>Acción</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($admin as $admin_item): ?>
                                    <tr>
                                        <td><?php echo $admin_item['id_usuario']; ?></td>
                                        <td><?php echo $admin_item['nombre'] . "  " . $admin_item['paterno'] . "  " . $admin_item['materno']; ?></td>
                                        <td><?php echo $admin_item['sexo']; ?></td>
                                        <td><?php echo $admin_item['email']; ?></td>
                                        <td><?php echo $admin_item['telefono']; ?></td>

                                        <td class="td-actions text-right">
                                            <a type="button" rel="tooltip" class="btn btn-info btn-simple" data-original-title="Ver" title="Ver" href="<?php echo base_url('Master/Administrador/view_Administrador/'.$admin_item['id_usuario']); ?>">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a type="button" rel="tooltip" class="btn btn-success btn-simple" data-original-title="Editar" title="Editar" href="<?php echo base_url('Master/Administrador/edit_Administradores/'.$admin_item['id_usuario']); ?>">
                                                <i class="material-icons">edit</i>
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
    </div>
</div>