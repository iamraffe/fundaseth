<?php
	$page = 0;
	require_once('languages.php');
    include_once('header.php');
?> 

<body>

<!--<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>-->

<div id="wrapper">
	<div id="headcontainer">
		<header>
        	<h1 style="display: none;">Manuel Illescas Asociados</h1>
        	<div class="col span_2_of_4" style="margin :0; padding :0;">
            	<img style="margin-left: 5%; float:left;" src="img/logo.png" width="175" heigth="100"/>
            </div>
		</header>
        <nav>
        	<ul class="col span_5_of_5" style="margin :0; padding :0;">
            	<li class="col active span_1_of_5"><a href="index.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("inicio") ?></a></li>
                <li class="col span_1_of_5"><a href="firm.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("la firma") ?></a></li>
                <li class="col span_1_of_5"><a href="services.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("servicios") ?></a></li>
                <li class="col span_1_of_5"><a href="doc.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("documentacion") ?></a></li>
                <li class="col span_1_of_5"><a href="contact.php?lang=<?php echo $locale_lang;  ?>"><?php echo translator("contacto") ?></a></li>
            </ul>
        </nav>
        <div class="banner">
            <ul>
                <li style="background:#183A5B; "><img style="margin:0 auto; display:block;" src="img/gestion.svg" width="40%"><h2><?php echo translator("Gestión integral de las invenciones, desde el proyecto de I+D+i a su implementación en la sociedad") ?></h2></li>
                <li><img style="margin:0 auto; display:block;" src="img/elegir.svg" width="40%"><h2><?php echo translator("Elegir la protección más adecuada para cada invención, patentes, diseños, marcas, know-how") ?></h2></li>
                <li><img style="margin:0 auto; display:block;" src="img/market.svg" width="40%"><h2><?php echo translator("Vigilar el mercado y los competidores, seguimiento de nuevas solicitudes de patentes, diseños y marcas") ?></h2></li>
                <li><img style="margin:0 auto; display:block;" src="img/asesoramiento.svg" width="40%"><h2><?php echo translator("Asesoramiento legal, estudios de patentabilidad, infracciones, nulidad y violación de derechos") ?></h2></li>
                <li><img style="margin:0 auto; display:block;" src="img/especializacion.svg" width="40%"><h2><?php echo translator("Especialización, asesoramiento individualizado y personal, biotecnología, farmacia, química, biomedicina, energía, medioambiente, software-hardware") ?></h2></li>
            </ul>
		</div>
	</div>
	<div id="maincontentcontainer" style="background: #f2f2f2;">
		<div class="standardcontainer" id="example">
			<div class="maincontent">


				<div class="section group">
					<div class="col teaser span_1_of_3">
                    	<img src="img/laFirma.svg" width="50%"/>
                        <h3><?php echo translator("Firma") ?></h3>
                        <p><?php echo translator("Firma altamente especializada en patentes, especialmente en sectores tales como: biotecnología, química, farmacia, medicina, alimentación y energías alternativas. Ofrece un asesoramiento integral en materia de propiedad industrial a través de una estrecha colaboración con el cliente y bajo la supervisión de su socio director, Manuel Illescas.") ?></p>
					</div>
					<div class="col teaser span_1_of_3">
                    	<img src="img/servicios.svg" width="50%"/>
                        <h3><?php echo translator("Servicios") ?></h3>
                        <p><?php echo translator("Ayudamos al innovador a elegir la modalidad de protección más adecuada a cada invención, gracias a una extensa cartera de servicios tanto de tramitación como de información, en todas las modalidades de propiedad industrial. ") ?></p>
					</div>
					<div class="col teaser span_1_of_3">
                    	<img src="img/patentesModelos.svg" width="50%"/>
                        <h3><?php echo translator("Patentes y modelos de utilidad") ?></h3>
                        <p><?php echo translator("Análisis de los resultados de los proyectos de I+D+i asesorando, según las características del propio proyecto y su estado de desarrollo, sobre la modalidad de protección más adecuada y al menor coste, en el ámbito nacional e internacional. ") ?></p>
					</div>
				</div>

				<div class="section group">
					<div class="col teaser span_1_of_3">
                    	<img src="img/marcasDisegnos.svg" width="50%"/>
                        <h3><?php echo translator("Marcas y diseños") ?></h3>
                        <p><?php echo translator("Asesoramiento en la protección de nuevas marcas y diseños, minimizando los riegos de infracción de derechos de terceros. Presentación y trámite de registros, búsqueda de antecedentes. Asesoramiento y registro de nombres de dominio.") ?></p>
					</div>
					<div class="col teaser span_1_of_3">
                    	<img src="img/propiedadIntelectual.svg" width="50%"/>
                        <h3><?php echo translator("Propiedad Intelectual") ?></h3>
                        <p><?php echo translator("Desde MIA Patents protegemos los derechos de artistas y creadores, especialmente desarrollos de software, a través de estrategias de protección ad-hoc para cada caso que pueden incluir registros de propiedad intelectual. ") ?></p>
					</div>
					<div class="col teaser span_1_of_3">
                    	<img src="img/legal.svg" width="50%"/>
                        <h3><?php echo translator("Asesoría legal") ?></h3>
                        <p><?php echo translator("Amplia experiencia en asuntos legales relacionados con la defensa de derechos en tribunales, elaboración de dictámenes y segundas opiniones jurídicas, informes periciales, contratos y licencias. ") ?></p>
					</div>
				</div>



		</div>
	</div>
	<div id="footercontainer" style=" width: 100%; margin: 0 auto; background: #5F8AB4;">
		<footer style="padding: 20px;" >
            <div class="col span_1_of_3" style="margin:0 auto !important; padding: 0 !important; float:none;">
    			<p style="margin:0; padding:0; color: white; text-align: center"><?php echo translator("© Manuel Illescas Asociados 2014") ?></p>
            </div>
		</footer>
	</div>
</div>



	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->


	<!-- More Scripts-->
	<script src="js/responsivegridsystem.js"></script>
    <script src="js/unslider.min.js"></script>
	<script src="js/jquery.event.swipe.js"></script>
    <script>
		$(function() {
			$('.banner').unslider({
				speed: 500,               //  The speed to animate each slide (in milliseconds)
				delay: 3000,              //  The delay between slide animations (in milliseconds)
				complete: function() {},  //  A function that gets called after every slide animation
				keys: true,               //  Enable keyboard (left, right) arrow shortcuts
				dots: false,               //  Display dot navigation
				fluid: true              //  Support responsive design. May break non-responsive designs
			});
		});
		$('nav ul li').hover(function(){
			$(this).css('border-top', '10px solid white');
			$(this).css('background', '#183A5B');
/*			$(this).css('border-left', '1px solid collapse white');
			$(this).css('border-right', '1px solid collapse white');*/
			$(this).children('a').css('color', 'white');
		}, function(){
			$(this).css('border-top', '10px solid #568AAD');
			/*$(this).css('background', '#f2f2f2');*/
/*			$(this).css('border-left', '1px solid #9BABB3');
			$(this).css('border-right', 'none');*/
			if ( $( this ).is( '.active' ) ) {
				$(this).css('background', '#568AAD');
				$(this).children('a').css('color', '#f2f2f2');
			}
			else{
				$(this).css('background', '#f2f2f2');
				$(this).children('a').css('color', '#568AAD');
			}
		});
		
		$('.teaser').hover(
			function(){
				$(this).css('background', '#183A5B');
				$(this).children('p').css('color', 'white');
				$(this).css('border-bottom', '7.5px solid white');
				var src = $(this).children('img').attr("src").match(/[^\.]+/) + "_hover.svg";
            	$(this).children('img').attr("src", src);
			
			},
			function(){
				$(this).css('background', '#fff');
				$(this).children('p').css('color', '#183A5B');
				$(this).css('border-bottom', '7.5px solid #568AAD');
				var src = $(this).children('img').attr("src").replace("_hover.svg", ".svg");;
            	$(this).children('img').attr("src", src);
			}
		);
		
	</script>


</body>
</html>