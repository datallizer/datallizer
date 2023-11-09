<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpeg" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <title>Inicio - P&P Constructora</title>
</head>
<body>

<!-- Messenger plugin del chat Code -->
<div id="fb-root"></div>

<!-- Your plugin del chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "108068451997079");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
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

<?php include('menu.php'); ?>

<div  class="hero overflowh">
    <img data-aos="fade-up" src="images/logo.png" alt="">
</div>

<div class="services">
  <div class="container">
    <div class="row servicios justify-content-center align-items-center">
      <div class="col-11 col-md-12 text-center">
      <i data-aos="zoom-in" class="overflowh bi bi-house-fill"></i>
      <h2 class="overflowh" data-aos="fade">SERVICIOS</h2>
      </div>

      <div class=" col-11 col-md-1">
        <p class="overflowh borderleft" data-aos="fade-right">DISEÑO</p>
      </div>

      <div class="col-11 col-md-2">
        <p class="overflowh borderleft" data-aos="fade-right">CONSTRUCCIÓN</p>
      </div>

      <div class="col-11 col-md-2">
        <p class="overflowh borderleft" data-aos="fade-right">REMODELACIÓN</p>
      </div>

      <div class="col-11 col-md-3">
        <p class="overflowh borderleft" data-aos="fade-right">RESIDENCIAL Y COMERCIAL</p>
      </div>

    </div>
  </div>
</div>

<div class="belt">
  <div class="container">
    <div class="row justify-content-center align-items-center cintilla">
      <div class="col-md-11 text-center">
        <h2>“CONSTRUCTORES DE SUEÑOS”</h2>
      </div>
    </div>
  </div>
</div>

<div id="nosotros" class="team">
  <div class="container">
    <div class="row justify-content-evenly align-items-center equipo">
      <div data-aos="fade-down" class="col-10 col-md-6 equimomovil">
        <h2>¿QUIÉNES <span>SOMOS?</span></h2>
        <p>Somos una empresa 100% hidrocálida, expertos en proyectos arquitectónicos, diseño y optimización de espacios en casa habitación, nos respaldan más de 60 proyectos realizados, junto a nuestro equipo conformado por arquitectos, ingenieros y diseñadores, en conjunto realizamos la casa de tus sueños.</p>
      </div>

      <div class="col-12 col-md-3 ctotal">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a data-fslightbox="gallery" href="images/21.jpeg">
      <img src="images/21.jpeg" class="w-100" loading="lazy">
    </a> 
    </div>
    <div class="carousel-item">
    <a data-fslightbox="gallery" href="images/p1.jpg">
      <img src="images/p1.jpg" class="w-100" loading="lazy">
    </a> 
    </div>
    <div class="carousel-item">
    <a data-fslightbox="gallery" href="images/p2.jpg">
      <img src="images/p2.jpg" class="w-100" loading="lazy">
    </a> 
    </div>
    <div class="carousel-item">
    <a data-fslightbox="gallery" href="images/p3.jpg">
      <img src="images/p3.jpg" class="w-100" loading="lazy">
    </a> 
    </div>
    <div class="carousel-item">
    <a data-fslightbox="gallery" href="images/p4.jpg">
      <img src="images/p4.jpg" class="w-100" loading="lazy">
    </a> 
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>

    </div>
  </div>
</div>



<div class="mision">
  <div class="container">
    <div class="row justify-content-around align-items-center">


      <div class="col-9 col-md-4 mvi shadow" data-aos="fade-right">
        <h3><i class="bi bi-briefcase-fill"></i> MISIÓN</h3>
        <p>Somos una empresa comprometida con el cliente, entender sus gustos e ideas son primordiales para realizar el proyecto. La satisfacción y conformidad del cliente es el resultado del buen trabajo realizado.</p>
      </div>

      <div class="col-10 col-md-3 mvi shadow" data-aos="zoom-in">
        <h3><i class="bi bi-eye-fill"></i> VISIÓN</h3>
        <p>Ser la constructora más importante en México, reconocida por su excelente servicio, compromiso, responsabilidad y la alta calidad de nuestro trabajo.</p>
      </div>

      <div class="col-9 col-md-4 mvi shadow" data-aos="fade-left">
        <h3><i class="bi bi-puzzle-fill"></i> VALORES</h3>
        <p>Responsabilidad <br>Honestidad <br>Compromiso</p>
      </div>

    </div>
  </div>
</div>



<div class="portfolio">
  <div class="container">
    <div class="row justify-content-center align-items-center portafolio overflowh">
      <div data-aos="fade-down" class="col-md-10 text-center overflowh">
        <h2 id="servicios">NUESTROS PROYECTOS</h2>
        <p>En PYP hemos realizado casas habitación con diversos diseños únicos e innovadores para satisfacer el gusto del cliente, con una excelente elaboración de proyecto, una buena distribución, construcción de obra, acabados (yeso, aluminio, vidrio, carpintería, electricidad, fontanería y limpieza) el proyecto se realiza en perfectas condiciones para una entrega satisfactoria.</p>
        <i class="bi bi-arrow-down"></i>
      </div>
    </div>
  </div>
</div>

<div class="projects">
  <div class="container">
    <div class="row justify-content-around align-items-center proyectos overflowh">
      <div class="col-12 col-md-5 overflowh ctotal">
        <img load="lazy" src="images/35.jpeg" alt="" class="overflowh">
      </div>

      <div class="col-10 col-md-5 mtop overflowh">
        <h3 data-aos="fade-up">RESIDENCIALES</h3>
        <p data-aos="fade-up">1.	Construcción de casa habitación para comercialización (modelos de casas a la venta al público)
<br>2.	Construcción de casa habitación al gusto del cliente (el cliente nos contrata para elaborar su proyecto con sus ideas y sus gustos) <br>
3.	Servicio inmobiliarios de renta y venta de casas <span class="fontless">
<br>•	Casa coto san Nicolás 
<br>•	San Agustín
<br>•	Arcoíris 1 y 2
<br>•	La trinidad 1 y 2
<br>•	Del volcán
<br>•	La ladera 1 y 2
<br>•	Santa Monica 1, 2, 3 y 4
<br>•	Brisas
<br>•	LORETTA 1,2,3
<br>•	LAS PLAZAS
<br>•	ABADIA
</span>
</p>
      </div>

    </div>
  </div>
</div>

<div class="portfolio">
  <div class="container">
    <div class="row justify-content-center align-items-center portafolio overflowh">
      <div data-aos="fade-down" class="col-10 col-md-6 text-center overflowh">
        <h2>ENFOQUE</h2>
        <p>Nuestros arquitectos e ingenieros cuenta con una gran trayectoria y experiencia de éxito comprobada.</p>
      </div>
    </div>
  </div>
</div>

<div class="charts">
  <div class="container">
    <div class="row justify-content-center align-items-center graficos">

      <div data-aos="zoom-out" class="col-5 col-md-2 text-center tumb">
      <i class="bi bi-cone-striped"></i>
          <p>CONSTRUCCION</p>
      </div>

      <div data-aos="zoom-out" class="col-5 col-md-2 text-center tumb">
      <i class="bi bi-pen"></i>
          <p>DISEÑO</p>
      </div>

      <div data-aos="zoom-out" class="col-5 col-md-2 text-center tumb">
      <i class="bi bi-building"></i>
          <p>ARQUITECTURA</p>
      </div>

      <div data-aos="zoom-out" class="col-5 col-md-2 text-center tumb">
      <i class="bi bi-lamp"></i>
          <p>INTERIORISMO</p>
      </div>

    </div>
  </div>
</div>

<div id="contacto" class="contacto">
<div class="container">
    <div class="row justify-content-evenly">
    <h2 style="margin-bottom: 45px;" class="text-center">CONTACTO</h2>

        <div class="col-10 col-md-4 order-lg-1">
                <form class="form-horizontal" method="post" action="mail.php">
                    <fieldset>

                        <div style="margin: 5px 0;" class="form-group">
                          <label for="fname" class="form-label">Nombre</label>
                          <input id="name" name="name" type="text" class="form-control">
                        </div>

                        <div style="margin: 5px 0;" class="form-group">
                        <label for="email" class="form-label">Correo electronico</label>
                                <input id="email" name="email" type="mail" class="form-control">
                        </div>

                        <div style="margin: 5px 0;" class="form-group">
                        <label for="phone" class="form-label">Teléfono</label>
                                <input id="phone" name="phone" type="number" class="form-control">
                        </div>

                        <div style="margin: 5px 0;" class="form-group">
                        <label for="message" class="form-label">Detalles</label>
                                <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                        </div>

                        <div style="margin-top: 45px 0;" class="form-group">
                            <div class="col-md-12 text-center">
                                <button style="margin-top: 25px;" type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-md">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
        </div>

        <div class="col-10 col-md-4 txtformulario order-lg-2 comentanos" data-aos="fade-down">
          <h4>COMÉNTANOS TU PROYECTO</h4>
          <p class="gray">En breve un representante se contáctara contigo</p><br>
          <p class="gray"><i class="bi bi-envelope-fill"></i> contacto@pypconstructora.com.mx</p>
          <p class="gray"><i class="bi bi-telephone-fill"></i> 449 506 2007 y 449 125 6999</p>
          <p style="margin-bottom: 30px;" class="gray"><i class="bi bi-geo-alt-fill"></i> Oficinas en Navarrete #1006, Colonia San Marcos, Aguascalientes, Ags.</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.487168301942!2d-102.31879764916374!3d21.877308338901223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee999d88f43b%3A0xe98f290007db1944!2sNavarrete%201006%2C%20Fraccionamiento%20San%20Marcos%2C%2020078%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses!2smx!4v1663859827474!5m2!1ses!2smx" height="177px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
        </div>

        
    </div>
</div>
</div>




<?php include('footer.php'); ?>

<script src="js/fslightbox.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>   

<script>
  AOS.init({
    duration: 600,
    once: true
  });

</script>
</body>
</html>