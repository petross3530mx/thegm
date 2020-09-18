<?php get_header();
  $disable_lazy_load = get_field('disable_lazyload', 'option');

  if (is_null($disable_lazy_load)) {
    $disable_lazy_load = true;
  }
?>
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
    <div class="cb-cat-header">
       <h1 id="cb-cat-title"><?php echo get_category(get_query_var('cat'))->name; ?></h1>
       	<div class="publisher">
   		<?php if ($disable_lazy_load == true) { ?>
			<img src="/wp-content/uploads/2018/04/menshaircuts-logo.png" alt="<?php echo get_category(get_query_var('cat'))->name; ?>">
		<?php } else { ?>
			<img class="lazy" data-original="<?php echo get_template_directory_uri().'/img/lazy_placeholder.gif' ?>" data-original="/wp-content/uploads/2018/04/menshaircuts-logo.png" alt="<?php echo get_category(get_query_var('cat'))->name; ?>">
		<?php } ?>
		</div>
    </div>
 <div class="cb-cat-desc">
	<?php
	echo category_description( get_query_var('cat') ); ?>
</div>	

<div class="p-cont-r category-posts-wrap">
		<div class="col-12 title-f">
			<h1><span>HAIRCUT &amp; HAIRSTYLE IDEAS FOR MEN</span></h1>
		</div>
		<?php 
		global $wp_query;
		/*echo "<pre>";
		print_r($wp_query);
		echo "</pre>";*/
		$category = get_category(get_query_var('cat'));
		$count = $category->category_count;
		$slug = $category->slug;
		$posts_per_page = get_option('posts_per_page');

		if ( have_posts() ) { ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) { the_post();

				get_template_part( 'template-parts/content', 'cat' );

			}

			if ($count > $posts_per_page) { ?>
				<button 
					id="load_more_latest_cats" 
					class="load_more_latest_cats" 
					data-slug="<?php echo $slug; ?>">Load more</button>
			<?php }
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
