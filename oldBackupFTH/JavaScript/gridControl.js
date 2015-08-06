/*working on easing and tholder with services-*/

$.getScript('jquery.easing.1.3.js');
$(function() {
	var wall = new freewall("#below");
	wall.reset({
		selector: '.brick',
		animate: true,
		cellW: 160,
		cellH: 160,
		delay: 50,
		
	});
	wall.fitWidth();
	var quienes ='<div class="contenido"><h2>¿Quienes somos?</h2><p>Somos profesionales de diferentes ámbitos del diseño, el marketing, la Comunicación, el derecho, la docencia, el sector financiero e inmobiliario y también somos supervivientes de cáncer. Nuestra experiencia profesional y personal nos ha enseñado a dar lo mejor de nosotros mismos en cada trabajo.</p><p>Aportamos nuestro granito de arena favoreciendo la integración laboral de los pacientes con cáncer y apoyando iniciativas que buscan mejorar su calidad de vida.</p><p>Nuestra meta no solo es ser la primera Agencia de Servicios en España sino la más eficaz, manteniendo un equipo profesional integrado, preparado para encarar los retos que plantea la crisis al sector terciario y capaz de llevar a cabo proyectos rentables pero muy creativos. Somos flexibles a los cambios del sector y realizaremos los ajustes necesarios en cada momento y respecto a cada cliente, que será tratado de forma individual y personalizada.</p><h2>Misión</h2><p>Promover el negocio de nuestros clientes como propio, aportando soluciones que generen valor añadido.</p><h2>Visión</h2><p>Ser parte esencial de sus planes estratégicos.<h2>Costes y Beneficios</h2><p>Tenemos muy presente la necesidad de nuestros clientes de reducir costes, optimizar recursos y minimizar el tiempo de cobro de sus trabajos.</p><p>Apostamos por una atención de 360º, creativa, eficaz que ofrezca soluciones originales, efectivas y adecuadas a su empresa u organización.</p><p>Para ello nos metemos en su piel y hacemos de su objetivo el nuestro.</p><h2>Método</h2><p>Trabajamos codo a codo con nuestros clientes, grandes, medianas, pequeñas empresas o autónomos, entendiendo sus necesidades y maximizando sus recursos.</p><p>Ponemos a disposición de nuestros clientes un equipo multidisciplinar que centrará su trabajo en ayudarles a rentabilizar su esfuerzo, permitiéndoles concentrarse en su negocio.</p><p>Ello requiere un profundo conocimiento de los servicios ofrecidos y una enorme capacidad de empatía con los directivos o empresarios en la gestión de sus recursos.</p></div>';
	var valorSocial='<div class="contenido"><h2>Valor Social</h2><p>En Fundaseth promovemos la integración laboral de los pacientes y sus cuidadores y empezamos por nosotros mismos: somos un equipo en el que el 80% de nuestros miembros son supervivientes de cáncer.</p><p>Usted también puede aportar su granito de arena.</p><h2>Fundación Carlos Garrido Garrido</h2><p>Constituida el 14 de julio de 2010.</p><p>Es una entidad de naturaleza fundacional, sin ánimo de lucro, creada para la ayuda a pacientes oncológicos, apoyo a las asociaciones de afectados por cáncer y fomento del progreso cultural y social.</p><p>Tiene carácter benéfico asistencial y fue constituida por razones de solidaridad con todas las personas afectadas por cáncer.</p><p>El fin principal de la Fundación es pues la ayuda a los pacientes oncológicos, pero además, la Fundación fomenta el progreso y desarrollo sostenible para la mejora de la calidad de vida de los ciudadanos.</p><p>En este sentido, promueve los servicios y la atención a personas con dependencia o en riesgo de exclusión por razones físicas, psíquicas, sociales, culturales o económicas y fomenta la educación y formación de los ciudadanos.</p><p>La Fundación Carlos Garrido Garrido ha colaborado desde su constitución con GEPAC, Grupo Español de Pacientescon Cáncer y con varias asociaciones que componen el grupo.</p></div>';
	var noticias ='<div class=" contenido"><h2>Noticias</h2><p>En esta sección le mantendremos al día con nuestros proyectos y noticias de interés.</p></div>';		
	var contacto ='<div class="contenido"><iframe style="float:right;" width="300" height="300" frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/place?q=Calle+de+Alejandro+Rodríguez,+32,+Madrid,+Spain&key=AIzaSyAlnKDtzJoIfHbA99KRyXgrxZc134M53wk"></iframe><h2>Contacto</h2><p></p><p>Fundaseth, S.L.</p><p>Calle Alejandro Rodriguez, 32</p><p>28039 - Madrid</p><p>Teléfono: 913.981.628</p><p>Para contactarnos, haga click <a id="go" rel="leanModal" name="signup" href="#signup">aqui</a>.</p><div id="signup"><div id="signup-ct"><div id="signup-header"><h2>Contacta con Fundaseth, S.L.</h2><a class="modal_close" href="#"></a></div><form name="contactform" action="contact.php" method="post"><div class="txt-fld"><label for="nombre">Nombre:</label><input id="nombre" name="nombre" type="text" required="required" /></div><div class="txt-fld"><label for="apellido">Apellidos:</label><input id="apellido"  name="apellido" type="text" required="required" /></div><div class="txt-fld"><label for="profesion">Profesión:</label><input id="profesion" name="profesion" type="text" /></div><div class="txt-fld"><label for="email">Email:</label><input id="email" name="email" type="email" required="required" /></div><div class="txt-fld"><label for="telefono">Teléfono:</label><input id="telefono" name="telefono" type="text" required="required"/></div><div class="txt-fld"><label for="">Comentarios:</label><textarea name="mensaje" cols="20" rows="4" required="required"></textarea></div><div class="btn-fld"><button type="submit">Enviar</button></div></form></div>';
	var empleo ='<div class="brick contenido"><h2>Empleo</h2><p>¿Quieres unirte al equipo de <strong>Fundaseth, S.L.</strong>?</p><p>Para enviarnos sus datos y CV, haga click <a id="go" rel="leanModal" name="signup" href="#signup" >aqui</a>.</p><div id="signup"><div id="signup-ct"><div id="signup-header"><h2>Contacta con Fundaseth, S.L.</h2></div><a class="modal_close" href="#"></a><form name="contactform" action="cvsend.php" method="post"  enctype="multipart/form-data"><div class="txt-fld"><label for="nombre">Nombre:</label><input id="nombre" required="required" name="nombre" type="text" /></div><div class="txt-fld"><label for="apellido">Apellidos:</label><input id="apellido" name="apellido" type="text" required="required" /></div><div class="txt-fld"><label for="profesion">Profesión:</label><input id="profesion" required="required" name="profesion" type="text" /></div><div class="txt-fld"><label for="email">Email:</label><input id="email" name="email" type="email" required="required" /></div><div class="txt-fld"><label for="telefono">Teléfono:</label><input id="telefono" name="telefono" type="text" required="required" /></div><div class="txt-fld"><label for="cv">CV:</label><input name="file" required="required" type="file"/></div><div class="txt-fld"></div><div class="btn-fld"><button type="submit">Enviar</button></div></form></div>';		
	var eventos ='<div class="contenido"><h2>Eventos</h2><p>Somos expertos en la producción de eventos, organizamos pequeñas reuniones, actividades en la calle, medianas conferencias, cursos formativos o multitudinarios congresos con participación de varios miles de personas. Y todo ello tanto a nivel nacional como internacional.</p><p>Utilizamos herramientas tecnológicas más innovadoras adaptándolas a las necesidades de nuestros clientes para garantizarles la máxima eficiencia y control. En este sentido hemos sido pioneros en la realización de webinarios, que permiten una mayor participación en cursos o conferencias.</p><p>Para cada actividad que encaramos, diseñamos un Plan General comprensivo de los parámetros básicos de la actividad.</p><img class="draggable" src="images/objetivos.png" width="150" height="150"/><img class="draggable"  src="images/local.png" width="150" height="150"/><img class="draggable" src="images/diseno.png" width="150" height="150"/><img class="draggable" src="images/taquilla.png" width="150" height="150"/><img class="draggable" src="images/proveedores.png" width="150" height="150"/><img  class="draggable" src="images/comymark.png" width="150" height="150"/><img class="draggable" src="images/permisos.png" width="150" height="150"/><img class="draggable" src="images/cierre.png" width="150" height="150"/><img class="draggable" src="images/evaluacion.png" width="150" height="150"/></div>';	
	var web ='<div class="contenido"><h2>Diseño y Desarrollo Web</h2><p>Construya una mejor experiencia digital con nosotros. Llevamos pasión por la estrategia, diseño y desarrollo web, y de medios sociales.</p><p>Como cliente, usted quiere estar seguro de que entendemos su idea, y que el resultado final cumplirá con sus requisitos. Nuestro equipo le inspirará confianza, y le permitirá hablar directamente con las personas que hacen el trabajo. De esta forma, usted puede seguir su proyecto en cada paso del camino.</p><p>Sean cuales sean sus metas de medios digitales, podemos ayudar a traerlos a la vida. Nuestro equipo tiene experiencia de trabajo en una amplia gama de proyectos. Trabajamos con las marcas, asociaciones industriales, la creación de empresas, agencias de relaciones públicas, pequeñas empresas y organizaciones sin fines de lucro.</p></div>';	
	var coworking ='<div class=" contenido"><h2><a href="http://www.fundawork.es" style="text-decoration:none;color:black;">Coworking - Fundawork</a></h2><img src="images/homeScreen.jpg" style="float:right; padding: 20px 20px 20px 20px;" width="202px" height="151px"/><p>Fundaseth se ha decidido a crear este espacio de trabajo para poder ofrecer a sus clientes, pequeñas empresa, autónomos y asociaciones, un lugar donde realizar su negocio o labor con unos costes muy asequibles y sin generar cargas de permanencia.</p><p>Se trata además de un espacio que aporta valor añadido a las personas instaladas, mediante la generación de sinergias profesionales.</p><p>En el Coworking de Fundaseth tiene a su disposición un puesto fijo de trabajo, que incluye todo lo necesario para desenvolver su labor, un servicio de recepción de llamadas, wifi, sala de reuniones, zona de vending o cocina, impresoras, fotocopiadoras, fax, servicio de limpieza y todo ello en un edificio exclusivo de oficinas situado en el entorno de la Ciudad Universitaria y con una boca de metro prácticamente en la puerta.</p><p>El compromiso se realiza mes a mes, lo que supone no tener que asumir periodos largos de obligado cumplimiento que muchas veces nos hacen desistir del desarrollo de un negocio.</p><p>Y además, trabajando en el Coworking, podrás beneficiarte de los servicios de Fundaseth, Asesoría Jurídica, Gestoría, Contabilidad, Diseño Gráfico, Servicios 2.0, Páginas Web, Publicidad, Formación y Organización de Eventos y Congresos. Servicios que para  nuestros coworkers emprendedores, tienen precios muy ajustados.</p><p>La zona de vending es idónea para conocerse, relacionarse y generar sinergias entre profesionales, pero fundamentalmente supone un lugar tranquilo para tomar un café, desconectar unos minutos y prepararse para volver al trabajo.</p></div>';	
	var servAd ='<div class=" contenido"><h2>Servicios Administrativos</h2><p>Pronto encontrará en esta sección los servicios que prestamos en el ámbito administrativo.</p></div>';	
	var formacion ='<div class=" contenido"><h2>Formación</h2><p>Para “crecer” necesitamos aprender. Ante cualquier nuevo reto ya sea de índole personal, laboral o lúdico, tenemos que echar mano de nuestros conocimientos y a veces tendremos suficiente con unas nociones básicas y otras deberemos convertirnos en auténticos estrategas. En Fundaseth somos muy conscientes de que una buena formación es vital a nivel personal y profesional.</p><p>Por ello llevamos años organizando eventos formativos muy heterogéneos; charlas especializadas dirigidas a un publico muy concreto y generalmente poco numeroso, cursos de formación básica para gente mayor, encuentros psicológicos, ciclos de conferencias, cursos de formación para directivos en empresas privadas, asociaciones o gerentes de entidades públicas.</p><p> Analizamos las necesidades de nuestros clientes y proponemos alternativas muy ajustadas al cumplimiento de sus objetivos.</p><p>Su empresa necesita un equipo sólido, capaz de ver oportunidades en los contratiempos, capaz de manejar situaciones extremas y trasmitir tranquilidad, capaz de dirigir.</p><p>Necesita que su personal se involucre y se conexione.</p><p>Y usted debe invertir en su persona, adquirir nuevos recursos y nuevas ideas.</p><p>Fundaseth organizara un curso formativo a medida. </p></div>';	
	var gestion ='<div class=" contenido"><h2>Gestión del Lujo</h2><p>¿Quieres sorprender a tus amigos, o clientes, con una cena especial en un entorno único?</p><p>¿Necesitas cambiar tu imagen para conseguir un mayor éxito social?</p><p>¿Necesita tu empresa, o vivienda particular, adquirir ese toque de representatividad que solo consigue un experto?</p><p>¿Ofrecerías a tus clientes un viaje formativo único, en el que generar relaciones sólidas?</p><p>¿Algún capricho?</p><p><i>Pídenoslo.</i></p></div>';	
	var serviciosBelow ='<div class=" contenido"><h2>Servicios</h2><p>Servicios ofrecidos por Fundaseth, S.L.</p></div>';	
	var services=false, who=false, value=false, news =false, contact = false, job = false, events = false, dev = false, cowork = false, adminServ = false, formation = false, managment = false;
	//Custom settings
	var style_in = 'easeOutBounce';
	var style_out = 'jswing';
	var speed_in = 1000;
	var speed_out = 300;	

	//Calculation for corners
	var neg = Math.round(125 / 2) * (-1);	
	var pos = neg * (-1);	
	var out = pos * 2;


	$.fn.setFlag = function(param){
		
		if(param===quienes){
			window.location.hash = 'quienes';
			who=true;
		}
		else{
			$(".quienes").find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".quienes").find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
			$(".quienes").find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".quienes").find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});	
			who=false;
		}
		if(param===valorSocial){
			window.location.hash = 'valorsocial';
			value=true;
		}
		else{
			$(".social").find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".social").find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
			$(".social").find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".social").find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});
			value=false;
		}
		if(param===noticias){
			window.location.hash = 'noticias';
			news=true;
		}
		else{
			$(".news").find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".news").find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
			$(".news").find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".news").find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});
			news=false;
		}
		if(param===contacto){
			window.location.hash = 'contacto';
			contact=true;
		}
		else{
			$(".contacto").find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".contacto").find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
			$(".contacto").find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".contacto").find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});
			contact=false;
		}
		if(param===empleo){
			window.location.hash = 'empleo';
			
			job=true;
		}
		else{
			$(".empleo").find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".empleo").find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
			$(".empleo").find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
			$(".empleo").find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});
			job=false;
		}
		if(param===eventos){
			window.location.hash = 'eventos';
			events=true;
		}
		else{
			events=false;
		}
		if(param===web){
			window.location.hash = 'web';
			dev=true;
		}
		else{
			dev=false;
		}
		if(param===coworking){
			window.location.hash = 'coworking';
			cowork=true;
		}
		else{
			cowork=false;
		}
		if(param===servAd){
			window.location.hash = 'administracion';
			adminServ=true;
		}
		else{
			adminServ=false;
		}
		if(param===formacion){
			window.location.hash = 'formacion';
			formation=true;
		}
		else{
			formation=false;
		}
		if(param===gestion){
			window.location.hash = 'gestionlujo';
			managment=true;
		}
		else{
			managment=false;
		}
		if(param===serviciosBelow){
			window.location.hash = 'servicios';
			services=true;
		}
		else{
			services=false;
		}
	};
	$.fn.gridControl = function(param,flag) {
		$( '#below' ).empty();
		if(!flag){
			$('#grid > .services ').children().animate({width: "125px"},400);
			$('#grid > .services ').children().find('.tholder').animate({width: "125px"},400);
		}
		$(this).setFlag(param);
		wall.appendBlock(param);
		
		
	};
	//MENU BEHAVIOR
	$('.quienesmenu').click(function() {
		if(!who){
			$(".quienes").find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".quienes").find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(".quienes").find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".quienes").find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(this).gridControl(quienes,false);
			
		}
		
	});
	$('.servicesmenu').click(function() {
		$('#grid > .services ').children().animate({width: "250px"},400);
		if(!services){
			$(this).gridControl(serviciosBelow,true);
		}
		
	});
	$('.valormenu').click(function() {
		if(!value){
			$(".social").find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".social").find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(".social").find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".social").find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(this).gridControl(valorSocial,false);
		}
	});
	$('.newsmenu').click(function() {
		if(!news){
			$(".news").find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".news").find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(".news").find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".news").find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(this).gridControl(noticias,false);
		}
	});
	$('.contactomenu').click(function() {
		if(!contact){
			$(".contacto").find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".contacto").find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(".contacto").find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});	
			$(".contacto").find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});	
			$(this).gridControl(contacto,false);
		}
	});
	//GRID BEHAVIOR HORIZONTAL
	$('.quienes').hover(function() {
	if(!who){
		$('.quienes').find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		$('.quienes').find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		$('.quienes').find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		$('.quienes').find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});			
		}
	});
	$('.quienes ').click(function() {
	if(!who){
				$(this).gridControl(quienes,false);
			}
	});
	$('.social ').click(function() {	
		if(!value){
			$(this).gridControl(valorSocial,false);
		}
	});
	$('.social').hover(function() {
	  if(!value){
		  $('.social').find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.social').find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		  $('.social').find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.social').find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});			
		  }
	});
	$('.news').click(function() {
		if(!news){
			$(this).gridControl(noticias,false);
		}
	});
	$('.news').hover(function() {
	  if(!news){
		  $('.news').find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.news').find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		  $('.news').find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.news').find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});			
		  }
	});
	$('.contacto ').click(function() {
		if(!contact){
			$(this).gridControl(contacto,false);
		}
	});
		$('.contacto').hover(function() {
	  if(!contact){
		  $('.contacto').find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.contacto').find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		  $('.contacto').find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.contacto').find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});			
		  }
	});
		$('.empleo').click(function() {
		if(!job){
			$(this).gridControl(empleo,false);
		}
	});
	$('.empleo').hover(function() {
	  if(!job){
		  $('.empleo').find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.empleo').find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		  $('.empleo').find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		  $('.empleo').find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});			
		  }
	});

	//GRID BEHAVIOR VERTICAL (SERVICES)
	$('.eventos img').click(function() {
		if(!events){
			$('#grid > .services .eventos ').animate({width: "250px"},400);
			$('#grid > .services .eventos ').siblings().not('#grid > .services .eventos ').animate({width: "125px"},400);
			$(this).gridControl(eventos,true);
		}
	});
	$('.eventos .tholder').click(function() {
		if(!events){
			$('#grid > .services .eventos ').animate({width: "250px"},400);
			$('#grid > .services .eventos ').siblings().not('#grid > .services .eventos ').animate({width: "125px"},400);
			$(this).gridControl(eventos,true);
		}
	});
	$('.web img').on('click',function() {
		if(!dev){
			$('#grid > .services .web ').animate({width: "250px"},400);
			$('#grid > .services .web ').siblings().not('#grid > .services .web ').animate({width: "125px"},400);
			$(this).gridControl(web,true);
		}
	});
	$('.web .tholder').on('click',function() {
		if(!dev){
			$('#grid > .services .web ').animate({width: "250px"},400);
			$('#grid > .services .web ').siblings().not('#grid > .services .web ').animate({width: "125px"},400);
			$(this).gridControl(web,true);
		}
	});
	$('.coworking img').click(function() {
		if(!cowork){
			$('#grid > .services .coworking ').animate({width: "250px"},400);
			$('#grid > .services .coworking ').siblings().not('#grid > .services .coworking ').animate({width: "125px"},400);
			$(this).gridControl(coworking,true);
		}
	});
	$('.coworking .tholder').click(function() {
		if(!cowork){
			$('#grid > .services .coworking ').animate({width: "250px"},400);
			$('#grid > .services .coworking ').siblings().not('#grid > .services .coworking ').animate({width: "125px"},400);
			$(this).gridControl(coworking,true);
		}
	});
	$('.servAdmin img').click(function() {
		if(!adminServ){
			$('#grid > .services .servAdmin ').animate({width: "250px"},400);
			$('#grid > .services .servAdmin ').siblings().not('#grid > .services .servAdmin ').animate({width: "125px"},400);
			$(this).gridControl(servAd,true);
		}
	});		
	$('.servAdmin .tholder').click(function() {
		if(!adminServ){
			$('#grid > .services .servAdmin ').animate({width: "250px"},400);
			$('#grid > .services .servAdmin ').siblings().not('#grid > .services .servAdmin ').animate({width: "125px"},400);
			$(this).gridControl(servAd,true);
		}
	});
	$('.formacion img').click(function() {
		if(!formation){
			$('#grid > .services .formacion ').animate({width: "250px"},400);
			$('#grid > .services .formacion ').siblings().not('#grid > .services .formacion ').animate({width: "125px"},400);
			$(this).gridControl(formacion,true);
		}
	});
	$('.formacion .tholder').click(function() {
		if(!formation){
			$('#grid > .services .formacion ').animate({width: "250px"},400);
			$('#grid > .services .formacion ').siblings().not('#grid > .services .formacion ').animate({width: "125px"},400);
			$(this).gridControl(formacion,true);
		}
	});
	$('.gestion img').click(function() {
		if(!managment){
			$( '#below' ).empty();
			$('#grid > .services .gestion ').animate({width: "250px"},400);
			$('#grid > .services .gestion ').siblings().not('#grid > .services .gestion ').animate({width: "125px"},400);
			$(this).gridControl(gestion,true);
		}
	});
	$('.gestion .tholder').click(function() {
		if(!managment){
			$( '#below' ).empty();
			$('#grid > .services .gestion ').animate({width: "250px"},400);
			$('#grid > .services .gestion ').siblings().not('#grid > .services .gestion ').animate({width: "125px"},400);
			$(this).gridControl(gestion,true);
		}
	});
});
