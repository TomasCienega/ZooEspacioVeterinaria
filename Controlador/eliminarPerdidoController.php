<?php 
    require('../Persistencia/Conexion.php');
    require('../modelo/mascotaPerdida.php');

    if($_POST){
        $conn = new Conexion();
        $eliminar = new MascotaPerdida();

        $accion=$_POST["id"];
        $res= $eliminar->borrarPerdido($conn,$accion);
        if($res){
            echo json_encode("OK");
        }else{
            echo json_encode("No se pudo Borrar");
        }
    }
    else{
        echo json_encode("Ha ocurrido un error");
    }
?>