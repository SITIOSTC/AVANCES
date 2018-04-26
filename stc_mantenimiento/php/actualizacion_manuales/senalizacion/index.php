
<html lang="es">
	<head>
        <title>Manuales: Señalización</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/funciones.js"></script>

	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">MANUALES DE SEÑALIZACIÓN L-12</h2>
			</div>
			
			<div class="row">
				<a href="manual_nuevo/nuevo.php">
                <input type="button" name="nuevo_manual" value="Nuevo Registro"></a>
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
                <td>Editar/Actualizar</td>
                <td>Eliminar</td>
            </tr>

        <?php
        include ('../../../conexiones/conexion_5_manuales.php');
        $db=new Conect_MySql();
            $sql = "SELECT * FROM manuales WHERE area = 'SEN L-12' ORDER BY titulo ASC";
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
                        $path = "manuales/". $datos['id_manual'];
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
                <td><a href= "manual_actualizacion/modificar.php?id_manual=<?php echo $datos['id_manual']?>"><button  type='submit'>Actualizar</button></a>
                 <td><a href= "manual_eliminacion/eliminar.php?id_manual=<?php echo $datos['id_manual']?>">
                    <input type="button" name="eliminar" value="Eliminar" onclick='return confirma_eliminacion()'/>
                </td>
            </tr>
                
          <?php  } ?>
        </table>
			</div>
		</div>	
		
	</body>
</html>	