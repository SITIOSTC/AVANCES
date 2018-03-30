<!DOCTYPE html>
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
				<form method="POST" action="subir_archivo.php" enctype="multipart/form-data">
					<table>
						<tr><td>
								<!---->
								<input type="file" name="manual"/>

						</td></tr>

						<tr><td>
								<input type="submit" value="Subir"/>
						</td></tr>
					</table>				
				</form>
			</center>
		</div>
	</body>
</html>