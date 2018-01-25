		<footer>
			<?php include 'assets/includes/modals.php'; ?>
			<span><?php echo date(Y); ?> &copy RizePoint.com | All Rights Reserved</span>
		</footer>
		
		<!-- js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
		<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
		
		
		<!-- detect screen size -->
		<script>
			
			$(document).ready(function() {	
				
				$('#cal').hide();
				$('#list').hide();
				
				// display the content based on screen size
				if(window.innerWidth >= 768) { 
					$('#cal').show();
					$('#list').hide();
				}
				else if (window.innerWidth < 768) {
					$('#list').show();
					$('#cal').hide();
				}else{
					console.log('An error occurred.');
				}
			});

				$('#list-view-btn').click(function() {
					$('#list').show();
					$('#cal').hide();
				});

				$('#cal-view-btn').click(function() {
					$('#list').hide();
					$('#cal').show();
				});
		
		</script>
		
	</body>
</html>