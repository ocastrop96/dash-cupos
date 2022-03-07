<div class="content">
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-2">
                        <div class="form-group">
                            <label for="fInicio">Seleccione Fecha &nbsp;</label>
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
        <div class="row" id="bloqueCupos">
            <!-- <div class="col-md-6">
                <div class="card card-widget widget-user shadow">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username font-weight-bold font-italic">ALTO RIESGO</h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="https://e7.pngegg.com/pngimages/961/156/png-clipart-clinic-physician-medicine-specialty-computer-icons-others-text-rectangle.png" alt="User Avatar">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover datatableCuposPrueba" id="datatableCuposPrueba">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Disponibles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-widget widget-user shadow">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username font-weight-bold font-italic">ALTO RIESGO</h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="https://e7.pngegg.com/pngimages/961/156/png-clipart-clinic-physician-medicine-specialty-computer-icons-others-text-rectangle.png" alt="User Avatar">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover datatableCuposPrueba" id="datatableCuposPrueba">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Disponibles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-widget widget-user shadow">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username font-weight-bold font-italic">ALTO RIESGO</h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="https://e7.pngegg.com/pngimages/961/156/png-clipart-clinic-physician-medicine-specialty-computer-icons-others-text-rectangle.png" alt="User Avatar">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover datatableCuposPrueba" id="datatableCuposPrueba">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Disponibles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-widget widget-user shadow">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username font-weight-bold font-italic">ALTO RIESGO</h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="https://e7.pngegg.com/pngimages/961/156/png-clipart-clinic-physician-medicine-specialty-computer-icons-others-text-rectangle.png" alt="User Avatar">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover datatableCuposPrueba" id="datatableCuposPrueba">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Disponibles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-widget widget-user shadow">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username font-weight-bold font-italic">ALTO RIESGO</h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="https://e7.pngegg.com/pngimages/961/156/png-clipart-clinic-physician-medicine-specialty-computer-icons-others-text-rectangle.png" alt="User Avatar">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover datatableCuposPrueba" id="datatableCuposPrueba">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Disponibles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-widget widget-user shadow">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username font-weight-bold font-italic">ALTO RIESGO</h3>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="https://e7.pngegg.com/pngimages/961/156/png-clipart-clinic-physician-medicine-specialty-computer-icons-others-text-rectangle.png" alt="User Avatar">
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover datatableCuposPrueba" id="datatableCuposPrueba">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Disponibles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>183</td>
                                    <td>CIRUG TORAX Y CARDIOVASCULAR 1</td>
                                    <td>JORGE LUIS GALARRETA Hernandez</td>
                                    <td>11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> -->
        </div>
    </div>
</div>

<?php
// $rept = CuposModel::mdlListarCuposDisponibles('2022-03-04');
// var_dump($rept);
?>