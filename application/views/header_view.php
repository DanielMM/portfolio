<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($page_title)){echo $page_title;}else{echo "Portfolio";}?> - Daniel Mois - Web Developer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<meta name="language" content="english"> 
		<link rel="icon" href="<?php echo asset_url('img'); ?>favicon.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli|Open+Sans:400,700" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>reset.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>layout.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>style.css" media="screen" />
		<!--LOAD CUSTOM CSS LINK HEADER ITEMS DEFINED IN CONTROLLER-->
		<?php
			if(isset($headers['css'])){
				foreach ($headers['css'] as $header) {
					echo $header;
				}
			}
		?>

		<!--[if IE 8]>
			<link href="<?php echo asset_url('css'); ?>ie7.css" type="text/css" rel="stylesheet" media="screen">
		<![endif]-->
		<!--[if lte IE 7]>
			<link href="<?php echo asset_url('css'); ?>ie7.css" type="text/css" rel="stylesheet" media="screen">
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<!--LOAD CUSTOM JS LINK HEADER ITEMS DEFINED IN CONTROLLER-->
		<?php
			if(isset($headers['js'])){
				foreach ($headers['js'] as $header) {
					echo $header;
				}
			}
		?>
	</head>
	<body onload="prettyPrint()">
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
								<a href="<?php echo site_url(); ?>project" <?php if(isset($nav_item) && $nav_item=="work"){echo "class=\"selected\" ";}?>>Work</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>blog" <?php if(isset($nav_item) && $nav_item=="blog"){echo "class=\"selected\" ";}?>>Blog</a>
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