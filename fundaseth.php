<?php
	$page = 1;
	$url = 'fundaseth.php';
	require_once("languages.php");
    include_once('header.php');

?>
 	</div>
    <div id="maincontentcontainer">
    <h1 style="display: none;">Fundaseth</h1>
        <div class="standardcontainer">
            <div class="maincontent">
           	  <div class="section group sectionTitle">
                	<h2><?php echo translator("¿Quiénes somos?") ?></h2>
                </div>            	
              <div class="section group" style="padding: 5%; font-size: 115%; margin-top:-5%;">
                	<div class="col span_2_of_3" style="margin-top: 5%; color: #606064;">
                        <p><?php echo translator("Somos profesionales de diferentes ámbitos del diseño, el marketing, la Comunicación, el derecho, la docencia, el sector financiero e inmobiliario y también somos supervivientes de cáncer. Nuestra experiencia profesional y personal nos ha enseñado a dar lo mejor de nosotros mismos en cada trabajo.") ?></p>
                        <p><?php echo translator("Aportamos nuestro granito de arena favoreciendo la integración laboral de los pacientes con cáncer y apoyando iniciativas que buscan mejorar su calidad de vida.") ?></p>
                        <p><?php echo translator("Nuestra meta no solo es ser la primera Agencia de Servicios en España sino la más eficaz, manteniendo un equipo profesional integrado, preparado para encarar los retos que plantea la crisis al sector terciario y capaz de llevar a cabo proyectos rentables pero muy creativos. Somos flexibles a los cambios del sector y realizaremos los ajustes necesarios en cada momento y respecto a cada cliente, que será tratado de forma individual y personalizada.") ?></p>
                    </div>
                    <div class="col span_1_of_3 dogAnimation">
                   	  <div id="Stage" class="EDGE-1051506168"></div>
                    </div>
                </div>
              <div class="section group aboutExt" style="background:#F5F5F5; color: #606064; padding-right: 5%;padding-left: 5%; padding-top: 2.5%;padding-bottom: 2.5%;">                   
                    <div class="col span_1_of_3">
                    	<img style="width: 25%; height: auto;" src="img/vision.svg"  alt="Mision y Vision" >
                    	<h3 style="color: #F1C40F;"><?php echo translator("Misión y Visión") ?></h3>
                        <p><?php echo translator("Promover el negocio de nuestros clientes como propio, aportando soluciones que generen valor añadido.") ?></p>
                        <p><?php echo translator("Ser parte esencial de sus planes estratégicos.") ?></p>
                    
                    </div>
                    
                    <div class="col span_1_of_3">
                    	<img style="width: 25%; height: auto;" src="img/costs.svg" alt="Costes y Beneficios"  >
                    	<h3><?php echo translator("Costes y Beneficios") ?></h3>
                        <p><?php echo translator("Tenemos muy presente la necesidad de nuestros clientes de reducir costes, optimizar recursos y minimizar el tiempo de cobro de sus trabajos.") ?></p>
                        <p><?php echo translator("Apostamos por una atención de 360º, creativa, eficaz que ofrezca soluciones originales, efectivas y adecuadas a su empresa u organización.") ?></p>
                        <p><?php echo translator("Para ello nos metemos en su piel y hacemos de su objetivo el nuestro.") ?></p>
                    
                    </div>
                    
                    <div class="col span_1_of_3">
                    	<img  style="width: 25%; height: auto;" src="img/method.svg" alt="Metodo">
                    	<h3 style="color: #F1C40F;"><?php echo translator("Método") ?></h3>
                        <p><?php echo translator("Trabajamos codo a codo con nuestros clientes, grandes, medianas, pequeñas empresas o autónomos, entendiendo sus necesidades y maximizando sus recursos.") ?></p>
                    	<p><?php echo translator("Ponemos a disposición de nuestros clientes un equipo multidisciplinar que centrará su trabajo en ayudarles a rentabilizar su esfuerzo, permitiéndoles concentrarse en su negocio.") ?></p>
                        <p><?php echo translator("Ello requiere un profundo conocimiento de los servicios ofrecidos y una enorme capacidad de empatía con los directivos o empresarios en la gestión de sus recursos.") ?></p>

                    </div>
                </div>
            
            </div>
        </div>
    </div>
<?php require_once('footer.php') ?>