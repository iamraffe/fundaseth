<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fundawork - Contacto</title>
<link rel="icon" type="image/png" href="images/favicon.png">
		<meta name="description" content="FUNDAWORK es un espacio de coworking en Madrid. Proporcionamos infraestructura y servicios para que nuestros miembros puedan centrarse en sus proyectos."/>
		<meta name="keywords" content="fundaseth, fundawork, coworking, madrid, coworking madrid, españa, coworking españa"/>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/960.css" />
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<meta name="author"				content="Rafael Ramirez Urbina (www.fundaseth.es)" />
<meta name="designer"			content="Rafael Ramirez Urbina (www.fundaseth.es)" />
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
		$(document).ready(function(){
			if(window.location.hash=="#sucessemail"){

				alert("Su petición se ha procesado correctamente. Pronto le contactaremos con mas información.");
				window.location.hash="";
			} 			
		});
</script>
<style>
a.isSelected::before
{
	border-bottom-color: #FBC423;
	border-right-color: #FBC423;
	cursor:pointer;
}
a.isSelected::after{
	border-bottom-color: black;
	border-right-color:  black;
	cursor:pointer;
}
</style>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="container_12">
	<div class="grid_9 logoContainer">
  		<h1>Fundawork</h1>
        <h2 style="display:none">Coworking</h2>
  		<a href="index.php" title="Inicio"><span class="fundaworkLogo"><img src="images/logo_fundawork.png" width="380" alt="Fundawork logo"/></span></a>
        <a href="http://www.facebook.com/fundawork" title="Facebook de Fundawork"><span class="fb-follow"><img src="images/fb_logo.png" width="25" alt="Facebook logo"/></span></a>
<!--        <p>Teléfono: +34913981628</p>-->
        <span class="tel">Teléfono: <a href="tel:913981628" title="¿Qué esperas? Llámanos.">913981628</a></span>
  	</div>
  <div class="grid_3 pull_3">
      <nav class="menuTransform">
          <a href="coworking.php" title="Coworking">Coworking</a>
          <a href="instalaciones.php" title="Las Instalaciones">Las Instalaciones</a>
          <a href="servicios.php" title="Servicios">Servicios</a>
          <a href="ubicacion.php" title="Ubicación">Ubicacion</a>
          <a href="contacto.php" title="Contacto">Contacto</a>
          <a href="fundaseth.php" title="Fundaseth">Fundaseth</a>
          <img src="images/logo_perro_fundaseth.png" height="100" alt="Fundaseth, S.L. logo"/>
      </nav>	
  </div>
   <div class="grid_8 intro">
   			<span class="imageBorder" style="margin-left:40px;"><img src="images/fundaseth_equipo.jpg" width="550" alt="Equipo de trabajo de Fundaseth, S.L."/></span>
  </div>
  <!-- end .grid_11 -->
   <div class="clear"></div> 
   <div class="grid_8 borderTop">
   </div>
   <div class="clear"></div> 
   <div class="grid_7 push_1">
 		<p>Envíe sus sugerencias y comentarios utilizando el formulario de contacto, a través de un correo eléctronico haciendo click en la dirección de eléctronico o bien por medio de una llamada telefónica.</p>
   </div>
   <div class="clear"></div> 
  <div class="grid_5 formContainer rightBorder">
        <form action="contact.php" name="contact" method="post">
        	<input type="text" name="name" required="required" placeholder="Nombre completo*" style="margin-top: 15px;" />
 			<input type="email" name="email" required="required" placeholder="Email*" />
            <input type="text" name="phone"  placeholder="Teléfono (Opcional)" />
            <textarea name="message" id="message" placeholder="Escriba aquí sus comentarios..." ></textarea>
 			<button type="submit" style="display:block;">Enviar</button>
        </form>
  </div>
  <div class="grid_4 aboutContact">
  		<p>Email:</p>
    	<p><a href="mailto:fundawork@fundaseth.es?Subject=Contacto:%20Fundawork" target="_top" title="Contáctanos">fundawork@fundaseth.es</a></p>
        <p>Teléfono:</p> 
        <p><a href="tel:913981628" title="¿Qué esperas? Llámanos.">913981628</a></p>
  </div>
  <!-- end .grid_11 -->

    <div class="clear"></div> 
  <footer class="grid_9">
    <p><span class="floatsLeft">Copyright Fundaseth, S.L. 2014</span></p>
    <p><span class="floatsRight">Alejandro Rodriguez, 32 CP: 28039 - Madrid</span></p>
  </footer>
  <!-- end .grid_12 -->
</div>
<!-- end .container_12 -->
</body>
</html>