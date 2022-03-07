ALTER procedure Visor_CuposWeb(@fecha DATE)
AS
BEGIN
set DATEFORMAT ymd
SELECT
	es.Nombre AS especialidad, 
	s.Nombre AS servicio, 
	(DATEDIFF(minute, pm.horaInicio ,pm.HoraFin)-count(*)*pm.TiempoPromedioAtencion)/pm.TiempoPromedioAtencion AS cantidad, 
	Empleados.Nombres, 
	Empleados.ApellidoMaterno, 
	Empleados.ApellidoPaterno,
	Turnos.Descripcion
FROM
	dbo.ProgramacionMedica AS pm
	INNER JOIN
	dbo.Citas AS c
	ON 
		c.IdProgramacion = pm.IdProgramacion
	INNER JOIN
	dbo.Especialidades AS es
	ON 
		es.IdEspecialidad = pm.IdEspecialidad
	INNER JOIN
	dbo.Servicios AS s
	ON 
		s.IdServicio = pm.IdServicio
	INNER JOIN
	dbo.Medicos
	ON 
		pm.IdMedico = Medicos.IdMedico
	INNER JOIN
	dbo.Empleados
	ON 
		Medicos.IdEmpleado = Empleados.IdEmpleado
	INNER JOIN
	dbo.Turnos
	ON
	pm.IdTurno = Turnos.IdTurno
WHERE
	pm.Fecha = @fecha
GROUP BY
	es.IdEspecialidad, 
	pm.TiempoPromedioAtencion, 
	pm.horaInicio, 
	pm.HoraFin, 
	es.Nombre, 
	s.Nombre,
	Empleados.Nombres, 
	Empleados.ApellidoMaterno, 
	Empleados.ApellidoPaterno,
	Turnos.Descripcion
--HAVING ((DATEDIFF(minute, pm.horaInicio ,pm.HoraFin)-count(*)*pm.TiempoPromedioAtencion)/pm.TiempoPromedioAtencion) > 0
ORDER BY 
es.Nombre ASC,
cantidad DESC
END;