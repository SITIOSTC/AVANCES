
<?php

	header("Content-Type: text/html;charset=utf-8");

	include("conexion_2.php");

	//declaracion de variables, que obtendran los valores del html por el metodo "_POST"

	$id_usuario = $_POST["id_usuario"];
	$no_expediente = $_POST["expediente"];
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$linea = $_POST["cbx_linea"];
	$estacion = $_POST["cbx_estacion"];
	$id_estacion = $_POST["cbx_id_estacion"];
	$areas = $_POST["areas"];
	$categoria = $_POST["categoria"];
	$correo = $_POST["correo"];
	$nom_usuario = $_POST["nom_usuario"];
	$pass =password_hash($_POST['pass'], PASSWORD_BCRYPT, array("cost"=>12));
	$rol = $_POST["rol"];

		$selecciona = "SELECT * FROM usuarios WHERE nom_usuario = '".$nom_usuario."'";
		/*BUSCA EN EL AREA ASIGNADA
		Ejecuta el query "$selecciona", y almacena en la variable "$resultado", todo lo obtenido*/
		$resultado=$conexion->query($selecciona);
                                    
		$contar = mysqli_num_rows($resultado);

		 if($contar==0){
                  
			$Consulta = "INSERT INTO usuarios (id_usuario, no_expediente, nom_trabajador, apellidos_trabajador, nom_linea, nombre_estacion, id_estacion, nom_area, categoria, correo, nom_usuario, clave, rol)
				VALUES ('".$id_usuario."','".$no_expediente."','".$nombre."','".$apellidos."','".$linea."',
				'".$estacion."','".$id_estacion."','".$areas."','".$categoria."','".$correo."','".$nom_usuario."','".$pass."','".$rol."')" or die (mysql_error());
			
			$conexion->query($Consulta);
			echo '<script>alert("El usuario: '.$nom_usuario.' ha sido registrado correctamente.")</script> ';
			echo "<script>location.href='../php/admin/forms/alta_usuarios.php'</script>";

            //echo 1;
            }
            else{
            	echo '<script>alert("El usuario: '.$nom_usuario.' ya existe, elija otro por favor.")</script> ';
            	echo "<script>location.href='../php/admin/forms/alta_usuarios.php'</script>";
            	 //echo 0;
            }
	?>