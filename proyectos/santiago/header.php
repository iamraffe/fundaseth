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
	<!--<link rel="shortcut icon" href="favicon.ico">-->
    
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/responsivegridsystem.css" media="all">
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
	?>
</head>

<body>
<div id="wrapper">
	<div id="headcontainer">
    	
				<?php 
					
						
					switch($page){
						case 0:
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
						
							echo "
							
								<div class=\"section group\" style=\"width: 60.5%; background: #F6F6F6; margin: 0 auto; display: block; padding: 50px; padding-top: 115px;\">
									<h2 class=\"yellowTitle\"  style=\"font-size: 1.5em; font-family:'Montserrat', sans-serif; letter-spacing: -1px; color: #F39C12; text-align: center;\">" . translator("El Camino de Santiago ha sido y es un fenómeno cultural, religioso y sociológico posiblemente sin parangón en el mundo, a la vez que una experiencia individual de enorme calado para los peregrinos que, animados por un deseo de transformación interior y de encuentro con lo trascendente, han recorrido durante siglos la mítica ruta Jacobea, un camino plagado de claves simbólicas de profundo significado. ") . "</h2>
								</div>
								
							";
							
							break;
							
						case 2:
							echo "
							
								<div class=\"section group\" style=\"width: 60.5%; background: #F6F6F6; margin: 0 auto; display: block; padding: 50px; padding-top: 115px; padding-bottom: 0;\">
									<h2 style=\"font-size: 1.5em; font-family:'Montserrat', sans-serif; letter-spacing: -1px; color: #F39C12; text-align: center;\"> " . translator("El Camino de Santiago es la ruta de peregrinación más importante de Europa y está  declarada por la UNESCO Patrimonio de la Humanidad.") . "</h2>
								</div>
								  
								<div class=\"section group\" style=\"width: 62.5%; background: #F6F6F6; margin: 0 auto; display: block; padding: 31px; padding-bottom: 0;\">
									<div class=\"col span_2_of_4\" style=\"text-align: center; padding-top: 0px;\">
										<p style=\"display: block; margin: 0 auto; padding: 50px; font-size: 1.15em;\">Realizaremos las etapas de los últimos cien kilómetros del Camino de Santiago Francés. Este es sin duda el itinerario con mayor tradición histórica y el más reconocido.</p>
									</div>
									<div class=\"col span_2_of_4\" style=\"text-align: center;\">
										<img src=\"img/generalMap.svg\" style=\"width: 95%;\">
									</div>
								</div>
								  
								<div class=\"section group\" style=\"width: 60.5%; background: #F6F6F6; margin: 0 auto; display: block; padding: 50px; padding-top: 0px; padding-bottom: 0;\">
									<h3 style=\"font-size: 1.25em; font-family:'Montserrat', sans-serif; letter-spacing: -1px; color: #F39C12; text-align: center;\"><?php echo translator(\"La duración será de seis días y cinco noches.\")?></h3>
								</div>
								
							";
							
							break;
						
						case 3: 
						
							echo

							"
							<div class=\"section group\" style=\"width: 60.5%; background: #F6F6F6; margin: 0 auto; display: block; padding: 50px; padding-top: 115px;\">
							   <div class=\"col span_4_of_4\"> 
								 <h2 class=\"yellowTitle\"  style=\"font-size: 1.5em; font-family:'Montserrat', sans-serif; letter-spacing: -1px; color: #F39C12; text-align: center;\">" .translator("Fundaseth conoce bien el camino y en esta ocasión, te proponemos realizarlo de forma confortable, arropado durante el día en tu caminar, sin bultos, con paradas en las que relajarse y saborear de un buen refrigerio al aire libre y descansando en pazos de sobria belleza y sorprendente funcionalidad.")  . "</h2>    
						   		</div>
                			</div>";
							
							break;
						case 4: 
						
							echo "
							
								<div class=\"section group\" style=\"width: 60.5%; background: #F6F6F6; margin: 0 auto; display: block; padding: 50px; padding-top: 115px;\">
									<h2 class=\"yellowTitle\"  style=\"font-size: 1.5em; font-family:'Montserrat', sans-serif; letter-spacing: -1px; color: #F39C12; text-align: center;\">" . translator("Fundaseth no es una agencia de viajes, no tiene una base de datos con millones de vuelos, no opera con una infinidad de hoteles repartidos por todo el mundo, no organiza viajes en serie para personas sin más identidad que un dni. ") . "</h2>
								</div>
								
							";
							
							break;
						case 5: 
							echo   
							              
							"
							<div class=\"section group\" style=\"width: 60.5%; background: #F6F6F6; margin: 0 auto; display: block; padding: 50px; padding-top: 115px;\">
							   <div class=\"col span_4_of_4\"> 
								 <h2 class=\"yellowTitle\"  style=\"font-size: 1.5em; font-family:'Montserrat', sans-serif; letter-spacing: -1px; color: #F39C12; text-align: center;\">" .translator("Una experiencia singular es peregrinar a Santiago de Compostela, andar el camino con espíritu de superación personal descubriendo etapa a etapa el comportamiento generoso de los peregrinos no se olvida nunca.")  . "</h2>    
						   		</div>
                			</div>";
							
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
						<img id="logo" src="img/logo.svg" style="margin-left: 5%; margin-top: 30px; float:left;" width="265" heigth="37"/>
                        
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
                        <li <?php if($page == 4) echo "class=\"active\""; ?> ><a href="about.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("quienes somos") ?></a></li>
                        <li <?php if($page == 5) echo "class=\"active\""; ?> ><a href="gallery.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("galeria") ?></a></li>
                    </ul>
                </nav>
            </div>
            
            
		</header>


	</div>

