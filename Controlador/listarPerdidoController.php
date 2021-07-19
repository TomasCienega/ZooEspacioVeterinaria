<?php 
    require('../../modelo/mascotaPerdida.php');
    require('../../Persistencia/Conexion.php');

    $conn = new Conexion();
    $perdido = new MascotaPerdida();

    $listar = $perdido->listarPerdido($conn);
    
?>