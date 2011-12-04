<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($page_title)){echo $page_title;}else{echo "Portfolio";}?> - Daniel Mois - Web Developer and Designer</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli|Open+Sans:400,700" media="screen" />
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
				<article>
					<div id="countdown"></div>
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