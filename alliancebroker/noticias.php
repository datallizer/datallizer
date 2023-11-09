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
    <link rel="stylesheet" href="css/slickslider.css">
    <title>Noticias | Alliance Broker</title>
</head>
<body>
<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="oXmGK4Sa"></script>
    <?php include 'menu2.php'; ?>
    <?php include 'whatsapp.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:120px;margin-bottom:40px;">
            <div class="col-12 text-center mb-5">
                <h2>NOTICIAS</h2>
            </div>

            <?php
            $results_per_page = 5; // Número de noticias por página

            // Obtener el número total de noticias
            $query_count = "SELECT COUNT(*) AS total FROM noticias";
            $result_count = mysqli_query($con, $query_count);
            $row_count = mysqli_fetch_assoc($result_count);
            $total_results = $row_count['total'];

            // Calcular el número total de páginas
            $total_pages = ceil($total_results / $results_per_page);

            // Obtener el número de página actual
            if (isset($_GET['page'])) {
                $current_page = $_GET['page'];
            } else {
                $current_page = 1;
            }

            // Calcular el índice de inicio y fin para la consulta
            $start_index = ($current_page - 1) * $results_per_page;
            $end_index = $start_index + $results_per_page;

            // Consulta para obtener las noticias de la página actual
            $query = "SELECT * FROM noticias ORDER BY id DESC LIMIT $start_index, $results_per_page";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $registro) {
            ?>
                    <div class="col-11 col-md-8 mb-5" data-aos="zoom-in" style="border-radius:10px;box-shadow: 0px 0px 3px rgba(185,185,185,0.29);
-webkit-box-shadow: 0px 0px 3px rgba(185,185,185,0.29);
-moz-box-shadow: 0px 0px 3px rgba(185,185,185,0.29);">
                        <a href="noticia.php?id=<?= $registro['id']; ?>" style="text-decoration: none;color:#000000;">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-10 col-md-4" style="padding-left: 0px;">
                                    <img style="width: 100%;border-radius:10px 0px 0px 10px;max-height:200px;object-fit:cover;" src="data:image/jpeg;base64,<?php echo base64_encode($registro['medios']); ?>" alt="Imagen nota">
                                </div>
                                <div class="col-10 col-md-8">
                                    <h3 class="margnews" style="text-transform:uppercase;"><?= $registro['titulo']; ?></h3>
                                    <pre style="max-height: calc(4 * 1.2em);overflow: hidden; font-size:11px;"><?= $registro['descripcion']; ?>...</pre>
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

        <!-- Paginación -->
        <div class="row justify-content-center" style="margin-bottom:60px;">
            <div class="col-3 text-center">
                <ul class="pagination">
                    <?php
                    for ($page = 1; $page <= $total_pages; $page++) {
                        echo '<li class="page-item';
                        if ($page == $current_page) {
                            echo ' active';
                        }
                        echo '"><a class="page-link" href="?page=' . $page . '">' . $page . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/slickslider.js"></script>
</body>

</html>