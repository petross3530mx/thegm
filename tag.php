<?php get_header(); ?>

<div id="cb-content" class="wrapfs wrap clearfix">
    <div class="cb-cat-header" style="border-bottom-color:<?php echo $cb_category_color;?>;">
       <h1 id="cb-cat-title"><?php echo get_queried_object()->name; ?></h1>
       <?php echo get_queried_object()->description; ?>
    </div>

    <!-- ~~~ -->
    <div class="cb-grid-6 mk_posts cb-module-block clearfix">
        <?php
            $queried_object = get_queried_object();
            if(check_user_agent('mobile')){
                get_posts_to_page( $count = 15, $lazy_start_at = 10, get_query_var('paged'), $queried_object);
            }else {
                get_posts_to_page( $count = 25, $lazy_start_at = 14, get_query_var('paged'), $queried_object);
            }
            
        ?>
    </div>
    <div style="clear:both;" id="otherposts" class="mk_related_caption">Other Posts You May Like</div>

    <div class="cb-grid-6 cb-module-block mk_related clearfix">
        <!--<div class="mk_wait_loading"></div>-->
        <?php
        if( is_category() ) {
            if (check_user_agent('mobile')) {
                get_random_posts($count = 15, $lazy_after = 5);
            } else {
                get_random_posts($count = 25, $lazy_after = 7);
            }
        }
        ?>
    </div>
</div>
</div> <!-- end /#cb-content -->

<?php get_footer(); ?>