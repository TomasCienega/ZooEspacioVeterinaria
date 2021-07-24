<?php
    include('../../Controlador/listarInscripcionController.php');
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('location: ../login.html');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Zoo Espacio Salud Animal">
        <meta name="keywords" content="veterinaria, cuidado animal, mascota">
        <link rel="icon" href="../img/LogoClinica.ico">
    <!-- StyleSheet -->
    <link rel="stylesheet" href="../css/css_back/tabla.css">
    <link rel="stylesheet" href="../css/css_back/registro.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../../assets/DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/DataTables/Bootstrap-5-5.0.1/css/bootstrap.css">

    <title>Tabla Registro</title>
</head>

<body>
    <header>
        <nav class="nav">
            <a href="actualizarBanner.php">Banner</a>
            <a href="noticias.php">Formulario Perdido</a>
            <a href="verPerdido.php">Tarjeta Perdido</a>
            <a href="adopcion.php">Formulario Adopción</a>
            <a href="verAdopcion.php">Tarjeta Adopción</a>
            <a href="formFederacion.php">Formulario Federación</a>
            <a href="verFederacion.php">Tarjeta Federación</a>
            <a href="registro.php">Registro</a>
        </nav>
        <input class="logout" type="submit" value="Cerrar Sesión" name="CerrarSesion" id="CerrarSesion" onclick="cerrar_sesion();">
        <input class="borrar" type="submit" value="Borrar Registros" name="BorrarTodo" id="BorrarTodo" onclick="eliminarTodo();">
    </header>
    <div class="container">
        <table id="tablax" class="table table-striped table-bordered table-hover" style="width:100%">
            <thead>
                <th>No. de socio</th>
                <th>Nombre Propietario</th>
                <th>No. de socio</th>
                <th>Nombre Manejador</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Ejemplar</th>
                <th>Borrar</th>
                <th>Más</th>
            </thead>
            <tbody>
            <?php
                while ($filaI = $listarI->fetch_assoc()) {
                    echo '
                        <tr>        
                            <td>' . $filaI['nSocio1'] . '</td>
                            <td>' . $filaI['nPropietario'] . '</td>
                            <td>' . $filaI['nSocio2'] . '</td>
                            <td>' . $filaI['nManejador'] . '</td>
                            <td>' . $filaI['email'] . '</td>
                            <td>' . $filaI['telefono'] . '</td>
                            <td>' . $filaI['nombreEjemplar'] . '</td>
                            <td><button onclick="eliminar_inscripcion(' . $filaI['id_inscripcion'] . ');">Eliminar</button></td>
                            <td>
                                <form target="_blank" action="../../modelo/formatoPdf.php" method="POST">
                                    <input name="id_inscripcion" type="hidden" value="' . $filaI['id_inscripcion'] . '">
                                    <button type="submit">Más</button>
                                </form>
                            </td>
                        </tr>
                    ';
                }
                ?>
               
            </tbody>
        </table>
    </div>
    <!-- JQUERY -->
    <script src="../../assets/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <!-- DATATABLES -->
    <script src="../../assets/DataTables/datatables.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [
                    [10, 25, -1],
                    [10, 25, "All"]
                ],
            });
        });
    </script>
</body>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/logout.js"></script>
    <script src="../../js/eliminarIncripcion.js"></script>
    <script src="../../js/eliminarTodoRegistro.js"></script>
</html>