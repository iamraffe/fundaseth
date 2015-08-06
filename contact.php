<?php
	$page = 4;

	require_once("languages.php");
    include_once('header.php');
?>
	</div>
    <div id="maincontentcontainer">
    <h1 style="display: none;">Fundaseth</h1>
        <div class="standardcontainer">
            <div class="maincontent">
           	  <div class="section group sectionTitle">
                	<h2><?php echo translator("Contacto") ?></h2>
                </div>              
            
                <div class="section group contactIntro" style="padding: 5%; font-size: 125%;">
                     <h3><?php echo translator("No sea tímido, contáctenos. Podría ser el comienzo de algo grande.") ?></h3>
                </div>
                <div class="section group">
                	<iframe style="border:0"  height="300"
src="https://www.google.com/maps/embed/v1/place?q=Fundawork%2C%20Calle%20de%20Alejandro%20Rodr%C3%ADguez%2C%20Madrid%2C%20Spain&amp;key=AIzaSyAlnKDtzJoIfHbA99KRyXgrxZc134M53wk"></iframe>
                </div>
                <div class="section group aboutContact">
                
                	<div class="col span_1_of_2" style=" color: #606064; ">
                    	<form action="send.php" name="contact" method="post" style="margin-left:0;">
                            <input type="text" name="name" required="required" placeholder="<?php echo translator("Nombre completo*") ?>" style="margin-top: 15px;" />
                            <input type="email" name="email" required="required" placeholder="<?php echo translator("Correo electrónico*") ?>" />
                            <input type="text" name="phone"  placeholder="<?php echo translator("Teléfono (Opcional)") ?>" />
                            <textarea name="message" id="message" required placeholder="<?php echo translator("Escriba aquí sus comentarios...") ?>" ></textarea>
                            <button id="contact" type="submit" style="display:block;">Enviar</button>
                        </form>
                    </div>
                	
                     <div class="col span_1_of_2" style="color: #606064; height:300px; margin: 0; ">
                        <h4><?php echo translator("Dirección") ?></h4>
                        <p><?php echo translator("Calle Alejandro Rodriguez, 32") ?></p>
                        <p><?php echo translator("28039 Madrid") ?></p>
                        <h4><?php echo translator("Teléfono") ?></h4>
                        <p><a href="tel:913981628" title="Contacto Teléfono">913981628</a></p>
                        <h4><?php echo translator("Correo electrónico") ?></h4>
                       	<p><a href="mailto:info@fundaseth.es?Subject=Fundaseth:%20Contacto" target="_top" title="Contacto Email">info@fundaseth.es</a></p>
                    </div>

                 </div>   

            </div>
         </div>
    </div>
<?php require_once('footer.php') ?>