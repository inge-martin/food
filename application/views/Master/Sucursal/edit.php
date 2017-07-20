<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/funciones.js"></script>
<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="<?php echo base_url(); ?>Master/Sucursal/editarSucursal" class="form-horizontal">
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
                                            <input type="hidden" name="id_sucursal" value="<?php echo $sucursal['id_sucursal']; ?>">
                                            <input class="form-control valid" type="text" name="nombre" required="true" aria-required="true" aria-invalid="false" maxlength="50" autofocus="true" onkeypress="return soloLetras(event)" value="<?php echo $sucursal['nombre']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Teléfono:</b></label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="telefono" number="true" required="true" maxlength="10" onkeypress="return soloNumeros(event)" value="<?php echo $sucursal['telefono']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Calle:</b></label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="calle" required="true" aria-required="true" aria-invalid="false" maxlength="50" autofocus="true" onkeypress="return letraNumero(event)" value="<?php echo $sucursal['calle']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Número:</b></label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="number" name="numero" number="true" required="true" maxlength="10" onkeypress="return soloNumeros(event)" value="<?php echo $sucursal['numero']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Colonia:</b></label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="colonia" required="true" aria-required="true" aria-invalid="false" maxlength="50" autofocus="true" onkeypress="return soloLetras(event)" value="<?php echo $sucursal['colonia']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Estado:</b></label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="estado" required="true" aria-required="true" aria-invalid="false" maxlength="50" autofocus="true" onkeypress="return soloLetras(event)" value="<?php echo $sucursal['estado']; ?>">
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
        </div>
    </div>
</div>