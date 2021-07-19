<?php
    include('../../Controlador/listarPerdidoController.php');
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
    <link rel="stylesheet" href="../css/css_back/verPerdido.css">
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
            <a href="noticias.php">Noticias</a>
            <a href="verPerdido.php">Mascota</a>
            <a href="#">Federación</a>
            <a href="#">Registro</a>
        </nav>
        <input class="logout" type="submit" value="Cerrar Sesión" name="CerrarSesion" id="CerrarSesion" onclick="cerrar_sesion();">
    </header>

    <h1 class="titulo azul ">
            Mascota perdida
    </h1>
    <div class="cuadro"><!--.cuadro-->
        <div class="cuadro__flex">
            <?php 
                while ($fila=$listar->fetch_assoc()){
                    echo'        
                
                        <div class="cuadro__hijo">
                            <img src="data:image/jpg;base64, '.base64_encode($fila['img_mascota']).' "alt="Perdido">
                            <ul class="mascPeL">
                                <li>Nombre: '.$fila['nombre'].'</li>
                                <li>Edad: '.$fila['edadp'].'</li>
                                <li>Raza: '.$fila['razap'].'</li>
                                <li>Sexo: '.$fila['sexo'].'</li>
                                <li>Contacto: '.$fila['telefono'].'</li>
                                <li>Última ubicación: '.$fila['ubicacion'].'</li>
                                <li>Dueño(a): '.$fila['dueno'].'</li>
                                <li>Datos extra: '.$fila['datos'].'</li>
                                <button class="btn_Rojo" name="btnEliminar"
                                onclick="eliminar_perdido('.$fila['id_mascota'].');">Eliminar</button>
                            </ul>
                        </div>';
                }
            ?>
         </div>
    </div><!--.cuadro-->
    
</body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="../../js/eliminarPerdido.js"></script>
     <script src="../../assets/js/jquery.js"></script>
     <script src="../../js/logout.js"></script>	
</html>