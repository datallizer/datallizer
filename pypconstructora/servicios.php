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



<div class="">
    <div class="container">
        <div class="row serviciosbg justify-content-center align-items-center">
            <div class="col-12 text-center"><h2 style="color: #fff; text-shadow:1px 1px 1px #000;">NUESTROS SERVICIOS</h2></div>
            <div class="col-10 col-md-5 serviclist">
                <ul>
                    <li>
                      <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Construcción
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2016/09/07/10/25/crash-1651305_960_720.jpg" alt=""></div>
    </div>
  </div>
</li>
                    <li>
        <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Diseño de interiores
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2017/08/27/10/16/interior-2685521_960_720.jpg" alt=""></div>
    </div>
  </div></li>
                    <li>
                    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Remodelación
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2013/06/14/08/00/bricks-139287_960_720.jpg" alt=""></div>
    </div>
  </div>
                    </li>
                    <li>
                    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Asesoría
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2016/11/29/15/21/hand-1870179_960_720.jpg" alt=""></div>
    </div>
  </div>
                    </li>
                </ul>
            </div>

            <div class="col-10 col-md-5 serviclist">
                <ul>
                    <li>
                    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Restauración
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2014/07/15/16/18/hellas-394092_960_720.jpg" alt=""></div>
    </div>
  </div>
                    </li>
                    <li>
                    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Mantenimiento preventivo
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2022/10/09/07/23/waterproofing-7508369_960_720.jpg" alt=""></div>
    </div>
  </div>
                    </li>
                    <li>
                    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Conservación de instalaciones
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2014/02/03/11/15/construction-257326_960_720.jpg" alt=""></div>
    </div>
  </div>
                    </li>
                    <li>
                    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
      <i class="bi bi-caret-right-fill"></i>Ingeniería estructural
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><img src="https://cdn.pixabay.com/photo/2017/12/23/20/10/industry-3035907_960_720.jpg" alt=""></div>
    </div>
  </div>
                    </li>
                </ul>
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