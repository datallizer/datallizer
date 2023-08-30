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
    <title>Editar usuarios | Administrador</title>
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
                        <h4>Editor de Cotizacion
                            <a href="cotizaciones.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $registro_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM cotizaciones WHERE id='$registro_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $registro = mysqli_fetch_array($query_run);
                        ?>
                                <form action="cotizacionescode.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $registro['id']; ?>">

                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $registro['nombre']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <input type="text" class="form-control" name="apellido" id="apellido" value="<?= $registro['apellido']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <input type="text" class="form-control" name="telefono" id="telefono" value="<?= $registro['telefono']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <input type="text" class="form-control" name="email" id="email" value="<?= $registro['email']; ?>">
                                        </div>

                                        <div class="col-12">
                                            <input type="text" class="form-control" name="detalles" id="detalles" value="<?= $registro['detalles']; ?>">
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-9 text-center">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Actualizar Cotizacion
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