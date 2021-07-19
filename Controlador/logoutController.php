<?php 
    require('../modelo/login.php');
    if($_POST){
        $accion=$_POST["btnCerrar"];
        $modelLog = new Login();
        $res= $modelLog->logOut($accion);
        echo json_encode($res);
    }else{
        echo json_encode('Fallo cerrar sesion');
        return;
    }
?>