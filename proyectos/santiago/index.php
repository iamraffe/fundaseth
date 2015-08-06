<?php
	$page = 0;
	require_once('languages.php');
    include_once('header.php');
?> 

	<div id="maincontentcontainer" style="background: #2980b9; border-top: 20px solid white; ">
		<div class="standardcontainer" >
			<div class="maincontent" style="background: #F6F6F6; margin-top: -150px; padding: 25px;  padding-top: 125px; padding-bottom: 0px;">
				<div class="section group">
                	<img src="img/easterTree.svg" />
				</div>
		</div>
	</div>
	<div id="footercontainer" style=" width: 100%; margin: 0 auto; background: #1BA39C;">
		<footer>
            <div class="section group">
                <div class="col span_1_of_4">
                    <p style="margin:0; padding:0; color: white; margin-top: 15px; "><?php echo translator("Fundaseth, S.L") ?></p>
                    <p style="margin:0; padding:0; color: white;"><?php echo translator("C/ Alejandro Rodriguez, 32") ?></p>
                    <p style="margin:0; padding:0; color: white; margin-bottom: 15px;"><?php echo translator("28039 Madrid, España") ?></p>

                    <p style="margin:0; padding:0; color: white;"><?php echo translator("Teléfono") ?></p>
                    <p style="margin:0; padding:0; color: white; margin-bottom: 15px;"><?php echo translator("+(34) 913981628") ?></p>

                    <p style="margin:0; padding:0; color: white;"><?php echo translator("Correo electrónico") ?></p>
                    <p style="margin:0; padding:0; color: white;"><?php echo translator("caminodesantiago@fundaseth.es") ?></p>
                </div>
                <div class="col span_3_of_4">
                    <form action="/cvsend.php" name="contact" method="post">
                    	<textarea style="margin-bottom: 19.5px;" name="message" id="message" required placeholder="Escriba aquí sus comentarios..." ></textarea>
                        <input type="text" name="name" required="required" placeholder="Nombre completo*"  />
                        <input type="email" name="email" required="required" placeholder="Correo electrónico*" />
                        <input style="margin-bottom: 0px;" type="text" name="phone"  placeholder="Teléfono (Opcional)" />
                        
                        <button type="submit" style="display:block; float: right;">Enviar</button>
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
    <script src="js/jquery.slideme2.js"></script>
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
		
		$('.teaser').hover(
			function(){
				$(this).css('background', '#183A5B');
				$(this).children('p').css('color', 'white');
				$(this).css('border-bottom', '7.5px solid white');
				var src = $(this).children('img').attr("src").match(/[^\.]+/) + "_hover.svg";
            	$(this).children('img').attr("src", src);
			
			},
			function(){
				$(this).css('background', '#fff');
				$(this).children('p').css('color', '#183A5B');
				$(this).css('border-bottom', '7.5px solid #568AAD');
				var src = $(this).children('img').attr("src").replace("_hover.svg", ".svg");;
            	$(this).children('img').attr("src", src);
			}
		);
		
		
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
		
	</script>


</body>
</html>