<?php
	session_start();
	include("includes/header.php");
	?>
		<div class="content">
			<h1> O nas</h1>
			<div class="omnie">
				<img src="img/onas.jpg" alt="zdjecie o nas">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue. Cras suscipit, urna at aliquam rhoncus, urna quam viverra nisi, in interdum massa nibh nec erat.<p/>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis.<p/>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis.<p/>
				</div>

		
		</div>
		


	</div>
	
		<script> src="jquery-3.3.1.min.js"></script>	
<script>

	$(document).ready(function(){
			var navY = $('.nav').offset().top;
			
			var stickyNav = function(){
				var scrollY = $(window).scrollTop();
				
				if(scrollY > navY)
				{
					$('.nav').addClass('sticky');
					$('.content').css('padding-top', '70px');
				}
				else
				{
					$('.nav').removeClass('sticky');
					$('.content').css('padding-top', '10px');
				}
			};
			
			stickyNav();
			
			$(window).scroll(function(){
				stickyNav();
			});
		});
	
</script>
	
</body>


</html>