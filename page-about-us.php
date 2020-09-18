<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="page-about" <?php post_class(); ?>>
					<!-- Block about company -->
					<header class="ab-header cb-cat-container">
						<div class="ab-image">
							<!-- <img loading="lazy" width="900" height="600" src="https://menshaircuts.com/wp-content/uploads/2018/11/tp-how-to-choose-right-haircut-for-face-shapes-men.jpg" > -->
							<?php the_post_thumbnail();  ?>
						</div>
						<div class="ab-description">
							<div class="ab-title"><h1><?php the_title(); ?></h1></div>
							<div class="ab-desk"><?php the_content(); ?></div>
						</div>
					</header>
					<div class="cb-cat-container gap-3em">
						<!-- Block expert -->
						<div class="ab-flex-expert">
							<div class="flex-expert-titel">
								<h2><?php the_field('expert_title'); ?></h2>
							</div>
<?php
if( have_rows('experts') ):
    while ( have_rows('experts') ) : the_row();
?>							
							<div class="author-details ab-flex-expert-item">
							<div class="author-col">
										<img loading="lazy" src="<?php the_sub_field('expert_photo'); ?>" alt="" class="author-image lazyloaded" data-lazy-src="<?php the_sub_field('expert_photo'); ?>" data-was-processed="true"><noscript><img src="<?php the_sub_field('expert_photo'); ?>" alt="" class="author-image"></noscript>
							</div>
							<div class="author-col">
								<h2><?php the_sub_field('expert_title'); ?></h2>
								<div class="author-roles">
									<span class="author-roles-item">
										Expert			</span>
										<ul class="fsl-list author-list">
									<li class="wbsite">
										<?php if(get_sub_field('expert_web')): ?>
											<a href="<?php the_sub_field('expert_web'); ?>" style="background-image: none;">
												<svg height="20px" viewBox="0 0 480 480" width="20px" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm207.566406 324.078125-68.253906 11.777344c7.8125-28.652344 12.03125-58.164063 12.558594-87.855469h71.929687c-.902343 26.117188-6.398437 51.871094-16.234375 76.078125zm-431.367187-76.078125h71.929687c.527344 29.691406 4.746094 59.203125 12.558594 87.855469l-68.253906-11.777344c-9.835938-24.207031-15.332032-49.960937-16.234375-76.078125zm16.234375-92.078125 68.253906-11.777344c-7.8125 28.652344-12.03125 58.164063-12.558594 87.855469h-71.929687c.902343-26.117188 6.398437-51.871094 16.234375-76.078125zm215.566406-27.472656c28.746094.367187 57.421875 2.984375 85.761719 7.832031l28.238281 4.871094c8.675781 29.523437 13.34375 60.078125 13.878906 90.847656h-127.878906zm88.488281-7.9375c-29.238281-4.996094-58.828125-7.695313-88.488281-8.0625v-96c45.863281 4.40625 85.703125 46.398437 108.28125 107.511719zm-104.488281-8.0625c-29.660156.367187-59.242188 3.066406-88.480469 8.0625l-19.800781 3.425781c22.578125-61.128906 62.417969-103.136719 108.28125-107.523438zm-85.753906 23.832031c28.335937-4.847656 57.007812-7.464844 85.753906-7.832031v103.550781h-127.878906c.535156-30.769531 5.203125-61.324219 13.878906-90.847656zm-42.125 111.71875h127.878906v103.550781c-28.746094-.367187-57.421875-2.984375-85.761719-7.832031l-28.238281-4.871094c-8.675781-29.523437-13.34375-60.078125-13.878906-90.847656zm39.390625 111.488281c29.238281 5.003907 58.824219 7.714844 88.488281 8.105469v96c-45.863281-4.410156-85.703125-46.402344-108.28125-107.515625zm104.488281 8.105469c29.660156-.390625 59.242188-3.101562 88.480469-8.105469l19.800781-3.425781c-22.578125 61.128906-62.417969 103.136719-108.28125 107.523438zm85.753906-23.875c-28.335937 4.847656-57.007812 7.464844-85.753906 7.832031v-103.550781h127.878906c-.535156 30.769531-5.203125 61.324219-13.878906 90.847656zm58.117188-111.71875c-.527344-29.691406-4.746094-59.203125-12.558594-87.855469l68.253906 11.777344c9.835938 24.207031 15.332032 49.960937 16.234375 76.078125zm47.601562-93.710938-65.425781-11.289062c-11.761719-38.371094-33.765625-72.808594-63.648437-99.601562 55.878906 18.648437 102.21875 58.457031 129.074218 110.890624zm-269.871094-110.890624c-29.882812 26.792968-51.886718 61.230468-63.648437 99.601562l-65.425781 11.289062c26.855468-52.433593 73.195312-92.242187 129.074218-110.890624zm-129.074218 314.3125 65.425781 11.289062c11.761719 38.371094 33.765625 72.808594 63.648437 99.601562-55.878906-18.648437-102.21875-58.457031-129.074218-110.890624zm269.871094 110.890624c29.882812-26.792968 51.886718-61.230468 63.648437-99.601562l65.425781-11.289062c-26.855468 52.433593-73.195312 92.242187-129.074218 110.890624zm0 0"/></svg>
											</a>
										<?php endif; ?>
									</li>
									<?php if(get_sub_field('expert_fb')): ?>
											<li class="fb">
												<a target="_blank" href="<?php the_sub_field('expert_fb'); ?>" rel="noopener noreferrer"></a>
											</li>
									<?php endif; ?>

									<?php if(get_sub_field('expert_pin')): ?>
											<li class="pin">
												<a href="<?php the_sub_field('expert_pin'); ?>" target="_blank" rel="noopener noreferrer"></a>
											</li>
									<?php endif; ?>

									<?php if(get_sub_field('expert_inst')): ?>
											<li class="ins">
												<a href="<?php the_sub_field('expert_inst'); ?>" target="_blank" rel="noopener noreferrer"></a>
											</li>
									<?php endif; ?>

									<?php if(get_sub_field('expert_ln')): ?>
											<li class="ldn">
												<a target="_blank" href="<?php the_sub_field('expert_ln'); ?>" rel="noopener noreferrer"></a>
											</li>
									<?php endif; ?>
								</ul>
								</div>
								<p><?php the_sub_field('expert_desc'); ?></p>
							</div>
							</div>
<?php
    endwhile;
endif;
?>						
						</div>
						<!-- Block authors -->
						<h2><?php the_field('authors_title'); ?></h2>						
						<div class="ab-flex-authors">
<?php
if( have_rows('authors') ):
    while ( have_rows('authors') ) : the_row();
?>	
							<div class="ab-flex-item">
								<img src="<?php the_sub_field('a_photo'); ?>" alt="">
								<span class="ab-name"><a href="<?php the_sub_field('a_link'); ?>"><?php the_sub_field('a_title'); ?></a></span>
							</div>
<?php
    endwhile;
endif;
?>							
						</div>
						<!-- Block guests -->
						<h2><?php the_field('guest_title'); ?></h2>
						<div class="ab-flex-guests gap-3em">
<?php
if( have_rows('guests') ):
    while ( have_rows('guests') ) : the_row();
?>	
							<div class="ab-flex-item">
								<img src="<?php the_sub_field('g_photo'); ?>" alt="">
								<span class="ab-name"><a href="<?php the_sub_field('g_link'); ?>"><?php the_sub_field('g_title'); ?></a></span>
							</div>
<?php
    endwhile;
endif;
?>								
						</div>

					</div>
				</article><!-- #post-<?php the_ID(); ?> -->

				<style>
				#page-about .ab-flex-three h2 {
					margin-bottom: 0px;
				}
				#page-about p {
					font-size: 16px;
					line-height: 22px;
				}
				#page-about .ab-flex-three p {
					margin-top: 0px;
				}
				#page-about .ab-title h1 {
					margin-bottom: 0px;
					margin-top: 0px;
				}
				#page-about .ab-desk p {
					margin-top: 0px;
				}
				.ab-header.cb-cat-container {
					align-items: top;
				    position: relative;
				    margin-top: 50px;
				}
				.ab-header:after {
				    content: '';
				    display: block;
				    clear: both;
				}
				.ab-header > div {
				}
				.ab-image {
					display: block;
				    max-width: 500px;
				    float: left;
				    margin-right: 30px;
				}
				.ab-image img {
				    max-width: 100%;
				    height: auto;
				}
				.ab-description {
					display: block;
				}
				.ab-flex-three {
				    display: flex;
				}
				.ab-flex-three .ab-flex-item {
				    width: 33%;
				}
				.ab-flex-three .ab-flex-item + .ab-flex-item {
					margin-left: 20px;
				}
				.ab-flex-authors .ab-flex-item {
				    width: 25%;
				    margin-bottom: 30px;
				}
				.ab-flex-guests .ab-flex-item {
				    width: 25%;
				    margin-bottom: 30px;
				}
				.ab-flex-authors, .ab-flex-guests {
				    display: flex;
				    flex-wrap: wrap;
				    text-align: center;
				}
				.ab-flex-authors img, .ab-flex-guests img {
					display: block;
					width: 150px;
				    border-radius: 50%;
				    margin: 0 auto;
				}
				.ab-flex-authors a {
				    text-decoration: none;
				    font-size: 18px;
				}
				.ab-flex-authors .ab-name, .ab-flex-guests .ab-name  {
					margin-top: 13px;
    				display: inline-block;
				}
				.ab-flex-authors a, .ab-flex-guests a {
				    text-decoration: none;
				    font-size: 18px;
				}
				.ab-grey {
					color: grey;
				}
				.gap-3em {
					padding-bottom: 3em;
				}
				@media (max-width: 769px) {
					.ab-header.cb-cat-container {display: block; margin-top: 30px;}
					.ab-image {float: none; margin-right: 0;}
					.ab-description {width: auto; padding-left: 0;}
					.ab-flex-three  {display: block;}
					.ab-flex-three .ab-flex-item {width: 100%;}
					.ab-flex-three .ab-flex-item + .ab-flex-item {margin-left: 0;}
					.author-details.cb-cat-container {margin-left: 0px; margin-right: 0px;}
					.ab-flex-authors img, .ab-flex-guests img {max-width: 100%;}
					.ab-flex-authors .ab-flex-item,.ab-flex-guests .ab-flex-item {width: 50%; padding: 8px;}

				}
				</style>

				<?php

			endwhile;
			?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<style>/*styles only for pages*/
	#colophon {
		padding-bottom: 0px;
	}
	</style>
<?php
get_footer();
