<?php
/*Formulario de contacto HTML5, PHP Y Bootstraps
Creado por: www.render2web.com
Version: 1.1*/

//Comprobamos que se haya presionado el boton enviar
if (array_key_exists('enviar', $_POST)) {
	//Guardamos en variables los datos enviados

	
	///Validamos del lado del servidor que el nombre y el email no estén vacios
	
    require 'js/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "edgarmch@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Edmecha7";
//Set who the message is to be sent from
$mail->setFrom('edgarmch@gmail.com', 'First Last');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress('edgarmch@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
    Nombre = {$_POST['nombre']}
	Email = {$_POST['email']}
	Telefono = {$_POST['telefono']}
	Ciudad = {$_POST['ciudad']}
	Empresa = {$_POST['empresa']}
    Cotizar = {$_POST['cotizar']}
    Cantidad = {$_POST['cantidad']}
	Mensaje = {$_POST['mensaje']}
	
	
EOT;

	
}

?>