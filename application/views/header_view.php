<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($title)){echo $title;}?> - Daniel Mois - Web Developer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<link href="<?php echo asset_url('css'); ?>reset.css" type="text/css" rel="stylesheet" media="screen">
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>layout.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php echo asset_url('css'); ?>style.css" media="screen" />
		<!--[if IE 9]>
		<![endif]-->
		<!--[if IE 8]>
			<link href="<?php echo asset_url('css'); ?>ie8.css" type="text/css" rel="stylesheet" media="screen">
		<![endif]-->
		<!--[if lte IE 7]>
			<link href="<?php echo asset_url('css'); ?>ie7.css" type="text/css" rel="stylesheet" media="screen">
		<![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Muli|Open+Sans:600,700' rel='stylesheet' type='text/css'>
		<link rel="icon" href="<?php echo asset_url('img'); ?>favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<div id="header_wrapp">
			<header>
				<div id="logo">
					<h1>
						<a href="<?php echo site_url(); ?>welcome">Daniel <span class="special">Mois</span> Web Developer</a>
					</h1>
				</div><!--logo-->
				<nav>
					<ul>
						<li class="first">
							<h3>
								<a href="<?php echo site_url(); ?>project">Work</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>blog">Blog</a>
							</h3>
						</li>
						<li>
							<h3>
								<a href="<?php echo site_url(); ?>about">About</a>
							</h3>
						</li>
						<li class="last">
							<h3>
								<a href="<?php echo site_url(); ?>contact">Contact</a>
							</h3>
						</li>
					</ul>
				</nav>
			</header>
		</div><!--header_wrapp-->		