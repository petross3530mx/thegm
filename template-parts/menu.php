<?php if ( is_active_sidebar( 'menu' ) ) : ?>
	<div id="menu-sidebar">
		<div class="menu-sidebar-inner">
			<?php dynamic_sidebar( 'menu' ); ?>
		</div>
	</div>
<?php endif; ?>