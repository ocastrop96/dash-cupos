/****** Script para el comando SelectTopNRows de SSMS  ******/
SELECT TOP (1000) [IdPaciente]
      ,[ApellidoPaterno]
      ,[ApellidoMaterno]
      ,[PrimerNombre]
      ,[SegundoNombre]
      ,[TercerNombre]
      ,[FechaNacimiento]
      ,[NroDocumento]
      ,[Telefono]
      ,[DireccionDomicilio]
      ,[Autogenerado]
      ,[IdTipoSexo]
      ,[IdProcedencia]
      ,[IdGradoInstruccion]
      ,[IdEstadoCivil]
      ,[IdDocIdentidad]
      ,[IdTipoOcupacion]
      ,[IdCentroPobladoNacimiento]
      ,[IdCentroPobladoDomicilio]
      ,[NombrePadre]
      ,[NombreMadre]
      ,[NroHistoriaClinica]
      ,[IdTipoNumeracion]
      ,[IdCentroPobladoProcedencia]
      ,[Observacion]
      ,[IdPaisDomicilio]
      ,[IdPaisProcedencia]
      ,[IdPaisNacimiento]
      ,[IdDistritoProcedencia]
      ,[IdDistritoDomicilio]
      ,[IdDistritoNacimiento]
      ,[FichaFamiliar]
      ,[IdEtnia]
      ,[GrupoSanguineo]
      ,[FactorRh]
      ,[UsoWebReniec]
      ,[IdIdioma]
      ,[Email]
      ,[madreDocumento]
      ,[madreApellidoPaterno]
      ,[madreApellidoMaterno]
      ,[madrePrimerNombre]
      ,[madreSegundoNombre]
      ,[NroOrdenHijo]
      ,[madreTipoDocumento]
      ,[Sector]
      ,[Sectorista]
      ,[NumPartida]
      ,[NumCasoEcoGen]
      ,[NumCasoRayosX]
      ,[NumCasoEcogObs]
      ,[IdEstado]
      ,[celular]
      ,[IdTipoSeguro]
      ,[FotoPaciente]
  FROM [SIGH].[dbo].[Pacientes] where IdTipoSeguro IS NOT NULL;