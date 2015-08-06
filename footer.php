	<div id="footercontainer">
		<footer>
        	<div class="col span_1_of_4">
            	<p class="floatleft"><?php echo translator("© Fundaseth, S.L. 2014") ?></p>
            </div>
            <div class="col span_3_of_4">
            	<p class="floatright"><?php echo translator("c/ Alejandro Rodríguez, 32. 28039 Madrid. Tel.: 913981628") ?></p>
            </div>
		</footer>
	</div>
</div>
	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->

<!-- More Scripts-->
<script src="js/responsivegridsystem.js"></script>
<script src="js/magnificpopup.js"></script>
<?php
	if($page == 2){
echo "<script>";
echo	"$('.open-popup-link').magnificPopup({";
echo	  "type:'inline',";
echo	  "midClick: true,"; 
echo	  "closeBtnInside:true";
echo	"});";	
echo "</script>";
    }
?>

<?php
	if($page == 0){
		echo "<script src=\"js/unslider.min.js\"></script>";
		echo "<script src=\"js/jquery.event.swipe.js\"></script>";
		echo "<script>";
		echo "	jQuery(document).ready(function() {";
		echo "		$('.banner').unslider({";
		echo "			speed: 750,               ";
		echo "			delay: 3750,              ";
		echo "			complete: function() {},  ";
		echo "			keys: true,              ";
		echo "			dots: false,               ";
		echo "			fluid: true           ";
		echo "		});";
		echo "	});";
		echo "</script>";
    }
?>
<script>
		function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown > li');

				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						var url = $(location).attr('pathname');
						//var url = window.location.href;
						obj.placeholder.text(obj.val);
						if(obj.index == 0){
							//window.location
							url = url + '?lang=en_US';
							
						}
						else{
							//window.location
							url = url + '?lang=es';
						}
						window.location = url;
					});
				},/*	
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}*/
			}
			
			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-3').removeClass('active');
				});

			});
			
			      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-52435582-1', 'auto');
      ga('send', 'pageview');
</script>

</body>
</html>