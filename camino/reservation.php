<?php
	$page = 7;
	require_once('languages.php');
    include_once('header.php');
	$step = $_GET['step']; 
	echo "
			<div id=\"maincontentcontainer\" style=\"background: #2980b9; border-top: 20px solid white;\">
				<div class=\"standardcontainer\" style=\"margin-top: -20px;\">
					<div class=\"maincontent\" style=\"background: #F6F6F6; padding: 25px;  min-height: 0px;\">
						<div class=\"section group\">
		";
	if( $step == 0){
		echo "

							<h5 style=\"text-align: center; text-transform: uppercase; margin: 25px auto 0px; color: #F39C12;padding: 25px;font-size: 2em; font-family: 'Montserrat', sans-serif;letter-spacing: -1px;\">".translator("Formulario de reserva")."</h5>
							<h6 style=\"text-align: center; text-transform: uppercase; color: #F39C12; padding: 5px;font-size: 1em; font-family: 'Montserrat', sans-serif;letter-spacing: -1px;\">".translator("Complete el siguiente formulario por cada persona que se quiera inscribir")."</h6>
						   <form action=\"reservation_data.php\" name=\"contact\" method=\"post\" id=\"reservation\" style=\" width: auto; margin-left: 150px;\">
						   
								<p>".translator("Sr.")."</p>
								<input type=\"radio\" name=\"sex\" value=\"male\" checked style=\"width: 10px; clear: none; margin-left: 25px;\">
								
								<p style=\"width: 10px; clear: none; margin-left: 25px;\">".translator("Sra.")."</p>
								<input type=\"radio\" name=\"sex\" value=\"female\" style=\"width: 10px; clear: none; margin-left: 25px;\">
		  
								<p>".translator("Nombre*")."</p>
								<input type=\"text\" name=\"name\" required/>
								
								<p>".translator("Apellidos*")."</p>
								<input type=\"text\" name=\"last\" required/>
								
								<p>".translator("Fecha de nacimiento")."</p>
								<input type=\"date\" name=\"bday\" min=\"1997-01-01\">
								
								<p>".translator("Correo electrónico*")."</p>
								<input type=\"email\" name=\"email\" required/>
								
								<p>".translator("Teléfono*")."</p>
								<input  type=\"text\" required name=\"phone\"/>
								
								<p>".translator("Nacionalidad*")."</p>
								<input  type=\"text\" name=\"citizenship\" required/>
								
								<p>".translator("Habitación individual")."</p>
								<input type=\"radio\" name=\"room\" value=\"single\" checked style=\"width: 10px; clear: none; margin-left: 15px;\">
								
								<p style=\"width: auto; clear: none; margin-left: 25px;\">".translator("Habitación doble")."</p>
								<input type=\"radio\" name=\"room\" value=\"double\" style=\"width: 10px; clear: none; margin-left: 15px;\">
								
								<p>".translator("Comentarios")."</p>
								<p>".translator("(Alergias, intolerancias, etc.)")."</p>
								<textarea name=\"message\" id=\"message\" placeholder=\"".translator("Escriba aquí sus comentarios...")."\" ></textarea>
								
								<input type=\"checkbox\" name=\"dataProtection\" required value=\"data\" style=\"width: 10px; margin-left: 0;\">
								
								<a style=\"clear: none; margin-left: 15px;\" href=\"dataprotection.php\">".translator("Acepto la cláusula de protección de datos.")."</a>
								
								<button type=\"submit\">".translator("Enviar")."</button>
							</form>";
	}
	else{
		if($step == 1){
			echo"
			<div  id=\"payPal\">
				<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
				<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
				<input type=\"hidden\" name=\"hosted_button_id\" value=\"GQJ2DNA2V668G\">
				<table>
				<tr><td><input type=\"hidden\" name=\"on0\" value=\"Opciones Alojamiento / Lodging options\">Opciones Alojamiento / Lodging options</td></tr><tr><td><select name=\"os0\">
					<option value=\"Hab-Doble/Double-room\">Hab-Doble/Double-room €250,00 EUR</option>
					<option value=\"Hab-Ind/Single-Room\">Hab-Ind/Single-Room €300,00 EUR</option>
					<option value=\"Hab-Doble + Noche Extra/Double-room + Extra night\">Hab-Doble + Noche Extra/Double-room + Extra night €290,00 EUR</option>
					<option value=\"Hab-Ind + Noche Extra/Single-Room + Extra night\">Hab-Ind + Noche Extra/Single-Room + Extra night €340,00 EUR</option>
				</select> </td></tr>
				</table>
				<input type=\"hidden\" name=\"currency_code\" value=\"EUR\">
				<input type=\"image\" src=\"https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal. La forma rápida y segura de pagar en Internet.\">
				<img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/es_ES/i/scr/pixel.gif\" width=\"1\" height=\"1\">
				</form>
			</div>
			";
		}
		else{
			if($step == 2){
				
			}
		}
	}
	echo "
						</div>
						</div>
						</div>
						</div>
	";
    include_once('footer.php');
?> 