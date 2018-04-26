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
	<script language="javascript"  src="../../../js/jquery-3.2.1.js"></script>

	<script type="text/javascript" src="js/funciones.js"></script>
  <body> 

	<div align="center">
		<form action="del-user.php" method="POST" enctype="multipart/form-data" name="formulario" id="formulario">
			<fieldset>
	  	 	<table border="1px" sTYLE="table-layout:fixed" style="width: 900px; text-align:center;" >
  	 			<tr>
					<td>No.Expediente</td>
					<td>Nombre(s)</td>
					<td>Apellidos</td>
					<td>Linea</td>
					<td>Estación</td>
					<td>ID Estación</td>
					<td>Area</td>
					<td>Categoria</td>
					<td>Correo</td>
					<td>ID Usuario</td>
					<td>Nom Usuario</td>
					<td>Clave</td>
					<td>Rol</td>
					<td>Eliminar</td>
				</tr>
		  	 		<?php
					//Incluye la conexión a la base de datos. (conexion_2)
					require ('../../../conexiones/conexion_2.php');
						//Se ejecuta la sentencia SQL a la BD de la tabla "manuales".
						$selecciona = "SELECT * FROM usuarios ORDER BY nom_trabajador ASC";
						/*BUSCA EN EL AREA ASIGNADA
						Ejecuta el query "$selecciona", y almacena en la variable "$resultado", todo lo obtenido*/
						$resultado=$conexion->query($selecciona);

						 if(mysqli_num_rows($resultado)>="1"){
        					echo "Registros encontrados";
						//Mientras la variable "$fila" sea igual a la variable "$resultado",
						//Obtiene una fila de resultado como un array asociativo.
						while ($fila = $resultado->fetch_assoc()):
						
					?>
					<tr>
						<td> <?php echo $fila ['no_expediente']?></td>
		  	 			<td> <?php echo $fila ['nom_trabajador']?></td>
		  	 			<td> <?php echo $fila ['apellidos_trabajador']?></td>
		  	 			<td> <?php echo $fila ['nom_linea']?></td>
		  	 			<td> <?php echo $fila ['nombre_estacion']?></td>
			  	 		<td> <?php echo $fila ['id_estacion']?></td>
			  	 		<td> <?php echo $fila ['nom_area']?></td>
		  	 			<td> <?php echo $fila ['categoria']?></td>
		  	 			<td> <?php echo $fila ['correo']?></td>
		  	 			<td> <?php echo $fila ['id_usuario']?></td>
		  	 			<td> <?php echo $fila ['nom_usuario']?></td>
		  	 			<td> <?php echo $fila ['clave']?></td>
		  	 			<td> <?php echo $fila ['rol']?></td>
		  	 			<td><input type= "checkbox" name="id_usuario[]" value="<?php echo $fila['id_usuario']?>"/></td>
		  	 		</tr>
				<?php endwhile;?>
				<?php 
					}
					else
				    	if(mysqli_num_rows($resultado)=="0"){
							echo "No se encontro ningun registro. <br>Ponga se en contacto con el administrador.";
				      	}
				?>


				<div>
					<table>
						<tr>
							<td>
								<input type="submit" name="eliminar" value="Eliminar" onclick='return confirma_eliminacion()'/>
							</td>
						</tr>
					</table>	
				</div>			
  	 	</table>
  	 </fieldset>
  	 </form>
  	 </div>


 




	<div>
		<a href="javascript:history.back().document.location.reload();">
			<button type="button">Regresar</button>
		</a>	
	</div>
</body> 
</html>