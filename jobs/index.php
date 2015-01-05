<!DOCTYPE html>
<html lang='en'>
	<head>
		<?php include '../head.php' ?>
	</head>
	<body>
		<div id='wrap'>
    		<?php include '../nav.php' ?>
			<div class='container'>
				<div class='row' id='jobs'>
					<div class='span12'>
						<h1>Come Work with Us!</h1>
						<h3>We are looking to fill the following positions as soon as possible:</h3>
                        
						<h4><span>Position:</span> Javascript Developer</h4>
						<h4><span>Type:</span> Full Time </h4>
						<p>
							<span>Description:</span> We are looking for a dynamic full time javascript programmer who can assist in lab projects ranging from online games to data visualizations to civic APIs. This person will work with the lab and its partners at the UN, the Red Cross, the City of Boston, and others to create experimental and playful solutions to local and global civic issues. This position will involve working closely with our visual designers, content experts, and game designers, using open web technologies. 
						</p>
						<p>
							Skills and experience necessary for this role:
							<ul>
								<li>
									Fluent in JavaScript	
								</li>
								<li>
									Familiarity with jQuery
								</li>
								<li>
									HTML and CSS skills
								</li>
								<li>
									Experience or the ability to pick up NodeJS quickly
								</li>
								<li>
									Familiarity with simple database concepts (MongoDB skills a plus)
								</li>
							</ul>
						</p>
						<p>
							Please send an email to <span>steve [at] engagementgamelab.org</span> with a link to your portfolio and a brief description about your background and experience.
						</p>
                        <br />
                        
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