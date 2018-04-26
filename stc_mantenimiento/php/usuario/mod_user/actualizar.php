<?php

	$consulta=ConsultarProducto($_GET['id_usuario']);

  function ConsultarProducto($id_usuario){

	require ('../../../conexiones/conexion_0.php');

 	$sentencia = mysqli_query($link, "SELECT * FROM  usuarios Where id_usuario = '".$id_usuario."' ");
	$filas= mysqli_fetch_array($sentencia);

    return [
    	$filas['id_usuario'],
	    $filas['no_expediente'],
	    $filas['nom_trabajador'],
	    $filas['apellidos_trabajador'],
	    $filas['categoria'],
	    $filas['correo'],
	    $filas['nom_usuario'],
    ];
}
?>


<!DOCTYPE html>
<?php/*
session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}*/
?>
<html>
	<head>
		<title>Actualizar</title>
	</head>
<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="../../../js/jquery-3.2.1.js"></script>
  	
  	<!--JavaScripts y JQuerys-->
	<script type="text/javascript" src="../js/funciones.js"></script>

	<body>

		<div id= "actualiza" align="center">
			<span> <h1>Actualizar Datos</h1> </span>
			<form action="act_datos_user.php" method="POST">

				<label>ID Usuario: </label>
				<input id = "id_usuario" type="number" name="id_usuario"
								autocomplete="off" placeholder="ID Usuario" 
								value="<?php echo $consulta[0] ?>" readonly="" required><br>
				<label>NO Expediente: </label>
				<input id = "expe" type="text" name="expediente" maxlength=15 
								autocomplete="off" placeholder="No. De Expediente" 
								value="<?php echo $consulta[1] ?>" required><br>
				<label>Nombre: </label>
				<input id = "name" type="text" name="nombre" maxlength=20 
								autocomplete="off" placeholder="Nombre(s)" 
								value="<?php echo $consulta[2] ?>" required><br>
				<label>Apellidos: </label>
				<input id = "apell" type="text" name="apellidos" maxlength=35 
								autocomplete="off" placeholder="Apellidos" 
								value="<?php echo $consulta[3] ?>" required><br>
				
<!--selected disabled="true"-->
				<label>Categoria: </label>
				<input id = "catego" type="text" name="categoria" maxlength=35 
								autocomplete="off" placeholder="Categoria" 
								value="<?php echo $consulta[4] ?>" required><br>

				<label>Correo: </label>
				<input id = "correo" type="e-mail" name="correo" 
								autocomplete="off" placeholder="Correo" maxlength=60 
								value="<?php echo $consulta[5] ?>" required><br>

				<label>Nombre de Usuario: </label>
				<input id = "nom_usuario" type="text" name="nom_usuario" 
								autocomplete="off" placeholder="Nombre de Usuario" maxlength=20 
								value="<?php echo $consulta[6] ?>" required><br>

				<button type="submit">Actualizar</button>
				
				<a href="javascript:history.back().document.location.reload();">
					<button type="button">Cancelar</button>
				</a>

				<!--
				OTRAS OPCIONES
				<input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
				<input type="button" name="Cancelar" value="Cancelar" onClick="location.href='baja_usuarios.php'">
				<a href="javascript:history.back()"> Volver Atrás</a>
				-->


			</form>

		</div>

	</body>

</html>