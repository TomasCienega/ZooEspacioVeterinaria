<?php 
    require('../modelo/mascotaAdoptada.php');
    require('../Persistencia/Conexion.php');

    $conn = new Conexion();
    $adoptado = new MascotaAdoptada();

    $listarA = $adoptado->listarAdoptado($conn);
    
?>