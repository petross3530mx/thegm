<?php
/**
 * glaminati functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package glaminati
 */

if ( ! function_exists( 'glaminati_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function glaminati_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on glaminati, use a find and replace
		 * to change 'glaminati' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'glaminati', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'glaminati' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'glaminati_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'glaminati_setup' );

// Clean not neded data
function headcleaner_setup () {
  remove_action('wp_head', 'wp_generator');                // #1
  remove_action('wp_head', 'wlwmanifest_link');            // #2
  remove_action('wp_head', 'rsd_link');                    // #3
  remove_action('wp_head', 'wp_shortlink_wp_head');        // #4

  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);    // #5

  add_filter('the_generator', '__return_false');            // #6
  //add_filter('show_admin_bar','__return_false');            // #7

  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // #8
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action('after_setup_theme', 'headcleaner_setup');

function remove_styles () {
  wp_deregister_style ('wp-block-library');
  wp_deregister_style ('wpos-slick-style');
  wp_deregister_style ('wpsisac-pro-public-style');
  wp_deregister_style ('fixedtoc-style');
  wp_deregister_style ('glaminati-style');
}
add_action ('wp_print_styles','remove_styles',100);


// function footer_styles () {
//   wp_enqueue_style( 'wp-block-library', 'http://3.89.8.237/wp-includes/css/dist/block-library/style.min.css?ver=5.0.3' );
//   wp_enqueue_style( 'wpos-slick-style', 'http://3.89.8.237/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets/css/slick.css?ver=1.4' );
//   wp_enqueue_style( 'wpsisac-pro-public-style', 'http://3.89.8.237/wp-content/plugins/wp-slick-slider-and-image-carousel-pro/assets/css/wpsisac-pro-public.css?ver=1.4' );
//   wp_enqueue_style( 'fixedtoc-style', 'http://3.89.8.237/wp-content/plugins/fixed-toc/frontend/assets/css/ftoc.min.css?ver=5.0.3' );
// }
// add_action( 'get_footer', 'footer_styles' );

/******* COLUMN ******/
function webtreats_one_half( $atts, $content = NULL ) {
	extract( shortcode_atts( array(
	  'size' => 'normal',
	  'position' => 'first',
  ), $atts ) );

	$clearfix = NULL;
	if ($position == 'middle') { $position = '';}
	if ($position == 'first') { $position = ' first';}
	if ($position == 'last') { $position = ' last'; $clearfix = '<div class="clearfix"></div>';}
	if ($size == 'one_half') { $size = 'one_half';}
	if ($size == 'one_third') { $size = 'one_third';}
	if ($size == 'two_third') { $size = 'two_third';}
	if ($size == 'one_quarter') { $size = 'one_quarter';}
	if ($size == 'three_quarter') { $size = 'three_quarter';}

  return '<div class="' . $size . $position.'">'. do_shortcode( $content ) .'</div>'. $clearfix;

}
add_shortcode('column', 'webtreats_one_half');

// Remove the 2 main auto-formatters
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

// Before displaying for viewing, apply this function
// add_filter('the_content', 'webtreats_formatter', 10);
// add_filter('widget_text', 'webtreats_formatter', 10);

//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
@ini_set('pcre.backtrack_limit', 500000);
/**COLUMN END*/

/**
 * Enqueue scripts and styles.
 */
function glaminati_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  $disable_lazy_load = get_field('disable_lazyload', 'option');

  if (is_null($disable_lazy_load)) {
  $disable_lazy_load = true;
  }

  $jquery_in_footer = true;
  if ($disable_lazy_load == false) {
    $jquery_in_footer = false;
    
    // Add a filter to remove srcset attribute from generated <img> tag
    add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
  }

  // Register jquery in footer
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, $jquery_in_footer );
  wp_enqueue_script( 'jquery' );

  //
  wp_enqueue_script( 'glaminati-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
  wp_enqueue_script( 'my-js', get_template_directory_uri() . '/js/my.js', array('jquery'), '', true );

  wp_localize_script( 'my-js', 'app_ajax', 
    array(
      'url' => admin_url('admin-ajax.php')
    )
  );

  wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), '20151215', true );

  wp_enqueue_script( 'glaminati-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'glaminati_scripts' );

/* In this function we  move all scripts to footer */
function prefix_add_footer_styles() {

  // wp_enqueue_style( 'gothic' , '/wp-content/themes/thegm/fonts/custom-fonts.css' );
  // wp_enqueue_style( 'glaminati-style', get_stylesheet_uri() );
    /*global $wp_styles;
    $wp_styles->add_data('glaminati-style' , 'media', 'none' );*/
    //$wp_styles->add_data('glaminati-style' , 'onload', "if(media!='all')media='all'" );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );



/**
 * add property attribute to gravity form link tags
 *
 * @param array $handle style imfo
 *
 * @return mixed
 */
/*function pos_gform_edit_link_tag( $link, $handle ) {
  global $is_style_in_queue;

  // Bailout.
  if ( empty( $is_style_in_queue ) ) {
    return $link;
  }

  global $is_style_in_queue;

  // Find handle in array.
  $index = array_search( $handle, $is_style_in_queue );
  if ( false !== $index ) {

    // Remove script name from global param.
    unset( $is_style_in_queue[ $index ] );
    $is_style_in_queue = array_values( $is_style_in_queue );

    // Add property attribute to link tag.
    $link = str_replace( '/>', ' property="stylesheet" />', $link );
  }

  return $link;
}
add_filter( 'style_loader_tag', 'pos_gform_edit_link_tag', 999, 2 );*/


/**
 * Get stylesheet which are going to print in footer
 */
/*function pos_style_in_queue() {
  global $wp_styles, $is_style_in_queue;

  // There are no stylesheet to load in footer in starting.
  $is_style_in_queue = array();

  // Stylesheets which will going to load in footer.
  $is_style_in_queue = array_diff( $wp_styles->queue, $wp_styles->done );

  // Reset array value.
  $is_style_in_queue = array_values( $is_style_in_queue );

}
global $is_style_in_queue;
add_action( 'wp_footer', 'pos_style_in_queue', 0 );
*/


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widgets.
 */
require get_template_directory() . '/theme-inc/widgets.php';

/**
 * Help function.
 */
require get_template_directory() . '/theme-inc/helper.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Validation for script / style lines 
add_filter('script_loader_tag', 'clean_script_tag');
function clean_script_tag($input) {
  $input = str_replace("type='text/javascript' ", '', $input);
  return str_replace("'", '"', $input);
}

function webtreats_formatter($content) {
  $new_content = '';

  /* Matches the contents and the open and closing tags */
  $pattern_full = '{(\[raw\].*?\[/raw\])}is';

  /* Matches just the contents */
  $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

  /* Divide content into pieces */
  $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

  /* Loop over pieces */
  foreach ($pieces as $piece) {
    /* Look for presence of the shortcode */
    if (preg_match($pattern_contents, $piece, $matches)) {
       
       /* Append to content (no formatting) */
       $new_content .= $matches[1];
    } else {
       
       /* Format and append to content */
       $new_content .= wptexturize(wpautop($piece));      
    }
  }
  return $new_content;
}

// ----- RELATED POSTS START ------
function rel_middle_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'id' => '',
        'layout' => 'static'
    ), $atts );

    $id = $a['id'];
    $layout = $a['layout'];

    $bck_img = ($layout == 'parallax') ? get_the_post_thumbnail_url($id) : '';

    $r_text = '<div class="related_middle_' .$layout. '" style="background-image: url('. $bck_img .')">';


    $r_text.= '<span class="related_middle_span">Editor Choice</span>';

    if($layout=='static'):
     $r_text.= '<div class="related_middle_img"><a class="related_middle_link" href="' .get_permalink($id) .'">';
     $r_text.=  '<img src="'. get_the_post_thumbnail_url($id, 'medium') .'" alt="' .get_the_title($id). '"/>';
     $r_text.= '</a></div>';
    endif;

    if($layout=='static'){
      $r_text.= '<div class="related_middle_title"><a class="related_middle_link" href="' .get_permalink($id) .'">' .get_the_title($id). '</a></div>';
    } else {
      $r_text.= '<div class="related_middle_title">' .get_the_title($id). '</div>';
    }

    
    $r_text.= '<div class="layout-black"></div>';
    $r_text.= '<a class="related_middle_link" href="' .get_permalink($id) .'"></a>';
    $r_text.= '</div>';
    return $r_text;
}
add_shortcode( 'related_middle', 'rel_middle_shortcode' );
// -----------------------------------


/* Images - Grid*/
//require_once get_template_directory() . '/bad_code.php';


add_filter('the_content', 'add_share_button', 10);

function add_share_button ($content) {
  global $wp, $post;

  // Convert character to "UTF-8"
  $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");

  // check if $content is not empty
  if (!empty($content) && get_post_type()=='post') {
    // load and parse content
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($content);
    # remove <!DOCTYPE 
    $doc->removeChild($doc->doctype);           

    # remove <html><body></body></html>
    //print_r($doc->firstChild->firstChild->c14n());
    //$doc->replaceChild($doc->firstChild->firstChild, $doc->firstChild);
    // Get current page url
    $current_url = home_url(add_query_arg(array(),$wp->request));

    // Create facebook page url
    $facebookURL = 'https://www.facebook.com/dialog/share?app_id=274238320034242&display=popup&href='. $current_url . '&redirect_uri=' . $current_url;

    //Get title and clean it
    $post_title = get_the_title();
    $post_title= str_replace("&#8217;","",$post_title);
    $post_title= str_replace('&','And',$post_title); //replace bad char
    $post_title= str_replace('#038;','',$post_title); //replace bad char
    $post_title= str_replace('#8217;','',$post_title);
    $post_title= preg_replace('/^[\d]*\s*/','',$post_title);

    //Prepare description for Pinterest
    $pmDescription = $post_title . " ★ ";
    $pmDescription = rawurlencode($pmDescription);

    //Prepare UTM Campaign
    $utm_campaign = str_replace(' ','',$post_title);
    $utm_campaign = substr($utm_campaign, 0, 35);
  
    // Getting all images in content
    $imagesInContent = $doc->getElementsByTagName('img');

    // Check if post contain images
    if (!empty($imagesInContent)) {
      // Create image wrap 
      $glaminatiShareEl = $doc->createElement('div');
      $glaminatiShareEl->setAttribute('class','cb_shareit glaminati_share');

      // Loop through all images
      foreach ($imagesInContent as $image) {

        $imageClass = $image->getAttribute('class');

        $imageSrc = $image->getAttribute('src');

        $disable_lazy_load = get_field('disable_lazyload', 'option');

        if (is_null($disable_lazy_load)) {
          $disable_lazy_load = true;
        }

        if (!$disable_lazy_load) {
          $image->setAttribute('class', $imageClass." lazy ");
          $image->setAttribute('src', get_template_directory_uri().'/img/lazy_placeholder.gif');
          $image->setAttribute('data-original', $imageSrc);
        }

        if (strpos($imageClass, 'not_social') === false) {
          // Clone image wrap
          $glaminatiShareElClone = $glaminatiShareEl->cloneNode();

          // Create inner element
          $glaminatiShareElInner = $doc->createElement('div');
          $glaminatiShareElInner->setAttribute('class','soc_img_wrap');

          // Create inner element
          $glaminatiButWrap= $doc->createElement('div');
          $glaminatiButWrap->setAttribute('class','soc_but_wrap');

          // Append inner element to cloned element ($glaminatiShareElClone)
          $glaminatiShareElClone->appendChild($glaminatiShareElInner);

          // Replace image with image $glaminatiShareElClone
          $image->parentNode->replaceChild($glaminatiShareElClone,$image);

          //Append this image to inner element
          $glaminatiShareElInner->appendChild($image);
          //$glaminatiShareElInnerClone->appendChild($altElement);

          // ------------ Create button ------- */
          //Build image name
          $img_name = substr($imageSrc, strrpos($imageSrc, '/')+1);
          $img_name = str_replace(' ', '-', $img_name);
          $img_name = substr($img_name, -40, -12); //name-300x500.jpg

          // Create pinterst 
          $pinterestUrl =  '//www.pinterest.com/pin/create/button/?url=';
          $pinterestUrl .= get_permalink();
         // $pinterestUrl .= rawurlencode($utm_pinterest);
          $pinterestUrl .= '&media=' . $imageSrc;
          $pinterestUrl .= '&description=' . $pmDescription;

          // crate track event
          $trackUrl = $current_url .'/ -> '. basename($imageSrc);
          $pinterestTrack = "__gaTracker('send', 'social', 'Pinterest', 'SC - Btn Click', '" . $trackUrl . "', null)";
          $facebookTrack = "__gaTracker('send', 'social', 'Facebook', 'SC - Btn Click', '" . $trackUrl . "', null)";

          // create button wrapper
          $shareBtnWrapper = $doc->createElement('div');
          $shareBtnWrapper->setAttribute('class', 'social-links');

          // create pinterst button
          $pinBtn = $doc->createElement('a');
          $pinBtn->setAttribute('class', 'icon-pinterest');
          $pinBtn->setAttribute('href', $pinterestUrl);
          $pinBtn->setAttribute('data-pin-custom', 'true');
          $pinBtn->setAttribute('data-vars-social-target', $trackUrl);
          $pinBtn->setAttribute('action-target', $trackUrl); // for GTM pin analytics
          $pinBtn->setAttribute('rel', 'nofollow');
          $pinBtn->setAttribute('onclick', $pinterestTrack);
          $glaminatiButWrap->appendChild($doc->createTextNode('PIN IT'));
          $pinBtn->appendChild($glaminatiButWrap);

          // create Facebook button
          // $facebookBtn = $doc->createElement('a');
          // $facebookBtn->setAttribute('class', 'icon-facebook wwm_socialshare_imagewrapper facebook_custom');
          // $facebookBtn->setAttribute('href', $facebookURL);
          // $facebookBtn->setAttribute('rel', 'nofollow');
          // $facebookBtn->setAttribute('data-vars-social-facebook', $trackUrl);
          // $facebookBtn->setAttribute('onclick', $facebookTrack);
          // $facebookBtn->appendChild($doc->createTextNode('Facebook'));

          //Add pinterst and facebook button to $shareBtnWrapper
          $shareBtnWrapper->appendChild($pinBtn);
          // $shareBtnWrapper->appendChild($facebookBtn);

          $glaminatiShareElInner->appendChild($shareBtnWrapper);
        }
      }
    }
    $html = $doc->saveHTML();
    preg_match("/<body[^>]*>(.*?)<\/body>/is", $html, $matches);
    libxml_clear_errors();
    return $matches[1];
  }
  return $content;
} 

function get_posts_to_page($count = false, $lazy_after = false, $page = 1,  $queried_obj = false ){
  /** start page navi **/
    // Set page offset
    $page_navi_offset = 0;
    // Set page count.
    $on_page_count = $count ? $count  : 10;

    $category_prefix = '';

    // Set right current page
    if ($page < 1) {
      $page = 1;
    }

    // Set paxt page number
    $next_page = $page + 1;

    // Set prev page number
    ($page - 1) <= 0?$prev_page=false:$prev_page=$page-1;
    // Set post offset
    $page_navi_offset = $on_page_count * ($page - 1);

    $ofset_args = [
      'post_type'   => 'post',
      'numberposts' => -1,
    ];

    // Get left post
    if ($page_navi_offset > 0) {
      $ofset_args['offset'] = $page_navi_offset;
    }

    // Get data for category page
    if(is_category()) {
      $category_id = get_query_var('cat');
      $cat = get_category($category_id);
      if (isset($cat->term_id)) {
        $ofset_args['category'] = $cat->term_id;
        $category_prefix = 'category/'.$cat->slug.'/';
      }
    }

    if (is_tag() && isset($queried_obj->term_id)) {
      $ofset_args['tag__in'] = $queried_obj->term_id;
      $category_prefix = 'tag/'.$queried_obj->slug.'/';
    }

    // get offset post count
    $posts_amount = count(get_posts($ofset_args));

    /// Check if it is last page
    if($posts_amount > $on_page_count){
      $last_page = (int)($posts_amount / $on_page_count);
      ($posts_amount % $on_page_count)==0?$last_page=$last_page:$last_page=$last_page+1; //Получаем номер последней страницы
    } else {
      $last_page = false;
    }
  /** END PAGE NAVI **/

  /// Get post order field
  $orderby = 'date';
  if (function_exists('get_field')) {
    $order_option = get_field('order_post_by', 'option');
    if ($order_option == 'modified') {
      $orderby = 'modified';
    }
  }

  // Get post to page
  $args = array(
    'numberposts' => $on_page_count,
    'offset' => 0 + $page_navi_offset,
    'orderby' => $orderby,
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true
  );

  // load post by category id
  if(is_category()) {
    $args['category'] = $category_id;
  }

  // load post by tag id
  if (is_tag() && isset($queried_obj->term_id)) {
    $args['tag__in'] = $queried_obj->term_id;
  }

  // Get recent post
  $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
  $recent_posts_count  = count($recent_posts);
  $i = 1;
  foreach( $recent_posts as $recent ){
    if($i > $recent_posts_count || $i > $on_page_count) { return; } ?>
    <div class="article_holder cb-feature-<?php echo $i; ?> <?php echo addGridItemClasses($i); ?>">
      <div class="cb-grid-img nofade">
        <?php echo '<a href="' . get_permalink($recent["ID"]) . '">';
          if  ( has_post_thumbnail($recent["ID"]) ) {
            echo get_the_post_thumbnail($recent['ID'], "thumbnail");
          }
        echo '</a>'; ?>
      </div>
      <div class="cb-article-meta">
        <?php if(is_home())$h=2;
        elseif(is_category())$h=3;
        else $h=4;//h2 headers for home page and h4 for others ?>
        <h<?php echo $h ?>><a href="<?php the_permalink($recent["ID"]) ?>"><?php echo $recent["post_title"]; ?></a></h<?php echo $h ?>>
        <?php echo cb_byline(true, $recent["ID"]);  ?>
      </div>
    </div>
    <?php
    $i++;
  } ?>

  <div class="posts-navi">
    <?php if($prev_page){ ?>
      <span class="prev">
        <a href="<?php echo home_url(); $prev_page==1?print '/'.$category_prefix:print '/'.$category_prefix.'page/'.$prev_page.'/'; ?>"><span class="fa fa-arrow-left"></span> PREVIOUS PAGE</a>
      </span>
    <?php } ?>
    <?php if($last_page && $page!= $last_page) { ?>
      <span class="next">
        <a href="<?php echo home_url(); print '/'.$category_prefix.'page/'.$next_page.'/'; ?>">NEXT PAGE <span class="fa fa-arrow-right"></span></a>
      </span>
    <?php } ?>
  </div>
  <?php

  wp_reset_postdata();
}

// get random posts
function get_random_posts ($count = false, $lazy_after = false) {
  
  $on_page_count = $count ? $count : 10; // Set count if not specified
  
  $cat_id = get_query_var('cat'); // get curent category id
  
  $current_post_id = get_the_ID(); // get curent post id
  /// Get random posts to category page
  if(is_category())  {
    $random_posts = query_posts('&orderby=rand&showposts=' . $on_page_count);
    $current_post_id = false;
  } else {
    // get random posts to other not category page
    $random_posts = query_posts('cat='.$cat_id.'&orderby=rand&showposts=' . $on_page_count);
  }
  // Count random posts
  $random_posts_count  = count($random_posts);

  $i = 1;

  //  Print post 
  if( $random_posts && have_posts()) {
    while($random_posts) {
      if ($i> $random_posts_count || $i > $on_page_count) {return;}
      the_post();
      global $post;
      $current_post_id = $post->ID;
      if ($current_post_id && $current_post_id!==false) { ?>
        <div class="article_holder cb-feature-<?php echo $i; ?> <?php echo addGridItemClasses($i); ?>">
          <div class="cb-grid-img nofade">
            <?php echo '<a href="' . get_permalink() . '">';
              if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($current_post_id, 'thumbnail');
              }
            echo '</a>'; ?>
          </div>
          <div class="cb-article-meta">
            <h4><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h4>
            <?php echo cb_byline(true, $current_post_id); // print all category for current post ?>
          </div>
          <?php /* <a href="<?php the_permalink() ?>" class="cb-link"></a>*/ ?>
        </div>
        <?php
        $i++;
      } else { $i++; continue;}
    }
  } else echo '<div class="no_posts">no_posts</div>';
  wp_reset_postdata();
}

function getSingleRandomPost ($count, $category) {
  global $random_posts_id;
  $args = [
    'numberposts' => $count,
    'post_type'   => 'post',
    'orderby'     => 'rand',
    'post__in' => get_field('related_post_list', 'option')
  ];

  $posts = get_posts($args);

  return $posts;
}

function renderRelatedFooterPost ($posts) {
  global $random_posts_id;

  if (!is_array($random_posts_id)) {
    $random_posts_id = [];
  }

  $i = 1;
  foreach ($posts as $post) { setup_postdata($post); 
    $random_posts_id[] = $post->ID; 
    $post_id = $post->ID;?>
    <div class="rf-item rf-feature-<?php echo $i; ?> <?php echo addGridItemClasses($i); ?>">
      <a class="rf-fill" href="<?php echo get_permalink($post_id) ?>"></a>
      <div class="rf-grid-img nofade">
        <?php
          if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail($post_id, 'medium');
          } else {
            // isa_amp_featured_img('medium', $post_id);
          }
        ?>
      </div>
      <div class="rf-article-meta">
      	<div class="rf-meta-inner">
	        <h4><?php echo get_the_title($post_id); ?></h4>
	        <span class="rf-author"></span>
	        <?php echo cb_byline(true, $post_id); // print all category for current post ?>
	      </div>
      </div>
    </div>
  <?php $i++;
  }
  wp_reset_postdata(); // сброс
}

function renderSinglePost ($posts) {
  global $random_posts_id;

  if (!is_array($random_posts_id)) {
    $random_posts_id = [];
  }

  $i = 1;
  foreach ($posts as $post) { setup_postdata($post); 
    $random_posts_id[] = $post->ID; 
    $post_id = $post->ID;?>
    <div class="article_holder cb-footer cb-feature-<?php echo $i; ?> <?php echo addGridItemClasses($i); ?>">
      <div class="cb-grid-img nofade">
        <?php echo '<a href="' . get_permalink($post_id) . '">';
          if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail($post_id, 'thumbnail');
          } else {
            //isa_amp_featured_img('medium', $post_id);
          }
        echo '</a>'; ?>
      </div>
      <div class="cb-article-meta">
        <h4><a href="<?php the_permalink($post_id) ?>"><?php echo get_the_title($post_id); ?></a></h4>
        <?php echo cb_byline(true, $post_id); // print all category for current post ?>
      </div>
    </div>
  <?php $i++;
  }
  wp_reset_postdata(); // сброс
}

/**
 * Template tag to show featured image on AMP
 * @param string $size the post thumbnail size
 */
function isa_amp_featured_img( $size = 'medium', $myid ) {
    global $post;

    if ( has_post_thumbnail( $myid ) ) {

        $thumb_id = get_post_thumbnail_id( $myid );
        $img = wp_get_attachment_image_src( $thumb_id, $size );
        $img_src = $img[0];
        $w = $img[1];
        $h = $img[2];
        $alt = get_post_meta($post->ID, '_wp_attachment_image_alt', true);

        if(empty($alt)) {
            $attachment = get_post( $thumb_id );
            $alt = trim(strip_tags( $attachment->post_title ) ); 
        } ?>

        <amp-img id="amp-feat-img" src="<?php echo esc_url( $img_src ); ?>" <?php
            if ( $img_srcset = wp_get_attachment_image_srcset( $thumb_id, $size ) ) {
                ?> srcset="<?php echo esc_attr( $img_srcset ); ?>" <?php
            }
            ?> alt="<?php echo esc_attr( $alt ); ?>" layout="responsive" width="<?php echo $w; ?>" height="<?php echo $h; ?>">
        </amp-img>
        <?php
    }
}

// Show category in one line
if (!function_exists('cb_byline')) {
  function cb_byline ( $cb_cat = true, $cb_post_id = NULL ) {
    $cb_byline = '';
    $cb_cats = get_the_category($cb_post_id);
    if ( isset( $cb_cats ) && ( $cb_cat == true ) ) {
      $cb_cat_output = ' <div class="cb-category cb-byline-element glaminati-single-page-cat"> ';
      $i = 1;
      foreach($cb_cats as $category) {
        if ( $i != 1 ) { $cb_cat_output .= ', '; }
        $cb_cat_output .= ' <span>'.$category->cat_name.'</span><i class="fa fa-arrow-circle-o-right"> </i>';
        $i++;
      }
      $cb_cat_output .= '</div>';
    }

    if (!is_single()) {
      $cb_byline = '<div class="cb-byline">' . $cb_cat_output .'</div>';
    }

    return $cb_byline;
  }
}

// Debuger
function debug ($data) {
  if (!WP_DEBUG) return;

  echo "<pre>";
  print_r($data);
  echo "</pre>";
}

/*
  in PHP : 
  require_once get_template_directory() . '/wedding_forward_grid_fix.php';
  
  in HTML template : 
  <?php echo addGridItemClasses($i); ?>
  Example for /wp-content/themes/valenti/library/modules/cb-grid-6.php : <div class="cb-feature-<?php echo $i; ?> <?php echo addGridItemClasses($i); ?>">)
*/
function addGridItemClasses($grid_item_number) {
  $grid_item_classes = '';
  $ic = array('mk_gi');
  $tablet = $grid_item_number % 5;
  if(in_array($tablet, array(1, 2))) $ic[] = 'mk_tve';
  else $ic[] = 'mk_tvo';
  if(in_array($tablet, array(1, 2, 3))) $ic[] = 'mk_tle';
  else $ic[] = 'mk_tlo';
  $laptop = $grid_item_number % 7;
  if(in_array($laptop, array(1, 2, 3))) $ic[] = 'mk_lre';
  else $ic[] = 'mk_lro';
  $grid_item_classes = implode(' ', $ic);
  return $grid_item_classes;
}

if (!function_exists('ads_for_single_post')) {
  function ads_for_single_post ($current_page, $post_id) {
    // Check if ACF function 'get_field' exist
    if (function_exists('get_field')) {
      // Get curent page option
      $ads_off = get_field('disable_adds_for', $post_id);
      
      if ($ads_off == null) {
        $ads_off = 'enable';
      }

      // Get ads content
      $ads_content =  get_field('ads_after_content', 'option');

      // Check if need to show ads
      if ($ads_off == 'enable' || ($ads_off == 1 && $current_page != 1) || ($ads_off == '123' && !in_array($current_page, ['1', '2', '3']))) {
        echo $ads_content;
      }
    }
  }
}

// Print post category
if (!function_exists('post_cat_list')) {
  function post_cat_list ($post_cats, $sep = ',', $post_id) {
    $cat_iter = 1;
    $output = '';
    foreach($post_cats as $category){
      $output .= '<a rel="v:url" property="v:title" href="'. get_category_link($category->term_id).'">';
        $output .= $category->name;
      $output .= '</a>';
      if (count($post_cats)-1 >= $cat_iter) {
        $output .= '<span class="sep">'.$sep.' </span>';
      }
      $cat_iter++;
    } 
    return $output;
  }
}


if (!function_exists('search_nav')) {
  function search_nav () {
    global $paged, $wp_query;
    $navigation = '';
    $max_page = $wp_query->max_num_pages;
    // Don't print empty markup if there's only one page.
    if ( $max_page > 1 ) {

      // set current page if not specified
      if ( !$paged )
        $paged = 1;

      $nextpage = intval($paged) + 1;

      ob_start(); ?>
        <div class="posts-navi">
          <?php if (!is_single() && $paged > 1 ) { ?>
            <span class="prev">
              <a href="<?php echo previous_posts( false ); ?>"><span class="fa fa-arrow-left"></span> <?php _e('PREVIOUS PAGE'); ?></a>
            </span>
          <?php } ?>
          <?php if ( !is_single() && ( $nextpage <= $max_page ) ) { ?>
            <span class="next">
              <a href="<?php echo next_posts( $max_page, false ); ?>"><?php _e('NEXT PAGE'); ?> <span class="fa fa-arrow-right"></span></a>
            </span>
          <?php } ?>
        </div>
      <?php 
      $navigation = ob_get_contents();
      ob_clean();
    }
    return $navigation;
  }
}


add_action('wp_ajax_load_more_latest_posts', 'load_more_latest_posts_callback');
add_action('wp_ajax_nopriv_load_more_latest_posts', 'load_more_latest_posts_callback');
function load_more_latest_posts_callback() {
  $data = $_POST;
  $all_posts_count = wp_count_posts('post');
  $publish_post_count = $all_posts_count->publish;

  if (!empty($data)) {
    $post_count = $_POST['postCount'];

    $args = array(
      'numberposts'=> 10,
      'orderby'  => 'modified',
      'offset'   => $post_count,
    );
    $lastposts = get_posts($args);
    $lastposts_count = count($lastposts);

    ob_start();
    foreach( $lastposts as $post ){ setup_postdata($post); ?>
      <div class="col-12 max latest_post__item">
        <a class="post-thumbnail" href="<?php the_permalink($post); ?>" aria-hidden="true">
          <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
        </a>
        <h3 class="entry-title"><a href="<?php// the_permalink($post); ?>" rel="bookmark"><?php// echo get_the_title($post); ?></a></h3> 
        <div class="breadcrumbs entry-meta-details"><?php echo get_the_category_list('','', $post->ID); ?> <span><?php echo get_the_modified_date('', $post->ID); ?></span>
        </div>
        <div class="entry-content-f"><?php echo apply_filters( 'the_excerpt', get_the_excerpt($post) ); ?></div>
      </div>
    <?php }
    wp_reset_postdata();

    $posts_html = ob_get_contents();
    ob_clean();

    $new_post_count = $publish_post_count - $post_count - $lastposts_count;
    
    wp_send_json_success([
      'posts_html'     => $posts_html,
      'new_post_count' => $new_post_count,
    ]);
  } else {
    wp_send_json_error([
      'message' => 'No data was sendes'
    ]);
  }
}

add_action('wp_ajax_load_more_latest_cats', 'load_more_latest_cats_callback');
add_action('wp_ajax_nopriv_load_more_latest_cats', 'load_more_latest_cats_callback');
function load_more_latest_cats_callback () {
  $data = $_POST;
  if (!empty($data)) {
    $post_count = $_POST['postCount'];
    $args = array(
      'numberposts'   => get_option('posts_per_page'),
      'offset'        => $post_count,
      'post_type'     => 'post',
      'category_name' => $_POST['catSlug'],
      'orderby'       => 'modified',
      'order'         => 'DESC',
    );

    $posts = get_posts($args);
    ob_start();
    foreach( $posts as $post ){ 
      setup_postdata($post);
      $the_modified_date = get_the_modified_date('', $post);
      $the_modified_date = apply_filters( 'the_modified_date', $the_modified_date )
     ?>
      <article id="post-<?php echo $post->ID; ?>" <?php post_class('', $post->ID); ?>>
        <div class="row">
          <div class="col-6 image-p">
            <a class="post-thumbnail" href="<?php the_permalink($post->ID); ?>" aria-hidden="true">
              <?php echo  get_the_post_thumbnail($post->ID, 'post-thumbnail'); ?>
            </a>
          </div>
          <div class="col-6">
          <header class="entry-header">
            <h3 class="entry-title">
              <a href="<?php echo esc_url( get_permalink($post->ID) ); ?>" rel="bookmark">
                <?php echo $post->post_title; ?>  
              </a>
            </h3>
          </header><!-- .entry-header -->
          <div class="entry-content">
            <?php echo apply_filters( 'the_excerpt', get_the_excerpt($post) ); ?>
            <div class="breadcrumbs entry-meta-details">
              Updated on 
              <span content="<?php echo $the_modified_date; ?>">
                <time>
                  <?php echo $the_modified_date; ?>
                </time>
              </span> &middot; 
              <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                <span itemprop="name">by <?php the_author(); ?></span>
              </span>
            </div>
          </div><!-- .entry-content -->
        </div>
      </article><!-- #post-## -->
    <?php }
    wp_reset_postdata();

    $posts_html = ob_get_contents();
    ob_clean();
    
    wp_send_json_success([
      'posts_html'     => $posts_html,
    ]);
  }
}



function disable_embeds_code_init() {

 // Remove the REST API endpoint.
 remove_action( 'rest_api_init', 'wp_oembed_register_route' );

 // Turn off oEmbed auto discovery.
 add_filter( 'embed_oembed_discover', '__return_false' );

 // Don't filter oEmbed results.
 remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

 // Remove oEmbed discovery links.
 remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

 // Remove oEmbed-specific JavaScript from the front-end and back-end.
 remove_action( 'wp_head', 'wp_oembed_add_host_js' );
 add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );

 // Remove all embeds rewrite rules.
 add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

 // Remove filter of the oEmbed result before any HTTP requests are made.
 remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}

add_action( 'init', 'disable_embeds_code_init', 9999 );

function disable_embeds_tiny_mce_plugin($plugins) {
  return array_diff($plugins, array('wpembed'));
}

function disable_embeds_rewrites($rules) {
  foreach($rules as $rule => $rewrite) {
    if(false !== strpos($rewrite, 'embed=true')) {
      unset($rules[$rule]);
    }
  }
  return $rules;
}



add_action( 'init', function () {
  $disable_lazy_load = get_field('disable_lazyload', 'option');

  if (is_null($disable_lazy_load)) {
    $disable_lazy_load = true;
  }

  if (!$disable_lazy_load) {
    add_filter( 'post_thumbnail_html', 'filter_images', 10 );
    add_filter( 'get_avatar', 'filter_images', 200 );  
  }
}, 9999 );

function filter_images( $content ) {
  $matches = array();
  preg_match_all( '/<img[\s\r\n]+.*?>/is', $content, $matches );

  $search = array();
  $replace = array();
  $_skip_images_classes = ['a3-notlazy'];
  $_placeholder_url = get_template_directory_uri().'/img/lazy_placeholder.gif';

  if ( is_array( $_skip_images_classes ) ) {
    $skip_images_preg_quoted = array_map( 'preg_quote_with_wildcards', $_skip_images_classes );
    $skip_images_regex = sprintf( '/class=".*(%s).*"/s', implode( '|', $skip_images_preg_quoted ) );
  }

  $i = 0;
  foreach ( $matches[0] as $imgHTML ) {

    // don't to the replacement if a skip class is provided and the image has the class, or if the image is a data-uri
    if ( ! (is_array( $_skip_images_classes ) && preg_match( $skip_images_regex, $imgHTML ) ) && ! preg_match( "/src=['\"]data:image/is", $imgHTML ) && ! preg_match( "/src=.*lazy_placeholder.gif['\"]/s", $imgHTML ) ) {
      $i++;
      // replace the src and add the data-src attribute
      $replaceHTML = '';
      $replaceHTML = preg_replace( '/<img(.*?)src=/is', '<img$1src="' .$_placeholder_url . '" data-lazy-type="image" data-original=', $imgHTML );
      $replaceHTML = preg_replace( '/<img(.*?)srcset=/is', '<img$1srcset="" data-srcset=', $replaceHTML );

      // add the lazy class to the img element
      if ( preg_match( '/class=["\']/i', $replaceHTML ) ) {
        $replaceHTML = preg_replace( '/class=(["\'])(.*?)["\']/is', 'class=$1lazy lazy-hidden $2$1', $replaceHTML );
      } else {
        $replaceHTML = preg_replace( '/<img/is', '<img class="lazy lazy-hidden"', $replaceHTML );
      }

      array_push( $search, $imgHTML );
      array_push( $replace, $replaceHTML );
    }
  }

  $search = array_unique( $search );
  $replace = array_unique( $replace );

  $content = str_replace( $search, $replace, $content );

  // Temporary cleanup 
  $content = str_replace("Click NEXT PAGE below to browse the gallery!", "", $content);
  $content = str_replace("<hr>", "", $content);

  return $content;
}


function preg_quote_with_wildcards( $what ){
  // Perform preg_quote, but still allow `.*` to be used in the class list as a wildcard.
  return str_replace( array( '\*', '\.' ), '', preg_quote( $what, '/' ) );
}

// add_action( 'amp_post_template_css', 'xyz_amp_my_additional_css_styles' );

// function xyz_amp_my_additional_css_styles( $amp_template ) {}

// add_filter( 'amp_post_template_data', function( $data ) {
//   $data['amp_component_scripts'] = array_merge(
//     $data['amp_component_scripts'],
//     array(
//       'amp-auto-ads' => 'https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js',
//     )
//   );
//   return $data;
// });

function wpse_remove_empty_links( $menu ) {
      return str_replace( '<a href="#">', '<a>', $menu );
};

add_filter( 'wp_nav_menu', 'wpse_remove_empty_links' );


//  -----------------------------------
// Dynamically place our ads marker into the post content
// If the marker already exists, meaning it was placed manually, then dont do anything
function injectAdMarkers($content){

  if(strpos($content, "<!--cut_off-->")){
      return $content; // don't do anything if the content already has the marker

  } else {
      $myarray = '';
      $h3 = explode("<h3>",$content);

      for($i=0; $i < count($h3); $i++){
          // Per logic, place marker every h3 4 times, then place every 3 -- old logic
          //if( ($i > 1 && $i < 5) || (($i-5)%3 == 0 && $i != 1)) {  -- old logic
        
        // Per logic, place marker after every two <h> tags from 1 to 7 then place every 3
          if( (($i > 1 && $i < 7) AND ($i%2 == 0)) OR (($i>7) AND ($i%3 == 0))) {
             $myarray .= '<!--cut_off--><h3>' . $h3[$i];
             continue;
          }elseif($i == 0) {
             $myarray .= $h3[$i];
          }else{
             $myarray .= '<h3>'. $h3[$i];
          };
      };
      return $myarray;
    };
}
add_filter( 'the_content', 'injectAdMarkers' );
// -----------------------------------------------


// ----- Generate the code 
// ----- for the first ads block -----
function generateFirstAdBlock () {
  //<p style="text-align: center !important; font-size: 12px; margin-bottom: 0px !important;">ADVERTISEMENT</p>
  return '<div class="cut-off-ad" style="margin: 30px 0px; text-align: center;">
            <p style="text-align: center !important; font-size: 12px; margin-bottom: 0px !important;">ADVERTISEMENT ‧ CONTINUE READING BELOW</p>
            <div data-aaad="true" data-aa-adunit="/22181265/LHS_728v_1"></div>
            <div data-aaad="true" data-aa-adunit="/22181265/LHS_MOB_300v_1"></div>
  </div>';
}

/**
 Inject an AD block after first paragrap or once reaching 200 charaters 
*/
function adsAfterFirstParagraph( $content ) {
    if(is_single()):
      $p = explode("</p>",$content,2);
      if( strlen($p[0]) > 200){
        $myarray = $p[0] . "</p>" . generateFirstAdBlock() . $p[1] . "</p>";
      } else {
        $p2 = explode("</p>", $p[1] , 2);
        $myarray = $p[0] . "</p>" . $p2[0] . "</p>" . generateFirstAdBlock() .  $p2[1] . "</p>";
      };
      return $myarray;
    endif;
      return $content;
}

add_filter( 'the_content', 'adsAfterFirstParagraph' );
// -----------------------------------

/*
 Check out if the current element need to be show on mobile
*/
function glam_is_mobile() { 
      return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

/*
 * retrieve the number of
 * images match in single content
 */
function the_image_count($id) {
    $post = get_post($id);
    $content = $post->post_content;
    $result = substr_count($content, '<img');
    echo $result;
}

/*
 * retrieve author url
 */
function mh_author_url() {
    $url = get_author_posts_url(get_the_author_meta('ID'));
    return $url;
}

/*
  Show page navigation on search page
*/
if ( ! function_exists( 'cb_page_navi' ) ) {
    function cb_page_navi() {

        $cb_pagination_type = 'off';
        
        if ( is_home() ) {
            $cb_pagination_type = ot_get_option( 'cb_hp_infinite', 'off' );
        } elseif ( is_category() ) {

            if ( function_exists( 'get_tax_meta' ) ) {
                $cb_cat_id = get_query_var('cat');
                $cb_pagination_type = get_tax_meta( $cb_cat_id, 'cb_cat_infinite' );
            }

        }

        if ( ( $cb_pagination_type == NULL ) || ( $cb_pagination_type == 'off' ) || ( $cb_pagination_type == 'cb-off' ) ) {

            global $wpdb, $wp_query;
            $cb_posts_per_page = intval(get_query_var('posts_per_page'));
            $cb_paged = intval(get_query_var('paged'));
            $cb_number_posts = $wp_query->found_posts;
            $cb_max_num_pages = $wp_query->max_num_pages;

            if ( $cb_number_posts <= $cb_posts_per_page ) { return; }
            if ( empty( $cb_paged ) || $cb_paged == 0 ) {
                $cb_paged = 1;
            }

            $cb_first_page = $cb_paged - 3;

            if ( $cb_first_page <= 0 ) { $cb_first_page = 1; }

            $cb_last_page = $cb_paged + 3;
            if ( ( $cb_last_page - $cb_first_page ) != 6) {
                $cb_last_page = $cb_first_page + 6;
            }
            if ( $cb_last_page > $cb_max_num_pages ) {
                $cb_first_page = $cb_max_num_pages - 6;
                $cb_last_page = $cb_max_num_pages;
            }
            if ( $cb_first_page <= 0 ) {
                $cb_first_page = 1;
            }
            echo '<nav class="cb-page-navigation"><ol class="cb-page-navi clearfix">'."";

            for ( $i = $cb_first_page; $i <= $cb_last_page; $i++ ) {
                if ( $i == $cb_paged ) {
                    echo '<li class="cb-current">' . $i . '</li>';
                } else {
                    echo '<li><a href="'. get_pagenum_link( $i ) . '">' . $i . '</a></li>';
                }
            }
            if (  get_previous_posts_link() != NULL ) {
                echo '<li class="cb-prev-link">';
                previous_posts_link('<i class="fa fa-long-arrow-left"></i>');
                echo '</li>';
            }

            if ( get_next_posts_link() != NULL ) {
                echo '<li class="cb-next-link">';
                next_posts_link('<i class="fa fa-long-arrow-right"></i>');
                echo '</li></ol></nav>';
            }
        } elseif ( $cb_pagination_type == 'infinite-load' ) {

            if (  get_next_posts_link() != NULL ) {
                $cb_load_more_text = __('Load More', 'cubell');
                echo '<nav id="cb-blog-infinite-load" class="cb-infinite-scroll">' . get_next_posts_link( $cb_load_more_text ) . '</nav>';
            } else {
                echo '<div class="cb-no-more-posts">' . __('No more articles', 'cubell') . '</div>';
            }

        } elseif ( $cb_pagination_type == 'infinite-scroll' ) {

            if (  get_next_posts_link() != NULL ) {

                echo '<nav id="cb-blog-infinite-scroll" class="cb-infinite-scroll cb-hidden">' . get_next_posts_link() . '</nav>';
            } else {
                echo '<div class="cb-no-more-posts">' . __('No more articles', 'cubell') . '</div>';
            }
        }
    }
}

/*
 * Retrive the primary category value
 */
function wf_primary_id($post_id){

    $categories = get_the_category($post_id);
    $cat_isnt_one = count((array)$categories)>1; // meaning that post has primary category

    if($cat_isnt_one):
        $prim_cat_id = get_post_meta($post_id, '_yoast_wpseo_primary_category',true);
        return esc_html($prim_cat_id);
    else:
        return esc_html($categories[0]->cat_ID);
    endif;
}

/*
 * Retrive the primary category value
 */
function wf_primary_category($post_id){
    $categories = get_the_category($post_id);
    $cat_isnt_one = count((array)$categories)>1; // meaning that post has primary category

    if($cat_isnt_one):
        $prim_cat_id = get_post_meta($post_id, '_yoast_wpseo_primary_category',true);
        $catname = get_cat_name($prim_cat_id );
        return esc_html($catname);
    else:
        return esc_html($categories[0]->name);
    endif;
}

function wf_primary_catlink($post_id){
    $categories = get_the_category($post_id);
    $cat_isnt_one = count((array)$categories)>1; // meaning that post has primary category

    if($cat_isnt_one):
        $prim_cat_id = get_post_meta(get_the_ID(), '_yoast_wpseo_primary_category',true);
        $catlink = get_category_link($prim_cat_id);
        return esc_url($catlink);
    else:
        return esc_url(get_category_link($categories[0]->term_id));
    endif;
}

/*
 * Defines the right misrodata breadcrumb,
 * has some conditions if category has parent
 */
function glam_breadcrumbs($post_id){

  $categories = get_the_category($post_id);
  $cat_isnt_one = count((array)$categories)>1;

  if( $cat_isnt_one and yoast_get_primary_term_id() ): // primary category is defined
    $child_catname  = get_cat_name(yoast_get_primary_term_id());
    $child_catlink  = get_category_link(yoast_get_primary_term_id());
  else:        // primary category not defined
    $child_catname  = esc_html($categories[0]->name);
    $child_catlink  = esc_url(get_category_link($categories[0]->term_id));
  endif;

  $result  = '<ol itemscope="" itemtype="https://schema.org/BreadcrumbList" class="nav_breadcrumbs">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> 
            <a itemprop="item" href="'. get_home_url() .'"><span itemprop="name">HAIRSTYLES</span></a>
            <meta itemprop="position" content="1">
            </li> &raquo; ';
  $result .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                  <a itemprop="item" href="'.$child_catlink.'"><span itemprop="name">'.$child_catname.'</span></a>
                  <meta itemprop="position" content="2">
              </li>';
  $result .= '</ol>';

  echo $result;
}
?>