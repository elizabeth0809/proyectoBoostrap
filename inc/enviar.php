<?php

$nombre = $_POST['nombre'];
//$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = 'From: ' . $nombre;


$mensajeCorreo = "This message was sent by: " . $nombre;

$mensajeCorreo .= "Mensaje: :" . $mensaje;

$asunto = "Contacto de sitio web";
$respuesta = true;

echo json_encode(array (
    'mensaje' => sprintf('El mensaje se ha enviado!'),
    'datos' => array(
        'nombre' => $nombre,
        //'email' => $email,
        'mensaje' => $mensaje
    ),
    'respuesta' => $respuesta
));

?>