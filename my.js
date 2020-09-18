jQuery(document).ready(function ($) {
	var $height_header = $('.entry-header').height();
	var $height_main = $('.entry-content-article').height();
	var $height_html = $('#page').outerHeight(true);
	var $height_footer = $height_html - ($height_main + $height_header) ;
	$("#text-10").sticky({
	  	topSpacing:61,
	  	bottomSpacing:$height_footer-300
	});
 });