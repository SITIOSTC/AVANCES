<?php
session_start();//valida si esta activa la seción, sino, no le deja seguir viendo la data y lo regresa a loginDEj.php
if (isset($_SESSION["ses_id"]) && isset($_SESSION["ses_nombre"])) {
	# code...
	//echo "Hola ".$_SESSION["ses_nombre"];
}else{
	echo "INVALIDO";
	
	header("location:logout.php");
	exit();
}

?>