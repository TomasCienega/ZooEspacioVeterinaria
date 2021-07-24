<?php 
      Class Noticias{

        public function agregarNoticia($conn,$img_noticia,$descripcion,$texto){
            $conn = new Conexion();
            $cn = $conn->conectar();

            $sql="INSERT INTO `evento` (`id_evento`, `img_noticia`, `descripcion`, `texto`) VALUES (NULL,'$img_noticia','$descripcion','$texto')";


            $stmt= $cn->query($sql);
            return $stmt;
        }

        public function listarNoticia($conn){
          $cn = $conn->conectar();

          $sql="SELECT * FROM `evento`";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }

        public function borrarNoticia($conn, $id_evento){
          $cn = $conn->conectar();
          $sql="DELETE FROM `evento` WHERE id_evento=$id_evento";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }
      }  
?>