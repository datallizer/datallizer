<?php
session_start();
if(!$_SESSION['user']){
// si no hay sesion del usuario, es decir no esta logeado lo redirijo a la pagina de login
    header("Location: login.php");
     exit();
}
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Menu - Capullitos</title>
</head>
<body>
<?php include('top.php'); ?>
<div class="">
    <div class="container">
        <div class="row justify-content-evenly contbody text-center">

        <div class="col-11">
        <a href="logout.php" class="btn btn-danger float-end">Cerrar Sesión</a>
        </div>

            <div style="padding:50px 0px;margin:20px 0px;background: rgba(255, 255, 255, 0.7);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.19);" class="col-11 col-md-5">
                <a style="text-decoration: none;color:#000;" href="formaunica.php">FORMA UNICA DAYCARE</a>
            </div>

            <div style="padding:50px 0px;margin:20px 0px;background: rgba(255, 255, 255, 0.7);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.19);" class="col-11 col-md-5">
                <a style="text-decoration: none;color:#000;" href="marketing.php">BASE DE DATOS MARKETING</a>
            </div>
        </div>
    </div>
</div>
    
<?php include('redes.php'); ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>