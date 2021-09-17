<?php


$destinatario = "richard07901@utp.edu.co";


// //Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
// $telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];


$header = "Enviado desde el portafolio: ";
$mensajeCompleto = $descripcion . "\nAtementamente: ". $nombre;
mail($destinatario, $asunto, $mensajeCompleto, $header);

echo "Se envío el mensaje";
// echo "<script>alert('Correo enviado exitosamente)</script>";
// echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";

// $paraCliente = $email;

// // Datos para el correo
// $asunto = "Contacto desde nuestra web";

// $carta = "De: $nombre \n";
// $carta .= "Correo: $email \n";
// $carta .= "Telefono: $telefono \n";
// $carta .= "Mensaje: $descripcion";

// //Enviando mensaje
// mail($destinatario, $asunto, $carta);


?>
