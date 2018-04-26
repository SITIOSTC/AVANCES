
<?php

	header("Content-Type: text/html;charset=utf-8");

	require ('../../../../conexiones/conexion.php');

	//declaracion de variables, que obtendran los valores del html por el metodo "_POST"

	$id_admin = $_POST["id_admin"];
	$no_expediente = $_POST["expediente"];
	$nombre = $_POST["nom_admin"];
	$apellidos = $_POST["apellidos_admin"];
	$linea = $_POST["cbx_linea"];
	$estacion = $_POST["cbx_estacion"];
	$id_estacion = $_POST["cbx_id_estacion"];
	$areas = $_POST["areas"];
	$categoria = $_POST["categoria"];
	$correo = $_POST["correo"];
	$nom_usuario = $_POST["nom_usuario"];
	$pass =password_hash($_POST['pass'], PASSWORD_BCRYPT, array("cost"=>12));
	$rol = $_POST["rol"];

	try{
		//inserta los valores en la tabla de la BD
		$insert = "INSERT INTO administrador (id_administrador,no_expediente,nom_administrador,apellidos_administrador,nom_linea,nom_estacion,id_estacion,nom_area,categoria,correo,nom_usuario,clave, rol) 
								VALUES('$id_admin','$no_expediente','$nombre','$apellidos','$linea','$estacion','$id_estacion','$areas','$categoria','$correo','$nom_usuario','$pass',$rol)";

		$query = $bd->prepare($insert);

		$query->execute();

		header("location:alta_admin.php");
		//header("location.href='javascript:history.back()'");
	
	}catch(Exception $e){
		die( "Error: ".$e->getMessage());
	}
	?>