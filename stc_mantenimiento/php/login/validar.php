
<?php
session_start();
	require("../../conexiones/conexion_4.php");

	$username=$_POST['usuario'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de conexion_4
	$sql2=mysqli_query($mysqli,"SELECT * FROM administrador WHERE nom_usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['clave']){
			$_SESSION['id_administrador']=$f2['id_administrador'];
			$_SESSION['nom_administrador']=$f2['nom_administrador'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("Bienvenido administrador: '.$username.'")</script> ';
			echo "<script>location.href='menu_admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nom_usuario='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['clave']){
			$_SESSION['id_usuario']=$f['id_usuario'];
			$_SESSION['nom_usuario']=$f['nom_usuario'];
			$_SESSION['rol']=$f['rol'];

			echo '<script>alert("Bienvenido: '.$username.'")</script> ';
			echo "<script>location.href='menu_user.php'</script>";


		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../login.php'</script>";	

	}

?>