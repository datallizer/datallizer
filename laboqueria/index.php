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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slickslider.css">
    <link rel="stylesheet" href="css/galeria.css">
    <title>Inicio | La Boqueria Travel</title>
</head>
<body>
    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "116393914686939");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
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

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v15.0" nonce="peXIFa9o"></script>
    
<?php include 'menu.php'; ?>
<?php include 'whatsapp.php'; ?>

<div class="container-fluid">

    <div class="row justify-content-center align-items-center hero">
        <div class="col-9 col-md-4 m-0  p-0 herotxt" data-aos="fade-right">
            <div><h1 style="color:#ffffff;text-shadow:1px 1px 3px #000000;">LO MEJOR EN VIAJES</h1>
            <p>Encuentra tu destino ideal, conoce nuestra oferta de servicios disponibles, boletos de avión, tours, reserva en tu hotel favorito o arma tu paquete ideal, incluye las opciones que necesites para un mayor confort.</p>
            <a href="index.php#servicios" class="btn btn-sm btn-outline-light">Ver más</a>
            </div>
        </div>
        <div class="col-5"></div>
    </div>

    <div id="nosotros" class="row justify-content-center align-items-center nosotros">
        <div class="col-11 col-md-8 text-center nosotorostitle" data-aos="fade-up">
            <h2 style="margin-bottom:20px !important;">QUIENES SOMOS</h2>
            <p style="text-align:justify">Esta empresa nació por mi pasión de conocer el mundo.  Después de haber recorrido varios países y ciudades a lo largo de varios años, decidí compartir mi conocimiento  y experiencia con otras personas en gestión de viajes , apoyándolos en la búsqueda de lugares para que vivan una gran experiencia, que no tengo duda, con el tiempo se convertirá en extraordinarios recuerdos.
            </p>
        </div>

       <div class="row justify-content-center align-items-center">
       <div class="col-11 col-md-3 text-center" data-aos="fade-left">
            <img style="border-radius:10px;" src="images/mary.jpg" alt="">
        </div>

        <div class="col-11 col-md-5 colus text-center" data-aos="fade-right">
        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        VISIÓN
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <p>Ser una empresa reconocida a nivel regional al término de año 2027, dirigida a familias y jóvenes de nivel socioeconómico medio alto, con crecimiento sostenido, personal capacitado y cartera de clientes frecuentes mayor a 100, ofreciendo servicios de alojamiento y traslado a destinos nacionales e internacionales, vía aérea, terrestre y/o marítima, a través de la buena atención de nuestro personal debidamente capacitado, logrando superar las expectativas de nuestros clientes.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        MISIÓN
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <p>Brindar felicidad, aventura y diversión a familias y jóvenes a través de servicios turísticos personalizados de calidad y confiabilidad.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        VALORES
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <p>-Cortesía y agradecimiento hacia nuestros clientes y compañeros para 
            hacerlos sentir especiales<br>-Ofrecer lo mejor de nuestras capacidades para satisfacer las necesidades de nuestros clientes<br>-Respeto hacia el tiempo de cada persona<br>-Tranquilidad y seguridad para nuestros empleados y clientes<br>Somos una familia unida y alineada a los objetivos de la empresa<br>-Compromiso del cumplimiento de las promesas ofrecidas<br>-¡Disfrutamos nuestro trabajo y los viajes!</p>
      </div>
    </div>
  </div>
</div>
        </div>
       </div>
    </div>

    <div id="servicios" class="row justify-content-center align-items-center paquetes">
        <div data-aos="fade-up" class="col-12 text-center"><h2 style="color:#ffffff;margin-bottom:30px;">SERVICIOS</h2></div>
        <div class="col-11"><?php include 'slickslider.php';?></div>

    </div>


    <div id="galeria" class="row justify-content-center align-items-center galeria">
        <div class="col-12 text-center" style="margin-bottom:35px;">
            <h2>GALERÍA</h2>
            <p>Todos los grandes momentos necesitan ser recordados.</p>
            <i class="bi bi-chevron-double-down"></i>
        </div>
        <div class="col-12 col-md-10">
            <div class="row">
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                    <a data-fslightbox="gallery" href="images/1.jpg"><img loading="lazy" src="images/1.jpg"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                    <a data-fslightbox="gallery" href="images/2.jpg"><img src="images/2.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                    <a data-fslightbox="gallery" href="images/3.jpg"><img src="images/3.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                    <a data-fslightbox="gallery" href="images/4.jpg"><img src="images/4.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-6">
                    <a data-fslightbox="gallery" href="images/5.jpg"><img src="images/5.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-6">
                    <a data-fslightbox="gallery" href="images/6.jpg"><img src="images/6.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                    <a data-fslightbox="gallery" href="images/7.jpg"><img src="images/7.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                    <a data-fslightbox="gallery" href="images/8.jpg"><img src="images/8.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-12 col-md-3">
                    <a data-fslightbox="gallery" href="images/9.jpg"><img src="images/9.jpg" loading="lazy"></a> 
                    </div>

                    <div data-aos="zoom-in-up" class="galerimg col-12 col-md-3">
                    <a data-fslightbox="gallery" href="images/10.jpg"><img src="images/10.jpg" loading="lazy"></a> 
                    </div>

                    </div>
        </div>
    </div>

    <div id="contacto" class="row justify-content-evenly contacto align-items-center">
        <div class="col-11 col-md-5 order-1 map" data-aos="fade-left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.827064973475!2d-102.30529598526243!3d21.902734162743723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eef7a5e76f7d%3A0xfaa94aaf6d7d3b2e!2sAv%20Canal%20Interceptor%20903%2C%20Las%20Arboledas%2C%2020020%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses!2smx!4v1675787563654!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-11 col-md-5 order-md-2" data-aos="fade-right">
            <div>
                <h2>CONTÁCTO</h2>
            <i class="bi bi-geo-alt-fill"> Ubicación</i>
            <p><a href="https://goo.gl/maps/3vacVAApYRHvrmge7" target="_blank" rel="noopener noreferrer">Av. Canal Interceptor #903, Fracc. Las Arboledas, Aguascalientes, México. CP 20020</a></p>
            <i class="bi bi-envelope-fill"> Correo</i>
            <p><a href="mailto:viajes@laboqueriatravel.com">viajes@laboqueriatravel.com</a></p>
            <i class="bi bi-telephone-fill"> Teléfonos</i>
            <p><a href="tel:4496245202">Fijo: 449 624 5202</a><a href="tel:4495412779"> | Móvil: 449 541 2779</a></p>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   
    <script src="js/slickslider.js"></script>
    <script src="js/js.js"></script>
    <script src="js/fslightbox.js"></script>

    <script>
        AOS.init({
            duration: 600,
            once: true
        });
    </script>
</body>
</html>
