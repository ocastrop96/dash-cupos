set DATEFORMAT ymd
select 
es.Nombre as especialidad,s.Nombre as servicio,
(DATEDIFF(minute, pm.horaInicio ,pm.HoraFin)-count(*)*pm.TiempoPromedioAtencion)/pm.TiempoPromedioAtencion  as cantidad
from ProgramacionMedica pm
inner join Citas c on c.IdProgramacion=pm.IdProgramacion
inner join Especialidades es on es.IdEspecialidad=pm.IdEspecialidad
inner join Servicios s on s.IdServicio=pm.IdServicio
where pm.Fecha='2022-02-26 00:00:00.000'
group by es.IdEspecialidad,pm.TiempoPromedioAtencion,pm.horaInicio ,pm.HoraFin,es.Nombre,
s.Nombre order by es.Nombre asc;


---PRUEBAS
select * from CitasBloqueadas order by Fecha DESC;