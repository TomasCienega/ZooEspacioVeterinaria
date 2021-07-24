<?php 
    require('../../modelo/noticia.php');
    require('../../Persistencia/Conexion.php');

    $conn = new Conexion();
    $noticia = new Noticias();

    $listarN = $noticia->listarNoticia($conn);
    
?>