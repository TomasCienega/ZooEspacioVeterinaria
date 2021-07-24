<?php 
    require('../Persistencia/Conexion.php');
    require('../modelo/inscripcion.php');

    $conn = new Conexion();
    $agregar = new Inscripcion();

    $raza = $_POST['raza'];
    $color = $_POST['color'];
    $nEjemplar = $_POST['nombreEjemplar'];
    $fechaNac = $_POST['fechaNac'];
    $lugarNac = $_POST['lugarNac'];
    $nRegFcm = $_POST['nRegFcm'];
    $nMicrochip = $_POST['nMicrochip'];
    $nPadre = $_POST['nPadre'];
    $nMadre = $_POST['nMadre'];
    $nManejador = $_POST['nManejador'];
    $nSocio1 = $_POST['nSocio1'];
    $nPropietario = $_POST['nPropietario'];
    $nSocio2 = $_POST['nSocio2'];
    $domicilio = $_POST['domicilio'];
    $colonia = $_POST['colonia'];
    $cp = $_POST['cp'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $mTramite = "NO";
    if(isset($_POST['mTramite'])){
        $mTramite = "SI";
        $nMicrochip = "NO";
    }
    $regTramite = "NO";
    if(isset($_POST['regTramite'])){
        $regTramite = "SI";
        $nRegFcm = "NO";
    }
    $sexo = "NO";
    if(isset($_POST['sexo'])){
        $sexo = "SI";
    } 
    $jueves = "NO";
    if(isset($_POST['jueves'])){
        $jueves = "SI";
    } 
    $viernes = "NO";
    if(isset($_POST['viernes'])){
        $viernes = "SI";
    } 
    $sabado = "NO";
    if(isset($_POST['sabado'])){
        $sabado = "SI";
    } 
    $domingo = "NO";
    if(isset($_POST['domingo'])){
        $domingo = "SI";
    }
    $A = "NO";
    if(isset($_POST['A'])){
        $A = "SI";
    }
    $B = "NO";
    if(isset($_POST['B'])){
        $B = "SI";
    }
    $j = "NO";
    if(isset($_POST['j'])){
        $j = "SI";
    }
    $cJ = "NO";
    if(isset($_POST['cJ'])){
        $cJ = "SI";
    }
    $i = "NO";
    if(isset($_POST['i'])){
        $i = "SI";
    }
    $l = "NO";
    if(isset($_POST['l'])){
        $l = "SI";
    }
    $cM = "NO";
    if(isset($_POST['cM'])){
        $cM = "SI";
    }
    $v = "NO";
    if(isset($_POST['v'])){
        $v = "SI";
    }
    $c = "NO";
    if(isset($_POST['c'])){
        $c = "SI";
    }
    $gC = "NO";
    if(isset($_POST['gC'])){
        $gC = "SI";
    }
    $p = "NO";
    if(isset($_POST['p'])){
        $p = "SI";
    }
    $pJ = "NO";
    if(isset($_POST['pJ'])){
        $pJ = "SI";
    }
    $cD = "NO";
    if(isset($_POST['cD'])){
        $cD = "SI";
    }
    $e = "NO";
    if(isset($_POST['e'])){
        $e = "SI";
    }
    // echo($raza.",".$color.",".$sexo.",".$nEjemplar.",". $fechaNac.",". $lugarNac.",". $nRegFcm.",". $regTramite.",". $nMicrochip.",". $mTramite.",". $nPadre.",". $nMadre.",". $nManejador.",". $nSocio1.",". $nPropietario.",". $nSocio2.",". $domicilio.",". $colonia.",". $cp.",". $ciudad.",". $estado.",". $email.",". $telefono.",". $jueves.",". $viernes.",". $sabado.",". $domingo.",". $A.",". $B.",". $j.",". $cJ.",". $i.",". $l.",". $cM.",". $v.",". $c.",". $gC.",". $p.",". $pJ.",". $cD.",". $e);

    $res=$agregar->agregarInscripcion($conn,$raza, $color, $sexo, $nEjemplar, $fechaNac, $lugarNac, $nRegFcm, $regTramite, $nMicrochip, $mTramite, $nPadre, $nMadre, $nManejador, $nSocio1, $nPropietario, $nSocio2, $domicilio, $colonia, $cp, $ciudad, $estado, $email, $telefono, $jueves, $viernes, $sabado, $domingo, $A, $B, $j, $cJ, $i, $l, $cM, $v, $c, $gC, $p, $pJ, $cD, $e);

    if($res){
        header("Location: ../vista/federacion.php");
        // echo json_encode($res);
    }else{
        echo json_encode("Ha ocurrido un error");
    }
    
?>