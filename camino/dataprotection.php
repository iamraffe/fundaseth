<?php
	$page= 10;
	require_once('languages.php');
    include_once('header.php');
?> 
	<div id="maincontentcontainer" style="background: #2980b9;">
		<div class="standardcontainer" style="margin-top: -20px;">
			<div class="maincontent" style="background: #F6F6F6; padding: 25px; padding-top: 175px;  min-height: 0px;">
				<div class="section group" >
                    <p><?php echo translator("De acuerdo con lo establecido por la Ley Orgánica 15/1999, le informamos que los datos obtenidos de este formulario serán incorporados a un fichero automatizado bajo la responsabilidad de FUNDASETH SL con la finalidad de atender sus consultas y remitirle información relacionada que pueda ser de su interés. Puede ejercer sus derechos de acceso, rectificación, cancelación y oposición mediante un escrito a nuestra dirección C/ Alejandro Rodríguez, 32 28039 - Madrid") ?></p>
                    
                    <p><?php echo translator("Mientras no nos comunique lo contrario, entenderemos que sus datos no han sido modificados, que usted se compromete a notificarnos cualquier variación y que tenemos su consentimiento para utilizarlos para las finalidades mencionadas.") ?></p>
                    
                    <p><?php echo translator("El envío de estos datos implica la aceptación de esta cláusula.") ?></p>
                </div>
                </div>
                </div>
                </div>
<?php

    include_once('footer.php');
?> 