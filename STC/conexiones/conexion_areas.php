<?php

	include("conexion_2.php");

$sql="SELECT * from areas";
$result = $conexion->query($sql); //usamos la conexion para dar un resultado a la variable

if ($result->num_rows > 0){ //si la variable tiene al menos 1 fila entonces seguimos con el codigo
    $combobit="";
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $combobit .=" <option value='".$row['nombre_area']."'>".$row['nombre_area']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}
else{
    echo "No hubo resultados";
}
	$conexion->close(); //cerramos la conexión
?>
