<?php
	$page = 3;
	require_once('languages.php');
    include_once('header.php');
?> 
	<div id="maincontentcontainer" style="background: #2980b9; border-top: 20px solid white; ">
		<div class="standardcontainer" style="margin-top: -20px;">
			<div class="maincontent included" style="background: #F6F6F6; padding: 25px; padding-top: 0;  min-height: 350px;">
				<div class="section group">
                	<div class="col span_1_of_3">
                    	<img src="img/house.svg" alt="<?php echo translator("Hospedaje") ?>" >
                        <h3><?php echo translator("Hospedaje") ?></h3>
 						<p><?php echo translator("Contamos con los mejores pazos y casas solariegas en el entorno del Camino Francés.") ?></p>
                        <p><?php echo translator("Se trata de arquitecturas palaciegas en enclaves de exquisita belleza natural. Lugares donde se respira tranquilidad y donde el ambiente cálido nos invita a un paseo por el pasado.") ?></p>
                        <p><?php echo translator("Hemos realizado una rigurosa selección de habitaciones con encanto donde prima el confort y un servicio diferente.") ?></p>
                        <p><?php echo translator("Ofrecemos habitaciones dobles o dobles de uso individual con suplemento.") ?></p>
                    </div>    
                	<div class="col span_1_of_3">
                    	<img src="img/apple.svg" alt="<?php echo translator("Pensión completa") ?>" >
                        <h3><?php echo translator("Pensión completa") ?></h3>
                        <p><?php echo translator("Desayuno en el alojamiento seleccionado. ") ?></p>
                        <p><?php echo translator("Almuerzo y comida. Menús servidos a lo largo de la ruta todos los días del camino y acompañado por una selección de refrescos, vinos, licores y cavas.") ?></p>
                        <p><?php echo translator("Cena exclusiva en el alojamiento seleccionado.") ?></p>
                    </div>    
                	<div class="col span_1_of_3">
                    	<img src="img/horse.svg" alt="<?php echo translator("Actividades") ?>" >
                        <h3><?php echo translator("Actividades") ?></h3>
 						<p><?php echo translator("Tenemos un abanico de actividades enfocadas al disfrute de nuestros clientes. Especialmente pensadas para realizarlas una vez finalizada la ruta diaria. ") ?></p>
                        <p><?php echo translator("Visitas culturales.  Disponemos de un amplio programa de visitas que nos transportará a una época diferente donde el valor didáctico y el entretenimiento irán de la mano.") ?></p>
                    </div>               
                </div>
				<div class="section group">
                	<div class="col span_1_of_3">
                    	<img src="img/bellboy.svg" alt="<?php echo translator("Transporte de equipajes.") ?>" >
                        <h3><?php echo translator("Transporte de equipajes") ?></h3>
 						<p><?php echo translator("A su llegada nos encargamos de transportar su equipaje al hospedaje seleccionado. Así mismo prestamos el servicio de recogida, transporte y entrega del mismo a lo largo de todos los alojamientos del Camino.") ?></p>
                    </div>  
                	<div class="col span_1_of_3">
                    	<img src="img/carriage.svg" alt="<?php echo translator("Traslado de caminantes") ?>" >
                        <h3><?php echo translator("Traslado de caminantes") ?></h3>
 						<p><?php echo translator("Todos los días recogeremos y trasladaremos a nuestros clientes hasta el punto de partida de cada etapa. Una vez finalizada esta, en el punto señalado serán recogidos y trasladados hasta la estancia seleccionada. ") ?></p>
                    </div>    
                	<div class="col span_1_of_3">
                    	<img src="img/firstAid.svg" alt="<?php echo translator("Botiquín") ?>" >
                        <h3><?php echo translator("Botiquín") ?></h3>
 						<p><?php echo translator("Contamos con un completo botiquín a disposición del caminante.") ?></p>
                    </div>                 
                </div>
				<div class="section group">
                	<div class="col span_1_of_3">
                    	<img src="img/puzzle.svg" alt="<?php echo translator("Atención personalizada") ?>" >
 						<h3><?php echo translator("Atención personalizada") ?></h3>
                        <p><?php echo translator("Contamos con un guía que acompañará al grupo en cada jornada y que les amenizará la ruta tanto con información como con curiosidades.") ?></p>
                        <p><?php echo translator("Documentación del viaje.") ?></p>
                        <p><?php echo translator("Rutómetro.") ?></p>
 						<p><?php echo translator("Posibilidad de servicio de masaje y jacuzzi.") ?></p>
                        <p><?php echo translator("Entrega de la credencial de peregrino.") ?></p>
                        <p><?php echo translator("La credencial es un documento personal e intransferible de cada peregrino que le identifica como tal y donde se van sellando las etapas que recorre. Debidamente cumplimentado sirve para obtener la compostelana que acredita que se han recorrido al menos los últimos 100 kilómetros del Camino a pie.") ?></p>
                    </div> 
                	<div class="col span_1_of_3">
                    	<img src="img/injured.svg" alt="<?php echo translator("Asistencia") ?>" >
                        <h3><?php echo translator("Asistencia") ?></h3>
 						<p><?php echo translator("Seguro de viaje.") ?></p>
                        <p><?php echo translator("Asistencia telefónica durante el viaje.") ?></p>
                        <p><?php echo translator("Coche de apoyo. El peregrino puede hacer uso del vehículo en caso de necesidad. ") ?></p>
                        <p><?php echo translator("Nuestro personal habla varios idiomas.") ?></p>
                    </div>      
                	<div class="col span_1_of_3">
                    	<img src="img/gift.svg" alt="Regalo de bienvenida" >
                        <h3><?php echo translator("Cortesía") ?></h3>
 						<p><?php echo translator("Se hará entrega de un regalo de bienvenida que le será de utilidad a lo largo del camino.") ?></p>
                        <p><?php echo translator("Y como queremos que tenga un recuerdo, en Santiago de Compostela le aguarda una sorpresa.") ?></p>
                    </div>                
                </div>
				<div class="section group included">
                	<h3><?php echo translator("Dado el carácter especial de nuestra propuesta contamos con un número de plazas limitado.") ?></h3>
					<h3 class="prices"><?php echo translator("Precios") ?></h3>
                	<div class="col span_1_of_3">
                    	<img src="img/double.svg" alt="<?php echo translator("Habitación uso doble") ?>" >
                    	<h4><?php echo translator("1.250 €") ?></h4>
 						<p><?php echo translator("Por persona en habitación doble.") ?></p>
                        
                    </div>  
                	<div class="col span_1_of_3">
                    	<img src="img/single.svg" alt="<?php echo translator("Habitación uso individual") ?>">
                    	<h4><?php echo translator("1.500 €") ?></h4>
 						<p><?php echo translator("Por persona en habitación uso individual.") ?></p>
                        
                    </div>    
                	<div class="col span_1_of_3">
                    	<img src="img/bnb.svg" alt="<?php echo translator("B & B") ?>" >
                    	<h4><?php echo translator("175 €") ?></h4>
 						<p><?php echo translator("Alojamiento y desayuno en hotel **** en Santiago en habitación doble.") ?></p>
                         
                    </div> 
                    
                    <div class="col span_3_of_3" style="text-align: center;">
                    	<p><?php echo translator("Recogida en el aeropuerto de Santiago y traslado a Sarria.") ?><a href="mailto:caminosantiago@fundaseth.es"><span style="font-family: 'Montserrat', sans-serif; font-size: 1.15em;	letter-spacing: -1px; color: #F39C12; "><?php echo translator(" Solicitar presupuesto.") ?></span></a></p>
                        <p><?php echo translator("Traslado al finalizar el camino desde Santiago a Sarria.") ?><a href="mailto:caminosantiago@fundaseth.es"><span style="font-family: 'Montserrat', sans-serif; font-size: 1.15em;	letter-spacing: -1px; color: #F39C12; "><?php echo translator(" Solicitar presupuesto.") ?></span></a></p>
                        <p><?php echo translator("La recogida en la estación de tren en Sarria está ") ?><span style="font-family: 'Montserrat', sans-serif; font-size: 1.15em;	letter-spacing: -1px; color: #F39C12; "><?php echo translator("incluida.") ?></span></p>
                    </div>
                </div>  
                <div class="section group included">
                	<h3><a style="text-decoration:underline; text-transform:uppercase;" href="reservation.php?step=0"><?php echo translator("Reserva ahora") ?></a></h3>
                	<h3><?php echo translator("Para más información póngase en contacto con nosotros a través del correo caminosantiago@fundaseth.es o en el tlf. +34 913 981 628") ?></h3>
                </div>  
            </div>
		</div>
	</div>
<?php

    include_once('footer.php');
?> 