<!DOCTYPE html>
<html>
	<head>
		<title>Fundaseth, S.L.</title>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<meta name="description" content="Fundaseth, S.L. Trabajamos codo a codo con nuestros clientes, grandes, medianas, pequeñas empresas o autónomos, entendiendo sus necesidades y maximizando sus recursos."/>
		<meta name="keywords" content="fundaseth"/>
		<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />        
		<script type="text/javascript" src="JavaScript/jquery-1.10.2.min.js"></script>
      	<script type="text/javascript" src="JavaScript/jquery-ui-1.10.4.custom.min.js"></script>
        <script type="text/javascript" src="JavaScript/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="JavaScript/freewall.js"></script>
        <script type="text/javascript" src="JavaScript/gridControl.js"></script>
        <script type="text/javascript" src="JavaScript/jquery.leanModal.min.js"></script>
         <script src="JavaScript/modernizr.js"></script>
         <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'/>
         <link href="http://fonts.googleapis.com/css?family=Sansita+One" rel="stylesheet" type="text/css">
<script type="text/javascript">

$(document).ready(function() {

	//Custom settings
	var style_in = 'easeOutBounce';
	var style_out = 'jswing';
	var speed_in = 1000;
	var speed_out = 300;	

	//Calculation for corners
	var neg = Math.round($('.brick').width() / 2) * (-1);	
	var pos = neg * (-1);	
	var out = pos * 2;
	
	
	
	if(window.location.hash==="#success"){
		console.log("Su mensaje ha sido enviado correctamente!");
		alert("Su mensaje ha sido enviado correctamente!");
		window.location.hash=" ";
		
	}
	
	$('.brick').each(function () {
	
		
		img = $(this).find('img').attr('src');
		alt = $(this).find('img').attr('img');
		
		$('img', this).remove();
		$(this).append('<div class="topLeft"></div><div class="topRight"></div><div class="bottomLeft"></div><div class="bottomRight"></div>');
		$(this).children('div').css('background-image','url('+ img + ')');
		$(this).children('.tholder').css('background-image','none');

		$(this).find('div.topLeft').css({top:0, left:0, width:pos , height:pos});	
		$(this).find('div.topRight').css({top:0, left:pos, width:pos , height:pos});	
		$(this).find('div.bottomLeft').css({bottom:0, left:0, width:pos , height:pos});	
		$(this).find('div.bottomRight').css({bottom:0, left:pos, width:pos , height:pos});	

	}).hover(function () {
	
		$(this).find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});	
		$(this).find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});	
		$(this).find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});	
		$(this).find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});	
				
	},
	
	function () {

/*		$(this).find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		$(this).find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		$(this).find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		$(this).find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});	*/
	
	});
	
	

});

</script>
	</head>
    <body>
        <div id="content">
       <!-- <img src="images/bgf.svg" style="position: absolute; float:left; z-index:0; height:825px; padding-top:80px; ">-->
          <div class="grid_5">
              <a href="index.php"><img src="images/logo2.png" alt="Fundaseth, S.L. Logo"/></a>
             </div>
          <div class="grid_7">
                  <ul>
                      <li class="quienesmenu">¿Quienes Somos?</li>
                      <li class="servicesmenu">Servicios</li>
                      <li class="valormenu">Valor Social</li>
                      <li class="newsmenu">Noticias</li>
                      <li class="contactomenu">Contacto</li>               
                  </ul>
                  </div>
       	  	<div id="above">
            	<h1>Hacemos de su objetivo <span class="pink">el nuestro</span></h1>
            </div>
          	<div id="grid" class="grid_12">
                <div class="brick quienes">
                      <div class="tholder">
                          <span class="title">¿Quienes Somos?</span>
                      </div>
                      <img src="images/quienes.png" alt="¿Quienes somos?" title="¿Quienes somos?" width="125" height="125"/>
                      <span class="caption"><p><strong>Fundaseth, S.L.</strong><br>Vamos a pensar diferente.</p></span>
                </div>
                
                <div class="brick social">
                	<div class="tholder">
                          <span class="title">Valor Social</span>
                     </div>
                    <img src="images/social.png" alt="Valor Social" title="Valor Social" width="125" height="125"/>
                    <span class="caption"><p><br><strong>¿Nos ayudas?</strong></p></span>
                </div>
                
           
                
                <div class="brick news">
                	<div class="tholder">
                          <span class="title">Noticias</span>
                      </div>
                    <img src="images/news.png" alt="Noticias" title="Noticias" width="125" height="125"/>
                    <span class="caption"><p>Un espacio para compartir nuestras experiencias y proyectos.</p></span>
                </div>
                
                 <div class="brick contacto">
                	<div class="tholder">
                          <span class="title">Contacto</span>
                      </div>
                    <img src="images/contacto.png" alt="Contacto" title="Contacto" width="125" height="125"/>
                    <span class="caption"><p>No sea tímido, contáctenos. Podría ser el comienzo de algo grande.</p></span>
                </div>
                
                <div class="brick empleo">
                	<div class="tholder">
                	         <span class="title">Empleo</span>
                      </div>
                    <img src="images/job.png" alt="Empleo" title="Empleo" width="125" height="125"/>
                    <span class="caption"><p>¿Quieres unirte al equipo de <strong>Fundaseth, S.L.</strong>?</p></span>
                </div>
                


             
               
                    <div class="services">
                    	<div class="eventos" > 
							<div class="cover">
                            	<img src="images/eventos.png" alt="Eventos" title="" width="125" height="125" />
                            	<div class="tholder">
                            		<span class="title">Eventos</span>
                            	</div>
                                 <span class="caption"><p>Planificamos cada mínimo detalle y abordamos el evento de manera integral.</p></span>
                                
                            </div>
                    	</div>	
                        <div class="coworking"> 
                        	<div class="cover">
                            <img src="images/coworking.png" alt="Eventos" title="" width="125" height="125" />
                            	<div class="tholder">
                            		<span class="title">Coworking</span>
                                </div>
                                <span class="caption"><p>Un centro de <i>coworking</i> es un espacio destinado para emprendedores.</p></span>
                            </div>
                    	</div>	
                        <div class="web" > 
                       		 <div class="cover">
                             <img src="images/web.png" alt="Diseño y Desarrollo Web" title="Diseño y Desarrollo Web" width="125" height="125" />
                                 <div class="tholder">
                                    <span class="title">Diseño Web</span>
                                 </div>
                                 <span class="caption"><p>Nuestro enfoque: Ayudarle a llevar sus historias a la vida a través del diseño.</p></span>
                            </div>
                    	</div>	
                        <div class="servAdmin" > 
                       		<div class="cover">
                            <img src="images/admin.png" alt="Servicios Administrativos" title="Servicios Administrativos" width="125" height="125"/>
                            	<div class="tholder">
                            		<span class="title">Administración</span>
                                </div>
                            </div>
                    	</div>
                        <div class="formacion" > 
                       		<div class="cover">
                            <img src="images/formacion.png" alt="Formación" title="Formación" width="125" height="125" />
                            	<div class="tholder">
                            		<span class="title">Formación</span>                                
                                 </div>
                                <span class="caption"><p>Buscábamos aprender y aprendimos a enseñar.</p></span>
                            </div>
                    	</div>	
                        <div class="gestion" > 
                       		<div class="cover">
                            <img src="images/lux2.png" alt="Gestión del Lujo" title="Gestión del Lujo"  width="125" height="125" />
                            	<div class="tholder">
                            		<span class="title">Gestión del Lujo</span>
                                </div>
                                 <span class="caption"><p> ¿Algún capricho?<br><i>Pídenoslo.</i></p></span>
                                
                            </div>
                    	</div>	

                    </div>	

         </div>
            <div id="below">
            	<p></p><p>Trabajamos codo a codo con nuestros clientes, grandes, medianas, pequeñas empresas o autónomos, entendiendo sus necesidades y maximizando sus recursos.</p><p></p>
            </div>
            <div id="footer" class="grid_12">
        	<p>Copyright Fundaseth, S.L. 2014</p>
        </div>
      </div>
		

		</div>	
	 <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-52435582-1', 'auto');
      ga('send', 'pageview');
    
    </script> 
	</body>
</html>