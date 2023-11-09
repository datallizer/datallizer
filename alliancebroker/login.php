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
            $_SESSION['rol'] = $row['rol']; // Guardar el rol en la sesión
            header("Location: dashboard.php"); // Redirigir a la página deseada
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
        $_SESSION['message'] = "La contraseña es incorrecta";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login | Alliance Broker</title>
</head>
<body>
<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="oXmGK4Sa"></script>
    <?php include 'menu2.php'; ?>
    <?php include 'whatsapp.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center loginform text-center">
            <div class="col-11 col-md-4" style="background-color: #ffffff;border-radius: 10px;padding: 30px 20px;">
                <h2>INTRANET</h2>
                <p>Sistema de gestión y control empresarial</p>
                <form action="" method="POST" class="row mt-3">
                    <?php include 'message.php'; ?>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" id="username" autocomplete="off" required>
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" autocomplete="off" required>
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary mt-3">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>