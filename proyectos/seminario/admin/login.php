<?php
//include config
require_once('config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Admin - Login</title>
  <link rel="icon" type="image/png"   href="../images/favicon.png">
  <link rel="stylesheet" href="css/960.css" />
  <link rel="stylesheet" href="css/stylesheet.css" />
</head>
<body>


	<?php

	//process login form if submitted
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if($user->login($username,$password)){ 

			//logged in return to index page
			header('Location: index.php');
			exit;
		

		} else {
			$message = $user->password_hash('test', PASSWORD_BCRYPT);
			$message .= '<p class="error">Usuario o contraseña erróneos</p>';
		}

	}//end if submit

	if(isset($message)){ echo $message; }
	?>
    
	<div class="container_12 login">
    <img src="/images/logo.png" title="Voces en el Camino" alt="Logo de Voces en el Camino" />
	<form action="" method="post">
            <label>Username</label><input type="text" name="username" value=""  />
            <label>Password</label><input type="password" name="password" value=""  />
            <label></label><input type="submit" name="submit" value="Login" class="button"  />
    </form>
    </div>
</body>
</html>
