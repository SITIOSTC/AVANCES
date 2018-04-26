<!DOCTYPE html>
<?php
/*session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}*/
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mantenimiento PCL</title>
  </head>
	
	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="../../../../js/jquery-3.2.1.js"></script>
  	
  	<!--JavaScripts y JQuerys-->
	<script type="text/javascript" src="../js/funciones.js"></script>

  <body>
  		<div class="registro">
			<center>
				<form method="POST" name = "altas" id = "valida_pass" onSubmit="return valida()" action="registro_admin.php" >
					<table>

						<tr>
							<td>
								<!--ID usuario-->
								<input id = "id_admin" type="number" name="id_admin" 
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
								<input id = "nom_administrador" type="text" name="nom_admin" maxlength=20 
								autocomplete="off" placeholder="Nombre(s)" required>
							</td>
						</tr>

						<tr>
							<td>
								<!--Apellidos-->
								<input id = "apell_admin" type="text" name="apellidos_admin" maxlength=35 
								autocomplete="off" placeholder="Apellidos" required>
							</td>
						</tr>

						<tr>
							<td>
								<?php
									require ('../../../../conexiones/conexion_2.php');
								    
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
								autocomplete="off" value = "1" readonly="" required>
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
	   <!-- 
	    <script>
		//Ejecuta la función una vez cargada la página web (DOM-Document Object Model, Modelo de Objeto de Documento).
    	$(document).ready(function(){
    		//Función que detecta cuando el "select" hace el cambio de alguno de sus valores
        	$("#cbx_linea").change(function () {

        		//Remueve el contenido del select "cbx_id_estacion", cuando se regresa al select cbx_linea
        		$('#cbx_id_estacion').find('option').remove().end().append('<option value = "remueve_id_estacion"></option>').val('remueve_id_estacion');

        		//Captura la selección echa
            	$("#cbx_linea option:selected").each(function () {
	                //Se almacena en una id "nom_linea"
	                nom_linea = $(this).val();
	                	//Se llama al script "conexion_estaciones", mandando los parametros de la id
                        $.post("../conexiones/conexion_estaciones.php", { nom_linea: nom_linea }, function(data){
                        	//Regresa el html cuando cambia el select "cbx_id_estacion"
                            $("#cbx_estacion").html(data);
					});
				});
			})
		});
		$(document).ready(function(){
			$("#cbx_estacion").change(function () {
            	$("#cbx_estacion option:selected").each(function () {
	            	estacion = $(this).val();
	            	var elemento = $('#cbx_linea').val();
                        $.post("../conexiones/conexion_id_estaciones.php", { estacion: estacion, elemento: elemento }, function(data){
                            $("#cbx_id_estacion").html(data);
					});
				});
			})
		});

		$(document).ready(function(){
        	$("#cbx_linea").change(function () {
            	$("#cbx_linea option:selected").each(function () {
	            	area = $(this).val();
                        $.post("../conexiones/conexion_areas.php", { area: area }, function(data){
                            $("#areas").html(data);
					});
				});
			})
		});
        </script>-->
</html>