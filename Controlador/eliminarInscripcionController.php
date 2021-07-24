<?php 
    require('../Persistencia/Conexion.php');
    require('../modelo/inscripcion.php');

    if($_POST){
        $conn = new Conexion();
        $eliminar = new Inscripcion();

        $accion=$_POST["id"];
        $res= $eliminar->borrarInscripcion($conn,$accion);
        if($res){
            echo json_encode("OK");
        }else{
            echo json_encode($accion);
        }
    }
    else{
        echo json_encode("Ha ocurrido un error");
    }
?>