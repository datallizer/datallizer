<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa de desarrollo de software y automatización, nos especializamos en el software hecho a medida, lo que significa que trabajamos estrechamente con nuestros clientes para crear soluciones específicas para sus necesidades únicas.">
  <meta name="keywords" content="software, empresa, programacion, mipymes, automatizacion, innovacion, ERP, CMS, marketing, publicidad, digital">
  <meta name="author" content="Datallizer">
  <meta property="og:title" content="Inicio | Datallizer">
  <meta property="og:description" content="Empresa de desarrollo de software y automatización, nos especializamos en el software hecho a medida, lo que significa que trabajamos estrechamente con nuestros clientes para crear soluciones específicas para sus necesidades únicas.">
  <meta property="og:image" content="images/ogportada.jpg">
  <meta property="og:url" content="https://datallizer.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
  <title>Noticias | Datallizer</title>
</head>

<body>
  <!-- Timeline Plugin -->
  <div id="fb-root"></div>

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="qltXOFJo"></script>

  <?php
  require 'dbcon.php';

  include 'menu.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <div class="container-fluid">
    <div class="row justify-content-evenly" style="margin: 150px 0px 80px 0px;">
      <div class="col-11 col-md-6">
        <?php
        if (isset($_GET['id'])) {
          $registro_id = mysqli_real_escape_string($con, $_GET['id']);
          $query = "SELECT * FROM noticias WHERE id='$registro_id' ";
          $query_run = mysqli_query($con, $query);

          if (mysqli_num_rows($query_run) > 0) {
            $registro = mysqli_fetch_array($query_run);
        ?>

                <h3 class="mb-4"><?= $registro['titulo']; ?></h3>

                <img src="data:image/jpeg;base64,<?php echo  base64_encode($registro['imagen']); ?>" alt="Imagen nota">

                <p class="mt-4"><?= $registro['cuerpo']; ?></p>

                <b>Fecha de publicación: </b><?= $registro['fecha_publicacion']; ?></p>
                <p><b>Autor: </b><?= $registro['autor']; ?>

          <?php
          } else {
            echo "<h4>No Such Id Found</h4>";
          }
        }
          ?>

          
      </div>
      <div class="col-9 col-md-3">
        <div class="row" style="margin-top: 100px;">
          <div class="col-12">
            <p style="font-size:11px;"><i class="bi bi-clock"></i> Recientes</p>
          </div>

          <?php

          // Consulta para obtener las noticias de la página actual
          $query = "SELECT * FROM noticias ORDER BY id DESC LIMIT 6";
          $query_run = mysqli_query($con, $query);

          if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $registro) {
          ?>
              <div class="col-12 mb-4">
                <a href="vernoticia.php?id=<?= $registro['id']; ?>" style="text-decoration: none;color:#000000;">
                  <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-4 g-0">
                      <img style="width: 100%;object-fit:cover;" src="data:image/jpeg;base64,<?php echo base64_encode($registro['imagen']); ?>" alt="Imagen nota">
                    </div>
                    <div class="col-12 col-md-8" style="font-size:10px">
                      <h3 style="text-transform:uppercase;font-size:11px;margin-top:10px;">
                        <?php
                        $titulo = $registro['titulo'];
                        echo substr($titulo, 0, 65);
                        if (strlen($titulo) > 65) {
                          echo '...';
                        }
                        ?>
                      </h3>
                      <pre style="-webkit-line-clamp: 3;"><?= $registro['cuerpo']; ?></pre>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          } else {
            echo "No hay noticias disponibles por el momento";
          }
          ?>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script>
      AOS.init({
        duration: 600,
        once: true
      });
    </script>
</body>

</html>