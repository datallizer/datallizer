<?php
session_start();
require 'dbcon.php';

// // Verificar si existe una sesión activa y los valores de usuario y contraseña están establecidos
// if (isset($_SESSION['username'])) {
//     $username = $_SESSION['username'];

//     // Consultar la base de datos para verificar si los valores coinciden con algún registro en la tabla de usuarios
//     $query = "SELECT * FROM usuarios WHERE username = '$username'";
//     $result = mysqli_query($con, $query);

//     // Si se encuentra un registro coincidente, el usuario está autorizado
//     if (mysqli_num_rows($result) > 0) {
//         // El usuario está autorizado, se puede acceder al contenido
//     } else {
//         // Redirigir al usuario a una página de inicio de sesión
//         header('Location: login.php');
//         exit(); // Finalizar el script después de la redirección
//     }
// } else {
//     // Redirigir al usuario a una página de inicio de sesión si no hay una sesión activa
//     header('Location: login.php');
//     exit(); // Finalizar el script después de la redirección
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentos | Alliance Broker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="sb-nav-fixed">
    <?php include 'sidenav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid">
                <div class="row mb-5 mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>DOCUMENTOS
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        NUEVO DOCUMENTO
                                    </button>
                                    <a style="margin:0px 5px;" href="dashboard.php" class="btn btn-dark btn-sm float-end">Inicio</a>
                                </h4>
                            </div>
                            <div class="card-body" style="overflow-y:scroll;">
                                <?php include 'message.php'; ?>
                                <table class="table table-bordered table-striped" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Asignado a</th>
                                            <th>Detalles</th>
                                            <th>Estatus</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM files ORDER BY id DESC";
                                        $query_run = mysqli_query($con, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $registro) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <p>
                                                            <?php
                                                            if ($registro['tipo'] === '1') {
                                                                echo "Póliza de seguro";
                                                            } else if ($registro['tipo'] === '2') {
                                                                echo "Recibo de pago";
                                                            } else if ($registro['tipo'] === '3') {
                                                                echo "Factura";
                                                            } else if ($registro['tipo'] === '4') {
                                                                echo "Cotización";
                                                            } else if ($registro['tipo'] === '5') {
                                                                echo "Contrato";
                                                            } else if ($registro['tipo'] === '6') {
                                                                echo "Documento informativo";
                                                            } else if ($registro['tipo'] === '7') {
                                                                echo "Otro";
                                                            } else {
                                                                echo "Error, contacte a soporte";
                                                            }
                                                            ?>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p><?= $registro['username']; ?></p>
                                                    </td>
                                                    <td>
                                                        <pre><?= $registro['detalles']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            <?php
                                                            if ($registro['estatus'] === '1') {
                                                                echo "Visible al cliente";
                                                            } else if ($registro['estatus'] === '2') {
                                                                echo "No visible al cliente";
                                                            } else {
                                                                echo "Error, contacte a soporte";
                                                            }
                                                            ?>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <a href="editarusuario.php?username=<?= $registro['username']; ?>#files" class="btn btn-success btn-sm m-1"><i class="bi bi-pencil-square"></i></a>

                                                        <form action="codefiles.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete" value="<?= $registro['id']; ?>" class="btn btn-danger btn-sm m-1">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<td><p>No se encontro ningun documento</p></td><td></td><td></td><td></td><td></td>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO DOCUMENTO</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="codefiles.php" method="POST" class="row" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <select class="form-select" name="tipo" id="floatingSelect" autocomplete="off" required>
                                <option disabled selected>Selecciona una opcion</option>
                                <option value="1">Poliza de seguro</option>
                                <option value="2">Recibo de pago</option>
                                <option value="3">Factura</option>
                                <option value="4">Cotización</option>
                                <option value="5">Contrato</option>
                                <option value="6">Documento informativo</option>
                                <option value="7">Otro</option>
                            </select>
                            <label for="floatingSelect">Tipo de documento</label>
                        </div>
                        <div class="mb-3">
                            <label style="margin-left:12px !important;" for="formFile" class="form-label">Seleccione un documento</label>
                            <input class="form-control" type="file" id="formFile" name="medio">
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="username" id="floatingSelect" autocomplete="off" required>
                                <option disabled selected>Selecciona una opción</option>
                                <?php
                                if ($con) {
                                    $query = "SELECT username, nombre, apellidop, apellidom FROM usuarios WHERE rol IN (5, 6)";
                                    $result = mysqli_query($con, $query);

                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Generar opciones para el select
                                            $username = $row['username'];
                                            $nombreCompleto = $row['nombre'] . ' ' . $row['apellidop'] . ' ' . $row['apellidom'];
                                            echo "<option value='$username'>$nombreCompleto</option>";
                                        }
                                    } else {
                                        echo "Error al ejecutar la consulta: " . mysqli_error($con);
                                    }

                                    // Cerrar la conexión
                                    mysqli_close($con);
                                } else {
                                    echo "Error en la conexión a la base de datos";
                                }
                                ?>
                            </select>
                            <label for="floatingSelect">Asignar a:</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" name="estatus" id="floatingSelect" autocomplete="off" required>
                                <option disabled selected>Estatus</option>
                                <option value="1">Visible al cliente</option>
                                <option value="2">No visible al cliente</option>
                            </select>
                            <label for="floatingSelect">Estatus del documento</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Detalles" id="floatingTextarea2" name="detalles" style="height: 130px" autocomplete="off"></textarea>
                            <label for="floatingTextarea2">Detalles</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Fecha" type="text" id="fecha" name="fecha" value="" readonly />
                            <label for="fecha">Fecha</label>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" name="save" class="btn btn-outline-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>
            // Obtiene la fecha actual del sistema del usuario
            const fechaActual = new Date();
            const dia = fechaActual.getDate();
            const mes = fechaActual.getMonth() + 1; // Los meses en JavaScript van de 0 a 11
            const año = fechaActual.getFullYear();

            // Formatea la fecha al formato DD-MM-YYYY
            const fechaFormateada = (dia < 10 ? '0' : '') + dia + '-' + (mes < 10 ? '0' : '') + mes + '-' + año;

            // Establece la fecha en el campo de input hidden
            document.getElementById('fecha').value = fechaFormateada;
        </script>
</body>

</html>