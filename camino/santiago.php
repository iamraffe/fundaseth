<?php
	$page = 1;
	require_once('languages.php');
    include_once('header.php');
?> 
	<div id="maincontentcontainer" style="background: #2980b9; border-top: 20px solid white; ">
		<div class="standardcontainer" style="margin-top: -20px;">
			<div class="maincontent santiago" style="background: #F6F6F6; padding: 25px; padding-top: 0;  min-height: 350px;">
				<div class="section group" style="margin-top: -50px;">

                	<div class="col span_3_of_4" style="font-size: 1.25em;"> 
                        <p style="margin:0; padding:0; padding-left: 50px;  margin-bottom: 15px;"><?php echo translator("De entre estas claves las leyendas que jalonan el Camino son precisamente las que con mayor vigor han perdurado en el tiempo y que mejor han conservado la esencia de un mensaje oculto, de asombrosos milagros o fantásticos relatos mágicos, a menudo con el disfraz de sencillas historias.") ?></p>
                        <p style="margin:0; padding:0; padding-left: 50px; margin-bottom: 15px; "><?php echo translator("Como se sabe, en la Edad Media el Camino de Santiago propició la mayor y más continuada concentración de gentes de países distintos y un caudaloso intercambio cultural.") ?></p>
                        <p style="margin:0; padding:0;  margin-bottom: 15px; padding-left: 50px; "><?php echo translator("Por el Camino de Santiago viajaron ideas, conocimientos, cantos, músicas, modelos artísticos e incluso obras de arte, y también leyendas, en especial, claro está, sobre el Apóstol, sobre su vida, su muerte y sus milagros.") ?></p>
    					
                    </div>
                    
                	<div class="col span_1_of_4">
                    	<img src="img/walker.svg" style="width:90%; margin-left: 5px; margin-top: -20px;" alt="<?php echo translator ("Peregrino"); ?>">
                    </div> 
                </div>
                <div class="section group" style="margin-top: -50px;">
                    <div class="santiagoQuote">
                            <p style="margin:0;  padding-left: 25px; font-style:italic; font-size: 1.25em; color: #F39C12; font-weight: 500; margin-bottom: 15px; margin-top: 15px;" ><?php echo translator("\"Si algún día pasa por tu mente ir a Santiago a pie o en bicicleta, espanta ese pájaro negro como si fuera un fantasma.") ?></p>
                            <p style="margin:0;  padding-left: 25px; font-style:italic; font-size: 1.25em;   color: #F39C12; font-weight: 500; margin-bottom: 15px; "><?php echo translator("Si de nuevo revolotea, de nuevo rechaza la tentación.") ?></p>
        
                            <p style="margin:0;  padding-left: 25px;font-style:italic;  font-size: 1.25em;   color: #F39C12; font-weight: 500; margin-bottom: 15px; "><?php echo translator("Pero si, por tercera vez surgiera, haz que anide en ti y disfruta de la dura y apasionante aventura de recorrer el Camino de Santiago.\"") ?></p>
                            
                            <p style="text-align: right;"><?php echo translator("Parte del libro <span style=\"text-weight: bold;\">\"El Camino de Santiago\"</span>, según Roberto Alonso y Begoña Santos."); ?></p>
                    </div>                 
				</div>
		</div>
	</div>
    </div>
<?php

    include_once('footer.php');
?> 