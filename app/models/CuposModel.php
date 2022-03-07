<?php
require_once "MSdb.php";
class CuposModel
{
    static public function mdlListarCuposDisponibles($fecha){
        $stmt = ConexionConsulta::conectar()->prepare("exec Visor_CuposWeb @fecha = :fecha");
        // $stmt->bindParam(":anio", $anio, PDO::PARAM_INT);
        $stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}
