        
        <div class="grid_10 push_1">
        	<p>Copyright Eduardo S&aacute;nchez Rugeles 2014.<br>Made by <i>Raffe</i></p>
      	</div>
      <!-- end .grid_12 -->
    </div>
    <!-- end .container_12 -->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#jMenu").jMenu({
				openClick : false,
				ulWidth :'auto',
				 TimeBeforeOpening : 100,
				TimeBeforeClosing : 11,
				animatedText : false,
				paddingLeft: 1,
				effects : {
					effectSpeedOpen : 150,
					effectSpeedClose : 150,
					effectTypeOpen : 'slide',
					effectTypeClose : 'slide',
					effectOpen : 'swing',
					effectClose : 'swing'
				}

			});
		});
	</script>
</body>
</html>
<?php
	if(isset($connetion)){
		mysqli_close($connection);
	}
?>