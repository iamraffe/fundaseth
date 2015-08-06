<?php
require('includes/class.phpmailer.php');

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}


if(isset($_POST['email'])) {
    $Error = false;
    $ErrorMessage = "";
	

    //NAME VALIDATION ----------------
    if(empty($_POST['name'])){
        $ErrorMessage = "El nombre es requerido.";
        $Error = true;
    }
    else{
        $Name = $_POST['name'];
        if (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
            $ErrorMessage = "Solo se permiten letras y espacios en blanco.";
            $Error = true;
        }
        else{
            $Body .= "<p style=\"text-align: justify;\">Nombre: ";
            $Body .= clean_string($Name) ."</p>";
        }
    }
    
    
    //PHONE IS OPTIONAL, NO VALIDATION -----------------
    if(isset($_POST['phone'])){
        $Tel = $_POST['phone']; 
        $Body .= "<p style=\"text-align: justify;\">Teléfono: ";
        $Body .= clean_string($Tel) ."</p>";
    }
	
	

    
    //EMAIL VALIDATION --------------
    if(empty($_POST['email'])){
        $ErrorMessage = "El email es requerido.";
        $Error = true;
    }
    else{
        $Email = $_POST['email'];
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $Email)) {
            $ErrorMessage = "Formato de correo electrónico invalido.";
            $Error = true;
        }
        else{
            $Body .= "<p style=\"text-align: justify;\">Correo Eléctronico: ";
            $Body .= clean_string($Email) ."</p>";
        }
    }



	$Subject = "Fundaseth: Contacto [WEB]";
	$Message = $_POST['message'];
		$Body .= "<p style=\"text-align: justify;\">Mensaje: ";
		$Body .= clean_string($Message) ."</p>";
		$Body .= "</div>";


    $EmailTo = array("info@fundaseth.es", "r.ramirez@fundaseth.es");

    if($Error){
        echo "<script>alert('Error de validación: " . $ErrorMessage ."')</script>";
    }
    else{
        // create email headers
        $headers = 'From: '.$Email."\r\n".
        'Reply-To: '.$Email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        $mail = new PHPMailer();
        $mail -> CharSet = 'UTF-8';
        $mail->AddAddress($EmailTo[0]);
		$mail->AddAddress($EmailTo[1]);
        $mail->SetFrom($Email, $Name);
        $mail->Subject = $Subject;
        $mail->MsgHTML($Body);
        if(!$mail->Send()) {
          echo "<script>alert('Mailer Error: " . $mail->ErrorInfo."')</script>";
        } else {
          
          header( "Location: contact.php#success");
        }
    }
	
?>
<?php
}
die();
?>