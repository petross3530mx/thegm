<?php
/**
 * The template for displaying Author archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header(); ?>

<div class="category-layout-v2">
<div id="cb-content" class="wrapfs wrap clearfix">

<div class="author-details cb-cat-container">
	<?php $author_id = get_the_author_meta('id'); ?>
	<div class="author-col">
		<img src="<?php the_field('user_photo', 'user_'. $author_id) ?>" alt="" class="author-image posts-author-img ">
		<h1><?php the_author_meta('first_name'); ?>  <?php the_author_meta('last_name'); ?></h1>
		<div class="author-roles">
			<span class="author-roles-item">
				<?php the_field('user_role', 'user_'. $author_id) ?>
			</span>
			<ul class="fsl-list author-list">
				<li class="wbsite">
					<?php if(get_the_author_meta('url')): ?>
						<a href="<?php the_author_meta('url'); ?>" style="background-image: none;">
							<svg height="20px" viewBox="0 0 480 480" width="20px" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm207.566406 324.078125-68.253906 11.777344c7.8125-28.652344 12.03125-58.164063 12.558594-87.855469h71.929687c-.902343 26.117188-6.398437 51.871094-16.234375 76.078125zm-431.367187-76.078125h71.929687c.527344 29.691406 4.746094 59.203125 12.558594 87.855469l-68.253906-11.777344c-9.835938-24.207031-15.332032-49.960937-16.234375-76.078125zm16.234375-92.078125 68.253906-11.777344c-7.8125 28.652344-12.03125 58.164063-12.558594 87.855469h-71.929687c.902343-26.117188 6.398437-51.871094 16.234375-76.078125zm215.566406-27.472656c28.746094.367187 57.421875 2.984375 85.761719 7.832031l28.238281 4.871094c8.675781 29.523437 13.34375 60.078125 13.878906 90.847656h-127.878906zm88.488281-7.9375c-29.238281-4.996094-58.828125-7.695313-88.488281-8.0625v-96c45.863281 4.40625 85.703125 46.398437 108.28125 107.511719zm-104.488281-8.0625c-29.660156.367187-59.242188 3.066406-88.480469 8.0625l-19.800781 3.425781c22.578125-61.128906 62.417969-103.136719 108.28125-107.523438zm-85.753906 23.832031c28.335937-4.847656 57.007812-7.464844 85.753906-7.832031v103.550781h-127.878906c.535156-30.769531 5.203125-61.324219 13.878906-90.847656zm-42.125 111.71875h127.878906v103.550781c-28.746094-.367187-57.421875-2.984375-85.761719-7.832031l-28.238281-4.871094c-8.675781-29.523437-13.34375-60.078125-13.878906-90.847656zm39.390625 111.488281c29.238281 5.003907 58.824219 7.714844 88.488281 8.105469v96c-45.863281-4.410156-85.703125-46.402344-108.28125-107.515625zm104.488281 8.105469c29.660156-.390625 59.242188-3.101562 88.480469-8.105469l19.800781-3.425781c-22.578125 61.128906-62.417969 103.136719-108.28125 107.523438zm85.753906-23.875c-28.335937 4.847656-57.007812 7.464844-85.753906 7.832031v-103.550781h127.878906c-.535156 30.769531-5.203125 61.324219-13.878906 90.847656zm58.117188-111.71875c-.527344-29.691406-4.746094-59.203125-12.558594-87.855469l68.253906 11.777344c9.835938 24.207031 15.332032 49.960937 16.234375 76.078125zm47.601562-93.710938-65.425781-11.289062c-11.761719-38.371094-33.765625-72.808594-63.648437-99.601562 55.878906 18.648437 102.21875 58.457031 129.074218 110.890624zm-269.871094-110.890624c-29.882812 26.792968-51.886718 61.230468-63.648437 99.601562l-65.425781 11.289062c26.855468-52.433593 73.195312-92.242187 129.074218-110.890624zm-129.074218 314.3125 65.425781 11.289062c11.761719 38.371094 33.765625 72.808594 63.648437 99.601562-55.878906-18.648437-102.21875-58.457031-129.074218-110.890624zm269.871094 110.890624c29.882812-26.792968 51.886718-61.230468 63.648437-99.601562l65.425781-11.289062c-26.855468 52.433593-73.195312 92.242187-129.074218 110.890624zm0 0"/></svg>
						</a>
					<?php endif; ?>
				</li>
				<?php if(get_the_author_meta('facebook')): ?>
						<li class="fb">
							<a target="_blank" href="<?php the_author_meta('facebook'); ?>" rel="noopener noreferrer"></a>
						</li>
				<?php endif; ?>

				<?php if(get_the_author_meta('pinterest')): ?>
						<li class="pin">
							<a href="<?php the_author_meta('pinterest'); ?>" target="_blank" rel="noopener noreferrer"></a>
						</li>
				<?php endif; ?>

				<?php if(get_the_author_meta('instagram')): ?>
						<li class="ins">
							<a href="<?php the_author_meta('instagram'); ?>" target="_blank" rel="noopener noreferrer"></a>
						</li>
				<?php endif; ?>

				<?php if(get_the_author_meta('twitter')): ?>
						<li class="fb">
							<a target="_blank" href="<?php the_author_meta('twitter'); ?>" rel="noopener noreferrer"></a>
						</li>
				<?php endif; ?>

				<?php if(get_the_author_meta('linkedin')): ?>
						<li class="ldn">
							<a target="_blank" href="<?php the_author_meta('linkedin'); ?>" rel="noopener noreferrer"></a>
						</li>
				<?php endif; ?>
			</ul>
		</div>
		<?php the_author_meta('description'); ?>
		<p></p>
	</div>
</div>

<div class="p-cont-r category-posts-wrap author-posts">
		<?php query_posts($query_string . '&orderby=modified'); ?>
		<?php 
		if(have_posts()){ while(have_posts()) { the_post();
			get_template_part( 'template-parts/content', 'cat' );
		}} else {
			get_template_part( 'template-parts/content', 'none' );
		}
		$count = count_user_posts();
		?>
</div>
</div>
</div>
</div> <!-- end /#cb-content -->

<?php get_footer(); ?>
