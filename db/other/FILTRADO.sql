/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [id_seguimiento]
      ,[descricpion]
      ,[fecha_seguimiento]
      ,[hora_seguimiento]
      ,[id_asistenta_social]
      ,[id_ficha_categorizacion]
      ,[id_paciente]
      ,[otro_servicio]
      ,[id_area_funcional]
      ,[id_departamento]
      ,[id_servicio]
      ,[id_tipo_paciente]
  FROM [SERVICIO_SOCIAL_HNSEB].[dbo].[seguimiento_paciente] 
  WHERE id_paciente = 33294
  ORDER BY fecha_seguimiento ASC;

  UPDATE seguimiento_paciente SET id_paciente = 33294 where id_seguimiento in(44696,
44697,
44699,
44700,
44851,
44727,
44728,
44740,
44745);