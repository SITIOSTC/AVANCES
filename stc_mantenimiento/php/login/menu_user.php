<!DOCTYPE html>

  <?php
  session_start();
  if (@!$_SESSION['nom_usuario']) {
    header("Location:../login.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:menu_admin.php");
  }
  ?>

   <html lang="es">
      <head>
       <title>PCL L-12-Usuario</title><!-- TÍTULO DE LA PÁGINA WEB  -->
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <!-- PARA VISUALIZAR CARACTERES  -->
      <link rel="stylesheet" type="text/css" href="css/estilo_menu_user.css"/> <!-- PARA LLAMAR A LA HOJA DE ESTILOS  -->
   <link rel="stylesheet" type="text/css" href="css/menu_desplegable_menu_user.css"/>
</head><!--TERMINA EL HEAD   -->



<!--  ..............................BODY, HEADER Y MENÚS.............................................  -->
<body><!-- COMIENZA EL BODY  -->
  
   <div id="main_header"> <!-- COMIENZA EL HEADER  -->
      <div id="banner"> 
        <img src="imagenes/Logo_cdmx.png" id="logo-cdmx">
        <img src="imagenes/Logo_metro.png" id="logo-metro">
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
<div id="user">
<!--................................MENÚ DESPLEGABLE............................................-->
  <div class="contenedor">
    <input type="checkbox" id="menu-bar">
	  <label class="icon-menu" for="menu-bar"> <img src="imagenes/menu-icon.png" id="img_menu"></label>

    <nav class="menu">

       <li id="Inicio"><a id="text_inicio" href=""> <img src="imagenes/home-icon.png" id="home-icon"> Inicio</a></li>
       <li id="info"><a href=""> <img src="imagenes/about-icon.png" id="about-icon">Sobre el sitio web</a></li>
       <li id="cerrar"><a href="desconectar_usuario.php"> <img src="imagenes/logout-icon.png" id="logout-icon">Cerrar sesión</a>
    </nav>
  </div>



	<nav id="menu_user">
      <ul id="menus"><!--ABRE MENÚ ADMIN-->
       
<!--.................................MANUALES..................................................-->
  <li id="manuales"> <a href=""><img src="imagenes/manuales-icon.png" id="manuales-icon"> 
    <br>Consulta de manuales técnicos</a>
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

     







        </ul><!--CIERRA MENÚ ADMIN-->
	</nav><!--CIERRA NAV DE MENÚ ADMIN-->
</div>	<!--CIERRA DIV ADMIN-->
<!--................................ESTILOS BODY..................................................-->



	

<div id="body"></div><!-- COMIENZA EL DIV PARA DARLE FORMATO AL BODY  -->

<!-- ................................ESTILOS FOOTER..............................................  -->

	<div id="footer"><!-- PARA DARLE ESTILO AL FOOTER  -->
  
	  <hr id="hr_2">
	 
	  <hr>
	  
	  <hr id="hr_3">
	  
	  <div id="logo_metrofooter">
	     <img src="imagenes/Logo_metro.png" id="logo-metro_2">
  </div>
	     <div id="sitio_oficial">
           <p>
               SITIO OFICIAL
           </p>
       </div>
       
	   <div id="link_oficial"> 
            <a id="oficial" href=" http://www.metro.cdmx.gob.mx/">
            http://www.metro.cdmx.gob.mx/</a>                     
        </div>
  
	  <div id="logo_mc" ><!-- DARLE ESTILO AL LOGO DE MANDO CENTRALIZADO  -->
		<img src="imagenes/Logo_MC.png" id="mc">
</div><!-- CIERRA LOGO_MC  -->
    
		<div id="direccion"> <!-- DIRECCIÓN EN EL FOOTER  -->
          <p> <!-- PARRAFO  -->     ESTACIÓN TLÁHUAC, PCL
           <br> <br>
           San Rafael Atlixco núm 34. Edif. PCL P.B
            <br>
         Col. San Francisco Tlaltenco
           <br>
        C.P. 13400, Del. Tláhuac        

         </p><!-- CIERRA EL PARRAFO  -->
</div><!-- CIERRA EL DIV DIRECCIÓN  -->
  
      
       <div id="contacto">
           <p>
              MC
           </p>
       </div>
       
        <div id="phone" >
		<img src="imagenes/phone-icon.png" id="phone-icon">
</div>
       
        <div id="telefono"> <!-- TELÉFONO EN EL FOOTER  -->
            <p>  Tel: 57091133
           <br><!-- SALTO DE LÍNEA  -->
           Ext. 6875 y 6806
              </p>
</div><!--CIERRA EL DIV TELÉFONO   -->

      <div id="correo-icon" >
		<img src="imagenes/email-icon.png" id="email-icon">
</div>

 <div id="correo"> 
            <p>  Correo electrónico:
            <br>
            mc.linea12@gmail.com            
     </p>            
        </div>
        
        <div id="desarrolladores">
           <p>
               DESARROLLADORES
           </p>
       </div>
       
       <div id="correo_2"> <!-- TELÉFONO EN EL FOOTER  -->
            <p>  Correo electrónico:
            <br>
            	sitiostcl12@gmail.com           
     </p>            
        </div>
        
          <div id="correo-icon_2" >
		<img src="imagenes/email-icon_2.png" id="email-icon_2">
</div>
     
               
</div><!--CIERRA EL DIV FOOTER   -->

  </body><!-- CIERRA EL BODY  -->
</html><!--CIERRA EL DOCUMENTO HTML   -->