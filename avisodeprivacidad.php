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
  <title>Aviso de privacidad | Datallizer</title>
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
        xfbml: true,
        version: 'v15.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <?php include 'menu.php'; ?>
  <?php include 'whatsapp.php'; ?>

  <div class="container-fluid avisodeprivacidadbg">
    <div class="row justify-content-evenly align-items-center avisorow">
      <div class="col-11 text-center mt-5">
        <h2>AVISO DE PRIVACIDAD</h2>
      </div>
      <div class="col-11 col-md-8 mt-4">
        <pre>
En Datallizer, reconocemos la importancia de la privacidad y la seguridad de tus datos personales. Este aviso de privacidad tiene el propósito de informarte sobre cómo recopilamos, utilizamos y protegemos la información que obtengamos de ti y de tus clientes, así como de los clientes de tus clientes, cuando utilices nuestros servicios y productos.

<b>Datos que Recopilamos</b>

Datallizer almacena información que puede incluir, pero no se limita a:

- Nombres
- Apellidos
- Teléfono fijo
- Teléfono móvil
- Correo electrónico
- Lugar de origen
- CURP (Clave Única de Registro de Población)
- Cookies
- Contraseñas
- Otros datos relacionados con los servicios y productos que proporcionamos.

<b>Uso de tus Datos</b>

Tus datos y la información de tus clientes y los clientes de tus clientes se recopilan para los siguientes propósitos:

1. Proporcionar y mantener nuestros servicios y productos.
2. Verificar tu identidad y la de tus clientes para la prestación de servicios.
3. Comunicarnos contigo y notificarte sobre actualizaciones y cambios en nuestros servicios.
4. Mejorar y personalizar tu experiencia con nuestros servicios y productos.
5. Cumplir con obligaciones legales y regulatorias.

<b>Almacenamiento y Seguridad de Datos</b>

Datallizer utiliza servicios de terceros para el alojamiento de nuestros servidores principales, pero no compartimos información y bases de datos con terceros para ningún fin, excepto el uso legítimo de los clientes de Datallizer, quienes obtuvieron la información.

Tus datos y la información de tus clientes se almacenan de forma segura y se aplican medidas técnicas y organizativas para protegerlos contra el acceso no autorizado y el uso indebido.

<b>Contacto</b>

Si tienes alguna pregunta o inquietud relacionada con tus datos personales o la privacidad, no dudes en contactarnos:

Ubicación: Aguascalientes
Correo de contacto: contacto@datallizer.com

<b>Cambios en el Aviso de Privacidad</b>

Datallizer se reserva el derecho de actualizar y modificar este aviso de privacidad en cualquier momento. Te recomendamos revisar este aviso de privacidad periódicamente para estar al tanto de cualquier cambio.

Fecha de última actualización: 24/10/2023
</pre>
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