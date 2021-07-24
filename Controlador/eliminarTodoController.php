<?php 
    require('../Persistencia/Conexion.php');
    require('../modelo/inscripcion.php');

    if($_POST){
        $conn = new Conexion();
        $eliminar = new Inscripcion();

        $res= $eliminar->borrarTodas($conn);
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