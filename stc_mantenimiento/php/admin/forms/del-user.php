<?php
/*

session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}*/
	require ('../../../conexiones/conexion_2.php');

	if(@$_POST['eliminar']){

		foreach ($_POST['id_usuario'] as $id) {
			$sentencia=mysqli_query($conexion,"DELETE FROM usuarios WHERE id_usuario='".$id."' ");
		}
		//header('Location: eliminar.php');

	}
?>

<script type="text/javascript">
	alert("Registro(s) eliminado(s) correctamente.");
	window.location.href='eliminar_usuarios.php';
</script>

