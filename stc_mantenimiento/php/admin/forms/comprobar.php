<?php 
      
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       

      function comprobar($b) {

            require ("../../../conexiones/conexion_2.php");
            //Se ejecuta la sentencia SQL a la BD de la tabla "manuales".
            $selecciona = "SELECT * FROM usuarios WHERE nom_usuario = '".$b."'";
            /*BUSCA EN EL AREA ASIGNADA
            Ejecuta el query "$selecciona", y almacena en la variable "$resultado", todo lo obtenido*/
            $resultado=$conexion->query($selecciona);
                                    
            $contar = mysqli_num_rows($resultado);

            if($contar =="0"){
                  echo "<span style='font-weight:bold;color:green;'>El nombre de usuario: \"$b\" esta disponible.</span>";
                  return true;
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El nombre de usuario: \"$b\" ya existe, escriba otro por favor.</span>";
                  return false;
            }
      }   
 ?>