<?php
/*
Template Name Posts: New Post Template
*/
?>
<?php
get_header();
$curr_id = get_the_ID();
?>


<div id="primary" class="content-area">
	<main id="main" class="site-main">
	<?php
        while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'cut-off');
		endwhile;
    ?>
	</main>
</div>

<?php 
$current_page = isset($wp_query->query['page']) ? $wp_query->query['page'] < 1 ? 1 : $wp_query->query['page'] : 1;
ads_for_single_post($current_page, $post->ID);
$category = get_the_category();
$posts = getSingleRandomPost($count = 10, $category); ?>
<div class="col-12 relatedposts-container cb-cat-container" id="rf-wrapper">
<div class="inter-t" >
	<?php if (!empty($posts)) { ?>
		<div  class="mk_related_caption otherposts"><span class="read-next">MORE MUST-READ ARTICLES</span><em class="em-next"></em></div>
			<div class="new_related clearfix" id="rf-posts">
			<?php renderRelatedFooterPost($posts); ?>
			</div>
		</div>
	<?php } ?>
</div>

</div>
<?php 
    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;

    // foreach ($categories as $cat) {
    //    $category_link = get_category_link($cat->cat_ID);
    //    echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">'.$cat->name.'</a>';
    // }
?>

<!-- <div class="prev-post post-nav"><i class="icon-arrow"></i><?php  //previous_post_link( '%link', 'Prev', TRUE); ?></div> -->
<div class="next-post post-nav"><i class="icon-arrow"></i><a href="<?php echo wf_primary_catlink($curr_id); ?>" rel="next">Next</a></div>

<style>
.post-nav {
    display: none;
    position: fixed;
    top: 50%;
    z-index: 10;
    transform: translateY(-50%);
}
.showing {
    display: block;
}
.next-post {
    position: fixed;
    top: 50%;
    right: -59px;
}
.prev-post {
    position: fixed;
    top: 50%;
    left: -59px;
}
.post-nav a {
    display: block;
    color: white;
    text-decoration: none;
    background: #000;
    border-radius: 50%;
    width: 118px;
    height: 118px;
    padding-top: 35px;
    box-sizing: border-box;
    box-shadow: 0 2px 8px 0 rgba(33,43,53,.24);
    transition: .2s ease-out;
    will-change: background-color,border-color,color;
}
.post-nav a:hover {
    box-shadow: 0 8px 12px 0 rgba(33,43,53,.24);
}
.next-post a {
    margin-left: 10px;
    padding-left: 17px;
}
.prev-post a {
    margin-right: 10px;
    padding-left: 70px;
    text-align: left;
}
.post-nav a:before {
    content: '';
    display: block;
    position: relative;
    width: 20px;
    height: 20px;
    border-right: 3px solid white;
    border-bottom: 3px solid white;
    border-radius: 3px;
    margin-bottom: 10px;
}
.next-post a:before {
    transform: rotate(-45deg);
    margin-left: 2px;
}
.prev-post a:before {
    transform: rotate(130deg);
    margin-left: 6px;
}
@media screen and (max-width: 768px) {
    .prev-post {
        display: none;
    }
    .next-post {
        right: -40px;
    }
    .next-post a {
        text-indent: -9999;
        margin-left: 10px;
        width: 85px;
        height: 85px;
        padding-top: 31px;
        padding-left: 10px;
        font-size: 0;
    }
    .next-post a:before {
        transform: rotate(-45deg);
        margin-left: 0px;
    }
}
</style>
	
<?php
get_footer();

//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
@ini_set('pcre.backtrack_limit', 500000);
