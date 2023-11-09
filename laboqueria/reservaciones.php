<?php
    require 'dbcon.php';
?>
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
    <link rel="stylesheet" href="css/style.css">
    <title>Reservaciones | La Boqueria Travel</title>
</head>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v15.0" nonce="peXIFa9o"></script>
    
<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-top exhib">
    <div class="col-10 category_list" style="margin-top:20px;">
            <div style="border:1px solid #e7e7e7;" class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Filtrar:
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <a href="#" class="category_item" category="all"><i class="bi bi-app"></i> Todo</a>
                        <a href="#" class="category_item" category="Hoteles"><i class="bi bi-app"></i> Hoteles</a>
                        <a href="#" class="category_item" category="Casas"><i class="bi bi-app"></i> Casas</a>
                        <a href="#" class="category_item" category="Cabañas"><i class="bi bi-app"></i> Cabañas</a>
                        <a href="#" class="category_item" category="Villas"><i class="bi bi-app"></i> Villas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            $query = "SELECT * FROM reservaciones";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $registro){
        ?>
            <div style="margin: 15px !important;" class="col-10 col-md-3 product-item" category="<?= $registro['categoria']; ?>">
			<div class="card">
				<div class="card-image-wrapper">
					<img src="data:image/jpeg;base64,<?php echo  base64_encode($registro['imagen']); ?>" class="card-img-top img-fluid" alt="...">
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $registro['titulo']; ?></h5>
                    <p class="card-text"><b>Destino:</b> <?= $registro['estado']; ?><br>
                    <?= $registro['descripcion']; ?></p>
                    <div class="row justify-content-around align-items-center">
                        <div class="col">
                            <a target="_blank" href="https://wa.me/524495412779?text=Hola,%20quiero%20información%20sobre:%0APaquete:%20<?= $registro['titulo']; ?>%0ADestino:%20<?= $registro['estado']; ?>%0ADetalles:%20<?= $registro['descripcion']; ?>%0ACosto:%20$<?= $registro['costo']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-whatsapp"></i> Información</a>
                        </div>
                        <div class="col-5">
                            <p style="color:#cc3b3b;font-size:20px;" class="card-text">$<?= $registro['costo']; ?><span style="font-size:12px;">MXN</span></p>
                        </div>
                    </div>
				</div>
			</div>
		</div>

        <?php
            }
            }else{
                echo '<div class="col-12 contbody text-center"><h5> No se encontraron reservaciones por el momento </h5></div>';
            }
        ?>
                         
    </div>
</div>

<?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   
    <script src="js/slickslider.js"></script>
    <script src="js/filtros.js"></script>
</body>
</html>