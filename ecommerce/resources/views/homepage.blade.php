<!DOCTYPE HTML>
<html>

<body>
  <div class="wrap">
	<div class="header">
		main_nav
		<div class="header_top">
			//logo
			//cart
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	//menu
	     	
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				left nav				
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    main product
 </div>
</div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
                 Footer/info/my account/contact
				
				
				
			</div>			
        </div>
       
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

