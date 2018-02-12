<?php

	//Incluye la conexión a la base de datos. (conexion_2)
	require("conexion_2.php");

	//Se instancia la varible "$id_linea", que recibe los datos mandados desde el formulario por el método "POST"
	$id_linea  = $_POST['nom_linea'];

	//Se ejecuta la sentencia SQL a la base de datos utilizando la instalacia mandada desde la variable "$id_linea"
	$queryEsta="SELECT id_estacion,nombre_estacion,nom_linea from estaciones where nom_linea = '$id_linea'";
	$resultadoEsta = $conexion->query($queryEsta);

	//Se instancia una varible con contenido HTML.
	$html .= "<option value='0' selected disabled='true'>-Selecione Estación-</option>";

	//Mientras la variable "$rowEsta" sea igual a la variable "$resultadoEsta",
	//Obtiene una fila de resultado como un array asociativo.
	while ($rowEsta = $resultadoEsta->fetch_assoc()) {
		//Imprime el valor de la variable "$rowEsta" en la fila "nombre_estacion" de la base de datos.
		$html .= "<option value= '".$rowEsta['nombre_estacion']."'>".$rowEsta['nombre_estacion']. "</option>";
	}

	//Imprime los valores de la variable "$html"
	echo $html;
?>