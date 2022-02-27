/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [IdUsuarioRol]
      ,[IdRol]
      ,[IdEmpleado]
  FROM [SIGH].[dbo].[UsuariosRoles] 
  where IdEmpleado = 1930