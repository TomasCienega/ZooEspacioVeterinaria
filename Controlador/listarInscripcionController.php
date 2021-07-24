<?php 
    require('../../modelo/inscripcion.php');
    require('../../Persistencia/Conexion.php');

    $conn = new Conexion();
    $inscripcion = new Inscripcion();

    $listarI = $inscripcion->listarInscripcion($conn);
    
?>