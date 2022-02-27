SELECT 
top 100
	ReferenciasRefcon.nroReferencia,
	YEAR(DetalleReferencia.FechaReferencia) as anioReferencia,
	format ( DetalleReferencia.FechaSolicitud, 'dd/MM/yyyy' ) AS FechaSolicitud,
	format ( DetalleReferencia.FechaReferencia, 'dd/MM/yyyy' ) AS FechaReferencia,
	ReferenciasRefcon.tipDocumento,
	ReferenciasRefcon.dni,
	DetalleReferencia.IdAtencion,
	format ( Citas.Fecha, 'dd/MM/yyyy' ) AS FechaCita,
	Citas.HoraInicio,
	Citas.HoraFin,
	Citas.IdEstadoCita,
	Especialidades.IdDepartamento,
	DepartamentosHospital.Nombre AS NombDepartamento,
	Citas.IdEspecialidad,
	Especialidades.Nombre AS NombEspecialidad,
	Citas.IdServicio,
	Servicios.Nombre AS NombreServicio,
	Servicios.IdTipoServicio 
FROM
	dbo.ReferenciasRefcon
	INNER JOIN dbo.DetalleReferencia ON ReferenciasRefcon.nroReferencia = DetalleReferencia.NroReferencia
	INNER JOIN dbo.Citas ON DetalleReferencia.IdAtencion = Citas.IdAtencion
	INNER JOIN dbo.Servicios ON Citas.IdServicio = Servicios.IdServicio
	INNER JOIN dbo.Especialidades ON Citas.IdEspecialidad = Especialidades.IdEspecialidad
	INNER JOIN dbo.DepartamentosHospital ON Especialidades.IdDepartamento = DepartamentosHospital.IdDepartamento 
WHERE
	Servicios.IdTipoServicio = 1 
	AND IdEstadoCita = 1 
--AND ReferenciasRefcon.nroReferencia LIKE '5736%'
	--AND ReferenciasRefcon.dni = @dniUsuario AND YEAR(DetalleReferencia.FechaReferencia) = @anio
ORDER BY
	DetalleReferencia.FechaReferencia DESC