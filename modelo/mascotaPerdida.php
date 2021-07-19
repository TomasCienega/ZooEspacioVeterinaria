<?php 
      Class MascotaPerdida{

        public function agregarMascota($conn,$img_mascota,$nombre,$edadp,$razap,
                                        $sexo,$telefono,$ubicacion,$dueno,$datos){
            $conn = new Conexion();
            $cn = $conn->conectar();

            $sql="INSERT INTO `mascota_perdida` (`id_mascota`, `img_mascota`,`nombre`, `edadp`, `razap`, `sexo`, `telefono`, `ubicacion`, `dueno`, `datos`) VALUES (NULL,'$img_mascota','$nombre','$edadp','$razap','$sexo','$telefono','$ubicacion','$dueno','$datos')";


            $stmt= $cn->query($sql);
            return $stmt;
        }

        public function listarPerdido($conn){
          $cn = $conn->conectar();

          $sql="SELECT * FROM `mascota_perdida`";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }

        public function borrarPerdido($conn, $id_mascota){
          $cn = $conn->conectar();
          $sql="DELETE FROM `mascota_perdida` WHERE id_mascota=$id_mascota";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }
      }  
?>