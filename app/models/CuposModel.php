<?php
require_once "MSdb.php";
class CuposModel
{
    static public function mdlListarEspecialidadesDisponibles($fecha)
    {
        $stmt = ConexionConsulta::conectar()->prepare("exec VISOR_CUPOS_WEB_ESPECIALIDADES @fecha = :fecha");
        $stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function mdlListarCuposDisponibles($fecha, $especialidad)
    {
        $stmt = ConexionConsulta::conectar()->prepare("exec Visor_CuposWeb @fecha = :fecha, @especialidad = :especialidad");
        $stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
        $stmt->bindParam(":especialidad", $especialidad, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}
