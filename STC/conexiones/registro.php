
<<?php

	header("Content-Type: text/html;charset=utf-8");

	include("conexion.php");

	$nom_usuario = $_POST["usuario"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$edad = $_POST["edad"];
	$correo = $_POST["correo"];
	$pass = $_POST["pass"];



	try{
		$insert = "INSERT INTO alta_trabajadores (nom_usuario,nombre,apellidos,edad,correo,pass) VALUES('$nom_usuario','$nombre','$apellidos',$edad,'$correo','$pass')";

		$query = $bd->prepare($insert);

		$query->execute();




		header("location:../registroPHP1.php");




	
	}catch(Exception $e){
		die( "Error: ".$e->getMessage());
	}

 ?>
