<?php
require 'dbcon.php';
?>
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
  <meta property="og:url" content="https://datallizer.com/noticias">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="css/noticia.css" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
  <title>Noticias | Datallizer</title>
</head>

<body>
  <!-- Timeline Plugin -->
  <div id="fb-root"></div>

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="qltXOFJo"></script>

  <?php include 'menu.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <div class="container-fluid" style="background-color: #ffffff !important;">
    <div class="row justify-content-center" style="margin:80px 0px;">
        <div class="col-12 text-center mt-5 mb-5">
            <h2>NOTICIAS</h2>
        </div>

        <?php
        $results_per_page = 3; // Número de noticias por página

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
                <div class="col-10 col-md-8 mb-5 bg-light g-0">
                    <a href="vernoticia.php?id=<?= $registro['id']; ?>" style="text-decoration: none;color:#000000;">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 col-md-4">
                                <img style="width: 100%;" src="data:image/jpeg;base64,<?php echo base64_encode($registro['imagen']); ?>" alt="Imagen nota">
                            </div>
                            <div class="col-10 col-md-8" style="padding-right:50px;">
                                <h3 style="text-transform:uppercase;margin-top:20px;">
                                <?php
                        $titulo = $registro['titulo'];
                        echo substr($titulo, 0, 70);
                        if (strlen($titulo) > 70) {
                          echo '...';
                        }
                        ?>
                                </h3>
                                <pre style="margin-bottom: 20px;"><?= $registro['cuerpo']; ?></pre>
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
    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
            <ul class="pagination" style="justify-content: center;">
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
