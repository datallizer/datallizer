<?php
require '../dbcon.php';
$username = $_SESSION['username'];
?>
<link rel="stylesheet" href="../css/sidenav.css">
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bi bi-list' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a style="text-decoration: none;" href="#" class="nav_logo">
                    <i class='bi bi-gear nav_logo-icon'></i>
                    <span class="nav_logo-name">DATALLIZER</span>
                </a>
                <div class="nav_list">
                    <a href="dashboard.php" class="nav_link">
                        <i class='bi bi-square-half nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <?php
                    // Verificar si el rol almacenado en la sesión es 1
                    if (isset($_SESSION['rol_id']) && $_SESSION['rol_id'] == 1) {
                        echo '<a href="usuarios.php" class="nav_link"> 
                                    <i class="bi bi-person nav_icon"></i> <span class="nav_name">Usuarios</span> 
                                </a> ';
                    }
                    ?>

                    <a href="cotizaciones.php" class="nav_link">
                        <i class='bi bi-currency-dollar nav_icon'></i>
                        <span class="nav_name">Cotizaciones</span>
                    </a>
                    <a href="newslatter.php" class="nav_link">
                        <i class='bi bi-newspaper nav_icon'></i>
                        <span class="nav_name">Newslatter</span>
                    </a>
                    <a href="reclutamiento.php" class="nav_link">
                        <i class='bi bi bi-folder-check nav_icon'></i>
                        <span class="nav_name">Reclutamiento</span>
                    </a>
                    <!-- <a href="estadisticas.php" class="nav_link"> 
                    <i class='bi bi-bar-chart-line nav_icon'></i> <span class="nav_name">Estadisticas</span> 
                </a>  -->
                    <a href="finanzas.php" class="nav_link">
                        <i class='bi bi bi-folder-check nav_icon'></i>
                        <span class="nav_name">Finanzas</span>
                    </a>
                    <a href="dashboardnoticias.php" class="nav_link">
                        <i class='bi bi-newspaper nav_icon'></i>
                        <span class="nav_name">Noticias</span>
                    </a>
                </div>
            </div>
            <a style="text-decoration: none;" href="../logout.php" class="nav_link">
                <i class='bi bi-box-arrow-left nav_icon'></i>
                <span class="nav_name">Salir</span>
            </a>
        </nav>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/sidenav.js"></script>