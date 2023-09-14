<?php 
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $detalles = $_POST['detalles'];
	$asunto = 'Cotizacion';
	$mensaje = "Nombre: ".$nombre. " " .$apellido."<br>Email: " .$email."<br>Telefono: ".$telefono."<br>Detalles: ".$detalles."".$_POST['mensaje'];


	if(mail('contacto@datallizer.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>