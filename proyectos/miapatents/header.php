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

		if($page == 2 || $page == 1 || $page == 4){
			echo "
				<link rel=\"stylesheet\" href=\"css/magnificpopup.css\" media=\"all\">
			";
		}
	?>

	<!-- Responsive Stylesheets -->
	<link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="css/1024.css">
	<link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="css/768.css">
	<link rel="stylesheet" media="only screen and (max-width: 480px)" href="css/480.css">

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	<script src="js/modernizr-2.5.3-min.js"></script>
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
										<li><p style=\" font-size: 1.0em; color: black; font-family: 'Roboto', sans-serif; font-style: italic; position: absolute; bottom: 5%; left: 5%;\">". translator("&ldquo;Una invención debe plantarse en el suelo fértil de una legislación favorable.<br>
Cultivarse con esmero por parte de un buen profesional de las patentes.<br>Protegerse de las plagas de los imitadores por jueces especializados.<br>Y, finalmente, recoger sus frutos por empresas y organismos públicos, para disfrute de la sociedad&rdquo;<br><br>M. Illescas") ."</p><img src=\"img/plant.jpg\" alt=\"Planta verde\"></li>
									 </ul>
								</div>
							
							"; 
							
							break;
							
						case 1:
							$page_url="firma.php";
							echo "
							
								<div class=\"section group introText\"  style=\"padding-top: 115px;\">
									<h2>" . translator("MIAPatents tu gestor de IP") . "</h2>
								</div>
								<div class=\"section group introText\">
									<div class=\"col span_3_of_4\">
										<p>" . translator("Manuel Illescas Asociados (MIAPatents) es una firma de propiedad industrial que ofrece a sus clientes un asesoramiento integral, 
individualizado y personal. Prestamos especial atención a las patentes de los sectores biotecnológico, farmacéutico, químico,  biomédico, energético, medioambiental e informático (protección software-hardware).") ."</p>
										<p>" . translator("La empresa cuenta con dos sedes: en Madrid y en Bilbao. Su mayor activo radica en la combinación de la alta cualificación técnica y la 
experiencia técnico-legal de sus asociados, liderados por Manuel Illescas, agente europeo de patentes y socio director de la firma, que 
ha desarrollado una dilatada carrera profesional de más de 30 años en el ámbito de la propiedad industrial, en los sectores público y privado. ") ."</p>
										<p>" . translator("MIAPatents es una firma involucrada con los proyectos y los problemas de sus clientes, capaz de ofrecer un asesoramiento, a nivel 
mundial, en materia de propiedad industrial, con una gestión centralizada en la que priman criterios tales como: profesionalidad, especialización técnica, capacidades lingüísticas, fiabilidad y 
agilidad de plazos. ") ."</p>
										<p>" . translator("Los proyectos de los clientes se gestionan por un asociado, adscrito al mismo en función de su especialización técnica, siguiendo siempre una estrategoa de gestión donde prima la racionalización del trabajo y de los recursos, así como la alta calidad en el servicio. ") ."</p>
									</div>
									<div class=\"col span_1_of_4\" style=\"text-align: left; padding-top: 0px;\">
										<img src=\"img/gestor.svg\">
									</div>
								</div>
							";
							
							break;
							
						case 2:
							$page_url="servicios.php";
							echo "
							
								<div class=\"section group introText\"  style=\"padding-top: 115px;\">
									<h2 style=\"margin: 25px auto; display: block; color: black; font-size: 1.5em; max-width: 50%; font-family: 'Roboto', sans-serif;\"><span class=\"italic\">" . translator("&ldquo;Proteger la innovación hoy es asegurar el futuro el día de mañana&rdquo;</span><span class=\"floatright\"><br><br>M. Illescas</span>") ."</h2>
								</div>
			
							";
							
							break;
						
						case 3: 
							$page_url="documentacion.php";
							echo

							"

								<div class=\"section group introText\"  style=\"padding-top: 115px;\">
									<h2>" . translator("Noticias de interes") . "</h2>
									<p class=\"iAmLink\"><a href=\"http://www.oepm.es/es/sobre_oepm/noticias/2014/2014_11_14_Modernizacion_Ley_Patentes.html\" target=\"_blank\">" . translator("Anteproyecto de Ley de Patentes") ."</a></p>
								</div>
							";
							
							break;
						case 4: 
							$page_url="contacto.php";
							echo "
							
								<div class=\"section group introText\"  style=\"padding-top: 100px; position: relative;\">
									<img src=\"img/comeTogether.png\" style=\"display: block; margin: 0 auto 50px; max-width: 80%;\">
									<h2 class=\"iAmLink\"><a href=\"#\" data-mfp-src=\"#cv-popup\" class=\"open-popup-link\">" . translator("¿Quieres formar parte de nuestro equipo?") ."</a></h2>
								</div>
								
							";
							
							break;
							
						default: 
						$page_url="#";
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
						<img id="logo" src="img/logo.png" width="265" style="" alt="MIAPatents logo"/>
                        
                     <?php 
					 if($page != 0){
					 	echo "</a>";
					 }
					?>
                </div>
                <nav>
                    <ul style="margin :0; padding :0;">
                        <li <?php if($page == 0) echo "class=\"active\""; ?> ><a href="index.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("inicio") ?></a></li>
                        <li <?php if($page == 1) echo "class=\"active\""; ?> ><a href="firma.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("la firma") ?></a></li>
                        <li <?php if($page == 2) echo "class=\"active\""; ?> ><a href="servicios.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("servicios") ?></a></li>
                        <li <?php if($page == 3) echo "class=\"active\""; ?> ><a href="documentacion.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("documentacion") ?></a></li>
                        <li <?php if($page == 4) echo "class=\"active\""; ?> ><a href="contacto.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("contacto") ?></a></li>
                        <li><a href="<?php echo $page_url."?lang=".($locale_lang == 'es' ? 'en_US' : 'es'); ?>"><?php if($locale_lang == 'es'){echo "english";}else{echo "español";} ?></a></li>
                    </ul>
                </nav>
            </div>
		</header>
	</div>

