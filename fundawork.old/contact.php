<?php
require('includes/class.phpmailer.php');
	if(isSet($_POST['email'])){
		function clean_string($string) {
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}
	
		//cargamos la informacion 
		$name = $_POST['name']; 
		$email_from = $_POST['email']; 
		$email_message .= "Nombre Completo: ".clean_string($name)."<br>";
		$email_message .= "Email: ".clean_string($email_from)."<br>";
		if(isset($_POST['phone'])){
			$phone = $_POST['phone'];
			$email_message .= "Teléfono: ".clean_string($phone)."<br>";
		}	  
		if(isset($_POST['message'])){
			$message = $_POST['message'];
			$email_message .= "Mensaje: ".clean_string($message)."<br>";
		}	
		// create email headers
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
		$mail->AddAddress("fundawork@fundaseth.es");
		$mail->SetFrom($email_from, $name);
		$mail->Subject = 'Contacto: Fundawork';
		$mail->MsgHTML($email_message);
		if(!$mail->Send()) {
		  echo "<script>alert('Mailer Error: " . $mail->ErrorInfo."')</script>";
		} else {
			header( "Location: contacto.php#sucessemail");
	
		}
	}
  
?>