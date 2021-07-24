<?php 
    require('../modelo/mascotaAdoptada.php');
    require('../Persistencia/Conexion.php');

    $conn = new Conexion();
    $adoptado = new MascotaAdoptada();

    $image = $_FILES['imgA']['tmp_name'];
    $imagen = addslashes(file_get_contents($image));
    $edad = $_POST["edadA"];
    $raza = $_POST["razaA"];
    $sexo = $_POST["sexoA"];
 
    $insertarAdoptado = $adoptado->agregarAdoptado($conn,$imagen,$edad,$raza,$sexo);

    if ($insertarAdoptado) {
        header("Location: ../vista/vista_Back/verAdopcion.php");
    }else{
        echo 'Ha ocurrido un error inesperado';
    }
?>