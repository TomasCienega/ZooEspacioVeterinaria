<?php 
    include("../Persistencia/Conexion.php");
    $imagen = $_FILES["img"]["tmp_name"];
    $imgFull = addslashes(file_get_contents($imagen));
    $conn = new Conexion();
    $cn = $conn->conectar();
    $sent="";
    // $sent="INSERT INTO `imgbanner` (`id_banner`, `imagen`) VALUES (NULL, '$imgFull')";
    if(isset($_POST['Actualizar1'])){
        $sent="UPDATE `imgbanner` SET `imagen` = '$imgFull' WHERE id_banner=1";
    }else if(isset($_POST['Actualizar2'])){
        $sent="UPDATE `imgbanner` SET `imagen` = '$imgFull' WHERE id_banner=2";
    }else if(isset($_POST['Actualizar3'])){
        $sent="UPDATE `imgbanner` SET `imagen` = '$imgFull' WHERE id_banner=3";
    }else if(isset($_POST['Actualizar4'])){
        $sent="UPDATE `imgbanner` SET `imagen` = '$imgFull' WHERE id_banner=4";
    }else if(isset($_POST['Actualizar5'])){
        $sent="UPDATE `imgbanner` SET `imagen` = '$imgFull' WHERE id_banner=5";
    }
    $insertar = $cn->query($sent);

    if($insertar){
        header("Location: ../vista/vista_Back/actualizarBanner.php");
    }else{
        echo 'Ha ocurrido un error inesperado';
    }
    
?>