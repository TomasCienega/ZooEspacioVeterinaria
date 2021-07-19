<?php 
    require('../Persistencia/Conexion.php');
    Class Login{
        public function iniciar_sesion($user,$pass){
            $con= new Conexion();
            $mysql= $con->conectar();
            $sql="SELECT * FROM `usuario` WHERE usuario= ? AND password = ? "; 
            $stmt= $mysql->prepare($sql);
            $passmd5=md5($pass);
            $stmt->bind_param('ss',$user,$passmd5);
            $stmt->execute();
            $stmt->bind_result($id,$usuario,$password);
            $stmt->fetch();
            $stmt->close();

            if(!$usuario){
                return "El usuario y/o contraseña son incorrectos";
            }else{
                session_start();
                $_SESSION['usuario']=$usuario;
                return "OK";
            }
        }
        public function logOut($cerrar){
            if($cerrar=='CerrarSesion'){
                session_start();  
                session_unset();
                session_destroy();
                return "OK";
            }else{
                return "No es CerrarSesion";
            }
        }
    }
?>