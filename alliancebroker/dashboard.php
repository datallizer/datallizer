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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" type="image/x-icon" href="images/ics.ico" />
    <title>Dashboard | Alliance Broker</title>
</head>
<body class="sb-nav-fixed">
    <?php include 'sidenav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid">
                <div class="row justify-content-md-center justify-content-start mb-5 mt-5">
                    <div class="col-12">
                        <h2 style="margin-left:40px">DASHBOARD</h2>
                    </div>
                    <div class="col-5 col-md-2 carddashboard m-3 text-center">
                        <a style="color: #000000;" href="monitorusuarios.php">
                            <img src="images/usuarios.svg" alt="">
                            <p class="mt-3"><b>USUARIOS</b></p>
                        </a>
                    </div>

                    <div class="col-5 col-md-2 carddashboard m-3 text-center">
                        <a style="color: #000000;" href="cotizacioneslitigio.php">
                            <img src="images/litigio.svg" alt="">
                            <p class="mt-3"><b>COTIZACIONES DE LITIGIO</b></p>
                        </a>
                    </div>

                    <div class="col-5 col-md-2 carddashboard m-3 text-center">
                        <a style="color: #000000;" href="clienteslitigio.php">
                            <img src="images/clienteslitigio.svg" alt="">
                            <p class="mt-3"><b>CLIENTES DE LITIGIO</b></p>
                        </a>
                    </div>

                    <div class="col-5 col-md-2 carddashboard m-3 text-center">
                        <a style="color: #000000;" href="cotizacioneseguros.php">
                            <img src="images/cotizacioneseguro.svg" alt="">
                            <p class="mt-3"><b>COTIZACIONES DE SEGUROS</b></p>
                        </a>
                    </div>

                    <div class="col-5 col-md-2 carddashboard m-3 text-center">
                        <a style="color: #000000;" href="clienteseguros.php">
                            <img src="images/seguros.svg" alt="">
                            <p class="mt-3"><b>CLIENTES DE SEGUROS</b></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>