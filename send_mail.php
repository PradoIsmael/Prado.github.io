<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    // Dirección de correo del staff
    $to = "prom69881@gmail.com"; // Reemplaza con el correo del staff
    $subject = "Nueva consulta de $nombre";

    // Cuerpo del correo
    $message = "Nombre: $nombre\n";
    $message .= "Correo Electrónico: $email\n\n";
    $message .= "Consulta:\n$consulta\n";

    // Cabeceras del correo
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Consulta enviada exitosamente. Nos pondremos en contacto pronto.";
    } else {
        echo "Error al enviar la consulta. Intenta nuevamente.";
    }
}
?>
