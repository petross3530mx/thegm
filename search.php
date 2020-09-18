<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package glaminati
 */

get_header();   
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


<div class="p-cont-r category-posts-wrap">
			<?php
					/* Start the Loop */
					$i = 1;
					while ( have_posts() ) : the_post();
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'cat' );
						$i++;
					endwhile;
			?>
</div>
</div>
</div>
</div> <!-- end /#cb-content -->




<?php
get_footer();
