<?php
/*
Plugin Name: Custom Post Background
Plugin URI: https://example.com/custom-post-background
Description: Adds a custom background to a post page in WordPress.
Version: 1.0
Author: Your Name
Author URI: https://example.com
*/

function add_post_background()
{
   if (is_single()) {
      $post_id = get_the_ID();
      $background_image = get_post_meta($post_id, '_custom_post_background', true);
      if (!empty($background_image)) {
         echo 'style="background-image: url(' . esc_url($background_image) . ');"';
      }
   }
}
add_action('body_class', 'add_post_background');

function add_post_background_meta_box()
{
   add_meta_box('custom_post_background', __('Custom Background', 'textdomain'), 'custom_post_background_callback', 'post', 'side');
}
add_action('add_meta_boxes', 'add_post_background_meta_box');

function custom_post_background_callback()
{
   global $post;
   $background_image = get_post_meta($post->ID, '_custom_post_background', true);
?>
   <input type="hidden" name="custom_post_background_nonce" value="<?php echo wp_create_nonce(plugin_basename(__FILE__)); ?>">
   <p>
      <label for="custom_post_background"><?php _e('Background Image', 'textdomain'); ?></label>
      <input type="text" name="custom_post_background" id="custom_post_background" value="<?php echo esc_url($background_image); ?>" class="widefat">
      <input type="button" class="button" value="<?php esc_attr_e('Upload Image', 'textdomain'); ?>" id="custom_post_background_button">
   </p>
<?php
}

function save_post_background($post_id)
{
   if (!isset($_POST['custom_post_background_nonce']) || !wp_verify_nonce($_POST['custom_post_background_nonce'], plugin_basename(__FILE__))) {
      return;
   }
   if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
   }
   if (!current_user_can('edit_post', $post_id)) {
      return;
   }
   if (isset($_POST['custom_post_background'])) {
      update_post_meta($post_id, '_custom_post_background', sanitize_text_field($_POST['custom_post_background']));
   }
}
add_action('save_post', 'save_post_background');
?>