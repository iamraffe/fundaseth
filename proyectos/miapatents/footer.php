	<div id="footercontainer" style=" width: 100%; margin: 0 auto; background: #1B5479;">
		<footer>
            <div class="section group">
            	<div id="copy">
                	<p><?php echo translator("© Manuel Illescas Asociados, 2014"); ?></p>
                </div>
                <div id="bilbao">
                	<p style="font-weight: bold; font-style:normal;"><?php echo translator("BILBAO"); ?></p>
                    <p><?php echo translator("Paulino Mendíbil, 1, bajo derecha"); ?></p>
                    <p><?php echo translator("48930 Las Arenas (Vizcaya)"); ?></p>
                    <p><?php echo translator("Tel.: (+34) 944314083"); ?></p>
                </div>
                <div id="madrid">
                	<p style="font-weight: bold; font-style:normal;"><?php echo translator("MADRID"); ?></p>
                    <p><?php echo translator("Principe de Vergara, 197, oficina 1º A"); ?></p>
                    <p><?php echo translator("28002 Madrid"); ?></p>
                    <p><?php echo translator("Tel.: (+34) 917011605"); ?></p>
                </div>
                <div id="email">
                	<img src="img/email.png">
                    <p><?php echo translator("Correo electrónico: mail@miapatentes.com"); ?></p>
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
			if($page == 2 || $page == 1 || $page == 4){
				echo    "<script src=\"js/magnificpopup.js\"></script>";
				echo "<script>";
				echo	"$('.open-popup-link').magnificPopup({";
				echo	  "type:'inline',";
				echo	  "midClick: true,"; 
				echo	  "closeBtnInside:true";
				echo	"});";	
				echo "</script>";
			}

			if($page == 0){
				echo "
					<script src=\"js/jquery.slideme2.js\"></script>
				";
			}

		?>
	
    <script type="text/javascript">
	
		$('nav ul li').hover(function(){
			$(this).children('a').css('color', '#1B365D');
		}, function(){
			if ( $( this ).is( '.active' ) ) {
				$(this).children('a').css('color', '#1B365D');
			}
			else{
				$(this).children('a').css('color', '#5E8AB4');
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
						width: 1280,
						height: 720,
					}
					
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