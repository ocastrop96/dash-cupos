<?php
require_once "../../../app/controllers/CuposController.php";
require_once "../../../app/models/CuposModel.php";
class AjaxCuposDisponibles
{
    public $FechaBusqueda;
    public function ajaxListarCuposDisponibles()
    {

        $datoFecha = $this->FechaBusqueda;

        date_default_timezone_set('America/Lima');

        $fConsulta = $datoFecha;
        $datefConsulta = str_replace('/', '-', $fConsulta);
        $fechaConQuery= date('Y-m-d', strtotime($datefConsulta));

        $listCupos = CuposController::crtListarCupos($fechaConQuery);
        $totalListCupos = count($listCupos);

        if ($totalListCupos > 0) {
            $dataRefsHTML = "<div class='col-12'>
            <div class='card card-lightblue shadow'>
                <div class='card-header'>
                    <h5 class='card-title m-0 font-weight-bold'>&nbsp; Cupos Disponibles para  el $datoFecha </h5>&nbsp;&nbsp;<i class='fas fa-calendar-alt'></i>
                </div>
                <div class='card-body'>
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
                        <tbody>";
            foreach ($listCupos as $key => $value) {
                if ($value["cantidad"] > 0) {
                    $botonCupos = "<button type='button' class='btn btn-success btn-block'><i class='fa fa-calendar-check'></i> &nbsp; $value[cantidad]</button>";
                } else {
                    $botonCupos = "<button type='button' class='btn btn-danger btn-block'><i class='fa fa-window-close'></i> &nbsp; $value[cantidad]</button>";
                }

                $dataRefsHTML .= "<tr>
                            <td>" . ($key + 1) . "</td>
                            <td>" . strtoupper($value['especialidad']) . "</td>
                            <td>" . strtoupper($value['servicio']) . "</td>
                            <td>" . strtoupper($value['Nombres']) . " " . strtoupper($value['ApellidoPaterno']) . " " . strtoupper($value['ApellidoPaterno']) . "</td>
                            <td>$value[Descripcion]</td>
                            <td>$botonCupos</td>
                        </tr>";
            }
            $dataRefsHTML .= "</tbody>
                        </table>
                    </div>
                </div>
            </div>";
        } else {
            $dataRefsHTML = "<div class='col-12'>
            <div class='alert alert-danger alert-dismissible'>
                <h5><i class='icon fas fa-ban'></i> Atención!</h5>
                No se encontró programación para la fecha seleccionada. Intente con otra fecha.
                </div>
        </div>";
        }
        echo $dataRefsHTML;
    }
}

if (isset($_POST["fechaBusqueda"])) {
    $listCupos = new AjaxCuposDisponibles();
    $listCupos->FechaBusqueda = $_POST["fechaBusqueda"];
    $listCupos->ajaxListarCuposDisponibles();
}
