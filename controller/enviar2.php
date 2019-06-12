<?php

include_once('controlSession.php');
  include_once('../controller/clasescontroller_est.php');
  
        $row = $_SESSION['persona'] ;

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario


$nombre = $_POST["nombre"];

$email = $_POST["profesor"];



$destinatario = $row['correo'];


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario ="codreseyhelp@gmail.com";  // Mi cuenta de correo
$smtpClave = "COJEJOAN";  // Mi contraseña




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Se ha registrado una materia"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde Registro de materia</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>Nombre de la materia resgistrada: {$nombre}</p>

<p>Profesor: {$email}</p>


</body> 

</html>

<br />"; 

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
      header("Location: ../view/agregarmat.php");
          exit();

} else {
        header("Location: ../view/agregarmat.php");
            exit();

}







?>

