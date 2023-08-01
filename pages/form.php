<?php 
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$mensaje = "Este mensaje fue enviado por" . $nombre . "\r\n";
$mensaje .= "Su email es:" . $email . " \r\n";
$mensaje .= "Mensaje:" . $_POST["mensaje"] . " \r\n";
$mensaje .= "Enviado el:" . date("d/m/Y", time());

$para = "msebam29@gmail.com";
$asunto = "Este mail fue enviado desde la web";
$mensaje = "hola gil"

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:exito.html");

?>
