<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!--scripts-->
    <script type="text/javascript" src="js/valida_num.js"></script>
	<script type="text/javascript" src="js/valida_pass.js"></script>
    
    <style media="screen">
        body {
        position: relative;
        }
    </style>
    <title>Mantenimiento PCL</title>
  </head>

  <body>
  		<dir class="login">
			<center>
				<form method="POST" onSubmit="return validar_contrasena()" action="conexiones/validar_sesion.html" >
					<table>
						<tr>
							<td>
								<input class="acceso" id = "user" type="text" name="usuario" maxlength=15 
								autocomplete="off" placeholder="Nombre de Usuario" required>
							</td>
						</tr>

						
						<tr>
							<td>
								<input class="acceso" type="password" id="pass" name="pass" 
								autocomplete="off" placeholder="Contraseña" maxlength=12 required>
							</td>
						</tr>

					</table>
					<input type="submit" value="Iniciar Sesión"/>
						<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
				</form>
			</center>
		</dir>
	</body>
</html>
