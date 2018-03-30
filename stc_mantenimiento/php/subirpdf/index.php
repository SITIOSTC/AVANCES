<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    //[nombre del input] [lo que queremos recuperar]
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $id_manual = $_POST['id_manual'];
            $titulo= $_POST['titulo'];
            $cod_manual= $_POST['codigo_manual'];
            $descri= $_POST['descripcion'];
            $nom_equipo= $_POST['nom_equipo']; 
            $area= $_POST['area']; 
            $linea= $_POST['linea'];

            $db=new Conect_MySql();
            $sql = "INSERT INTO manuales(id_manual,titulo,codigo_manual,descripcion,nom_equipo,tamanio,tipo_archivo,nom_archivo,area,linea) 
            VALUES('$id_manual','$titulo','$cod_manual','$descri','$nom_equipo','$tamanio','$tipo','$nombre','$area','$linea')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Subir PDF</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>ID Manual</label></td>
                        <td><input type="number" name="id_manual" value="0"></td>
                    </tr>

                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo" value="TEST :D"></td>
                    </tr>
                    <tr>
                        <td><label>Cod Manual</label></td>
                        <td><input type="text" name="codigo_manual" value="0123456789"></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Nom Equipo</label></td>
                        <td><input type="text" name="nom_equipo" value="TEST"></td>
                    </tr>
                    <tr>
                        <td><label>Area</label></td>
                        <td><input type="text" name="area" value="MC L-12"></td>
                    </tr>
                    <tr>
                        <td><label>Linea</label></td>
                        <td><input type="text" name="linea" value="L-12"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                        <td><a href="lista.php">lista</a></td>
                    </tr>
                </table>
            </form>            
        </div>
    </body>
</html>
