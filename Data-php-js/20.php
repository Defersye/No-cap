<?php

/**
 * Plugin Name: Admin Counter
 * Plugin URI: https://example.com/admin-counter
 * Description: Adds a field to the admin page displaying the number of messages and pages.
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://example.com
 */

// Check if the user has the appropriate capabilities
if (!current_user_can('manage_options')) {
   return;
}

// Get the number of posts and pages
$post_count = wp_count_posts('post')->publish;
$page_count = wp_count_posts('page')->publish;

// Add the custom field to the admin page
function admin_counter_admin_footer()
{
   global $post_count, $page_count;
   echo "<div id='wp-admin-counter'>"
      . "<p><strong>Number of posts:</strong> $post_count</p>"
      . "<p><strong>Number of pages:</strong> $page_count</p>"
      . "</div>";
}
add_action('admin_footer', 'admin_counter_admin_footer');
