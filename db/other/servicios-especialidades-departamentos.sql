SELECT IdServicio,UPPER(Nombre) as Nombre,IdEspecialidad,IdTipoServicio FROM Servicios WHERE idEstado = 1;

--SELECT * FROM TiposSexo;

SELECT IdTipoServicio, UPPER(Descripcion) AS Descripcion FROM TiposServicio;

SELECT IdEspecialidad,UPPER(Nombre) as  Nombre,IdDepartamento FROM Especialidades;

SELECT TOP 1000 * FROM Atenciones ORDER BY IdAtencion DESC;
