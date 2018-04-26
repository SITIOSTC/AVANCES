
<html lang="es">
	<head>
        <title>Manuales: Mando Centralizado</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">MANUALES DE MANDO CENTRALIZADO L-12</h2>
			</div>
			
			
			<br>
			
			<div class="row table-responsive">
		<table  border=".5px" sTYLE="table-layout:fixed" style="width: 900px; text-align:center;">

            <tr>
                <td>Id Manual</td>
                <td>Título</td>
                <td>Código de Manual</td>
                <td>Descripción</td>
                <td>Nombre Del Equipo</td>
                <td>Línea</td>
                <td>Nombre Estación</td>
                <td>Área</td>
                <td>Fecha: Manual Subido</td>
                <td>Fecha: Ultima Actualización</td>
                <td>Visualizar</td>
            </tr>

        <?php
        include ('../../../../conexiones/conexion_5_manuales.php');
        $db=new Conect_MySql();
            $sql = "SELECT * FROM manuales WHERE area = 'MC L-12' ORDER BY titulo ASC";
            $query = $db->execute($sql);

            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['id_manual']; ?></td>
                <td><?php echo $datos['titulo']; ?></a></td>
                <td><?php echo $datos['codigo_manual']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['nom_equipo']; ?></td>
                <td><?php echo $datos['linea']; ?></td>
                <td><?php echo $datos['nombre_estacion']; ?></td>
                <td><?php echo $datos['area']; ?></td>
                <td><?php echo $datos['fecha_subida']; ?></td>
                <td><?php echo $datos['fecha_actualizado']; ?></td>
                <td>
                    <?php 
                        $path = "../../../actualizacion_manuales/mando-centralizado/manuales/". $datos['id_manual'];
                        if(file_exists($path)){
                            $directorio = opendir($path);
                            while ($archivo = readdir($directorio)){
                                if (!is_dir($archivo)){
                                    echo "<div data='".$path."/".$archivo."'>
                                        <a href='".$path."/".$archivo."' title='Ver Archivo'>
                                            <button type='button'>Ver Archivo</button>
                                        </a>";
                                }
                            }
                        }
                    ?>
                </td>
            </tr>
                
          <?php  } ?>
        </table>
			</div>
		</div>	
		
	</body>
</html>	