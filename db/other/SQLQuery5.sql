ALTER PROCEDURE ConsultaWebRefcon
AS
BEGIN
SELECT
	DetalleReferencia.FechaReferencia, 
	ReferenciasRefcon.nroReferencia, 
	ReferenciasRefcon.tipDocumento, 
	ReferenciasRefcon.dni, 
	ReferenciasRefcon.nombres, 
	ReferenciasRefcon.apeMaterno, 
	ReferenciasRefcon.apePaterno, 
	ReferenciasRefcon.sexo, 
	DetalleReferencia.FechaSolicitud, 
	DetalleReferencia.Horasolicitud, 
	ReferenciasRefcon.fecCita, 
	DetalleReferencia.Estado, 
	ReferenciasRefcon.codServicio, 
	ReferenciasRefcon.especialidad, 
	DetalleReferencia.IdAtencion
FROM
	ReferenciasRefcon
	INNER JOIN
	DetalleReferencia
	ON 
		ReferenciasRefcon.nroReferencia = DetalleReferencia.NroReferencia
	ORDER BY FechaReferencia DESC;
END

	exec ConsultaWebRefcon