<?php
// ----- Generate the code 
// ----- for the first ads block -----
function generateFirstAdBlock () {
  return '<div class="ads" style="margin: 30px 0px; text-align: center;">
            <p style="text-align: center !important; font-size: 12px; margin-bottom: 0px !important;">ADVERTISEMENT</p>
            <div data-aaad="true" data-aa-adunit="/22181265/MHC_728v_1"></div>
            <div data-aaad="true" data-aa-adunit="/22181265/MHC_MOB_300v_1"></div>
  </div>';
}

// ----- Related cross-cut post ------
function related_cc_func($rel_id, $rel_title) {

	if(isset($rel_id)){
		$id = $rel_id;
	} else {
		$id = get_field('cc_post', 'option');
	}
    
    $layout = 'static';

    $r_text = '<div class="related_middle_' .$layout. '">';


    $r_text.= '<span class="related_middle_span">Stay Safe & Healthy</span>';

    if($layout=='static'):
     $r_text.= '<div class="related_middle_img"><a class="related_middle_link" href="' .get_permalink($id) .'">';
     $r_text.=  '<img src="'. get_the_post_thumbnail_url($id, 'medium') .'" alt="' .get_the_title($id). '"/>';
     $r_text.= '</a></div>';
    endif;

    if($layout=='static'){
      $r_text.= '<div class="related_middle_title"><a class="related_middle_link" href="' .get_permalink($id) .'">' .$rel_title. '</a></div>';
    } else {
      $r_text.= '<div class="related_middle_title">' .$rel_title. '</div>';
    }

    
    $r_text.= '<div class="layout-black"></div>';
    $r_text.= '<a class="related_middle_link" href="' .get_permalink($id) .'"></a>';
    $r_text.= '</div>';
    return $r_text;
}
// -----------------------------------

/**
 Inject an AD block after first paragrap or once reaching 200 charaters 
*/
function adsAfterFirstParagraph( $content ) {
  if(is_single()){
    $p = explode("</p>",$content,2);
    if( strlen($p[0]) > 200){
      $myarray = $p[0] . "</p>" . generateFirstAdBlock() . $p[1] . "</p>";
    } else {
      $p2 = explode("</p>", $p[1] , 2);
      $myarray = $p[0] . "</p>" . $p2[0] . "</p>" . generateFirstAdBlock() .  $p2[1] . "</p>";
    };
    return $myarray;
  } else {
    return $content;
  }
}

add_filter( 'the_content', 'adsAfterFirstParagraph' );


function getStayHomeQuery ($count) {

  // $limit = 4;
  // $max_num = count(get_field('grid_block'));;
  // $used_nums = array();

  // while($limit) {
  //   $random = rand(0, $max_num);
  //   $limit-=!isset($used_nums[$random]);
  //   $used_nums[$random]=true;
  // }

  // if($_GET['test']){
  //   	var_dump($used_nums);
  // }


  $postArr = array();
  if( have_rows('stay_home_repeater', 'option') ):
    while ( have_rows('stay_home_repeater', 'option') ) : the_row();
    	$id = get_sub_field('stay_home_post', 'option');
        $title = get_sub_field('stay_home_title', 'option');
    	$item = array("id"=>$id, "title"=>$title);
    	array_push($postArr, $item);
    endwhile;
    return $postArr;
  endif;
}

//  -----------------------------------
// Dynamically place our ads marker into the post content
// If the marker already exists, meaning it was placed manually, then dont do anything
function injectAdMarkers($content){
  if(is_single()):
    $myarray = '';
    $count = 4;
    $stayhome = getStayHomeQuery($count);
    

    if($_GET['test']){
    	print_r($stayhome[0]['title']);
    }

    if(strpos($content, "<!--cut_off-->")){
      return $content; // don't do anything if the content already has the marker
    }else{
      $h = preg_split("#(?=<h[23]>)#", $content);
      if(isset($h[0]) && trim($h[0])=='') array_shift($h);
      for($i=0; $i < count($h); $i++){
          // Per logic, place marker after every two <h> tags from 1 to 7 then place every 3
          if( (($i > 1 && $i < 7) AND ($i%2 == 0)) OR (($i>7) AND ($i%3 == 0))) {
            $myarray .= '<!--cut_off--><!--number_'.$i.'-->' . $h[$i];
            continue;
          } elseif ( ($i == 5) || ($i == 8) || ($i == 13) || ($i == 16) ) {
          	$count = $count-1;
            $myarray .= related_cc_func($stayhome[$count]['id'],$stayhome[$count]['title'] ) . '<!--number_'.$i.'-->' . $h[$i];
          } elseif ($i == 0) {
             $myarray .= $h[$i];
          } else {
             $myarray .= $h[$i];
          }

          // Per logic, place marker after every two <h> tags from 1 to 7 then place every 3
      }
      return $myarray;
  	}
  else:
      return $content;
  endif;
}
add_filter( 'the_content', 'injectAdMarkers' );
// -----------------------------------------------