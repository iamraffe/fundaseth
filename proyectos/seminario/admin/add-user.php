<?php //include config
require_once('config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png"   href="../images/favicon.png">
  <link rel="stylesheet" href="css/960_rtl.css" />
  <link rel="stylesheet" href="css/stylesheet.css" />
  <title>Admin - Add User</title>
</head>
<body>
<img src="/images/logo.bmp" title="Historietas, fraudes y mudanzas" alt="Logo de Eduardo Sanchez Rugeles: Historietas, fraudes y mudanzas"  height="150px"/>
<div class="container_12">
	<div class="grid_2 push_10 menu">	
		<?php include('menu.php');?>
	</div>
	

	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		//collect form data
		extract($_POST);

		//very basic validation
		if($username ==''){
			$error[] = 'Please enter the username.';
		}

		if($password ==''){
			$error[] = 'Please enter the password.';
		}

		if($passwordConfirm ==''){
			$error[] = 'Please confirm the password.';
		}

		if($password != $passwordConfirm){
			$error[] = 'Passwords do not match.';
		}

		if($email ==''){
			$error[] = 'Please enter the email address.';
		}

		if(!isset($error)){

			$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO blog_members (username,password,email) VALUES (:username, :password, :email)') ;
				$stmt->execute(array(
					':username' => $username,
					':password' => $hashedpassword,
					':email' => $email
				));

				//redirect to index page
				header('Location: users.php?action=added');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>
    <div class="grid_10 pull_2 postingService">	
	<h2>Add User</h2>
            <form action='' method='post'>
        
                <label>Username</label>
                <input type='text' name='username' value='<?php if(isset($error)){ echo $_POST['username'];}?>'>
        
                <label>Password</label>
                <input type='password' name='password' value='<?php if(isset($error)){ echo $_POST['password'];}?>'>
        
                <label>Confirm Password</label>
                <input type='password' name='passwordConfirm' value='<?php if(isset($error)){ echo $_POST['passwordConfirm'];}?>'>
        
                <label>Email</label>
                <input type='text' name='email' value='<?php if(isset($error)){ echo $_POST['email'];}?>'>
                
                <input type='submit' name='submit' value='Agregar usuario'>
        
            </form>
	</div>
</div>
