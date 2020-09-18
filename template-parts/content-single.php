<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glaminati
 */

?>
<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<link itemprop="mainEntityOfPage" href="http://example.com/article-1" />
	<header class="entry-header">
		<div class="inner-header-container">
			<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<?php glaminati_post_thumbnail();?>
				<meta itemprop="url" content="<?php the_post_thumbnail_url();?>">
			</div>
			<div class="title-container">
				<?php the_title( '<h1 itemprop="name headline" class="entry-title">', '</h1>' ); ?>
				<div itemprop="publisher" itemscope itemtype="http://schema.org/Organization" class="publisher">
					<div itemprop="logo" itemscope itemtype="https://www.schema.org/ImageObject">
						<meta itemprop="url" content="/wp-content/uploads/2018/04/menshaircuts-logo.png">
						<img src="/wp-content/uploads/2018/04/menshaircuts-logo.png" alt="MensHairCuts">
					</div>
					<span itemprop="name" content="MensHairCuts"></span>
				</div>
			</div>	
		</div>	
		<div class="entry-meta">
			<div class="breadcrumbs entry-meta-details">
				<a href="<?php bloginfo('url'); ?>" rel="v:url" property="v:title">Home</a> &raquo; 
				<span itemprop="articleSection" typeof="v:Breadcrumb">
					<?php echo post_cat_list(get_the_category()); ?>
				</span> | <span itemprop="datePublished" content="<?php the_date(); ?>"></span>
				Updated on 
				<span itemprop="dateModified" content="<?php the_modified_date(); ?>"><time><?php the_modified_date(); ?></time></span> &middot; 
				<span itemprop="author" itemscope itemtype="http://schema.org/Person">
					<span itemprop="name">by <?php the_author(); ?></span>
				</span>
			</div>
		</div>
	</header>
	<div class="entry-content-article-container">	
	<div class="entry-content-article">	
		<div class="entry-content"  itemprop="articleBody">
			<?php the_content(); ?>
			<?php if (function_exists('get_field')) { ?>
				<div class="ads-before-nav">
				<?php echo get_field('ads_before_nav', 'option') ?>
				</div>
			<?php } ?>
			<?php wp_link_pages_titled('before=<div class="cb-post-pagination clearfix">&after=</div>&next_or_number=number&pagelink=<span class="wp-link-pages-number">%</span>'); ?>
		</div>	
		<footer>
			<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
		</footer>
	</div>
	<?php get_sidebar();?>
	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->
