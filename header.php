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

	<?php
		  if(is_paged()){
				$addit = 'page/'.get_query_var('paged');
		  } else {
		  		$addit = '';
		  };
	?>
<style>
.fh2{margin: 0 0 15px;}.fh2 a{font-family: 'PT Serif', serif; font-size: 28px;}
body,html{height:100%;width:100%;margin:0;padding:0;left:0;top:0;font-size:100%}.center,.container{margin-left:auto;margin-right:auto}*{font-family:'Roboto',sans-serif;font-weight:400;color:#404040;line-height:1.5}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.375rem}h4{font-size:1.125rem}h5{font-size:1rem}h6{font-size:.875rem}p{font-size:1.125rem;font-weight:200;line-height:1.8}.font-light{font-weight:300}.font-regular{font-weight:400}.font-heavy{font-weight:700}.left{text-align:left}.right{text-align:right}.center{text-align:center}.justify{text-align:justify}.container{width:90%}.row{position:relative;width:100%}.row [class^=col]{float:left;margin:.5rem 2%;min-height:.125rem}.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9{width:96%}.col-1-sm{width:4.33%}.col-2-sm{width:12.66%}.col-3-sm{width:21%}.col-4-sm{width:29.33%}.col-5-sm{width:37.66%}.col-6-sm{width:46%}.col-7-sm{width:54.33%}.col-8-sm{width:62.66%}.col-9-sm{width:71%}.col-10-sm{width:79.33%}.col-11-sm{width:87.66%}.col-12-sm{width:96%}.row::after{content:"";display:table;clear:both}.hidden-sm{display:none}@media only screen and (min-width:33.75em){.container{width:80%}}@media only screen and (min-width:45em){.col-1{width:4.33%}.col-2{width:12.66%}.col-3{width:21%}.col-4{width:29.33%}.col-5{width:37.66%}.col-6{width:46%}.col-7{width:54.33%}.col-8{width:62.66%}.col-9{width:71%}.col-10{width:79.33%}.col-11{width:87.66%}.col-12{width:96%}.hidden-sm{display:block}}@media only screen and (min-width:60em){.container{width:75%;max-width:60rem}}
div, main, article, section, aside {box-sizing: border-box;}
header.site-header {width: 100%; position: fixed; text-align: center; background: #000; z-index: 100; -webkit-appearance: none; left: 0; top: 0; color: #fff; text-transform: uppercase;}
header.site-header nav {color: #fff;}
body.admin-bar header.site-header {top: 32px;}
h1, h2, h3, h4, h5, h6 {font-family: 'PT Serif', serif;font-weight: 500;}
header.site-header nav ul {margin: 10px 0 0;padding: 0; }
header.site-header nav ul li {list-style: none; display: inline-block;}
header.site-header nav ul li a {color: #fff; text-decoration: none;}
header.site-header nav ul li a:hover {text-decoration: underline;}
header .logo {text-align: left;}
header .logo img {display: block; max-height: 45px; width: auto;}
header .t-menu {color: #fff; text-align: right; line-height: 2.5;}
.site-content {width: 100%; clear: both; overflow: hidden;}
.entry-content-article {width: calc(100% - 350px); float: left;}
aside {width: 340px; padding: 1em; float: right;}
.inner-header-container {height: 500px;position: relative; overflow: hidden;margin-bottom: 1em;}
.inner-header-container img.wp-post-image {position: absolute; width: 100%; height: auto; z-index: 1; top: 50%; margin-top: -260px; }
.title-container { bottom: -5px; position: absolute; left: 0; width: 100%; z-index: 99;}
.inner-header-container  h1.entry-title {text-shadow: 1px 1px rgba(0, 0, 0, 0.4); width: 75%;padding: 0 50px 0 0;font-size: 3.5em; text-transform: uppercase; color: #fff;box-sizing: border-box; margin: 0 0 10px;line-height: 1.4; float: left;}
.inner-header-container  .publisher { width: 25%;float: right; z-index: 1000; text-align: center;}
.inner-header-container  .publisher img { width: 200px; position: absolute; bottom: 20px; right: 4em;}
.breadcrumbs, .entry-meta-details span, .entry-meta-details time {color: #888;}
.breadcrumbs  a {text-decoration: none; text-transform: uppercase; color: #888; font-size: 0.8em; }
.entry-meta-details, .entry-content-article footer p {color: #888; font-size: 0.8em; padding: 10px 0 0; margin: 0;}
.entry-content-article footer p {border-top: 1px solid #eee;}
.entry-content-article footer p a {text-decoration: none;color: #888; }
header.entry-header .entry-meta, .entry-content-article footer, main#main .entry-content, .title-container { padding: 0 4em;}
.cb-grid-block .cb-module-header{margin-bottom:3px}.cb-grid-block .cb-grid-img{display:none}.cb-grid-block.cb-dark{background:0}.cb-grid-3,.cb-grid-4,.cb-grid-5,.cb-grid-6{position:relative;margin:3px 0 20px 0;background:#fff}.cb-grid-3>div,.cb-grid-4>div,.cb-grid-5>div,.cb-grid-6>div{overflow:hidden;display:block;float:left;position:relative}.cb-grid-3>div img,.cb-grid-4>div img,.cb-grid-5>div img,.cb-grid-6>div img{max-width:none}.cb-grid-3 img,.cb-grid-3 a,.cb-grid-4 img,.cb-grid-4 a,.cb-grid-5 img,.cb-grid-5 a,.cb-grid-6 img,.cb-grid-6 a{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-o-backface-visibility:hidden;backface-visibility:hidden}.cb-grid-3 img,.cb-grid-4 img,.cb-grid-5 img,.cb-grid-6 img{width:100%}.cb-grid-3 .cb-link,.cb-grid-4 .cb-link,.cb-grid-5 .cb-link,.cb-grid-6 .cb-link{width:100%;height:100%;position:absolute;top:0;left:0;display:block;z-index:17}.cb-grid-3 .cb-article-meta,.cb-grid-4 .cb-article-meta,.cb-grid-5 .cb-article-meta,.cb-grid-6 .cb-article-meta{position:absolute;bottom:0;left:0;z-index:16;width:100%}.cb-grid-3 .cb-article-meta h2,.cb-grid-4 .cb-article-meta h2,.cb-grid-5 .cb-article-meta h2,.cb-grid-6 .cb-article-meta h2, .article_holder .cb-article-meta h4, .article_holder .cb-article-meta h3 {line-height:1.7;width:100%;text-align:center;margin:0;font-size:1.2em;font-weight:700;text-transform:uppercase;letter-spacing:1px;padding:10px}.cb-grid-3 .cb-article-meta h2 a,.cb-grid-4 .cb-article-meta h2 a,.cb-grid-5 .cb-article-meta h2 a,.cb-grid-6 .cb-article-meta h2 a{color:white;border-bottom:2px white solid}.cb-grid-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-article-meta .cb-byline,.cb-grid-5 .cb-article-meta .cb-byline,.cb-grid-6 .cb-article-meta .cb-byline{width:100%;padding:5px 20px 5px 20px;letter-spacing:1px;color:#fff;}.cb-grid-3 .cb-article-meta .cb-byline a,.cb-grid-4 .cb-article-meta .cb-byline a,.cb-grid-5 .cb-article-meta .cb-byline a,.cb-grid-6 .cb-article-meta .cb-byline a{color:white}.cb-grid-3 .cb-article-meta .cb-byline i,.cb-grid-4 .cb-article-meta .cb-byline i,.cb-grid-5 .cb-article-meta .cb-byline i,.cb-grid-6 .cb-article-meta .cb-byline i{color:#f0f0f0}.cb-grid-3 .cb-article-meta .cb-byline .cb-categories,.cb-grid-4 .cb-article-meta .cb-byline .cb-categories,.cb-grid-5 .cb-article-meta .cb-byline .cb-categories,.cb-grid-6 .cb-article-meta .cb-byline .cb-categories{display:inline-block;vertical-align:top}.cb-grid-3 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-4 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-5 .cb-article-meta .cb-byline .cb-categories a,.cb-grid-6 .cb-article-meta .cb-byline .cb-categories a{display:inline-block;vertical-align:top;letter-spacing:1px;color:white}.cb-grid-3 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-4 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-5 .cb-article-meta .cb-byline .cb-byline-element a,.cb-grid-6 .cb-article-meta .cb-byline .cb-byline-element a{color:white}.cb-grid-3 .cb-feature-1,.cb-grid-3 .cb-feature-2,.cb-grid-3 .cb-feature-3{width:100%;height:150px;margin:0;}.cb-grid-3 .cb-feature-1 h2,.cb-grid-3 .cb-feature-2 h2,.cb-grid-3 .cb-feature-3 h2{font-size:14px;letter-spacing:2px;padding:10px}.cb-grid-4 .cb-feature-1{width:100%;height:160px;margin:0;border-bottom:3px solid white}.cb-grid-4 .cb-feature-1 h2{font-size:16px;letter-spacing:3px;padding:10px}.cb-grid-4 .cb-feature-2{width:100%;height:120px;margin:0;}.cb-grid-4 .cb-feature-2 .cb-article-meta h2{font-size:14px}.cb-grid-4 .cb-feature-3{width:100%;height:120px;margin:0;}.cb-grid-4 .cb-feature-3 .cb-article-meta h2{font-size:12px}.cb-grid-4 .cb-feature-4{width:100%;height:120px}.cb-grid-4 .cb-feature-4 .cb-article-meta h2{font-size:12px}.cb-grid-4 .cb-feature-2 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-4 .cb-article-meta .cb-byline,.cb-grid-4 .cb-feature-5 .cb-article-meta .cb-byline{display:none}.cb-grid-5 .cb-feature-1,.cb-grid-5 .cb-feature-2,.cb-grid-5 .cb-feature-3,.cb-grid-5 .cb-feature-4,.cb-grid-5 .cb-feature-5{height:190px;width:100%}.cb-grid-5 .cb-feature-1 .cb-article-meta h2,.cb-grid-5 .cb-feature-2 .cb-article-meta h2,.cb-grid-5 .cb-feature-3 .cb-article-meta h2,.cb-grid-5 .cb-feature-4 .cb-article-meta h2,.cb-grid-5 .cb-feature-5 .cb-article-meta h2{font-size:14px}.cb-grid-5 .cb-feature-1,.cb-grid-5 .cb-feature-2,.cb-grid-5 .cb-feature-3,.cb-grid-5 .cb-feature-4,.cb-grid-5 .cb-feature-5{border-bottom:3px solid white}.cb-grid-6 .cb-feature-1,.cb-grid-6 .cb-feature-2,.cb-grid-6 .cb-feature-3,.cb-grid-6 .cb-feature-4,.cb-grid-6 .cb-feature-5,.cb-grid-6 .cb-feature-6{height:250px;width:100%;}.cb-grid-6 .cb-feature-1,.cb-grid-6 .cb-feature-6{height:130px}
.article_holder{border: 1px solid #fff; box-sizing: border-box;}
.article_holder .cb-article-meta h2, .article_holder .cb-article-meta h4, .article_holder .cb-article-meta h3 {box-sizing: border-box;}
.article_holder .cb-article-meta h2 a, .article_holder .cb-article-meta h4 a, .article_holder .cb-article-meta h3 a  {border: none; text-decoration: none;text-shadow: 1px 1px rgba(0, 0, 0, 0.4);font-family: 'Oswald', sans-serif;font-weight: 700;color: #fff;}
.article_holder .cb-byline { text-align: left;display: block; overflow: hidden;  width: 100%;  color: #fff; background: rgba(0,0,0,0.25); margin-bottom: 0px; padding-left: 10px; padding-right: 10px;padding-bottom: 0px; font-size: 0.8em;  line-height: 2.2;box-sizing: border-box;}
.article_holder .cb-byline, .article_holder .cb-byline  span	{text-shadow: 1px 1px rgba(0, 0, 0, 0.4);font-size: 0.8em; text-transform: uppercase; color: #fff;font-family: 'PT Serif', serif;}
.cb-cat-header {text-align: center; padding: 1em 2em; box-sizing: border-box;}
.cb-cat-header  p {font-size: 1em;}
#cb-cat-title, .search .page-title  {margin: 0.5em 0 0;font-size: 1.8em;text-transform: uppercase;}
.aligncenter {display: block; margin: 20px auto;}
body {padding-top: 46px !important;}
.search .page-title {text-align: center;}
@media (min-width:1080px) and (max-width:1200px){.inner-header-container{height:450px}.inner-header-container img.wp-post-image{margin-top:-225px}}@media (min-width:920px) and (max-width:1079px){.inner-header-container{height:350px}.inner-header-container h1.entry-title{font-size:2.5em}.inner-header-container img.wp-post-image{margin-top:-200px}}@media (min-width:770px) and (max-width:920px){.inner-header-container h1.entry-title{font-size:2em;padding:0 10px 0 0}.inner-header-container{height:300px}.inner-header-container img.wp-post-image{margin-top:-170px}.inner-header-container .publisher img{width:150px}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 2em}#secondary{display:none}.entry-content-article{width:100%}}@media (min-width:769px) and (max-width:1200px){.article_holder.mk_tle{width:33.33%;height:250px}.article_holder.mk_tlo{width:50%;height:250px}.article_holder.mk_gi img{min-height:250px;width:auto;min-width:100%}.footer-first-line li{width:32%}}@media (max-width:769px){#secondary,.nav-h{display:none}.article_holder.mk_tle,.article_holder.mk_tlo{width:50%;height:250px}.mk_gi img{min-height:250px;width:auto;min-width:100%}#masthead .col-2{width:46%;float:left}.menu-sidebar-inner .menu li a{font-size:1em;line-height:2.3}.entry-content-article{width:100%}header .logo img{max-height:35px}.msw{margin-top:1px}body{padding-top:49px!important}.entry-content-article footer,.title-container,header.entry-header .entry-meta,main#main .entry-content{padding:0 1em}.cb-cat-header{padding:.3em 1em}#cb-cat-title,.search .page-title{font-size:1.6em}.cb-cat-header p{font-size:.85em}.footer-first-line li{width:48%}.footer-second-line p{margin:0}.inner-header-container{height:250px}.inner-header-container img.wp-post-image{margin-top:-150px}.inner-header-container .publisher img{width:120px;right:1em}.inner-header-container h1.entry-title{font-size:2em;padding:0 20px 0 0}}@media (max-width:640px){.inner-header-container{height:200px}.inner-header-container img.wp-post-image{margin-top:-105px}.cb-grid-3 .cb-article-meta .cb-byline,.cb-grid-4 .cb-article-meta .cb-byline,.cb-grid-5 .cb-article-meta .cb-byline,.cb-grid-6 .cb-article-meta .cb-byline{padding:5px 10px}.inner-header-container h1.entry-title{font-size:1.8em}.five_sixth,.four_fifth,.one_fifth,.one_fourth,.one_half,.one_sixth,.one_third,.three_fifth,.three_fourth,.two_fifth,.two_third{position:relative;margin-right:0;float:none;width:100%;margin-bottom:30px}}@media (max-width:480px){.inner-header-container{height:200px}.inner-header-container img.wp-post-image{position:absolute;width:auto;height:100%;z-index:1;top:50%;margin-top:-100px;left:50%;margin-left:-230px}.inner-header-container .publisher img{width:70px}.inner-header-container h1.entry-title{font-size:1.7em}}@media (max-width:400px){h2{font-size:1.6rem}.article_holder.mk_tle,.article_holder.mk_tlo{width:100%;height:200px}.mk_gi img{min-height:200px;width:auto;min-width:100%}.cb-grid-img.nofade img{left:-200px}.footer-first-line li{width:98%}.fsl-list li{margin:0}.inner-header-container h1.entry-title{font-size:1.6em}.cb-post-pagination a{min-width:250px}}@media (max-width:320px){.inner-header-container h1.entry-title{font-size:1.5em}.cb-post-pagination a{min-width:220px}}@media (min-width:769px){.entry-content-article{min-height:700px}}
@media (min-width: 1201px) and (max-width: 1800px) {
.article_holder.mk_lre {width: 33.33%; height: 250px;}
.article_holder.mk_lro {width: 25%; height: 250px;}
.article_holder.mk_gi img {min-height: 250px;  width: auto;min-width: 100%; }
} @media (min-width: 1801px) {.article_holder.mk_gi {width: 25%; height: 250px;}
.article_holder.mk_gi img { min-height: 250px; width: auto;min-width: 100%;}}
.search-modal {
    position: absolute;
    width: 200px;
    right: 0;
    display: none;
}
.flex-header .search {
	position: relative;
}
.flex-header .search .screen-reader-text, .flex-header .search .search-submit {
	display: none;
}
input.search-field {
    display: block;
    width: 100%;
    border: none;
    padding: 7px;
    box-sizing: border-box;
    border: 1px solid #680d3a;
    border-top: 0;
}

author-col: nth-child(1){
 width:100% auto;
 padding-right: 100%;
}
</style>

<link href="<?php bloginfo('template_url'); ?>/img/icons/favicon.png" rel="shortcut icon" type="image/png"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon.png" rel="apple-touch-icon"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114"><link href="<?php bloginfo('template_url'); ?>/img/icons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
</head>

<body <?php body_class(); ?> >

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5P5GPK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=261121354342508&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->

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
