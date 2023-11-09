<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slickslider.css">
    <title>Inicio | Alliance Broker</title>
</head>
<body>
    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110684161982559");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
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

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="oXmGK4Sa"></script>
    <?php include 'menu.php'; ?>
    <?php include 'whatsapp.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-evenly align-items-center hero">
            <div class="col-12 col-md-7 text-center">
                <h1 data-aos="fade-down">LITIGIO Y SEGUROS</h1>
                <p data-aos="fade-down">Hablando de seguros somos seguros</p>
            </div>
        </div>
        <div class="row justify-content-evenly align-items-top nosotros">
            <div class="col-12 col-md-9 text-center" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                <h2>Sobre nosotros</h2>
                <p style="color: #ffffff;">Somos expertos profesionales en
                    intermediación de seguros y
                    administración de riesgos.
                    Contamos con abogados especializados en
                    representación corporativa.</p>
            </div>
            
            <div class="row justify-content-evenly align-items-top">
            <div data-aos="fade-down" data-aos-anchor-placement="top-center" class="col-11 col-md-3 cardus">
                <img src="images/nosotros.jpg" alt="">
                <div class="txtus">
                    <h3>Mision</h3>
                    <p>Resolver las necesidades de
                        nuestros clientes en el ámbito de
                        seguros y jurídico</p>
                    <a href="#">Conoce más <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="col-11 col-md-3 cardus">
                <img src="images/valores.jpg" alt="">
                <div class="txtus">
                    <h3>Valores</h3>
                    <p>Servicios de consultoría y
                        gestión de alta calidad con la mejor opción en administración
                        de riesgos y servicios jurídicos,
                        honestidad, ética, gestion profesional y
                        sentido de urgencia.</p>
                    <a href="#">Conoce más <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div data-aos="fade-down" data-aos-anchor-placement="top-center" class="col-11 col-md-3 cardus">
                <img src="images/vision.jpg" alt="">
                <div class="txtus">
                    <h3>Vision</h3>
                    <p>Entregar soluciones integrales
                        con innovación y productos
                        específicamente diseñados con
                        altos estándares de calidad en el
                        servicio.</p>
                    <a href="#">Conoce más <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            </div>

        </div>
        <div class="row justify-content-center align-items-center legales">
            <div class="col-10">
                <div class="row justify-content-center align-items-center legalescard">
                    <div class="col-12 col-md-6" style="padding: 0px !important;"><img src="images/litigio.jpg" alt=""></div>
                    <div class="col-12 col-md-6">
                        <ul>
                            <li>
                                <h2>Servicios legales</h2>
                            </li>
                            <li>-Administrativo</li>
                            <li>-Penal</li>
                            <li>-Fiscal</li>
                            <li>-Laboral</li>
                            <li>-Procesal</li>
                            <li>-Civil</li>
                            <li>-Mercantil</li>
                            <li>-Constitucional</li>
                            <li style="margin-top:10px;"><a style="margin-left: 7px;" href="litigio.php">Ver todo <i class="bi bi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center seguros">
            <div class="col-10">
                <div class="row justify-content-center align-items-center seguroscard">
                    <div class="col-12 col-md-6 order-2 order-md-1">
                        <ul>
                            <li>
                                <h2>El seguro que necesitas</h2>
                            </li>
                            <li>-Transporte de mercancías</li>
                            <li>-Daños empresariales</li>
                            <li>-Beneficios para empleados</li>
                            <li>-Gastos médicos</li>
                            <li>-Seguro de vida</li>
                            <li>-Autos y flotillas</li>
                            <li>-Seguros a casa habitación</li>
                            <li>-Maquinaria y equipo</li>
                            <li>-Seguros escolares</li>
                            <li style="margin-top:10px;"><a style="margin-left: 7px;" href="seguros.php">Ver todo <i class="bi bi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 order-1 order-md-2" style="padding: 0px !important;"><img src="images/seguros.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/slickslider.js"></script>
    <script>
        AOS.init({
      duration: 600,
      once: true
    });
    </script>
</body>

</html>