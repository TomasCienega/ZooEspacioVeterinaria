<?php 
    require('../modelo/noticia.php');
    require('../Persistencia/Conexion.php');

    $conn = new Conexion();
    $noticia = new Noticias();

    $image = $_FILES['imgN']['tmp_name'];
    $imagen = addslashes(file_get_contents($image));
    $descripcion = $_POST["desc"];
    $texto = $_POST["infoF"];
 
    $insertarNoticia = $noticia->agregarNoticia($conn,$imagen,$descripcion,$texto);


    if ($insertarNoticia) {
        header("Location: ../vista/vista_Back/verFederacion.php");
    }else{
        echo 'Ha ocurrido un error inesperado';
    }
?>