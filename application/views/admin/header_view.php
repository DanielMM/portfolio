<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($page_title)){echo $page_title;}else{echo "Admin";}?> - Admin</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="description" content="The administration area for the site." />

		<link rel="icon" href="<?php echo asset_url('img'); ?>favicon.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli|Open+Sans:400,700" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>reset.css" media="screen" />
		<link type="text/css" href="<?php echo asset_url('css'); ?>south-street/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>admin.css" media="screen" />
		
		<!--LOAD CUSTOM CSS LINK HEADER ITEMS DEFINED IN CONTROLLER-->
		<?php
			if(isset($headers['css'])){
				foreach ($headers['css'] as $header) {
					echo $header;
				}
			}
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
		<script src="<?php echo asset_url('js'); ?>main.js"></script>
		<?php
			if(isset($headers['js'])){
				foreach ($headers['js'] as $header) {
					echo $header;
				}
			}
		?>
	</head>
	<body>
		<div id="header_wrapp">
			<header>
				<div id="logo">
					<h1>
						<a href="<?php echo site_url(); ?>admin">Daniel <span class="special">Mois</span></a>
					</h1>
					<h2>
						<a href="<?php echo site_url(); ?>admin">Web Developer</a>
					</h2>
				</div><!--logo-->
				<nav>
					<ul>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>admin" <?php if(isset($nav_item) && $nav_item=="article"){echo "class=\"selected\" ";}?>>Articles</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>admin/projects" <?php if(isset($nav_item) && $nav_item=="project"){echo "class=\"selected\" ";}?>>Projects</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>admin/comments" <?php if(isset($nav_item) && $nav_item=="comment"){echo "class=\"selected\" ";}?>>Comments</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>admin/media" class="<?php if(isset($nav_item) && $nav_item=="media"){echo "selected";}?>">Media</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>" class="last" target="_blank">Live</a>
							</h3>
						</li>
					</ul>
				</nav>
			</header>
		</div><!--header_wrapp-->			