<div class="content">
    <div class="container-fluid">
        <div class="card card-outline card-success">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="fInicio">Selecciona la Fecha a Consultar &nbsp;</label>
                            <i class="fas fa-calendar-alt"></i> *
                            <input type="text" name="fBusqueda" id="fBusqueda" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask autocomplete="off" placeholder="dd/mm/yyyy" readonly value="<?php date_default_timezone_set('America/Lima');
                                                                                                                                                                                                                                                    $fechaActual = date('d-m-Y');
                                                                                                                                                                                                                                                    echo $fechaActual; ?>">
                        </div>
                    </div>
                    <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-1" id="btnDNIConsulta">
                        <div class="form-group">
                            <label>Consulta:<span class="text-danger">&nbsp;</span></label>
                            <div class="input-group">
                                <button type="button" class="btn btn-block btn-info" id="btnDNIUCons"><i class="fas fa-search"></i>&nbsp;Buscar</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- <div class="row" id="bloqueCupos">
        </div> -->

        <div class="row" id="bloqueCupos2">
            
            <!-- <div class="col-12">
                <div class="card card-info shadow-lg collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold"></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="home" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>

                    </div>

                    <div class="card-body">
                        <table id='datatableCuposDisponibles' class='table table-bordered table-hover dt-responsive datatableCuposDisponibles'>
                            <thead>
                                <tr>
                                    <th style='width: 10px'>#</th>
                                    <th>Especialidad</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Turno</th>
                                    <th style='width: 10px'>Disponibles</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div> -->
        </div>
    </div>
</div>

<?php
// $rept = CuposModel::mdlListarEspecialidadesDisponibles('2022-03-04');
// var_dump($rept);
?>