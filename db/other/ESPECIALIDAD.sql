/****** Script para el comando SelectTopNRows de SSMS  ******/
SELECT TOP (1000) [IdEspecialidad]
      ,[Nombre]
      ,[IdDepartamento]
      ,[TiempoPromedioAtencion]
      ,[estadoEspecialidad]
  FROM [SIGH].[dbo].[Especialidades] WHERE IdEspecialidad = 54