<?php
	$page = 0;
	$url = 'index.php';
	require_once("languages.php");
    include_once('header.php');
?> 

		
        <div class="banner">
            <ul>
            	<li id="travelSlider"><img src="img/travelSlider.svg" alt="Organizamos viajes diferentes"><p><?php echo translator("Organizamos viajes diferentes") ?></p></li>
                <li id="webSlider"><img src="img/webSlider.svg" alt="Construya una mejor experiencia digital"><p><?php echo translator("Construya una mejor experiencia digital") ?></p></li>
                <li id="eventSlider"><img src="img/eventSlider.svg" alt="Somos expertos en la producción de eventos"><p><?php echo translator("Somos expertos en la producción de eventos") ?></p></li>
                <li id="coworkingSlider"><img src="img/coworkingSlider.svg" alt="Un espacio que aporta valor añadido"><p><?php echo translator("Un espacio que aporta valor añadido") ?></p></li>
            </ul>
		</div>
	</div>
    		
	
    
    
    <div id="maincontentcontainer">
    <h1 style="display: none;">Fundaseth</h1>
        <div class="standardcontainer">
            <div class="maincontent">
            	<div class="section group homeHeading">
                	<h2><?php echo translator("Hacemos de su objetivo, <span style=\"color: #F1C40F;\">el nuestro</span>") ?></h2>
                </div>            	
                <div class="section group homeIntro">
                	<p><?php echo translator("Somos profesionales de diferentes ámbitos del diseño, el marketing, la comunicación, el derecho, la docencia, el sector financiero e inmobiliario y también somos supervivientes de cáncer.") ?></p>
                    <p><?php echo translator("Nuestra experiencia profesional y personal nos ha enseñado a dar lo mejor de nosotros mismos en cada trabajo.") ?></p>
                </div>
<!--                 <div class="section group ">
                    <div class="col span_1_of_2" id="santiagoLink">
                    	<a  href="http://www.tucaminoasantiago.com"><img src="img/santiagoHome.svg" alt="camino de santiago semana santa 2015"/></a>
                    </div>
                	<div class="col span_1_of_2" id="youtubeVid">
                    	<iframe  width="960" height="720" src="https://www.youtube.com/embed/yiPrmLY8FGY" allowfullscreen></iframe>
                    </div>

                </div> -->
            
            </div>
        </div>
    </div>
<?php require_once('footer.php') ?>