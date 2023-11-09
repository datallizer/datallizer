<?php

    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
    <title>Casas en venta</title>
</head>
<body>

<?php include('menu.php'); ?>

<div class="">    
    <div class="container">

        <div style="min-height: 90vh; margin-bottom:30px !important;" class="row justify-content-evenly align-content-center contbody">
            
                    <div style="margin: 80px 0px 0px 0px;" class="col-12 contbody text-center">
                        <h3>CASAS EN VENTA
                        </h3>
                    </div>

                    <div class="col-11 category_list">
                        <p>Filtrado:</p>
                        <a href="#" class="category_item" category="all">TODO</a>
                        <a href="#" class="category_item" category="casa">CASA</a>
                        <a href="#" class="category_item" category="terreno">TERRENO</a>
                    </div>

                                <?php 
                                    $query = "SELECT * FROM casa";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $mkt)
                                        {
                                            ?>

        




		<div style="margin: 15px !important;" class="col-10 col-md-3 product-item" category="<?= $mkt['tipo']; ?>">
			<div class="card">
				<div class="card-image-wrapper">
					<img src="data:image/jpeg;base64,<?php echo  base64_encode($mkt['imagen']); ?>" class="card-img-top img-fluid" alt="...">
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $mkt['titulo']; ?></h5>
					<p class="card-text"><?= $mkt['descripcion']; ?><br>
            $<?= $mkt['costo']; ?></p>
					<a target="_blank" href="https://wa.me/524497692022?text=Hola,%20quiero%20informacion%20sobre:%0A<?= $mkt['titulo']; ?>%0A<?= $mkt['descripcion']; ?>%0A$<?= $mkt['costo']; ?>" class="btn btn-dark"><i class="bi bi-whatsapp"></i> Información</a>
                    <!-- Button trigger modal -->


				</div>
			</div>
		</div>


       
                                <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<div class="col-12 contbody text-center"><h5> No Record Found </h5></div>';
                                       
                                    }
                                ?>
                                
                          

               
        </div>
    </div>
    </div>

    <?php include('footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>