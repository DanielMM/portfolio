<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($page_title)){echo $page_title;}else{echo "Portfolio";}?> - Daniel Mois - Web Developer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />
		<meta name="description" content="" />
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
				<article class="subscribe">
					<section>
						<?php
							if(isset($feedback) && $feedback):
						?>
							<h1><?php echo $feedback_message;?>. Now you can go <?php echo anchor($source, "back");?>.</h1>
						
						<?php elseif(isset($feedback) && !$feedback): ?>
						
							<h1><?php echo $feedback_message;?> You can also go <?php echo anchor($source, "back");?>.</h1>
						
						<?php
							echo form_open('subscribe');
							echo form_label('Enter your email address to subscribe', 'email'); 
							echo form_input(array('name'=>"email",'value'=>set_value('email'), 'placeholder'=>"Your email address"));
							echo form_hidden(array('source'=>$this->uri->uri_string()));
							echo form_submit(array('name'=>'submit','value'=>'Subscribe', 'class'=>'submit_btn'));
							echo form_error('email', "<p class=\"error\">","</p>");
							echo form_close();
						?>
						<?php endif; ?>
					</section>
				</article>
			</div><!--content-->
		</div><!--content_wrapp-->
		
	<?php $this->load->view('footer_view'); ?>