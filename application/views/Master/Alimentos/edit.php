<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/funciones.js"></script>
<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="<?php echo base_url(); ?>Master/Alimentos/editarAlimento" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-header card-header-text" data-background-color="blue">
                            <h4 class="card-title"><?php echo $title; ?></h4>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Nombre:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input type="hidden" name="id_alimento" value="<?php echo $alimento['id_alimento']; ?>">
                                            <input class="form-control valid" type="text" name="nombre" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa nombre del alimento" maxlength="100" autofocus="true" onkeypress="return soloLetras(event)" value="<?php echo $alimento['nombre']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Precio:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="precio" number="true" required="true" placeholder="25.50" maxlength="10" onkeypress="return soloPrecios(event)" value="<?php echo $alimento['precio']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-sm-2 label-on-left"><b>Descripción:</b></label>
                                    <div class="col-sm-8">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <textarea class="form-control materialize-textarea" name="descripcion" required="true" onkeypress="return letraNumero(event)" rows="4"><?php echo $alimento['descripcion']; ?></textarea>
                                            <!-- <span class="material-input"></span> -->
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
        </div>
    </div>
</div>