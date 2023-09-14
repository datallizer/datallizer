<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico" />
  <title>Bolsa de trabajo | Datallizer</title>
</head>

<body class="reclutamientobg">

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
    <div class="row justify-content-center align-items-center reclutamientopage">

    <div class="col-11 col-md-6 formreclutamiento">
        <form action="codereclutamiento.php" method="post">
        <div class="row justify-content-center-align-items-center">
            <div class="col-12 text-center"><h2>FORMA PARTE DE DATALLIZER</h2></div>

            <div class="col-12 col-md-6">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre (s)" required autocomplete="off">
            </div>

            <div class="col-12 col-md-6">
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellido (s)" required autocomplete="off">
            </div>

            <div class="col-12 col-md-12">
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required autocomplete="off">
            </div>

            <div class="col-12 col-md-12">
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required autocomplete="off">
            </div>

            <div class="col-12 col-md-8">
            <select class="form-select" id="estado" name="estado" required autocomplete="off">
            <option selected disabled>Estado donde te encuentras localizado</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California Norte">Baja California Norte</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Durango">Durango</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Estado de Mexico">Estado de México</option>
            <option value="Michoacan">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo Leon">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Queretaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosi">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatan">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
            </select>
            </div>

            <div class="col-12 col-md-4">
            <select class="form-select" id="nivelingles" name="nivelingles" required autocomplete="off">
            <option selected disabled>Nivel de ingles</option>
            <option value="Nada">Nada</option>
            <option value="Basico">Básico</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Avanzado">Avanzado</option>
            </select>
            </div>

            <div class="col-12 col-md-4">
            <select class="form-select" id="nivelestudios" name="nivelestudios" required autocomplete="off">
            <option selected disabled>Nivel de estudios</option>
            <option value="Nada">Carrera técnica</option>
            <option value="Basico">Liceciatura</option>
            <option value="Intermedio">Ingeniería</option>
            <option value="Avanzado">Posgrado</option>
            </select>
            </div>

            <div class="col-12 col-md-8">
                <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Nombre de su carrera" required autocomplete="off">
            </div>

            <div style="margin-left:15px" class="form-check lefta">
                <input style="width:15px;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required autocomplete="off">
                <label class="form-check-label" for="flexCheckDefault">
                    Acepto los términos, condiciones y politicas.
                </label>
            </div>

            <div class="col-12 text-center">
                <button type="submit" name="save" class="btn btn-primary">Enviar</button>
            </div>

        </div>
        </form>
    </div>

    </div>

    <div class="row justify-content-evenly bolsarow">
    <div class="col-11 col-md-3 bolsacard">
      <h3>DESARROLLADOR (A) WEB</h3>
      <p><b>Forma de trabajo:</b> Por proyecto</p>
      <p><b>Conocimientos requeridos:</b> PHP, javascript, html, css, mysql, json, git.</p>
      <p><b>Conocimientos opcionales:</b> Angular, SQL, C#.</p>
      <p><b>Información adicional:</b> Forma parte de este proceso de selección, postúlate a través de este medio y nosotros nos ponemos en contacto contigo.</p>
      <a href="https://api.whatsapp.com/send?phone=14088277605&text=Me%20interesa%20saber%20m%C3%A1s%20informacion%20sobre%20la%20vacante%20de%20desarrollador%20de%20software" class="btn btn-sm btn-outline-dark">Más información</a>
    </div>

    <div class="col-11 col-md-3 bolsacard">
      <h3>DISEÑADOR GRÁFICO (A) </h3>
      <p><b>Forma de trabajo:</b> Por proyecto</p>
      <p><b>Conocimientos requeridos:</b> Adobe illustrator, Photoshop o software especializado de diseño</p>
      <p><b>Información adicional:</b> Forma parte de este proceso de selección, postúlate a través de este medio y nosotros nos ponemos en contacto contigo.</p>
      <a href="https://api.whatsapp.com/send?phone=14088277605&text=Me%20interesa%20saber%20m%C3%A1s%20informacion%20sobre%20la%20vacante%20de%20diseñador%20gráfico" class="btn btn-sm btn-outline-dark">Más información</a>
    </div>

    <div class="col-11 col-md-3 bolsacard">
      <h3>BUSINESS MANAGER</h3>
      <p><b>Forma de trabajo:</b> Por proyecto</p>
      <p><b>Conocimientos requeridos:</b> Mercadotecnía, marketing digital,google workspace, experiencia en ventas.</p>
      <p><b>Información adicional:</b> Forma parte de este proceso de selección, postúlate a través de este medio y nosotros nos ponemos en contacto contigo.</p>
      <a href="https://api.whatsapp.com/send?phone=14088277605&text=Me%20interesa%20saber%20m%C3%A1s%20informacion%20sobre%20la%20vacante%20de%20business%20manager" class="btn btn-sm btn-outline-dark">Más información</a>
    </div>

    </div>
  </div>

  <?php include 'footer.php'; ?>
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