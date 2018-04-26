<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../../../../js/jquery-3.2.1.js"></script>
		<script src="../js/funciones.js"></script>	
	</head>
	
	<body>
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
		<div align="center">
			<form method="POST" action="guardar.php" enctype="multipart/form-data" onSubmit="return verif()" autocomplete="off">
				<table >
					<tr>
						<td><label>Archivo</label></td>
						<td><input type="file" id="archivo" name="archivo" accept="application/pdf,image/*" onchange="return verifica_archivo()"/></td>
					</tr>

					<tr>
						<td><label>ID Manual</label></td>
							<td><input type="hidden" id="id_manual" name="id_manual" placeholder="id_manual" value="0" required/></td>
						</td>
					</tr>

					<tr>
						<td><label>Titulo</label></td>
						<td><input type="text" id="titulo" name="titulo" placeholder="Titulo" required/></td>
					</tr>

					<tr>
						<td><label>Codigo manual</label></td>
						<td><input type="text" id="codigo_manual" name="codigo_manual" placeholder="codigo_manual" required/></td>
					</tr>

					<tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion" id="descripcion" placeholder="(Opcional)"></textarea></td>
					</tr>

					<tr>
						<td><label>Nombre Del equipo</label></td>
						<td><input type="text" id="nom_equipo" name="nom_equipo" placeholder="(Opcional)"/></td>
					</tr>

					<tr>
						<td><label>Linea</label></td>
						<td>
								<?php
									require ('../../../../conexiones/conexion_2.php');
									$query = "SELECT nom_linea FROM lineas WHERE nom_linea = 'L-12' ";
									$resultado=$conexion->query($query);
								?>
								<select name="cbx_linea" id="cbx_linea" required>
									<option value=""  selected disabled="true">-Seleccione Linea-</option>
										<?php while($row = $resultado->fetch_assoc()) { ?>
											<option value="<?php echo $row['nom_linea']; ?>">
												<?php echo $row['nom_linea']; ?> 
											</option>
										<?php } ?>
								</select>
						</td>
					</tr>

					<tr>
						<td><label>Estacion</label></td>
						<td><select  name="cbx_estacion" id="cbx_estacion" required>
								<option value="" selected disabled="true">-Seleccione Estación-</option>
							</select>
						</td>
					</tr>

					<tr>
						<td><label>Id estacion</label></td>
						<td><select name="cbx_id_estacion" id="cbx_id_estacion"></select></td>
					</tr>

					<tr>
						<td><label>Area</label></td>
						<td><input type="text" id="area" name="area" placeholder="area" value="MC L-12" readonly="" required/></td>
					</tr>

					<tr>
						<td>
							<input type="submit" name="guardar" id="id_guardar" value="Guardar" style='color: #00E676;'/>
						</td>
					</tr>
					<tr>
						<td><!--Checar donde poner lo-->
							<a href="../index.php">
								<input type="button" name="guardar" id="id_guardar" value="Cancelar" style='color: #00B0FF;' />
							</a>
						</td>
					</tr>

				</table>
			</form>
			<div id="muestra_archivo"></div>
		</div>
		</div>
	</body>
</html>