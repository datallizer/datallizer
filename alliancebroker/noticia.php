<?php
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Noticia | Alliance Broker</title>
</head>
<body>
<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="oXmGK4Sa"></script>
    <?php include 'menu2.php'; ?>
    <?php include 'whatsapp.php'; ?>
    <div class="container" style="margin-top:120px;margin-bottom:70px;">
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
    <div class="row justify-content-center">
        <div class=" col-11 col-md-8">
            <h4 style="text-transform:uppercase;font-size:30px;"><?= $registro['titulo']; ?></h4>
            <input type="hidden" name="registro_id" value="<?= $registro['id']; ?>">

                <div class="row justify-content-center">
                <div class="col-12 mt-3">
                        <pre><?= $registro['descripcion']; ?></pre>
                    </div>

                    <div class="col-12 mt-3 mb-4">
                        <img src="data:image/jpeg;base64,<?php echo  base64_encode($registro['medios']); ?>" alt="Imagen nota">
                    </div>

                    <div class="col-12">
                        <pre><?= $registro['nota']; ?></pre>
                    </div>

                    <div class="col-12">
                        <p><b>Fecha de publicacion:</b> <?= $registro['fecha']; ?></p>
                        <p><b>Autor:</b> <?= $registro['autor']; ?></p>
                    </div>

                    <div class="col-12 mt-5 mb-5">
                        <a href="noticias.php" class="btn btn-light float-end">Regresar</a>
                    </div>
                </div>
        </div>
    </div>
    <?php
    }else{
        echo "<h4>No se encontro ninguna nota con este ID</h4>";
        }
    }
    ?>
</div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/slickslider.js"></script>
</body>

</html>