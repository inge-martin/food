<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <form method="POST" action="<?php echo base_url(); ?>Master/Cajas/nuevaCaja" class="form-horizontal">
                        <div class="card-header card-header-text" data-background-color="blue">
                            <h5 class="card-title">
                                <i class="material-icons">add</i>
                                Crear nueva caja
                            </h5>
                        </div>
                        <div class="card-content">                       
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-sm-4 label-on-left"><b>N° Caja:</b></label>
                                    <div class="col-sm-8">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="nombre" required="true" aria-required="true" aria-invalid="false" placeholder="Caja 01" maxlength="10" autofocus="true" onkeypress="return letraNumero(event)" value="Caja ">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-info btn-fill">Guardar</button>
                        </div>
                    </form>
                </div>
            </div> 
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-header-text" data-background-color="blue">
                        <h5 class="card-title">
                            <i class="material-icons">view_module</i> <?php echo $title; ?>
                            <small class="text-center">Total: <?php echo $total; ?> cajas</small>
                        </h5>
                    </div>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th class="text-center"><h5>ID</h5></th>
                                    <th class="text-center"><h5>Nombre Caja</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cajas as $cajas_item): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $cajas_item['id_caja']; ?></td>
                                        <td class="text-center"><?php echo $cajas_item['nombre']; ?></td>
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