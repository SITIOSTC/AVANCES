<?php


/*

echo " 
<p>Los datos han sido actualizados con exito.</p> 

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 

<p><a href='javascript:history.go(-2)'>INICIO</a></p>"; 


*/
/*
session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}*/

	ActualizarRegistro(
		$_POST["expediente"],
		$_POST["nombre"],
		$_POST["apellidos"],
		$_POST["categoria"],
		$_POST["correo"],
		$_POST["nom_usuario"],
		$_POST["id_usuario"]);

	function ActualizarRegistro($no_expe,$nom_trab,$ap_trab,$categ,$correo,$nom_usuario,$id_usuario){
			
			//Conexión a la BD
			require ('../../../conexiones/conexion_0.php');

		$sentencia=mysqli_query($link,"UPDATE usuarios SET 
										no_expediente='".$no_expe."',
										nom_trabajador= '".$nom_trab."', 
										apellidos_trabajador='".$ap_trab."',
										categoria = '".$categ."', 
										correo = '".$correo."', 
										nom_usuario = '".$nom_usuario."'

										WHERE id_usuario='".$id_usuario."' ");

	}
?>

<script type="text/javascript">
	alert("Datos actualizados correctamente.");
	window.location.href='act_user.php';
</script>
