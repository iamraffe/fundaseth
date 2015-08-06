<?php
/*
 * Uploads the file from client side and track the status
 */

// for testing it could be helpful...

ini_set('display_errors', 1);
 
 
require_once 'CloudConvert.class.php';

// insert your API key here
$apikey = "geFqI7dtLUptvg9osx7Z2J5Otr2exc7TPqs609T7wEd4dt4RGT9DxIPAk1XATB7TyEDkwnno9TEIaSx46aZEFw";

// Get the Process URL
$process = CloudConvert::createProcess("amr", "mp3", $apikey);
$process -> uploadByFTP("../../includes/voicenotes/test.amr", "mp3");
/*$process-> upload("../../includes/voicenotes/test.amr", "mp3");*/
$process -> input -> ftp -> host = "ftp.aecat.net" ;
$process -> input -> ftp -> user = "orfxwjvc" ;
$process -> input -> ftp -> password = "Liubliana32!" ;
$test = $process -> input -> ftp -> password;
$process -> file = "../../includes/voicenotes/test.amr";
$process -> outputformat = "mp3";
$process -> output -> ftp -> host = "ftp.aecat.net" ;
$process -> output -> ftp -> user = "orfxwjvc" ;
$process -> output -> ftp -> password = "Liubliana32!" ;
$process -> output -> ftp -> path = "../../includes/voicenotes/test.mp3" ;


$url = $process -> getURL();
if(!empty($url)) {
?>
<?php //include config
require_once('../config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: ../login.php'); }
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="icon" type="image/png"   href="../../images/favicon.png">
  <link rel="stylesheet" href="../css/960.css" />
  <link rel="stylesheet" href="../css/stylesheet.css" />
  <title>Admin - Convertir Voces</title>
</head>
<body>

<img src="/../images/logo.png" title="Voces en el Camino" alt="Logo de Voces en el Camino" style="margin-top: 50px;"  />
<div class="container_12">
	<div class="grid_2 menu">	
		<?php include('../menu.php');?>
	</div>


    <div class="grid_10 postingService">	
            <h2>Conversión de Voz</h2>
            
           

   
    <!--<h3>Process: <?=$url ?></h3>-->
	    
<!--		<label for="file">Por favor, seleccione el archivo de audio que desea convertir:</label>
		<form action="<?=$url ?>" method="POST" enctype="multipart/form-data" id="form" target="hiddenframe">
			<input type="hidden" name="input" value="uploadByFTP">
			<input type="hidden" name="format" value="mp3">
			<input type="file" name="file">
			<input type="submit" class="button">
		</form>-->
		
		<!-- used for uploading the file to prevent page reload -->
		<iframe frameborder="0" width="0" height="0" name="hiddenframe" id="hiddenframe"></iframe>
		
		<!-- display current status -->
		<pre id="status"></pre>										
		
		</div>
 
	</body>
</html>

<? } ?>