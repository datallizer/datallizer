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
  <meta property="og:url" content="https://datallizer.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="css/noticia.css" />
  <link rel="stylesheet" href="css/slickslider.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico">
  <title>Inicio | Datallizer</title>
</head>

<body>
  <!-- Timeline Plugin -->
  <div id="fb-root"></div>

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="qltXOFJo"></script>


  <?php include 'menu.php'; ?>
  <?php include 'whatsapp.php'; ?>

  <div class="container-fluid">
    <div class="hero-container">
      <video class="hero-video" autoplay loop muted>
        <source src="images/herovd.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
      </video>

      <div class="row hero justify-content-around align-items-center glass overx">
        <div class="col-10 col-md-5 colcenter">
          <div class="herotxt" data-aos="fade-right" data-aos-delay="300">
            <h1>INNOVACIÓN <span class="blue">DIGITAL <i class="bi bi-code-slash"></i></span></h1>
            <p>Simplifica y automatiza tu empresa otorgando así mayor eficiencia, operatividad y más agilidad.</p>
            <?php include 'message.php'; ?>
          </div>
        </div>

        <div class="col-11 col-md-1 colcenter justify-content-center mgtop " data-aos="fade-left" data-aos-delay="300" data-aos-anchor-placement="top-bottom">
          <div class="herosocial">
            <a href="https://facebook.com/datallizer" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
            <a href="https://wa.me/524496374915" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>
            <a href="https://m.me/datallizer" target="_blank" rel="noopener noreferrer"><i class="bi bi-messenger"></i></a>
            <a href="https://instagram.com/datallizer" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>


    <div id="nosotros" class="row justify-content-center align-content-center nosotros  text-center">

      <div class="col-10 col-md-10 mb-4" data-aos="fade-right">
        <h2>Sobre nosotros</h2>
      </div>

      <div class="col-10 col-md-10" data-aos="fade-right" data-aos-delay="300">
        <p>Somos una startup de desarrollo de software y automatización, por esta característica entendemos muy bien las necesidades que tienen los emprendedores, así como los medianos y pequeños empresarios. Creemos que cada empresa tiene sus propios desafíos y oportunidades, por eso nos especializamos en el desarrollo de software a medida, lo que significa que trabajamos estrechamente con nuestros clientes para crear soluciones específicas para sus necesidades únicas.
        </p>
      </div>

      <div class="col-11 col-md-10 carrusel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="images/b1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="images/b2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="images/b3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>



    <div id="servicios" class="row services justify-content-center align-content-center ">

      <div class="col-10 col-md-3 servicecard colcenter">
        <h3 style="padding-left:90px;"><b>SERVICIOS</b></h3>
      </div>

      <div class="col-10 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center">
          <div class="col">
            <h3>Sitios web</h3>
          </div>
          <div class="col-2"><i class="bi bi-globe2"></i></div>
        </div>
        <p>Estáticos / Dinámicos </p>
      </div>

      <div class="col-10 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center ">
          <div class="col">
            <h3>Sistemas de ERP y CRM</h3>
          </div>
          <div class="col-2"><i class="bi bi-braces"></i></div>
        </div>
        <p>Para la gestión de la empresa y de los clientes.</p>
      </div>

      <div class="col-10 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center ">
          <div class="col">
            <h3>Aplicaciones móviles</h3>
          </div>
          <div class="col-2"><i class="bi bi-phone"></i></div>
        </div>
      </div>

      <div class="col-10 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center ">
          <div class="col">
            <h3>Chat box</h3>
          </div>
          <div class="col-2"><i class="bi bi-chat-left-dots"></i></div>
        </div>
        <p>Para el servicio al cliente</p>
      </div>

      <div class="col-10 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center ">
          <div class="col">
            <h3>Comunicación y mercadotecnia digital</h3>
          </div>
          <div class="col-2"><i class="bi bi-megaphone"></i></div>
        </div>
      </div>
    </div>

    <div class="row proyectos justify-content-center" id="proyectos">

      <div class="col-11 text-center mb-5">
        <h2>Proyectos realizados</h2>
        <p>Una solucion para cada cliente</p>
      </div>

      <div class="customer-logos col-9 col-md-10">

        <div class="slide-in-right slide slmargin">
          <img src="images/solara.png" alt="Solara">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/subbe.png" alt="Subbe">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/alliance.png" alt="Alliance">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/metamorfit.png" alt="Metamotfit">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/laBoqueria.jpeg" alt="La Boqueria">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/levana.jpeg" alt="Levana">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/logocepaplateral.png" alt="CEPAP">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/capullitos.png" alt="Capullitos">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/ucap.png" alt="UCAP">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/agrydem.png" alt="Agrydem">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/mgelectrica.png" alt="MG Electrica">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/pypconstructora.png" alt="PyP COnstructora">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/taami.png">
        </div>

        <div class="slide-in-right slide agslocal slmargin">
          <img src="images/aescena.png" alt="AgsLocal">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/agslocal.png" alt="AEscena">
        </div>

        <div class="slide-in-right slide agslocal slmargin">
          <img src="images/elfrijolito.png" alt="El Frijolito">
        </div>

        <div class="slide-in-right slide siraa slmargin">
          <img src="images/siraa.jpg" alt="SIRAA">
        </div>

      </div>
    </div>

    <div id="contacto" class="row contacto justify-content-center align-content-center">
      <div class="col-11 col-md-5 formacontacto text-center">
        <h2 class="mb-4">¿En que podemos ayudarte?</h2>

        <form action="cotizacion.php" method="post">
          <div class="row justify-content-center">

            <div class="form-floating mb-3 col-12 col-md-6">
              <input class="form-control" type="text" placeholder="Nombre" id="floatingInput" name="nombre" required autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
              <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating mb-3 col-12 col-md-6">
              <input class="form-control" type="text" placeholder="Apellido" id="floatingInput" name="apellido" required autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
              <label for="floatingInput">Apellido</label>
            </div>


            <div class="form-floating mb-3 col-12 col-md-4">
              <input class="form-control" type="text" placeholder="Teléfono" id="floatingInput" name="telefono" required autocomplete="off">
              <label for="floatingInput">Teléfono</label>
            </div>

            <div class="form-floating mb-3 col-12 col-md-8">
              <input class="form-control" type="email" placeholder="Email" id="floatingInput" name="email" required autocomplete="off">
              <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-3 col-12">
              <textarea class="form-control" placeholder="Detalles de tu proyecto" id="floatingInput" name="detalles" required autocomplete="off" style="min-height:150px;"></textarea pattern="[a-zA-Z\s]{1-200}">
            <label for="floatingInput">Detalles</label>
          </div>

          <div class="col-md-3 col-5">
            <button type="submit" class="btncontacto btn btn-dark">Enviar</button>
          </div>

          </div>
        </form>
      </div>
    </div>

    <div class="row justify-content-center newsindex">
    <div class="col-11 text-center">
        <h2>NOTICIAS</h2>
      </div>
      <div class="col-11">
        <div class="noticias-slider">
            <!-- Elementos de noticias -->
            <?php
            $query = "SELECT * FROM noticias ORDER BY id DESC LIMIT 10";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $registro) {
            ?>
            <div class="col-12 col-md-4 m-3 noticia-item">
                <!-- Contenido de la noticia -->
                <div class="card" style="width: 100%; position: relative;">
    <img src="data:image/jpeg;base64,<?php echo base64_encode($registro['imagen']); ?>" class="card-img-top" alt="Imagen de la noticia">
    <h5 class="card-title" style="
        position: absolute;
        bottom: 38%;
        width: 100%;
        height: 30%;
        background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.685) 54%, rgba(0,0,0,0) 100%);
        color: white;
        padding: 10px;
        text-transform: uppercase;
        margin: 0;
        font-weight: 600;
        display: flex;
        align-items: flex-end;
    ">
        <?php
        $titulo = $registro['titulo'];
        echo substr($titulo, 0, 70);
        if (strlen($titulo) > 70) {
            echo '...';
        }
        ?>
    </h5>
    <div class="card-body">
        <pre style="min-height: 105px;"><?php echo $registro['cuerpo']; ?></pre>
        <p style="font-size:10px;" class="mt-1"><?php echo $registro['autor']; ?></p>
        <a href="vernoticia.php?id=<?php echo $registro['id']; ?>" class="btn btn-sm btn-dark mt-3">Ver más</a> 
    </div>
</div>

            </div>
            <?php
              }
            } else {
              echo '<div class="col-12 text-center">No hay noticias disponibles por el momento</div>';
            }
            ?>
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <a href="noticias.php" style="color: #2b2b2b;">
            <p>Ver todas las notas</p>
            <i class="bi bi-chevron-double-down"></i>
        </a>
    </div>
    </div>

    <div id="bolsadetrabajo" class="row reclutamiento justify-content-center align-items-center">
      <div class="col-11 col-md-7 text-center">
        <p>we're hiring</p>
        <h2>Únete a nuestro equipo</h2>
        <a class="btn btn-primary" href="bolsadetrabajo.php">Aplicar</a>
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

    $(document).ready(function(){
    $('.noticias-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});
  </script>
</body>

</html>