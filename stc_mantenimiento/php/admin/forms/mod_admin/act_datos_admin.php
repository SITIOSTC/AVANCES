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
		$_POST["no_expediente"],
		$_POST["nom_administrador"],
		$_POST["apellidos_administrador"],
		$_POST["cbx_linea"],
		$_POST["cbx_estacion"],
		$_POST["cbx_id_estacion"],
		$_POST["areas"],
		$_POST["categoria"],
		$_POST["correo"],
		$_POST["nom_usuario"],
		password_hash($_POST['pass'], PASSWORD_BCRYPT, array("cost"=>12)),
		$_POST["rol"],
		$_POST["id_admin"]);

	function ActualizarRegistro($no_expe,$nom_admin,$ap_admin,$nom_lin,$nom_esta,$id_esta,$nom_area,$categ,$correo,$nom_usuario,
		$clave,$rol,$id_admin){
			
			//Conexión a la BD
			require ('../../../../conexiones/conexion_0.php');

		$sentencia=mysqli_query($link,"UPDATE administrador SET 
										no_expediente='".$no_expe."',
										nom_administrador= '".$nom_admin."', 
										apellidos_administrador='".$ap_admin."',
										nom_linea = '".$nom_lin."', nom_estacion = '".$nom_esta."', 
										id_estacion = '".$id_esta."', nom_area = '".$nom_area."', 
										categoria = '".$categ."', 
										correo = '".$correo."', 
										nom_usuario = '".$nom_usuario."',
										clave = '".$clave."',
										rol = '".$rol."'

										WHERE id_administrador='".$id_admin."' ");
	}
?>

<script type="text/javascript">
	alert("Datos actualizados correctamente.");
	window.location.href='act_admin.php';
</script>
