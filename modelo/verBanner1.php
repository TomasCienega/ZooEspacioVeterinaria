<?php 
 include("../Persistencia/Conexion.php");
    if(!empty($_GET['id'])){
        $conn = new Conexion();
        $cn = $conn->conectar();
        $sent="SELECT imagen FROM `imgbanner` WHERE id_banner = {$_GET['id']}";
        $ver = $cn->query($sent);
        if($ver->num_rows>0){
            $imagen = $ver->fetch_assoc();
            header("Content-type: image/jpg");
            echo $imagen['imagen'];
        }
    }
?>