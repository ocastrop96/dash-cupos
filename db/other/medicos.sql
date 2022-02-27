/****** Script para el comando SelectTopNRows de SSMS  ******/
SELECT TOP (1000) [IdMedico]
      ,[Colegiatura]
      ,[IdEmpleado]
      ,[LoteHIS]
      ,[idColegioHIS]
      ,[rne]
      ,[egresado]
  FROM [SIGH].[dbo].[Medicos] WHERE IdMedico = 191