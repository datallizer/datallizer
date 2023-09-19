<?php
require 'dbcon.php';
?>
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
  <link rel="stylesheet" href="css/noticia.css" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico">
  <title>Inicio | Datallizer</title>
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

  <?php include 'menu.php'; ?>
  
  <div class="container-fluid">
    <div class="row hero justify-content-around align-items-center glass overx">
      <div class="col-11 col-md-5 colcenter">
        <div class="herotxt" data-aos="fade-right" data-aos-delay="300">
          <h1>INNOVACIÓN <span class="blue">DIGITAL <i class="bi bi-code-slash"></i></span></h1>
          <p>Simplifica y automatiza tu empresa otorgando así mayor eficiencia, operatividad y más agilidad.</p>
          <?php include 'message.php'; ?>
        </div>
      </div>

<<<<<<< HEAD
      <div class="col-11 col-md-3 heroimg mgtop" data-aos="fade-down" data-aos-delay="300">
        <img src="images/developer.jpg" alt="">
      </div>
=======
      
>>>>>>> 85261fb07bfad84d8e7a5084ae91990dce312b65

      <div class="col-11 col-md-1 colcenter justify-content-center mgtop " data-aos="fade-left" data-aos-delay="300">
        <div class="herosocial">
          <a href="https://facebook.com/datallizer" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>

          <a href="https://wa.me/14088277605" target="_blank" rel="noopener noreferrer"><i class="bi bi-whatsapp"></i></a>

          <a href="https://instagram.com/datallizer" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>

          <a href="https://m.me/datallizer" target="_blank" rel="noopener noreferrer"><i class="bi bi-messenger"></i></a>
        </div>
      </div>
    </div>

    <div id="nosotros" class="row justify-content-center align-content-center nosotros">

      <div class="col-12 colnomp"><img src="images/webs.png" alt=""></div>

      <div class="col-11 col-md-3 colcenter nosotrosh2" data-aos="fade-right">
        <h2>Sobre nosotros</h2>
      </div>

      <div class="col-11 col-md-7" data-aos="fade-right" data-aos-delay="300">
        <p>Somos una pequeña empresa de desarrollo de software, y por esta característica, entendemos muy bien las necesidades que tienen los emprendedores, así como los medianos y pequeños empresarios.
          <br><br>
          Creemos que cada empresa tiene sus propios desafíos y oportunidades, por eso nos especializamos en el desarrollo de software a medida, lo que significa que trabajamos estrechamente con nuestros clientes para crear soluciones específicas para sus necesidades únicas. 
        </p>
        <a class="btn btn-dark btn-sm" href="nosotros.php">Ver más...</a>
      </div>

      <div class="col-12 col-md-11 carrusel">
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
      <div class="col-11 text-center servicesh2">
        <h2>Nuestros servicios</h2>
      </div>
      <div class="col-11 col-md-3 servicecard colcenter">
        <div>
          <a class="colcenter" style="text-decoration: none;color:#ffffff;" href="#contacto">
            Estoy interesado en sus servicios
            <i style="background-color: transparent;color:#ffffff;" class="bi bi-arrow-right-short">
            </i>
          </a>
        </div>
      </div>

      <div class="col-11 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center colcenter">
          <div class="col">
            <h3>Sitios Web</h3>
          </div>
          <div class="col-2"><i class="bi bi-pen"></i></div>
        </div>
        <p>Estáticos / Dinámicos </p>
      </div>

      <div class="col-11 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center colcenter">
          <div class="col">
            <h3>Sistemas de ERP y CMR</h3>
          </div>
          <div class="col-2"><i class="bi bi-braces"></i></div>
        </div>
        <p>Para la gestión de la empresa y de los clientes.</p>
      </div>

      <div class="col-11 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center colcenter">
          <div class="col">
            <h3>Aplicaciones Móviles</h3>
          </div>
          <div class="col-2"><i class="bi bi-people"></i></div>
        </div>
      </div>

      <div class="col-11 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center colcenter">
          <div class="col">
            <h3>Creación de Chat Box</h3>
          </div>
          <div class="col-2"><i class="bi bi-hdd"></i></div>
        </div>
        <p>Para el servicio al cliente</p>
      </div>

      <div class="col-11 col-md-3 servicecard">
        <div class="row justify-content-evenly align-content-center colcenter">
          <div class="col">
            <h3>Comunicación y Mercadotecnia Digital</h3>
          </div>
          <div class="col-2"><i class="bi bi-gear"></i></div>
        </div>
       </div>
    </div>

<<<<<<< HEAD
=======
    

>>>>>>> 85261fb07bfad84d8e7a5084ae91990dce312b65
    <div class="row proyectos justify-content-center" id="proyectos">

      <div class="col-11 text-center">
        <h2>proyectos realizados</h2>
        <p>Una solucion para cada cliente</p>
<<<<<<< HEAD
      </div>

      <div class="customer-logos">

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
          <img src="images/agrydem.png" alt="Agrydem">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/ucap.png" alt="UCAP">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/capullitos.png" alt="Capullitos">
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
          <img src="images/agslocal.png" alt="AgsLocal">
        </div>

        <div class="slide-in-right slide slmargin">
          <img src="images/aescena.png" alt="AEscena">
        </div>

        <div class="slide-in-right slide agslocal slmargin">
          <img src="images/elfrijolito.png" alt="El Frijolito">
        </div>

        <div class="slide-in-right slide siraa slmargin">
          <img src="images/siraa.jpg">
        </div>

      </div>
    </div>


    

=======
        <br><br>
      </div>
      

      <div class="customer-logos">

        <table> <!-- Tabla de imagenes de proyectos realizados -->
          <tr>
            <td width="75px">
            </td>
            <td>
              <img class="img_rect" src="images/laBoqueria.jpeg" alt="La Boqueria">
            </td>
            <td width="150px">
            </td>  
            <td>
              <img class="img_rect" src="images/levana.jpeg" alt="Levana">
            </td>
            <td width="150px">
            </td>
            <td>
              <img class="img_rect" src="images/logocepaplateral.png" alt="CEPAP">
            </td>
          </tr>
          <tr height="75px">
          </tr>
          <tr>
          <td width="75px">
            </td>
            <td>
              <img class="img_cuad" src="images/agrydem.png" alt="Agrydem">
            </td>
            <td width="150px">
            </td>  
            <td>
              <img class="img_rect" src="images/ucap.png" alt="UCAP">
            </td>
            <td width="150px">
            </td>
            <td>
              <img class="img_rect" src="images/capullitos.png" alt="Capullitos">
            </td>
          </tr>
          <tr height="75px">
          </tr>
          <tr>
          <td width="75px">
            </td>
            <td>
              <img class="img_rect" src="images/mgelectrica.png" alt="MG Electrica">
            </td>
            <td width="150px">
            </td>  
            <td>
              <img class="img_rect" src="images/pypconstructora.png" alt="PyP COnstructora">
            </td>
            <td width="150px">
            </td>
            <td>
              <img class="img_rect" src="images/taami.png">
            </td>
          </tr>
          <tr height="75px">
          </tr>
          <tr>
          <td width="50px">
            </td>
            <td>
              <img class="img_cuad" src="images/agslocal.png" alt="AgsLocal">
            </td>
            <td width="100px">
            </td>  
            <td>
              <img class="img_rect" src="images/aescena.png" alt="AEscena">
            </td>
            <td width="100px">
            </td>
            <td>
              <img class="img_rect" src="images/elfrijolito.png" alt="El Frijolito">
            </td>
          </tr>
          <tr height="75px">
          </tr>
          <tr>
          <td width="50px">
          </td>
          <td colspan="50" align="center">
              <img class="img_cuad" src="images/siraa.jpg">
            </td>
          </tr>
        </table>
      </div>
    </div>
    
>>>>>>> 85261fb07bfad84d8e7a5084ae91990dce312b65
    <div id="contacto" class="row contacto justify-content-center align-content-center">
      <div  class="col-11 col-md-5 formacontacto text-center">
        <h2>¿En que podemos ayudarte?</h2>

<<<<<<< HEAD
        <form action="cotizacion.php" method="post">
          <div class="row justify-content-center">

            <div class="col-6">
              <input class="form-control" type="text" placeholder="Nombre" id="nombre" name="nombre" required autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
            </div>

            <div class="col-6">
              <input class="form-control" type="text" placeholder="Apellido" id="apellido" name="apellido" required autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
            </div>

          
          <div class="col-12">
            <input class="form-control" type="text" placeholder="Teléfono" id="telefono" name="telefono" required autocomplete="off">
          </div>
          
          <div class="col-12">
            <input class="form-control" type="email" placeholder="Email" id="email" name="email" required autocomplete="off">
          </div>

          <div class="col-12">
            <textarea class="form-control" rows="3" placeholder="Detalles de tu proyecto" id="detalles" name="detalles" required autocomplete="off"></textarea pattern="[a-zA-Z\s]{1-500}">
=======
        <form class="form-floating" action="cotizacion.php" method="post">
          <div class="row justify-content-center">

            <div class="mb-3 form-floating">
              <input class="form-control" type="text" placeholder="Nombre" id="floatingnombre" name="nombre" required autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
              <label for="floatingnombre"> Nombre </label>
            </div>

            <div class="mb-3 form-floating">
              <input class="form-control" type="text" placeholder="Apellido" id="apellido" name="apellido" required autocomplete="off" pattern="[a-zA-Z\s]{1-50}">
              <label for="apellido"> Apellido </label>
            </div>

          
            <div class="mb-3 form-floating">
            <input class="form-control" type="text" placeholder="Teléfono" id="telefono" name="telefono" required autocomplete="off">
            <label for="telefono"> Telefono </label>
          </div>
          
          <div class="form-floating mb-3 ">
            <input class="form-control" type="email" id="email" name="email" required autocomplete="off">
            <label for="email"> Email </label>
          </div>

          <div class="mb-3 form-floating">
            <textarea class="form-control" rows="3" placeholder="Detalles de tu proyecto" id="detalles" name="detalles" required autocomplete="off"></textarea pattern="[a-zA-Z\s]{1-500}">
            <label for="detalles"> Detalles del Proyecto </label>
>>>>>>> 85261fb07bfad84d8e7a5084ae91990dce312b65
          </div>

          <div class="form-check lefta col-12">
            <input style="width:15px;" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault acepto" name="acepto" required autocomplete="off">
            <label class="form-check-label" for="flexCheckDefault">
            Acepto los términos, condiciones y politicas.
            </label>
          </div>

          <div class="col-md-3 col-5">
            <button type="submit" class="btncontacto btn btn-primary">Enviar</button>
          </div>

          </div>
        </form>
      </div>
    </div>

    <div class="row justify-content-center align-content-center newsindex">
    <div class="col-11 text-center">
        <h2>NOTICIAS</h2>
      </div>
      <div class="col-12">
        <div class="noticias-slider">
            <!-- Elementos de noticias -->
            <?php 
                $query = "SELECT * FROM noticias ORDER BY id DESC LIMIT 10";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $registro)
                    {
            ?>
            <div class="col-12 col-md-4 m-3 noticia-item">
                <!-- Contenido de la noticia -->
                <div class="card" style="width: 100%;">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($registro['imagen']); ?>" class="card-img-top" alt="Imagen de la noticia">
                    <div class="card-body">
                        <h5 class="card-title" style="text-transform: uppercase;"><?php echo $registro['titulo']; ?></h5>
                        <div class="pre-container">
                            <pre class="pre-content"><?php echo $registro['cuerpo']; ?></pre>
                        </div>
                        <a href="vernoticia.php?id=<?php echo $registro['id']; ?>" class="btn btn-sm btn-dark mt-3">Leer artículo <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
                else
                {
                    echo "No hay noticias disponibles por el momento";
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