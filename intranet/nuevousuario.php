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
    <title>Nuevo usuarios | Administrador</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php include 'sidenav.php'; ?>

    <div class="container mt-5">

        <div class="row justify-content-center align-items-top" style="min-height: 90vh;">
            <div class="col-12">
                <h2>NUEVO USUARIO</h2>
            </div>
            <div class="col-12 col-md-6 mt-3">
                <form action="usercode.php" method="POST" class="row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput nombre" name="nombre" required placeholder="Nombre" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                        <label style="margin-left: 12px;" for="floatingInput">Nombre(s)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput apellidopaterno" name="apellidopaterno" required placeholder="apellidopaterno" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                        <label style="margin-left: 12px;" for="floatingInput">Apellido paterno</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input type="text" class="form-control" id="floatingInput apellidomaterno" name="apellidomaterno" required placeholder="Apellido paterno" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                        <label style="margin-left: 12px;" for="floatingInput">Apellido materno</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input type="text" class="form-control" id="floatingInput username" name="username" required placeholder="username" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                        <label style="margin-left: 12px;" for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput password" name="password" placeholder="Password" autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
                        <label style="margin-left: 12px;" for="floatingInput">Contraseña</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelectModalidad" name="rol_id" autocomplete="off">
                            <option value="1">Administrador</option>
                            <option value="2">Colaborador</option>
                            <option value="3">Reclutamiento</option>
                        </select>
                        <label style="margin-left: 12px;" for="floatingSelectModalidad">Rol</label>
                    </div>

                    <p style="font-size: 12px;">Todos los campos son obligatorios*</p>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary btn-sm mt-3 mb-3" type="submit" name="save">Registrar usuario</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>