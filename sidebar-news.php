<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glaminati
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
$category = get_the_category();
?>

<!-- #secondary -->
