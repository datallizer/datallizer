<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mapa.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <meta name="description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta name="keywords" content="levana, vida levana, predios, lotes, fraccionamiento, desarrollo, inmobiliario, Aguascalientes, terrenos">
    <meta name="author" content="Vida Levana">
    <meta property="og:title" content="Vía Levana | Levana">
    <meta property="og:description" content="El mejor desarrollo inmobiliario en Aguascalientes. Bienestar, comunidad y comodidad para nuestros residentes.">
    <meta property="og:image" content="images/ogportada.jpg">
    <meta property="og:url" content="https://vidalevana.com">
    <title>Vía Levana | Levana</title>
</head>
<body>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat fb-root" class="fb-customerchat">
    </div>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v15.0" nonce="e1wImMaQ"></script>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "107987915055526");
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

    <div id="carouselExampleIndicators" class="carousel slide carrouselhero" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner" style="background-color:#436179;">

            <div class="carousel-item active" data-bs-interval="3000">
                <img src="images/via5.jpg" class="d-block w-100" alt="acceso">
                <div class="carousel-caption d-md-block herovideocaption" data-aos="fade-right">
                    <h4>CONDOMINIO</h4>
                    <h5>VÍA LEVANA</h5>
                    <a href="index.php" class="btn btn-primary mt-2">CONOCE PASEOS LEVANA</a>
                </div>
                <div class="half-black-background2"></div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/via7.jpg" class="d-block w-100" alt="acceso">
                <div class="carousel-caption d-md-block">
                    <h5>CASA CLUB</h5>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="images/via11.jpg" class="d-block w-100" alt="terraza">
                <div class="carousel-caption d-md-block">
                    <h5>FOGATERO</h5>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="images/via8.jpg" class="d-block w-100" alt="alberca">
                <div class="carousel-caption d-md-block">
                    <h5>ALBERCA</h5>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid">

        <div class="row justify-content-center align-items-center desarrollovia">
            <div class="col-11 col-md-4" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                <h2>Bienestar, comunidad y comodidad para nuestros residentes.</h2>
                <p></p>
            </div>

            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <img src="images/via6.jpg" alt="">
            </div>
        </div>

        <div class="row justify-content-center align-items-center lotesvia">
            <div class="col-11 col-md-5 order-2 order-md-1">
                <?php include 'oriente.php'; ?>
            </div>
            <div class="col-11 col-md-5 text-center order-1 order-md-2" data-aos="fade-down" data-aos-anchor-placement="bottom-bottom">
                <h4>VÍA LEVANA</h4>
                <h2>PREDIOS RESIDENCIALES</h2>
                <p>Interactua con nuestro mapa digital y conoce las especificaciones de los predios que tenemos disponibles</p>
            </div>

        </div>

        <div class="row justify-content-center align-items-center galeriavia">
            <div class="col-10 col-md-9 text-center mb-3" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom">
                <h2>DESCUBRE TU NUEVO HOGAR</h2>
                <p>Cuando nos referimos a una ubicación privilegiada, no solo es estar en la mejor zona de la ciudad,es contar con rápida conexión a avenidas y tener lugares de interés a pocos metros</p>
            </div>
            <div class="col-10 col-md-11">
                <div class="row justify-content-center">
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via4.jpg"><img src="images/via4.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via5.jpg"><img src="images/via5.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-12 col-md-3">
                        <a data-fslightbox="gallery" href="images/via12.jpg"><img src="images/via12.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via7.jpg"><img src="images/via7.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via8.jpg"><img src="images/via8.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via9.jpg"><img src="images/via9.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via10.jpg"><img src="images/via10.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via11.jpg"><img src="images/via11.jpg" loading="lazy"></a>
                    </div>
                    <div data-aos="zoom-in-up" class="galerimg col-6 col-md-3">
                        <a data-fslightbox="gallery" href="images/via6.jpg"><img src="images/via6.jpg" loading="lazy"></a>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,128L80,117.3C160,107,320,85,480,90.7C640,96,800,128,960,144C1120,160,1280,160,1360,160L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>

        <?php include('footer.php'); ?>

        <div class="row derechos justify-content-center" style="background-color:#000000;color:#fff;">
            <div class="col-12 text-center p-3" style="font-size:12px">
                Derechos reservados | Powered by <a target="_blank" href="https://www.datallizer.com" style="text-decoration: none;">Datallizer</a>
            </div>
        </div>
    </div>
    <div class="floating-button">
        <a href="index.php">Conoce <br>Paseos Levana</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/js/lotes.js"></script>
    <script src="js/js.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        const myModal = new bootstrap.Modal(document.getElementById("mapaModal"), {});
        const ventas = [];
        $(function() {
            /* 
            //lotes vendidos
            $.ajax({
                      url : "assets/lotesvendidos.txt",
                      dataType: "text",
                      success : function (data) {
                          // $(".text").html(data);
                          console.log(data),
                      }
                  });
                  */
            console.log("JQuery");
            let obj = new Object();
            let _curr; // lote actual
            // [0] click en lote (svg)
            $("[id*='lote_']").on('click', function(e) {
                e.preventDefault();
                let num = $(this).attr('id').split("_");
                _curr = parseInt(num[1]) || (Math.floor(Math.random() * 10));
                // $('#mapaModalLabel').text("Hola mundo " + _curr); // MODAL TITLE
                mostrarLote(_curr);
                $('.lotes-info').show();
                $('.amenidades-info').hide();
                $('.modal-dialog').removeClass('modal-fullscreen-sm-down-bye');
                // open Modal
                myModal.show();
            });
            // [0] click en lote (svg)
            $("svg .jardin").on('click', function(e) {
                e.preventDefault();
                let who = $(this).attr('id');
                // _curr = parseInt(num[1]) || (Math.floor(Math.random()*10));
                // $('#mapaModalLabel').text("Hola mundo " + _curr); // MODAL TITLE
                renderJardin(who); // alberca
                // console.log(who);
                $('.lotes-info').hide();
                $('.amenidades-info').show(); // open Modal
                $('.modal-dialog').addClass('modal-fullscreen-sm-down-bye');
                myModal.show();
            });
            // [00] click en lotePrev y loteNext
            $("#lotePrev, #loteNext").on('click', function(e) {
                e.preventDefault();
                // console.log( $(this).attr('id'), lotes.length, _curr );
                if ($(this).attr('id') == "loteNext") {
                    _curr = (_curr == 117) ? 117 : _curr + 1;
                } else {
                    _curr = (_curr == 1) ? 1 : _curr - 1;
                }
                mostrarLote(_curr);
            });
            //
            function mostrarLote(_curr) {
                obj = lotes[_curr - 1];
                if (obj != undefined) {
                    let _class = obj.cls;
                    $("#lvnId").text(obj.id);
                    $("#lvnMzn").text(obj.mzn);
                    $("#lvnCateg").text(obj.categ);
                    $("#lvnMt").text(obj.mt);
                    $('#lvnCategClr').attr('class', '').addClass(_class);
                    $("#estatus").text(obj.estatus);
                    $('#minimap').attr('class', '').addClass('mmap_' + obj.id);
                    if (obj.id < 118) {
                        $('#minimap').addClass('mmap-show');
                    }
                    // console.log("LOTE_ = ", obj, '_class = '+_class, "_curr = "+_curr);
                }

            }

            function renderJardin(who) {
                // IMG render renderAmenidad assets/img/amenidades [jpg]
                $("#renderAmenidad").attr("src", "assets/img/amenidades/" + who + ".jpg");
                let _txt = (who != "alberca") ? ((who == "terraza") ? "terraza 1" : "terraza 2") : "alberca";
                _txt = (who == "petpark" || who == "juegosyfogatero") ? ((who == "petpark") ? "pet park" : "juegos y fogatero") : _txt;
                $("#wAmenidad").text(_txt);
            }

        }); // JQuery	

        /* ZOOM */
        // Init: Fx arrastrar mouse
        let moving;

        function mouseDown(e) { //	mouse click para empezar a arrastrar
            moving = true
        }

        function drag(e) { //	arrastrando obj
            if (moving === true) {
                //	1. Obtener valor inicial de viewBox que originalmente Str, split en Arr para facilitar cálculos posteriores
                let startViewBox = svg.getAttribute('viewBox').split(' ').map(n => parseFloat(n));
                //	2. Obtener valor de coord del cliente en viewBox actual del mouse
                let startClient = {
                    x: e.clientX,
                    y: e.clientY
                };
                //	3. Calcular valor de coordenada SVG correspondiente
                let newSVGPoint = svg.createSVGPoint();
                let CTM = svg.getScreenCTM();
                newSVGPoint.x = startClient.x;
                newSVGPoint.y = startClient.y;
                let startSVGPoint = newSVGPoint.matrixTransform(CTM.inverse());
                //	4. Calcular coords de cliente de ViewBox donde está el mouse después de arrastrar
                let moveToClient = {
                    x: e.clientX + e.movementX, //	movement obtiene desplazamiento del mouse
                    y: e.clientY + e.movementY
                }
                //	5. Calcular valor de coordenada SVG correspondiente
                newSVGPoint = svg.createSVGPoint();
                CTM = svg.getScreenCTM();
                newSVGPoint.x = moveToClient.x;
                newSVGPoint.y = moveToClient.y;
                let moveToSVGPoint = newSVGPoint.matrixTransform(CTM.inverse());
                //	6. Calcular desplazamiento
                let delta = {
                    dx: startSVGPoint.x - moveToSVGPoint.x,
                    dy: startSVGPoint.y - moveToSVGPoint.y
                };
                //	7. establecer nuevo valor de viewBox
                let xRange, yRange
                if (Math.abs(startViewBox[0] + delta.dx) > svg.getAttribute('width')) {
                    if (startViewBox[0] + delta.dx > 0) {
                        xRange = svg.getAttribute('width')
                    } else {
                        xRange = -svg.getAttribute('width')
                    }
                } else {
                    xRange = startViewBox[0] + delta.dx
                }
                if (Math.abs(startViewBox[1] + delta.dy) > svg.getAttribute('height')) {
                    if (startViewBox[1] + delta.dy > 0) {
                        yRange = svg.getAttribute('height')
                    } else {
                        yRange = -svg.getAttribute('height')
                    }
                } else {
                    yRange = startViewBox[1] + delta.dy
                }
                let moveToViewBox = `${xRange} ${yRange} ${startViewBox[2]} ${startViewBox[3]}`
                svg.setAttribute('viewBox', moveToViewBox)
            }
        }
        //	Acciones de clic (arrastre)
        function mouseUp() {
            moving = false
        } //	Fin, acc de arrastrar

        // Init: Efecto Zoom
        function zoom(e, zoomLvl, zoom) {
            zoom = (typeof zoom !== 'undefined') ? zoom : 'wheel';
            //	1. Obtener viewBox inicial。
            let startViewBox = svg.getAttribute('viewBox').split(' ').map(n => parseFloat(n))
            //	2. Obtener coord del cliente viewPort de posicion zoom del mouse y usar CTM para obtener coords del SVG correspondientes。
            //	2.1 Obtener pos del mouse para realizar zoom
            let startClient = {
                x: e.clientX,
                y: e.clientY
            }
            //	2.2 Convertir a puntos de coords SVG en sistems de coordenadas SVG
            let newSVGPoint = svg.createSVGPoint()
            let CTM = svg.getScreenCTM()
            newSVGPoint.x = startClient.x
            newSVGPoint.y = startClient.y
            let startSVGPoint = newSVGPoint.matrixTransform(CTM.inverse())
            //	3.Escala, si se quiere duplicar el tamaño original
            //	3.1 Establecer relación del zoom
            let r
            let zoomWidth
            let zoomHeight
            if (e.deltaY > 0 || zoom == 'zoomOut') { // encoger, disminuir
                r = 1.5
                if (startViewBox[2] * r > svg.getAttribute('width')) {
                    zoomWidth = svg.getAttribute('width')
                    zoomHeight = svg.getAttribute('height')
                } else {
                    zoomWidth = startViewBox[2] * r
                    zoomHeight = startViewBox[3] * r
                }
            } else if (e.deltaY < 0 || zoom == 'zoomIn') { // poner, aumentar
                r = (2 / 3)
                if (startViewBox[2] * r < svg.getAttribute('width') * Math.pow(r, zoomLvl)) {
                    zoomWidth = svg.getAttribute('width') * Math.pow(r, zoomLvl)
                    zoomHeight = svg.getAttribute('height') * Math.pow(r, zoomLvl)
                } else {
                    zoomWidth = startViewBox[2] * r
                    zoomHeight = startViewBox[3] * r
                }
            }
            //	3.2 Hacer Zoom
            svg.setAttribute('viewBox', `${startViewBox[0]} ${startViewBox[1]} ${zoomWidth} ${zoomHeight}`)
            //	4.Use nuevo CTM para convertir las coords del cliente viewPort de la posición de zoom del mouse en coordenadas SVG correspondientes.
            CTM = svg.getScreenCTM()
            let moveToSVGPoint = newSVGPoint.matrixTransform(CTM.inverse())

            //	5.Obtener desplazamiento del punto durante el zoom `(svgX0 - svgX1)`。
            let delta = {
                dx: startSVGPoint.x - moveToSVGPoint.x,
                dy: startSVGPoint.y - moveToSVGPoint.y
            }

            //	6.Establecer final viewBox2 
            let middleViewBox = svg.getAttribute('viewBox').split(' ').map(n => parseFloat(n))
            let moveBackViewBox = `${middleViewBox[0] + delta.dx} ${middleViewBox[1] + delta.dy} ${middleViewBox[2]} ${middleViewBox[3]}`
            svg.setAttribute('viewBox', moveBackViewBox)

            // test
            // let CTM2 = svg.getBBox();
            // let CTM3 = svg.DOMMatrixReadOnly();
            // console.log(CTM, zoomWidth, zoomHeight, '|||', CTM2 , '|||', r);
        } //	Fin: fx Zoom del mouse

        // Nw (Moviendo mapa con flechas)
        function moveMap(zoomLvl, moveArr) {
            console.log('fn::moveMap', zoomLvl, moveArr)
            // const { scale, x, y } = getTransformParameters(svg);
            let CTM = svg.getScreenCTM();
            let CTM2 = svg.getAttribute('viewBox').split(' ').map(n => parseFloat(n));
            let svgWidth = svg.getAttribute('width'),
                svgHeight = svg.getAttribute('height');
            let dx = 0,
                dy = 0;
            // Mover mapa
            zoomLvl = CTM.a; // escala actual
            let e_x = CTM2[0],
                f_y = CTM2[1];
            let nwVBox;
            let factor = 20
            switch (moveArr) {
                case "left":
                    dx = -(factor);
                    break;
                case "right":
                    dx = factor;
                    break;
                case "up":
                    dy = -(factor);
                    break;
                case "down":
                    dy = factor;
                    break;
            }
            e_x = (e_x <= 0) ? 0 : (e_x + (dx * zoomLvl));
            f_y = (f_y <= 0) ? 0 : (f_y + (dy * zoomLvl));
            nwVBox = [e_x, f_y, CTM2[2], CTM2[3]];
            // svg.style.transform = getTransformString(scale, x + dx, y + dy); // getTransformString(scale, x + dx, y + dy), 
            //console.log(CTM2, svgWidth, svgHeight, zoomLvl);
            // console.log("MAPA : ", nwVBox.join(" "));
            // console.log("MAPA Y: ", f_y);
            // if(zoomLvl > 1)
            $(svg).attr('viewBox', nwVBox.join(" "));
            // else $(svg).attr('viewBox', '0 0 765 520');
        }

        const svg = document.getElementById('svgmap')
        const zoomIn = document.getElementById('zoomIn')
        const zoomOut = document.getElementById('zoomOut')
        // Nw
        const moveLeft = document.getElementById('moveLeft')
        const moveRight = document.getElementById('moveRight')
        const moveUp = document.getElementById('moveUp')
        const moveDown = document.getElementById('moveDown')

        let zoomLvl = 2
        //	Eventos
        svg.addEventListener('mousedown', mouseDown, false)
        //svg.addEventListener('touchStart', mouseDown, false)
        svg.addEventListener('mousemove', drag, false)
        svg.addEventListener('mouseup', mouseUp, false)
        //	Evento Zoom
        svg.addEventListener('wheel', function(e) {
            zoom(e, zoomLvl, zoom)
        }, false)
        zoomIn.addEventListener('click', function(e) {
            zoom(e, zoomLvl, 'zoomIn')
        }, false)
        zoomOut.addEventListener('click', function(e) {
            zoom(e, zoomLvl, 'zoomOut')
        }, false)
        // Nw
        moveLeft.addEventListener('click', function(e) {
            moveMap(zoomLvl, 'left')
        }, false)
        moveRight.addEventListener('click', function(e) {
            moveMap(zoomLvl, 'right')
        }, false)
        moveUp.addEventListener('click', function(e) {
            moveMap(zoomLvl, 'up')
        }, false)
        moveDown.addEventListener('click', function(e) {
            moveMap(zoomLvl, 'down')
        }, false)
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 600,
            once: true
        });
    </script>
    <script>
        // Función para mostrar u ocultar el botón flotante al hacer scroll
        window.addEventListener('scroll', function() {
            var floatingButton = document.querySelector('.floating-button');
            if (window.scrollY > 200) {
                floatingButton.style.opacity = '1';
            } else {
                floatingButton.style.opacity = '0';
            }
        });
    </script>



</body>

</html>