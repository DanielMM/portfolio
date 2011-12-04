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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo asset_url('js');?>jquery-fancyCountdown-1.0.1.js"></script>
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
						<h4 class="info">Make sure you check it out on the 1st of January 2012</h4>
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
	</body>
</html>