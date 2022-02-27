SELECT
	Atenciones.IdAtencion, 
	EpisodioAtencion.IdEpisodio, 
	EpisodioAtencion.FechaIngreso, 
	Atenciones.IdCuentaAtencion, 
	Atenciones.IdPaciente, 
	Pacientes.NroHistoriaClinica, 
	EpisodioAtencion.IdCondicionAlta, 
	TiposCondicionAlta.Descripcion, 
	Pacientes.IdDocIdentidad, 
	TiposDocIdentidad.DescripcionAbrev, 
	Pacientes.NroDocumento, 
	Pacientes.ApellidoPaterno, 
	Pacientes.ApellidoMaterno, 
	Pacientes.PrimerNombre, 
	Pacientes.SegundoNombre, 
	EpisodioAtencion.IdservicioIngreso, 
	Servicios.Nombre, 
	Pacientes.IdDistritoDomicilio, 
	Distritos.Nombre AS DISTRITO_PAC, 
	Pacientes.FechaNacimiento, 
	Pacientes.IdTipoSexo, 
	TiposSexo.Descripcion AS SEXO_PAC, 
	Pacientes.IdTipoSeguro, 
	FuentesFinanciamiento.Descripcion AS FUENTE_PAC
FROM
	dbo.Atenciones
	INNER JOIN
	dbo.EpisodioAtencion
	ON 
		Atenciones.IdAtencion = EpisodioAtencion.IdAtencion
	INNER JOIN
	dbo.Pacientes
	ON 
		Atenciones.IdPaciente = Pacientes.IdPaciente
	INNER JOIN
	dbo.TiposDocIdentidad
	ON 
		Pacientes.IdDocIdentidad = TiposDocIdentidad.IdDocIdentidad
	INNER JOIN
	dbo.TiposSexo
	ON 
		Pacientes.IdTipoSexo = TiposSexo.IdTipoSexo
	INNER JOIN
	dbo.Distritos
	ON 
		Pacientes.IdDistritoDomicilio = Distritos.IdDistrito
	INNER JOIN
	dbo.FuentesFinanciamiento
	ON 
		Pacientes.IdTipoSeguro = FuentesFinanciamiento.IdFuenteFinanciamiento
	INNER JOIN
	dbo.TiposCondicionAlta
	ON 
		EpisodioAtencion.IdCondicionAlta = TiposCondicionAlta.IdCondicionAlta
	INNER JOIN
	dbo.Servicios
	ON 
		EpisodioAtencion.IdservicioIngreso = Servicios.IdServicio
WHERE
	FuentesFinanciamiento.IdFuenteFinanciamiento = 3
ORDER BY
	1 ASC
OFFSET 0 ROWS
FETCH NEXT 4000 ROWS ONLY