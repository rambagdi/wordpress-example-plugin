<?php
/**
 * @package Example
 */
/*
Plugin Name: Example
Plugin URI: https://example.com/
Description:basic plugin development for beginners
Version: 0.1
Author: Example
Author URI: https://example.com/
License: GPLv2 or later
Text Domain: example
*/
/* function is which you can write code for you plugin functionality */
function example(){
  // you functionality code goes here
  $ex = "example result of plugin is showing";
  return $ex;
}

/* shortcode which we can add on any page or widget */
add_shortcode('EXAMPLE','example'); // you can add this shortcode on pages or plugin [EXAMPLE]



echo "Test";
?>
