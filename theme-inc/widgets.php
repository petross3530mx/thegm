<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function glaminati_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'glaminati' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Follow Us', 'glaminati' ),
		'id'            => 'ffollowus',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer First Line 1', 'glaminati' ),
		'id'            => 'ffl-1',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Second Line 1', 'glaminati' ),
		'id'            => 'fsl-1',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Second Line 2', 'glaminati' ),
		'id'            => 'fsl-2',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Second Line 3', 'glaminati' ),
		'id'            => 'fsl-3',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Third Line', 'glaminati' ),
		'id'            => 'ftl',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Menu Widget', 'glaminati' ),
		'id'            => 'menu',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="menu-widgettitle">',
		'after_title'   => "</h6>",
	) );
	
		register_sidebar( array(
		'name'          => esc_html__( 'ad_article_1', 'glaminati' ),
		'id'            => 'ad_article_1',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => "",
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'ad_article_2', 'glaminati' ),
		'id'            => 'ad_article_2',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => "",
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'ad_article_3', 'glaminati' ),
		'id'            => 'ad_article_3',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => "",
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'ad_article_4', 'glaminati' ),
		'id'            => 'ad_article_4',
		'description'   => esc_html__( 'Add widgets here.', 'glaminati' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => "",
	) );
			register_sidebar(
            array(
                'name' => 'MobilePinterestWidget',
                'id' => 'mobiwidget',
                'description' => '1- Drag multiple widgets here 2- Drag the "Valenti Multi-Widget Widget" to the sidebar where you want to show the multi-widgets.',
                'before_widget' => '<div id="%1$s" class="widget mobiwidget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<div class="hidden">',
                'after_title' => '</div>'
    ) );

}
add_action( 'widgets_init', 'glaminati_widgets_init' );