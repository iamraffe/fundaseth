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
			echo "<meta name=\"keywords\" content=\" "; 
			echo translator ($keywords[$page]);
			echo " \">";
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
    <?php
		if($page == 2){
			echo "
				<link rel=\"stylesheet\" href=\"css/magnificpopup.css\" media=\"all\">
			";
		}
    ?>
    
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />

	<!-- Responsive Stylesheets -->
	<link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="css/1024.css">
	<link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="css/768.css">
	<link rel="stylesheet" media="only screen and (max-width: 480px)" href="css/480.css">

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	<script src="js/modernizr-2.5.3-min.js"></script>
    
    <?php
	
		if($page == 1){
			echo "
			<!--Adobe Edge Runtime-->
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
					maxW: \"undefined\",
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
		<header  class="<?php 
					if($page!=0){
						echo "notHome";
					}
				?>">
        	<div class="inner">
            	<a href="/"><img id="logo" src="<?php 
					if($page!=0){
						echo "img/logo_white.svg";
					}else{
						echo "img/logo.png";
					}
				?>" alt="Logo de Fundaseth, S.L." /></a>
                
                
                <div id="dd" class="wrapper-dropdown-3 <?php if($page==0) echo "home-dropdown"; ?>" tabindex="1">
                    <span><?php if($lang == 'es'){ echo '<img src="img/spain.png" style="max-width: 25px;">'; }else{ echo '<img src="img/usa.png" style="max-width: 25px;">'; }  ?></span>
                    <ul class="dropdown">
                        <li><a href="<?php echo $url; ?>?lang=en_US" title="English"><?php echo translator("English") ?></a></li>
                        <li><a href="<?php echo $url; ?>?lang=es" title="Spanish"><?php echo translator("Español") ?></a></li>
                    </ul>
                </div>
            
                <nav>                     
                     <ul>
                     	<li><a href="fundaseth.php?lang=<?php echo $locale_lang; ?>"><p><?php echo translator("fundaseth") ?></p></a></li>
                        <li><a href="services.php?lang=<?php echo $locale_lang; ?>"><p><?php echo translator("servicios") ?></p></a></li>
                        <li><a href="social-value.php?lang=<?php echo $locale_lang; ?>"><p><?php echo translator("valor social") ?></p></a></li>
                        <li><a href="contact.php?lang=<?php echo $locale_lang; ?>"><p><?php echo translator("contacto") ?></p></a></li>
                        <li><a href="http://blog.fundaseth.es"><p><?php echo translator("blog") ?></p></a></li>
                     </ul>
                </nav>
            </div>
        </header>