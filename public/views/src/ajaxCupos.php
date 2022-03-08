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
        $fechaConQuery = date('Y-m-d', strtotime($datefConsulta));

        $listCupos = CuposController::crtListarEspecialidadesProgramadas($fechaConQuery);
        $totalListCupos = count($listCupos);


        if ($totalListCupos > 0) {
            $dataRefsHTML = "";

            foreach ($listCupos as $key => $value) {
                $dataRefsHTML .= "<div class='col-12 col-md-12 col-lg-6 col-xl-6'>
                <div class='card card-info shadow-lg collapsed-card'>
                    <div class='card-header'>
                        <h3 class='card-title font-weight-bold'> &nbsp;" . strtoupper($value['especialidad']) . " || Disponibles: &nbsp;<span id='contadorEspecialidad$value[IdEspecialidad]'></span></h3>
                        <div class='card-tools'>
                            <button type='button' class='btn btn-tool' data-card-widget='collapse'><i class='fas fa-plus'></i>
                            </button>
                        </div>
                    </div>
                    <div class='card-body'>
                    <script>
                    CargarTablas('datatableCuposDisponibles$value[IdEspecialidad]')
                    </script>
                    <table id='datatableCuposDisponibles$value[IdEspecialidad]' class='table table-bordered table-hover dt-responsive datatableCuposDisponibles$value[IdEspecialidad]'>
                            <thead>
                                <tr>
                                    <th style='width: 10px'>#</th>
                                    <th>Servicio</th>
                                    <th>Médico</th>
                                    <th>Turno</th>
                                    <th style='width: 10px'>Disponibles</th>
                                </tr>
                            </thead>
                            <tbody>";

                // Recorremos la programación de las Especialidades x Servicios
                $especialidad = $value['IdEspecialidad'];
                $listProgramacion = CuposController::crtListarCuposDisponibles($fechaConQuery, $especialidad);
                $totalLisstProgramacion = count($listProgramacion);

                if ($totalLisstProgramacion > 0) {

                    // SUMATORIA DE DISPONIBLES
                    $acumulado = 0;
                    foreach ($listProgramacion as $key3 => $value3) {
                        $acumulado += $value3["cantidad"];
                    }
                    $dataRefsHTML .= "<script>
                            CargarTotalDisponible('contadorEspecialidad$especialidad',$acumulado)
                        </script>";
                    // SUMATORIA DE DISPONIBLES
                    foreach ($listProgramacion as $key2 => $value2) {
                        //     $acumulado = array_sum($value2['cantidad']);

                        if ($value2["cantidad"] > 0) {
                            $botonCupos = "<button type='button' class='btn btn-success btn-block'><i class='fa fa-calendar-check'></i> &nbsp; $value2[cantidad]</button>";
                        } else {
                            $botonCupos = "<button type='button' class='btn btn-danger btn-block'><i class='fa fa-window-close'></i> &nbsp; $value2[cantidad]</button>";
                        }

                        $dataRefsHTML .= "<tr>
                            <td>" . ($key2 + 1) . "</td>
                            <td>" . strtoupper($value2['servicio']) . "</td>
                            <td>" . strtoupper($value2['Nombres']) . " " . strtoupper($value2['ApellidoPaterno']) . " " . strtoupper($value2['ApellidoPaterno']) . "</td>
                            <td>$value2[Descripcion]</td>
                            <td>$botonCupos</td>
                        </tr>";
                    }
                } else {
                    $dataRefsHTML .= "<tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>";
                }
                $dataRefsHTML .= "</tbody>
                        </table>
                    </div>
                </div>
            </div>";
            }
        } else {
            $dataRefsHTML = "<div class='col-12'>
            <div class='alert alert-danger alert-dismissible'>
                <h5><i class='icon fas fa-ban'></i> Atención!</h5>
                No se encontraron especialidades programadas para la fecha seleccionada. Intente con otra fecha menor.
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
