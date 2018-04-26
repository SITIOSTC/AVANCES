<!DOCTYPE html>

  <?php
  //Inicia la sesión
  session_start();
  //verifica y redirecciona si la sesión este activa
  if (isset($_SESSION['nom_administrador'])) {
    //redirecciona a la dirección correspondiente a la sesión
   header("Location:php/admin/menu_admin.php");
  }
  //verifica y redirecciona si la sesión este activa
  if (isset($_SESSION['nom_usuario'])) {
    //redirecciona a la dirección correspondiente a la sesión
   header("Location:php/usuario/menu_user.php");
  }
?>
<html lang="es">
<head>
          <title>PCL L-12 Inicio</title><!-- TÍTULO DE LA PÁGINA WEB  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <!-- PARA VISUALIZAR CARACTERES  -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/estilo_index.css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/main.js"></script>

     <!-- PARA LLAMAR A LA HOJA DE ESTILOS  -->
     
     
  <!-- ****************************JavaScripts y JQuerys de LOGIN **************************** -->   
    	<!--Importamos las librerias de jquery para poder utilizar sus animaciones y funciones-->
  	
  	<!--JavaScripts y JQuerys-->
	<script type="text/javascript" src="../js/main_login.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css"/>


    
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

<!------------------------------------------LOGIN--------------------------------------------> 
<div id="login" class="#">
			
				<form method="POST" action="php/login/validar.php" method="get">
				
                           <fieldset class="clearfix">
                            
								<p id="parrafos">
									<span class="fontawesome-user"></span>
									<input id = "user" type="text"  
                        name="usuario" maxlength=15 
      								  autocomplete="on" placeholder="Nombre de Usuario" 
                        onBlur="if(this.value == '') this.value = ''"
                        onFocus="if(this.value == 'Nombre de Usuario') this.value = ''"
                        required/>
                </p> <!-- JS because of IE support; better: placeholder="Username" -->
						
								<p id="parrafos">
                  <span class="fontawesome-lock"></span>
                  <input type="password" id="pass" name="pass" maxlength=12
								  autocomplete="off" placeholder="Contraseña"
                  onBlur="if(this.value == '') this.value = ''" 
                  onFocus="if(this.value == 'Password') this.value = ''" 
                  required/> </p> <!-- JS because of IE support; better: placeholder="Password" -->
				
					 <p id="parrafos"><input type="submit" value="Iniciar Sesión"/></p>
						<!--<button class="btnportada" onclick="validar_contrasena()">Enviar</button>-->
						</fieldset>
				</form>
			
		</div>
	<!---------------------------------------TERMINA EL LOGIN---------------------------------------> 	
		
  </div><!-- TERMINA EL HEADER  -->





<div id="home">
	<nav id="menu_home">
		
		
		<img src="imagenes/about-icon.png" id="about-icon2">
		<a id="about" href="sobre_sitio_web.html">Sobre el sitio web</a>
	</nav>
</div>	





<!--................................ESTILOS BODY..................................................-->




	

<div id="body">

  <div id="informacion">

       <p id="titulo">Inicio </p>
       <img src="imagenes/red.png"  id="red"/>
</div>    

<!-----------------------------SLIDER------------------------------>
      <div class="flexslider">
		<ul class="slides">

			<li>
				<img src="imagenes/slider/1.png" alt="">
				<section class="caption">
					<h2>    </h2>
				</section>
			</li>

			<li>
				<img src="imagenes/slider/2.png" alt="">
				<section class="caption">
					<h2>     </h2>
				</section>
			</li>

			<li>
				<img src="imagenes/slider/3.png" alt="">
				<section class="caption">
					<h2>   </h2>
				</section>
			</li>

		</ul>
	</div>
</div> <!--CIERRA DIV "BODY" -->


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