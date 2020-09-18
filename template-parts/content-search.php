<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glaminati
 */

$post_ID = get_the_ID();
?>

<div class="cb-grid-img nofade">
<?php echo '<a href="' . get_permalink($post_ID) . '">';
  if  ( has_post_thumbnail($post_ID) ) {
    echo get_the_post_thumbnail($post_ID, "large");
  }
echo '</a>'; ?>
</div>
<div class="cb-article-meta">
	<?php if(is_home())$h=2;
	elseif(is_category())$h=3;
	else $h=4;//h2 headers for home page and h4 for others ?>
	<h<?php echo $h ?>><a href="<?php the_permalink($post_ID) ?>"><?php the_title(); ?></a></h<?php echo $h ?>>
	<?php echo cb_byline(true, $post_ID);  ?>
</div>