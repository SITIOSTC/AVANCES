<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
        body {
        position: relative;
        }
    </style>
    <title>Mantenimiento PCL</title>
  </head>
	
	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="../js/jquery-3.2.1.js"></script>
  	
  	<!--JavaScripts y JQuerys-->
	<script type="text/javascript" src="../js/valida_pass.js"></script>

  <body>
  		<dir class="registro">
			<center>
				<form method="POST" name = "altas" id = "valida_pass" onSubmit="return valida()" action="../conexiones/registro.php" >
					<table>
						<tr>
							<td>
								<!--No. Expediente-->
								<input class="acceso" id = "expe" type="text" name="expediente" maxlength=15 
								autocomplete="off" placeholder="No. De Expediente" required>
							</td>
						</tr>

						<tr>
							<td>
								<!--Nombre(s)-->
								<input class="acceso" id = "name" type="text" name="nombre" maxlength=20 
								autocomplete="off" placeholder="Nombre(s)" required>
							</td>
						</tr>

						<tr>
							<td>
								<!--Apellidos-->
								<input class="acceso" id = "apell" type="text" name="apellidos" maxlength=35 
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
								<select name="cbx_linea" id="cbx_linea">
					                <option value="0"  selected disabled="true">-Seleccione Linea-</option>
					                    <?php while($row = $resultado->fetch_assoc()) { ?>
						                
						                    <option value="<?php echo $row['nom_linea']; ?>"> <?php echo $row['nom_linea']; ?> </option>
						                <?php } ?>
					            </select>
							</td>
						</tr>

						<tr>
							<td>
								<select name="cbx_estacion" id="cbx_estacion">
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
								<select name="areas" id = "areas" >
									<option value=""  selected disabled="true">-Seleccione Area-</option>
								</select>
							</td>
						</tr>

						<!--Categoria-->
						<tr>
							<td>
								<input class="acceso" id = "catego" type="text" name="categoria" maxlength=35 
								autocomplete="off" placeholder="Categoria" required>
							</td>
						</tr>

								
							</td>
						</tr>

						<tr>
							<td>
								<input class="acceso" id = "correo" type="e-mail" name="correo" 
								autocomplete="off" placeholder="Correo" maxlength=60 required>
							</td>
						</tr>

						<tr>
							<td>
								<input class="acceso" type="password" id="pass" name="pass" 
								autocomplete="off" placeholder="Contraseña" maxlength=12 required>
							</td>
						</tr>

						<tr>
							<td>
								<input class="acceso" type="password" id="pass1" name="pass1" 
								autocomplete="off" placeholder="Confirmar contraseña" maxlength=12 required>
							</td>
						</tr>

						<tr>
							<td>
								<input id = "enviar" type="submit" value="Registrarse"/>
								<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
							</td>
						</tr>
					</table>				
				</form>
			</center>
		</dir>
	</body>
	    
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
        </script>
</html>