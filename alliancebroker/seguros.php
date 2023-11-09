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
    <title>Seguros | Alliance Broker</title>
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v18.0" nonce="oXmGK4Sa"></script>

    <?php include 'menu2.php'; ?>
    <?php include 'whatsapp.php'; ?>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center seguroshero">
            <div data-aos="fade-right" class="col-12 col-md-5 order-2 order-md-1 segurosherocol1">
                <h3>Tenemos un seguro para cada una de tus necesidades</h3>
                <p>Protegete a ti, lo tuyo y a los que más quieres</p>
                <a href="#" class="btn btn-sm btn-primary">Conoce más</a>
            </div>
            <div data-aos="zoom-in-down" class="col-12 col-md-7 order-1 order-md-2 segurosherocol2">
                <img src="images/insurance.jpg" alt="">
            </div>
        </div>

        <div class="row align-items-center justify-content-center segurosseleccion">
            <div class="col-12 text-center">
                <h2>CONOCE TODA NUESTRA GAMA DE SEGUROS</h2>
            </div>
            <div class="col-11 text-center mb-3">
                <p>Eilge el que más se adapte a tus necesidades, te protégemos a ti, tu auto, tu casa, tu empresa y a los que más quieres. </p>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/transportemercancias.jpg" alt="">
                    <p>Transporte de mercancías</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/damage.jpg" alt="">
                    <p>Daños empresariales</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/escolar.jpg" alt="">
                    <p>Escolares</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/employees.jpg" alt="">
                    <p>Beneficios para empleados</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/gastosmedicos.jpg" alt="">
                    <p>Gastos médicos</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/car.jpg" alt="">
                    <p>Autos y flotillas</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/personal.jpg" alt="">
                    <p>Seguro de vida</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/casahabitacion.jpg" alt="">
                    <p>Casa habitación</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/machine.jpg" alt="">
                    <p>Maquinaria y equipo</p>
                </div>
            </div>
            <div class="col-11 col-md-2 text-center seguroitem" data-aos="zoom-in">
                <div class="image-container">
                    <img src="images/tree.jpg" alt="">
                    <p>Responsabilidad civil y ecológica</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center segurosasesoria" id="cotizacion">
            <div class="col-11 text-center mb-3">
                <h2>¿Necesitas asesoría de nuestros expertos?</h2>
                <p>Conoce más sobre las opciones y cobertura que tenemos para ti</p>
            </div>
            <div class="col-10 col-md-5">
                <?php include 'message.php'; ?>
                <form action="codeseguros.php" method="POST" class="row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" autocomplete="off" required>
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Apellido paterno" name="apellidop" autocomplete="off" required>
                        <label for="floatingInput">Apellido paterno</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-6">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Apellido materno" name="apellidom" autocomplete="off" required>
                        <label for="floatingInput">Apellido materno</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Teléfono" name="telefono" autocomplete="off" minlength="10" maxlength="10" pattern="[0-9]{1,10}" required>
                        <label for="floatingInput">Teléfono</label>
                    </div>
                    <div class="form-floating mb-3 col-12 col-md-8">
                        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" autocomplete="off" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="servicio" id="floatingSelect" autocomplete="off" required>
                            <option disabled selected>Selecciona una opcion</option>
                            <option value="1">Transporte de mercancía</option>
                            <option value="2">Daño empresarial</option>
                            <option value="3">Responsabilidad civil y ecológica</option>
                            <option value="4">Seguro para empleados</option>
                            <option value="5">Seguro de gastos médicos</option>
                            <option value="6">Seguro de vida</option>
                            <option value="7">Seguro de autos particulares y flotillas</option>
                            <option value="8">Seguro personal</option>
                            <option value="9">Seguros a casa habitación</option>
                            <option value="10">Maquinaria y equipo</option>
                            <option value="11">Seguros escolares</option>
                        </select>
                        <label for="floatingSelect">Seguro que te interesa:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Detalles" id="floatingTextarea2" name="detalles" style="height: 130px" autocomplete="off"></textarea>
                        <label for="floatingTextarea2">Detalles</label>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" name="cotizacion" class="btn btn-outline-light">Cotizar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row align-items-center justify-content-evenly seguroslast">
            <div class="col-11 text-center mb-5">
                <h2>SEGUROS PARA TI</h2>
                <p>Te cuidamos a ti y lo que es importante para ti. Conoce los principales seguros con los que contamos para que nada te detenga. </p>
            </div>
            <div class="col-10 col-md-5 seguroscardlast">
                <img src="images/vehiculo.jpg" alt="">
                <h3 class="mt-3">Seguro vehicular</h3>
                <p>Lorem consectetur ipsum dolor, sit amet consectetur adipisicing elit. Maxime assumenda numquam vero ullam ea, autem culpa necessitatibus consequatur laborum soluta consectetur.</p>
                <a href="#">Contácta a un asesor <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-10 col-md-5 seguroscardlast">
                <img src="images/doctor.jpg" alt="">
                <h3 class="mt-3">Seguro de vida</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, debitis facere consequatur quibusdam totam molestias reprehenderit necessitatibus minima error exercitationem.</p>
                <a href="#">Contácta a un asesor <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="row justify-content-evenly align-items-center aliados" style="padding-top: 20px;">
            <div class="col-11 col-md-7 text-center mb-5">
                <h2>Nuestros aliados</h2>
                <p>Nuestros aliados son la piedra angular de nuestra excelencia, juntos alcanzamos alturas inimaginables, brindando a nuestros clientes lo mejor en calidad, servicio y confianza</p>
            </div>
            <div class="col-11 slickcard mb-5">
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/general.png" alt="Aliado">
                </div>
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/axa.png" alt="Aliado">
                </div>
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/hdi.png" alt="Aliado">
                </div>
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/ana.png" alt="Aliado">
                </div>
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/mapfre.png" alt="Aliado">
                </div>
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/qualitas.png" alt="Aliado">
                </div>
                <div class="slickc text-center pt-4" data-aos="zoom-in">
                    <img src="images/afirme.png" alt="Aliado">
                </div>
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/gmx.png" alt="Aliado">
                </div>
                <div class="slickc text-center" data-aos="zoom-in">
                    <img src="images/tokio.png" alt="Aliado">
                </div>
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