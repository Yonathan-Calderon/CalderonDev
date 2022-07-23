<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "contacto@calderondev.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:index.html');

?>