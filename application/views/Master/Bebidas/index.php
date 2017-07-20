<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <?php     if(empty($bebidas)){    ?>      
        <h3>Aun no hay bebidas.</h3>
        <a href="<?php echo base_url(); ?>Master/Bebidas/add_Bebidas" class='btn btn-success btn-xs'><i class="material-icons">local_bar</i> Nueva Bebida</a>  
        <?php   }else{        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="orange">
                        <a href="<?php echo base_url(); ?>Master/Bebidas/add_Bebidas" rel="tooltip" data-placement="right" title="Nueva"><i class="material-icons">local_bar</i></a>
                    </div>
                    <h4 class="card-title"><?php echo $title; ?></h4>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-shopping">
                            <thead>
                                <tr class="text-success">
                                    <th><h5>ID</h5></th>
                                    <th><h5>Nombre</h5></th>
                                    <th><h5>Precio</h5></th>
                                    <th><h5>Fotografia</h5></th>
                                    <th style="width: 15%"><h5>Acción</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bebidas as $bebidas_item): ?>
                                    <tr>
                                        <td><?php echo $bebidas_item['id_bebida']; ?></td>
                                        <td class="td-name"><?php echo $bebidas_item['nombre']; ?></td>
                                        <td>$ <?php echo $bebidas_item['precio']; ?></td>
                                        <td>
                                            <div class="img-container">
                                                <img src="<?php echo base_url('assets/fotos/bebidas/') . $bebidas_item['fotografia']; ?>" style="width: 120px; height: 80px;">
                                            </div>
                                        </td>
                                        <td class="td-actions text-right">
                                            <div style="padding-top: 20%;padding-bottom: 20%;">
                                                <a type="button" rel="tooltip" class="btn btn-info btn-simple" data-original-title="Ver" title="Ver" href="<?php echo base_url('Master/Bebidas/view_Bebidas/'.$bebidas_item['id_bebida']); ?>">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a type="button" rel="tooltip" class="btn btn-success btn-simple" data-original-title="Editar" title="Editar" href="<?php echo base_url('Master/Bebidas/edit_Bebida/'.$bebidas_item['id_bebida']); ?>">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a type="button" rel="tooltip" class="btn btn-danger btn-simple" data-original-title="Eliminar" title="Eliminar" href="<?php echo base_url('Master/Bebidas/delete/'.$bebidas_item['id_bebida']); ?>" onClick="return confirm('¿Estas seguro que quieres borrarlo?')">
                                                    <i class="material-icons">close</i>
                                                </a>                                   
                                            </div>
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