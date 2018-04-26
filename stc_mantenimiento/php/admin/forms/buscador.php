<?php  

	//Incluye la conexión a la base de datos. (conexion_2)
	require ('../../../conexiones/conexion_2.php');

		//Se ejecuta la sentencia SQL a la BD de la tabla "manuales".
		$selecciona = "SELECT * FROM manuales ORDER BY titulo ASC";
		/*BUSCA EN EL AREA ASIGNADA
		$query = "SELECT * FROM manuales WHERE area = 'MC L-12'";*/
		//Ejecuta el query "$selecciona", y almacena en la variable "$resultado", todo lo obtenido
		$resultado=$conexion->query($selecciona);
		//Declaración de la variable "array"
		$array = array();

	//Si se obtiene un valor en la variable "$resultado"
	if($resultado){
		//Mientras la variable "$fila" sea igual a la variable "$resultado",
		//Obtiene una fila de resultado como un array asociativo.
		while ($fila = $resultado->fetch_assoc()) {
			echo mb_convert_encoding($fila['titulo'],'UTF-8'),'<br/>';
			//Almacena en la variable "$titulo" el resultado obtenido por la variable "$fila", con un formato de codificion de caracteres.
		  	$titulo = mb_convert_encoding($fila['titulo'],'UTF-8');
		  	//Inserta uno o más elementos al final del array ($titulo).
			array_push($array, $titulo);
		}
	}
	//Imprime el array en formato "json"
	json_encode($array);

?>

<!DOCTYPE html>

<?php
/*session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}*/
?>
<html>
<head>
	<title>Buscador STC</title>
	<!--Estilos jquery-ui para el efecto del buscador-->
	<link rel="stylesheet" href="../../../css/jquery-ui.min.css">
	<!--Scripts de jquery y jquery-ui-->
	<script src="../../../js/jquery-1.12.1.min.js"></script>
	<script src="../../../js/jquery-ui.js"></script>

<!--Script que ejecuta la función autocomplete (autocompletar)-->
	<script>
			//Ejecuta la función una vez cargada la página web (DOM-Document Object Model, Modelo de Objeto de Documento).
			$(document).ready(function(){
				//Recibe e imprime el arreglo obtenido en formato "json".
				var busqueda = <?= json_encode($array) ?>
			//Se llama desde JQ el "id" del input.
			//La funcion "autocomplete" es un funcion de "jquery-ui", encargada de completar el buscador
			$('#buscar').autocomplete({
				//Recive los parametros enviados de la variable "busqueda"
				source : busqueda
			});
		});
	</script>

</head>
<body>
		<!--Salto de linea-->
		</br>
		<!--Formulario-->
		<form action="buscador.php" method="POST">
			<!--Captura de texto a buscar-->
			<input type="text" name="buscar" id="buscar" value="" placeholder="Buscar..." maxlength="30" autocomplete="off" required/>
			<!--Botón-->
			<input type="submit" value="Buscar" />
		</form>
		<!--Salto de linea-->
		</br>
	<div>
		<a href="javascript:history.back().document.location.reload();">
			<button type="button">Regresar</button>
		</a>	
	</div>
</body>
</html>

<?php
	//Incluye la conexión a la base de datos. (conexion_3)
	require ('../../../conexiones/conexion_3.php');
	//Se recorre lo que es mandado desde el form
	if (isset($_POST['buscar'])) {
		//Se instancia la conexion con la base de datos
		$db = new Conexion();
		//Se instancia el valor recibido desde el método POST
		$busca = $db->real_escape_string($_POST['buscar']);
		//Se ejecuta la sentencia SQL a la base de datos utilizando la instalacia mandada desde el form
		$sql = $db->query("SELECT * FROM manuales WHERE titulo LIKE '$busca%' ORDER BY titulo ASC LIMIT 3");
		/*BUSCA SOLO EN EL AREA ASIGNADA
		$sql = $db->query("SELECT * FROM manuales WHERE titulo LIKE '%$busca%' AND area = 'MC L-12' ;");*/
		
			//Si el resultado de la fila es mayor a 0
			if ($db->rows($sql)>0){
				//Mientras el valor de la variable "$manual" sea igual al arreglo "recorrer($sql)".
				while ($manual = $db->recorrer($sql)) {
					//Imprime los valores de la base de datos.
					echo '<b>ID: </b>', $manual['id_manual'],
						 '<b> | Titulo: </b>', $manual['titulo'], 
						 '<b> | Codigo Manual: </b>', $manual['codigo_manual'], 
						 '<b> | Descripción: </b>', $manual['descripcion'], 
						 '<b> | Area: </b>',$manual['area'],'<br/>';
				}
			}
			//Sino
			else {
				//Imprime el mensaje de: "No se encontraron resultados para: "+ la varibale "$busca".
				echo '<br/>','No se encontraron resultados para: ','<b>',$busca,'<b/>';
			}
	}
	//Sino imprime un mensaje ''.
	else{
		echo '';
	}
?>