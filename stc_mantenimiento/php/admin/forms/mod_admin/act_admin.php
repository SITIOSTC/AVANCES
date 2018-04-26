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
    <meta charset="utf-8">
    <style media="screen">
        body {
        position: relative;
        }
    </style>
    <title>Actualización de datos</title>
  </head>
	
	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="../../../../js/jquery-3.2.1.js"></script>

	<script type="text/javascript" src="../../js/funciones.js"></script>


  <body> 

  	 <div align="center" id = "tabla_elimna_registros">
  	 	<table border="1px" sTYLE="table-layout:fixed" style="width: 900px; text-align:center;" >
  	 		<?php
			//Incluye la conexión a la base de datos. (conexion_2)
			require ('../../../../conexiones/conexion_2.php');

				//Se ejecuta la sentencia SQL a la BD de la tabla "manuales".
				$selecciona = "SELECT * FROM administrador ORDER BY nom_administrador ASC";
				/*BUSCA EN EL AREA ASIGNADA
				$query = "SELECT * FROM manuales WHERE area = 'MC L-12'";*/
				//Ejecuta el query "$selecciona", y almacena en la variable "$resultado", todo lo obtenido
				$resultado=$conexion->query($selecciona);

			//Si se obtiene un valor en la variable "$resultado"
			if($resultado){

				//titulos de la tabla
				echo"<td>"; echo "No. Expediente"; echo "</td>";
				echo"<td>"; echo "Nombre(s)"; echo "</td>";
				echo"<td>"; echo "Apellidos"; echo "</td>";
				echo"<td>"; echo "Linea"; echo "</td>";
				echo"<td>"; echo "Estación"; echo "</td>";
				echo"<td>"; echo "ID Estación"; echo "</td>";
				echo"<td>"; echo "Area"; echo "</td>";
				echo"<td>"; echo "Categoria"; echo "</td>";
				echo"<td>"; echo "Correo"; echo "</td>";
				echo"<td>"; echo "ID Usuario"; echo "</td>";
				echo"<td>"; echo "nom_usuario"; echo "</td>";
				echo"<td>"; echo "Clave"; echo "</td>";
				echo"<td>"; echo "Rol"; echo "</td>";
				echo"<td>"; echo "Editar"; echo "</td>";
				echo"<td>"; echo "Eliminar"; echo "</td>";
				//Mientras la variable "$fila" sea igual a la variable "$resultado",
				//Obtiene una fila de resultado como un array asociativo.
				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
						echo"<td>"; echo $fila ['no_expediente']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['nom_administrador']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['apellidos_administrador']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['nom_linea']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['nom_estacion']; echo "</td>";
			  	 		echo"<td>"; echo $fila ['id_estacion']; echo "</td>";
			  	 		echo"<td>"; echo $fila ['nom_area']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['categoria']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['correo']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['id_administrador']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['nom_usuario']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['clave']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['rol']; echo "</td>";

		  	 			echo "<td> 
		  	 					<a href= 'actualizar.php?id_administrador=".$fila['id_administrador']." '>
		  	 						<button type='submit'>Actualizar</button>
		  	 					</a> 
		  	 				 </td>";		  	 				

						echo "<td> 
								<a href='eliminar.php?id_administrador=".$fila['id_administrador']."' onclick='return Confirmacion()'>
									<button type = 'submit'>Eliminar</button>
								</a>
							</td>";

		  	 		echo "</tr>";
				}
			}
		?>
  	 	</table>
  	 </div>
	
	<div>
		<a href="javascript:history.back().document.location.reload();">
			<button type="button">Regresar</button>
		</a>	
	</div>
</body> 
</html>