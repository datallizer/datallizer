<?php

 session_start();
     if(!$_SESSION['user']){
     // si no hay sesion del usuario, es decir no esta logeado lo redirijo a la pagina de login
         header("Location: login.php");
          exit();
     }
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:image" content="images/ics.ico">
    <link rel="shortcut icon" type="image/x-icon" href="images/ics.ico">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Dashboard | La Boqueria Travel</title>
</head>
<body>

<?php include 'sidenav.php'; ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 m-3">
                <h4>Dashboard</h4>
            </div>

            <div class="col-5 col-md-3 dashcard text-center">
                <a href="monitorreservaciones.php">
                    <i class='bi bi-calendar3'></i>
                    <p>Reservaciones</p>
                </a>
            </div>

            <div class="col-5 col-md-2 dashcard text-center">
                <a href="monitortraslados.php">
                <i class='bi bi-bus-front-fill'></i>
                    <p>Traslados</p>
                </a>
            </div>

            <div class="col-5 col-md-1 dashcard text-center">
                <a href="monitorcruceros.php">
                <i class='bi bi-water'></i>
                    <p>Cruceros</p>
                </a>
            </div>

            <div class="col-5 col-md-1  dashcard text-center">
                <a href="monitortours.php">
                <i class='bi bi-map-fill'></i>
                    <p>Tours</p>
                </a>
            </div>

            <div class="col-11 col-md dashcard text-center">
                <a href="monitorpaquetes.php">
                <i class='bi bi-buildings-fill'></i>
                    <p>Paquetes</p>
                </a>
            </div>

            <div class="col-5 col-md-3 dashcard text-center">
                <a href="monitorautomoviles.php">
                <i class='bi bi-car-front-fill'></i>
                    <p>Renta de automoviles</p>
                </a>
            </div>

            <div class="col-5 col-md dashcard text-center">
                <a href="monitorvoletosavion.php">
                <i class='bi bi-airplane-engines-fill'></i>
                    <p>Vuelos</p>
                </a>
            </div>

            <div class="col-5 col-md-3 dashcard text-center">
                <a href="monitorcircuitos.php">
                <i class='bi bi-signpost-split-fill'></i>
                    <p>Circuitos turisticos</p>
                </a>
            </div>

            <div class="col-5 col-md dashcard text-center">
                <a href="monitorexcursiones.php">
                <i class='bi bi-sign-turn-slight-right-fill'></i>
                    <p>Excursiones</p>
                </a>
            </div>

            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>