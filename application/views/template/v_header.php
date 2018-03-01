
<!DOCTYPE html>

	<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NCT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="JONFLIGHT" />
	<meta name="keywords" content="JONFLIGHT" />
	<meta name="author" content="JONFLIGHT" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/seat.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url() ?>_assets/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php echo base_url() ?>"><i class="icon-airplane"></i>NCTicketing</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class=""><a href="<?php echo base_url() ?>">Home</a></li>

							<?php if ( $this->session->userdata('user') ): ?>
							<li class=""><a href="<?php echo base_url() ?>reservation">My Reservation</a></li>
							<li class="header-username"><a><?php echo $this->session->userdata('user')['username'] ?></a></li>
							<li class=""><a href="<?php echo base_url() ?>account/logout">Logout</a></li>
							
							<?php else: ?>
							<li class=""><a href="<?php echo base_url() ?>account/signin">Signin</a></li>
							<li class=""><a href="<?php echo base_url() ?>account/signup">Signup</a></li>
							<?php endif; ?>

						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->