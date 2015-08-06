<?php 

require_once('includes/class.phpmailer.php');

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

if(isset($_POST['email'])) {

    $Error = false;
    $ErrorMessage = "";
    $body = "";
    //NAME VALIDATION ----------------
    if(empty($_POST['nombre'])){
        $ErrorMessage = "El nombre es requerido.";
        $Error = true;
    }
    else{
        $nombre = $_POST['nombre'];
        if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
            $ErrorMessage = "Solo se permiten letras y espacios en blanco.";
            $Error = true;
        }
        else{
            $body .= "<p style=\"text-align: justify;\">Nombre: ";
            $body .= clean_string($nombre) ."</p>";
        }
    }
	
    //EMAIL VALIDATION --------------
    if(empty($_POST['email'])){
        $ErrorMessage = "El correo electrónico es requerido.";
        $Error = true;
    }
    else{
        $email = $_POST['email'];
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $ErrorMessage = "Formato de correo electrónico invalido.";
            $Error = true;
        }
        else{
            $body .= "<p style=\"text-align: justify;\">Correo Eléctronico: ";
            $body .= clean_string($email) ."</p>";
        }
    }


    //PHONE VALIDATION ----------------
    if(empty($_POST['telefono'])){
        $ErrorMessage = "El telefono es requerido.";
        $Error = true;
    }
    else{
        $telefono = $_POST['telefono'];
        $body .= "<p style=\"text-align: justify;\">Telefono: ";
        $body .= clean_string($telefono) ."</p>";
        
    } 


    $subject = "Contacto: Fundawork [WEB]";
        $mensaje = $_POST['mensaje'];
        $body .= "<p style=\"text-align: justify;\">Mensaje: ";
        $body .= clean_string($mensaje) ."</p>";
        $body .= "</div>";

    $emailTo = array("fundawork@fundaseth.es", "info@fundaseth.es");

    if($Error){
        //echo "<script>alert('Error de validación: " . $ErrorMessage ."')</script>";
        echo 'Error de validación: '. $ErrorMessage ;
    }
    else{
        
        // create email headers
        
        $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        $mail = new PHPMailer();
        $mail -> CharSet = 'UTF-8';
        $mail->AddAddress($emailTo[0]);
        $mail->AddAddress($emailTo[1]);
        $mail->SetFrom($email, $nombre);
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        if(!$mail->Send()) {
          //echo "<script>alert('Mailer Error: " . $mail->ErrorInfo."')</script>";
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo 'Mensaje enviado correctamente.';
        }
    }
}

?>