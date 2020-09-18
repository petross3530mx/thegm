<?php
/**
 * Template part for displaying page content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glaminati
 */
?>
<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<link itemprop="mainEntityOfPage" href="//example.com/article-1" />
	<header class="entry-header">
		<div class="entry-meta">
		<div class="entry-meta-c">

			<!-- REPAIR WORKS -->
			<!-- OLD ONE MARKUP-->
			<div class="breadcrumbs entry-meta-details">
				<!-- WORKS for breadcrumbs HERE -->
				<?php //if($_GET['test']): ?>
				  <?php glam_breadcrumbs(get_the_ID()); ?>
		      	  <style>
			      	  .nav_breadcrumbs {
		      	  	    color: #888;
					    font-size: .8em;
					    padding: 10px 0 0;
					    margin: 0;
					    list-style:none;
			      	  }
			      	  .nav_breadcrumbs li {
			      	  	display: inline-block;
			      	  }

		      	  </style>
				<!-- WORKS HERE -->
				<?php //endif; ?>
				<span itemprop="datePublished" content="<?php the_date('c'); ?>"></span>
				<span itemprop="author" itemscope itemtype="http://schema.org/Person">
					<a href="<?= mh_author_url(); ?>" class="author-modify">
						<span itemprop="name">By <?php the_author(); ?></span>
					</a>
				</span>
				 | <span itemprop="dateModified" content="<?php the_modified_date('c'); ?>">Updated <?php the_modified_date(); ?></span>
				<br/>
				<div class="photo-source">
					<?php if(!empty(get_field('source_by'))):?>
						Main photo: <?php the_field('source_by'); ?>
					<?php endif; ?>
				</div>
			</div>
			<!---->
			<!-- //REPAIR WORKS -->
			<div class="title-container">
				<?php the_title( '<h1 itemprop="name headline" class="entry-title">', '</h1>' ); ?>
			</div>
			<div class="post-excerpt">
			<?php the_excerpt(); ?>
			<?php the_field('content'); ?>
			</div>
		</div>	
		</div>
		<div class="inner-header-container">
			<div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
				<?php glaminati_post_thumbnail();?>
				<div id="additional-post-info" style="position: absolute;
			    bottom: 0;
			    left: 0;
			    padding: 10px 0;
			    text-align: center;
			    z-index: 1;
			    background-color: #85a5a966;
			    color: white;">
					<div style="display: inline-block;width: 100px;">
					          <svg width="30px" height="37px" viewBox="0 0 73 89" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <defs></defs>
							    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							        <g id="Group" transform="translate(3.000000, 3.000000)" stroke-width="5" stroke="#FFFFFF">
							            <polygon id="Path-3" points="30 18 30 4 43.6999512 18"></polygon>
							            <polyline id="Path-2" points="27.5 0.5 0.5 0.5 1.5 62.0757576 47 62 47 20.2613636"></polyline>
							            <polyline id="Path-2" points="12 63.5 12 72.5757576 57.5 72.5 57.5 30.7613636 57.5 17 41 16.5"></polyline>
							            <polyline id="Path-2" points="22 74 22 83.0757576 67.5 83 67.5 41.2613636 67.5 27.5 56.5 27.5"></polyline>
							        </g>
							    </g>
							</svg>
					    	  <div style="font-size: 10px; color: white;"><?php the_image_count(get_the_ID()); ?> PHOTOS</div>
					</div>
	        	</div>
				<meta itemprop="url" content="<?php the_post_thumbnail_url();?>">
			</div>
			<div itemprop="publisher" itemscope itemtype="http://schema.org/Organization" class="publisher">
					<div itemprop="logo" itemscope itemtype="http://www.schema.org/ImageObject">
						<meta itemprop="url" content="<?php bloginfo('url'); ?>/wp-content/uploads/2019/10/gold-black-205x50.png">
					</div>
					<span itemprop="name" content="LoveHairStyles"></span>
			</div>
		</div>	
		<span class="clearboth"></span>
	</header>

	<div class="entry-content-article-container cb-cat-container" itemprop="articleBody">
		<div id="ftwp-postcontent">
		<?php
			global $post;

			$content = get_the_content();
			$content = apply_filters( 'the_content', $content );

			if(stristr($content, 'ftwp-postcontent')){
				$content = substr($content,0 , -6);
				$content = preg_replace('<<div id="ftwp-postcontent">>','', $content);
				echo '<style>';
				echo '@media (min-width: 920px) {#ftwp-trigger{left: 50px!important;}}';
				echo '</style>';
			};

			$adsMarker  = "<!--cut_off-->";
			$pieces = explode($adsMarker, $content);
			$counter = count($pieces);

			for($i = 0; $i < $counter; $i++) {
		?>
			
			<div class="cut-off-item">
				<div class="entry-content-article">
					<div class="entry-content" >
						<?php echo $pieces[$i]; ?>
						<?php $i == $counter-1 ? get_template_part('template-parts/content', 'related-posts'):''?>
					</div>	
				</div>
				<?php if($i==0){ ?>

					<aside id="secondary" class="widget-area">

							<div class="relatedposts-container">

								<?php $category = get_the_category();
									  if (isset($category[0])): ?>
									    <div class="mk_related_caption">More from <?php echo wf_primary_category(); ?></div>
								<?php endif; ?>

								<div class="new_related clearfix">
									<?php
										$posts = getPostdataSidebar($count = 5, $category);

										if (!empty($posts)) { renderSinglePost($posts); };
									?>
								</div>
							</div>

							<div class="stick_point"></div>
							<div class="sidebar_ad_placement">
								<?php if( !glam_is_mobile() ){ echo "<div data-aaad='true' data-aa-adunit='/22181265/LHS_300v_1'></div>"; } ?>
							</div>

					</aside><!-- #secondary -->

				<?php } else { ?>
					 
					<aside class="widget-area secondary">
							<div class="stick_point"></div>
							<div class="sidebar_ad_placement">
									<?php if( !glam_is_mobile() ){ echo "<div data-aaad='true' data-aa-adunit='/22181265/LHS_300v_2'></div>"; } ?>
							</div>
					</aside>

				<?php }; ?>

				<div class="clearfix" style="display: block; clear: both;"></div>
			</div>

			<!-- AD MARKER -->
			<div class="cut-off-ad" style="margin-bottom: 30px; text-align: center;">
			    <p style="text-align: center !important; font-size: 12px; margin-bottom: 0px !important;">ADVERTISEMENT &#8231; CONTINUE READING BELOW</p>
			    <?php if ($i== 1) { ?>
	        	        <!-- OUTSTREAM MARKER IN CONTENT -->
			    		<div data-aaad='true' data-aa-adunit='/22181265/LHS_1x1_outstream'></div> 
			    <?php } else { ?>
				        <!-- AD MARKER IN CONTENT <?php echo($i); ?> -->
					    <div data-aaad='true' data-aa-adunit='/22181265/LHS_728v_2'></div>
		    			<div data-aaad='true' data-aa-adunit='/22181265/LHS_MOB_300v_2'></div>
	    		<?php } ?>	
			</div>

		<?php }; ?>

		</div>
		
	</div>

</article>
<!-- #post-<?php the_ID(); ?> -->