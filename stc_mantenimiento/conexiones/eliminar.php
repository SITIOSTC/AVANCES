<?
$conexion= mysqli_connect("localhost", "root", "gears_of-war-3", "bd_stc_pcl");
if($conexion)
{


  //Variables
  $expediente = $_POST['id_no_expediente'];
  $Nombre_Trabajo = $_POST['nom_trabajador'];


//realiza la consulta
  $consulta= "DELETE FROM usuarios WHERE usuarios='$expediente'";



//para ejecutar consulta
  $resultado=mysqli_query($conexion ,$consulta);


  if ($resultado) {   ?>

      <div class="alert alert-success">
      <strong>Datos guardados correctamente!</strong> 
      <a href="consulta_lista.php" class="alert-link">Volver</a>
      </div>

      <?php  }

      else { ?>

      <div class="alert alert-warning">
      <strong>Error al guardar los datos!</strong>
      <a href="consulta_lista.php" class="alert-link">Volver</a>
      </div> 

      <?php } 


      }
      else{ 
        echo ""; 
      }
        mysqli_close($conexion);   
      ?> 