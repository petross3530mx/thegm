<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glaminati
 */

$category = get_the_category();
?>

<aside id="secondary" class="widget-area">
	<?php $current_page = $wp_query->query['page'] < 1 ? 1 : $wp_query->query['page'];
	ads_for_single_post($current_page, $post->ID); ?>
	<div class="relatedposts-container">
		<?php if (isset($category[0])) { ?>
			<div class="mk_related_caption">More from <?php echo $category[0]->name; ?></div>
		<?php  } ?>
		<div class="new_related clearfix">
			<?php
			$posts = getSingleRandomPost($count = 5, $category);

			if (!empty($posts)) {
				renderSinglePost($posts);
			}
			?>
		</div>
	</div>
	<?php
		function isMobile() { 

		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
		}

		if(!isMobile()){
			dynamic_sidebar('Sidebar');
		} ?>
	


	<!-- /21714348041/right_sidebar_300x600 -->
	<div class="stick_point"></div>
	<div class="sidebar_ad_placement">
		<div id='div-gpt-ad-1542994450852-0' style='height:600px; width:300px; margin-top: 15px;'>
			<script>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1542994450852-0'); });
			</script>
		</div>
	</div>


</aside><!-- #secondary -->