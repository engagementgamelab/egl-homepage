<!DOCTYPE html>
<html lang='en'>
	<head>
		<?php include '../head.php' ?>
	</head>
	<body>
		<div id='wrap'>
    		<?php include '../nav.php' ?>
    		<div class='container'>
    			<div class='row'>
    				<div class='span12'>
                        <h1>Upcoming Events</h1>
                        
    					<iframe src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=engagementgamelab.org_7a4nrpa2ah3tult6ftd3mc06bc%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FNew_York" style=" border-width:0 " width="1000" height="400" frameborder="0" scrolling="no"></iframe>

                    <h1>   </h1>
                     <h1>   </h1>

    				</div>
	    		</div>
    		</div>
    		<div id='push'></div>
    	</div>

    	<?php include '../footer.php' ?>

    	<!-- Los javascripts -->
    	<script src='/js/libs/lab.js'></script>
    	<script>
    		$LAB
    		.script('/js/libs/jquery.min.js').wait()
			.script('/js/libs/bootstrap.min.js');
    	</script>
	</body>
</html>
