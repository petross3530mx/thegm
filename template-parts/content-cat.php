<?php
/**
 * The template part for displaying content
 *
 * @package glaminati
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
<div class="col-6 image-p">
	<a href="<?php echo esc_url( get_permalink()); ?>" rel="bookmark"><?php the_post_thumbnail('medium');?></a>
</div>
	<div class="col-6">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="fh2 entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
				<?php the_excerpt(); ?>
				<div class="breadcrumbs entry-meta-details">
				<span content="<?php the_modified_date(); ?>">Updated <time><?php the_modified_date(); ?></time></span> &middot; 
				<span itemprop="author" itemscope itemtype="http://schema.org/Person">
					<span itemprop="name">by <?php the_author(); ?></span>
				</span>
			</div>
	</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->
