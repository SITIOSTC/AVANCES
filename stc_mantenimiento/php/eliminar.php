<?php


session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}


	EliminarRegistro($_GET["id_usuario"]);

	function EliminarRegistro($id_usuario){
			
			//Conexión a la BD
			require ('../conexiones/conexion_0.php');

		$sentencia=mysqli_query($link,"DELETE FROM usuarios WHERE id_usuario ='".$id_usuario."' ");
	}

?>

<script type="text/javascript">
	alert("Registro eliminado correctamente.");
	window.location.href='baja_usuarios.php';
</script>

?>