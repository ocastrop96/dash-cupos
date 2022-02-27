SELECT * FROM paciente WHERE id_persona = 31825


UPDATE ficha_de_categorizacion set id_paciente = 33294 where id_paciente = 31825 and codigo_ficha = 'FSE-596-2022';


SELECT TOP 100 * FROM ficha_de_categorizacion ORDER BY codigo_ficha DESC;


SELECT TOP 100 * FROM ficha_de_categorizacion WHERE id_paciente = 33294;


SELECT * FROM ficha_de_categorizacion WHERE id_paciente = 33294;

