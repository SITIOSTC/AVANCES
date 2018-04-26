<?php
/*

session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}*/


	EliminarRegistro($_GET["id_administrador"]);

	function EliminarRegistro($id_admin){
			
			//Conexión a la BD
			require ('../../../../conexiones/conexion_0.php');

		$sentencia=mysqli_query($link,"DELETE FROM administrador WHERE id_administrador ='".$id_admin."' ");
	}

?>

<script type="text/javascript">
	alert("Registro eliminado correctamente.");
	window.location.href='act_admin.php';
</script>

?>