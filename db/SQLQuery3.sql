set DATEFORMAT ymd
select 
es.Nombre as especialidad,s.Nombre as servicio,
(DATEDIFF(minute, pm.horaInicio ,pm.HoraFin)-count(*)*pm.TiempoPromedioAtencion)/pm.TiempoPromedioAtencion  as cantidad
from ProgramacionMedica pm
inner join Citas c on c.IdProgramacion=pm.IdProgramacion
inner join Especialidades es on es.IdEspecialidad=pm.IdEspecialidad
inner join Servicios s on s.IdServicio=pm.IdServicio
where pm.Fecha='2022-02-24 00:00:00.000'
group by pm.TiempoPromedioAtencion,pm.horaInicio ,pm.HoraFin,es.Nombre,
s.Nombre