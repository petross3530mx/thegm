<?php
/*
Template Name Posts: New Post Template
*/
?>
<?php

global $wp_query, $post;
$pc = $post->post_content;

get_header(); ?>


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
    // $categories = get_the_category();
    // $category_id = $categories[0]->cat_ID;
    $category_id = wf_primary_id(get_the_ID());
?>


<div class="next-post post-nav"><i class="icon-arrow"></i><a href="<?php echo get_category_link($category_id); ?>" rel="next">Next</a></div>

<style>
.post-nav {
    position: fixed;
    top: 50%;
    z-index: 10;
    transform: translateY(-50%);
    display: none;
    opacity: 0;
    transition-duration: 0.6s;
}
.post-nav.showing {
	display: block;
	opacity: 1
}
.prev-post {
    position: fixed;
    top: 50%;
    left: -59px;
}
.next-post {
    position: fixed;
    top: 50%;
    right: -59px;
}
.post-nav a {
    display: block;
    color: white;
    text-decoration: none;
    background: #680d3a;
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
        display: none!important;
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
// NATIVE placement. Randomize 62%/38% between 2 networks
if (rand(1,100)>62) {

//RevContent Standard
echo '
<br clear="all">
<div align="center">
<div id="rcjsload_4eb88c"></div>
</div>';

} else {

//Content.ad
echo '
<br clear="all">
<div id="contentad368713"></div>';

} //end RevContent/ContentAD Split
// } end filter for first page

?>

<?php 
$current_page = isset($wp_query->query['page']) ? $wp_query->query['page'] < 1 ? 1 : $wp_query->query['page'] : 1;
ads_for_single_post($current_page, $post->ID);
$posts = getSingleRandomPost($count = 10); ?>
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
	<!--div class="share-buttons">
		<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
		<script>function tw_click() {u=location.href;t=document.title;window.open('http://twitter.com/home?status=Currentlyreading '+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
		<ul>
		</ul>
		<li class="fb"><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="return fbs_click()" target="_blank">FB</a></li>
		<li class="tw"><a href="http://twitter.com/home?status=Currentlyreading <?php the_permalink(); ?>" onclick="return tw_click()" target="_blank">Twitter</a></li>
		<li class="pn"><a href="https://www.pinterest.com/glaminati/" target="_blank">Pinterest</a></li>
	</div-->
<?php
get_footer();

//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
@ini_set('pcre.backtrack_limit', 500000);
