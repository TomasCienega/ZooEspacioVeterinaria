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
    <title>Banner</title>
    <!-- Hoja de estilos personalizada -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="../css/css_back/abastyle.css">
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
    <div class="banner">
        <form action="../../modelo/bannerImg.php" method="post" enctype="multipart/form-data">
            <h1 class="txt_banner">PRINCIPAL</h1>
            <img class="imgBack__perro" src="../../modelo/verBanner1.php?id=1" alt="NOTICIAS">
            <input class="img_banner" type="file" name="img" id="img" required>
            <input class="btn_banner" type="submit" value="Actualizar" name="Actualizar1">
        </form>
    </div>    
    <div class="banner">
        <form action="../../modelo/bannerImg.php" method="post" enctype="multipart/form-data">
            <h1 class="txt_banner">PRODUCTOS</h1>
            <img class="imgBack__perro" src="../../modelo/verBanner1.php?id=2" alt="NOTICIAS">
            <input class="img_banner" type="file" name="img" id="img" required>
            <input class="btn_banner" type="submit" value="Actualizar" name="Actualizar2">
        </form>
    </div>
    <div class="banner">
        <form action="../../modelo/bannerImg.php" method="post" enctype="multipart/form-data">
            <h1 class="txt_banner">SERVICIOS</h1>
            <img class="imgBack__perro" src="../../modelo/verBanner1.php?id=3" alt="NOTICIAS">
            <input class="img_banner" type="file" name="img" id="img" required>
            <input class="btn_banner" type="submit" value="Actualizar" name="Actualizar3">
        </form>
    </div>
    <div class="banner">
        <form action="../../modelo/bannerImg.php" method="post" enctype="multipart/form-data">
            <h1 class="txt_banner">Animales Perdidos</h1>
            <img class="imgBack__perro" src="../../modelo/verBanner1.php?id=4" alt="NOTICIAS">
            <input class="img_banner" type="file" name="img" id="img" required>
            <input class="btn_banner" type="submit" value="Actualizar" name="Actualizar4">
        </form>
    </div>
    <div class="banner">
        <form action="../../modelo/bannerImg.php" method="post" enctype="multipart/form-data">
            <h1 class="txt_banner">Adopciones</h1>
            <img class="imgBack__perro" src="../../modelo/verBanner1.php?id=5" alt="NOTICIAS">
            <input class="img_banner" type="file" name="img" id="img" required>
            <input class="btn_banner" type="submit" value="Actualizar" name="Actualizar5">
        </form>
    </div>
</body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logout.js"></script>
    <script src="../../assets/js/jquery.js"></script>	
</html>