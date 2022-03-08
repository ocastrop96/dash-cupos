<?php
class CuposController
{
    static public function crtListarEspecialidadesProgramadas($fecha)
    {
        $rptListRef = CuposModel::mdlListarEspecialidadesDisponibles($fecha);
        return $rptListRef;
    }

    static public function crtListarCuposDisponibles($fecha,$especialidad)
    {
        $rptListRef = CuposModel::mdlListarCuposDisponibles($fecha,$especialidad);
        return $rptListRef;
    }
}