<?php
	$page = 0;
	require_once('languages.php');
    include_once('header.php');
?> 

	<div id="maincontentcontainer">
		<div class="standardcontainer" >
			<div class="maincontent">
				<div class="group banner">
                	<h2><?php echo translator("Tu socio estratégico en <span style=\" font-weight: bold; font-size: 1em !important;\">IP</span>"); ?></h2>
				</div>
                <div class="section group">
                	<div class="col span_1_of_3 teaser">
                    	<img src="img/firma.svg" alt="Firma altamente especializada" >
                    	<p><?php echo translator("Firma altamente especializada en patentes, especialmente en sectores tales como: biotecnología, química, farmacia, medicina, alimentación y energías alternativas."); ?></p>
                    </div>
                	<div class="col span_1_of_3 teaser">
                    	<img src="img/servicios.svg" alt="Servicios">
                    	<p><?php echo translator("Ayudamos al innovador a elegir la modalidad de protección más adecuada a cada invención, gracias a una extensa cartera de servicios tanto de tramitación como de información, en todas las modalidades de propiedad industrial."); ?></p>
                    </div>
                	<div class="col span_1_of_3 teaser">
                    	<img src="img/analisis.svg" alt="Análisis de resultados">
                    	<p><?php echo translator("Análisis de los resultados de los proyectos de I+D+i asesorando, según las características del propio proyecto y su estado de desarrollo, sobre la modalidad de protección más adecuada y al menor coste, en el ámbito nacional e internacional."); ?></p>
                    </div>
                </div>
		</div>
	</div>
    </div>
<?php
    include_once('footer.php');
?> 