<?php
require('includes/class.phpmailer.php');

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}


if(isset($_POST['email'])) {
    $Error = false;
    $ErrorMessage = "";
	
	//SEX  ----------------
	$Sex = $_POST['room'];
	if($Sex == "single" )
	{
		$room = 1;
		$Body .= "<p style=\"text-align: justify;\">HABITACIÓN INDIVIDUAL";
	}
	else
	{
		$room = 2;
		$Body .= "<p style=\"text-align: justify;\">HABITACIÓN DOBLE";
	} 
	
	//SEX  ----------------
	$Sex = $_POST['sex'];
	if($Sex == "male" )
	{
		$Body .= "<p style=\"text-align: justify;\">Sr. ";
	}
	else
	{
		$Body .= "<p style=\"text-align: justify;\">Sra. ";
	} 

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
	
    //LAST NAME VALIDATION ----------------
    if(empty($_POST['last'])){
        $ErrorMessage = "Los apellidos son requerido.";
        $Error = true;
    }
    else{
        $lastName = $_POST['last'];
        if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
            $ErrorMessage = "Solo se permiten letras y espacios en blanco.";
            $Error = true;
        }
        else{
            $Body .= "<p style=\"text-align: justify;\">Apellidos: ";
            $Body .= clean_string($lastName) ."</p>";
        }
    }
    
    
    //PHONE IS OPTIONAL, NO VALIDATION -----------------
	if(empty($_POST['phone'])){
        $ErrorMessage = "El teléfono es requerido.";
        $Error = true;
    }
    else{
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
	
	    //EMAIL VALIDATION --------------
    if(empty($_POST['citizenship'])){
        $ErrorMessage = "La nacionalidad es requerida.";
        $Error = true;
    }
    else{
        $Citizenship = $_POST['email'];

        $Body .= "<p style=\"text-align: justify;\">Nacionalidad: ";
        $Body .= clean_string($Citizenship) ."</p>";
        
    }




	$Subject = "Tu camino a santiago: Reserva [WEB]";
	$Message = $_POST['message'];
		$Body .= "<p style=\"text-align: justify;\">Mensaje: ";
		$Body .= clean_string($Message) ."</p>";
		$Body .= "</div>";


    $EmailTo = array("info@fundaseth.es", "caminosantiago@fundaseth.es");

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
          
          header( "Location: reservation.php?step=1");
        }
    }
	
?>
<?php
}
die();
?>