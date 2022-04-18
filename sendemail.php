<?php 
	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$asunto = 'Contacto Web';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['message'];
	if(mail('contacto@inmaad.com',$asunto,$mensaje)){
        header("Location:index.html");
	}
    else "No se pudo enviar....."
 ?>