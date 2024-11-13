<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "ventas@daitimport.com";
    $asunto = "Mensaje desde el formulario de contacto";
  
    $mensaje_correo = "Nombre: $nombre\n";
    $mensaje_correo .= "Correo electrónico: $correo\n";
    $mensaje_correo .= "Teléfono: $telefono\n";
    $mensaje_correo .= "Mensaje:\n$mensaje";

    if (mail($destinatario, $asunto, $mensaje_correo)) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
}
?>