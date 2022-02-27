create procedure BuscarReferenciasxNro(@anio int, @dni varchar(15), @referencia varchar(12))
as
SELECT DISTINCT 
YEAR(DetalleReferencia.fechareferencia) as anioReferencia,
	Especialidades.IdDepartamento,
	Citas.IdEspecialidad,
	Citas.IdServicio
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
	AND ReferenciasRefcon.dni = @dni AND YEAR(DetalleReferencia.FechaReferencia) = @anio
	AND ReferenciasRefcon.nroReferencia = @referencia