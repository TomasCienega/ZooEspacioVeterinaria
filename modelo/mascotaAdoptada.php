<?php 
      Class MascotaAdoptada{

        public function agregarAdoptado($conn,$img_adopcion,$edada,$razaa,$sexoa){
            $conn = new Conexion();
            $cn = $conn->conectar();

            $sql="INSERT INTO `adopcion` (`id_adopcion`, `img_adopcion`, `edada`, `razaa`, `sexoa`) VALUES (NULL,'$img_adopcion','$edada','$razaa','$sexoa')";


            $stmt= $cn->query($sql);
            return $stmt;
        }

        public function listarAdoptado($conn){
          $cn = $conn->conectar();

          $sql="SELECT * FROM `adopcion`";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }

        public function borrarAdoptado($conn, $id_adopcion){
          $cn = $conn->conectar();
          $sql="DELETE FROM `adopcion` WHERE id_adopcion=$id_adopcion";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }
      }  
?>