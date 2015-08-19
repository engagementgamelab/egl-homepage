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
						<h3>We are not looking to fill any positions at this time.</h3>



                        <!--<h4><span>Position:</span> Contract Unity UI Engineer</h4>
                        <p>
                        	<span>Description:</span> The Engagement Lab at Emerson College is looking for a UI Engineer for a short-term contract (1-3 months) to help us develop a game built in the Unity 5 engine. This position requires extensive experience with Unity and C#, and the ability to produce high-quality, reusable code very quickly within a small team environment. The ideal candidate will have a keen UI/UX design sense and the programming ability to implement assets created by our team in a streamlined, mobile first development cycle.
                        </p>
						<h4>Ideals</h4>
						<ul>
							<li>at least 2 years of engineering experience, ideally within gaming</li>
							<li>experience <i>with the newer Unity (4.6+) UI toolset</i>, or ability to learn it VERY quickly</li>
							<li>strong background in C#</li>
							<li>ability to rapidly prototype and iterate quickly</li>
							<li>a fundamental understanding of responsive UI</li>
							<li>able to think creatively and solve technical challenges</li>
							<li>ability to work in a self-directed manner and in a collaborative team environment</li>
							<li>consistently write well-structured and readable code</li>
							<li>solid understanding of 2D/3D graphics</li>
						</ul>
						<h4>Bonuses</h4>
						<ul>
							<li>shipped 1 or more game titles</li>
							<li>ability to work with tools such as Photoshop and/or Illustrator</li>
							<li>experience using Git or similar SCM suites</li>
							<li>experience managing interns or assistant developers</li>
							<li>interested in working on educational/experimental games</li>
						</ul>
						<p>
							Pay is negotiable and commensurate with experience. Local strongly preferred, but we will consider applicants who can work remotely.
						</p>
						<p>
							Please forward a resume/portfolio to <span>Jordan [at] elab.emerson.edu</span> along with a short bio/cover letter within the body of the email.
						</p>-->
						<p>
							The Engagement Lab is an applied research lab at <a href="http://www.emerson.edu/">Emerson College</a> focusing on the development and study of games, technology, and new media to enhance civic life. The Lab works directly with its partner communities to design and facilitate civic engagement processes, augment stakeholder deliberation, and broaden the diversity of participants in local decision-making. Along with the <a href="salzburg.umd.edu">Salzburg Academy</a> on Media and Global Change, the Engagement Lab also serves as the hub of a global network of engagement and new media organizations.
						</p>
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