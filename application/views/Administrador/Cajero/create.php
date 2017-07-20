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
                    <form method="POST" action="<?php echo base_url(); ?>Administrador/Cajero/nuevoCajero" class="form-horizontal" enctype="multipart/form-data">
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
                                            <input class="form-control valid" type="text" name="nombre" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa tu nombre" maxlength="15" autofocus="true" onkeypress="return soloLetras(event)">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Paterno:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="paterno" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa apellido paterno" maxlength="15" autofocus="true" onkeypress="return soloLetras(event)">
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
                                            <input class="form-control valid" type="text" name="materno" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa apellido materno" maxlength="15" autofocus="true" onkeypress="return soloLetras(event)">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Sexo:</b></label>
                                    <div class="col-sm-6">
                                        <select class="form-group selectpicker" data-style="btn btn-info btn-round" title="Selecciona Sexo" data-size="7" required="true" name="sexo">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>F. Nacimiento:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="date" name="nacimiento" required="true" aria-required="true" aria-invalid="false">
                                            <span class="material-input"></span>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Email:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="email" name="email" number="true" placeholder="algo@mail.com" required="true" maxlength="30">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Teléfono:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="telefono" number="true" required="true" placeholder="5555555555" maxlength="10" onkeypress="return soloNumeros(event)">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Fotografia:</b></label>
                                    <div class="col-sm-6">
                                        <span class="btn btn-info btn-round btn-file">
                                            <input type="file" name="fotografia" required="true">
                                            <div class="ripple-container"></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Usuario:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="usuario" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa tu usuario" maxlength="15" onkeypress="return letraNumero(event)">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-sm-3 label-on-left"><b>Contraseña:</b></label>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="password" name="contrasena" required="true" aria-required="true" aria-invalid="false" placeholder="Ingresa tu contraseña" maxlength="15" onkeypress="return letraNumero(event)">
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