<?php
/*require("constants.php");*/
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "estupido");
define("DB_NAME", "fundaseth_translator");

	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	if(!$connection){
		die("Database connection failed:  " . mysqli_error($connection));
	}
	
	$db_select = mysqli_select_db($connection,DB_NAME);
	if(!$db_select){
		die("Database connection failed:  " . mysqli_error($connection));
	}
	mysqli_set_charset($connection,'utf8');
?>