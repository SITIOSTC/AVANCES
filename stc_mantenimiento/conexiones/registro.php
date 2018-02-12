
<?php

	header("Content-Type: text/html;charset=utf-8");

	include("conexion.php");

	//declaracion de variables, que obtendran los valores del html por el metodo "_POST"

	$no_expediente = $_POST["expediente"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$linea = $_POST["cbx_linea"];
	$estacion = $_POST["cbx_estacion"];
	$id_estacion = $_POST["cbx_id_estacion"];
	$areas = $_POST["areas"];
	$categoria = $_POST["categoria"];
	$correo = $_POST["correo"];
	$pass = $_POST["pass"];

	try{
		//inserta los valores en la tabla de la BD
		$insert = "INSERT INTO usuarios (id_no_expediente, nom_trabajador, apellidos_trabajador, nom_linea, nombre_estacion, id_estacion, nom_area, categoria, correo, clave) 
								VALUES('$no_expediente','$nombre','$apellidos','$linea','$estacion','$id_estacion','$areas','$categoria','$correo','$pass')";

		$query = $bd->prepare($insert);

		$query->execute();

		header("location:../php/registroPHP1.php");

	
	}catch(Exception $e){
		die( "Error: ".$e->getMessage());
	}
	?>