<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["your-name"];
    $correo = $_POST["your-email"];
    $mensaje = $_POST["message"];

    $destinatario = "fabriciososa006@gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido);

    // Redirige al usuario a una página de confirmación o muestra un mensaje de éxito
    echo "¡Gracias por enviar el mensaje!";
}
?>