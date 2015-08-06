<?php
require_once("includes/connection.php");
require_once("includes/functions.php");
if(isset($_POST['submit'])){
	  if(isset($_POST['publish'])) 
	  { 
		  $post_status='publish';
	  }
	  else{
		  $post_status='draft';
	  
	  }
	  $post_title = $_POST['post_title'];
	  $post_category= $_POST['post_category'];
/*	  $image_url = $_POST['post_image'];*/
	  $post_image = "<img class='center' src=".$_POST['post_image']." width='300'/>";
	  $post_content .= $_POST['post_content'];
	  date_default_timezone_set('Europe/Madrid');
	  $year = date('Y');
	  echo $year;
	  $month = date('m');
	  echo $month;
	  $post_date = date('Y-m-d-H-i-s');
	  $image_url = "../wp-content/uploads/".$year."/".$month."/".$_POST['post_image'];
	  /*post_handling($post_status, $post_category, $post_title, $post_content);*/
	  $query = "INSERT INTO wp_posts (post_status, post_date, post_category, post_title, post_content) VALUES ('$post_status', '$post_date', '$post_category', '$post_title', '$post_content')";
	  move_uploaded_file($_FILES["post_image"]["tmp_name"],$image_url);
	  
	  if (!mysqli_query($connection, $query)) {
	  die('Error: ' . mysqli_error($connection));
	  }
	  echo "1 record added";
}
?>
<!DOCTYPE html>
<html lang='es'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eduardo S&aacute;nchez Rugeles | Posting service</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="stylesheet" href="css/960_rtl.css"/>
        <link rel="stylesheet" href="css/stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="js/jquery-te-1.4.0.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/jquery-te-1.4.0.min.js" charset="utf-8"></script>

<body>

        <img src="images/logo.bmp" title="Historietas, fraudes y mudanzas" alt="Logo de Eduardo Sanchez Rugeles: Historietas, fraudes y mudanzas"  height="150px"/>
        <div class="container_12">
        	<div class="grid_12">
            	<h1>Posting service | Eduardo S&aacute;nchez Rugeles</h1>
            </div>
            <div class="grid_8 push_2 postingService">
                <form name="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                    <select name="post_category">  
                      <option value="1">DISCURSOS</option> 
                      <option value="2">MEMENTOS</option> 
                      <option value="3">EJERCICIOS DE ADMIRACIÓN</option> 
                      <option value="4">DIRETES</option> 
                      <option value="5">RESEÑAS</option> 
                      <option value="6">AUSENCIAS</option> 
                    </select> 
                    <input type="text" name="post_title" placeholder="Titulo del post"/>
                    <textarea class="jqte-test" type="text" name="post_content" placeholder=" "></textarea>
                    <input type="file" name="post_image"/></input>
                    <button type="submit" name="publish" class="clickable"><p>Publicar</p></button>
                    <button type="submit" class="clickable"><p>Guardar</p></button>
                </form>
            </div>
        </div>
        <script>
        	$('.jqte-test').jqte({br: false});
        </script>
</body>
</html>