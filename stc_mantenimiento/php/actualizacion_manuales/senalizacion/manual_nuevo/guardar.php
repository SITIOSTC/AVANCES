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
            $area= $_POST['area'];
            //Carga la fecha del servidor por defecto asignandole una zona
            date_default_timezone_set('America/Mexico_City');
			$nueva_fecha = date("Y-m-d H:i:s");
            //$fecha_subida = $nueva_fecha;
            $fecha_subida= $nueva_fecha;
            $fecha_actualizado= $nueva_fecha;
	
	



	
	//Si no se selecciona un archivo se envia un error
	if($_FILES["archivo"]["error"]>0){
		echo "Error al cargar archivo";	
	}
	else{
		//dentro del arreglo se indica las aplicaciones que son permitidas
		$permitidos = array("application/pdf","image/png","image/gif","image/pjpeg","image/jpeg");
		//Restringe el tamaño del archivo a subir
		//$limite_kb = 10000;
		
			//busca en el arreglo la extencion del archivo y se busca en la variable permitidos, y que no supere los 1042 MB
			//if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 10240){
			if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"]){



	//inserta los datos en la base de datos
	$sql = "INSERT INTO manuales (id_manual,titulo,codigo_manual,descripcion,nom_equipo,linea,id_estacion,
	nombre_estacion,area,fecha_subida,fecha_actualizado)
	VALUES ('$id_manual','$titulo','$cod_manual','$descri','$nom_equipo','$linea','$id_estacion',
	'$nom_estacion','$area','$fecha_subida','$fecha_actualizado')";
	//Almacenamos el valor de la ejecucion del query en una variable
	$resultado = $conexion->query($sql);
	$id_insert = $conexion->insert_id;



				//se crea una carpeta con el numero de "id" que vaya por cada manual que se suba
				$ruta = '../manuales/'.$id_insert.'/';
				//Se asigna el nombre a la carpeta con el id del manual
				$archivo = $ruta.$_FILES["archivo"]["name"];
				
				//Si la ruta no existe
				if(!file_exists($ruta)){
					//se crea la ruta (cada archivo que se suba va creando su carpeta)
					mkdir($ruta);
				}
				
				//Si existe ya el archivo
				if(!file_exists($archivo)){

					//Actualiza el archivo moviendo el documento con un nombre temporal
					$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
					
					//Si es verdadero
					if($resultado){
						//imprime un msj de archivo guardado
						echo '<script>alert("Manual guardardado correctamente.")</script> ';
						echo "<script>location.href='../index.php'</script>";
						return true;
					}//Si no es verdadero
					else {
						//Envia una alerta de error
						echo '<script>alert("Ocurrio un error al guardar el archivo")</script> ';
						//echo "<script>location.href='../index.php'</script>";
						return false;
					}
				}//Sino es verdadero imprime un msj
				else {
					//Envia una alerta y redirecciona a la pagina modificar
					echo '<script>alert("El archivo ya existe. Elija otro por favor.")</script> ';
					echo "<script>location.href='nuevo.php'</script>";
					return false;
				}
				
			}
			else {
				//Envia una alerta y redirecciona a la pagina modificar
				echo '<script>alert("Archivo no permitido")</script> ';
				echo "<script>location.href='nuevo.php'</script>";
				return false;
			}
		
		}
	
?>