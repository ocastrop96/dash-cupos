-- LISTADO DE ESPECIALIDADES CON PROGRAMACION EN FECHA
USE [SIGH]
GO
/****** Object:  StoredProcedure [dbo].[VISOR_CUPOS_WEB_ESPECIALIDADES]    Script Date: 08/03/2022 11:00:55 a. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [dbo].[VISOR_CUPOS_WEB_ESPECIALIDADES] (@fecha date)
as
SET DATEFORMAT ymd
SELECT DISTINCT
es.IdDepartamento,
es.IdEspecialidad,
	es.Nombre AS especialidad
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
WHERE
	pm.Fecha = @fecha
GROUP BY
	es.IdDepartamento, 
	es.IdEspecialidad, 
	pm.TiempoPromedioAtencion, 
	pm.horaInicio, 
	pm.HoraFin, 
	es.Nombre
--HAVING
--((DATEDIFF(minute, pm.horaInicio ,pm.HoraFin)-count(*)*pm.TiempoPromedioAtencion)/pm.TiempoPromedioAtencion) >=  0
ORDER BY 
es.Nombre ASC


-- LISTADO DE CUPOS X SERVICIO EN BASE A FECHA Y ESPECIALIDAD


USE [SIGH]
GO
/****** Object:  StoredProcedure [dbo].[Visor_CuposWeb]    Script Date: 08/03/2022 11:01:30 a. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER procedure [dbo].[Visor_CuposWeb](@fecha DATE, @especialidad int)
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
	pm.Fecha = @fecha and pm.IdEspecialidad = @especialidad
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
HAVING ((DATEDIFF(minute, pm.horaInicio ,pm.HoraFin)-count(*)*pm.TiempoPromedioAtencion)/pm.TiempoPromedioAtencion) >= 0
ORDER BY 
es.Nombre ASC,
cantidad DESC
END;