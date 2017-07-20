<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/funciones.js"></script>
<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <?php if($error != ' '){ ?>
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <div class="alert alert-danger alert-with-icon" data-notify="container">
                <a type="button" aria-hidden="true" class="close">!</a>
                <i data-notify="icon" class="material-icons">add_alert</i>
                <span data-notify="message">
                    <h3>Error!</h3>
                    <?php echo $error; ?>
                </span>
            </div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="<?php echo base_url(); ?>Master/Asignacion/nuevaAsignacion" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-header card-header-text" data-background-color="blue">
                            <h4 class="card-title"><?php echo $title; ?></h4>
                        </div>
                        <div class="card-content">                       
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Sucursal:</b></label>
                                    <div class="col-sm-6">
                                        <select class="form-group selectpicker" data-style="btn btn-info btn-round" title="Selecciona Sucursal" data-size="7" required="true" name="id_sucursal">
                                            <?php if (count($sucursal)) {
                                                foreach ($sucursal as $list) {
                                                    echo "<option value='". $list['id_sucursal'] . "'>" . ucwords($list['nombre']) . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Administrador:</b></label>
                                    <div class="col-sm-6">
                                        <select class="form-group selectpicker" data-style="btn btn-info btn-round" title="Selecciona Administrador" data-size="7" required="true" name="id_usuario">
                                            <?php if (count($admin)) {
                                                foreach ($admin as $list) {
                                                    echo "<option value='". $list['id_usuario'] . "'>" . ucwords($list['nombre']." ".$list['paterno']." ".$list['materno']) . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
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
        </div>
    </div>
</div>