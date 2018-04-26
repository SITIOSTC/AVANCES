	<?php

$host="localhost";
$basedatos="bd_stc_pcl";
$user="root";
$pass="gears_of-war-3";
$puerto="3306";

//try catch para saber si hay algun error
try{
    
    $bd = new PDO(
        "mysql:host=".$host.";dbname=".$basedatos.";port=".$puerto, $user, $pass);
    
    //atributo para arrojar errores
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // datos con acentos permitidos osea caracteres especiales
     $bd->exec("set names utf8");

    //echo "conexion lista";

}catch(PDOException $e){
    
echo "<br>Ocurrio un error: -> ".$e->getMessage();
    
}//catch

?>