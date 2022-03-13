<div class="content">
    <div class="container-fluid">
        <div class="card card-outline card-success">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="fInicio">Selecciona la Fecha a Consultar &nbsp;</label>
                            <i class="fas fa-calendar-alt"></i> *
                            <input type="text" name="fBusqueda" id="fBusqueda" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask autocomplete="off" placeholder="dd/mm/yyyy" readonly value="<?php date_default_timezone_set('America/Lima'); $fechaActual = date('d-m-Y'); echo $fechaActual; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="bloqueCupos2"></div>
    </div>
</div>