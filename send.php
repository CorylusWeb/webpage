<?php
if(isset($_POST['email'])) {

// Debes editar las pr�ximas dos l�neas de c�digo de acuerdo con tus preferencias
$email_to = "jeremias@corylusweb.com";
$email_subject = "Contacto desde Corylus";

// Aqu� se deber�an validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['consulta'])) {

echo "<b>Ocurri� un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atr�s y verifique la informaci�n ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Tel�fono: " . $_POST['consulta'] . "\n";


// Ahora se env�a el e-mail usando la funci�n mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "�El formulario se ha enviado con �xito!";
}
?>