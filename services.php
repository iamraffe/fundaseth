<?php
	$page = 2;
	$url = 'services.php';
	require_once("languages.php");
    include_once('header.php');
?>
	</div>
    <div id="maincontentcontainer">
    <h1 style="display: none;">Fundaseth</h1>
        <div class="standardcontainer">
            <div class="maincontent">
           	  <div class="section group sectionTitle">
                	<h2><?php echo translator("Servicios") ?></h2>
                </div>              
            
                <div class="section group" style="padding: 5%; font-size: 125%;">
                     <h3><?php echo translator("Cada proyecto es tan variado como los clientes detras de ellos.") ?></h3>
                </div>
                <div class="section group" style="margin-top:-2.5%;">
                	<div id="santiago-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Santiago de Compostela") ?></h4>
                        <p><?php echo translator("El Camino de Santiago es la ruta de peregrinación más importante de Europa y está declarada por la UNESCO Patrimonio de la Humanidad.") ?></p>
                        <p><?php echo translator("El Camino de Santiago ha sido y es un fenómeno cultural, religioso y sociológico sin parangón en el mundo, a la vez que una experiencia individual de enorme calado para los pregrinos que, animados por un deseo de transformación interior y de encuentro con lo trascendente, han recorrido durante siglos la mítica ruta Jacobea, un camino plagado de claves simbólicas de profundo significado.") ?></p>
                        <p><?php echo translator("Si te interesa saber más sobre el Camino, haz click")?><a href="http://tucaminoasantiago.com" target="_blank"><?php echo translator(" aquí")?></a></p>
                    </div>
                    <div id="cantabria-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Cantabria") ?></h4>
                        <p><?php echo translator("Cantabria es una de las comunidades más elegantes y bellas de la costa norte de España y el destino ideal para visitar en verano. Tanto el mar como la montaña están presentes en esta comunidad que enamora a los visitantes por su gran diversidad paisajística.") ?></p>
                        <p><?php echo translator("Cuenta con más de doscientos kilómetros de litoral y villas marineras, y posee uno de los patrimonios artísticos rupestres más importantes del mundo.") ?></p>
                        <p><?php echo translator("Se caracteriza también por una múltiple variedad de paisajes de alta montaña y valles de inigualable belleza con espacios naturales protegidos.") ?></p>
                        <p><?php echo translator("No debemos olvidar que su privilegiado enclave le permite disponer de materias primas de excelente calidad provenientes tanto del mar como de la tierra.") ?></p>
                        <p><?php echo translator("Si te apetece conocer más sobre Cantabria, haz click") ?><a href="includes/cantabria.pdf" target="_blank"><?php echo translator(" aquí")?></a></p>
                    </div>
                    <div id="viena-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Viena") ?></h4>
                        <p><?php echo translator("La Orquesta Mozart de Viena, fundada en1986, consta de 30 miembros de las mejores orquestas y grupos de cámara vienesas. Sus músicos se dedican exclusivamente a la obra del gran maestro de Salzburgo, quien eligió como domicilio la ciudad de viena. Además de las obras sinfónicas de Wolfgang Amadeus Mozart la orquesta interpreta numerosos conciertos para instrumentos solistas (conciertos para violín, piano e instrumentos de viento) así como arias y duetos de sus más famosas óperas.") ?></p>
                        <p><?php echo translator("La escenificación con vestuario del siglo XVII es un atractivo muy especial de los Conciertos Mozart de Viena. La selección del programa, los trajes de época y las pelucas, el entusiasmo de los músicos y el típico ambiente vienés crean una atmósfera capaz de trasladar el público al siglo XVIII.") ?></p>
                        <p><?php echo translator("Los Conciertos Mozart de Viena constituyen un punto fijo en el programa de las ofertas culturales y se han convertido en un acontecimiento inseparable de la vida cultural y musical de esta ciudad.") ?></p>
                        <p><?php echo translator("Si quieres saber más sobre Viena, haz click") ?><a href="includes/viena.pdf" target="_blank"><?php echo translator(" aquí")?></a></p>
                    </div>
                    <div id="cadiz-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Cádiz") ?></h4>
                        <p><?php echo translator("La provincia de Cádiz, privilegiada y singular, reúine todos los atractivos que puedan apetecer para quienes valoran el turismo en su verdadera dimensión cultural y festiva, ecológica y monumental y esencialmente andaluza.") ?></p>
                        <p><?php echo translator("Los numerosos restaurantes, bares, marisquerías, tabernas y \"chiringuitos\" nos dan la oportunidad de probar una variada gastronomía y sus excelentes vinos: finos, amontillados, olorosos, manzanillas, así como sus brandies criados en la provincia, y que dan un especial carácter a esta tierra.") ?></p>
                        <p><?php echo translator("Posee la provincia una gran variedad de espacios naturales de excepcional riqueza ecológica. Zonas húmedas y sectores costeros todavía intactos, que se han sabido mantener respetando su entorno.") ?></p>
                    </div>
					<div id="web-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Diseño y Desarrollo Web") ?></h4>
                        <p><?php echo translator("Construya una mejor experiencia digital con nosotros. Llevamos pasión por la estrategia, diseño y desarrollo web, y de medios sociales.") ?></p>

						<p><?php echo translator("Como cliente, usted quiere estar seguro de que entendemos su idea, y que el resultado final cumplirá con sus requisitos. Nuestro equipo le inspirará confianza, y le permitirá hablar directamente con las personas que hacen el trabajo. De esta forma, usted puede seguir su proyecto en cada paso del camino.") ?></p>

						<p><?php echo translator("Sean cuales sean sus metas de medios digitales, podemos ayudar a traerlos a la vida. Nuestro equipo tiene experiencia de trabajo en una amplia gama de proyectos. Trabajamos con las marcas, asociaciones industriales, la creación de empresas, agencias de relaciones públicas, pequeñas empresas y organizaciones sin fines de lucro.") ?></p>
                        
                    </div>
                    <div id="coworking-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Coworking: Fundawork") ?></h4>

                        <p><?php echo translator("Fundaseth se ha decidido a crear este espacio de trabajo para poder ofrecer a sus clientes, pequeñas empresa, autónomos y asociaciones, un lugar donde realizar su negocio o labor con unos costes muy asequibles y sin generar cargas de permanencia.") ?></p>

						<p><?php echo translator("Se trata además de un espacio que aporta valor añadido a las personas instaladas, mediante la generación de sinergias profesionales.") ?></p>

						<p><?php echo translator("En el Coworking de Fundaseth tiene a su disposición un puesto fijo de trabajo, que incluye todo lo necesario para desenvolver su labor, un servicio de recepción de llamadas, wifi, sala de reuniones, zona de vending o cocina, impresoras, fotocopiadoras, fax, servicio de limpieza y todo ello en un edificio exclusivo de oficinas situado en el entorno de la Ciudad Universitaria y con una boca de metro prácticamente en la puerta.") ?></p>
                        
						<p><?php echo translator("El compromiso se realiza mes a mes, lo que supone no tener que asumir periodos largos de obligado cumplimiento que muchas veces nos hacen desistir del desarrollo de un negocio.") ?></p>
                        
                        <p><?php echo translator("Y además, trabajando en el Coworking, podrás beneficiarte de los servicios de Fundaseth, Asesoría Jurídica, Gestoría, Contabilidad, Diseño Gráfico, Servicios 2.0, Páginas Web, Publicidad, Formación y Organización de Eventos y Congresos. Servicios que para nuestros coworkers emprendedores, tienen precios muy ajustados.") ?></p>
                        
                        <p><?php echo translator("La zona de vending es idónea para conocerse, relacionarse y generar sinergias entre profesionales, pero fundamentalmente supone un lugar tranquilo para tomar un café, desconectar unos minutos y prepararse para volver al trabajo.") ?></p>
                    
                        <p><a href="http://fundawork.fundaseth.es" title="Fundawork">Fundawork</a>    
                    </div>
                    <div id="event-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Eventos") ?></h4>
                        <p><?php echo translator("Somos expertos en la producción de eventos, organizamos pequeñas reuniones, actividades en la calle, medianas conferencias, cursos formativos o multitudinarios congresos con participación de varios miles de personas. Y todo ello tanto a nivel nacional como internacional.") ?></p>

						<p><?php echo translator("Utilizamos herramientas tecnológicas más innovadoras adaptándolas a las necesidades de nuestros clientes para garantizarles la máxima eficiencia y control. En este sentido hemos sido pioneros en la realización de webinarios, que permiten una mayor participación en cursos o conferencias.") ?></p>

						<p><?php echo translator("Para cada actividad que encaramos, diseñamos un Plan General comprensivo de los parámetros básicos de la actividad.") ?></p>
                    </div>
                    <div id="lux-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Gestión del lujo") ?></h4>
                        <p><?php echo translator("Fundaseth eleva a la categoría del lujo cualquier actividad cotidiana. Todo tiene que ser perfecto y para ello nos convertimos en un escrupuloso mayordomo siempre pendiente y leal, un cuidadoso conductor que tendrá a punto el coche y esperará paciente, un minucioso jefe de mantenimiento que acondicionará los espacios para cada ocasión, la amiga o amigo modelo para salir de compras, el conocido que consigue esa codiciosa entrada a la final o concierto y la secretaria fiel a la que encargar viajes, cenas, regalos y cualquier capricho que pueda tener.") ?></p>

						<p><?php echo translator("Agasajar a un cliente con elegancia puede ser lo que distinga a su empresa. Fundaseth examina minuciosamente al destinatario y diseña el regalo más apropiado para cada persona y ocasión.") ?></p>

						<p><?php echo translator("¿Quiere sorprender a sus amigos o clientes con una cena especial en un entorno único? Fundaseth le propone espacios ayudándole a generar la atmosfera y el ambiente deseado. Cuidaremos hasta el último detalle, ese que hace que su cita sea un éxito.") ?></p>
                        
						<p><?php echo translator("¿Desea cambiar su imagen para conseguir un mayor éxito social o profesional? Puede ser mucho más fácil de lo que imagina. Usted puede proyectar salud, bienestar, elegancia, sabiduría, bondad… para ello debe gestionar su actitud y fundamentalmente su apariencia exterior. Fundaseth puede guiarle en el cambio, consiguiendo el reflejo exacto de la imagen que desea mostrar.") ?></p>
                        
                        <p><?php echo translator("¿Necesita su empresa o vivienda particular adquirir ese toque de representatividad que solo consigue un experto? No es necesario gastar una fortuna para conseguir un ambiente elegante y funcional, ponemos a su disposición el ojo del profesional que evaluará el espacio y aportará recursos con resultados espectaculares.") ?></p>
                        
                        <p><?php echo translator("¿Ofrecerías a tus clientes un viaje formativo único en el que generar relaciones sólidas? Nada más efectivo para consolidar una relación de trabajo que alejarse del entorno profesional. Fundaseth puede organizar el curso adecuado en prestigiosas universidades de Europa o Estados Unidos, gestionar los desplazamientos y el alojamiento de los asistentes y proponer actividades de ocio complementarias.") ?></p>
                    </div>
                    <div id="secretaria-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Secretaría técnica") ?></h4>
                        <p><?php echo translator("Una empresa necesita contestar llamadas, gestionar clientes, diseñar proyectos, realizar presentaciones, llevar al día documentos oficiales, emitir y recibir facturas, tener presencia en las redes… y para ello precisa contratar personas con diferentes perfiles, hacer una buena selección, buscar una oficina donde establecer su sede, adquirir mobiliario, ordenadores, impresoras, material de oficina… ") ?></p>

						<p><?php echo translator("Fundaseth es la solución alternativa. ") ?></p>

						<p><?php echo translator("Nos encargamos de contestar sus llamadas, con simpatía y educación. Como su asistente personal, haremos un filtrado de mensajes y tendrá siempre información exacta de quien desea contactar con usted y los motivos de su llamada. En su nombre gestionaremos citas y recibiremos o enviaremos cartas y paquetes. Nos coordinaremos para llevar su agenda al día, añadiendo a la base de datos contactos y actas de reunión. Atenderemos a sus visitas con amabilidad, reservando la sala de reuniones, preparando el material adecuado, ofreciendo café o agua…") ?></p>
                        
						<p><?php echo translator("Redactaremos su correo, ordinario o email, le ayudaremos a crear presentaciones, newsletters, propuestas individualizadas y presupuestos. Somos expertos en comunicación empresarial escrita, utilizamos el protocolo adecuado a cada cliente y ocasión y mostramos de forma atractiva la información que usted necesita transmitir.") ?></p>
                        
                        <p><?php echo translator("Gestionaremos su facturación. Recibirá facturas que nosotros archivaremos para su correcta liquidación trimestral y deberá emitir facturas a sus clientes, llevando al día sus obligaciones fiscales.") ?></p>
                        
                        <p><?php echo translator("Mantendremos al día su página web y actualizaremos su aparición en redes sociales, redactando blogs o entradas de Facebook, mensajes de Twitter o debates en Linkedin.") ?></p>
                    </div>
                    <div id="travel-popup" class="white-popup mfp-hide">
                    	<h4><?php echo translator("Viajes") ?></h4>
                        
                        <ul class="grid cs-style-1">
                            <li style="background:#D64541;">
                                <figure class="webFigure">
                                    <img class="serviceImage" src="img/santiagoService.svg"  alt="Servicio Web">
                                    <figcaption style="background:#F1C40F;">
                                        <h3><?php echo translator("Santiago de Compostela") ?></h3>
                                        <span><?php echo translator("Tenemos una propuesta de ocio diferente") ?></span>
                                        <a href="mobile-friendly-page.html" data-mfp-src="#santiago-popup" class="open-popup-link not-finger"><img class="readMore" src="img/readMore.svg" alt="Saber más"/></a>
                                        
                                    </figcaption>
                                </figure>
                                <a href="mobile-friendly-page.html" data-mfp-src="#santiago-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                            </li>
                            <li style="background:#F1C40F;">
                                <figure class="webFigure">
                                    <img class="serviceImage" src="img/cantabriaService.svg"  alt="Servicio Web">
                                    <figcaption style="background:#D64541;">
                                        <h3><?php echo translator("Cantabria") ?></h3>
                                        <span><?php echo translator("Descubriendo Cantabria") ?></span>
                                        <a href="mobile-friendly-page.html" data-mfp-src="#cantabria-popup" class="open-popup-link not-finger"><img class="readMore" src="img/readMore.svg" alt="Saber más"/></a>
                                        
                                    </figcaption>
                                </figure>
                                <a href="mobile-friendly-page.html" data-mfp-src="#cantabria-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                            </li>
                            <li style="background:#F1C40F;">
                                <figure class="webFigure">
                                    <img class="serviceImage" src="img/vienaService.svg"  alt="Servicio Web">
                                    <figcaption style="background:#D64541;">
                                        <h3><?php echo translator("Viena") ?></h3>
                                        <span><?php echo translator("¿Te gusta la música? Asiste con nosotros a la Ópera") ?></span>
                                        <a href="mobile-friendly-page.html" data-mfp-src="#viena-popup" class="open-popup-link not-finger"><img class="readMore" src="img/readMore.svg" alt="Saber más"/></a>
                                        
                                    </figcaption>
                                </figure>
                                <a href="mobile-friendly-page.html" data-mfp-src="#viena-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                            </li>
                            <li style="background:#D64541;">
                                <figure class="webFigure">
                                    <img class="serviceImage" src="img/cadizService.svg"  alt="Servicio Web">
                                    <figcaption style="background:#F1C40F;">
                                        <h3><?php echo translator("Cádiz") ?></h3>
                                        <span><?php echo translator("Vive Cádiz todo a tu alcance") ?></span>
                                        <a href="mobile-friendly-page.html" data-mfp-src="#cadiz-popup" class="open-popup-link not-finger"><img class="readMore" src="img/readMore.svg" alt="Saber más"/></a>
                                        
                                    </figcaption>
                                </figure>
                                <a href="mobile-friendly-page.html" data-mfp-src="#cadiz-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                            </li>
                        </ul>
                        
                        <!--<p><?php echo translator("Fundaseth no es una agencia de viajes, no tiene una base de datos con millones de vuelos, no opera con una infinidad de hoteles repartidos por todo el mundo, no organiza viajes en serie para personas sin más identidad que un dni.") ?></p>

						<p><?php echo translator("En Fundaseth somos artesanos del ocio, buscamos los recorridos y  lugares apropiados al momento, persona o grupo. Escudriñamos el paisaje y como si de un terrón de arcilla se tratara, los sopesamos bien y lo lanzamos a la rueda del torno para modelar una nueva aventura. Humedecemos las manos y comprimimos la arcilla, urdiendo el hospedaje perfecto para la ocasión. El torno sigue girando, introducimos suavemente el pulgar y empezamos a diseñar actividades sorprendentes, el proceso es laborioso pero merece la pena. Apretamos formando base y paredes, con ambas manos levantamos la marga y estrechamos el cuello. Una vez más hemos diseñado la excursión que se ajusta al viajero pero la obra no está terminada, la perfección radica en los últimos detalles.") ?></p>

						<p><?php echo translator("Fundaseth proyecta viajes por encargo, adecuando cada pormenor a las circunstancias del grupo. Somos artistas o artesanos del ocio, llevamos muchos años haciendo posible que personas con salud delicada se atrevan a recorrer tierras lejanas cumpliendo viejos sueños. Analizamos el grupo y como el buen alfarero, potenciamos su cohesión evitando que la pieza se abocarde.") ?></p>
                        
						<p><?php echo translator("En Fundaseth sabemos que viajar es disfrutar, conocer o reconocer nuevos parajes, olvidarse del tiempo, transitar por ciudades extrañas, explorar monumentos, visitar viejas iglesias, vagar por montes, navegar… Sin prisa, eligiendo la soledad del momento pero siempre protegido y cuidado.") ?></p>
                        
                        <p><?php echo translator("Hemos recorrido España y en cada ocasión la belleza de sus pueblos nos ha conquistado. Somos afortunados, nuestro país tiene una gran cultura, ahí, al alcance de la mano. Y a tiro piedra la vieja Europa, imponente y pequeña a la vez.  Fundaseth investiga para ti cada rincón y te propone optimizar tu tiempo libre. Con amigos, con tu pareja, a tu aire, en hoteles de lujo, en albergues, en zonas rurales, en ciudades, en avión, en autobús… Fundaseth adapta el viaje al grupo, tu eliges el destino y nosotros te llevamos la maleta.") ?></p>-->
                    </div>
                    <ul class="grid cs-style-1">
                        <li style="background:#F1C40F;">
                            <figure class="webFigure">
                                <img class="serviceImage" src="img/webService.svg"  alt="Servicio Web">
                                <figcaption style="background:#D64541;">
                                    <h3><?php echo translator("Diseño y Desarrollo Web") ?></h3>
                                    <span><?php echo translator("Nuestro enfoque: Ayudarle a llevar sus historias a la vida a través del diseño.") ?></span>
                                    <a href="mobile-friendly-page.html" data-mfp-src="#web-popup" class="open-popup-link not-finger"><img class="readMore" src="img/readMore.svg" alt="Saber más"/></a>
                                    
                                </figcaption>
                            </figure>
                            <a href="mobile-friendly-page.html" data-mfp-src="#web-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                        </li>
                        <li style="background:#D64541;">
                            <figure>
                                <img class="serviceImage" src="img/eventService.svg"  alt="Organización de eventos">
                                <figcaption style="background:#F1C40F;">
                                    <h3><?php echo translator("Eventos") ?></h3>
                                    <span><?php echo translator("Planificamos cada mínimo detalle y abordamos el evento de manera integral.") ?></span>
                                    <a href="mobile-friendly-page.html" data-mfp-src="#event-popup" class="open-popup-link not-finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                                </figcaption>
                                
                            </figure>
                            <a href="mobile-friendly-page.html" data-mfp-src="#event-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                        </li>
                        <li style="background:#D64541;">
                            <figure>
                                <img class="serviceImage" src="img/viajeService.svg"  alt="Organización de viajes">
                                <figcaption style="background:#F1C40F;">
                                    <h3><?php echo translator("Viajes") ?></h3>
                                    <span><?php echo translator("En Fundaseth somos artesanos del ocio, buscamos los recorridos y  lugares apropiados al momento, persona o grupo.") ?></span>
                                    <a href="mobile-friendly-page.html" data-mfp-src="#travel-popup" class="open-popup-link not-finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                                </figcaption>
                                
                            </figure>
                            <a href="mobile-friendly-page.html" data-mfp-src="#travel-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                        </li>
                        <li style="background:#F1C40F;">
                            <figure>
                                <img class="serviceImage" src="img/coworkingService.svg"  alt="Coworking">
                                <figcaption style="background:#D64541;">
                                    <h3><?php echo translator("Coworking") ?></h3>
                                    <span><?php echo translator("Un centro de coworking es un espacio destinado para emprendedores.") ?></span>
                                    <a href="mobile-friendly-page.html" data-mfp-src="#coworking-popup" class="open-popup-link not-finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                                </figcaption>
                                
                            </figure>
                            <a href="mobile-friendly-page.html" data-mfp-src="#coworking-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                        </li>
                        <li style="background:#F1C40F;">
                            <figure>
                                <img class="serviceImage" src="img/secretariaService.svg"  alt="Secretaria tecnica">
                                <figcaption style="background:#D64541;">
                                    <h3><?php echo translator("Secretaría") ?></h3>
                                    <span><?php echo translator("Somos expertos en comunicación empresarial escrita, utilizamos el protocolo adecuado a cada cliente y ocasión y mostramos de forma atractiva la información que usted necesita transmitir.") ?></span>
                                    <a href="mobile-friendly-page.html" data-mfp-src="#secretaria-popup" class="open-popup-link not-finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                                </figcaption>
                                
                            </figure>
                            <a href="mobile-friendly-page.html" data-mfp-src="#secretaria-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                        </li>
                        <li style="background:#D64541;">
                            <figure>
                                <img class="serviceImage" src="img/luxService.svg"  alt="Gestión del lujo">
                                <figcaption style="background:#F1C40F;">
                                    <h3><?php echo translator("Gestión del lujo") ?></h3>
                                    <span><?php echo translator("Fundaseth eleva a la categoría del lujo cualquier actividad cotidiana. Todo tiene que ser perfecto y para ello nos convertimos en un escrupuloso mayordomo siempre pendiente y leal.") ?></span>
                                    <a href="mobile-friendly-page.html" data-mfp-src="#lux-popup" class="open-popup-link not-finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                                </figcaption>
                                
                            </figure>
                            <a href="mobile-friendly-page.html" data-mfp-src="#lux-popup" class="open-popup-link finger"><img src="img/readMore.svg" class="readMore" alt="Saber más"/></a>
                        </li> 
                    </ul>
                </div>  

            </div>
         </div>
    </div>
<?php require_once('footer.php') ?>