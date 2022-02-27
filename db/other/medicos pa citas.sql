SELECT     dbo.Medicos.IdMedico, dbo.Empleados.IdEmpleado, dbo.Empleados.ApellidoPaterno, dbo.Empleados.ApellidoMaterno, dbo.Empleados.Nombres,
                     dbo.Empleados.DNI , dbo.Medicos.Colegiatura
FROM         dbo.Medicos INNER JOIN
                     dbo.Empleados ON dbo.Medicos.IdEmpleado = dbo.Empleados.IdEmpleado
					 ORDER BY ApellidoPaterno