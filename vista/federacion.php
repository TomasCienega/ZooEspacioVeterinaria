<?php
    include('../Controlador/vistaNoticiaController.php');
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
    <link rel="stylesheet" href="css/fstyle.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Luckiest+Guy&display=swap"
        rel="stylesheet">

</head>

<body>
    <header class="header">
            <div class="espacioLogo">
                <a class="logo__img" href="../index.html">
                    <img class="animate__animated animate__slideInDown" src="img/LogoPNG.png" alt="logotipo">
                </a>
            </div>

            <nav class="titulo navegacion__items">
                <a class="navegacion__enlace animate__animated animate__lightSpeedInLeft" href="productos.html">Productos</a>
                <a class="navegacion__enlace animate__animated animate__lightSpeedInRight" href="servicios.html">Servicios</a>
                <a class="navegacion__enlace animate__animated animate__lightSpeedInLeft" href="noticias.php">Perdidos</a>
                <a class="navegacion__enlace animate__animated animate__lightSpeedInLeft" href="adopcion.php">Adoptame</a>
                <a class="navegacion__enlace animate__animated animate__lightSpeedInLeft" href="federacion.php">Federación</a>
            </nav>

    </header> <!-- TERMINO DEL HEADER -->

    <div class="slider">
        <ul>
            <li><img src="img/gato1.jpg" alt=""></li>
            <li><img src="img/gato2.jpg" alt=""></li>
            <li><img src="img/gato3.jpg" alt=""></li>
            <li><img src="img/mascotas.jpg" alt=""></li>
        </ul>
    </div>

    <!-- ********************************************************************* -->

    <!-- Inicio class padre -->
    <div class="padre"> 

        <div class="asociacion">
            <div class="asociacion__hijo">
                <img class="asociacion__img" src="img/FCM.jpg" alt="Federacion">
                <img class="asociacion__img" src="img/CLUBPNG.png" alt="Club">
                <img class="asociacion__img" src="img/fci.png" alt="">
            </div>
        </div>
        
        <div class="btnForm">
            <!--azul animate__animated animate__pulse animate__infinite-->
            <h1 class="txtReg titulo ">formulario para inscripción de evento</h1>
            <a href="formulario.html" target="blank" class="btnReg titulo ">Inscribete</a>
        </div>

        <div class="texto">
                <div class="texto__inf">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore libero amet perspiciatis architecto, voluptate aspernatur doloribus corporis illum ullam hic possimus sit veniam vero eaque ducimus? Corporis quaerat dolorem debitis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore libero amet perspiciatis architecto, voluptate aspernatur doloribus corporis illum ullam hic possimus sit veniam vero eaque ducimus? Corporis quaerat dolorem debitis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore libero amet perspiciatis architecto, voluptate aspernatur doloribus corporis illum ullam hic possimus sit veniam vero eaque ducimus? 
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore libero amet perspiciatis architecto, voluptate aspernatur doloribus corporis illum ullam hic possimus sit veniam vero eaque ducimus? Corporis quaerat dolorem debitis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore libero amet perspiciatis architecto, voluptate aspernatur doloribus corporis illum ullam hic possimus sit veniam vero eaque ducimus? Corporis quaerat dolorem debitis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore libero amet perspiciatis architecto, voluptate aspernatur doloribus corporis illum ullam hic possimus sit veniam vero eaque ducimus? 
                    </p>
                </div>
            </div>
        </div>

        <div class="cuadro"><!--.cuadro-->
        <div class="cuadro__flex">
            <?php 
                 while ($filaNoticia=$listarN->fetch_assoc()){
                     echo'        
                
                         <div class="cuadro__hijo">
                             <img src="data:image/jpg;base64, '.base64_encode($filaNoticia['img_noticia']).' "alt="Perdido">
                             <ul class="mascPeL">
                                 <li>Descripcion: '.$filaNoticia['descripcion'].'</li>
                                 <li>'.$filaNoticia['texto'].'</li>
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
            <img src="img/perro27.png" alt="perro">
        </div>
        <div class="bg1">
            <img src="img/perro16.png" alt="perro">
        </div><!--BG con Opacidad-->
    </div><!-- .padre -->
    
    <!-- INICIO DEL FOOTER -->
    <footer class="piePag">

        <!-- <div class="piePag__Informacion">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab perferendis numquam dolore quos, fugit sint debitis perspiciatis dignissimos officia adipisci eum soluta ipsam ullam dolor necessitatibus temporibus veritatis atque consectetur?
            </p>
        </div> -->
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