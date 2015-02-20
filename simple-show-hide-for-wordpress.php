<?php
/*
Plugin Name: Simple Show Hide for WordPress
Plugin URI: http://www.hoyce.com/wordpress-plugins
Description: Adds easy to use functionality for showing and hiding content upon clicking. Eg. in a FAQ
Version: 1.0
Author: Niklas Olsson
Author URI: http://www.hoyce.com
*/

add_action('wp_head', 'simple_show_hide_for_wordpress_add_css');
wp_enqueue_script('wp-simple-show-hide-for-wordpress', plugins_url("simple-show-hide-for-wordpress.js", __FILE__), array( 'jquery' ));

/**
 * Adds the css resource to the head tag.
 */
function simple_show_hide_for_wordpress_add_css() {
  $css_path = plugins_url( 'css/simple-show-hide-for-wordpress.css' , __FILE__ );
  echo '<link href="'.$css_path.'" rel="stylesheet" type="text/css" />';
}

?>
