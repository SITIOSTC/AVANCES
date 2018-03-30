<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mantenimiento PCL</title>
  </head>
	
	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="../js/jquery-3.2.1.js"></script>
  	
  	<!--JavaScripts y JQuerys-->
	<script type="text/javascript" src="../js/funciones.js"></script>

  <body>
  		<div class="registro">
			<center>
				<form method="POST" name = "altas" id = "valida_pass" onSubmit="return valida()" action="../conexiones/registro.php" >
					<table>

						<tr>
							<td>
								<!--ID usuario-->
								<input id = "id_usuario" type="number" name="id_usuario" 
								autocomplete="off" value = "0" readonly="" required>
							</td>
						</tr>

						<tr>
							<td>
								<!--No. Expediente-->
								<input id = "expe" type="text" name="expediente" maxlength=15 
								autocomplete="off" placeholder="No. De Expediente" required>
							</td>
						</tr>

						<tr>
							<td>
								<!--Nombre(s)-->
								<input id = "name" type="text" name="nombre" maxlength=20 
								autocomplete="off" placeholder="Nombre(s)" required>
							</td>
						</tr>

						<tr>
							<td>
								<!--Apellidos-->
								<input id = "apell" type="text" name="apellidos" maxlength=35 
								autocomplete="off" placeholder="Apellidos" required>
							</td>
						</tr>

						<tr>
							<td>
								<?php
									require ('../conexiones/conexion_2.php');
								    
									$query = "SELECT nom_linea FROM lineas";
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
							<td>
								<select name="cbx_estacion" id="cbx_estacion" required>
									<option value="" selected disabled="true">-Seleccione Estación-</option>
								</select>
							</td>
						</tr>

						<tr>
							<td> <!--style="visibility:hidden"-->
								<select name="cbx_id_estacion" id="cbx_id_estacion"></select>
							</td>
						</tr>
						<tr>
							<td>
								<select name="areas" id = "areas" required>
									<option value=""  selected disabled="true">-Seleccione Area-</option>
								</select>
							</td>
						</tr>

						<!--Categoria-->
						<tr>
							<td>
								<input id = "catego" type="text" name="categoria" maxlength=35 
								autocomplete="off" placeholder="Categoria" required>
							</td>
						</tr>

								
							</td>
						</tr>

						<tr>
							<td>
								<input id = "correo" type="e-mail" name="correo" 
								autocomplete="off" placeholder="Correo" maxlength=60 required>
							</td>
						</tr>

						<tr>
							<td>
								<input id = "nom_usuario" type="text" name="nom_usuario" 
								autocomplete="off" placeholder="Nombre de Usuario" maxlength=20 required>
							</td>
						</tr>

						<tr>
							<td>
								<input type="password" id="pass" name="pass" 
								autocomplete="off" placeholder="Contraseña" maxlength=12 required>
							</td>
						</tr>

						<tr>
							<td>
								<input type="password" id="pass1" name="pass1" 
								autocomplete="off" placeholder="Confirmar contraseña" maxlength=12 required>
							</td>
						</tr>

						<tr>
							<td>
								<!--ID usuario-->
								<input id = "id_rol" type="number" name="rol" 
								autocomplete="off" value = "2" readonly="" required>
							</td>
						</tr>

						<tr>
							<td>
								<input id = "enviar" type="submit" value="Registrarse"/>
								<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
								<a href="javascript:history.back()"> 
									<button type="button">Cancelar</button>
								</a>
							</td>
						</tr>
					</table>				
				</form>
			</center>
		</div>

		<div>
			<a href="javascript:history.back().document.location.reload();">
				<button type="button">Regresar</button>
			</a>	
		</div>
	</body>
	    
	    <script>

        </script>
</html>