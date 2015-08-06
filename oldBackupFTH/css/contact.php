<?php

$EmailTo = "info@fundaseth.es";
$Subject = "Contacto: Fundaseth.es";
$Name = $_POST['nombre'];
$LastName =  $_POST['apellido'];
$Profesion =  $_POST['profesion'];
$Tel = $_POST['telefono']; 
$Email = $_POST['email']; 
$Message = $_POST['mensaje']; 
$ip = getenv("REMOTE_ADDR") ;

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Apellidos: ";
$Body .= $LastName;
$Body .= "\n";
$Body .= "Profesion: ";
$Body .= $Profesion;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "IP: ";
$Body .= $ip;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");
if($success){
	header("location: index.php#success");
	}else{
		echo "Error sending mail.";
	}

?>