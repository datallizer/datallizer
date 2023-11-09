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
    <title>Monitor noticias | Alliance Broker</title>
</head>

<body class="sb-nav-fixed">
    <?php include 'sidenav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>NOTICIAS
                                    <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        NUEVA NOTICIA
                                    </button>

                                    <a style="margin:0px 5px;" href="dashboard.php" class="btn btn-dark btn-sm float-end">Inicio</a>
                                </h4>
                            </div>
                            <div class="card-body" style="overflow-y:scroll;">
                                <?php include 'message.php'; ?>
                                <table class="table table-bordered table-striped" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Descripcion</th>
                                            <th>Fecha de publicacion</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM noticias";
                                        $query_run = mysqli_query($con, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $registro) {
                                        ?>
                                                <tr>
                                                    <td><p><?= $registro['titulo']; ?></p></td>
                                                    <td><p><?= $registro['descripcion']; ?></p></td>
                                                    <td><p><?= $registro['fecha']; ?></p></td>
                                                    <td class="text-center">
                                                        <a href="noticia.php?id=<?= $registro['id']; ?>" class="btn btn-primary btn-sm mb-1"><i class="bi bi-eye"></i></a>
                                                        <a href="editarnoticia.php?id=<?= $registro['id']; ?>" class="btn btn-warning btn-sm mb-1"><i class="bi bi-pencil-square"></i></a>
                                                        <form action="codenoticias.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete" value="<?= $registro['id']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<td><p> No hay noticias disponibles por el momento </p></td><td></td><td></td><td></td>";
                                        }
                                        ?>

                                    </tbody>
                                </table>

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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVA NOTICIA</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="codenoticias.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12 form-floating mb-3">
                                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" autocomplete="off" minlength="1" maxlength="100" required>
                                        <label for="titulo" class="form-label">Titulo</label>
                                    </div>

                                    <div class="col-12 form-floating mb-3">
                                        <textarea class="form-control mb-2" name="descripcion" id="descripcion" placeholder="Descripcion" autocomplete="off" style="min-height: 100px;" minlength="1" maxlength="2000" required></textarea>
                                        <label for="descripcion" class="form-label">Descripcion</label>
                                    </div>

                                    <div class="col-12 form-floating mb-3">
                                        <textarea class="form-control mb-2" name="nota" id="nota" placeholder="Nota" autocomplete="off" minlength="1" maxlength="5000" required style="min-height: 120px;"></textarea>
                                        <label for="nota" class="form-label">Nota</label>
                                    </div>

                                    <div class="col-12 form-floating mb-3">
                                        <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor" autocomplete="off" minlength="1" maxlength="100" required>
                                        <label for="Autor" class="form-label">Autor</label>
                                    </div>

                                    <div class="col-12 form-floating mb-3">
                                        <input type="date" class="form-control" name="fecha" id="fecha" placeholder="fecha" autocomplete="off" required>
                                        <label for="fecha" class="form-label">Fecha</label>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="medios" class="form-label">Imagen de la nota</label>
                                        <input type="file" class="form-control" name="medios" id="medios" required>
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="save">Guardar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>