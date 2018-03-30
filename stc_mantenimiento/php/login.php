<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="../js/jquery-3.2.1.js"></script>
  	
  	<!--JavaScripts y JQuerys-->
	<script type="text/javascript" src="../js/main_login.js"></script>
	
    
    
    <title>Mantenimiento PCL - LOGIN</title>
  </head>

  <body>
  		<div class="#">
			<center>
				<form method="POST" action="login/validar.php">
					<table>
						<tr>
							<td>
								<input id = "user" type="text" name="usuario" maxlength=15 
								autocomplete="on" placeholder="Nombre de Usuario" required>
							</td>
						</tr>

						
						<tr>
							<td>
								<input type="password" id="pass" name="pass" maxlength=12
								autocomplete="off" placeholder="Contraseña" required>
							</td>
						</tr>

					</table>
					<input type="submit" value="Iniciar Sesión"/>
						<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
				</form>
			</center>
		</div>
	</body>
</html>
