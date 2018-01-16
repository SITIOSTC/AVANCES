<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Estilos de bootstrap y los propios -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <style media="screen">
        body {
        position: relative;
        }
    </style>
    <title>Mantenimiento PCL</title>
  </head>

  <!--JavaScripts y JQuerys-->
 	<script type="text/javascript" src="js/valida_num.js"></script>
	<script type="text/javascript" src="js/valida_pass.js"></script>
	<!--<script type="text/javascript" src="js/validar_checkbox.js"></script>-->
	<!--<script type="text/javascript" src="js/fecha.js"></script>-->
	
	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/ocultar_elementos.js"></script>

  <body>
  		<dir class="registro">
			<center>
				<form method="POST" name = "altas" id = "valida_pass" onSubmit="return validar()" action="conexiones/registro.php" >
					<table>
						<tr>
							<td>
								<input class="acceso" id = "user" type="text" name="usuario" maxlength=15 
								autocomplete="off" placeholder="Nombre de Usuario" required>
							</td>
						</tr>

						<tr>
							<td>
								<input class="acceso" id = "name" type="text" name="nombre" maxlength=20 
								autocomplete="off" placeholder="Nombre(s)" required>
							</td>
						</tr>

						<tr>
							<td>
								<input class="acceso" id = "apll" type="text" name="apellidos" maxlength=35 
								autocomplete="off" placeholder="Apellidos" required>
							</td>
						</tr>


						<tr>
							<td>
								<select name="dias" required>
									<!---no se asigna un valor al "value = ", para forzar la seleccion de un campo-->
									<option value="" selected disabled="true">-Dia-</option>
								       	<option value="01">01</option>
								       	<option value="02">02</option>
								       	<option value="03">03</option>
								       	<option value="04">04</option>
								       	<option value="05">05</option>
								       	<option value="06">06</option>
								       	<option value="07">07</option>
								       	<option value="08">08</option>
								       	<option value="09">09</option>
								       	<option value="10">10</option>
								       	<option value="11">11</option>
								       	<option value="12">12</option>
								       	<option value="13">13</option>
								       	<option value="14">14</option>
								       	<option value="15">15</option>
								       	<option value="16">16</option>
								       	<option value="17">17</option>
								       	<option value="18">18</option>
								       	<option value="19">19</option>
								       	<option value="20">20</option>
								       	<option value="21">21</option>
								       	<option value="22">22</option>
								       	<option value="23">23</option>
								       	<option value="24">24</option>
								       	<option value="25">25</option>
								       	<option value="26">26</option>
								       	<option value="27">27</option>
								       	<option value="28">28</option>
								       	<option value="29">29</option>
								       	<option value="30">30</option>
							       		<option value="31">31</option>
						   		</select>

						   		<select name="mes" required>
									<option value="" selected disabled="true">-Mes-</option>
								       	<option value="01">Enero</option>
								       	<option value="02">Febrero</option>
								       	<option value="03">Marzo</option>
								       	<option value="04">Abril</option>
								       	<option value="05">Mayo</option>
								       	<option value="06">Junio</option>
								       	<option value="07">Julio</option>
								       	<option value="08">Agosto</option>
								       	<option value="09">Septiembre</option>
								       	<option value="10">Octubre</option>
								       	<option value="11">Noviembre</option>
								       	<option value="12">Diciembre</option>
						   		</select>
								<input class="acceso" id = "anio" type="number" name="anio" autocomplete="off" 
										placeholder="AAAA" min="1930" max="2018" maxlength="4" 
											oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
											required/>
							</td>
						</tr>

						<tr>
							<td>
								<input class="acceso" id = "cargo" type="text" name="cargo" maxlength=35 
								autocomplete="off" placeholder="Cargo" required>
							</td>
						</tr>





						<tr>
							<td>
								<select name="areas" required>
								<option value="" selected disabled="true">-Seleccione Área-</option>
						       	<?php 
									include("conexiones/conexion_areas.php");
								?>
						       	<?php echo $combobit; ?>
						   		</select>
							</td>
						</tr>

						<!---Selectores-->
						<tr>
							<td>
								<a id="mostrar" href="#">Seleccione Línea(s)</a>
								<a id="ocultar" href="#">Ocultar Líneas</a>
								<div id = "lineas" style="display:none;" name = "lineas" required>
									<fieldset>
										<legend>Linea(s)</legend>
											<input type="checkbox" name="linea[]" value="01">Línea 1
											<input type="checkbox" name="linea[]" value="02">Línea 2
											<input type="checkbox" name="linea[]" value="03">Línea 3
											<br>
											<input type="checkbox" name="linea[]" value="04">Línea 4
											<input type="checkbox" name="linea[]" value="05">Línea 5
											<input type="checkbox" name="linea[]" value="06">Línea 6
											<br>
											<input type="checkbox" name="linea[]" value="07">Línea 7
											<input type="checkbox" name="linea[]" value="08">Línea 8
											<input type="checkbox" name="linea[]" value="09">Línea 9
											<br>
											<input type="checkbox" name="linea[]" value="10">Línea 10
											<input type="checkbox" name="linea[]" value="11">Línea 11
											<input type="checkbox" name="linea[]" value="12">Línea 12
											<br>
											<input type="checkbox" name="linea[]" value="A">Línea A
											<input type="checkbox" name="linea[]" value="B">Línea B
								</fieldset>
								</div>

								
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
					</table>
					<input id = "enviar" type="submit" value="Registrarse"/>
						<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
				</form>
			</center>
		</dir>
	</body>
</html>
