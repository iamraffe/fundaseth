<?php 
//require_once("../includes/connection.php");
require_once("../includes/functions.php");
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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="../css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<!--	<script  type="text/javascript" src="../js/jquery-ui-1.7.custom.min.js"></script>
	<script  type="text/javascript" src="../js/jquery-search.js"></script>-->
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
		      <a class="navbar-brand" rel="home" href="#"><img src="../img/oldLogo.jpg"></a>
		   </div>
		   <div class="collapse navbar-collapse" id="navbar-toggle">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="<?php if($page == 0 ){echo 'active';} ?>" ><a href="index.php">Inicio</a></li>
		        <li class="<?php if($page == 1 ){echo 'active';} ?>" ><a href="export.php">Descargar</a></li>
		        <li class="<?php if($page == 2 ){echo 'active';} ?>" ><a href="../index.php">Volver a la web</a></li>
		        <li class="<?php if($page == 3 ){echo 'active';} ?>" ><a href="logout.php">Cerrar sesión</a></li>
<!--		        <form class="navbar-form navbar-left" role="search">
				    <div class="form-group">
				        <input type="text" class="form-control" id="searchData" placeholder="Search">
				    </div>
				    <button type="submit" class="btn btn-default">Submit</button>
				</form>
 				<div class="col-sm-5 pull-right">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Buscar registro" name="srch-term" id="srch-term">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
				</div> -->
		      </ul>
		   </div>
		</div>
	</nav>		
	<div class="container">
