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
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <!-- PARA VISUALIZAR CARACTERES  -->
    <style media="screen">
    </style>
    <title>Registros (Actualizar/Eliminar)</title>
    <link rel="stylesheet" href="../../../css/estilo_baja_usuarios.css">
    
	<link rel="stylesheet" href="../../../css/menu_desplegable_alta_usuario.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  </head>
	
	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
	<script language="javascript"  src="../../../js/jquery-3.2.1.js"></script>

	<script type="text/javascript" src="../js/funciones.js"></script>


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
        <li> <a href=".././forms/alta_usuarios.php">Alta usuarios</a></li>
        
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

      
  	 <div align="center" id = "tabla_elimna_registros">
  	 	<table border="1px" sTYLE="table-layout:fixed" style="width: 900px; text-align:center;" >
  	 	
  	 	<thead>
          <caption>Registros (Actualizar/Eliminar)</caption> <!--Título tabla-->
            <!--th son celdas de encabezado con los titulos de la tabla-->
  	 	 <tr><!--columnas-->
                  
  	 	      <th>No.<br> de<br>Expediente</th>  
  	 	      <th>Nombre(s)</th>   
  	 	      <th>Apellidos</th>   
  	 	      <th>Línea</th>
  	 	      <th style="display:none;" >ID Estación</th>
  	 	      <th>Estación</th> 
  	 	      <th>Área</th>  
  	 	      <th>Categoria</th>  
  	 	      <th>Correo</th>  
  	 	      <th style="display:none;">ID Usuario</th>  
  	 	      <th>Nombre <br> de <br>usuario</th>  
  	 	      <th style="display:none;">Clave</th>  
  	 	      <th style="display:none;">Rol</th>  
  	 	      <th>Editar</th>  
  	 	     </tr>  
  	 	   
  	 	    </thead>
  	 	
  	 		<?php
            
			//Incluye la conexión a la base de datos. (conexion_2)
			require ('../../../conexiones/conexion_2.php');

				//Se ejecuta la sentencia SQL a la BD de la tabla "manuales".
				$selecciona = "SELECT * FROM usuarios ORDER BY nom_trabajador ASC";
				/*BUSCA EN EL AREA ASIGNADA
				$query = "SELECT * FROM manuales WHERE area = 'MC L-12'";*/
				//Ejecuta el query "$selecciona", y almacena en la variable "$resultado", todo lo obtenido
				$resultado=$conexion->query($selecciona);

			//Si se obtiene un valor en la variable "$resultado"
				if(mysqli_num_rows($resultado)>="1"){
                  echo "Registros encontrados";
				//Mientras la variable "$fila" sea igual a la variable "$resultado",
				//Obtiene una fila de resultado como un array asociativo.
				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
						echo"<td>"; echo $fila ['no_expediente']; echo "</td>"; //td son filas
		  	 			echo"<td>"; echo $fila ['nom_trabajador']; echo "</td>";
              //echo"<td>"; echo utf8_encode($fila ['nom_trabajador']); echo "</td>";
		  	 			echo"<td>"; echo $fila ['apellidos_trabajador']; echo "</td>";
		  	 			echo'<td id="lin">'; echo $fila ['nom_linea']; echo "</td>";
		  	 			echo'<td id="est">'; echo $fila ['nombre_estacion']; echo "</td>";
			  	 		echo'<td style="display:none;">'; echo $fila ['id_estacion']; echo "</td>";
			  	 		echo'<td id="ar">'; echo $fila ['nom_area']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['categoria']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['correo']; echo "</td>";
		  	 			echo'<td style="display:none;">'; echo $fila ['id_usuario']; echo "</td>";
		  	 			echo"<td>"; echo $fila ['nom_usuario']; echo "</td>";
		  	 			echo'<td style="display:none;">'; echo $fila ['clave']; echo "</td>";
		  	 			echo'<td style="display:none;">'; echo $fila ['rol']; echo "</td>";

		  	 			echo "<td> 
		  	 					<a href= 'actualizar.php?id_usuario=".$fila['id_usuario']." '>
		  	 						<button  type='submit'>Actualizar</button>
		  	 					</a> 
		  	 				 </td>";

		  	 		echo "</tr>";
				}
			}
      else
        if(mysqli_num_rows($resultado)=="0"){
                echo "No se encontro ningun registro. <br>Ponga se en contacto con el administrador.";
        }
		?>
         
  	 	</table>
  	 </div>
	<!--
	<div>
		<a href="javascript:history.back().document.location.reload();">
			<button type="button">Regresar</button>
		</a>	
	</div>-->
	
	<!-- ................................ESTILOS FOOTER..............................................  -->
  	 
</body> 
</html>