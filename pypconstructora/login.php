<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio de sesion</title>
</head>
<body style="background-image: url(images/piedra.jpg);background-size:cover;">

<?php include('menu.php'); ?>   

<div data-aos="zoom-in" class="">
    <div class="container">
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
  <button style="margin-top: 20px;" type="submit" value="ingresar" class="btn btn-primary">Entrar</button>
</form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>  

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>