<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<!-- <link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" /> -->
	<?php if ($view == "home") : ?>
		<link rel="canonical" href="<?php echo URL; ?>" />
	<?php endif; ?>
	<?php $this->helpers->analytics(); ?>

	<!-- <link rel="stylesheet" href="j-sliding-banner.min.css"> -->
	<script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
	<!-- <script src="j-sliding-banner.min.js"></script> -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-P00J187PFC"></script> 
<script> 
 window.dataLayer = window.dataLayer || []; 
 function gtag(){dataLayer.push(arguments);} 
 gtag('js', new Date()); 
 
 gtag('config', 'G-P00J187PFC'); 
</script>

	<meta name="msvalidate.01" content="9A877A282408069EDD67C90E8D617507" />


</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<div class="row">
				<a href="home" class="site-logo"><img src="public/images/common/logo.jpg" alt="header-logo"></a>
				<nav>
					<a href="#" id="pull"><strong>MENU</strong></a>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about">ABOUT US</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services">SERVICES</a></li>
						<li class="spacer"></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews">REVIEWS</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact">CONTACT US</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!-- <?php// if ($view == "home") : ?> -->
	<!-- <div id="banner">
		<div class="row">
			<div class="container">
				<h1>No project is too difficult, <br>too big or small for our experienced artistic craftsmen.</h1>
			</div>
		</div>
	</div> -->

	<div id="banner">
		<h1>No project is too difficult, <br>too big or small for our<br>experienced artistic craftsmen.</h1>
	<div class="flexslider">
	  <ul class="slides">
	    <li>
	     	<img src="public/images/gallery/1.jpg">
	    </li>
	    <li>
	     	<img src="public/images/gallery/2.jpg">
	    </li>
	    <li>
	     	<img src="public/images/gallery/3.jpg">
	    </li>
	    <li>
	     	<img src="public/images/gallery/4.jpg">
	    </li>
	  </ul>
	</div>
	</div>

	<!-- <div id="banner">
	  <div id="slideshow">
		   <div>
		     	<img src="public/images/gallery/1.jpg">
		   </div>
		   <div>
		     	<img src="public/images/gallery/2.jpg">
		   </div>
		   <div>
		     	<img src="public/images/gallery/3.jpg">
		   </div>
		   <div>
		     	<img src="public/images/gallery/4.jpg">
		   </div>
		</div>
		<h1>No project is too difficult, <br>too big or small for our<br>experienced artistic craftsmen.</h1>
	</div> -->
	<!-- <?php// endif; ?> -->