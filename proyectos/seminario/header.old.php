<?php 

require_once("includes/connection.php");
require_once("includes/functions.php");

?>

<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es_ES"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es_ES"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es_ES"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es_ES"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
	<meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">

	<title></title>
	<meta name="description" content="">
	<?php 
		if($page == 0){
			echo "<meta name=\"keywords\" content=\" "; 
			
			echo " \">";
		}
	?>
	<!-- CSS  -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/export.js" type="text/javascript"></script>
</head>


<body>
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="container">
				   <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" 
				         data-target="#navbar-toggle">
				         <span class="sr-only">Toggle navigation</span>
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" rel="home" href="#"><img src="img/oldLogo.jpg"></a>
				   </div>
				   <div class="collapse navbar-collapse" id="navbar-toggle">
				      <ul class="nav navbar-nav navbar-right">
				        <li class="<?php if($page == 0 ){echo 'active';} ?>" ><a href="#">Bienvenida</a></li>
				        <li class="<?php if($page == 1 ){echo 'active';} ?>" ><a href="#">Programa</a></li>
				        <li class="<?php if($page == 2 ){echo 'active';} ?>" ><a href="#">Ponentes</a></li>
				        <li class="<?php if($page == 3 ){echo 'active';} ?>" ><a href="#">Comité Organizador</a></li>
				        <li class="<?php if($page == 4 ){echo 'active';} ?>" ><a href="#">Cómo llegar</a></li>
				        <li class="<?php if($page == 5 ){echo 'active';} ?>" ><a href="#">Inscripción</a></li>
				      </ul>
				   </div>
				</div>
			</nav>		
	<div class="container">
