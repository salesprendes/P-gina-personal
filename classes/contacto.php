<?php
	namespace classes;

	$nombre  = $_POST['nombre'];
	$email   = $_POST['correo'];
	$movil   = $_POST['movil'];
	$asunto  = $_POST['asunto'];
	$mensaje = "Mensaje: " .$_POST['mensaje'];

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";

	$mensaje .= "<br/> Teléfono móvil: " .$movil ."<br/>Correo del que enviá el mensaje: " .$email;
	
	mail("salesprendes@gmail.com", $asunto, $mensaje, $headers);
 ?>