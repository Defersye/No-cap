<?php
/*
Plugin Name: Time-Based Background
Plugin URI: https://example.com/time-based-background
Description: Changes the background color of a page based on the computer time.
Version: 1.0
Author: Your Name
Author URI: https://example.com
*/

function time_based_background()
{
   if (is_page()) {
      $current_time = current_time('H');
      if ($current_time >= 6 && $current_time < 18) {
         $background_color = '#ccc';
      } else {
         $background_color = '#fff';
      }
      echo 'style="background-color: ' . $background_color . ';"';
   }
}
add_action('body_class', 'time_based_background');
