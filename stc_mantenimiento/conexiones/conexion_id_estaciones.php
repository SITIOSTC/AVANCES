<?php

	require("conexion_2.php");

	$idestacion  = $_POST['estacion'];
	$nom_linea2  = $_POST['elemento'];

	$queryEsta="SELECT id_estacion from estaciones where nombre_estacion = '$idestacion' AND nom_linea='$nom_linea2' ";
	$resultadoEsta = $conexion->query($queryEsta);

	while ($rowEsta = $resultadoEsta->fetch_assoc()) {
		$html .= "<option value= '".$rowEsta['id_estacion']."'>".$rowEsta['id_estacion']. "</option>";
	}

	echo $html;
?>