<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?= base_url();?>
assets/images/favicon.ico" /> 
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Berita</title>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/home/');?>
css/bootstrap.min.css" /> 
<!-- Owl Carousel -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/home/');?>
css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/home/');?>
css/owl.theme.default.css" /> 
<!-- Magnific Popup -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/home/');?>
css/magnific-popup.css" /> 
<!-- Font Awesome Icon -->
<link rel="stylesheet" href="<?= base_url('assets/home/');?>
css/font-awesome.min.css"> 
<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/home/');?>
css/style.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>
assets/home/css/custom.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>
assets/home/css/nav_custom.css" /> 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="wrapCore">
	<!-- Header -->
	<header>
	<!-- Nav -->
	<nav id="nav" class="navbar nav-transparent navbar-success">
	<div class="container-fluid">
		<div class="navbar-header">
			<!-- Logo -->
			<div class="navbar-brand">
				<a href="<?php echo site_url('id/home');?>"> <img class="logo" src="<?php echo base_url();?>assets/home/img/kodiklat.png" alt="logo"> <img class="logo-alt" src="<?php echo base_url();?>assets/home/img/kodiklat.png" alt="logo"> </a>
			</div>
			<!-- /Logo -->
			<!-- Logo -->
		<div class="navbar-brand sayap">
			<a href="<?php echo site_url('id/home');?>"> 
				<img class="logo" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"> 
				<img class="logo-alt" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"></a>
		</div>
		<!-- /Logo -->
			<!-- Collapse nav button -->
			<div class="nav-collapse">
				<span></span>
			</div>
			<!-- /Collapse nav button -->
		</div>
		<!--  Main navigation  -->
		<ul class="main-nav nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url('id/home');?>">Home</a></li>
			<li class="has-dropdown">
			<a>Profil</a>
			<ul class="dropdown">
				<li><a href="<?php echo site_url('id/home/profile')?>">Profil Pusdikhub</a></li>
				<li><a href="blog-single.html">Organisasi</a></li>
			</ul>
			</li>
			<li class="active"><a href="<?php echo base_url('berita/listing');?>">Berita</a></li>
			<li class="has-dropdown">
			<a>Tautan</a>
			<ul class="dropdown">
				<li><a href="<?= base_url('id/home/link');?>">Link Satuan</a></li>
				<li><a href="http://rekrutmen-tni.mil.id/v2/index.php">Rekrutmen TNI</a></li>
				<li><a href="http://elearning.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">E-Learning</a></li>
				<li><a href="http://elibrary.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">E-Library</a></li>
				<li><a href="http://labsiber.pusdikhub.kodiklat-tniad.mil.id/" target="_blank">Lab Cyber</a></li>
			</ul>
			</li>
			<li><a href="#contact">Kontak</a></li>
			<li>
			<!-- Logo -->
			<div class="navbar-brand">
				<a href="<?php echo site_url('id/home');?>"> <img class="logo" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"> <img class="logo-alt" src="<?php echo base_url();?>assets/home/img/profile.png" alt="logo"> </a>
			</div>
			<!-- /Logo -->
			</li>
		</ul>
		<!-- /Main navigation -->
	</div>
	</nav>
	<!-- /Nav -->
	<!-- header wrapper -->
	<div class="header-wrapper sm-padding bg-grey">
		<div class="container">
			<h2>Blog Page</h2>
			
		</div>
	</div>
	<!-- /header wrapper -->
	</header>
	<!-- /Header -->