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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias | Administrador</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php include 'sidenav.php'; ?>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Noticia
                            <a href="dashboardnoticias.php" class="btn btn-danger float-end">BACK</a>
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
                                <form action="noticiascode.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $registro['id']; ?>">

                                    <div class="row">

                                        <div class="col-4">
                                            <label for="titulo" class="form-label">Titulo</label>
                                            <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $registro['titulo']; ?>">
                                        </div>

                                        <div class="col-4">
                                            <label for="autor" class="form-label">Autor</label>
                                            <input type="text" class="form-control" name="autor" id="autor" value="<?= $registro['autor']; ?>">
                                        </div>

                                        <div class="col-4">
                                            <label for="fecha_publicacion" class="form-label">Fecha de Publicacion</label>
                                            <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" value="<?= $registro['fecha_publicacion']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <label for="cuerpo" class="form-label">Cuerpo de la noticia</label>
                                            <textarea class="form-control" name="cuerpo" id="cuerpo"><?= $registro['cuerpo']; ?></textarea>
                                        </div>

                                        <?php if (!empty($registro['imagen'])) { ?>
                                            <div class="col-4">
                                                <label for="imagen" class="form-label">Imagen Actual</label>
                                                <img src="data:image/jpeg;base64,<?php echo base64_encode($registro['imagen']); ?>" width="100" height="100">
                                            </div>
                                        <?php } ?>

                                        <div class="col-4">
                                            <label for="imagen" class="form-label">Nueva Imagen</label>
                                            <input type="file" class="form-control" name="imagen" id="imagen">
                                        </div>

                                        <div class="col-4">
                                            <button type="submit" name="update" class="btn btn-primary">Actualizar</button>
                                            <a style="margin: 20px;" class="btn btn-success" href="dashboardnoticias.php">Cancelar</a>
                                        </div>
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