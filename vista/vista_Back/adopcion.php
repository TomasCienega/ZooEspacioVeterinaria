<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: ../login.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Espacio Salud Animal">
    <meta name="keywords" content="veterinaria, cuidado animal, mascota">
    <link rel="icon" href="../img/LogoClinica.ico">
    <title>Form Adopcion</title>
    <!-- Hoja de estilos personalizada -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="../css/css_back/adopcion.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Luckiest+Guy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"  href="http://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="nav">
            <a href="actualizarBanner.php">Banner</a>
            <a href="noticias.php">Formulario Perdido</a>
            <a href="verPerdido.php">Tarjeta Perdido</a>
            <a href="adopcion.php">Formulario Adopción</a>
            <a href="verAdopcion.php">Tarjeta Adopción</a>
            <a href="formFederacion.php">Formulario Federación</a>
            <a href="verFederacion.php">Tarjeta Federación</a>
            <a href="registro.php">Registro</a>
        </nav>
        <input class="logout" type="submit" value="Cerrar Sesión" name="CerrarSesion" id="CerrarSesion" onclick="cerrar_sesion();">
    </header>

    <h1 class="titulo rojo ">
            Adopción
    </h1>
    <form action="../../Controlador/mascotaAdoptadaController.php" method="post" enctype="multipart/form-data">
        <div class="adopcion">
            <div class="txt_form">
                <label for="">Imagen: </label>
                <br>
                <input type="file" name="imgA" id="imgA" multiple require>
            </div>
            <div class="txt_form">
                <label for="">Edad: </label>
                <input type="text" name="edadA" id="">
            </div>
            <div class="txt_form">
                <label for="">Raza: </label>
                <input type="text" name="razaA" id="">
            </div>
            <div class="txt_form">
                <label for="">Sexo: </label>
                <input type="text" name="sexoA" id="">
            </div>
        </div>

        <div class="btnCrud">
            <input class="btn_Verde" type="submit" value="Agregar">
        </div>
    </form>

    
</body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logout.js"></script>
    <script src="../../assets/js/jquery.js"></script>	
</html>