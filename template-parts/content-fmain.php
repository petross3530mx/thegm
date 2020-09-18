<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glaminati
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">

	<div class="container grid-f">
	<div class="row">
<div class="col-12 title-f"><h6>
<span>Featured Posts<br>
<small>Latest Men's Lifestyle Features</small></span></h6></div>
	<div class="col-6 max">
<ul>
<?php
global $post;

// записываем $post во временную переменную $tmp_post
$tmp_post = $post;
$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 4 );
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
	?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php
} 

// возвращаем былое значение $post
$post = $tmp_post;
?>
</ul>



	

		</div>
	<div class="col-6 bp-2">

	<div class="row">
<div class="col-6">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>	</div>
<div class="col-6">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>	</div>
</div>
	<div class="row">
<div class="col-6">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>	</div>
<div class="col-6">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>		<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div></div>
</div>
	


</div>
</div>




	<div class="row latest">
<div class="col-12 title-f"><h6>
<span>Latest Posts<br>
<small>All The Latest From Lifestyle For Men</small></span></h6></div>
	<div class="col-6 max">
	
	<a class="post-thumbnail" href="https://menshaircuts.com/medium-length-hairstyles-guide/" aria-hidden="true">
		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	
	<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>
	<div class="entry-content-f">
	<p>When you are lost in search of a suitable hairdo for you, these medium length hairstyles will help you out. Every man knows that we are what we wear, and only real gentlemen know that a hairstyle also takes part. Also, every man should find a perfect style for him, so it’s very important to create a style that will reflect your inner self.</p>
	
	
	
	</div><!-- .entry-content -->
		</div>

			<div class="col-6 max">
	
	<a class="post-thumbnail" href="https://menshaircuts.com/medium-length-hairstyles-guide/" aria-hidden="true">
		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	
		<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>
	<div class="entry-content-f">
	<p>When you are lost in search of a suitable hairdo for you, these medium length hairstyles will help you out. Every man knows that we are what we wear, and only real gentlemen know that a hairstyle also takes part. Also, every man should find a perfect style for him, so it’s very important to create a style that will reflect your inner self.</p>
	
	
	
	</div><!-- .entry-content -->
		</div>
		
					<div class="col-6 max">
	
	<a class="post-thumbnail" href="https://menshaircuts.com/medium-length-hairstyles-guide/" aria-hidden="true">
		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	
		<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>
	<div class="entry-content-f">
	<p>When you are lost in search of a suitable hairdo for you, these medium length hairstyles will help you out. Every man knows that we are what we wear, and only real gentlemen know that a hairstyle also takes part. Also, every man should find a perfect style for him, so it’s very important to create a style that will reflect your inner self.</p>
	
	
	
	</div><!-- .entry-content -->
		</div>			<div class="col-6 max">
	
	<a class="post-thumbnail" href="https://menshaircuts.com/medium-length-hairstyles-guide/" aria-hidden="true">
		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	
		<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>
	<div class="entry-content-f">
	<p>When you are lost in search of a suitable hairdo for you, these medium length hairstyles will help you out. Every man knows that we are what we wear, and only real gentlemen know that a hairstyle also takes part. Also, every man should find a perfect style for him, so it’s very important to create a style that will reflect your inner self.</p>
	
	
	
	</div><!-- .entry-content -->
		</div>

</div>




	<div class="row">
<div class="col-12 title-f"><h6>
<span>Popular this Month<br>
<small>Latest Men's Features</small></span></h6></div>



<div class="col-3">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>		<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div></div>
<div class="col-3">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>		<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div></div>

<div class="col-3">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>		<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div></div>
<div class="col-3">		<img src="https://menshaircuts.com/wp-content/uploads/2018/05/tp-medium-length-hairstyles-guide.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Men’s Medium Length Hairstyles To Always Be On Point" width="900" height="600">	</a>
<h3 class="entry-title"><a href="https://menshaircuts.com/medium-length-hairstyles-guide/" rel="bookmark">Men’s Medium Length Hairstyles To Always Be On Point</a></h3>	<div class="breadcrumbs entry-meta-details">
<a rel="v:url" property="v:title" href="https://menshaircuts.com/hairstyles-trends/">Hairstyles</a>			
				 ·  
				<span itemprop="dateModified" content="May 29, 2018"><time>May 29, 2018</time></span>
			</div>	</div>

	



</div>




	</div>
	
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
