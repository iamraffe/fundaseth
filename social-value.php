<?php
	$page = 3;
	$url = 'social-value.php';

	require_once("languages.php");
    include_once('header.php');
?>
	</div>
    <div id="maincontentcontainer">
    <h1 style="display: none;">Fundaseth</h1>
        <div class="standardcontainer">
            <div class="maincontent">
           	  <div class="section group sectionTitle">
                	<h2><?php echo translator("Valor Social") ?></h2>
                </div>              
            
                <div class="section group contactIntro" style="padding: 5%; font-size: 125%;">
                     <h3><?php echo translator("En Fundaseth promovemos la integración laboral de los pacientes y sus cuidadores y empezamos por nosotros mismos: somos un equipo en el que el 80% de nuestros miembros son supervivientes de cáncer.") ?></h3>
                     <h4 style="text-align: center; color:#F1C40F; "><?php echo translator("Usted también puede aportar su granito de arena.") ?></h4>
                </div>
                <div class="section group">
					<div class="col span_1_of_3">
                    	<img style="display: block; margin: 75px auto; width:70%; height: 50%;" src="img/fcc.svg" alt="Logo Fundación Carlos Garrido Garrido."/>
                    </div>
                    
                    <div class="col span_2_of_3 aboutFCC">
                   		<p><?php echo translator("Constituida el 14 de julio de 2010.") ?></p>
                        <p><?php echo translator("Es una entidad de naturaleza fundacional, sin ánimo de lucro, creada para la ayuda a pacientes oncológicos, apoyo a las asociaciones de afectados por cáncer y fomento del progreso cultural y social.") ?></p>
                        <p><?php echo translator("Tiene carácter benéfico asistencial y fue constituida por razones de solidaridad con todas las personas afectadas por cáncer.") ?></p>
                        <p><?php echo translator("El fin principal de la Fundación es pues la ayuda a los pacientes oncológicos, pero además, la Fundación fomenta el progreso y desarrollo sostenible para la mejora de la calidad de vida de los ciudadanos.") ?></p>
                        <p><?php echo translator("En este sentido, promueve los servicios y la atención a personas con dependencia o en riesgo de exclusión por razones físicas, psíquicas, sociales, culturales o económicas y fomenta la educación y formación de los ciudadanos.") ?></p>
                        <p><?php echo translator("La Fundación Carlos Garrido Garrido ha colaborado desde su constitución con GEPAC, Grupo Español de Pacientescon Cáncer y con varias asociaciones que componen el grupo.") ?></p>
                        
                    
                    </div>
                </div>
                <div class="section group ">
                
                 </div>   

            </div>
         </div>
    </div>
<?php require_once('footer.php') ?>