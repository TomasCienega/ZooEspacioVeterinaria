<?php
    include('../Controlador/vistaAdoptadoController.php');
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
    <link rel="stylesheet" href="css/adstyle.css">
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
        <img class="imgBack__perro" src="../modelo/verBanner1.php?id=5" alt="NOTICIAS">
    </div>

        <!-- ******************************************************************************* -->
        <h1 class="titulo amarillo ">
            Adoptame
        </h1>
        <div class="cuadro"><!--.cuadro-->
        <div class="cuadro__flex">
            <?php  
                 while ($filaA=$listarA->fetch_assoc()){
                     echo'        
                
                         <div class="cuadro__hijo">
                             <img src="data:image/jpg;base64, '.base64_encode($filaA['img_adopcion']).' "alt="Adopcion">
                             <ul class="mascPeL">
                                 <li>Edad: '.$filaA['edada'].'</li>
                                 <li>Raza: '.$filaA['razaa'].'</li>
                                 <li>Sexo: '.$filaA['sexoa'].'</li>
                             </ul>
                         </div>';
                }
            ?>
         </div>
    </div><!--.cuadro-->

   

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