<?php
	$page = 3;
	require_once('languages.php');
    include_once('header.php');
?> 

	<div id="maincontentcontainer">
		<div class="standardcontainer" >
			<div class="maincontent">
				<div class="group banner full">
                	<h2 style=" float:left; margin-left: 30%;"><?php echo translator("ENLACES"); ?></h2>
                    <h2 style=" float:right; margin-right: 30%;"><?php echo translator("DOCUMENTOS"); ?></h2>
				</div>
                <div class="section group">
                
                    <div class="group banner mini">
                        <h2><?php echo translator("ENLACES"); ?></h2>
                    </div>
                	<div class="col span_1_of_2 enlaces">
                    	<img src="img/enlaces.svg" alt="Enlaces">
                    	<p><a href="http://www.oepm.es/" target="_blank"><?php echo translator("Oficina Española de Patentes y Marcas"); ?></a></p>		
                        <p><a href="http://www.epo.org/" target="_blank"><?php echo translator("Oficina Europea de Patentes"); ?></a></p>	
                        <p><a href="http://www.ompi.org/" target="_blank"><?php echo translator("Organización Mundial de la Propiedad Intelectual (OMPI)"); ?></a></p>	
                        <p><a href="http://oami.europa.eu/ows/rw/pages/index.es.do" target="_blank"><?php echo translator("Oficina de Armonización del Mercado Interior"); ?></a></p>	
                    </div>
                    <div class="group banner mini">
                        <h2><?php echo translator("DOCUMENTOS"); ?></h2>
                    </div>
                	<div class="col span_1_of_2 documentos">
                    	<img src="img/documentos.svg" alt="Documentos">
                    	<p><a href="includes/poderOEPM.pdf" target="_blank"><?php echo translator("Documento de representación OEPM"); ?></a></p>		
                        <p><a href="includes/poderEPO.pdf" target="_blank"><?php echo translator("Documento de representación EPO"); ?></a></p>	
                        <p><a href="includes/poderOAMI.pdf" target="_blank"><?php echo translator("Documento de representación OAMI"); ?></a></p>	
                        <p><a href="includes/poderPCT.pdf" target="_blank"><?php echo translator("Documento de representación PCT"); ?></a></p>	
                    	<p><a href="includes/CDAGeneralMIAPatents.pdf" target="_blank"><?php echo translator("Acuerdo de confidencialidad (CDA)"); ?></a></p>		
                        <p><a href="includes/FichaCliente.pdf" target="_blank"><?php echo translator("Ficha cliente"); ?></a></p>	
                        <p><a href="includes/InstruccionesRedacciónMemoria.pdf" target="_blank"><?php echo translator("Información para redacción patente"); ?></a></p>	
                        <p><a href="includes/InstruccionesInformePatentabilidad.pdf" target="_blank"><?php echo translator("Información para elaborar informe patentabilidad"); ?></a></p>	
                    	<p><a href="includes/InstruccionesInformeInfracción.pdf" target="_blank"><?php echo translator("Información para elaborar informe de infracción/FTO"); ?></a></p>		

                    </div>
                </div>
		</div>
	</div>
    </div>
<?php
    include_once('footer.php');
?> 