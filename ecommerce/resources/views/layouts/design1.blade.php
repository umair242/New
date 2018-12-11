<!DOCTYPE HTML>
<html>

    @foreach($headSections as $headSection)
    @include("components.".$headSection) 
    @endforeach
<body>
  <div class="wrap">
	<div class="header">
		
                    @foreach($headerSections as $headerSection)
                    @include("components.".$headerSection) 
                    @endforeach
    
    		<div class="header_top">
			
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
		     
	<div class="header_slide">
			@foreach($leftSections as $leftSection)
                    @include("components.".$leftSection) 
                    @endforeach
					 
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    
 </div>
</div>
   <div class="footer">
   	  
       @foreach($FooterSections as $FooterSection)
                    @include("components.".$FooterSection) 
                    @endforeach
       
       
       
       
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

