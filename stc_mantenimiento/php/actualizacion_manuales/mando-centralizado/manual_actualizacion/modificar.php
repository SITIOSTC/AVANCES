<?php
	require ('../../../../conexiones/conexion_2.php');
	
	$id_manual = $_GET['id_manual'];
	
	$sql = "SELECT * FROM manuales WHERE id_manual = '$id_manual'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../../../../js/jquery-3.2.1.js"></script>
		<script src="../js/funciones.js"></script>
	</head>
	
	<body>
			<div>
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form method="POST" action="update.php" enctype="multipart/form-data" autocomplete="off">
				
				<table border="1">
			
			<tr>
				<td><label>Id manual</label></td>
				<td><input type="hidden" id="id_manual" name="id_manual" value="<?php echo $row['id_manual']; ?>" /></td>
			</tr>

			<tr>
				<td><label>Título</label></td>
				<td><input type="text" id="titulo" name="titulo" placeholder="Título" value="<?php echo $row['titulo']; ?>" required></td>
			</tr>

			<tr>
				<td><label>Código de manual</label></td>
				<td><input type="text" id="codigo_manual" name="codigo_manual" placeholder="Código de manual" value="<?php echo $row['codigo_manual']; ?>" required></td>
			</tr>

			<tr>
				<td><label>Descripción</label></td>
				<td><textarea name="descripcion" id="descripcion" placeholder="(Opcional)"><?php echo $row['descripcion']; ?></textarea></td>
			</tr>

			<tr>
				<td><label>Nombre del equipo</label>
				<td><input type="text" id="nom_equipo" name="nom_equipo" placeholder="Nombre del equipo" value="<?php echo $row['nom_equipo']; ?>"></td>
			</tr>

			<tr>
				<td><label>Linea</label></td>
				<td>
				<?php
					require ('../../../../conexiones/conexion_2.php');  
						$query = "SELECT nom_linea FROM lineas WHERE nom_linea = 'L-12' ";
						$res=$conexion->query($query);
				?>
				<select name="cbx_linea" id="cbx_linea" required>
					<option value="<?php echo $row['linea']; ?>"><?php echo $row['linea']; ?></option>
						<?php while($row1 = $res->fetch_assoc()) { ?>
							<option value="<?php echo $row1['nom_linea']; ?>"> 
								<?php echo $row1['nom_linea']; ?>
							</option>
						<?php }?>
				</select>
				</td>
			</tr>

			<tr>
				<td><label>Id estacion</label></td>
				<td><select name="cbx_id_estacion" id="cbx_id_estacion" required>
						<option value="<?php echo $row['id_estacion']; ?>"><?php echo $row['id_estacion']; ?></option>
					</select>
				</td>
			</tr>

			<tr>
				<td><label>Nombre de estación</label></td>
				<td><select name="cbx_estacion" id="cbx_estacion" required>
						<option value="<?php echo $row['nombre_estacion']; ?>"><?php echo $row['nombre_estacion']; ?></option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td><label>Área</label></td>
				<td><input type="text" id="areas" name="areas" placeholder="Área" value="<?php echo $row['area']; ?>" readonly=""></td>
			</tr>

			<tr>			
				<td><label>Archivo</label></td>
				<td><input type="file" id="archivo" 
					name="archivo" accept="application/pdf,image/*" onchange="return verifica_archivo()"/>
					<!--<input type="file" id="archivo" name="archivo" accept="application/msexcel,application/msword,application/pdf,application/rtf,image/*">-->
				</td>
			</tr>		


							<?php 
								$path = "../manuales/".$id_manual;
								if(file_exists($path)){
									$directorio = opendir($path);
									while ($archivo = readdir($directorio)){
										if (!is_dir($archivo)){
											echo "<tr>
													<td>
														<div data='".$path."/".$archivo."'>
															<a href='#' class='delete'>
																<button type='button' style='color: #FF0000;'><b>Eliminar</b></button>
															</a>
													</td>";

											  echo "<td><label><b>Nombre:</b> </br>$archivo</label></br>
											  			<a href='".$path."/".$archivo."'>
															<button type='button' style='color: #E65100;'><b>Ver Archivo</b></button>
														</a>
														</div>
													</td>
												 </tr>";
											echo "
											<tr><td></br><label><b>Archivo actual:</b></label></td>
											</tr>
											<td></td><td><iframe src='../manuales/$id_manual/$archivo' width='700' height='250' /></iframe></td>
											</tr>";

										}
									}
								}
								
							?>

				
					<tr>
						<td>
							<input type="submit" name="guardar" id="id_guardar" value="Guardar" style='color: #00E676;' />
						</td>
					</tr>
					<tr>
						<td><!--Checar donde poner lo-->
							<a href="../index.php">
								<input type="button" name="guardar" id="id_guardar" value="Cancelar" style='color: #00B0FF;' />
							</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><div id="muestra_archivo"></div></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>