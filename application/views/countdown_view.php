<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($page_title)){echo $page_title;}else{echo "Portfolio";}?> - Daniel Mois - Web Developer and Designer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>reset.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>countdown.css" media="screen" />
		<!--[if IE 8]>
			<link href="<?php echo asset_url('css'); ?>ie7.css" type="text/css" rel="stylesheet" media="screen">
		<![endif]-->
		<!--[if lte IE 7]>
			<link href="<?php echo asset_url('css'); ?>ie7.css" type="text/css" rel="stylesheet" media="screen">
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="icon" href="<?php echo asset_url('img'); ?>favicon.ico" type="image/x-icon" />
	</head>
	</body>
		<div id="content_wrapp">
			<div id="content">
				<article id="coming_soon">
					<section>
						<header>
							<div id="logo">
								<h1>
									<a href="<?php echo site_url(); ?>">Daniel <span class="special">Mois</span></a>
								</h1>
								<h2>
									<a href="<?php echo site_url(); ?>">Web Developer</a>
								</h2>
							</div><!--logo-->
						</header>
					</section>
					<section>
						<h3 class="info">A new design is in the oven! It will be ready in:</h3>
						<div id="countdown"></div>
						<h4 class="info">Leave your email address and you will be one of the first to see the new design!</h4>
						<?php
							echo form_open('subscribe',array('id'=>"subscribe_form"));
							echo form_input(array('name'=>"email",'value'=>set_value('email'), 'placeholder'=>"Email address"));
							echo form_submit('submit', 'Subscribe');
							echo form_close();
						?>
						<div id="feedback">
							<?php
								echo validation_errors('<span class="error">', '</span>');
								if(isset($feedback)):
							?>
								<span class="success"><?php echo $feedback;?></span>
							<?php endif; ?>
						</div>
					</section>
					<section>
						<ul id="social_media">
							<li>
								<?php 
									$li = "<img src=".asset_url('img')."lin.png"." width=\"52\" height=\"52\" title=\"LinkedIn - Let's connect\" alt=\"LinkedIn - Let's connect\" />";
									echo anchor("http://dk.linkedin.com/in/danielmois", $li, array('title' => "LinkedIn - Let's connect",'target'=>"_blank"));
								?>
							</li>
							<li>
								<?php 
									$fb = "<img src=".asset_url('img')."face.png"." width=\"52\" height=\"52\" title=\"Facebook - Find me\" alt=\"Facebook - Find me\" />";
									echo anchor("http://www.facebook.com/moisdaniel", $fb, array('title' => "Facebook - Find me",'target'=>"_blank"));
								?>
							</li>
							<li>
								<?php 
									$tw = "<img src=".asset_url('img')."tweet.png"." width=\"52\" height=\"52\" title=\"Tweeter - Fallow me\" alt=\"Tweeter - Fallow me\" />";
									echo anchor("http://twitter.com/#!/danmois", $tw, array('title' => "Tweeter - Fallow me",'target'=>"_blank"));
								?>
							</li>
							<li>
								<?php 
									$go = "<img src=".asset_url('img')."gmail.png"." width=\"52\" height=\"52\" title=\"Google+ - Join my circles\" alt=\"Google+ - Join my circles\" />";
									echo anchor("http://plus.google.com/107915062498309785057/posts", $go, array('title' => "Google+ - Join my circles",'target'=>"_blank"));
								?>
							</li>
						</ul>
					</section>
					<section>
						<footer>
							<div id="copyleft">
								Copyleft <span>&copy;</span>2011 Daniel Mois. No rights reserved. Powered by <?php echo anchor('http://www.codeigniter.com','Codeigniter','title="Codeigniter PHP framework"');?>.
							</div>
						</footer>
					</section>
				</article>
			</div><!--content-->
		</div><!--content_wrapp-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo asset_url('js');?>jquery-fancyCountdown-1.0.1.js"></script>
		<script>
			$(function() {
				$("#countdown").fancyCountdown({
					'year':2011,
					'month':12,
					'day':31,
					'hour':13,
					'minute':00,
					'second':00,
					'timeReachedMessage':'Hoorraay!!',
					'timeStamps':['Days', 'Hours', 'Minutes', 'Seconds']
				});
			});
		</script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-4712500-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</body>
</html>