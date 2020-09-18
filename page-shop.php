<?php /* Template Name: Shop Page Template */ ?>
<?php
        get_header();

?>
        <div id="cb-content" class="wrap clearfix cb-cat-container">

	        <?php /*<div class="cb-cat-header" style="border-bottom-color:<?php echo $cb_page_base_color; ?>;">

	                <h1 id="cb-cat-title" ><?php echo the_title(); ?></h1>

	        </div> */ ?>

	        <?php//  if ( $cb_breadcrumbs != 'off' ) { echo cb_breadcrumbs(); } ?>

	        <?php/*
				         if (have_posts()) : while (have_posts()) : the_post();

				         if ( $cb_page_featured_style == '2' ) {
                         	echo cb_featured_image( $post, 'page' );
	                     }
			*/ ?>

			<div id="main" class="entry-content clearfix" role="main">

				<?/*php
				         if ( ( $cb_page_featured_style == NULL ) || ( $cb_page_featured_style == '1' )) {
                         	echo cb_featured_image( $post, 'page' );
	                     }
				*/?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="entry-content clearfix" itemprop="articleBody">
						
<div class="top-shop-navigtion">
<ul>						
<?php
if( have_rows('top_navigation') ):
while ( have_rows('top_navigation') ) : the_row();
echo '<li class="nav-item"><a href="#';	
the_sub_field('id');
echo '">';
the_sub_field('name');
echo '</a></li>';	
endwhile;
else :
endif;
?>
</ul>						
</div>
						
<!-- Shop Part -->     
<?php
if( have_rows('products') ):
while ( have_rows('products') ) : the_row();
if( get_row_layout() == 'single_product' ):
echo '<div class="col-4"><a href="';
the_sub_field('product_link_amazon');
echo '" target="_blank" rel="nofollow"></a><img src="';
the_sub_field('product_image');
echo '" alt="" /><h6>';
the_sub_field('product_title');
echo '<i class="fa fa-chevron-circle-right"></i></h6>';
echo '</div>';
elseif( get_row_layout() == 'p_description' ): 
echo '<span class="anchor" id="';
the_sub_field('id');
echo '"></span><div class="col-12">';
the_sub_field('content');
echo '</div>';
endif;
endwhile;
else :
endif;
?>
<!-- Shop Part End --> 	
						
						<div style="clear: both; padding: 30px 0">
						<?php the_field('bottom_content'); ?> </div>
					

						
						
			     	</section> <!-- end article section -->

					<footer class="article-footer">

                        <?php                                            

							wp_link_pages('before=<div class="cb-post-pagination clearfix">&after=</div>&next_or_number=number&pagelink=<span class="wp-link-pages-number">%</span>');
							the_tags('<p class="cb-tags"><span class="tags-title">' . __('Tags:', 'cubell') . '</span> ', '', '</p>');

                        ?>

					</footer> <!-- end article footer -->

					<?php   ?>

				</article> <!-- end article -->


			</div> <!-- end #main -->

			<!-- < ?php get_sidebar(); ?> -->

		</div> <!-- end #cb-content -->

<?php get_footer(); ?>
