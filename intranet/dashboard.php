<?php
session_start();
require '../dbcon.php';
// Verificar si existe una sesión activa y los valores de usuario y contraseña están establecidos
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Consultar la base de datos para verificar si los valores coinciden con algún registro en la tabla de usuarios
    $query = "SELECT * FROM usuarios WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    // Si se encuentra un registro coincidente, el usuario está autorizado
    if (mysqli_num_rows($result) > 0) {
        // El usuario está autorizado, se puede acceder al contenido
    } else {
        // Redirigir al usuario a una página de inicio de sesión
        header('Location: login.php');
        exit(); // Finalizar el script después de la redirección
    }
} else {
    // Redirigir al usuario a una página de inicio de sesión si no hay una sesión activa
    header('Location: login.php');
    exit(); // Finalizar el script después de la redirección
}

$query_total_filas = "SELECT COUNT(*) as total_filas FROM finanzas";
$result_total_filas = mysqli_query($con, $query_total_filas);

// Verificar si la consulta fue exitosa
if ($result_total_filas) {
    // Obtener el resultado de la consulta
    $fila_total = mysqli_fetch_assoc($result_total_filas);
    $total_filas = $fila_total['total_filas'];
} else {
    $total_filas = 0; // Si hay un error en la consulta, se asume que no hay filas
}


$query_suma_ganancia = "SELECT SUM(gananciaFinal) as total_ganancia FROM finanzas";
$result_suma_ganancia = mysqli_query($con, $query_suma_ganancia);

// Verificar si la consulta fue exitosa
if ($result_suma_ganancia) {
    // Obtener el resultado de la consulta
    $fila_ganancia = mysqli_fetch_assoc($result_suma_ganancia);
    $total_ganancia = $fila_ganancia['total_ganancia'];
} else {
    $total_ganancia = 0; // Si hay un error en la consulta, se asume que la suma es cero
}

// Consulta SQL para obtener el total de filas en la tabla "newsletter"
$query_total_newsletter = "SELECT COUNT(*) as total_newsletter FROM newsletter";
$result_total_newsletter = mysqli_query($con, $query_total_newsletter);

// Verificar si la consulta fue exitosa
if ($result_total_newsletter) {
    // Obtener el resultado de la consulta
    $fila_newsletter = mysqli_fetch_assoc($result_total_newsletter);
    $total_newsletter = $fila_newsletter['total_newsletter'];
} else {
    $total_newsletter = 0; // Si hay un error en la consulta, se asume que no hay filas en la tabla
}

// Consulta SQL para obtener el total de filas en la tabla "solicitudesreclutamiento"
$query_total_solicitudes = "SELECT COUNT(*) as total_solicitudes FROM solicitudesreclutamiento";
$result_total_solicitudes = mysqli_query($con, $query_total_solicitudes);

// Verificar si la consulta fue exitosa
if ($result_total_solicitudes) {
    // Obtener el resultado de la consulta
    $fila_solicitudes = mysqli_fetch_assoc($result_total_solicitudes);
    $total_solicitudes = $fila_solicitudes['total_solicitudes'];
} else {
    $total_solicitudes = 0; // Si hay un error en la consulta, se asume que no hay filas en la tabla
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../images/ico.ico" />
    <link rel="stylesheet" href="../css/admin.css">
    <title>Dashboard | Datallizer</title>
</head>

<body>
    <?php include 'sidenav.php'; ?>

    <div class="container-fluid">
        <div class="row justify-content-center dashboardrow">

            <div class="col dashcard">
                <div class="row">
                    <div class="col">
                        <h3>Proyectos</h3>
                        <p><?= $total_filas; ?></p>
                    </div>
                    <div class="col-2"><i style="background-color:#c49076;" class="bi bi-briefcase"></i></div>
                </div>
            </div>

            <div class="col dashcard">
                <div class="row">
                    <div class="col">
                        <h3>Ganancias</h3>
                        <p><?= $total_ganancia; ?></p>
                    </div>
                    <div class="col-2"><i style="background-color:#76c494;" class="bi bi-currency-dollar"></i></div>
                </div>
            </div>

            <div class="col dashcard">
                <div class="row">
                    <div class="col">
                        <h3>Newsletter</h3>
                        <p><?= $total_newsletter; ?></p>
                    </div>
                    <div class="col-2"><i style="background-color:#76a5c4;" class="bi bi-newspaper"></i></div>
                </div>
            </div>

            <div class="col dashcard">
                <div class="row">
                    <div class="col">
                        <h3>Reclutas</h3>
                        <p><?= $total_solicitudes; ?></p>
                    </div>
                    <div class="col-2"><i style="background-color:#c47676;" class="bi bi-people"></i></div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cotizaciones
                            <a href="cotizaciones.php" class="btn btn-primary btn-sm float-end">Cotizaciones</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido (s)</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM cotizaciones";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $registro) {
                                ?>
                                        <tr>
                                            <td><?= $registro['nombre']; ?></td>
                                            <td><?= $registro['apellido']; ?></td>
                                            <td><?= $registro['telefono']; ?></td>
                                            <td><?= $registro['email']; ?></td>
                                            <td><?= $registro['detalles']; ?></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>