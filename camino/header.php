<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $lang; ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $lang; ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php echo $lang; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $lang; ?>"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo translator ($title[$page]); ?></title>
<meta name="description" content="<?php echo translator ($description[$page]);?>">
<?php 
		if($page == 0){
			echo "<meta name=\"keywords\" content=\" ".  translator ($keywords[$page]) . " \">";
		}
	?>
<meta name="author" content="Rafael Ramirez Urbina (www.fundaseth.es)">
<meta name="designer" content="Rafael Ramirez Urbina (www.fundaseth.es)">
<link rel="shortcut icon" href="img/favicon.png" type="image/png">
<!-- Responsive and mobile friendly stuff -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<!-- Stylesheets -->
<link rel="stylesheet" href="css/html5reset.css" media="all">
<link rel="stylesheet" href="css/col.css" media="all">
<link rel="stylesheet" href="css/2cols.css" media="all">
<link rel="stylesheet" href="css/3cols.css" media="all">
<link rel="stylesheet" href="css/4cols.css" media="all">
<link rel="stylesheet" href="css/5cols.css" media="all">
<link rel="stylesheet" href="css/6cols.css" media="all">
<link rel="stylesheet" href="css/7cols.css" media="all">
<link rel="stylesheet" href="css/8cols.css" media="all">
<link rel="stylesheet" href="css/9cols.css" media="all">
<link rel="stylesheet" href="css/10cols.css" media="all">
<link rel="stylesheet" href="css/11cols.css" media="all">
<link rel="stylesheet" href="css/12cols.css" media="all">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="css/responsivegridsystem.css" media="all">
<?php 
		if($page == 0){
			echo "<link rel=\"stylesheet\" href=\"css/slideme.css\" type=\"text/css\" media=\"all\" />";
		}

	?>
<!-- Responsive Stylesheets -->
<link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="css/1024.css">
<link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="css/768.css">
<link rel="stylesheet" media="only screen and (max-width: 480px)" href="css/480.css">
<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
<script src="js/modernizr-2.5.3-min.js"></script>
<?php 
		if($page == 4){
			
			echo "
				<!--Adobe Edge Runtime-->
				<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
				<script>
					var custHtmlRoot=\"logo/Assets/\"; 
					var script = document.createElement('script'); 
					script.type= \"text/javascript\";
				script.src = \"http://animate.adobe.com/runtime/5.0.1/edge.5.0.1.min.js\";
					var head = document.getElementsByTagName('head')[0], done=false;
					script.onload = script.onreadystatechange = function(){
						if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
							done=true;
							var opts ={
					scaleToFit: \"both\",
					centerStage: \"none\",
					minW: \"0\",
					maxW: \"409px\",
					width: \"409px\",
					height: \"400px\",
					bScaleToParent: true
				};
							opts.htmlRoot =custHtmlRoot;
							AdobeEdge.loadComposition('logo', 'EDGE-1051506168', opts,
							{\"dom\":{}}, {\"dom\":{}});		
							script.onload = script.onreadystatechange = null;
							head.removeChild(script);
						}
					};
					head.appendChild(script);
					</script>
				<style>
						.edgeLoad-EDGE-1051506168 { visibility:hidden; }
					</style>
				<!--Adobe Edge Runtime End-->			
			
			";
		}
		if($page == 2){
			
			echo "
				<!--Adobe Edge Runtime-->
				<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
				<script>
					var custHtmlRoot=\"generalMap/Assets/\"; 
					var script = document.createElement('script'); 
					script.type= \"text/javascript\";
				script.src = \"http://animate.adobe.com/runtime/5.0.1/edge.5.0.1.min.js\";
					var head = document.getElementsByTagName('head')[0], done=false;
					script.onload = script.onreadystatechange = function(){
						if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
							done=true;
							var opts ={
					scaleToFit: \"both\",
					centerStage: \"none\",
					minW: \"0\",
					maxW: \"undefined\",
					width: \"581px\",
					height: \"250px\",
					bScaleToParent: true
				};
							opts.htmlRoot =custHtmlRoot;
							AdobeEdge.loadComposition('generalMap', 'mapadelcamino', opts,
							{\"dom\":{}}, {\"dom\":{}});		
							script.onload = script.onreadystatechange = null;
							head.removeChild(script);
						}
					};
					head.appendChild(script);
					</script>
				<style>
						.edgeLoad-mapadelcamino { visibility:hidden; }
					</style>
				<!--Adobe Edge Runtime End-->
			";
		}
	?>

</head>

<body>
<div id="wrapper">
	<div id="headcontainer">
    	
				<?php 
					
						
					switch($page){
						case 0:
							$page_url="index.php";
							echo "
							
								<div id=\"foo\">
									<ul class=\"slideme\">
										<li><img src=\"img/pazo.jpg\" alt=\"Pazo\"></li>
										<li><img src=\"img/green_meadow.jpg\" alt=\"Llano verde\"></li>
										<li><img src=\"img/monument.jpg\" alt=\"Monumento\"></li>
										<li><img src=\"img/mojon.jpg\" alt=\"Mojon\"></li>
										<li><img src=\"img/forest.jpg\" alt=\"Bosque\"></li>
										<li><img src=\"img/meal.jpg\" alt=\"Comida\"></li>             
									 </ul>
								</div>
							
							"; 
							
							break;
							
						case 1:
							$page_url="santiago.php";
							echo "
							
								<div class=\"section group yellowContainer\">
									<h2 class=\"yellowTitle\">" . translator("El Camino de Santiago ha sido y es un fenómeno cultural, religioso y sociológico sin parangón en el mundo, a la vez que una experiencia individual de enorme calado para los peregrinos que, animados por un deseo de transformación interior y de encuentro con lo trascendente, han recorrido durante siglos la mítica ruta Jacobea, un camino plagado de claves simbólicas de profundo significado. ") . "</h2>
								</div>
								
							";
							
							break;
							
						case 2:
							$page_url="itinerary.php";
							echo "
							
								<div class=\"section group yellowContainer\" style=\"padding-bottom: 0 !important;\">
									<h2 class=\"yellowTitle\"> " . translator("El Camino de Santiago es la ruta de peregrinación más importante de Europa y está  declarada por la UNESCO Patrimonio de la Humanidad.") . "</h2>
								</div>
								  
								<div class=\"section group yellowContainer\" style=\"padding-top: 25px !important; padding-bottom: 0 !important;\">
									<div class=\"col span_2_of_4\" style=\"text-align: left; padding-top: 0px;\">
										<p>" . translator("Realizaremos las etapas de los últimos cien kilómetros del Camino de Santiago francés. Este es sin duda alguna el itinerario con mayor tradición histórica y el más reconocido internacionalmente.") ."</p>
										<p>" . translator("La duración será de seis días y cinco noches, con posibilidad de alojamiento en Santiago de Compostela la 6ª noche.") ."</p>
									</div>
									<div class=\"col span_2_of_4\" style=\"text-align: center;\">
										<div id=\"Stage\" class=\"mapadelcamino\"></div>
									</div>
								</div>				
							";
							
							break;
						
						case 3: 
							$page_url="path.php";
							echo

							"
							<div class=\"section group yellowContainer\">
							   <div class=\"col span_4_of_4\"> 
								 <h2 class=\"yellowTitle\">" .translator("Fundaseth conoce bien el camino y en esta ocasión te proponemos realizarlo de forma confortable, arropado durante el día en tu caminar, sin bultos, con paradas en las que relajarse y saborear un buen refrigerio al aire libre, descansando en pazos de sobria belleza y sorprendente funcionalidad.")  . "</h2>    
						   		</div>
                			</div>";
							
							break;
						case 4: 
							$page_url="about.php";
							echo "
							
								<div class=\"section group yellowContainer\">
									<h2 class=\"yellowTitle\">" . translator("Fundaseth no es una agencia de viajes, no tiene una base de datos con millones de vuelos, no opera con una infinidad de hoteles repartidos por todo el mundo, no organiza viajes en serie para personas sin más identidad que un DNI. ") . "</h2>
								</div>
								
							";
							
							break;
						case 5: 
							$page_url="gallery.php";
							echo   
							              
							"
							<div class=\"section group yellowContainer\">
							   <div class=\"col span_4_of_4\"> 
								 <h2 class=\"yellowTitle\">" .translator("Una imagen vale más que mil palabras.")  . "</h2>    
						   		</div>
                			</div>";
							
							break;	
						case 7: 
							$page_url="reservation.php";
							echo   
							              
							"
							<div class=\"section group yellowContainer \">
								<h3>".translator("Pasos para reservar") ."</h3>
								<div class=\"col span_1_of_3 reservationSteps\">
									<img src=\"img/fill.svg\" alt=" .translator("Rellena nuestro formuario de inscripción")." ><p>"
									.translator("Rellena nuestro formuario de inscripción.")."</p>
								</div>
								<div class=\"col span_1_of_3 reservationSteps\">
									<img src=\"img/cc.svg\" alt=".translator("Realiza un pago del 10% por persona, en concepto de reserva.") ." ><p>
									".translator("Realiza un pago del 10% por persona, en concepto de reserva.")."</p>
								</div>
								<div class=\"col span_1_of_3 reservationSteps\">
                                	<img src=\"img/calendar.svg\" alt=".translator("El resto del pago se debe hacer mínimo 30 días antes del Camino.") ." ><p>
									".translator("El resto del pago se debe hacer mínimo 30 días antes del Camino. ")."</p>
								</div>
                			</div>";
							
							break;	
						default: 
						$page_url="dataprotection.php";
						break;						
					}
						
					
						
				?>
				
<header>
      <div class="inner">
                <h1 style="display: none;">Camino de Santiago</h1>
                <div style="margin :0; padding :0;">
                    <?php 
					 if($page != 0){
					 	echo "<a href=\"/\">";
					 }
					?>
						<img id="logo" src="img/logo.svg" width="265" style="height:37px;" alt="Tu camino a santiago logo"/>
                        
                     <?php 
					 if($page != 0){
					 	echo "</a>";
					 }
					?>
                </div>
                <nav>
                    <ul style="margin :0; padding :0;">
                        <li <?php if($page == 1) echo "class=\"active\""; ?> ><a href="santiago.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("sobre santiago") ?></a></li>
                        <li <?php if($page == 2) echo "class=\"active\""; ?> ><a href="itinerary.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("itinerario") ?></a></li>
                        <li <?php if($page == 3) echo "class=\"active\""; ?> ><a href="path.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("camino") ?></a></li>
                        <li <?php if($page == 4) echo "class=\"active\""; ?> ><a href="about.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("quiénes somos") ?></a></li>
                        <li <?php if($page == 5) echo "class=\"active\""; ?> ><a href="gallery.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("galería") ?></a></li>
                        <li id="langChoose">
                        	<ul>
                        		<li id="spanish"><a href="#">Español</a><img src="img/spain.png" alt="Spanish flag"></li>
                                <li id="english"><a href="#">English</a><img src="img/usa.png" alt="Spanish flag"></li>
                                <li id="german"><a href="#">Deutsch</a><img src="img/germany.png" alt="Spanish flag"></li>
                        	</ul>
                        </li>
                    </ul>
                </nav>
            </div>
            
            
		</header>
        
        <div id="availableLang" style="width: 200px; height: 200px; background:#f3f3f3; left:0; top:0; right:0; bottom:0; margin:15% auto; position: absolute; z-index: 9999; padding: 25px;-webkit-border-radius: 25px;
-moz-border-radius: 25px;
border-radius: 25px;">
        					<p><?php echo translator("Elegir idioma:") ?></p>
                            <p id="menuClose" style="position:absolute; right: 15px; top: 15px; color:#B52217; cursor:pointer;">X</p>
                             <ul style="list-style: none; padding: 25px;">
                        		<li style="margin-bottom: 25px;"><img src="img/spain.png" style="width:20px; margin-right: 25px;" alt="Spain flag"><a href="<?php echo $page_url."?lang=es" ?>">Español</a></li>
                                <li style="margin-bottom: 25px;"><img src="img/usa.png" style="width:20px;  margin-right: 25px;" alt="USA flag"><a href="<?php echo $page_url."?lang=en_US" ?>">English</a></li>
                                <li style="margin-bottom: 25px;"><img src="img/germany.png" style="width:20px;  margin-right: 25px;" alt="Germany flag"><a href="<?php echo $page_url."?lang=de_DE" ?>">Deutsch</a></li>
                        	</ul>
        </div>

		<div id="overlay" style="width: 100%; height: 100%; background: rgba(0, 0, 0, 0.65); left:0; top:0; position: absolute; z-index: 9990;"></div>

	</div>

