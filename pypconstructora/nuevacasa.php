<?php

session_start();
    if(!$_SESSION['user']){
    // si no hay sesion del usuario, es decir no esta logeado lo redirijo a la pagina de login
        header("Location: login.php");
         exit();
    }
?>

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
    <title>Nueva casa</title>
</head>
<body>

<?php include('menu.php'); ?>
    
<form data-aos="zoom-in" action="code.php" method="post" enctype="multipart/form-data">
    <div  class="container">
        <div style="min-height: 90vh;" class="row justify-content-center align-content-center bg-light contbody" >
            <div class="col-12 text-center mb-5">
                <h2>NUEVA PROPIEDAD / ALQUILER</h2>
        </div>

        <div class="col-12 col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input name="titulo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>

        <div class="col-12 col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Descripción</label>
            <input name="descripcion" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>

        <div class="col-12 col-md-3">
            <label for="exampleFormControlInput1" class="form-label">Costo</label>
            <input name="costo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="556,000" required>
        </div>

        <div style="margin-top: 20px;" class="col-12 col-md-9">
        <select name="tipo" class="form-select" aria-label="Default select example">
  <option disabled selected>Tipo de Inmueble</option>
  <option name="casa" value="casa">Casa</option>
  <option name="terreno" value="terreno">Terreno</option>
</select>
        </div>

        <div class="col-12 col-md-9" style="margin-top: 20px;">
            <label for="exampleFormControlInput1" class="form-label">Imagen</label>
            <input name="imagen" type="file" required>
        </div>

        

        <div class="col-9 text-center">
                <button  type="submit" name="save_student" class="btn btn-primary">Guardar</button>
                <a style="margin: 20px;" class="btn btn-success" href="monitorcasas.php">Monitor</a>
                <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>

        </div>
    </div>
</form>


<?php include('footer.php'); ?>    

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>