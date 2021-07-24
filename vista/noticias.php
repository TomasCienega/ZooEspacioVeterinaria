<?php
    include('../Controlador/vistaPerdidaController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zoo Espacio Salud Animal">
    <meta name="keywords" content="veterinaria, cuidado animal, mascota">
    <link rel="icon" href="img/LogoClinica.ico">
    <title>Zoo Espacio</title>
    <!-- Hoja de estilos personalizada -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="css/nstyle.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Luckiest+Guy&display=swap"
        rel="stylesheet">
        <link rel="stylesheet"  href="http://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <header class="header"> 
            <div class="espacioLogo">
                <a class="logo__img" href="../index.html">
                    <img class="animate__animated animate__slideInDown" src="img/LogoPNG.png" alt="logotipo">
                </a>
            </div>

            <nav class="titulo navegacion__items">
                <a class="navegacion__enlace1 animate__animated animate__lightSpeedInLeft" href="productos.html">Productos</a>
                <a class="navegacion__enlace2 animate__animated animate__lightSpeedInRight" href="servicios.html">Servicios</a>
                <a class="navegacion__enlace4 animate__animated animate__lightSpeedInLeft" href="noticias.php">Perdidos</a>
                <a class="navegacion__enlace4 animate__animated animate__lightSpeedInLeft" href="adopcion.php">Adoptame</a>
                <a class="navegacion__enlace3 animate__animated animate__lightSpeedInLeft" href="federacion.php">Federación</a>
            </nav>

    </header> <!-- TERMINO DEL HEADER -->

    <div class="imgBack">
        <img class="imgBack__perro" src="../modelo/verBanner1.php?id=4" alt="NOTICIAS">
    </div>



    <h1 class="titulo rojo ">
        Animales perdidos 
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
                                </ul>
                        </div>';
                }
            ?>
         </div>
    </div><!--.cuadro-->
        

        <!-- ******************************************************************************* -->
        <!--INICIO FORM MASCOTA PERDIDA -->
        <h1 class="titulo azul ">
            ¿Mascota perdida? podemos ayudarte
        </h1>
        <div class="mascP">
            <h5 class="mascT"> Mandanos un correo : </h5>
            <a class="mascE" href="https://mail.google.com/" target="blank">mvzamedel@hotmail.com</a>
            <h4 class="mascT">No olvides proporcionarnos la siguiente información :</h4>
            <ul class="mascI">
                <li>IMAGEN</li>
                <li>NOMBRE</li>
                <li>EDAD</li>
                <li>RAZA</li>
                <li>SEXO</li>
                <li>LA ÚLTIMA UBICACIÓN DONDE FUE VISTO</li>
                <li>TELÉFONO DE CONTACTO</li>
                <li>DUEÑO(A)</li>
                <li>CUALQUIER OTRO DATO QUE SEA DE AYUDA</li>
            </ul>
        </div>
        <!-- ******************************************************************************* -->


   

        <div class="bar"> <!--INICIO BARRA DE REDES-->
            <a href="https://www.facebook.com/zooespacio.clinicaveterinaria" class="icon icon-facebook " target="blank">
                <img src="img/facebook.png" alt="Federación">
            </a>
            <a href="https://www.instagram.com/zoo_espacio/?hl=es-la" class="icon icon-instagram " target="blank">
                <img src="img/instagram.png" alt="Federación">
            </a>
            <a href="login.html" class="icon icon-mail " target="blank">
                <img src="img/login.png" alt="Federación">
            </a>
            <a href="https://fcm.mx/" class="icon icon-fcm " target="blank">
                <img src="img/FCM.jpg" alt="Federación">
            </a>
        </div><!--FIN BARRA DE REDES-->

        <div class="bg"> <!--BG con Opacidad-->
            <img src="img/perro6.png" alt="perro">
        </div>
        <div class="bg1">
            <img src="img/perro30.png" alt="perro">
        </div><!--BG con Opacidad-->


    <footer class="piePag">
        <div class="global"><!-- Inicio .global -->

            <!-- Inicio .global__redes -->
            <div class="global__redes">
                <h2 class="lblanca">
                    contacto
                </h2>           
                <p class="global__redes-texto">
                    477-145-68-11
                </p>
                <p class="global__redes-texto">
                    mvzamedel@hotmail.com
                </p>
                <p class="global__redes-texto">
                    Blvd. Paseo de jerez 311 Col. Punto Verde
                </p>


            </div><!-- Fin .global__redes -->
            
            <!-- Inicio .global__asoc -->
            <div class="global__asoc">
                <h2 class="lblanca">
                    asociaciones
                </h2>
                <img class="global__asoc-img" src="img/FCM.jpg" alt="Federacion">
                <img class="global__asoc-img" src="img/CLUBPNG.png" alt="Club">
            </div><!-- Fin .global__asoc -->

        </div><!-- Fin .global -->

    </footer>

</body>

</html>