<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<!-- Messenger Plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "108217338784784");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v15.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

  <?php 
include_once 'database.php';
require 'dbcon.php';

  include 'menu.php'; ?>

  <style>
    .noticia {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  margin-bottom: 30px;
  padding: 20px;
  text-align: justify;
}

.noticia h3 {
  color: #333;
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 10px;
  text-align: center;
}

.noticia img{
  display: block;
  margin: 0 auto;
  height: auto;
}

.noticia p {
  color: #555;
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 20px;
  white-space: pre-wrap;
  word-wrap: break-word;
}

  </style>

 <div class="container-fluid">
  <div class="row justify-content-center nosotrosr">
    <div class="col-12 text-center hnosotros shadow"><b>Noticias</b></div>
    <div class="col-11 col-md-6 hacemos">
    <?php
    if(isset($_GET['id']))
    {
        $registro_id = mysqli_real_escape_string($con, $_GET['id']);
        $query = "SELECT * FROM noticias WHERE id='$registro_id' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            $registro = mysqli_fetch_array($query_run);
            ?>

            <div class="noticia row mt-5">
                <div class="col-12 text-center">
                    <h3><?= $registro['titulo']; ?></h3>
                </div>

                <div class="col-12">
                    <p><b>Autor: </b><?= $registro['autor']; ?><br><b>Fecha de publicación:</b><?= $registro['fecha_publicacion']; ?></p>
                </div>

                <div class="col-12 mb-5">
                <img src="data:image/jpeg;base64,<?php echo  base64_encode($registro['imagen']); ?>" alt="Imagen nota">
                </div>

                <div class="col-12">
                    <p><?= $registro['cuerpo']; ?></p>
                </div>
            </div>

        <?php
            }
            else
            {
                echo "<h4>No Such Id Found</h4>";
            }
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
