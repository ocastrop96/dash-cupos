<?php
class CuposController
{

    static public function crtListarCupos($fecha)
    {
        $rptListRef = CuposModel::mdlListarCuposDisponibles($fecha);
        return $rptListRef;
    }
}