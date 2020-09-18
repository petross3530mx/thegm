<?php get_header(); ?>
<style>
@media (min-width: 1px) and (max-width: 769px) {
.cb-cat-header	{background: url('<?php 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
the_field('top_image-s', $taxonomy . '_' . $term_id);
?>') no-repeat center center; !important}}
@media (min-width: 770px) {
.cb-cat-header	{background: url('<?php 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
the_field('top_image', $taxonomy . '_' . $term_id);
?>') no-repeat center center;}}
</style>
<div class="category-layout-v2">
<div id="cb-content" class="wrapfs wrap clearfix">


<div class="p-cont-r category-posts-wrap">
		<?php 
		global $wp_query;
		/*echo "<pre>";
		print_r($wp_query);
		echo "</pre>";*/

	

		if ( have_posts() ) { ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) { the_post();

				get_template_part( 'template-parts/content', 'cat' );

			}

			/*the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );*/

		} else {
			get_template_part( 'template-parts/content', 'none' );
		} ?>
</div>
</div>
</div>
</div> <!-- end /#cb-content -->

<?php get_footer(); ?>
