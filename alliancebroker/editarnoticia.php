<?php
session_start();
require 'dbcon.php';

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
    <title>Editar noticia | Alliance Broker</title>
</head>

<body class="sb-nav-fixed">
    <?php include 'sidenav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container mt-5 mb-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>EDITOR DE NOTICIA
                                    <a href="monitornoticias.php" class="btn btn-danger btn-sm float-end">REGRESAR</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <?php
                                if (isset($_GET['id'])) {
                                    $registro_id = mysqli_real_escape_string($con, $_GET['id']);
                                    $query = "SELECT * FROM noticias WHERE id='$registro_id' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        $registro = mysqli_fetch_array($query_run);
                                ?>
                                        <form action="codenoticias.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $registro['id']; ?>">

                                            <div class="row mtop">
                                                <div class="col-12">
                                                    <label for="titulo" class="form-label">Titulo</label>
                                                    <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $registro['titulo']; ?>">
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <label for="descripcion" class="form-label">Descripcion corta</label>
                                                    <textarea rows="3" class="form-control" name="descripcion" id="descripcion"><?= $registro['descripcion']; ?></textarea>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <label for="nota" class="form-label">Nota</label>
                                                    <textarea rows="7" class="form-control" name="nota" id="nota"><?= $registro['nota']; ?></textarea>
                                                </div>


                                                <div class="col-6 mt-3">
                                                    <label for="fecha" class="form-label">Fecha</label>
                                                    <?php
                                                    // Formatear la fecha en el formato "AAAA-MM-DD"
                                                    $fechaFormateada = date('Y-m-d', strtotime($registro['fecha']));
                                                    ?>
                                                    <input type="date" class="form-control" name="fecha" id="fecha" value="<?= $fechaFormateada; ?>">
                                                </div>

                                                <div class="col-6 mt-3">
                                                    <label for="autor" class="form-label">Autor</label>
                                                    <input type="text" class="form-control" name="autor" id="autor" value="<?= $registro['autor']; ?>" disabled>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center mt-3 mb-2">
                                                <button type="submit" name="update" class="btn btn-warning">
                                                    Actualizar noticia
                                                </button>
                                            </div>


                            </div>
                        </div>

                        </form>
                <?php
                                    } else {
                                        echo "<h4>No Such Id Found</h4>";
                                    }
                                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>