<?php 
    
    get_header(); 
?>

<div class="cb-cat-header<?php if ($cb_theme_style == 'cb_boxed') echo ' wrap'; ?>" style="">
    <h1 id="cb-search-title"><?php _e('Search Results for:', 'cubell'); ?> <span style="color:<?php echo $cb_global_color; ?>">"<?php echo esc_attr(get_search_query()); ?>"</span></h1>
</div>
            
<div id="cb-content" class="cb-search-page wrap clearfix">
    

    <div id="main" class="clearfix search" role="main">
    <div class="p-cont-r">
    <?php
    if (have_posts()) {
                while ( have_posts() ) { the_post();
                    ?><?php get_template_part( 'template-parts/content', 'cat' );?><?php
                };
                global $wp_query;
                $count = $wp_query->found_posts;
                $posts_per_page = get_option('posts_per_page');
                if ($count > $posts_per_page) { ?>
                    <!--button 
                        id="load_more_latest_cats" 
                        class="load_more_latest_cats search-more" 
                        data-slug="<?php //echo $slug; ?>"
                        data-search="<?php //the_search_query(); ?>"
                        >Load more</button-->
                   
                <?php }
                ?><!--div class="tac"><?php echo paginate_links(); ?></div-->
    </div>
    <?php
        } else { ?>
            <article id="post-not-found" class="hentry clearfix">
                <div class="cb-cat-container p-cont-r">
                    <h2><?php _e('Sorry, nothing found.', 'cubell'); ?></h2>
                <section class="entry-content">
                    <p><?php _e('Please try searching again, but with different keywords.', 'cubell'); ?></p>
                </section>
                <footer class="article-footer">
                    <p><?php get_search_form(); ?></p>
                </footer>
                <h2 class="tac"><?php _e('Check Glaminati Latest News', 'cubell'); ?></h2>
                <?php

                    $loop = new WP_Query( array( 'orderby' => 'modify' ) );

                    if($loop->have_posts()){
                        while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part( 'template-parts/content', 'cat' );
                        endwhile;
                    }

                ?>
                </div>
            </article>
    
        <?php } ?>
        
    </div> <!-- end #main -->

    <?php //get_sidebar(); ?>
    
</div> <!-- end #cb-inner-content -->
                
<?php get_footer(); ?>