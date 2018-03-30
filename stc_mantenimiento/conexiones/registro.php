
<?php

	header("Content-Type: text/html;charset=utf-8");

	include("conexion.php");

	//declaracion de variables, que obtendran los valores del html por el metodo "_POST"

	$id_usuario = $_POST["id_usuario"];
	$no_expediente = $_POST["expediente"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$linea = $_POST["cbx_linea"];
	$estacion = $_POST["cbx_estacion"];
	$id_estacion = $_POST["cbx_id_estacion"];
	$areas = $_POST["areas"];
	$categoria = $_POST["categoria"];
	$correo = $_POST["correo"];
	$nom_usuario = $_POST["nom_usuario"];
	$pass = $_POST["pass"];
	$rol = $_POST["rol"];

	try{
		//inserta los valores en la tabla de la BD
		$insert = "INSERT INTO usuarios (id_usuario, no_expediente, nom_trabajador, apellidos_trabajador, nom_linea, nombre_estacion, id_estacion, nom_area, categoria, correo, nom_usuario, clave, rol) 
								VALUES('$id_usuario','$no_expediente','$nombre','$apellidos','$linea','$estacion','$id_estacion','$areas','$categoria','$correo','$nom_usuario','$pass',$rol)";

		$query = $bd->prepare($insert);

		$query->execute();

		header("location:../php/alta_usuarios.php");
		//header("location.href='javascript:history.back()'");
	
	}catch(Exception $e){
		die( "Error: ".$e->getMessage());
	}
	?>