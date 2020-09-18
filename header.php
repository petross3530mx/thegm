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
	<meta name="p:domain_verify" content="4b3cf63f93a02c7a27eb1931b7ba7d8d"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Customizing hrefLang meta tag -->
	<?php 
		  if(is_paged()){
				$addit = 'page/'.get_query_var('paged');	
		  } else {
		  		$addit = '';
		  };
	?>
	<?php
		 if (is_category()) {
				$queried_object = get_queried_object(); 
				$term_id = $queried_object->term_id;?>
				<link rel="alternate" href="<?php echo get_term_link($term_id).$addit; ?>" hreflang="en-us" />
	<?php } elseif (is_author()) {
		?>
				<link rel="alternate" href="<?php echo home_url() . '/author/' . get_the_author_meta( 'user_nicename').'/'.$addit; ?>" hreflang="en-us" />
	<?php } else { ?>
				<link rel="alternate" href="<?php the_permalink(); ?>" hreflang="en-us" />
	<?php } ?>

    <link rel="stylesheet" href="/wp-content/themes/thegm/css/header.css">
<link href="<?php bloginfo('template_url'); ?>/img/icons/favicon.png" rel="shortcut icon" type="image/png"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon.png" rel="apple-touch-icon"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
</head>

<body <?php body_class(); ?> >

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBTD6HJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<noscript><img height="1" width="1" style="display:none" alt="facebook pixel"
src="https://www.facebook.com/tr?id=261121354342508&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
	<div id="page" class="site">
		<header id="masthead" class="site-header">
		 <div class="cb-cat-container">
			<div class="flex-header">
				<div class="flex-header-first">
					<div class="menu-switcher">
						<span class="msw"> </span>
					</div>
					<div class="flex-logo">
						<?php echo get_custom_logo(); ?>
					</div>
					<div class="flex-nav">
						<nav id="site-navigation" class="main-navigation">
							<?php wp_nav_menu('menu=top-shop'); ?>
						</nav>
					</div>
				</div>
				<div class="">
					<div class="search">
						<img src="/wp-content/themes/thegm/img/search.svg" alt="search icon">
						<div class="search-modal">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		 </div>
		</header>
		<?php get_template_part('template-parts/menu'); ?>
		<div id="content" class="site-content">