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
    <title>Clientes litigio | Alliance Broker</title>
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
                                <h4>CLIENTES DE LITIGIO
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        NUEVO CLIENTE
                                    </button>
                                    <a style="margin:0px 5px;" href="dashboard.php" class="btn btn-dark btn-sm float-end">Inicio</a>
                                </h4>
                            </div>
                            <div class="card-body" style="overflow-y:scroll;">
                                <table class="table table-bordered table-striped" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>E-mail</th>
                                            <th>Teléfono</th>
                                            <th>Servicio</th>
                                            <th>Detalles</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $query = "SELECT * FROM litigio INNER JOIN usuarios ON litigio.email = usuarios.username WHERE usuarios.rol = 7 ORDER BY litigio.id DESC";
                                    $query_run = mysqli_query($con, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $registro) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <p><?= $registro['nombre']; ?> <?= $registro['apellidop']; ?> <?= $registro['apellidom']; ?></p>
                                                </td>
                                                <td>
                                                    <p><?= $registro['email']; ?></p>
                                                </td>
                                                <td>
                                                    <p><?= $registro['telefono']; ?></p>
                                                </td>
                                                <td style="max-width: 50px;">
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
                                                <td style="max-width: 50px;">
                                                    <a href="editarcotizacion.php?id=<?= $registro['id']; ?>" class="btn btn-info btn-sm m-1"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="editarcliente.php?id=<?= $registro['id']; ?>" class="btn btn-warning btn-sm m-1"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="codeseguros.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?= $registro['id']; ?>" class="btn btn-danger btn-sm m-1"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                    <a href="https://wa.me/52<?= $registro['telefono']; ?>" class="btn btn-success btn-sm m-1" target="_blank" rel="noopener noreferrer">
                                                        <i class="bi bi-whatsapp"></i>
                                                    </a>

                                                    <a href="tel:<?= $registro['telefono']; ?>" class="btn btn-secondary btn-sm m-1">
                                                        <i class="bi bi-telephone-fill"></i>
                                                    </a>

                                                    <a href="mailto:<?= $registro['email']; ?>" class="btn btn-primary btn-sm m-1">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<td><p> No se encontro ningun  cliente</p></td><td></td><td></td><td></td><td></td><td></td>";
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO USUARIO</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="codeusuarios.php" method="POST" class="row">
                        <div class="col-12 form-floating mb-3">
                            <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="Nombre" autocomplete="off" required>
                            <label for="floatingInput">Nombre</label>
                        </div>

                        <div class="col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" name="apellidop" id="floatingInput" placeholder="Apellido paterno" autocomplete="off" required>
                            <label for="floatingInput">Apellido paterno</label>
                        </div>

                        <div class="col-12 col-md-6 form-floating mb-3">
                            <input type="text" class="form-control" name="apellidom" id="floatingInput" placeholder="Apellido materno" autocomplete="off" required>
                            <label for="floatingInput">Apellido materno</label>
                        </div>

                        <div class="col-12 col-md-5 form-floating mb-3">
                            <input type="email" class="form-control" name="username" id="floatingInput" placeholder="Nombre de usuario" autocomplete="off" required>
                            <label for="floatingInput">Username</label>
                        </div>

                        <div class="col-12 col-md-7 form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="floatingInput" placeholder="Password" autocomplete="off" required>
                            <label for="floatingInput">Teléfono</label>
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
                            <textarea class="form-control" placeholder="Detalles" id="floatingTextarea2" name="detalles" style="height: 130px" autocomplete="off"></textarea>
                            <label for="floatingTextarea2">Detalles</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="save">Guardar colaborador</button>
                    <button type="submit" class="btn btn-primary" name="saveseguro" style="display: none;">Guardar cliente</button>
                    <button type="submit" class="btn btn-primary" name="savelitigio" style="display: none;">Guardar cliente</button>
                    <button type="submit" class="btn btn-primary" name="saveglobal" style="display: none;">Guardar cliente</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>