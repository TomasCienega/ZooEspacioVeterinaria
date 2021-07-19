<?php 
    require('../modelo/login.php');
    if($_POST){
        $user=$_POST["usuario"];
        $pass=$_POST["password"];
        if($user==""){
            echo json_encode("Usuario Vacío");
            return;
        }
        if($pass==""){
            echo json_encode("Contraseña Vacía");
            return;
        }

        $modelLog = new Login();
        $res= $modelLog->iniciar_sesion($user,$pass);
        echo json_encode($res);
    }else{
        echo json_encode("Formulario vacio");
        return;
    }
?>