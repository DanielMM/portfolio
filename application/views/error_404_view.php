<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($page_title)){echo $page_title;}else{echo "Portfolio";}?> - Daniel Mois - Web Developer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />
		<meta name="description" content="Sorry, what you are looking for is not here!" />
		<meta name="googlebot" content="noindex,nofollow" />
		
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli|Open+Sans:400,700" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>reset.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>layout.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>style.css" media="screen" />
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
	<body>
		<div id="header_wrapp">
			<header>
				<div id="logo">
					<h1>
						<a href="<?php echo site_url(); ?>">Daniel <span class="special">Mois</span></a>
					</h1>
					<h2>
						<a href="<?php echo site_url(); ?>">Web Developer</a>
					</h2>
				</div><!--logo-->
				<nav>
					<ul>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>projects" <?php if(isset($nav_item) && $nav_item=="work"){echo "class=\"selected\" ";}?>>Work</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>articles" <?php if(isset($nav_item) && $nav_item=="blog"){echo "class=\"selected\" ";}?>>Articles</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>about" <?php if(isset($nav_item) && $nav_item=="about"){echo "class=\"selected\" ";}?>>About</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>contact" class="last <?php if(isset($nav_item) && $nav_item=="contact"){echo "selected";}?>">Contact</a>
							</h3>
						</li>
					</ul>
				</nav>
			</header>
		</div><!--header_wrapp-->
		<div id="content_wrapp">
			<div id="content">
				<article class="error_404">
					<section>
						<h1>It seems we have some issues finding what your are looging for!</h1>
						<h2>You can go back and try again:</h2>
						<?php echo anchor("","Go Home");?>
					</section>
				</article>
				<!-- 
				<aside class="sidebar">
					<?php $this->load->view('categories_widget_view'); ?>
				</aside> 
				-->
			</div><!--content-->
		</div><!--content_wrapp-->
		<div id="footer_wrapp">
			<footer>
				<article>
					<section>
						<h4>Latest tweets</h4>
						<ul id="tweets">
							<li>
								<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>Sunday 12:34</span></h6>
								<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
							</li>
							<li>
								<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>5 hours ago</span></h6>
								<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
							</li> 
							<li>
								<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>12.10.11 16:12</span></h6>
								<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
							</li>
							<li>
								<h6><?php echo anchor('http://twitter.com/#!/danmois','@danmois','title="Fallow me onTwitter" target="_blank"'); ?><span>12.10.11 16:12</span></h6>
								<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi susp</p>
							</li>
						</ul>
					</section>
					<section>
						<h4>Favorites</h4>
						<ul id="favorites">
							<li>
								<?php echo anchor('http://net.tutsplus.com/','Nettuts+','title="Nettuts+" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://webdesign.tutsplus.com/','Webdesigntuts+','title="Webdesigntuts+" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://sixrevisions.com/','Six Revisions','title="Six Revisions" target="_blank"');?>
							</li>
							<li>
								<?php echo anchor('http://www.alistapart.com/','A List Apart','title="A List Apart" target="_blank"');?>
							</li>
							<li><?php echo anchor('http://37signals.com/svn','37 Signals','title="37 Signals" target="_blank"');?></li>
							<li><?php echo anchor('http://codeingniter.com','Codeigniter','title="Codeigniter" target="_blank"');?></li>
							<li><?php echo anchor('http://www.webresourcesdepot.com/','Web Resources Depot','title="Web Resources Depot" target="_blank"');?></li>
							<li><?php echo anchor('http://www.webdesignerdepot.com/','Web Designer Depot','title="Web Designer Depot" target="_blank"');?></li>
						</ul>
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
				</article>
			</footer>
			<div id="copyleft">
				<p>Copyleft 2010 - <?php echo date('Y');?> Daniel Mois. No rights reserved. Powered by <?php echo anchor('http://www.codeigniter.com','Codeigniter','title="Codeigniter PHP framework"');?></p>
			</div>
		</div><!--footer_wrapp-->
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