<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;800&family=Montserrat:wght@100;400;500;600&family=Playfair+Display&family=Poppins:ital@1&display=swap" rel="stylesheet">
	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php $this->helpers->analytics(); ?>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="./public/scripts/responsive-menu.js"></script>
	<!-- SLICK ASS -->
	<link rel="stylesheet" type="text/css" href="./public/styles/slick.css" />
	<link rel="stylesheet" type="text/css" href="./public/styles/slick-theme.css" />

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>


	<!-- <li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a  href="home#content">HOME</a></li>
							<!-- <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li> -->

	<div class="separator"></div>
	<header>
		<div id="header_container">
			<div class="flex">
				<div class="flex-item">
					<img src="./public/images/common/main_logo.png" alt="logu">
				</div>

				<div class="flex-menu">
					<nav>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?> class="active-menu"><a href="home#content">HOME</a></li>
							<li <?php $this->helpers->isActiveMenu("menu"); ?>><a href="menu#content">MENU</a></li>
							<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="reviews#content">REVIEWS</a></li>
							<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li>
							<li <?php $this->helpers->isActiveMenu("events"); ?>><a href="events#content">EVENTS</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="contact#content">CONTACT US</a></li>
						</ul>
					</nav>
					<a class="tel" href="tel:346-757-0078">346-757-0078</a>
				</div>
			</div>
			<div class="text_container">
				<h2>Ace of Clubs
					Sports Lounge
				</h2>
				<p>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
					consequat, vel illum dolore eu feugiat nulla facilisis ate
				</p>
				<a class="btn" href="#">LEARN MORE <img src="./public/images/common/arrowlang.png" alt=""></a>
			</div>

		</div>
		</div>



		<?php if ($view == "home") : ?>

		<?php endif; ?>
	</header>