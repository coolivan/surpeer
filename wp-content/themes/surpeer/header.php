<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title><?php wp_title('/', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
	</head>

	<body>
		<div class="header" id="header">
			<div class="container">
				<div class="logo pull-left">
					<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>
				</div>
				<div class="toggle-menu visible-xs">
					<i class="fa fa-align-justify"></i>
				</div>
				<div class="menu pull-right">
					<ul>
						<li>
							<a href="/">HOME</a>
						</li>
						<li>
							<a href="/category/products">PRODUCTS</a>
						</li>
						<li>
							<a href="/category/news">NEWS</a>
						</li>
						<li>
							<a href="/about-us">ABOUT US</a>
						</li>
						<li>
							<a href="/contact-us">COUNTACT US</a>
						</li>
					</ul>
				</div>
				

			</div>
		</div>
	