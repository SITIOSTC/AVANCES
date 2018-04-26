<!DOCTYPE html>
<?php
/*session_start();
if (@!$_SESSION['nom_administrador']) {
  header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
  header("Location:login/menu_user.php");
}*/
?>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <!-- PARA VISUALIZAR CARACTERES  -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../../css/estilo_alta_usuarios.css">
	<link rel="stylesheet" href="../../../css/estilo_menu_alta_usuario.css">
	<link rel="stylesheet" href="../../../css/menu_desplegable_alta_usuario.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	 <title>Formulario: Alta Usuarios</title>
</head>
	
	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
<script language="javascript"  src="../../../js/jquery-3.2.1.js"></script>
  	
  	<!--JavaScripts y JQuerys-->
	<script type="text/javascript" src="js/funciones.js"></script>
  
  <!--  ..............................BODY, HEADER Y MENÚS.............................................  -->
<body><!-- COMIENZA EL BODY  -->
   <div id="main_header"> <!-- COMIENZA EL HEADER  -->
      <div id="banner"> 
        <img src="../../../imagenes/Logo_cdmx.png" id="logo-cdmx">
        <img src="../../../imagenes/Logo_metro.png" id="logo-metro">
   </div>

     <div id="titulo_banner_uno"> 
         PCL L-12
    </div>
   
   <div id="texto_banner">
        <P>SISTEMA DE TRANSPORTE COLECTIVO METRO
                     <br>
          Gerencia de Instalaciones Fijas
                       <br>
       Subgerencia de Instalaciones Electrónicas
                         <br>
      Coordinación de Automatización y Control
                        <br>
        Jefatura de Sección de Mando Centralizado Línea 12                                 

  </P></div>

 </div><!-- TERMINA EL HEADER  -->




<!--................................MENÚ ADMIN...............................................-->
<div id="admin">
<!--................................MENÚ DESPLEGABLE............................................-->
  <div class="contenedor">
    <input type="checkbox" id="menu-bar">
	  <label class="icon-menu" for="menu-bar"> <img src="../../../imagenes/menu-icon.png" id="img_menu"></label>

    <nav class="menu">

       <li id="Inicio"><a id="text_inicio" href="../home_admin.html"> <img src="../../../imagenes/home-icon.png" id="home-icon"> Inicio</a></li>
        <li id="config"><a href=""> <img src="../../../imagenes/config-icon.png" id="config-icon">Configuración</a></li>
       <li id="info"><a href="../sobre_sitio_web_admin.html"> <img src="../../../imagenes/about-icon.png" id="about-icon">Sobre el sitio web</a></li>
       <li id="cerrar"><a href="../../login/desconectar_admin.php"> <img src="../../../imagenes/logout-icon.png" id="logout-icon">Cerrar sesión</a></li>

                </nav>
  </div>


<!--.................................................PERSONAL..................................-->
	<nav id="menu_admin">
      <ul id="menus"><!--ABRE MENÚ ADMIN-->
       
  <li id="personal"> <a href=""> <img src="../../../imagenes/personal-icon.png" id="personal-icon"> <br>Usuarios</a>
    <ul id="submenu_personal"><!--ABRE SUBMENÚ PERSONAL-->
        <!--<li> <a href="javascript:history.back().document.location.reload();">Alta usuarios</a></li>-->
        <li> <a href=".././forms/baja_usuarios.php">Registros (Actualizar/Eliminar)</a></li>
    </ul><!--CIERRA SUBMENÚ PERSONAL-->
 </li><!--CIERRA LI PERSONAL-->

<!--.................................MANUALES..................................................-->
  <li id="manuales"> <a href=""><img src="../../../imagenes/manuales-icon.png" id="manuales-icon"> 
    <br>Manuales</a>
       <ul id="submenu_manuales"><!--ABRE SUBMENÚ MANUALES-->
          <li id="li_mc"><a  href="">Mando Centralizado</a>
             <ul id="submenu_mc"><!--ABRE SUBMENÚ MANDO CENTRALIZADO-->
                <li><a href="">Visualizar manuales</a></li> 
                <li><a href="">Subir manuales</a></li> 
                <li><a href="">Eliminar manuales</a></li> 
                <li><a href="">Actualizar manuales</a></li> 
            </ul><!--CIERRA SUBMENÚ MANDO CENTRALIZADO-->
           </li><!--CIERRA LI MANDO CENTRALIZADO-->

          <li><a href="">Señalización</a>
           <ul id="submenu_s"><!--ABRE SUBMENÚ SEÑALIZACIÓN-->
            <li><a href="">Visualizar manuales</a></li> 
            <li><a href="">Subir manuales</a></li> 
            <li><a href="">Eliminar manuales</a></li> 
            <li><a href="">Actualizar manuales</a></li> 
           </ul><!--CIERRA SUBMENÚ SEÑALIZACIÓN-->
          </li><!--CIERRA LI SEÑALIZACIÓN-->

        <li><a href="">Pilotaje Automático</a>
         <ul id="submenu_pa"><!--ABRE SUBMENÚ PILOTAJE AUTOMÁTICO-->
            <li><a href="">Visualizar manuales</a></li> 
            <li><a href="">Subir manuales</a></li> 
            <li><a href="">Eliminar manuales</a></li> 
            <li><a href="">Actualizar manuales</a></li> 
          </ul><!--CIERRA SUBMENÚ PILOTAJE AUTOMÁTICO-->
        </li><!--CIERRA LI PILOTAJE AUTOMÁTICO-->
      </ul><!--CIERRA SUBMENÚ MANUALES-->
  </li><!--CIERRA LI MANUALES-->

     
<!--..............................................REGISTROS....................................-->
<li id="registros"><a href=""><img src="../../../imagenes/registros-icon.png" id="registros-icon"><br>Entradas</a>

    <ul id="submenu_registros"><!--ABRE SUBMENÚ REGISTROS-->
        <li> <a href="">Usuarios que <br>han entrado al sitio</a></li>
    </ul><!--CIERRA SUBMENÚ REGISTROS-->
</li><!--CIERRA LI REGISTROS-->






        </ul><!--CIERRA MENÚ ADMIN-->
	</nav><!--CIERRA NAV DE MENÚ ADMIN-->
</div>	<!--CIERRA DIV ADMIN-->
<!--................................ESTILOS BODY..................................................-->
<!--................................FORMULARIO ALTA USUARIO.....................................-->

      <div class="contenedor_form">
  		<div class="registro">
			<div class="wrap">
			  	  <div id="titulo_form">
                      Formulario: Alta usuarios
                 </div>
            
				<form method="POST" name = "altas" id = "valida_pass" onSubmit="return valida()" action="../../../conexiones/registro.php" class="formulario" >
				<div>
					<div class="input-group">
								<!--ID usuario-->
								<input id = "id_usuario" type="number" name="id_usuario" 
								autocomplete="off" style="visibility:hidden" value = "0" placeholder="ID Usuario" readonly="" required>
								<label style="visibility:hidden" class="label" for"id_usuario"> ID Usuario:</label> <!--style="visibility:hidden" para ocultar-->
						</div>
                
				    <div class="input-group"> <!--CONTENEDOR INPUT-->
								<!--No. Expediente-->
								<input id = "expediente" type="text" name="expediente" minlength="5" maxlength="5" 
								autocomplete="off"  required>
								<label class="label" for"expediente"> No. De Expediente:</label>
								<div>
									<div id="resultado1"></div></div>
                    </div> <!--Cierra contenedor input-->

                    
                    <div class="input-group"> <!--CONTENEDOR INPUT-->
								<!--Nombre(s)-->
								<input id = "nombre" type="text" name="nombre" maxlength=20 
								autocomplete="off"  required>
								    <label class="label" for"nombre"> Nombre(s):</label>
				    </div> <!--Cierra contenedor input-->
				    
				    <div class="input-group"> <!--CONTENEDOR INPUT-->
								<!--Apellidos-->
								<input id = "apellidos" type="text" name="apellidos" maxlength=35 
								autocomplete="off"  required>
								  <label class="label" for"apellidos"> Apellidos:</label>
				    </div> <!--Cierra contenedor input-->
							
								<?php
									require ('../../../conexiones/conexion_2.php');
								    
									$query = "SELECT nom_linea FROM lineas";
									$resultado=$conexion->query($query);
								?>
								<select class="select" name="cbx_linea" id="cbx_linea" required>
					                <option value=""  selected disabled="true">-Seleccione Linea-</option>
					                    <?php while($row = $resultado->fetch_assoc()) { ?>
						                
						                    <option value="<?php echo $row['nom_linea']; ?>">
						                    	<?php echo $row['nom_linea']; ?> 
						                    </option>
						                		<?php } ?>
					            </select>
							
								<select  class="select" name="cbx_estacion" id="cbx_estacion" required>
									<option value="" selected disabled="true">-Seleccione Estación-</option>
								</select>
							
							
								<select style="visibility:hidden" name="cbx_id_estacion" id="cbx_id_estacion"></select>
							
								<select class="select" name="areas" id = "areas" required>
									<option value=""  selected disabled="true">-Seleccione Area-</option>
								</select>
						
						 <div class="input-group"> <!--CONTENEDOR INPUT-->
								<input id = "catego" type="text" name="categoria" maxlength=35 
								autocomplete="off"  required>
								 <label class="label" for"categoria"> Categoria:</label>
				    </div> <!--Cierra contenedor input-->
          		</div>
          
         <div class="registro2">
			<div class="wrap2">
				
				
							<div class="input-group2">
								<input id = "correo" type="e-mail" name="correo" 
								autocomplete="off"  maxlength=60 required>
									<label class="label" for="correo"> Correo:</label>
					</div>
					
					 <div class="input-group2"> <!--CONTENEDOR INPUT-->
								<input id = "nom_usuario" type="text" name="nom_usuario" 
								 autocomplete="off"  maxlength=20 required>
								<label class="label" for"nom_usuario"> Nombre de Usuario:</label>
								<div id="resultado"></div>
				    </div> <!--Cierra contenedor input-->
					
					<div class="input-group2">
								<input type="password" id="pass" name="pass" 
								autocomplete="off"  maxlength=12 required>
								<label class="label" for"pass"> Contraseña:</label>
					</div>
					
					<div class="input-group2">
								<input type="password" id="pass1" name="pass1" 
								autocomplete="off"  maxlength=12 required>
								 <label class="label" for"pass1"> Confirmar contraseña:</label>
					</div>
				
                    <div class="input-group2">
								<!--ID usuario-->
								<input style="visibility:hidden" id = "id_rol" type="number" name="rol" autocomplete="off" value = "2" readonly="" required>
								<label style="visibility:hidden" class="label" for"pass1"> ID Rol:</label>
					</div>
							
								<input id = "enviar" type="submit" value="Registrarse" onclick="usera()" />
								<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
								<a href="javascript:history.back()"> 
									<button type="button">Cancelar</button>
								</a>
								<!--
								<a href="javascript:history.back().document.location.reload();">
				               <button type="button">Regresar</button>
			                   </a>	-->
			                		
                   <script src="../js/formulario.js"></script>  
        				
				
             </div>
          </div>		
         </div>         
                </form>
            </div>
    </div>   
    </div>       
	<div id="body"></div><!-- COMIENZA EL DIV PARA DARLE FORMATO AL BODY  -->

<!-- ................................ESTILOS FOOTER..............................................  -->

	</body> 
</html>