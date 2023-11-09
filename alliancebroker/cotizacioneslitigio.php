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
    <title>Cotizaciones de litigio | Alliance Broker</title>
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
                                <h4>Cotizaciones litigio
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        NUEVA COTIZACIÓN
                                    </button>
                                    <a style="margin:0px 5px;" href="dashboard.php" class="btn btn-dark btn-sm float-end">Inicio</a>
                                </h4>
                            </div>
                            <div class="card-body" style="overflow-y:scroll;">
                                <?php include 'message.php'; ?>
                                <table class="table table-bordered table-striped" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>E-mail</th>
                                            <th>Servicio</th>
                                            <th>Detalles</th>
                                            <th>Estatus de la cotización</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM cotizaciones WHERE identificador=2 ORDER BY id DESC";
                                        $query_run = mysqli_query($con, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $registro) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <p><?= $registro['nombre']; ?> <?= $registro['apellidop']; ?> <?= $registro['apellidom']; ?></p>
                                                    </td>
                                                    <td>
                                                        <p><?= $registro['username']; ?></p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            <?php
                                                            if ($registro['servicio'] === '1') {
                                                                echo "Transporte de mercanias";
                                                            } else if ($registro['servicio'] === '2') {
                                                                echo "Daño empresarial";
                                                            } else if ($registro['servicio'] === '3') {
                                                                echo "Responsabilidad civil y ecológica";
                                                            } else if ($registro['servicio'] === '4') {
                                                                echo "Seguro para empleados";
                                                            } else if ($registro['servicio'] === '5') {
                                                                echo "Seguro de gastos médicos";
                                                            } else if ($registro['servicio'] === '6') {
                                                                echo "Seguro de vida";
                                                            } else if ($registro['servicio'] === '7') {
                                                                echo "Seguro de auto particular y flotillas";
                                                            } else if ($registro['servicio'] === '8') {
                                                                echo "Seguro personal";
                                                            } else if ($registro['servicio'] === '9') {
                                                                echo "Seguro a casa habitación";
                                                            } else if ($registro['servicio'] === '10') {
                                                                echo "Maquinaria y equipo";
                                                            } else if ($registro['servicio'] === '11') {
                                                                echo "Seguros escolares";
                                                            } else {
                                                                echo "Error, contacte a soporte";
                                                            }
                                                            ?>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <pre><?= $registro['detalles']; ?></pre>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            <?php
                                                            if ($registro['estatus'] === '1') {
                                                                echo "Nueva cotización";
                                                            } else if ($registro['estatus'] === '2') {
                                                                echo "Se contácto al interesado";
                                                            } else if ($registro['estatus'] === '3') {
                                                                echo "El interesado no respondio";
                                                            } else if ($registro['estatus'] === '4') {
                                                                echo "Volver a contáctar";
                                                            } else if ($registro['estatus'] === '5') {
                                                                echo "Finalizado";
                                                            } else {
                                                                echo "Error, contacte a soporte";
                                                            }
                                                            ?>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm m-1">Convertir en cliente</button>
                                                        <a href="editarcotizacion.php?id=<?= $registro['id']; ?>" class="btn btn-warning btn-sm m-1"><i class="bi bi-pencil-square"></i></a>
                                                        <form action="codeseguros.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete" value="<?= $registro['id']; ?>" class="btn btn-danger btn-sm m-1"><i class="bi bi-trash-fill"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<td><p> No se encontro ningun usuario </p></td><td></td><td></td><td></td><td></td><td></td>";
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVA COTIZACIÓN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="codeseguros.php" method="POST" class="row">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" autocomplete="off" required>
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating mb-3 col-12 col-md-6">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Apellido paterno" name="apellidop" autocomplete="off" required>
                            <label for="floatingInput">Apellido paterno</label>
                        </div>
                        <div class="form-floating mb-3 col-12 col-md-6">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Apellido materno" name="apellidom" autocomplete="off" required>
                            <label for="floatingInput">Apellido materno</label>
                        </div>
                        <div class="form-floating mb-3 col-12 col-md-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Teléfono" name="telefono" autocomplete="off" minlength="10" maxlength="10" pattern="[0-9]{1,10}" required>
                            <label for="floatingInput">Teléfono</label>
                        </div>
                        <div class="form-floating mb-3 col-12 col-md-8">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="username" autocomplete="off" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="servicio" id="floatingSelect" autocomplete="off" required>
                                <option disabled selected>Selecciona una opcion</option>
                                <option value="1">Transporte de mercancía</option>
                                <option value="2">Daño empresarial</option>
                                <option value="3">Responsabilidad civil y ecológica</option>
                                <option value="4">Seguro para empleados</option>
                                <option value="5">Seguro de gastos médicos</option>
                                <option value="6">Seguro de vida</option>
                                <option value="7">Seguro de autos y flotillas</option>
                                <option value="8">Seguros personales</option>
                                <option value="9">Seguros a casa habitación</option>
                                <option value="10">Maquinaria y equipo</option>
                                <option value="11">Seguros escolares</option>
                            </select>
                            <label for="floatingSelect">Seguro de interes:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" name="estatus" id="floatingSelect" autocomplete="off" required>
                                <option disabled selected>Seleccione una opción</option>
                                <option value="2">Se contácto al interesado</option>
                                <option value="3">El interesado no respondio</option>
                                <option value="4">Volver a contáctar</option>
                                <option value="5">Finalizado</option>
                            </select>
                            <label for="floatingSelect">Estatus de la cotización:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Detalles" id="floatingTextarea2" name="detalles" style="height: 130px" autocomplete="off"></textarea>
                            <label for="floatingTextarea2">Detalles</label>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" name="save" class="btn btn-outline-primary">Cotizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>