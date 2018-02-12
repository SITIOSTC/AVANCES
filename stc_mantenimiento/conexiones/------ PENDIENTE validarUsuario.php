<?php


$us = $_POST["nom_usuario"];
$ps = $_POST["pass"];
echo "usuario:" .$us;
echo "<br>";
echo "password: ".$ps;

include("conexion.php");

//$consulta = "SELECT * FROM usuarios";
$consulta = "SELECT * FROM alta_trabajadores WHERE nom_usuario = '$us' AND pass = '$ps'";

echo "<br>".$consulta;
//1
$query = $bd->prepare($consulta);
//2
$query->execute();
//3
$rs = $query->fetchAll();

//imprime de forma de arreglo
echo "<pre>";//con pre todo se acomoda, sin el se vera todo de corrido
print_r($rs);


//contar filas
$filas = count($rs);


session_start();
$_SESSION["ses_nombre"] = $rs[0]["nom_usuario"];
$_SESSION["ses_correo"] = $rs[0]["correo"];
$_SESSION["ses_id"] = $rs[0]["nom_usuario"];



echo "<br>filas: ".$filas;
echo "<br>";
echo "<br>";

if($filas==1){

	//al ingresar nos manda a esta pagina
	header("location:../registroPHP1.php");
}else  {
	echo "Invalido";
	//nos regresa a la misma pagina
	header("location:alta_usuarios.php?error=1");


}
?>
