<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php $this->helpers->analytics(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="./public/scripts/responsive-menu.js"></script>
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>


	<!-- <li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a  href="home#content">HOME</a></li>
							<!-- <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li> -->
	<!-- <div class="menu_flex">
						<ul>
							
						</ul>
					</div> -->


	<header>
		<div id="header_container">
			<div class="logo">
			<img src="./public/images/common/main_logo.png" alt="reviews">
			</div>
			<div class="nav_menu">
				<div class="header_info">
					<div class="phone">
						<span class="phone_text">call us at </span>
						<img src="./public/images/common/header_phone.png" alt="#">
						<span class="tel_num"><a href="tel:<?php $this->info("phone"); ?>"><?php $this->info("phone"); ?></a></span>
					</div>
					<div class="soc_med">
						<a href=""><img src="./public/images/icons/facebook.fw.png" alt="#" target="_blank"></a>
						<a href=""><img src="./public/images/icons/instagram.fw.png" alt="#" target="_blank"></a>
						<a href=""><img src="./public/images/icons/location.fw.png" alt="#" target="_blank"></a>
					</div>
				</div>
				<nav>
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">COMMERCIAL RENDERINGS</a></li>
						<li><a href="#">RESIDENTIAL RENDERINGS</a></li>
						<li><a href="#">INTERIOR RENDERINGS</a></li>
						<li><a href="#">FLOORPLAN RENDERINGS</a></li>
						<li><a href="#">PERMIT TO BUILD RENDERINGS</a></li>
						<li><a href="#">CONTRACTOR RENDERINGS</a></li>
						<li><a href="#">VIRTUAL STAGING</a></li>
					</ul>
				</nav>
				<button class="hamburger">
					<div class="bar"></div>
				</button>
			</div>

			<!-- Hero -->

		</div>
		<?php if ($view == "home"): ?>
			<div id="text_container">
				<h2>A CREATIVE TEAM OF</h2>
				<h3>Real Estate Renderings Specialists</h3>
				<a class="btn" href="#">LEARN MORE</a>
			</div>
		<?php endif; ?>
	</header>