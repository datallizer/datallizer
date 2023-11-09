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
   <meta property="og:image" content="images/ics.ico">
   <link rel="shortcut icon" type="image/x-icon" href="images/ics.ico">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Nuevo traslado | La Boqueria Travel</title>
</head>
<body>

<?php include('sidenav.php'); ?>
   
<form data-aos="zoom-in" action="codetraslados.php" method="post" enctype="multipart/form-data">
   <div  class="container">
       <div style="min-height: 90vh;" class="row justify-content-center align-content-center">

           <div class="col-12 text-center">
               <h2>NUEVO TRASLADO</h2>
           </div>

           <div class="col-12 col-md-3">
               <label for="titulo" class="form-label">Titulo</label>
               <input name="titulo" type="text" class="form-control" id="titulo" required autocomplete="off">
           </div>

           <div class="col-12 col-md-3">
               <label for="descripcion" class="form-label">Descripción</label>
               <input name="descripcion" type="text" class="form-control" id="descripcion" autocomplete="off" required>
           </div>

           <div class="col-12 col-md-3">
               <label for="exampleFormControlInput1" class="form-label">Costo</label>
               <input name="costo" type="text" class="form-control" id="exampleFormControlInput1" autocomplete="off" required>
           </div>

           <div style="margin-top: 20px;" class="col-12 col-md-9">
               <select name="categoria" class="form-select" aria-label="Default select example">
                   <option disabled selected>Categoría</option>
                   <option name="Autobus" value="Autobus">Autobus</option>
                   <option name="Sprinter" value="Sprinter">Sprinter</option>
                   <option name="Camioneta" value="Camioneta">Camioneta</option>
                   <option name="Carro" value="Carro">Carro</option>
                   <option name="Moto" value="Moto">Moto</option>
               </select>
           </div>

           <div style="margin-top: 20px;" class="col-12 col-md-9">
               <select name="estado" class="form-select" aria-label="Default select example">
                   <option disabled selected>Lugar de destino:</option>
                   <option value="Aguascalientes">Aguascalientes</option>
                   <option value="Baja California Norte">Baja California Norte</option>
                   <option value="Baja California Sur">Baja California Sur</option>
                   <option value="Campeche">Campeche</option>
                   <option value="Ciudad de México">Ciudad de México</option>
                   <option value="Coahuila">Coahuila</option>
                   <option value="Colima">Colima</option>
                   <option value="Chiapas">Chiapas</option>
                   <option value="Chihuahua">Chihuahua</option>
                   <option value="Durango">Durango</option>
                   <option value="Guanajuato">Guanajuato</option>
                   <option value="Guerrero">Guerrero</option>
                   <option value="Hidalgo">Hidalgo</option>
                   <option value="Jalisco">Jalisco</option>
                   <option value="Estado de Mexico">Estado de México</option>
                   <option value="Michoacan">Michoacán</option>
                   <option value="Morelos">Morelos</option>
                   <option value="Nayarit">Nayarit</option>
                   <option value="Nuevo Leon">Nuevo León</option>
                   <option value="Oaxaca">Oaxaca</option>
                   <option value="Puebla">Puebla</option>
                   <option value="Queretaro">Querétaro</option>
                   <option value="Quintana Roo">Quintana Roo</option>
                   <option value="San Luis Potosi">San Luis Potosí</option>
                   <option value="Sinaloa">Sinaloa</option>
                   <option value="Sonora">Sonora</option>
                   <option value="Tabasco">Tabasco</option>
                   <option value="Tamaulipas">Tamaulipas</option>
                   <option value="Tlaxcala">Tlaxcala</option>
                   <option value="Veracruz">Veracruz</option>
                   <option value="Yucatan">Yucatán</option>
                   <option value="Zacatecas">Zacatecas</option>
               </select>
           </div>

           <div class="col-12 col-md-9" style="margin-top: 20px;">
               <label for="imagen" class="form-label">Imagen</label>
               <input name="imagen" type="file" required>
           </div>

           <div class="col-11 col-md-9 text-center">
               <button  type="submit" name="save" class="btn btn-primary">Guardar</button>
               <a style="margin: 20px;" class="btn btn-success" href="monitortraslados.php">Cancelar</a>
           </div>

       </div>
   </div>
</form>
  

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   <script>
 AOS.init();
</script>
</body>
</html>