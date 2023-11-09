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
   <title>Login | La Boqueria Travel</title>
</head>
<body style="background-image: url('https://cdn.pixabay.com/photo/2018/01/26/09/33/snow-3108196_960_720.jpg');background-size:cover;">

<?php include('menu.php'); ?>   

    <div class="container-fluid">
        <div style="min-height: 90vh;" class="row justify-content-center align-content-center">
            <div style="padding: 25px;border-radius:15px;" class="col-10 col-md-4 bg-white">
                <form action="validar.php" method="post">
                    <div class="">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input pattern="[a-z]{1-10}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
                    </div>

                    <div class="">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input pattern="[a-z]{1-15}" type="password" class="form-control" id="exampleInputPassword1" name="pass">
                    </div>
                    <div class="col-12 text-center">
                        <button style="margin-top: 20px;" type="submit" value="ingresar" class="btn btn-dark">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>