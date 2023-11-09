<?php

$con = mysqli_connect("localhost","root","","pypconstructora");
//$con = mysqli_connect("pypconstructora.com.mx","pypconstructorac","F&H53Eb19k&&","pypconstructorac_casas");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>