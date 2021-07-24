<?php 
    require('../Persistencia/Conexion.php');
    require('../modelo/mascotaAdoptada.php');

    if($_POST){
        $conn = new Conexion();
        $eliminar = new MascotaAdoptada();

        $accion=$_POST["id"];
        $res= $eliminar->borrarAdoptado($conn,$accion);
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