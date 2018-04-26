<?php
$title = "Documentos Adjuntos| ";
?>
 
<div class="right_col" role="main"><!-- page content -->
    <div class="">
        <div class="x_panel">
            <div class="x_title">
                <h2>Documentos Adjuntos</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
 
            <div class="row">
                <div class="col-md-12">
                    <h1>Nuevo Archivo</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i> Inicio</li>
                        <li><i class="fa fa-asterisk"></i> Nuevo archivo</li>
                    </ol>
                </div>
            </div>
 
            <div class="row">
                <div class="col-md-12">
                    <form role="form" method="post" action="" enctype="multipart/form-data">
 
                        <?php
                        include_once 'config/config.php';
 
                        if (isset($_POST['Guardar'])) {
                            $nombre = $_FILES['filename']['name'];
                            $tipo = $_FILES['filename']['type'];
                            $tamanio = $_FILES['filename']['size'];
                            $ruta = $_FILES['filename']['tmp_name'];
                            $destino = "adjuntos/" . $nombre;
 
                            if ($nombre != "") {
                                if (copy($ruta, $destino)) {
                                    $titulo = $_POST['titulo'];
                                    $descripcion = $_POST['description'];
                                    $is_public = 0;
 
                                    $sql = "INSERT INTO adjunto(titulo, name, is_public, description, size, type) VALUES ('$titulo','$nombre','$is_public','$descripcion','$tamanio','$tipo')";
 
                                    $query_new_insert = mysqli_query($con, $sql);
 
                                    if ($query_new_insert) {
                                        $messages[] = "Tu documento ha sido ingresado satisfactoriamente.";
                                    } else {
                                        $errors [] = "Lo siento algo ha salido mal intenta nuevamente." . mysqli_error($con);
                                    }
                                } else {
                                    $errors [] = "Error desconocido.";
                                }
 
                                if (isset($errors)) {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Error!</strong>
                                        <?php
                                        foreach ($errors as $error) {
                                            echo $error;
                                        }
                                        ?>
                                    </div>
                                    <?php
                                }
 
                                if (isset($messages)) {
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>¡Bien hecho!</strong>
                                        <?php
                                        foreach ($messages as $message) {
                                            echo $message;
                                        }
                                        ?>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
 
                        <div class="form-group">
                            <label for="adjunto">Archivo</label>
                            <input type="file" name="filename" required>
                        </div>
 
                        <div class="form-group">
                            <label for="adjunto">Título</label>
                            <input type="text" class="form-control" name="titulo">
                        </div>
 
                        <div class="form-group">
                            <label for="adjunto">Descripción</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="is_public"> Archivo publico
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="Agregar">Agregar</button>
                        <td><a href="lista.php" class="btn btn-primary">Lista</a></td>
                    </form>
 
                </div>
            </div>
        </div>