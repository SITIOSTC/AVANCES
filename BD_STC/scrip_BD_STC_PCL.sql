drop database STC_L12_PCL;

create database STC_L12_PCL;

use STC_L12_PCL;

create table areas (
nombre_area varchar (30) not null primary key
);

create table alta_trabajadores(
id_num_trabajador int (1) not null primary key,
nom_usuario varchar (15) not null,
nombre varchar (20) not null,
apellidos varchar (35) not null,
edad int (2) not null,
cargo varchar (25) not null,
area varchar (30) not null,
linea int (2) not null,
tipo_de_usuario varchar (20) not null,
correo varchar (60) not null,
pass varchar (12) not null,
FOREIGN KEY (area) REFERENCES areas(nombre_area)
ON UPDATE CASCADE ON DELETE CASCADE
);

insert into areas (nombre_area,linea) values
('Mando Centralizado'),
('Peaje'),
('Pilotaje automático'),
('Señalización'),
('Telecomunicaciones');

/*
truncate Table alta_trabajadores;
*/