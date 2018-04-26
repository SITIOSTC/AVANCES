<?php
	header("Content-Type: text/html;charset=utf-8");
	require ('../../../../conexiones/conexion_2.php');
	
			$id_manual = $_POST['id_manual'];
            $titulo= $_POST['titulo'];
            $cod_manual= $_POST['codigo_manual'];
            $descri= $_POST['descripcion'];
            $nom_equipo= $_POST['nom_equipo'];
            $linea= $_POST['cbx_linea'];
            $id_estacion= $_POST['cbx_id_estacion'];
            $nom_estacion= $_POST['cbx_estacion'];
            $area= $_POST['areas'];
            //Carga la fecha del servidor por defecto asignandole una zona
            date_default_timezone_set('America/Mexico_City');
			$nueva_fecha = date("Y-m-d H:i:s");
            //$fecha_subida = $nueva_fecha;
            $fecha_actualizado= $nueva_fecha;

			$sql = "UPDATE manuales SET titulo='$titulo',codigo_manual='$cod_manual',descripcion='$descri',nom_equipo='$nom_equipo',linea='$linea',
					id_estacion='$id_estacion',nombre_estacion='$nom_estacion',area='$area',fecha_actualizado='$fecha_actualizado' WHERE id_manual='$id_manual'";

			$resultado = $conexion->query($sql);
			$id_insert = $id_manual;
	
	if($_FILES["archivo"]["error"]>0){
			echo '<script>alert("Datos actualizados correctamente.")</script> ';
			echo "<script>location.href='../index.php'</script>";
			return false;
		} else {
		
		//Se declaran los tipos de archivos que esta permitidos
		$permitidos = array("application/pdf","image/png","image/gif","image/pjpeg","image/jpeg");

		//Restringe el tamaño del archivo a subir
		//$limite_kb = 10000;
		
		//busca en el arreglo la extencion del archivo y se busca en la variable permitidos, y que no supere los 1042 MB
		//if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 10240){

		//Se verifica el tipo de archivo
		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"]){
			
			//La ruta donde se va a guardar el archivo asigando le su id del registro 
			$ruta = '../manuales/'.$id_insert.'/';
			//indica la ruta y el copiar el archivo
			$archivo = $ruta.$_FILES["archivo"]["name"];
			
				//si la carpeta no existe
				if(!file_exists($ruta)){
					//crea la carpeta
					mkdir($ruta);
				}

				//Si el archivo existe
				if(!file_exists($archivo)){
					
					//Actualiza el archivo moviendo el documento con un nombre temporal
					$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
						
						//Si el archivo es subido correctamente
						if($resultado){
							//Envia una alerta y redirecciona a la pagina principal
							echo '<script>alert("Manual guardardado correctamente.")</script> ';
							echo "<script>location.href='../index.php'</script>";
							return true;
						}
						//Si no es verdadero
						else {
							//Envia una alerta y redirecciona a la pagina modificar
							echo '<script>alert("Ocurrio un error al guardar el archivo")</script> ';
							echo "<script>location.href='modificar.php?id_manual=$id_insert'</script>";
							return false;
						}
				}
				//Si no es verdadero
				else {
					//Envia una alerta y redirecciona a la pagina modificar
					echo '<script>alert("El archivo ya existe. Elija otro por favor.")</script> ';
					echo "<script>location.href='modificar.php?id_manual=$id_insert'</script>";
					return false;
				}
		} 
		//Si no es verdadero
		else {
			//Envia una alerta y redirecciona a la pagina modificar
			echo '<script>alert("Archivo no permitido")</script> ';
			echo "<script>location.href='../modificar.php?id_manual=$id_insert'</script>";
			return false;
		}
		
	}
	
	
?>