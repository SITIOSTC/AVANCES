/*Elimina la base de datos seleccionada*/
drop database stc_l12_pcl;

/*Se crea la base de datos y se le asigna un nombre*/
create database stc_l12_pcl;

/*Indica la base de datos a utilizar*/
use stc_l12_pcl;

/*Se crea la tabla, asignandole un nombre y sus atributos*/
create table linea(
/*A los atributos se les asigna un tipo de dato (varchar, int, decimal, etc...)*/
nom_estacion varchar (25) primary key not null,
linea varchar (10) not null);

/*Se crea la tabla, asignandole un nombre y sus atributos*/
create table averias(
/*A los atributos se les asigna un tipo de dato (varchar, int, decimal, etc...)*/
id_averia varchar (10) primary key not null,
descripcion varchar (50) not null);

/*Se crea la tabla, asignandole un nombre y sus atributos*/
create table ubicacion(
ubicacion varchar (20) primary key not null);

/*Se crea la tabla, asignandole un nombre y sus atributos*/
create table areas(
/*A los atributos se les asigna un tipo de dato (varchar, int, decimal, etc...)*/
id_nom_area varchar (25) primary key not null,
ubicacion varchar (20) not null,
nom_estacion varchar(25) not null,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (nom_estacion) REFERENCES linea(nom_estacion)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (ubicacion) REFERENCES ubicacion(ubicacion)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE
);

/*Se crea la tabla, asignandole un nombre y sus atributos*/
create table usuarios(
/*A los atributos se les asigna un tipo de dato (varchar, int, decimal, etc...)*/
id_no_expediente varchar(10) primary key not null,
nom_trabajador varchar(25) not null,
apellidos_trabajor varchar(25) not null,
nom_estacion varchar(25) not null,
nom_area varchar(25) not null,
categoria varchar(25) not null,
correo varchar(30),
clave varchar(12) not null,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (nom_estacion) REFERENCES linea(nom_estacion)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (nom_area) REFERENCES areas(id_nom_area)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE
);

/*Se crea la tabla, asignandole un nombre y sus atributos*/
create table equipos(
/*A los atributos se les asigna un tipo de dato (varchar, int, decimal, etc...)*/
id_nom_equipo varchar(10) primary key not null,
catidad_equipos int(10) not null,
nom_estacion varchar(25) not null,
nom_area varchar(25) not null,
ubicacion varchar(20) not null,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (nom_area) REFERENCES areas(id_nom_area)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (nom_estacion) REFERENCES linea(nom_estacion)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE
);


/*Se crea la tabla, asignandole un nombre y sus atributos*/
create table manuales(
/*A los atributos se les asigna un tipo de dato (varchar, int, decimal, etc...)*/
id_codigo_falla int(10) primary key not null,
nom_manual varchar(45) not null,
descripcion varchar(50) not null,
nom_area varchar(25) not null,
nom_equipo varchar(10) not null,
tipo_averia varchar(10) not null,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (tipo_averia) REFERENCES averias(id_averia)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (nom_area) REFERENCES areas(id_nom_area)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE,
/*Se genera una llave foranea, indicando el atributo y la tabla con la que se desea ligar*/
FOREIGN KEY (nom_equipo) REFERENCES equipos(id_nom_equipo)
/*ON UPDATE CASCADE: actualizacion en cascada. ON DELETE CASCADE: borrado en cascada*/
ON UPDATE CASCADE ON DELETE CASCADE
);


insert into linea (nom_estacion,linea) values
('MIXCOAC','12'), ('INSURGENTES SUR','12'), ('HOSPITAL 20 DE NOVIEMBRE','12'), ('ZAPATA','12'), ('PARQUE DE LOS VENADOS','12'),
('EJE CENTRAL','12'), ('ERMITA','12'), ('MEXICALTZINGO','12'), ('ATLALILCO','12'), ('CULHUACAN','12'), ('SAN ANDRES TOMATLAN','12'),
('LOMAS ESTRELLAS','12'), ('CALLE 11','12'), ('PERIFERICO ORIENTE','12'), ('TEZONCO','12'), ('OLIVOS','12'), ('NOPALERA','12'),
('ZAPOTITLAN','12'), ('TLALTENCO','12'), ('TLAHUAC','12');

insert into ubicacion (ubicacion) values
('LT1'),('LT2'),('Talleres'),('Sala_Técnica');


insert into areas (id_nom_area,ubicacion,nom_estacion) values
('Pilotaje automatico','LT1','MIXCOAC'),('Mando centralizado','Talleres','TLAHUAC');

select * from areas;
