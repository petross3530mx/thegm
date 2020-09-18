<?php
/* USER-AGENTS */
function check_user_agent ( $type = NULL ) {
  $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );
  if ( $type == 'bot' ) {
    // matches popular bots
    if ( preg_match ( "/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent ) ) {
      return true;
      // watchmouse|pingdom\.com are "uptime services"
    }
  } else if ( $type == 'browser' ) {
    // matches core browser types
    if ( preg_match ( "/mozilla\/|opera\//", $user_agent ) ) {
        return true;
    }
  } else if ( $type == 'mobile' ) {
    // matches popular mobile devices that have small screens and/or touch inputs
    // mobile devices have regional trends; some of these will have varying popularity in Europe, Asia, and America
    // detailed demographics are unknown, and South America, the Pacific Islands, and Africa trends might not be represented, here
    if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
      // these are the most common
      return true;
    } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
      // these are less common, and might not be worth checking
      return true;
    }
  }
  return false;
}

function wp_link_pages_titled($args = '') {
  $defaults = array(
    'before' => '<p>' . __('Pages:'),
    'after' => '</p>',
    'link_before' => '',
    'link_after' => '',
    'nextpagelink'     => __('Next page'),
    'previouspagelink' => __('Previous page'),
    'echo' => 1
  );
  $r = wp_parse_args( $args, $defaults );
  extract( $r, EXTR_SKIP );
  global $page, $numpages, $multipage, $more, $pagenow, $pages;
  $output = '';
  if($multipage) {
    $output .= $before;
    for($i = 1; $i <= $numpages; $i++) {
      if(!in_array($page, array($i - 1, $numpages))) continue;
      $part_content = $pages[$i-1];
      if($page === $numpages) {
        if($i < $numpages) continue;
        else
        {
          //echo adsense_mobile_banner();
          //echo '<input type="hidden" value="' . $part_content . '">';
          continue;
        }
      }

      $has_part_title = strpos( $part_content, '<h3' );
      if( $has_part_title ) {
        $end = strpos( $part_content, '</h3>' );
        //~~~ $title = trim( str_replace( '<h3>', '', substr( $part_content, $has_part_title, ($end-$has_part_title) ) ) );
        $title = strip_tags( substr( $part_content, $has_part_title, ($end-$has_part_title) ) );
        // Clean up title in H2
        $replace = array("<strong>","</strong>","<b>","</b>", "[ad_banner_320x100]");
        $title = str_replace($replace,"", $title);
      }
      $output .= ' ';
      if ( ($i != $page) || ((!$more) && ($page==1)) ) {
        $output .= _wp_link_page($i);
      }

      $output  = '<div class="cb-post-pagination clearfix">';
      $output .= '<div class="cb-post-pagination-page-number">Page ' . $page .' of '. $numpages  .'</div>';
      $output .= '<div id="cb-post-pagination-next" class="cb-post-pagination-next">'. _wp_link_page($i) . 'NEXT PAGE <span class="fa fa-arrow-right"></span></a></div>'; 
    }
    $output .= $after;
  }
  if ( $echo ) echo $output;
  return $output;
}