
<?php

	header("Content-Type: text/html;charset=utf-8");

	include("conexion.php");

	//declaracion de variables, que obtendran los valores del html por el metodo "_POST"
	$nom_usuario = $_POST["usuario"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$fecha = $_POST["anio"]."-".$_POST["mes"]."-".$_POST["dias"];
	$cargo = $_POST["cargo"];
	$area = $_POST["areas"];

	//si se optiene  los valores del metodo "_POST"
	if (isset($_POST['linea'] ) ) {
		//implode(une las posiciones que llegan del html), agregandoles una "," a los valores optenidos del metodo "_POST"
		$linea=implode(',', $_POST['linea']);
	}

	$correo = $_POST["correo"];
	$pass = $_POST["pass"];

	try{
		//inserta los valores en la tabla de la BD
		$insert = "INSERT INTO alta_trabajadores (nom_usuario, nombre,apellidos,fecha,cargo,area,linea,correo,pass) 
										   VALUES('$nom_usuario','$nombre','$apellidos','$fecha','$cargo','$area','$linea','$correo','$pass')";

		$query = $bd->prepare($insert);

		$query->execute();


		header("location:../registroPHP1.php");

	
	}catch(Exception $e){
		die( "Error: ".$e->getMessage());
	}