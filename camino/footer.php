	<div id="footercontainer">
		<footer>
            <div class="section group">
                <div class="col span_1_of_4 footerAddress">
                	<a href="https://www.facebook.com/tucaminoasantiago?notif_t=fbpage_fan_invite" target="_blank"><img src="img/fb.svg" alt="Facebook"></a>
                    <a href="https://twitter.com/fundaseth" target="_blank"><img src="img/twitter.svg" alt="Twitter"></a>
                    <a href="https://www.youtube.com/channel/UCkhZGv3iT0eDsKKntewoicg" target="_blank"><img src="img/youtube.svg" alt="Youtube"></a>
                    <a href="https://www.linkedin.com/profile/view?id=262388218" target="_blank"><img src="img/linkedin.svg" alt="LinkedIn"></a>
                    <p><?php echo translator("Fundaseth, S. L.") ?></p>
                    <p><?php echo translator("C/ Alejandro Rodríguez, 32") ?></p>
                    <p class="bottom15"><?php echo translator("28039 Madrid, España") ?></p>

                    <p><?php echo translator("Teléfono") ?></p>
                    <p class="bottom15"><?php echo translator("+(34) 913981628") ?></p>

                    <p><?php echo translator("Correo electrónico") ?></p>
                    <p><?php echo translator("caminosantiago@fundaseth.es") ?></p>
                </div>
                <div class="col span_3_of_4" style="position:relative;">
                    <form action="send.php" name="contact" method="post">
                    	<p style="display: inline; float:left; margin-left: 15px;"><?php echo translator("Sr."); ?></p><input style="float: left; width: auto; margin-left: 7.5px; margin-right: 7.5px;" type="radio" name="sex" value="male" checked>
                        <p style="display: inline; float:left;"><?php echo translator("Sra."); ?></p><input style="float: left; width: auto; margin-left: 7.5px; margin-right: 7.5px;"  type="radio" name="sex" value="female">
                        
                        <input style="clear:left;" type="text" name="name" required="required" placeholder="<?php echo translator("Nombre*"); ?>"  />
                        <input type="text" name="last" required="required" placeholder="<?php echo translator("Apellidos*"); ?>" style=" float: left; clear:left;"  />
                        
                        <input  type="text" name="phone"  placeholder="<?php echo translator("Teléfono (opcional)"); ?>" style=" float: left;  clear:left;" />
                        <input type="email" name="email" required="required" placeholder="<?php echo translator("Correo electrónico*"); ?>" style="float: left; clear:left;" />
                        <textarea style="position: absolute; top:50px; right: 25px;" name="message" id="message" required placeholder=" <?php echo translator("Escriba aquí sus comentarios..."); ?>" ></textarea>
                        <a href="dataprotection.php" style="position: absolute; top:150px; right: 25px; color:#333333; text-decoration:underline; font-style:italic;"><?php echo translator("Acepto la cláusula de protección de datos."); ?></a>
                        <input type="checkbox" name="dataProtection" required value="data" style="position: absolute; top:152.5px; right: 200px;">
                        <button type="submit" style="display:block; clear: right; float: right;"><?php echo translator("Enviar"); ?></button>
                    </form>
            	</div>
            </div>

		</footer>
	</div>
</div>



	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->


	<!-- More Scripts-->
	<script src="js/responsivegridsystem.js"></script>
    	<?php
			if($page == 0){
				echo "
					<script src=\"js/jquery.slideme2.js\"></script>
				";
			}
			if($page == 5){
				echo "
					<script src=\"js/galleria-1.3.6.js\"></script>
					<script src=\"includes/themes/classicMod/galleria.classicmod.js\"></script>
				";
			}
		?>
	
    <script type="text/javascript">
	
		$('nav ul li').hover(function(){
			$(this).children('a').css('color', '#2980b9');
		}, function(){
			if ( $( this ).is( '.active' ) ) {
				$(this).children('a').css('color', '#2980b9');
			}
			else{
				$(this).children('a').css('color', '#BCB8A9');
			}
		});
		$('#langChoose').click(function(){
			$('#availableLang').css('display', 'block');
			$('#overlay').css('display', 'block');
			
		});
		$('#menuClose').click(function(){
			$('#availableLang').css('display', 'none');
			$('#overlay').css('display', 'none');
		});
		<?php
			if($locale_lang == 'es'){
				echo "
					$('#spanish').css('display', 'block');
					$('#english').css('display', 'none');
					$('#german').css('display', 'none');
				
				
				";
			
			}
			else{
				if($locale_lang == 'en_US'){
					echo "
						$('#spanish').css('display', 'none');
						$('#english').css('display', 'block');
						$('#german').css('display', 'none');
					
					
					";
				
				}
				else{
					if($locale_lang == 'de_DE'){
						echo "
							$('#spanish').css('display', 'none');
							$('#english').css('display', 'none');
							$('#german').css('display', 'block');
						
						
						";
					}
				}
			}
		?>	
		<?php
			if($page == 0){
				echo "
				$('#foo').slideme({
					arrows: false,
					autoslide: true,
					interval: 5000,
					speed: 1500,
					loop: true,
					transition: 'zoom',
					resizable: {
						width: 1024,
						height: 512,
					}
					
				});
				";
			}
			if($page == 2){
				echo "
				
					$('#day1').click(function(){
						$('#day1Text').css('display', 'block');
						$('#day2Text').css('display', 'none');
						$('#day3Text').css('display', 'none');
						$('#day4Text').css('display', 'none');
						$('#day5Text').css('display', 'none');
						$('#day6Text').css('display', 'none');
						$(this).addClass('active');
						$('#day2').removeClass('active');
						$('#day3').removeClass('active');
						$('#day4').removeClass('active');
						$('#day5').removeClass('active');
						$('#day6').removeClass('active');
					});
					
					$('#day2').click(function(){
						$('#day2Text').css('display', 'block');
						$('#day1Text').css('display', 'none');
						$('#day3Text').css('display', 'none');
						$('#day4Text').css('display', 'none');
						$('#day5Text').css('display', 'none');
						$('#day6Text').css('display', 'none');
						$(this).addClass('active');
						$('#day1').removeClass('active');
						$('#day3').removeClass('active');
						$('#day4').removeClass('active');
						$('#day5').removeClass('active');
						$('#day6').removeClass('active');
					});
					
					$('#day3').click(function(){
						$('#day3Text').css('display', 'block');
						$('#day1Text').css('display', 'none');
						$('#day2Text').css('display', 'none');
						$('#day4Text').css('display', 'none');
						$('#day5Text').css('display', 'none');
						$('#day6Text').css('display', 'none');
						$(this).addClass('active');
						$('#day2').removeClass('active');
						$('#day1').removeClass('active');
						$('#day4').removeClass('active');
						$('#day5').removeClass('active');
						$('#day6').removeClass('active');
					});
					
					$('#day4').click(function(){
						$('#day4Text').css('display', 'block');
						$('#day1Text').css('display', 'none');
						$('#day2Text').css('display', 'none');
						$('#day3Text').css('display', 'none');
						$('#day5Text').css('display', 'none');
						$('#day6Text').css('display', 'none');
						$(this).addClass('active');
						$('#day2').removeClass('active');
						$('#day3').removeClass('active');
						$('#day1').removeClass('active');
						$('#day5').removeClass('active');
						$('#day6').removeClass('active');
					});
					
					$('#day5').click(function(){
						$('#day5Text').css('display', 'block');
						$('#day1Text').css('display', 'none');
						$('#day2Text').css('display', 'none');
						$('#day3Text').css('display', 'none');
						$('#day4Text').css('display', 'none');
						$('#day6Text').css('display', 'none');
						$(this).addClass('active');
						$('#day2').removeClass('active');
						$('#day3').removeClass('active');
						$('#day4').removeClass('active');
						$('#day1').removeClass('active');
						$('#day6').removeClass('active');
					});
					
					$('#day6').click(function(){
						$('#day6Text').css('display', 'block');
						$('#day5Text').css('display', 'none');
						$('#day1Text').css('display', 'none');
						$('#day2Text').css('display', 'none');
						$('#day3Text').css('display', 'none');
						$('#day4Text').css('display', 'none');
						$(this).addClass('active');
						$('#day2').removeClass('active');
						$('#day3').removeClass('active');
						$('#day4').removeClass('active');
						$('#day1').removeClass('active');
						$('#day5').removeClass('active');
					});
				
				";
			
			}
			if($page == 5){
				echo "
					Galleria.loadTheme('includes/themes/classicMod/galleria.classicmod.js');
					Galleria.run('#galleria',{
						height: 0.5625,
						easing: 'galleriaOut',
						transition: 'fadeslide',
						transitionSpeed: 1500,
						showInfo: false,
						slideshowInterval: 2000,   
				});
				
				
				";
			}
			
			
		?>

	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-58794240-1', 'auto');
	  ga('send', 'pageview');


	</script>
</body>
</html>