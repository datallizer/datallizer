

<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
	$message = $_POST['message'];

$para = 'contacto@pypconstructora.com.mx';
$titulo = "Cotizacion de $name";
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $name\n Telefono: $phone\n E-Mail: $email\n Mensaje:\n $message";

if ($_POST['submit']) {

    if (mail($para, $titulo, $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
        header("Location: index.php#contacto");
    }
}
 ?>

<button><a href="index.php">Regresar al inicio</a></button>

