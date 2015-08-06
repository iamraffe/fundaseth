<?php //include config
require_once('config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png"   href="../images/favicon.png">
  <link rel="stylesheet" href="css/960.css" />
  <link rel="stylesheet" href="css/stylesheet.css" />
  <title>Admin - Editar Voces</title>
</head>
<body>

<img src="/images/logo.png" title="Voces en el Camino" alt="Logo de Voces en el Camino" style="margin-top: 50px;"  />
<div class="container_12">
	<div class="grid_2 menu">	
		<?php include('menu.php');?>
	</div>
	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

/*		//very basic validation
		if($id ==''){
			$error[] = 'This post is missing a valid id!.';
		}

		//very basic validation
		if($post_title ==''){
			$error[] = 'Please enter the title.';
		}

		if($post_content ==''){
			$error[] = 'Please enter the content.';
		}*/

		if(!isset($error)){

			try {

				//insert into database UPDATE wp_posts SET post_title = :post_title, /*post_excerpt = :post_excerpt,*/ post_content = :post_content WHERE ID = :ID'
				$stmt = $db->prepare('UPDATE voices SET id = :id, titulo = :titulo, autor = :autor, idioma = :idioma, pregunta = :pregunta, etapa = :etapa WHERE id = :id') ;
				$stmt->execute(array(
					':titulo' => $titulo,
					':autor' => $autor,
					':etapa' => $etapa,
					':idioma' => $idioma,
					':pregunta' => $pregunta,
					':id' => $id
				));

				//redirect to index page
				header('Location: index.php?action=updated');
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



	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo $error.'<br />';
		}
	}

		try {

			$stmt = $db->prepare('SELECT id, titulo, autor, idioma, pregunta, etapa FROM voices WHERE id = :id') ;
			$stmt->execute(array(':id' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>
    <div class="grid_10 postingService">	
            <h2>Editar Voz</h2>
            <form action='' method='post'>
                <input type='hidden' name='id' value='<?php echo $row['id'];?>'>

                	<label>Idioma</label>
                    <select name="etapa">  
                    <?php  
						if($row['etapa']==1){
							echo	"<option value=\"1\" selected>ETAPA 1 / STAGE 1</option>" ;
							echo	"<option value=\"2\">ETAPA 2 / STAGE 2</option>";
							echo	"<option value=\"3\">ETAPA 3 / STAGE 3</option> ";
							echo	"<option value=\"4\">ETAPA 4 / STAGE 4</option>";
							echo 	"<option value=\"5\">ETAPA 5 / STAGE 5</option> ";
							
						}
						elseif($row['etapa']==2){
							echo	"<option value=\"1\">ETAPA 1 / STAGE 1</option>";
							echo	"<option value=\"2\" selected>ETAPA 2 / STAGE 2</option>";
							echo	"<option value=\"3\">ETAPA 3 / STAGE 3</option>";
							echo	"<option value=\"4\">ETAPA 4 / STAGE 4</option>";
							echo 	"<option value=\"5\">ETAPA 5 / STAGE 5</option>";
						}
						elseif($row['etapa']==3){
							echo	"<option value=\"1\">ETAPA 1 / STAGE 1</option>"; 
							echo	"<option value=\"2\">ETAPA 2 / STAGE 2</option>";
							echo	"<option value=\"3\" selected>ETAPA 3 / STAGE 3</option>";
							echo	"<option value=\"4\">ETAPA 4 / STAGE 4</option>";
							echo 	"<option value=\"5\">ETAPA 5 / STAGE 5</option>";
						}
						elseif($row['etapa']==4){
							echo	"<option value=\"1\">ETAPA 1 / STAGE 1</option>";
							echo	"<option value=\"2\">ETAPA 2 / STAGE 2</option>";
							echo	"<option value=\"3\">ETAPA 3 / STAGE 3</option>";
							echo	"<option value=\"4\" selected>ETAPA 4 / STAGE 4</option>";
							echo 	"<option value=\"5\">ETAPA 5 / STAGE 5</option>";
						}
						elseif($row['etapa']==5){
							echo	"<option value=\"1\">ETAPA 1 / STAGE 1</option>";
							echo	"<option value=\"2\">ETAPA 2 / STAGE 2</option>";
							echo	"<option value=\"3\">ETAPA 3 / STAGE 3</option>";
							echo	"<option value=\"4\">ETAPA 4 / STAGE 4</option>";
							echo 	"<option value=\"5\" selected>ETAPA 5 / STAGE 5</option>";
						}
					?>
                    </select> 
                    <select name="pregunta">  
                    <?php
                    	if($row['pregunta']==1){
							echo	"<option value=\"1\" selected>Primera pregunta de la etapa.</option>" ;
							echo	"<option value=\"2\">Segunda pregunta de la etapa.</option> ";
							
						}
						elseif($row['pregunta']==2){
							echo	"<option value=\"1\">Primera pregunta de la etapa.</option>" ;
							echo	"<option value=\"2\" selected>Segunda pregunta de la etapa.</option> ";
						}
					?>
                    </select> 
                    <label>Autor</label>
                    <input type='text' name='autor' value='<?php echo $row['autor'];?>'>
                    <label>Titulo</label>
                    <input type='text' name='titulo' value='<?php echo $row['titulo'];?>'>
                    <label>Idioma</label>
                    <select name="idioma">  
                    <?php
                    	if($row['idioma']=='es'){
							echo	"<option value=\"es\" selected>ESPAÑOL/SPANISH</option> " ;
							echo	"<option value=\"en\">INGLÉS/ENGLISH</option> ";
							
						}
						elseif($row['idioma']=='en'){
							echo	"<option value=\"es\">ESPAÑOL/SPANISH</option> " ;
							echo	"<option value=\"en\" selected>INGLÉS/ENGLISH</option> ";
						}
					?>
                    </select> 
                    <input type='submit' name='submit' value='Actualizar Info' class="button">
            </form>
   </div>

</div>

</body>
</html>	
