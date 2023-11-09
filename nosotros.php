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
  <title>Nosotros | Datallizer</title>
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
  <?php include 'whatsapp.php'; ?>

 <div class="container-fluid">
  <div class="row justify-content-center nosotrosr">
    <div class="col-12 text-center hnosotros shadow">Sobre <b>nosotros</b></div>
    <div class="col-10 col-md-6 hacemos">
      <br>
      <h3>¿Quiénes somos?</h3>
      <p>Somos una pequeña empresa de desarrollo de software, y por esta característica,
       entendemos muy bien las necesidades que tienen los emprendedores, así como los medianos 
       y pequeños empresarios. <br><br>
      Creemos que cada empresa tiene sus propios desafíos y oportunidades, por eso nos especializamos
       en el desarrollo de software a medida, lo que significa que trabajamos estrechamente con nuestros
        clientes para crear soluciones específicas para sus necesidades únicas. </p>
        <h3 class="mt-5">¿Para quienes trabajamos?</h3>
        <ul>
          <p>•Pequeñas y medianas empresas</p>
          <p>•Emprendedores</p>
        </ul>
        <h3 class="mt-5">Nuestro objetivo es: </h3>
        <p>Ayudar a nuestros clientes a <b>alcanzar sus objetivos organizacionales</b> mediante la 
          <b>creación de soluciones de software efectivas</b>. Nos aseguramos de que nuestros productos
           sean fáciles de usar, altamente eficientes y, lo más importante,<b> generen resultados medibles</b>.</p>
        <h3 class="mt-5">Nuestra Misión:</h3>
        <p>Transformar las organizaciones a través de <b>soluciones tecnológicas innovadoras</b> y de <b>alta calidad</b>
           que impulsen la <b>eficiencia y la productividad</b> de nuestros clientes.</p>
           <br>
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