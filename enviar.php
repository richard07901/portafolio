<?php
//Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
// $telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];

$paraCliente = $email;

// Datos para el correo
$destinatario = "richard07901@utp.edu.co";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $descripcion";

//Enviando mensaje
mail($destinatario, $asunto, $carta);


?>
