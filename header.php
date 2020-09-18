<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glaminati
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="p:domain_verify" content="91016c9488b3cee4230c5b28d7f31b4c"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<link rel="stylesheet" type="text/css" as="style" href="https://menshaircuts.com/wp-content/themes/thegm/css/header.css" as="style">
	<link href="<?php bloginfo('template_url'); ?>/img/icons/favicon.png" rel="shortcut icon" type="image/png"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon.png" rel="apple-touch-icon"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

</head>
<body <?php body_class(); ?> >


<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQTQ6BF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

	<div id="page" class="site">
		<header id="masthead" class="site-header">
		 <div class="cb-cat-container">
			<div class="row">
				<div class="col-2 logo" itemscope itemtype="http://schema.org/Brand">
					<?php echo get_custom_logo(); ?>
				</div>
				<div class="col-8 nav-h">
					<nav id="site-navigation" class="main-navigation">
						<?php wp_nav_menu('menu=top-shop'); ?>
					</nav>
				</div>
				<div class="col-2 t-menu">
					<div class="menu-switcher">
						<span class="msw"> </span>
					</div>
				</div>
			</div>
		 </div>
		</header>
		<?php get_template_part('template-parts/menu'); ?>
		<div id="content" class="site-content">
