<?php
session_start();
require 'dbcon.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM usuarios WHERE username='$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row['id'];
            $_SESSION['rol_id'] = $row['rol_id']; // Guardar el rol en la sesión
            header("Location: intranet/dashboard.php"); // Redirigir a la página deseada
            exit();
        } else {
            //COntraseña incorrecta
            header("Location: login.php"); // Redirigir a la página deseada
            $_SESSION['message'] = "La contraseña es incorrecta";
            exit();
        }
    } else {
        // Usuario no encontrado
        header("Location: login.php"); // Redirigir a la página deseada
        $_SESSION['message'] = "Usuario no encontrado";
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <meta name="description" content="UCAP es una Institución predilecta especializada en la formación académica media superior y superior, la cual tiene el fin de fomentar la riqueza formativa y educativa dentro de la misma, a través de principios y valores que se desarrollan en dos núcleos importantes: Familiar y Académico. De esta manera, estructurando una sobresaliente calidad humana y comunitaria.">
    <meta name="keywords" content="bachillerato, universidad, educacion superior, educacion media, preparatoria, aguascalientes, prepa">
    <meta name="author" content="UCAP Aguascalientes">
    <meta property="og:title" content="Login | UCAP Aguascalientes">
    <meta property="og:description" content="UCAP es una Institución predilecta especializada en la formación académica media superior y superior, la cual tiene el fin de fomentar la riqueza formativa y educativa dentro de la misma, a través de principios y valores que se desarrollan en dos núcleos importantes: Familiar y Académico. De esta manera, estructurando una sobresaliente calidad humana y comunitaria.">
    <meta property="og:image" content="images/ogportada.jpg">
    <meta property="og:url" content="https://grupoeducativoucap.mx"> -->
    <title>Login | Datallizer</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center" style="min-height: 100vh;background-image:url('https://cdn.pixabay.com/photo/2016/03/25/02/13/abstract-1278077_1280.jpg');background-attachment:fixed;background-size:cover;">
            <div class="col-11 col-md-4" style="background-color: #ffffff;padding:40px;border-radius:10px;">
                <h2>INTRANET</h2>
                <p>Exclusivo para colaboradores y administración</p>
                <form action="" method="POST" class="mt-3">
                    <?php include 'message.php'; ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" id="username">
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword password" placeholder="Password" name="password">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-3">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
</body>

</html>