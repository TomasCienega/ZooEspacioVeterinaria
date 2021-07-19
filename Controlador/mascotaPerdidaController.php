<?php 
    require('../modelo/mascotaPerdida.php');
    require('../Persistencia/Conexion.php');

    $conn = new Conexion();
    $perdido = new MascotaPerdida();

    $image = $_FILES['img']['tmp_name'];
    $imagen = addslashes(file_get_contents($image));
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $raza = $_POST["raza"];
    $sexo = $_POST["sexo"];
    $telefono = $_POST["telefono"];
    $ubicacion = $_POST["ubicacion"];
    $dueno = $_POST["dueno"];
    $datos = $_POST["datos"];

    
    $insertar = $perdido->agregarMascota($conn,$imagen,$nombre,$edad,$raza,$sexo,$telefono,$ubicacion,$dueno,$datos);


    if ($insertar) {
        header("Location: ../vista/vista_Back/verPerdido.php");
    }else{
        echo 'Ha ocurrido un error inesperado';
    }
?>