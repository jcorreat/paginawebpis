use proyecto_ultrasonido;

describe dispositivo;
describe estado;
describe alerta;
describe lectura;
describe roles;
describe usuarios;

select * from dispositivo;
select * from estado;
select * from alerta;
select * from lectura;
select * from roles;
select * from usuarios;

select l.id_lectura, l.data_decibel, l.fecha_creacion, a.descripcion 
from  lectura l, alerta a where l.id_lectura = a.data_id; 

