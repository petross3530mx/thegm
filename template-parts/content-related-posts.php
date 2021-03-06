<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glaminati
 */
?>
<?php
			$post_objects = get_field('rel_array');

			if( $post_objects ): ?>
				    <ul class="rel-array">
				        <div class="mk_related_caption otherposts"><span class="read-next">RELATED STORY</span><em class="em-next"></em></div>
				    <?php foreach( $post_objects as $post_object): ?>
				        <li> 
				        	<div class="rel-img-wrapper">
				        		<img
							  		src="<?php echo get_the_post_thumbnail_url($post_object->ID, 'medium'); ?>"
							  		alt="<?php echo get_the_title($post_object->ID); ?>">
							  	<a class="rf-fill" href="<?php echo get_permalink($post_object->ID); ?>"></a>
							</div>  
				            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
				        </li>
				    <?php endforeach; ?>
				    </ul>
<?php endif; ?>