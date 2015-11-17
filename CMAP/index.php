<!DOCTYPE html>
<html lang='en'>
	<head>
		<?php include '../head.php' ?>
	</head>
	<body>
		<div id='wrap'>
    		<?php include '../nav.php' ?>
			<div id='whatwedo' class='anchor'>
				<div class='row'>
					<div class='researchBody'>
						<!-- <h2> What We Do </h2> -->
						<p class='bigIdea'>
							The Civic Media Arts Program (CMAP) has begun! There are things on this page that give information for you to apply! Very exciting!
						</p>
						<p>
						The Lab works directly with its partner communities to design and facilitate civic engagement processes, augment stakeholder deliberation, and broaden the diversity of participants in local decision-making. Along with the <a href='http://salzburg.umd.edu/'>Salzburg Academy on Media and Global Change</a>, the Engagement Lab also serves as the hub of a global network of engagement and new media organizations.
						</p>
					</div>
				</div>
			</div>
            <div class='container'>
				<div id='projects'>
					<div class='row'>
						<div class='span4'>
							<p class='picture'><a href='../games/community-planit/'><img src='/img/projects/cpi.jpg'></a></p>
							<p class='description'><span>Curriculum</span> is still being planned but will include many books and other media to teach students the best civic media education!</p>
						</div>
						<div class='span4'>
							<p class='picture'><a href='../games/civic-seed/'><img src='/img/projects/cs.jpg'></a></p>
							<p class='description'><span>Faculty</span> is a diverse group of individuals with different backgrounds in real-world civic media situations</p>
						</div>
						<div class='span4'>
							<p class='picture'><a href='../games/upriver/'><img src='/img/projects/upriver.jpg'></a></p>
							<p class='description'><span>Applications</span> are due soon! Prepare for the one-year program next fall!</p>
						</div>
					</div>	
				</div>
			</div>

            <div id='projectBlurb' >
				<div class='row' >
					<div class='projectBlurbBody' >
						<h1 id='engagementgames'><strong>CMAP</strong></h1> 
						<p class='bigIdea'>
							Our engagement games and play-based projects are all designed not just to facilitate official processes, education, and real-world action, but to natively be real-world actions themselves. They are designed and built in cooperation with our <a href='/about/#partners' target='_blank'>partners</a>.
						</p>
					</div>
				</div>
			</div>
			<div class='container'>		
				<div id='press' class='anchor'>
					<div class='row'>
						<div class='span12'>
							<h2>Featured Press</h2>
						</div>
					</div>
					<div class='row'>
						<div class='span6 triangle2 stagger'>
							<p class='article'>
								<a href='http://www.bostonglobe.com/business/2013/08/11/emerson-game-lab-aims-fix-local-global-problems/rBvmc2H2j2kYkfY3NvKA5H/story.html' target='_blank'>Emerson Game Lab Aims to Fix Local, Global Problems</a><br>in <span>The Boston Globe</span>, August 12, 2013
							</p>
							<p class='quote'>
								Detailed coverage of the lab, its goals, design philosophy, and projects, especially our flagship game, Community PlanIt.
							</p>
						</div>
						<div class='span6 triangle'>
							<p class='article'>
								<a href='http://www.fastcoexist.com/1681625/connecting-citizens-to-their-government-by-turning-it-into-a-game' target='_blank'>Connecting Citizens to Their Government By Turning It Into a Game</a><br> in <span>Fast Company</span>, March 29, 2013
							</p>
							<p class='quote'>
								"Community PlanIt is a game about the issues that face local government, designed to get people (especially young people) more involved and understanding of what goes in to managing their communities."
							</p>
						</div>
					</div>
					<div class='row'>
						<div class='span6 triangle'>
							<p class='article'>
								<a href='http://video.pbs.org/video/2365073145/' target='_blank'>Is School Enough?</a><br> on <span>PBS</span>, September 3, 2013
							</p>
							<p class='quote'>
								Community PlanIt is featured in this PBS special about how new technologies are breaking new ground in education.
							</p>
						</div>
						<div class='span6 triangle2 stagger'>
							<p class='article'>
								<a href='http://www.edtechmagazine.com/higher/article/2013/03/games-grow-colleges-recognize-power-gamification' target='_blank'>Games Grow Up: Colleges Recognize the Power of Gamification</a><br> on <span>EdTech</span>, March 28, 2013
							</p>
							<p class='quote'>
								"At Boston's Emerson College, the Engagement Game Lab focuses on crafting complete game experiences that lower barriers to civic involvement."
							</p>
						</div>
					</div>
					<div class='row'>
						<div class='span6 triangle2'>
							<p class='article'>
								<a href='http://www.nbcphiladelphia.com/video/#!/news/tech/Interactive-Game-Helps-With-Urban-Planning/188768411' target='_blank'>Interactive Game Helps With Urban Panning</a><br> on <span>NBC 10 Philadelphia Nightly News</span>, January 29, 2013 (Video)
							</p>
							<p class='quote'>
								NBC10 reports on Philly 2035: The Game on Community PlanIt.
							</p>
						</div>
						<div class='span6 triangle'>
							<p class='article'>
								<a href='http://wdet.org/shows/craig-fahle-show/episode/twenty-four-seven-future-game-detroit-works/' target='_blank'>24/7 Detroit and the Future</a><br> on <span>NPR's Craig Fahle Show on WDET (Detroit)</span>, June 6, 2012
							</p>
							<p class='quote'>
								Eric Gordon joins Craig Fahle of WDET in-studio to discuss the Community PlanIt game, Detroit 24/7.
							</p>
						</div>
					</div>
					<div class='row'>
						<div class='span12'>
							<p class='morePressButton'>
								<button class='btn btn-default' data-toggle='collapse' data-target='#morePress' >More Press</button>
							</p>
						</div>
					</div>
                </div>
			</div>
			<!-- <div id='push'></div> -->
   		

		<?php include '../footer.php' ?>

    	<!-- Los javascripts -->
    	<script src='/js/libs/lab.js'></script>
    	<script>
    		$LAB
    		.script('/js/libs/jquery.min.js').wait()
			.script('/js/libs/bootstrap.min.js').wait()
			.script('/js/other/about.js');
    	</script>
  </body>
</html>