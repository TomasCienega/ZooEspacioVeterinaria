<?php 
      Class Inscripcion{

        public function agregarInscripcion($conn, $raza, $color, $sexo, $nombreEjemplar, $fechaNac, $lugarNac, $nRegFcm, $regTramite, $nMicrochip, $mTramite, $nPadre, $nMadre, $nManejador, $nSocio1, $nPropietario, $nSocio2, $domicilio, $colonia, $cp, $ciudad, $estado, $email, $telefono, $jueves, $viernes, $sabado, $domingo, $A, $B, $j, $cJ, $i, $l, $cM, $v, $c, $gC, $p, $pJ, $cD, $e){
            $conn = new Conexion();
            $cn = $conn->conectar();

            $sql="INSERT INTO `inscripcion` (`id_inscripcion`, `raza`, `color`, `sexo`, `nombreEjemplar`, `fechaNac`, `lugarNac`, `nRegFcm`, `regTramite`, `nMicrochip`, `mTramite`, `nPadre`, `nMadre`, `nManejador`, `nSocio1`, `nPropietario`, `nSocio2`, `domicilio`, `colonia`, `cp`, `ciudad`, `estado`, `email`, `telefono`, `jueves`, `viernes`, `sabado`, `domingo`, `A`, `B`, `j`, `cJ`, `i`, `l`, `cM`, `v`, `c`, `gC`, `p`, `pJ`, `cD`, `e`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $stmt= $cn->prepare($sql);
            $stmt->bind_param('sssssssssssssssssssssssssssssssssssssssss',$raza, $color, $sexo, $nombreEjemplar, $fechaNac, $lugarNac, $nRegFcm, $regTramite, $nMicrochip, $mTramite, $nPadre, $nMadre, $nManejador, $nSocio1, $nPropietario, $nSocio2, $domicilio, $colonia, $cp, $ciudad, $estado, $email, $telefono, $jueves, $viernes, $sabado, $domingo, $A, $B, $j, $cJ, $i, $l, $cM, $v, $c, $gC, $p, $pJ, $cD, $e);
            $stmt->execute();
            $stmt->close();
            return $stmt;
        }

        public function listarInscripcion($conn){
          $cn = $conn->conectar();

          $sql="SELECT * FROM `inscripcion`";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }

        public function verInscripcion($conn, $id_inscripcion){
          $cn = $conn->conectar();
          $sql="SELECT * FROM `inscripcion` WHERE id_inscripcion=$id_inscripcion";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }

        public function borrarInscripcion($conn, $id_inscripcion){
          $cn = $conn->conectar();
          $sql="DELETE FROM `inscripcion` WHERE id_inscripcion=$id_inscripcion";
          $stmt= $cn->query($sql);
          
          return $stmt;
        }

        public function borrarTodas($conn){
          $cn = $conn->conectar();
          $sql="DELETE FROM `inscripcion`";
          $stmt= $cn->query($sql);
          return $stmt;
        }

        
      }  
?>