<?php
	$page = 2;
	require_once('languages.php');
    include_once('header.php');
?> 
	<div id="maincontentcontainer" style="background: #2980b9; border-top: 20px solid white; ">
		<div class="standardcontainer" style="margin-top: -20px;">
			<div class="maincontent" style="background: #F6F6F6; padding: 25px; padding-top: 0;  min-height: 350px;">
				<div class="section group" id="daySelect">
					<ul>
                    	<li id="day1" class="day active"><?php echo translator("Día 1") ?></li>
                        <li id="day2" class="day"><?php echo translator("Día 2") ?></li>
                        <li id="day3" class="day"><?php echo translator("Día 3") ?></li>
                        <li id="day4" class="day"><?php echo translator("Día 4") ?></li>
                        <li id="day5" class="day"><?php echo translator("Día 5") ?></li>
                        <li id="day6" class="day"><?php echo translator("Día 6") ?></li>
                    </ul>
                </div>
                <div class="section group dayText " id="day1Text">
                	<h4><?php echo translator("SARRIA – PORTOMARÍN") ?></h4>
                	<div class="col span_3_of_4"> 
						<img src="img/firstDay.svg" alt="Itinerario primer día">
                    </div>
                    
                	<div class="col span_1_of_4">
                    	<h5><?php echo translator("Tiempo 5h 30’") ?></h5>
                        <h5><?php echo translator("Dificultad: Baja.") ?></h5>
                        <h5><?php echo translator("Distancia: 22km") ?></h5>
                        <h5><?php echo translator("Etapa fácil y con suaves desniveles.") ?></h5>
                    </div>  
                    <div class="col dayDescription">
                        <p><?php echo translator("Salimos de Sarria por el puente medieval Ponte Aspera, sobre el río Pequeño. Poco después cruzamos la vía del tren y pasamos bajo el viaducto de una autovía. Seguimos entre robles y pinos hasta Barbadelo.") ?></p>
                        <p><?php echo translator("En Barbadelo encontramos la iglesia de Santiago, del siglo XII, que antiguamente formaba parte de un monasterio. Magnífico ejemplo del románico gallego en el que destaca la iconografía del pórtico.") ?></p>
                        <p><?php echo translator("Continuamos cruzando muchas pequeñas aldeas y caminaremos a través de una serie de senderos, pistas, corredoiras y carreteras secundarias. Atravesamos Rente, Mercado da Serra, Peruscallo, Cortiñas, Lavandeira y A Brea. Aquí encontramos el mojón de piedra que señala que tan sólo quedan 100 kilómetros. A continuación pasamos por la parroquia de  Morgade y un kilómetro más tarde llegamos a Ferreiros.") ?></p>
                        <p><?php echo translator("Salimos por la carretera y más adelante continuamos por senderos y pistas de tierra, con suaves desniveles. Pasamos por Mirallos, A Pena, Mercadoiro, A Parrocha y llegamos a Vilachá, desde donde ya vemos Portomarín, a orillas del río Miño. Cerca de Vilachá, y apartado del camino, se encuentran los restos del monasterio de Loio, donde se fundó, en el siglo XII, la importante orden de Santiago con la noble finalidad de proteger a los peregrinos. ") ?></p>
                        <p><?php echo translator("La entrada a la ciudad de Portomarín se hace por uno de los arcos del viejo puente romano-medieval, reconstruido para asentar una escalinata y colocar una pequeña capilla.") ?></p>
                        <p><?php echo translator("La antigua ciudad de Portomarín desapareció en 1963 sumergida por las aguas del embalse de Belesar, debido a la construcción de una central hidroeléctrica. A la ciudad actual se trasladaron las edificaciones de mayor interés histórico y cultural como iglesia de San Nicolás (siglo XII), construida por la orden de Malta, el pórtico románico (siglo XII) de la iglesia de San Pedro y el Pazo de Berbetoros (siglo XVII).") ?></p>
                    </div>                  
				</div>
                <div class="section group dayText" id="day2Text">
                	<h4><?php echo translator("PORTOMARÍN - PALAS DE REI") ?></h4>
                	<div class="col span_3_of_4"> 
						<img src="img/secondDay.svg" alt="Itinerario segundo día">
                    </div>
                    
                	<div class="col span_1_of_4">
                    	<h5><?php echo translator("Tiempo: 6h 15’ ") ?></h5>
                        <h5><?php echo translator("Dificultad: Baja/Media ") ?></h5>
                        <h5><?php echo translator("Distancia: 24km") ?></h5>
                        <h5><?php echo translator("El camino sigue hoy la misma pauta que la etapa de ayer, avanzando por zonas rurales y cruzando una retahíla inacabable de pequeñas parroquias. Los desniveles son moderados.") ?></h5>
                    </div>  
                    <div class="col dayDescription">
                        <p><?php echo translator("Desde Portomarín bajamos a la carretera y atravesamos uno de los afluentes del embalse por una pasarela peatonal. Seguimos por la derecha hacia un bonito camino en ascenso, desembocamos en la carretera provincial a la altura de una fábrica, y cruzamos dicha carretera dos veces antes de llegar a Toxibo.") ?></p>
                        <p><?php echo translator("Seguimos el mismo camino recto, por la izquierda de la carretera, hasta llegar a Gonzar.") ?></p>
                        <p><?php echo translator("Seguimos una pista por la izquierda de la carretera hasta Castromaior. Cruzamos el pueblo en subida y continuamos recto por una carretera local. Ésta desemboca en la carretera provincial, que seguimos a la izquierda por un camino que avanza en paralelo a ella. Pasamos por Hospital da Cruz y dejamos atrás la nacional N-540.") ?></p>
                        <p><?php echo translator("Llegamos a Ventas de Narón, que antiguamente había sido un importante centro comercial y de servicios.") ?></p>
                        <p><?php echo translator("Seguimos un camino en paralelo a una carretera local. Pasamos por Prebisa y Lameiros, donde vemos, a mano izquierda, junto a un roble monumental, el cruceiro de Lameiros, del siglo XVII. Poco después llegamos a la parte baja de Ligonde.") ?></p>
                        <p><?php echo translator("Un kilómetro más adelante llegamos a la parte alta de Ligonde, llamado Airexe (iglesia). Seguimos el mismo camino pasando por Portos, Lestedo, Os Valos, A Brea y Rosario. Por una pista de tierra, a la izquierda de la nacional, bajamos a Palas.") ?></p>
                        <p><?php echo translator("Palas de Rei. Su origen es prerromano, y se convirtió en un importante enclave en la asistencia a los peregrinos durante las peregrinaciones de la Edad Media. Cabe destacar la iglesia parroquial de San Tirso, con una portada románica del siglo XII.") ?></p>
                    </div>                  
				</div>
                <div class="section group dayText" id="day3Text">
                	<h4><?php echo translator("PALAS DE REI – ARZÚA") ?></h4>
                	<div class="col span_3_of_4"> 
						<img src="img/thirdDay.svg" alt="Itinerario tercer día">
                    </div>
                    
                	<div class="col span_1_of_4">
                    	<h5><?php echo translator("Tiempo: 7h 15’ ") ?></h5>
                        <h5><?php echo translator("Dificultad: Media ") ?></h5>
                        <h5><?php echo translator("Distancia: 29km") ?></h5>
                        <h5><?php echo translator("Aunque no hay ninguna subida relevante, hoy la etapa es un continuo subir y bajar, aún más a partir de Melide, para salvar los numerosos arroyos que corren transversales a nuestra marcha.") ?></h5>
                    </div>  
                    <div class="col dayDescription">
                        <p><?php echo translator("Salimos de Palas de Rei cruzando la nacional y tomamos un camino en la parte baja del pueblo. Más adelante volvemos a cruzar la nacional. Pasamos por San Xulián con una iglesia románica del siglo XII. Poco después cruzamos el río Pambre y ascendemos por una preciosa corredoira.") ?></p>
                        <p><?php echo translator("Atravesamos Casanova y continuamos por caminos rurales. Pasamos por la parroquia de O Coto, ya en la provincia de A Coruña, quedando medio kilómetro para Leboreiro.") ?></p>
                        <p><?php echo translator("Leboreiro es una bonita aldea de aspecto medieval. Destacan la iglesia románica de Santa María (siglo XIII) y, enfrente, un curioso y primitivo granero. En el siglo XII existió un hospital de peregrinos fundado por la familia Ulloa.") ?></p>
                        <p><?php echo translator("Continuamos cruzando el río Seco por un bonito puente de origen medieval. Llegamos hasta Furelos por el Ponte Velha, otro precioso puente medieval de cuatro arcos. Tras una corta subida accedemos al núcleo urbano de Melide.") ?></p>
                        <p><?php echo translator("En Melide confluye el Camino Primitivo, que viene de Oviedo, con el Camino Francés. El cruceiro que hay junto a la capilla de San Roque (siglo XIV) es uno de los más antiguos de Galicia. En la iglesia parroquial de San Pedro, que pertenecía al monasterio de Sancti Spiritus (siglo XIV), hay unas interesantes pinturas medievales que representan a Santiago en su versión más guerrera. A la salida de la ciudad, siguiendo el camino, pasamos junto a la iglesia románica de Santa María (siglo XII), con valiosas pinturas murales del siglo XV. ") ?></p>
                        <p><?php echo translator("Para llegar a Boente, cruzamos la nacional N-547, tomamos la carretera en dirección a San Martiño y, poco después, a la altura de la iglesia románica de Santa María (siglo XII), giramos a la derecha. Avanzamos a través de bosques de robles, pinos y eucaliptos, con una sucesión de subidas y bajadas.") ?></p>
                        <p><?php echo translator("Castañeda es el siguiente pueblo y era el lugar donde se fundían las piedras calizas que trasladaban los peregrinos desde Triacastela para producir la cal de argamasa de la catedral de Santiago.") ?></p>
                        <p><?php echo translator("Finalizados los toboganes, llegamos a Ribadiso da Baixo, quedando a unos 3 kilómetros Arzúa. Aquí confluye el Camino del Norte con el Camino Francés. En la parte antigua nos encontramos con el convento de la Magdalena, del siglo XIV, antigua hospedería de peregrinos.") ?></p>
                    </div>                  
				</div>
                <div class="section group dayText" id="day4Text">
                	<h4><?php echo translator("ARZÚA – PEDROUZO") ?></h4>
                	<div class="col span_3_of_4"> 
						<img src="img/fourthDay.svg" alt="Itinerario del cuarto día">
                    </div>
                    
                	<div class="col span_1_of_4">
                    	<h5><?php echo translator("Tiempo: 4h 45’") ?></h5>
                        <h5><?php echo translator("Dificultad: Baja") ?></h5>
                        <h5><?php echo translator("Distancia: 19km") ?></h5>
                        <h5><?php echo translator("Etapa cómoda y con escasos desniveles. Avanzamos en buena parte por largas pistas forestales, entre bosques de eucalipto y praderías.") ?></h5>
                    </div>  
                    <div class="col dayDescription">
                        <p><?php echo translator("El primer tramo de la etapa es muy entretenido por las numerosas aldeas que atraviesa y por la configuración del terreno, corredoiras, sendas, caminos entre pequeños bosques de espesa vegetación y una sinfonía de colores con predominio del verde.") ?></p>
                        <p><?php echo translator("Pasamos el Pazo de San Lázaro, cruzamos la carretera entre un paisaje de prados y robles y llegamos a Pregontuño. Continuamos por las pequeñas aldeas de A Peroxa, Calzada y Calle.") ?></p>
                        <p><?php echo translator("Siguen los bosques de robles y eucaliptos y llegamos a Boavista, después a Salceda.") ?></p>
                        <p><?php echo translator("En este punto pueden enlazar los peregrinos que vengan del Camino Norte y hayan tomado la variante de O Pino.") ?></p>
                        <p><?php echo translator("Siguiendo la carretera pasamos por O Xen, Ras, Brea, O Empalme y llegamos a La parroquia de Arca.") ?></p>
                        <p><?php echo translator("Podemos visitar la ermita de Santa Irene que data de finales del siglo XVII. La capilla fue levantada en conmemoración de la mártir Santa Tesalónica. Es una construcción sencilla de planta rectangular que cuenta con una espléndida carbelleira (robledal) a su alrededor.") ?></p>
                        <p><?php echo translator("Es punto de parada obligatoria para todos los peregrinos.") ?></p>
                        <p><?php echo translator("Su festividad se celebra el 29 de Junio con una romería que realizan los jóvenes solteros.") ?></p>
                        <p><?php echo translator("El mayor de edad de cada familia, según rezan las costumbres, deberá pagar una cuota cada año..") ?></p>
                        <p><?php echo translator("La tradicional romería por la festividad de Santa Irene siempre finaliza con un multitudinario almuerzo en el hermoso paraje que rodea la ermita. La imagen de la santa data de 1692.") ?></p>
                        <p><?php echo translator("Cuenta uno de los mitos alrededor de este santuario, que el agua de la fuente se recogía para las huertas y así conseguir que las cosechas fuesen siempre óptimas.") ?></p>
                        <p><?php echo translator("Otra leyenda cuenta que Santa Irene era capaz de curar a los niños de todos sus males.") ?></p>
                        <p><?php echo translator("Incluso se llegó a decir que los niños que lloraban demasiado tendrían que pasar por debajo de la imagen ubicada en la capilla para evitar tales llantos sin fin.") ?></p>
                        <p><?php echo translator("Es una fuente muy concurrida por los peregrinos,  se conoce como la fuente de la eterna juventud ya que dicen que es buena para la piel y las ampollas de los pies. ") ?></p>
                        <p><?php echo translator("Todo aquel que se lave con su agua se conservará siempre joven.") ?></p>
                        <p><?php echo translator("Luego de subir con facilidad a O Empalme, nuestro camino viene marcado por los eucaliptos que nos guiarán hasta Rúa y más tarde a Pedrouzo.") ?></p>
                    </div>                  
				</div>
                <div class="section group dayText" id="day5Text">
                	<h4><?php echo translator("PEDROUZO - SANTIAGO DE COMPOSTELA  ") ?></h4>
                	<div class="col span_3_of_4"> 
						<img src="img/fifthDay.svg" alt="Itinerario del quinto día">
                    </div>
                    
                	<div class="col span_1_of_4">
                    	<h5><?php echo translator("Tiempo: 5h") ?></h5>
                        <h5><?php echo translator("Dificultad: Baja") ?></h5>
                        <h5><?php echo translator("Distancia: 20km") ?></h5>
                        <h5><?php echo translator("Última etapa del camino ya muy cerca de la meta. No presenta desniveles relevantes; la subida al Monte do Gozo es de pendiente moderada.") ?></h5>
                    </div>  
                    <div class="col dayDescription">
                        <p><?php echo translator("Una vez situados en el camino, seguimos una cómoda pista de tierra y pasamos por la parroquia de San Antón.") ?></p>
                        <p><?php echo translator("Cruzamos con precaución la nacional N-547 y nos adentramos en una bonita corredoira. Rodeamos el aeropuerto de Santiago de Compostela, el más importante de Galicia, por la derecha.") ?></p>
                        <p><?php echo translator("Llegamos a San Paio. Pasamos bajo la autovía de acceso al aeropuerto y seguimos hacia Lavacolla por una pista de asfalto.") ?></p>
                        <p><?php echo translator("Salimos de San Marcos cruzando la antigua nacional N-634a  y seguimos en subida una carretera local. ") ?></p>
                        <p><?php echo translator("Pasamos por Vilamaior y, dos kilómetros más adelante, por los centros emisores de la Televisión Gallega y de la Televisión Española llegamos a San Marcos.") ?></p>
                        <p><?php echo translator("Cerca de San Marcos se encuentra el complejo turístico del Monte do Gozo. Desde aquí divisamos  la ciudad de Santiago de Compostela. Para ver las torres de la catedral debemos subir a la pequeña colina en la que se encuentra el monumento conmemorativo de la visita del papa Juan Pablo II en el año 1992.") ?></p>
                        <p><?php echo translator("Tenemos ante nosotros una bajada muy cómoda a la ciudad.") ?></p>
                        <p><?php echo translator("Desde la capilla de San Marcos, y dejando el gran complejo vacacional del Monte do Gozo a la izquierda, se desciende hasta la N-544, y por ella se entra en el Barrio de San Lázaro, dejando la iglesia a la izquierda.") ?></p>
                        <p><?php echo translator("A continuación, el Camino entra en el Polígono de Fontiñas, y sigue por el Barrio dos Concheiros y la rúa de San Pedro, hasta la Porta do Camiño. Franqueada ésta, por las rúas das Casas Reais y das Ánimas, se llega a la plaza de Cervantes, y por la calle de la Azabachería, pasando bajo el Arco del Obispo, a la mismísima plaza del Obradoiro.") ?></p>
                        <p><?php echo translator("La ritual subida por las escaleras de la catedral pondrá el punto y final a lo que habrá sido, seguramente, uno de los viajes más intensos e inolvidables de nuestra vida. Un verdadero punto y aparte.") ?></p>
                        
                    </div>                  
				</div>
		</div>
	</div>
<?php

    include_once('footer.php');
?> 