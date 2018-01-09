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

  <body>
  		<dir class="registro">
			<center>
				<form method="POST" onSubmit="return validar_contrasena()" action="conexiones/registro.php" >
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
								<!--CHECAR VALORES NEGATIVOS-->
								<input class="acceso" id = "edad" type="number" name="edad"
								autocomplete="off" placeholder="Edad" required>
							</td>
						</tr>

						<tr>
							<td>
								<input class="acceso" id = "cargo" type="text" name="cargo" maxlength=35 
								autocomplete="off" placeholder="Cargo" required>
							</td>
						</tr>

						<!--CAMBIAR A DESPLEGABLE-->
						<tr>
							<td>
								<input class="acceso" id = "area" type="text" name="area" maxlength=35 
								autocomplete="off" placeholder="Área" required>
							</td>
						</tr>

						<!---Selectores-->
						<tr>
							<td>
								<input class="acceso" id = "linea" type="text" name="linea" maxlength=35 
								autocomplete="off" placeholder="Línea(s)" required>
							</td>
						</tr>

						<!--CAMBIAR A DESPLEGABLE-->
						<tr>
							<td>
								<input class="acceso" id = "tipo_usuario" type="text" name="tipo_usuario" maxlength=35 
								autocomplete="off" placeholder="Tipo de usuario" required>
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
					<input type="submit" value="Registrarse"/>
						<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
				</form>
			</center>
		</dir>
	</body>

<script type="text/javascript" src="js/valida_num.js"></script>
<script type="text/javascript" src="js/valida_pass.js"></script>
</html>
