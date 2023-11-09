<?php 
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$email = $_POST['email'];
    $telefono = $_POST['telefono'];
	$detalles = $_POST['detalles'];
    $asunto = 'Informmación Levana ' . $nombre . ' ' . $apellido ;

    // Construir el cuerpo del correo
    $cuerpo = '
    <html>
    <head>
    <title>VIDA LEVANA</title>
    </head>
    <body style="padding: 15px 20px;">
    <img width="100%" src="https://vidalevana.com/images/headermail.jpg" alt="imagen aqui">
    <p><b>Asunto:</b> ¡Gracias por registrarte! Conoce tu futuro hogar en el mejor desarrollo inmobiliario de Aguascalientes</p><br>
    <p>Estimado ' . $nombre . ',</p>
    <p>¡Enhorabuena! Queremos agradecerte por dar el primer paso hacia tu futuro hogar en Levana. Nos complace informarte que hemos recibido tu registro y estamos emocionados de acompañarte en este importante proceso.</p>
    <p>Nuestros asesores inmobiliarios están listos para brindarte la orientación necesaria y pronto se pondrán en contácto contigo para responder cualquier pregunta que puedas tener.</p><br>
    <p>Te proporcionamos la información de contacto para que puedas comunicarte con nosotros:</p>
    <p>📧 Correo electrónico: ventas@vidalevana.com 📱 WhatsApp: 449 404 4444</p>
    <p>📞 Teléfono de oficina: 449 404 4444</p><br>
    <p>Recuerda que nuestros horarios de atención en nuestras instalaciones son:</p>
    <p>🏢 Lunes a Viernes: 8:00 am a 8:00 pm</p>
    <p>🏢 Sábados: 9:00 am a 2:00 pm</p><br>
    <p>Si tienes alguna pregunta o requieres mayor información, no dudes en contactarnos. Estamos aquí para brindarte el apoyo que necesitas en tu proceso de compra.</p><br>
    <p>¡Gracias nuevamente por confiar en Levana!</p>
    <p>Saludos cordiales,</p><br>
    <p style="text-align: center;"><b>Equipo Levana</b></p>
    <p style="text-align: center;font-size:12px;">El hogar de tus sueños</p>

    <h2 style="text-transform: uppercase; text-align:center;margin-top:50px;">Información de admisión UCAP</h2>
    <p>Nombre: ' . $nombre . ' ' . $apellido .'</p>
    <p>Email: ' . $email . '</p>
    <p>Teléfono: ' . $telefono . '</p>
    <p>Detalles: ' . $detalles . '</p>
    <p style="text-align: justify;margin:50px 0px;">RECUERDA QUE PUEDES INICIAR SESIÓN DESDE <a style="text-transform: uppercase;" href="https://vidalevana.com">vidalevana.com</a></p>
    </body>
    </html>
    ';

    // Crea los encabezados del correo
    $headers = "From: ventas@vidalevana.com\r\n";
    $headers .= "Reply-To: ventas@vidalevana.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Verifica si los correos se enviaron correctamente
    if (mail('ventas@vidalevana.com', $asunto, $cuerpo, $headers) && mail($email, $asunto, $cuerpo, $headers)) {        
            $_SESSION['message'] = "Correo enviado exitosamente";
            header("Location: index.html");
            exit(0);
    } else{
		$_SESSION['message'] = "Error al enviar el correo. contacte a soporte datallizer.com/soporte";
            header("Location: index.html");
            exit(0);
	}
 ?>
