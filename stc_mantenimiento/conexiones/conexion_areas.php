<?php

	require("conexion_2.php");

	$id_area  = $_POST['area'];

	$queryArea="SELECT nom_area from areas where nombre_linea = '$id_area'";
	$resultadoArea = $conexion->query($queryArea);

	$html .= "<option value='0' selected disabled='true'>-Selecione Area-</option>";

	while ($rowArea = $resultadoArea->fetch_assoc()) {
		$html .= "<option value='".$rowArea['nom_area']."'>".$rowArea['nom_area']."</option>";
	}

	echo $html;
?>
