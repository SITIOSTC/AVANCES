<?php

$server     = '127.0.0.1'; //servidor
$username   = 'root'; //usuario de la base de datos
$password   = 'gears_of-war-3'; //password del usuario de la base de datos
$database   = 'bd_stc_pcl'; //nombre de la base de datos
$puerto 	= '3306'; //numero de puerto

$conexion = @new mysqli($server, $username, $password, $database, $puerto, "SET NAMES 'utf8'");
if ($conexion->connect_error){//verificamos si hubo un error al conectar

    die('Error de conexión: ' . $conexion->connect_error); //si ocurrio un error termina la aplicación y mustra el error
}
?>