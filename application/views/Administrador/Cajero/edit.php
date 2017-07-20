<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/funciones.js"></script>
<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="<?php echo base_url(); ?>Administrador/Cajero/editarCajero" class="form-horizontal">
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
                                            <input type="hidden" name="id_usuario" value="<?php echo $admin['id_usuario']; ?>">
                                            <input class="form-control valid" type="text" name="nombre" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa tu nombre" maxlength="15" autofocus="true" onkeypress="return soloLetras(event)" value="<?php echo $admin['nombre']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Paterno:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="paterno" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa apellido paterno" maxlength="15" autofocus="true" onkeypress="return soloLetras(event)" value="<?php echo $admin['paterno']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Materno:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="materno" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa apellido materno" maxlength="15" autofocus="true" onkeypress="return soloLetras(event)" value="<?php echo $admin['materno']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Teléfono:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="telefono" number="true" required="true" placeholder="5555555555" maxlength="10" onkeypress="return soloNumeros(event)" value="<?php echo $admin['telefono']; ?>">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>F. Nacimiento:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="date" name="nacimiento" required="true" aria-required="true" aria-invalid="false" value="<?php echo $admin['nacimiento']; ?>">
                                            <span class="material-input"></span>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Email:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="email" name="email" number="true" placeholder="algo@mail.com" required="true" maxlength="30" value="<?php echo $admin['email']; ?>">
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