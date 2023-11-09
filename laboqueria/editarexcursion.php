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
   <title>Editar excursion | La Boqueria Travel</title>
</head>
<body>
<?php include 'sidenav.php'; ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
                <?php
                if(isset($_GET['id'])){
                    $registro_id = mysqli_real_escape_string($con, $_GET['id']);
                    $query = "SELECT * FROM excursiones WHERE id='$registro_id' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0){
                        $registro = mysqli_fetch_array($query_run);
                ?>
                                <form action="codeexcursiones.php" method="POST" class="row justify-content-center text-center" style="padding:50px 0px;">
                                    <h4>EDITAR EXCURSION</h4>
                                    <div class="col-11 col-md-5">
                                        <input type="hidden" name="id" value="<?= $registro['id']; ?>">
                                        <input type="text" class="form-control m-2" name="titulo" id="titulo" value="<?= $registro['titulo']; ?>">
                                        <input type="text" class="form-control m-2" name="descripcion" id="descripcion" value="<?= $registro['descripcion']; ?>"> 
                                        <input type="text" class="form-control m-2" name="categoria" id="categoria" value="<?= $registro['categoria']; ?>">
                                        <input type="text" class="form-control m-2" name="costo" id="costo" value="<?= $registro['costo']; ?>">
                                    
                                        <input type="text" class="form-control m-2" name="estado" id="estado" value="<?= $registro['estado']; ?>">
                                        <button type="submit" name="update" class="btn btn-primary m-2">
                                            Guardar
                                        </button>

                                        <a href="monitorexcursiones.php" class="btn btn-dark">Cancelar</a>
                                    </div>
                                    
                                </form>
                <?php
                    }else{
                            echo "<h4>No existe este registro</h4>";
                        }
                    }
                ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
