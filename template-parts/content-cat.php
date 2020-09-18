<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
<div class="col-5 image-p">
	<?php glaminati_post_thumbnail();?>
	</div>
	<div class="col-7">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="fh2 entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->


	

	<div class="entry-content">
	<?php the_excerpt(); ?>
				<div class="breadcrumbs entry-meta-details">
				Updated on 
				<span content="<?php the_modified_date(); ?>"><time><?php the_modified_date(); ?></time></span> &middot; 
				<span itemprop="author" itemscope itemtype="http://schema.org/Person">
					<span itemprop="name">by <?php the_author(); ?></span>
				</span> &middot; 
				<span><span class="cat-photos"><?php the_image_count(get_the_ID()); ?></span> photos</span>
			</div>
	</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->
