<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;800&display=swap" rel="stylesheet">

	<!-- Meta Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '666034927129237');
		fbq('track', 'PageView');
	</script>
	<!-- End Meta Pixel Code -->
	
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-J9T4LNW63W"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-J9T4LNW63W');
	</script>
	<!-- End Google tag -->
</head>

<body <?php body_class(); ?>>
<header>
	<!-- Desktop Nav -->
	<nav class="main-nav__desktop d-none d-lg-block">
		<div>
			<div class="container">
				<div class="row">
					<?php
						wp_nav_menu( array(
							'menu' => 'header',
							'menu_class' => 'desktop-items'
						));
					?>
				</div>
			</div>
		</div>
	</nav>
	<!-- Mobile Nav -->
	<nav class="main-nav__mobile d-sm-block d-lg-none">
		<div class="container-fluid">
			<div class="d-flex w-100 justify-content-end">
				<div class="header-center d-flex justify-content-between w-100">
					<div class="logo">
						<a href="/" aria-label="home page button">
							<img src="wp-content/themes/sampsonsound/dist/img/favicon-border.png" alt="Sampson Sound">
						</a>
					</div>
					<div class="nav-toggle">X</div>
				</div>
			</div>
		</div>
		<!-- Nav Drawer -->
		<div class="nav-drawer">
			<div class="container">
				<div class="row">
					<?php
						wp_nav_menu( array(
							'menu' => 'mobile nav',
							'menu_class' => 'mobile-items',
						));
					?>
				</div>
			</div>
		</div>
	</nav>
</header>
<!-- Meta Basecode -->
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=666034927129237&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Basecode -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
                
