      <?php
      $user = $_POST['a'];
       
      if(!empty($user)) {
            comprobar1($user);
      }
      
            function comprobar1($a) {

            require ("../../../../conexiones/conexion_2.php");
            //Se ejecuta la sentencia SQL a la BD de la tabla "manuales".
            $selecciona1 = "SELECT * FROM usuarios WHERE no_expediente = '".$a."'";
            /*BUSCA EN EL AREA ASIGNADA
            Ejecuta el query "$selecciona", y almacena en la variable "$resultado", todo lo obtenido*/
            $resultado1=$conexion->query($selecciona1);
                                    
            $contar1 = mysqli_num_rows($resultado1);

            if($contar1 =="0"){
                  echo "<span style='font-weight:bold;color:green;'>El no. expediente: \"$a\" esta disponible.</span>";
                  return true;
            }
            else{
                  echo "<span style='font-weight:bold;color:red;'>El no. expediente: \"$a\" ya existe, escriba otro por favor.</span>";
                  return false;
            }
            mysqli_close($conexion);

      } 
      ?>