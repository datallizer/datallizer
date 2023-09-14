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
                        <h4>Nueva Noticia
                            <a href="dashboardnoticias.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="noticiascode.php" method="POST" enctype="multipart/form-data">
                            <div class="col-12 text-center">
                                <h2>NUEVA NOTICIA</h2>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <label for="titulo" class="form-label">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" required autocomplete="off">
                                </div>

                                <div class="col-4">
                                    <label for="autor" class="form-label">Autor</label>
                                    <input type="text" class="form-control" name="autor" id="autor" required>
                                </div>

                                <div class="col-4">
                                    <label for="fecha_publicacion" class="form-label">Fecha de Publicacion</label>
                                    <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" required>
                                </div>

                                <div class="col-12">
                                    <label for="cuerpo" class="form-label">Cuerpo de la noticia</label>
                                    <textarea class="form-control" name="cuerpo" id="cuerpo" style="white-space: pre-wrap;">Escribe la noticia aqui...</textarea>
                                </div>

                                <div class="col-4">
                                    <label for="imagen" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen">
                                </div>

                                <div class="col-4">
                                    <button type="submit" name="save" class="btn btn-primary">Guardar</button>
                                    <a style="margin: 20px;" class="btn btn-success" href="dashboardnoticias.php">Cancelar</a>
                                </div>
                            </div>

                    </div>
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