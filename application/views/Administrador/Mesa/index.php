<div class="content" style="padding-top: 0px;padding-bottom: 0px;margin-top: 40px;">
    <div class="container-fluid" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <form method="POST" action="<?php echo base_url(); ?>Administrador/Mesa/nuevaMesa" class="form-horizontal">
                        <div class="card-header card-header-text" data-background-color="blue">
                            <h5 class="card-title">
                                <i class="material-icons">add</i>
                                Crear nueva mesa
                            </h5>
                        </div>
                        <div class="card-content">                       
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-sm-4 label-on-left"><b>N° Mesa:</b></label>
                                    <div class="col-sm-8">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control valid" type="text" name="numero_mesa" required="true" aria-required="true" aria-invalid="false" placeholder="Mesa 01" maxlength="10" autofocus="true" onkeypress="return letraNumero(event)" value="Mesa ">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-sm-4 label-on-left"><b>N° Comensales:</b></label>
                                    <div class="col-sm-8">
                                        <select class="form-group selectpicker" data-style="btn btn-info btn-round" title="Selecciona N° Comensales" data-size="7" required="true" name="comensal">
                                            <option value="2">2 Comensales</option>
                                            <option value="4">4 Comensales</option>
                                            <option value="6">6 Comensales</option>
                                            <option value="8">8 Comensales</option>
                                            <option value="10">10 Comensales</option>
                                        </select>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-sm-4 label-on-left"><b>Zona:</b></label>
                                    <div class="col-sm-8">
                                        <select class="form-group selectpicker" data-style="btn btn-info btn-round" title="Selecciona una Zona" data-size="7" required="true" name="zona">
                                            <option value="Zona abierta">Zona abierta</option>
                                            <option value="Zona V.I.P">Zona V.I.P</option>
                                            <option value="Primer nivel">Primer nivel</option>
                                            <option value="Segundo nivel">Segundo nivel</option>
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
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-header-text" data-background-color="blue">
                        <h5 class="card-title">
                            <i class="material-icons">view_module</i> <?php echo $title; ?>
                            <small class="text-center">Total: <?php echo $total; ?> mesas</small>
                        </h5>
                    </div>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <tr class="text-success">
                                    <th class="text-center"><h5>Mesa</h5></th>
                                    <th class="text-center"><h5>Comensales</h5></th>
                                    <th class="text-center"><h5>Zona</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mesa as $mesa_item): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $mesa_item['nombre']; ?></td>
                                        <td class="text-center"><?php echo $mesa_item['no_comensales']; ?> Comensales</td>
                                        <td class="text-center"><?php echo $mesa_item['zona']; ?></td>
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