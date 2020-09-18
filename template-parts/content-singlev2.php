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
	<link itemprop="mainEntityOfPage" href="//example.com/article-1" />
	<header class="entry-header">
		<div class="inner-header-container">
			<div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
				<?php glaminati_post_thumbnail();?>
				<meta itemprop="url" content="<?php the_post_thumbnail_url();?>">
			</div>
				<div itemprop="publisher" itemscope itemtype="http://schema.org/Organization" class="publisher">
					<!--div itemprop="logo" itemscope itemtype="http://www.schema.org/ImageObject">
						<meta itemprop="url" content="<?php //bloginfo('url'); ?>/wp-content/uploads/2019/02/mens-hair-cuts-logo-sq.png">
						<img src="<?php //bloginfo('url'); ?>/wp-content/uploads/2019/02/mens-hair-cuts-logo-sq.png" alt="MensHairCuts">
					</div-->
					<span itemprop="name" content="MensHairCuts"></span>
				</div>
			<span class="photo-source"><?php the_field('source_by'); ?></span>
		</div>	
		<div class="entry-meta">
		<div class="entry-meta-c">
			<div class="breadcrumbs entry-meta-details">
				<a href="<?php bloginfo('url'); ?>" rel="v:url" property="v:title">Home</a> &raquo; 
				<span itemprop="articleSection" typeof="v:Breadcrumb">
					<?php echo post_cat_list(get_the_category()); ?>
				</span> | <span itemprop="datePublished" content="<?php the_date(); ?>"></span>
				Updated on 
				<span itemprop="dateModified" content="<?php the_modified_date(); ?>"><?php the_modified_date(); ?></span>
				<br/>
				<span itemprop="author" itemscope itemtype="http://schema.org/Person">
					<span itemprop="name">By <?php the_author(); ?></span>  | 
				</span>
				<div class="photo-source">
					<?php if(!empty(get_field('source_by'))):?>
						Main photo: <?php the_field('source_by'); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="title-container">
				<?php the_title( '<h1 itemprop="name headline" class="entry-title">', '</h1>' ); ?>
			</div>
			<div class="post-excerpt">
			<?php the_excerpt(); ?>
			<?php the_field('content'); ?>
			</div>
		</div>	
		</div>
	</header>
	<div class="entry-content-article-container">
	<!-- /21714348041/after_first_page_728x90 -->
	<div id='div-gpt-ad-1542986592412-0' style='text-align: center;'>
		<script>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-1542986592412-0'); });
		</script>
	</div>
	<div class="cut-off-item">
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
			<!-- <footer>
				< ?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
			</footer>-->
		</div>
		<?php get_sidebar('news');?>
	</div>
	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->
