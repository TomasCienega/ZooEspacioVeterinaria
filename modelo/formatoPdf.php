<?php
require('../assets/FPDF/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../vista/img/logoF.jpg',95,3,25);
        // Arial bold 15
        $this->SetFont('Arial','B',10);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,35,utf8_decode('Te recordamos que los datos que ingreses son los que APARECERAN en el catálogo'),0,0,'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(30,35,utf8_decode('y hoja de inscripción. ESTOS DATOS deben coincidir con los de FCM y de no ser'),0,0,'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(30,35,utf8_decode('los correctos, EL PERRO PERDERÁ TODOS LOS PREMIOS OBTENIDOS'),0,0,'C');
        // Salto de línea
        $this->Ln(10);
    }

    // Cuerpo de página
    function Body($raza, $color, $sexo, $nombreEjemplar, $fechaNac, $lugarNac, $nRegFcm, $regTramite, $nMicrochip, $mTramite, $nPadre, $nMadre, $nManejador, $nSocio1, $nPropietario, $nSocio2, $domicilio, $colonia, $cp, $ciudad, $estado, $email, $telefono, $jueves, $viernes, $sabado, $domingo, $A, $B, $j, $cJ, $i, $l, $cM, $v, $c, $gC, $p, $pJ, $cD, $e)
    {
        $this->Ln(10);
        $this->SetFont('Arial','B',14);
        $this->Cell(0,10,utf8_decode('Formato de inscripción'),0,1,'C');

        $this->Ln(1);
        $this->SetFont('Arial','B',10);
        $this->Cell(30,7,utf8_decode('Raza o variedad: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(0,7,utf8_decode($raza),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(30,7,utf8_decode('Color y Marcas: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(100,7,utf8_decode($color),1,0);

        $this->SetFont('Arial','B',10);
        $this->Cell(15,7,utf8_decode('Sexo: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(30,7,utf8_decode($sexo),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('Nombre de ejemplar: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(100,7,utf8_decode($nombreEjemplar),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(39,7,utf8_decode('Fecha de nacimiento: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(40,7,utf8_decode($fechaNac),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('lugar de nacimiento: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(50,7,utf8_decode($lugarNac),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(45,7,utf8_decode('No. de Registro FCM: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(40,7,utf8_decode($nRegFcm),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('Registro en tramite: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(10,7,utf8_decode($regTramite),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(45,7,utf8_decode('No. de Microchip: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(40,7,utf8_decode($nMicrochip),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('Microchip en tramite: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(10,7,utf8_decode($mTramite),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('Nombre del Padre: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(100,7,utf8_decode($nPadre),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('Nombre de la Madre: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(100,7,utf8_decode($nMadre),1,1);

        $this->Ln(8);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('Nombre Manejador: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(90,7,utf8_decode($nManejador),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(25,7,utf8_decode('No. de Socio: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(30,7,utf8_decode($nSocio1),1,1);

        $this->Ln(8);
        $this->SetFont('Arial','B',10);
        $this->Cell(38,7,utf8_decode('Nombre Propietario: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(90,7,utf8_decode($nPropietario),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(25,7,utf8_decode('No. de Socio: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(30,7,utf8_decode($nSocio2),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(18);
        $this->Cell(20,7,utf8_decode('Domicilio: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(120,7,utf8_decode($domicilio),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(20);
        $this->Cell(18,7,utf8_decode('Colonia: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(80,7,utf8_decode($colonia),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Código Postal: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(30,7,utf8_decode($cp),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(20);
        $this->Cell(18,7,utf8_decode('Ciudad: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(80,7,utf8_decode($ciudad),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(15,7,utf8_decode('Estado: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(43,7,utf8_decode($estado),1,1);

        $this->Ln(2);
        $this->SetFont('Arial','B',10);
        $this->Cell(20);
        $this->Cell(18,7,utf8_decode('E-mail: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(60,7,utf8_decode($email),1,0);
        $this->SetFont('Arial','B',10);
        $this->Cell(18,7,utf8_decode('Telefono: '),0,0);
        $this->SetFont('Arial','',10);
        $this->Cell(43,7,utf8_decode($telefono),1,1);

        $this->Ln(8);
        $this->SetFont('Arial','B',10);
        $this->Cell(40);
        $this->Cell(18,7,utf8_decode('Fechas: '),0,0);
        $this->Cell(70);
        $this->Cell(18,7,utf8_decode('Clases: '),0,1);

        $this->Ln(2);
        $this->SetFont('Arial','',10);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($jueves),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(18,7,utf8_decode('Jueves'),0,0);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($A),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Cachorro A'),0,0);
        $this->Cell(7,7,utf8_decode($v),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Veterano'),0,1);

        $this->Ln(2);
        $this->SetFont('Arial','',10);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($viernes),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(18,7,utf8_decode('Viernes'),0,0);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($B),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Cachorro B'),0,0);
        $this->Cell(7,7,utf8_decode($c),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Campeón'),0,1);

        $this->Ln(2);
        $this->SetFont('Arial','',10);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($sabado),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(18,7,utf8_decode('Sábado'),0,0);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($j),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Joven'),0,0);
        $this->Cell(7,7,utf8_decode($gC),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Gran Campeón'),0,1);

        $this->Ln(2);
        $this->SetFont('Arial','',10);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($domingo),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(18,7,utf8_decode('Domingo'),0,0);
        $this->Cell(40);
        $this->Cell(7,7,utf8_decode($cJ),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Camp. Joven'),0,0);
        $this->Cell(7,7,utf8_decode($p),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Progenie'),0,1);

        $this->Ln(2);
        $this->Cell(105);
        $this->Cell(7,7,utf8_decode($i),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Intermedia'),0,0);
        $this->Cell(7,7,utf8_decode($pJ),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Pareja'),0,1);

        $this->Ln(2);
        $this->Cell(105);
        $this->Cell(7,7,utf8_decode($l),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Libre'),0,0);
        $this->Cell(7,7,utf8_decode($cD),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Criadero'),0,1);

        $this->Ln(2);
        $this->Cell(105);
        $this->Cell(7,7,utf8_decode($cM),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Cría Mexicana'),0,0);
        $this->Cell(7,7,utf8_decode($e),1,0,'C');
        $this->SetFont('Arial','B',10);
        $this->Cell(28,7,utf8_decode('Exhibición'),0,0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

include('../Persistencia/Conexion.php');
include('inscripcion.php');

$conn = new Conexion();
$ver = new Inscripcion();
$id = $_POST['id_inscripcion'];
$datos = $ver->verInscripcion($conn, $id);
$inscripcion = $datos->fetch_assoc();

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Body($inscripcion['raza'], $inscripcion['color'], $inscripcion['sexo'], $inscripcion['nombreEjemplar'],$inscripcion['fechaNac'],$inscripcion['lugarNac'],$inscripcion['nRegFcm'],$inscripcion['regTramite'],$inscripcion['nMicrochip'],$inscripcion['mTramite'],$inscripcion['nPadre'],$inscripcion['nMadre'],$inscripcion['nManejador'],$inscripcion['nSocio1'],$inscripcion['nPropietario'],$inscripcion['nSocio2'],$inscripcion['domicilio'],$inscripcion['colonia'],$inscripcion['cp'],$inscripcion['ciudad'],$inscripcion['estado'],$inscripcion['email'],$inscripcion['telefono'],$inscripcion['jueves'],$inscripcion['viernes'],$inscripcion['sabado'],$inscripcion['domingo'],$inscripcion['A'],$inscripcion['B'],$inscripcion['j'],$inscripcion['cJ'],$inscripcion['i'],$inscripcion['l'],$inscripcion['cM'],$inscripcion['v'],$inscripcion['c'],$inscripcion['gC'],$inscripcion['p'],$inscripcion['pJ'],$inscripcion['cD'],$inscripcion['e']);
$pdf->Output();