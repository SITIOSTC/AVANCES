/*
drop database bd_stc_pcl;
*/

use bd_stc_pcl;

insert into lineas(nom_linea) values
('L-12'),('L-08'),('L-02'),('L-01');



insert into estaciones (id_estacion,nombre_estacion,nom_linea) values
('0','MIXCOAC','L-12'), ('0','INSURGENTES SUR','L-12'), ('0','HOSPITAL 20 DE NOVIEMBRE','L-12'), ('0','ZAPATA','L-12'), ('0','PARQUE DE LOS VENADOS','L-12'),
('0','EJE CENTRAL','L-12'), ('0','ERMITA','L-12'), ('0','MEXICALTZINGO','L-12'), ('0','ATLALILCO','L-12'), ('0','CULHUACAN','L-12'), ('0','SAN ANDRES TOMATLAN','L-12'),
('0','LOMAS ESTRELLAS','L-12'), ('0','CALLE 11','L-12'), ('0','PERIFERICO ORIENTE','L-12'), ('0','TEZONCO','L-12'), ('0','OLIVOS','L-12'), ('0','NOPALERA','L-12'),
('0','ZAPOTITLAN','L-12'), ('0','TLALTENCO','L-12'), ('0','TLAHUAC','L-12');

insert into estaciones (id_estacion,nombre_estacion,nom_linea) values
('0','CUATRO CAMINOS','L-02'),('0','PANTEONES','L-02'),('0','TACUBA','L-02'),('0','CUITLAHUAC','L-02'),('0','POPOTLA','L-02'),
('0','COLEGIO MILITAR','L-02'),('0','NORMAL','L-02'),('0','SAN COSME','L-02'),('0','REVOLUCIÓN','L-02'),('0','HIDALGO','L-02'),('0','BELLAS ARTES','L-02'),
('0','ALLENDE','L-02'),('0','ZOCALO','L-02'),('0','PINO SUAREZ','L-02'),('0','SAN ANTONIO ABAD','L-02'),('0','CHABACANO','L-02'),('0','VIADUCTO','L-02'),
('0','XOLA','L-02'),('0','VILLA DE CORTES','L-02'),('0','NATIVITAS','L-02'),('0','PORTALES','L-02'),('0','ERMITA','L-02'),('0','GENERAL ANAYA','L-02'),
('0','TASQUEÑA','L-02');




insert into areas(nom_area, nombre_linea) values
('MC L-12','L-12'), ('PA L-12','L-12'),('SEN L-12','L-12'),('MC L-02','L-02');

insert into manuales(id_manual,titulo,codigo_manual,descripcion,nom_equipo,tamanio,tipo_archivo,nom_archivo,area,linea) values
('0','Interface Hombre-Máquina para el PCL_redline','STC10-2.3-D300-TIS-XXX-00008 C2 ',
'sin descripcion','PCL_redline',171758,'application/pdf','EJEMPLO.pdf','MC L-12','L-12'),

('0','Operacion del sistema al nivel del PCL','STC10-2.3-D300-TIS-XXX-00010 E_',
'sin descripcion','Sin especificar',100152,'application2/pdf','EJEMPLO2.pdf','MC L-12','L-12'),

('0','Especif_tecnica_PA_equipo_embarcado_fijo-es','STC10-2.2-D300-TIS-XXX-00001-D1-',
'sin descripcion','Embarcado fijo',171758,'application3/pdf','EJEMPLO3.pdf','PA L-12','L-12'),

('0','Esquema sinóptico funcional_es','STC10-2.2-D300-TIS-XXX-00003-C_',
'sin descripcion','Sin especificar',100152,'application4/pdf','EJEMPLO.pdf','PA L-12','L-12');
/*					
insert into planos(id_clave_planos, titulo, descripcion, nombre_estacion, nom_equipo, area, linea,id_estacion) values
('askasniknasoisnsunuf iwdnfvefnvuenvmovneu i ue fu c','Plano 1','sin descripcion','TLAHUAC','Traccion','MC L-12','L-12'),
('ksn iosisjasijas oas joasjoasj oajs oajoa i ue fu c','Plano 2','sin descripcion','TLAHUAC','MSS','MC L-12','L-12'),
('sajas oasja jsaosjaos oasj oasj asjaosj s i ue fu c','Plano 3','sin descripcion','MIXCOAC','Trafico','PA L-12','L-12'),
('5sd48ds18w18wd1w8d4w8d187d48w 4 d84d8w4d5 i ue fu c','Plano 4','sin descripcion','MIXCOAC','desconocido','PA L-12','L-12'),
('5as4a8s4a8sa8s4a7s4as4as85454 5448sq4q8s4 i ue fu c','Plano 5','sin descripcion','ZAPATA','Anden','SEN L-12','L-12');
*/
insert into usuarios(id_usuario,no_expediente, nom_trabajador, apellidos_trabajador, nom_linea, nombre_estacion, id_estacion, nom_area, categoria, correo, nom_usuario, clave, rol) values
('0','24012','Felix','Benitez Sanchez','L-12','TLAHUAC','20','MC L-12','Desconocida','felixbenitezsanchez@stc.com','Benito Camelo','123456','2'),
('0','24013','Felix','Benitez Sanchez','L-12','TLAHUAC','20','MC L-12','Desconocida','felixbenitezsanchez@stc.com','Benito Camelo2','123456','2');

insert into administrador(id_administrador,no_expediente,nom_administrador,apellidos_administrador,nom_linea,nom_estacion,id_estacion,nom_area,categoria,correo,nom_usuario,clave, rol) values
('0','05521','Alberto Abraham','Vazquez Marcelo','L-12','TLAHUAC','20','MC L-12','Desarrollador web','abraham_tlahuac3@hotmail.com','saboter','hammerofdawn','1'),
('0','05522','Ivonne','Méndez Carmona','L-12','TLAHUAC','20','MC L-12','Diseñadora web','ivonne@hotmail.com','binaimc','123456','1');


/*
delete from usuarios where id_no_expediente = '24012';

SELECT id_estacion,nombre_estacion FROM estaciones WHERE nom_linea="L-12";
SELECT id_estacion,nombre_estacion,nom_linea from estaciones where nom_linea = "L-12";
SELECT * from estaciones;

SELECT nombre_estacion,nom_linea FROM estaciones WHERE nombre_estacion="ERMITA";
SELECT nombre_estacion,id_estacion from estaciones where id_estacion = "1";
SELECT id_estacion from estaciones where nombre_estacion = "ERMITA" AND nom_linea="L-02";

SELECT id_estacion,nombre_estacion from estaciones where nom_linea = "L-02";
SELECT id_estacion from estaciones where nombre_estacion = "ERMITA" AND nom_linea="L-02";
SELECT id_estacion from estaciones where nom_linea = "L-02";

SELECT area FROM manuales WHERE area="MC L-12";
SELECT area FROM manuales WHERE area="PA L-12";
SELECT area FROM manuales WHERE area="SEN L-12";
SELECT * FROM manuales WHERE area="MC L-12";
SELECT * FROM manuales WHERE area="PA L-12";
SELECT * FROM manuales WHERE area="SEN L-12";
SELECT * FROM manuales ;
*/
/*
delete from lineas where nom_linea = '8';
*/