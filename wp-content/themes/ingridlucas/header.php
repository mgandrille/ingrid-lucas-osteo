<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ingridlucas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin=""/>
	<!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.ico">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"> -->

    <title>Ingrid Lucas Ostéopathe</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ingridlucas' ); ?></a> -->

	<header id="header" class="container-fluid mx-auto">
		<div class="container text-center pb-3 d-none d-md-block">
			<div class="row">
				<p class="titre col">Ingrid Lucas - Ostéopathe D.O.</p>
				<p class="col">24 bis rue de Chassagne - 69360 Ternay</p>
			</div>
			<div>
				Consultations sur rendez-vous au
				<a href="tel:+33627584026">
					<i class="fas fa-phone-alt"></i>
					06 27 58 40 26
				</a>
				ou en ligne sur
				<a href="https://www.doctolib.fr/osteopathe/communay/ingrid-lucas" target="_blank" rel="">Doctolib</a>
			</div>
		</div>

		<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav w-100 justify-content-between">
					<li class="nav-item active">
						<a class="nav-link" href="#primary">Accueil</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#consultation">Quand consulter</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#seance">Séance</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#rdv">Rendez-vous</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#infos">Informations pratiques</a>
					</li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
