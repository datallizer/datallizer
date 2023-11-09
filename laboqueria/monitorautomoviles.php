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
   <title>Monitor renta de automoviles | La Boqueria Travel</title>
</head>
<body>

<?php include 'sidenav.php'; ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 m-3">
                <h4>Renta de automoviles
                <a style="margin-left:15px !important;" href="nuevarenta.php" class="btn btn-sm btn-primary float-end">Nueva renta de automovil</a>
                </h4>
            </div>

            <div class="col-12 tabover">
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Categoría</th>
                            <th>Estado</th>
                            <th>Costo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM renta";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $registro)
                                {
                        ?>
                        <tr>
                            <td><?= $registro['titulo']; ?></td>
                            <td><?= $registro['descripcion']; ?></td>
                            <td><?= $registro['categoria']; ?></td>
                            <td><?= $registro['estado']; ?></td>
                            <td>$<?= $registro['costo']; ?></td>
                            <td>
                            <a href="editarrenta.php?id=<?= $registro['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                <form action="coderenta.php" method="POST" class="d-inline">
                                    <button type="submit" name="delete" value="<?=$registro['id'];?>" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                
                    <?php
                        }
                    }else{
                            echo "<tr><td><h5>No se encontraron registros</h5></td><td></td><td></td><td></td><td></td><td></td></tr>";
                        }
                    ?>
                </table>    
            </div>    
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>