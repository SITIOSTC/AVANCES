<?php
	
	require ('../../../../conexiones/conexion_2.php');

	$id_manual = $_GET['id_manual'];
	
	$sql = "DELETE FROM manuales WHERE id_manual = '$id_manual'";
	$resultado = $conexion->query($sql);
	
	eliminarDir('../manuales/'.$id_manual);
	
	function eliminarDir($carpeta)
	{
		foreach(glob($carpeta . "/*") as $archivos_carpeta)
		{
			if (is_dir($archivos_carpeta))
			{
				eliminarDir($archivos_carpeta);
			}
			else
			{
				echo '<script>alert("Registro eliminado correctamente.")</script> ';
				echo "<script>location.href='../index.php'</script>";
				unlink($archivos_carpeta);
			}
		}
		echo '<script>alert("El registro no contenía ningún archivo.")</script> ';
		echo "<script>location.href='../index.php'</script>";
		rmdir($carpeta);
	}
	
?>
