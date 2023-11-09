<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slickslider.css">
    <title>Litigio | Alliance Broker</title>
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="oXmGK4Sa"></script>

    <?php include 'menu2.php'; ?>
    <?php include 'whatsapp.php'; ?>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center litigiohero">
            
            <div class="col-12 col-md-7 litigioherocol2" data-aos="zoom-in-down">
                <img src="images/abogado.jpg" alt="">
            </div>
            <div class="col-12 col-md-5 litigioherocol1" data-aos="fade-right">
                <h3>ASESORÍA LEGAL DE LA MANO DE LOS MEJORES ABOGADOS</h3>
                <p>Te protegemos a ti, lo tuyo y a los que más quieres</p>
                <a href="#" class="btn btn-sm btn-primary">Conoce más</a>
            </div>
        </div>

        <div class="row align-items-center justify-content-center segurosseleccion">
            <div class="col-12 text-center mb-3">
                <h2>CONOCE TODA NUESTRA GAMA DE SEGUROS</h2>
                <p>Eilge el que más se adapte a tus necesidades, te protégemos a ti, tu auto, tu casa, tu empresa y a los que más quieres. </p>
            </div>
            <div class="col-11 col-md-3 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/administrativo.jpg" alt="">
                    <p>Administrativo</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/jail.jpg" alt="">
                    <p>Penal</p>
                </div>
            </div>
            <div class="col-11 col-md-3 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/fiscal.jpg" alt="">
                    <p>Fiscal</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/laboral.jpg" alt="">
                    <p>Laboral</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/procesal.jpg" alt="">
                    <p>Procesal</p>
                </div>
            </div>
            <div class="col-11 col-md-3 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/civil.jpg" alt="">
                    <p>Civil</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/mercantil.jpg" alt="">
                    <p>Mercantil</p>
                </div>
            </div>
            <div class="col-11 col-md-3 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/constitucion.jpg" alt="">
                    <p>Constitucional</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center segurosasesoria">
            <div class="col-11 text-center mb-3">
                <h2>¿Necesitas asesoría de nuestros expertos?</h2>
                <p>Conoce más sobre las opciones y cobertura que tenemos para ti</p>
            </div>
            <div class="col-10 col-md-5">
                <form action="codeseguros.php" method="post" class="row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" autocomplete="off" required>
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" autocomplete="off" required>
                        <label for="floatingInput">Apellido paterno</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" autocomplete="off" required>
                        <label for="floatingInput">Apellido materno</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" autocomplete="off" minlength="10" maxlength="10" pattern="[0-9]{1,10}" required>
                        <label for="floatingInput">Teléfono</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-8">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" autocomplete="off" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option disabled selected>Selecciona una opcion</option>
                            <option value="Null">No conozco la opción</option>
                            <option value="Null">Acreditación de propiedad</option>
                            <option value="Null">Acreditación de hechos</option>
                            <option value="Null">Adopción </option>
                            <option value="Null">Pensión alimenticia</option>
                            <option value="Null">Convenios</option>
                            <option value="Null">Autorización para sacar menores del país</option>
                            <option value="Null">Cancelación de gravamen</option>
                            <option value="Null">Cancelación de crédito</option>
                            <option value="Null">Cheque</option>
                            <option value="Null">Consignación</option>
                            <option value="Null">Herencias</option>
                            <option value="Null">Convocatoria a asamblea</option>
                            <option value="Null">Copropiedad</option>
                            <option value="Null">Cumplimiento de contratos</option>
                            <option value="Null">Daño moral</option>
                            <option value="Null">Testamentos</option>
                            <option value="Null">Patria potestad y custodia</option>
                            <option value="Null">Deshausio / Desalojo</option>
                            <option value="Null">Designación de beneficiarios por muerte de trabajador</option>
                            <option value="Null">Determinación de antigüedad</option>
                            <option value="Null">Disolución y liquidación de sociedades</option>
                            <option value="Null">Divorcio</option>
                            <option value="Null">Cobranza de una deuda</option>
                            <option value="Null">Fraude</option>
                            <option value="Null">Hipotecario</option>
                            <option value="Null">Indemnización</option>
                            <option value="Null">Modificación, rectificación o nulificación del acta del registro civil</option>
                            <option value="Null">Nulidad de contrato </option>
                            <option value="Null">Orden de protección</option>
                            <option value="Null">Pagare</option>
                            <option value="Null">Pago de daños y perjuicios</option>
                            <option value="Null">Pago de honorarios profesionales</option>
                            <option value="Null">Perdida de factura de vehículo</option>
                            <option value="Null">Otros</option>
                        </select>
                        <label for="floatingSelect">Seguro que te interesa:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Detalles</label>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" name="save" class="btn btn-dark">Cotizar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row align-items-center justify-content-evenly seguroslast">
            <div class="col-11 text-center mb-5">
                <h2>PRINCIPALES SERVICIOS</h2>
                <p>Te cuidamos a ti y lo que es importante para ti. Conoce los principales seguros con los que contamos para que nada te detenga. </p>
            </div>
            <div class="col-10 col-md-5 seguroscardlast">
                <img src="images/divorcio.jpg" alt="">
                <h3 class="mt-3">ASESORIA FAMILIAR</h3>
                <p>Lorem consectetur ipsum dolor, sit amet consectetur adipisicing elit. Maxime assumenda numquam vero ullam ea, autem culpa necessitatibus consequatur laborum soluta consectetur.</p>
                <a href="#">Contácta a un asesor <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-10 col-md-5 seguroscardlast">
                <img src="images/asesoria.jpg" alt="">
                <h3 class="mt-3">ASESORIA MERCANTIL</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, debitis facere consequatur quibusdam totam molestias reprehenderit necessitatibus minima error exercitationem.</p>
                <a href="#">Contácta a un asesor <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/slickslider.js"></script>
</body>

</html>