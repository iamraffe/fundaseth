<?php
require('includes/class.phpmailer.php');
if(isset($_POST['email'])) {

$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if (($extension=='doc')||($extension=='docx')||($extension=='pdf')) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
   
    
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "temp/" . $_FILES["file"]["name"]);
	
	$email_subject = "Empleo: Fundaseth.es";
	//cargamos la informacion del post
	$first_name = $_POST['nombre']; 
	$last_name = $_POST['apellido']; 
	$email_from = $_POST['email']; 
	$telephone = $_POST['telefono'];
	$workarea = $_POST['profesion'];
		  
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	$email_message .= "Nombre: ".clean_string($first_name)."<br>";
	$email_message .= "Apellido: ".clean_string($last_name)."<br>";
	$email_message .= "Email: ".clean_string($email_from)."<br>";
	$email_message .= "Telefono: ".clean_string($telephone)."<br>";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$mail = new PHPMailer();
	$mail->AddAddress("info@fundaseth.es");
	$mail->SetFrom($email_from, $first_name.' '.$last_name);
	$mail->Subject = 'Send CV';
	$mail->MsgHTML($email_message);
	$mail->AddAttachment("temp/" . $_FILES["file"]["name"]);
	if(!$mail->Send()) {
	  echo "<script>alert('Mailer Error: " . $mail->ErrorInfo."')</script>";
	} else {
	  header( "Location: index.php#success");
	}
  }
} else {
  echo "Invalid file";
}

	
?>
<?php
}
die();
?>